<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $role = Role::where('name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $role = Role::paginate($perPage);
        }

        return view('admin.role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
      $permission = Permission::get()->pluck('name', 'name');
        return view('admin.role.create', ['permission' => $permission]);
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
            'name' => 'required|alpha_dash|unique:roles|max:255',
            'permissions' => 'required|max:255',
         ]);


        $requestData = $request->except('permissions');
        $permissions=$request->permissions;
        $role = Role::create($requestData);
        if ($request->permissions !== NULL) {
              $role->givePermissionTo($permissions);
        }
        return redirect('admin/role')->with('flash_message', 'Role added!');
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
        $role = Role::findOrFail($id);

        return view('admin.role.show', compact('role'));
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
        $permission = Permission::get()->pluck('name', 'name');
        $role = Role::findOrFail($id);

        return view('admin.role.edit', compact('role', 'permission'));
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
            'name' => 'required|alpha_dash|unique:roles|max:255',
            'permissions' => 'required|max:255',
         ]);

        $requestData = $request->except('permissions');
        $permissions=$request->permissions;

        $role = Role::findOrFail($id);
        $role->update($requestData);

        if ($request->permissions != NULL) {
          $role->syncPermissions($permissions);
        }
        return redirect('admin/role')->with('flash_message', 'Role updated!');
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
        Role::destroy($id);

        return redirect('admin/role')->with('flash_message', 'Role deleted!');
    }
}
