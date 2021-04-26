@extends('admin.dashboard')


@section('title', 'NGWiki | Administration')
@section('dashboard_title', 'Dashboard - Ajouter une image')


@push('head')
    
  <style>
    input[type='file']
    {
      opacity: 0;
      z-index: 0;
      top: auto;
      left: 0;
      position: absolute;
    }
    div.input-file
    {
      font-weight: bold;
      margin: 10px 0;
      position: relative;
      background-color: white;
      color: black;
      padding: 10px;
    }
    div.before-input
    {
      background-color:#e9ecef;
      border-radius: 5px;
      color: black;
      padding: 0 5px;
      font-weight: bold;
    }
    div.before-input input 
    {
      margin: 0px;
      padding: 20px;
      width: 50%;
    }

  </style>


@endpush

@push('js')

<script>
  let input = document.getElementById('file_img');
  input.addEventListener('change', function()
	{
    let filename = input.files[0].name; 
    document.getElementById('file-text').innerHTML = filename;
  });
  
</script>

@endpush


@section('content')

<form method="POST" action="{{ route('admin.image.add') }}" enctype="multipart/form-data">
    @csrf
    <label for="img_name" class="form-label">Nom de l'image</label>
    <div class="before-input">
      <span class="u-full-width" id="basic-addon3">{{ asset('storage/') }}/</span>
        <input type="text" class="form-control" id="img_name" name="img_name" aria-describedby="basic-addon3">
      <span class="u-full-width" id="basic-addon3">.png/.jpg/.jpeg/.gif</span>
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Image (PNG, JPG, JPEG, GIF)</label>
      <div class="input-file">
        <span><i class="fas fa-upload"></i> <span id="file-text">Choisir un fichier...</span></span>
        <input class="u-full-width" type="file" id="file_img" name="file_img" accept=".png,.jpg,.jpeg,.gif">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter l'image</button>
  </form>


@endsection