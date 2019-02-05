<header class="header_menu_area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2">
                <div class="header_logo">
                    <a href="{{action('User\UserHomeController@index')}}"><img src="{{asset('public/userassets/images/wms_logo.png')}}" class="png"></a>
                </div>
            </div>
            <div class="col-xl-10 text-right">
                <nav class="navbar navbar-expand-lg navbar-light main_menu">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul>
                            <li>
                                <a class="nav-link" href="{{action('User\UserHomeController@index')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            @if(isset(Auth::user()->email))
                            <li class="dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ isset(Auth::user()->name) ? Auth::user()->name : 'User name' }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item transition" type="button" value="Edit Profile" data-toggle="modal" data-target="#ediModal1" href="#"><i class="fa fa-user-edit"></i> Update Profile</a>
                                    <a class="dropdown-item transition" href="#"><i class="fas fa-user-check"></i> {{ isset(Auth::user()->userType) ? Auth::user()->userType : 'User Type' }}</a>
                                    <a class="dropdown-item transition" href="#"><i class="fas fa-envelope"></i> {{ isset(Auth::user()->email) ? Auth::user()->email : 'User email' }}</a>
                                    <a class="dropdown-item transition" href="{{action('User\UserProfileController@index')}}"><i class="fas fa-user"></i> profile</a>
                                    <a class="dropdown-item transition" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-power-off"></i> logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                            @else
                            <li>
                                <a class="nav-link" href="{{route('login')}}">login</a>
                            </li>
                            @endif
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>