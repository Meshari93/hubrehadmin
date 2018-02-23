<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Property;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
             $user = User::where('id' , 'LIKE', "%$keyword%")
                         ->orwhere('first_name' , 'LIKE', "%$keyword%")
                         ->orwhere('last_name' , 'LIKE', "%$keyword%")
                        ->orwhere('email' , 'LIKE', "%$keyword%")->paginate($perPage);
        }
        else {
            $user = User::paginate($perPage);
        }

        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'first_name' => 'required|string|max:100',
        'last_name' => 'required|string|max:100',
        'email' => 'required|string|email|max:100|unique:users',
        'password' => 'required|string|min:8',
         ]);

        $requestData = $request->except('roles');
        $roles = $request->roles;
        $user = User::create($requestData);
        if ($request->roles !== NULL) {
            $user->assignRole($roles);
        }
        return redirect('admin/user')->with('flash_message', 'User added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
      $validatedData = $request->validate([
        'first_name' => 'required|alpha|max:100',
        'last_name' => 'required|alpha|max:100',
        'email' => 'required|string|email|max:100|unique:users',
        'password' => 'required|string|min:8',
         ]);

        $requestData = $request->all();
        $user = User::findOrFail($id);
        $user->update($requestData);
        if ($request->roles !== NULL) {
          $user->syncRoles($request->roles);
        }
         return redirect('admin/user')->with('flash_message', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        User::destroy($id);

        return redirect('admin/user')->with('flash_message', 'User deleted!');
    }


    /**
     * Convert User to Ouner Role
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function addRole(Request $request)
    {
      $validatedData = $request->validate([
        'roles' => 'required|string',
          ]);
         $id = Auth::id();
        $user = User::findOrFail($id);
        $user->syncRoles($request->roles);
        return redirect('/home')->with('flash_message', 'User deleted!');
    }
}
