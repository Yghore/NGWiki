@extends('admin.app')

@section('title', 'NGWiki - Dashboard')


@section('content')

<div>
    <h1 class="title"><i class="fas fa-check-circle"></i> Modifications effectuées</h1>
    <table class="u-full-width list">
		<thead>
		    <tr>
			    <th>#</th>
			    <th>Nom de l'article</th>
			    <th>Url</th>
                <th>Auteur de la modification</th>
                <th>Date de la modification</th>
                <th>Action</th>
		    </tr>
		</thead>
		<tbody>
		    <tr>
                <td>1</td>
                <td>La fusée</td>
                <td><a href="https://localhost:8000">article/10</a></td>
                <td>Yghore</td>
                <td>12/02/2021</td>
                <td>
                    <a class="button-icon button-primary" href="{{ route('admin.modify.view') }}"><i class="fas fa-eye"></i></a>
                    <a class="button-icon button-success" href="#"><i class="fas fa-check"></i></a>
                    <a class="button-icon button-danger" href="#"><i class="fas fa-skull-crossbones"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
    <h1 class="title"><i class="fas fa-bug"></i> Rapports</h1>
    <table class="u-full-width list">
		<thead>
		    <tr>
			    <th>#</th>
			    <th>Nom de l'article</th>
			    <th>Url</th>
                <th>Auteur de la modification</th>
                <th>Date de la modification</th>
                <th>Action</th>
		    </tr>
		</thead>
		<tbody>
		    <tr>
                <td>1</td>
                <td>La fusée</td>
                <td><a href="https://localhost:8000">article/10</a></td>
                <td>Yghore</td>
                <td>12/02/2021</td>
                <td>
                    <a class="button-icon button-primary" href="{{ route('admin.modify.view') }}"><i class="fas fa-eye"></i></a>
                    <a class="button-icon button-success" href="#"><i class="fas fa-check"></i></a>
                    <a class="button-icon button-danger" href="#"><i class="fas fa-skull-crossbones"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
