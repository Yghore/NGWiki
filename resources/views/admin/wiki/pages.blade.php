@extends('admin.app')

@section('title', 'NGWiki - Dashboard')


@section('content')

<div>
    <h1 class="title">Gestion des pages :</h1>
    <table class="u-full-width list">
		<thead>
		    <tr>
			    <th>#</th>
			    <th>Nom de l'article</th>
			    <th>Url</th>
                <th>Dernière modification</th>
                <th>Auteur</th>
                <th>Action</th>
		    </tr>
		</thead>
		<tbody>
		    <tr>
                <td>1</td>
                <td>La fusée</td>
                <td><a href="https://localhost:8000">article/10</a></td>
                <td>02/02/2021</td>
                <td>Yghore</td>
                <td>
                    <a class="button-icon button-primary" href="{{ route('admin.page.edit') }}"><i class="fas fa-pen-square"></i></a>
                    <a class="button-icon button-danger" href="#"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>La fusée</td>
                <td><a href="https://localhost:8000">article/10</a></td>
                <td>02/02/2021</td>
                <td>Yghore</td>
                <td>
                    <a class="button-icon button-primary" href="{{ route('admin.page.edit') }}"><i class="fas fa-pen-square"></i></a>
                    <a class="button-icon button-danger" href="#"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>La fusée</td>
                <td><a href="https://localhost:8000">article/10</a></td>
                <td>02/02/2021</td>
                <td>Yghore</td>
                <td>
                    <a class="button-icon button-primary" href="{{ route('admin.page.edit') }}"><i class="fas fa-pen-square"></i></a>
                    <a class="button-icon button-danger" href="#"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>La fusée</td>
                <td><a href="https://localhost:8000">article/10</a></td>
                <td>02/02/2021</td>
                <td>Yghore</td>
                <td>
                    <a class="button-icon button-primary" href="{{ route('admin.page.edit') }}"><i class="fas fa-pen-square"></i></a>
                    <a class="button-icon button-danger" href="#"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
	</table>
</div>
@endsection
