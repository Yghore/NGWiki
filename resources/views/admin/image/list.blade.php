@extends('admin.dashboard')


@section('title', 'NGWIKI | Administration')


@section('content')
    
<table class="u-full-width list">
    <thead>
      <tr>
        <th scope="col">Preview</th>
        <th scope="col">Url</th>
        <th scope="col">Actions</th>  
      </tr>
    </thead>
    <tbody>
      @forelse ($img_list as $img)
        <tr>
          <td><img style="width: 150px; max-height: auto;" src="{{ asset('storage/'. $img) }}" alt="{{ $img }}"></td>
          <td><a href="{{ asset('storage/'. $img) }}">{{ asset('storage/'. $img) }}</a></td>
          <td><i class="fas fa-edit"></i> | <i class="fas fa-trash"></i></td>
        </tr>
      @empty
          <tr>
            <td>Aucun fichier</td>
            <td>Aucun lien ducoup...</td>
            <td>Aucune action...</td>
          </tr>
      @endforelse
     
    </tbody>
  </table>


@endsection