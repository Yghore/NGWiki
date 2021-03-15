@extends('layouts.app')

@section('title', 'NGWiki - La Fusée')

@push('head')

  <script src="{{ asset('js/article.js') }}"></script>
  <style>
    div#sommaire_article 
    {
      animation: visible 2s;   
	}
	div.article 
	{
		animation: visible 2s;
	}
    @keyframes visible
    {
      from 
      {
        opacity: 0;
      }
      to 
      {
        opacity: 1;
      }
}
  </style>

@endpush

@section('content')
<div class="row" style="font-size: 20px;">
    <ul class="breadcrumb">
        <li><a href="#">Catégorie</a></li>
        <li><a href="#">Galacticraft</a></li>
        <li>La fusée</li>
      </ul>
    @if(!empty($articles[0]))
      <a class="button button-primary" onclick="view_sommaire()">Sommaire</a>
    @endif
   
    <div id="sommaire_article">
     @forelse ($articles as $article)
      <div class="card">
        <div class="card-header">
            <img src="{{ $article->icon }}" alt="" class="card-logo">
            <h3 class="title-decoration">{{ $article->title }}</h3>
        </div>
        <div>
            {{ $article->desc_short }}
        </div>
        <div class="card-footer">
            <p>Modifié le {{ $article->updated_at }}</p>
            <a href="#" onclick="view_article({{ $article->id }})" class="button button-primary">Lire la suite</a>
        </div>
    </div>
     @empty
        <div style="text-align: center;">
          <h1>Cette catégorie semble vide ...</h1>
          <p class="muted">Vous souhaitez aider à remplir le wiki ? <a href="#">clique ici !</a></p>
      </div>
     @endforelse
	</div>
  @forelse ($articles as $article)
    <div id="article_{{ $article->id }}" class="d-none article">
      <h1 class="title-decoration">{{ $article->title }}</h1>
      <div>
          {!! $article->body !!}
      </div>
      <p>{{ $article->author }} Dernière modification {{ $article->updated_at }}</p>
    </div>    
  @empty
    
  @endforelse

</div>
<span class="anchor-up"><a href="#top"><svg class="svg-icon" viewBox="0 0 20 20"><path d="M13.889,11.611c-0.17,0.17-0.443,0.17-0.612,0l-3.189-3.187l-3.363,3.36c-0.171,0.171-0.441,0.171-0.612,0c-0.172-0.169-0.172-0.443,0-0.611l3.667-3.669c0.17-0.17,0.445-0.172,0.614,0l3.496,3.493C14.058,11.167,14.061,11.443,13.889,11.611 M18.25,10c0,4.558-3.693,8.25-8.25,8.25c-4.557,0-8.25-3.692-8.25-8.25c0-4.557,3.693-8.25,8.25-8.25C14.557,1.75,18.25,5.443,18.25,10 M17.383,10c0-4.07-3.312-7.382-7.383-7.382S2.618,5.93,2.618,10S5.93,17.381,10,17.381S17.383,14.07,17.383,10"></path></svg></a></span>
@endsection