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
                <a class="button button-primary" href="{{ route('article') }}">Lire la suite</a>
            </div>
        </div>
    @empty
        <p>Il n'y a aucune catégories disponible</p>
    @endforelse
    
</div>
@endsection