@extends('layouts.app')

@section('title', 'NGWiki - Accueil')

@section('content')
<div class="row">
    <h1 class="title title-decoration">Connexion : </h1>
    <form>
        <div class="row">
            <label for="email">Votre adresse email :</label>
            <input class="u-full-width" type="email" placeholder="john.doe@gmail.com" id="email">
            <label for="password">Votre mot de passe :</label>
            <input class="u-full-width" type="password" placeholder="************" id="password">
            <input class="button-primary" type="submit" value="Submit">
        </div>
    </form>
</div>     
@endsection