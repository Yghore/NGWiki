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
        <li class="navbar-right"><a href="{{ route('login') }}">Connexion</a></li>
        
    </ul>
</nav>