@extends('layouts.app')

@section('title', 'NGWiki - Accueil')

@section('content')
<div class="row">
    @if($errors->any())
        <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
    @endif
    <h1 class="title title-decoration">Connexion : </h1>
    <form method="POST" action="{{ route('login.authenticate') }}">
        <div class="row">
            @csrf
            <label for="email">Votre adresse email :</label>
            <input class="u-full-width" type="email" name="email" placeholder="john.doe@gmail.com" id="email">
            <label for="password">Votre mot de passe :</label>
            <input class="u-full-width" type="password" name="password" placeholder="************" id="password">
            <input class="button-primary" type="submit" value="Submit">
        </div>
    </form>
</div>     
@endsection