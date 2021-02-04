@extends('admin.app')

@section('title', 'NGWiki - Dashboard')


@section('content')

<div>
    <h1 class="title">La fusée :</h1>
    <h2 class="title-decoration">Version actuelle :</h2>
    <div class="view">
        <p style="text-align: left;">La fus&eacute;e est quelque chose de tr&egrave;s important sur Nationsglory, elle rapporte des points (voir <a href="https://localhost:8000/">ci-joint</a>), apr&egrave;s bien sur elle r'apporte ducoup aussi des notations</p>
        <p style="text-align: left;">environ 9000$</p>
        <p style="text-align: left;">Apr&egrave;s tout reste &agrave; croire que blabla</p>
    </div>
    <h2 class="title-decoration">Version proposée :</h2>
    <div class="view">
        <p style="text-align: left;">La fus&eacute;e est quelque chose de tr&egrave;s important sur Nationsglory, elle rapporte des points (voir <a href="https://localhost:8000/">ci-joint</a>), apr&egrave;s bien sur elle r'apporte ducoup aussi des notations</p>
        <p style="text-align: left;">environ 9000$</p>
        <p style="text-align: left;">Apr&egrave;s tout reste &agrave; croire que blabla</p>
        <p style="text-align: left;">lorem ipsum toi m&ecirc;me tu sais</p>
        <p style="text-align: left;">&nbsp;</p>
        <p style="text-align: left;">&nbsp;</p>
        <p style="text-align: left;">A</p>
        <p style="text-align: left;">&nbsp;</p>
    </div>
    <a class="button-icon button-success" href="{{ route('admin.page.edit') }}"><i class="fas fa-pen"></i></a>
    <a class="button-icon button-danger" href="#"><i class="fas fa-skull-crossbones"></i></a>
</div>
@endsection
