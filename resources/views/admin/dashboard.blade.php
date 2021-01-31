@extends('admin.app')

@section('title', 'NGWiki - Accueil')

@push('head')


@endpush


@section('content')
<div style="margin: 10px;"></div>
{{-- <form method="POST" action="http://localhost:8000/admin/test">
    @csrf
    <textarea id="editor" name="editor" style="margin: 10px;"></textarea>
    <input type="submit" class="btn" value="Envoyer">
</form> --}}
@endsection

@push('js')
    

<script>
  tinymce.init({selector:"textarea",plugins:"media table autosave code emoticons fullscreen image imagetools link lists media preview wordcount",toolbar:"media table image link emoticons code imagetools forecolor preview",toolbar_mode:"floating",content_css:"css/tinymce.css",color_map:["2a2a2e","Dark","333337","Dark Gray","A0D468","Green","8CC152","Dark Green","E9573F","Red","4A89DC","Blue","3BAFDA","Aqua","EC87C0","Pink","b7bbc0","Gray","f6bb42","Warning Orange","da4453","Danger Red"]});
</script>


@endpush