<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- <head> -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
         <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">
</head>

<body class="theme-red">
<!-- Page Loader -->

     <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ url('/home') }}">HUBREH</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li>
                      <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      <i class="material-icons">input</i>
                                  </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
              @if(Auth::check())
                  <form method="post" action="{{ url('addRole') }}" accept-charset="UTF-8" style="display:inline">
                      {{ csrf_field() }}
                      <input name="roles" value="owner" hidden>
                      <button type="submit" class="btn btn-primary waves-effect" title="Add Oner"><i class="fa fa-trash-o" aria-hidden="true"></i> Owner</button>
                  </form>
                    @else
                  <a href="{{ url('login') }}"> <button  class="btn btn-primary waves-effect" title="Add Oner"><i class="fa fa-trash-o" aria-hidden="true"></i> Login</button></a>
                  <a href="{{ url('register') }}"> <button  class="btn btn-primary waves-effect" title="Add Oner"><i class="fa fa-trash-o" aria-hidden="true"></i> regester</button></a>
                  @endif

            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                  <li style="padding: 5px;text-align:  center;">
                       </li>
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{ url('/home') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                     <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
     </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">

  @foreach($propertys as $property )
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
         <div class="card">
           <a href="{{ url('/display/' . $property->id) }}">
             <div class="header">
                 <div class="carousel slide" data-ride="carousel">
                       <div class="carousel-inner" role="listbox">
                         <div class="item active">
                           @if( $property->picture_home !=NULL  )
                           <img src="{{ URL::to('/images/store/sectionimage/' . $property->picture_home ) }}">
                             @endif
                         </div>
                       </div>
                  </div>
             </div>
              </a>
             <div class="body">
               <div class="col-md-5  ">
                 <h5>{{$property->name}}</h5>
               </div>
               <div class="col-md-5  ">
                 <h6>{{$property->type}}</h6>
               </div>
               <div class="col-md-2 ">

                 <!-- <form method="POST" action="{{ url('addfavorites') }}" accept-charset="UTF-8" style="display:inline">
                     {{ csrf_field() }}
                     <input type="number" name="property_id" value="{{$property->id}}" hidden>
                  </form> -->

                  @if(Auth::check())
                    @php
                    $favoritedtat = 0;
                    @endphp

                   @foreach(Auth::user()->favorites as $favorite)

                   @if($favorite->property_id == $property->id && $favorite->user_id == Auth::user()->id)
                   @php
                   $favoritedtat = 1;
                   @endphp
                   @endif
                   @endforeach
                   @if($favoritedtat == 1)
                   <button data-propertyId="{{ $property->id }}_a" type="button"class="addFavorite btn btn-danger btn-circle  waves-effect waves-circle waves-float"><i class="addFavorite material-icons">favorite_border</i></button>
                    @elseif($favoritedtat == 0)
                    <button   data-propertyId="{{ $property->id }}_a" type="button"class="addFavorite btn btn-grey btn-circle waves-effect waves-circle waves-float col-red"><i class=" addFavorite material-icons ">favorite_border</i></button>

                    @endif
                  @endif
                </div>
                <br>
                <br>
              </div>
         </div>
      </div>
  @endforeach
           </div>
            </div>
     </section>



<!-- <script src="{{ asset('js/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script> -->
<!-- <script src="{{ asset('js/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script> -->
<script src="{{ asset('js/plugins/node-waves/waves.js') }}"></script>
<!-- <script src="{{ asset('js/plugins/jquery-countto/jquery.countTo.js') }}"></script> -->
<!-- <script src="{{ asset('/js/admin.js') }}"></script> -->
<script src="{{ asset('/js/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('/js/plugins/morrisjs/morris.js') }}"></script>
<script src="{{ asset('/js/plugins/chartjs/Chart.bundle.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.time.js') }}"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<!-- Select Plugin Js -->
 <script src="{{ asset('js/plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

 <!-- Slimscroll Plugin Js -->
<script src="{{ asset('js/plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

<!-- Bootstrap Colorpicker Js -->
<script src="{{ asset('js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('js/plugins/node-waves/waves.js') }}"></script>


<script src="{{ asset('js/plugins/jquery-countto/jquery.countTo.js') }}"></script>
<!-- <script src="{{ asset('/js/admin.js') }}"></script> -->
<script src="{{ asset('/js/plugins/raphael/raphael.min.js') }}"></script>


<!-- Autosize Plugin Js -->
 <script src="{{ asset('/js/plugins/autosize/autosize.js') }}"></script>

 <!-- Bootstrap Material Datetime Picker Plugin Js -->
<script src="{{ asset('/js/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

<!-- Moment Plugin Js -->
<script src="{{ asset('/js/plugins/momentjs/moment.js') }}"></script>

<script src="{{ asset('/js/plugins/morrisjs/morris.js') }}"></script>
<script src="{{ asset('/js/plugins/chartjs/Chart.bundle.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('/js/plugins/flot-charts/jquery.flot.time.js') }}"></script>

<script src="{{ asset('/js/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

<!-- Multi Select Plugin Js -->
<script src="{{ asset('/js/plugins/multi-select/js/jquery.multi-select.js') }}"></script>

<!-- Jquery Spinner Plugin Js -->
<script src="{{ asset('/js/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

<!-- Sweet Alert Plugin Js -->
<script src="{{ asset('/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

<!-- Bootstrap Tags Input Plugin Js -->
<script src="{{ asset('/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- JQuery Steps Plugin Js -->
<script src="{{ asset('/js/plugins/jquery-steps/jquery.steps.js') }}"></script>

<!-- Jquery Validation Plugin Css -->
<script src="{{ asset('/js/plugins/jquery-validation/jquery.validate.js') }}"></script>

<!-- noUISlider Plugin Js -->
<script src="{{ asset('/js/plugins/nouislider/nouislider.js') }}"></script>

<!-- Dropzone Plugin Js -->
<script src="{{ asset('/js/plugins/dropzone/dropzone.js') }}"></script>


<!-- Custom Js -->
<script src="{{ asset('/js/admin.js') }}"></script>
<script src="{{ asset('/js/pages/index.js') }}"></script>
<script src="{{ asset('/js/pages/forms/basic-form-elements.js') }}"></script>
<script src="{{ asset('/js/pages/forms/advanced-form-elements.js') }}"></script>
<script src="{{ asset('/js/pages/forms/form-wizard.js') }}"></script>
<script src="{{ asset('/js/pages/welcome/favorite.js') }}"></script>

<!-- Demo Js -->
<script src="{{ asset('/js/demo.js') }}"></script>
<script type="text/javascript">
  var url = "{{ route('addfavorites') }}";
  var token =  "{{ Session::token()}}";
</script>

</body>
</html>
