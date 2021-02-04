@extends('admin.app')

@section('title', 'NGWiki - Dashboard')

@push('head')


@endpush


@section('content')

<div>
	<h1 class="title">Panel Administration</h1>
	<p class="title muted" style="font-size: 20px;">Bienvenue sur le panel d'administration de <strong>NGWIKI</strong>.</p>
</div>
<div style="display: grid; grid-template-columns: 1fr 2fr 1fr;">
	<div class="card-admin card card-full" style="grid-column: 2;">
		<div class="card card-primary">
			<div class="card-header">
				<i class="fas fa-users" style="font-size: 40px;"></i>
				<h3 class="title-decoration">Utilisateurs</h3>
			</div>
			<div>
			<p style="font-size: 25px;"><strong>150 users/mois</strong></p>
			</div>
		</div>
		<div class="card card-warning">
			<div class="card-header">
				<i class="fas fa-plus-circle" style="font-size: 40px;"></i>
				<h3 class="title-decoration">Pages</h3>
			</div>
			<div>
			<p style="font-size: 25px;"><strong>56 Pages</strong></p>
			</div>
		</div>
		<div class="card card-success">
			<div class="card-header">
				<i class="fas fa-user-plus" style="font-size: 40px;"></i>
				<h3 class="title-decoration">Inscription</h3>
			</div>
			<div>
			<p style="font-size: 25px;"><strong>10 inscris/mois</strong></p>
			</div>
		</div>
	</div>
</div>
<div>
	<table class="u-full-width list">
		<thead>
		  <tr>
			<th>#</th>
			<th>Pseudonyme</th>
			<th>Email</th>
			<th>Date d'inscription</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<td>1</td>
			<td>Yghore</td>
			<td>Yhgore@gmail.com</td>
			<td>02/02/2021</td>
		  </tr>
		  <tr>
			<td>1</td>
			<td>Yghore</td>
			<td>Yhgore@gmail.com</td>
			<td>02/02/2021</td>
		  </tr>
		  <tr>
			<td>1</td>
			<td>Yghore</td>
			<td>Yhgore@gmail.com</td>
			<td>02/02/2021</td>
		  </tr>
	  </table>
</div>
@endsection
