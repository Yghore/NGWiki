@extends('admin.app')

@section('title', 'NGWiki - Dashboard')


@section('content')

<h1 class="title"><i class="fas fa-user-edit"></i> Editer un utilisateur</h1>
<form>
    <div class="row">
        <label for="email">Adresse email :</label>
        <input class="u-full-width" type="email" placeholder="john.doe@gmail.com" id="email">
        <label for="permission">Permission :</label>
        <ul class="checkbox">
            <li><input type="checkbox" id="ADMIN_VIEW" value="ADMIN_VIEW"><label for="ADMIN_VIEW">ADMIN_VIEW</label></li>
            <li><input type="checkbox" id="PAGE_EDIT" value="PAGE_EDIT"><label for="PAGE_EDIT">PAGE_EDIT</label></li>
            <li><input type="checkbox" id="CATEGORY_MANAGE" value="CATEGORY_MANAGE"><label for="CATEGORY_MANAGE">CATEGORY_MANAGE</label></li>
            <li><input type="checkbox" id="PAGE_ADD" value="PAGE_ADD"><label for="PAGE_ADD">PAGE_ADD</label></li>
            <li><input type="checkbox" id="USER_VIEW" value="USER_VIEW"><label for="USER_VIEW">USER_VIEW</label></li>
            <li><input type="checkbox" id="USER_EDIT" value="USER_EDIT"><label for="USER_EDIT">USER_EDIT</label></li>
            <li><input type="checkbox" id="USER_ADD" value="USER_ADD"><label for="USER_ADD">USER_ADD</label></li>
            <li><input type="checkbox" id="ARTICLE_ADD" value="ARTICLE_ADD"><label for="ARTICLE_ADD">ARTICLE_ADD</label></li>
            <li><input type="checkbox" id="ARTICLE_EDIT" value="ARTICLE_EDIT"><label for="ARTICLE_EDIT">ARTICLE_EDIT</label></li>
            <li><input type="checkbox" id="PERMISSION_MANAGE" value="PERMISSION_MANAGE"><label for="PERMISSION_MANAGE">PERMISSION_MANAGE</label></li>
        
        </ul>
        <input class="button-primary" type="submit" value="Submit">
    </div>
</form>

@endsection



