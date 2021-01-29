@extends('admin.app')

@section('title', 'NGWiki - Accueil')



@section('content')
<div style="margin: 10px;"></div>
<form method="POST" action="http://localhost:8000/admin/test">
    @csrf
    <textarea id="editor" name="editor" style="margin: 10px;"></textarea>
    <input type="submit" class="btn" value="Envoyer">
</form>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'media table autosave code emoticons fullscreen image imagetools link lists media preview wordcount',
      toolbar: 'media table image link emoticons code imagetools preview',
      toolbar_mode: 'floating',
   });
  </script>
  
@endsection