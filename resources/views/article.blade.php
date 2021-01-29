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
    <a class="button button-primary" onclick="view_sommaire()">Sommaire</a>
    <div id="sommaire_article">
      <div class="card">
        <div class="card-header">
            <img src="https://image.flaticon.com/icons/png/128/124/124570.png" alt="" class="card-logo">
            <h3 class="title-decoration">La fusée</h3>
        </div>
        <div>
           La fusée ne peut pas se craft, il faut l'obligatoirement l'acheter, bien sur le prix varie, à l'adminshop elle coute 1M$ mais da...
        </div>
        <div class="card-footer">
            <p>Crée le 10/10/10</p>
            <a href="#" onclick="view_article(1)" class="button button-primary">Lire la suite</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <img src="https://www.icone-png.com/png/27/26554.png" alt="Erreur" class="card-logo">
            <h3 class="title-decoration">La lune</h3>
        </div>
        <div>
          Il ne faut pas obligatoirement la fusée pour aller sur la lune, en effet sur le serveur orange un warp existe ./warp lune, après pour...
        </div>
        <div class="card-footer">
            <p>Crée le 10/10/10</p>
            <a href="#" onclick="view_article(2)" class="button button-primary">Lire la suite</a>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <img src="https://www.credixia.com/wp-content/uploads/2017/11/taux-immobilier-mars-2018.png" alt="Erreur" class="card-logo">
            <h3 class="title-decoration">Mars</h3>
        </div>
        <div>
         Pour aller sur mars il faut obligatoirement une <a href="#">fusée</a>, après cela il vous faut aussi de l'essence, il faut pour cela avoir du pétrole...
        </div>
        <div class="card-footer">
            <p>Crée le 10/10/10</p>
            <a href="#" onclick="view_article(3)" class="button button-primary">Lire la suite</a>
        </div>
    </div>
	</div>
	
    <div id="article_1" class="d-none article">
      <h1 class="title-decoration">La Fusée</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor quae enim facilis officiis molestiae consectetur impedit exercitationem nam. Expedita vitae voluptate qui in maiores. Tempore dicta molestiae aliquam perferendis?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor quae enim facilis officiis molestiae consectetur impedit exercitationem nam. Expedita vitae voluptate qui in maiores. Tempore dicta molestiae aliquam perferendis?</p>
    </div>
    <div id="article_2" class="d-none article">
		<h1 class="title-decoration">La lune</h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor quae enim facilis officiis molestiae consectetur impedit exercitationem nam. Expedita vitae voluptate qui in maiores. Tempore dicta molestiae aliquam perferendis?</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor quae enim facilis officiis molestiae consectetur impedit exercitationem nam. Expedita vitae voluptate qui in maiores. Tempore dicta molestiae aliquam perferendis?</p>
	</div>
    <div id="article_3" class="d-none article">
		<h1 class="title-decoration">Mars</h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor quae enim facilis officiis molestiae consectetur impedit exercitationem nam. Expedita vitae voluptate qui in maiores. Tempore dicta molestiae aliquam perferendis?</p>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores dolor quae enim facilis officiis molestiae consectetur impedit exercitationem nam. Expedita vitae voluptate qui in maiores. Tempore dicta molestiae aliquam perferendis?</p>
	  </div>
</div>
@endsection