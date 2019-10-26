<link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>

<nav>
  <div id="brand">
    <div id="logo"></div>
    <a class="blogg" href="{{ url('/') }}">
      {{ config('app.name', 'Laravel') }}
    </a>
  </div>

  <div id="menu">
    <div id="menu-toggle">
      <div id="menu-icon">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </div>
    <ul>
      <li><a href="/" class="lol">Home</a></li>
      <li><a href="/about" class="lol">About</a></li>
      <li><a href="/services" class="lol">Services</a></li>
      <li><a href="/posts" class="lol">Blog</a></li>
    </ul>



    <!-- Right Side Of Navbar -->
    <ul class="loginreg">
      <!-- Authentication Links -->
      @if (Auth::guest())
      <li><a class="reg" href="{{ route('login') }}">Login</a></li>
      <li><a class="reg" href="{{ route('register') }}">Register</a></li>
      @else
      <li class="dropdown">
        <a href="#" class="reg" data-toggle="dropdown" role="button" aria-expanded="false">
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
          <li><a href="/dashboard">Dashboard</a></li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
              Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </li>
      @endif
    </ul>
  </div>
</nav>
