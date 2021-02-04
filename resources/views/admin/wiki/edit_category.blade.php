@extends('admin.app')

@section('title', 'NGWiki - Dashboard')


@section('content')

<div>
    <h1 class="title">Editer la category : 'La fusée' </h1>
<div style="margin: 10px;"></div>
    <form method="POST" action="#">
        @csrf
        <div class="row">
            <div class="six columns">
                <label for="place">Place dans la liste :</label>
                <input class="u-full-width" type="number" placeholder="1,2,3,..." id="place">
            </div>
            <div class="six columns">
                <label for="icon">icon</label>
                <select class="u-full-width" id="icon">
                    <option value="Option 1">ICON 1</option>
                    <option value="Option 2">ICON 2</option>
                    <option value="Option 3">ICON 3</option>
                </select>
            </div>
        <label for="title">Place dans la liste :</label>
        <input class="u-full-width" type="text" placeholder="La fusée" id="title">

        <label for="desc">Description :</label>
        <textarea style="color: black;" class="u-full-width" placeholder="La fusée..." id="desc"></textarea>
        <input type="submit" class="btn button-primary" value="Envoyer">
    </form>

</div>

@endsection



