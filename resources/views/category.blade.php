@extends('layouts.app')

@section('title', 'NGWiki - Catégories')

@section('content')
<div class="row" style="font-size: 20px;">
    <h1 class="title-decoration">Listes des catégories</h1>
    @forelse ($categories as $category)
        <div class="card">
            <div class="card-header">
                <img src="{{ $category->icon }}" alt="" class="card-logo">
                <h3 class="title-decoration">{{ $category->title }}</h3>
            </div>
            <div>
                {{ $category->short_desc }}
            </div>
            <div class="card-footer">
                <p>Crée le {{ $category->created_at }}</p>
                <a class="button button-primary" href="{{ route('article', Str::slug($category->id . ' ' .$category->title, '-')) }}">Lire la suite</a>
            </div>
        </div>
    @empty
    <div style="text-align: center;">
        <h1>Aucune catégorie disponible ...</h1>
        <p class="muted">Vous souhaitez aider à remplir le wiki ? <a href="#">clique ici !</a></p>
    </div>
    @endforelse
    
</div>
@endsection