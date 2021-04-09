<nav class="navbar">
    <ul>
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('category') }}">Categories</a></li>
        <div class="dropdown">
            <a class="dropbtn">Articles 
              <i class="fas fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div> 
          @guest
            <li class="navbar-right"><a href="{{ route('login.view') }}">Connexion</a></li>    
          @endguest
          @auth
              <li class="navbar-right"><a href="#">{{ Auth::user()->name }}</a></li>
              @if (Auth::user()->isPermission(2))
                  <li class="navbar-right"><a href="{{ route('admin.dashboard') }}">Admin</a></li>
              @endif
          @endauth

        
    </ul>
</nav>