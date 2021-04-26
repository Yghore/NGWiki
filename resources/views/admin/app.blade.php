<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skeleton.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">   
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="https://kit.fontawesome.com/ec884d7317.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/7lyjv76uy8ci9kacnftg4kf8eanj5ua8t06bnlt99cwpx4z2/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    @stack('head')
</head>
<body>
    <div class="dashboard">
        <nav>  
            <ul>
                <li><i class="fas fa-igloo"></i><a href="{{ route('home') }}">Accueil</a></li>
                
                @if (Auth::user()->isPermission("PAGE_EDIT") || Auth::user()->isPermission("PAGE_ADD"))
                    <div class="separator">Wiki</div>
                @endif
                @if (Auth::user()->isPermission("PAGE_EDIT"))
                    <li><i class="fas fa-newspaper"></i><a href="{{ route('admin.pages') }}">Liste des pages</a></li>
                    <li><i class="fas fa-check-circle"></i><a href="{{ route('admin.modify') }}">Valider une modification</a></li>
                @endif
                @if (Auth::user()->isPermission("PAGE_ADD"))
                    <li><i class="fas fa-plus-circle"></i><a href="{{ route('admin.page.add') }}">Ajouter une pages</a></li>


                @endif

                @if (Auth::user()->isPermission("CATEGORY_MANAGE"))
                    <li><i class="fas fa-database"></i><a href="{{ route('admin.category') }}">Gestion des catégories</a></li>
                @endif
                @if (Auth::user()->isPermission("USER_VIEW"))
                    <div class="separator">Gestion des utilisateurs</div>
                    <li><i class="fas fa-users"></i><a href="{{ route('admin.user.list') }}">Liste des utilisateurs</a></li>
                @endif                
                @if (Auth::user()->isPermission("USER_ADD"))
                    <li><i class="fas fa-user-plus"></i><a href="#">Ajouter un utilisateur</a></li>
                @endif          
                
                <div class="separator">Images</div>
                <li><i class="fas fa-images"></i><a href="{{ route('admin.image.add') }}">Ajouter une image</a></li>
                <li><i class="fas fa-images"></i><a href="{{ route('admin.image.list') }}">Liste des images</a></li>

                <div class="separator">Articles</div>
                <li><i class="fas fa-plus-circle"></i><a href="#">Ajouter un article</a></li>
                <li><i class="fas fa-newspaper"></i><a href="#">Liste des articles</a></li>
            </ul>
        </nav> 
        <div class="admin-container">
            @yield('content')
        </div>
    </div>
    @stack('js')
</body>