
      <nav class="navbar navbar-expand-md shadow-lg">
       
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                {{ config('app.name', 'online writing') }}
            </a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon text-white">menu</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                
                <ul class=" nav navbar-nav mr-auto text-white">
                  <li>
                    <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="/about">about</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="/services">services</a>
                  </li>
                  <li class="nav-item text-white">
                    <a class="nav-link text-white" href="/posts">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/posts">Sample papers</a>
                </li>
                 <!-- Right Side Of Navbar -->
                 @guest
                 <li class="nav-item">
                     <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                 </li>
                 @if (Route::has('register'))
                     <li class="nav-item">
                         <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                 @endif
             @else
                 <li class="nav-item dropdown text-white">
                     <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                         {{ Auth::user()->name }}
                     </a>

                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                         <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>
                         <a class="dropdown-item" href="/dashboard">Dashboard</a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>
                     </div>
                 </li>
             @endguest
                </ul>
              
            </div>
     
    </nav>



   