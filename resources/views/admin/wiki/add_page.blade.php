@extends('admin.app')

@section('title', 'NGWiki - Dashboard')


@section('content')

<div>
    <h1 class="title">Ajouter une page </h1>
<div style="margin: 10px;"></div>
    <form method="POST" action="{{ route('admin.page.add') }}">
        @csrf
        <label for="category">Catégorie de la page</label>
        <select name="category" id="category" style="color: black; width: 100%">
            @forelse ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @empty
                <option value="0" select disabled>Aucune catégorie</option>
            @endforelse
        </select>
        <label for="title">Titre de l'article</label>
        <input class="u-full-width" type="text" placeholder="Nom de l'article" id="title" name="title">
        <label for="desc">Description de l'article</label>
        <input type="text" id="desc" class="u-full-width" placeholder="Courte description de la page" name="desc">
        <label for="editor">Page de l'article</label>
        <textarea id="editor" name="editor" style="margin: 10px;"></textarea>
        <input type="submit" class="btn" value="Envoyer">
    </form>

</div>

@endsection

@push('js')
<script>
    var content = ' ';
    var css = "{{ asset('css/tinymce.css') }}";
    tinymce.init({
        selector:"#editor",
        menubar: false,
        font_formats:"Roboto=roboto; Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Oswald=oswald; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
        content_style:"@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');",
        plugins:"media table autosave code emoticons fullscreen image imagetools link lists media preview wordcount",
        toolbar:" formatselect fontselect fontsizeselect forecolor backcolor | bold italic underline | alignleft aligncenter alignright | image media link table | numlist checklist | emoticons | codesample code preview ",toolbar_mode:"floating",content_css:css,
        color_map:["2a2a2e","Dark","333337","Dark Gray","A0D468","Green","8CC152","Dark Green","E9573F","Red","4A89DC","Blue","3BAFDA","Aqua","EC87C0","Pink","b7bbc0","Gray","f6bb42","Warning Orange","da4453","Danger Red"],
        setup: function (editor) {
            editor.on('init', function () {
                tinymce.get("editor").setContent(content);
            });
        }
    }); 
</script>
@endpush

