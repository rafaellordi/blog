@extends('admin/base')
@section('title','Criar novo Video')

@section('content')


		<h1> Novo Video</h1>

		<form method="POST" action="{{url('admin/videos')}}" >
			<!--@csrf-->
			{!! csrf_field() !!}
			<label>Título</label>
			<input type="text" name="titulo">

			<label>Descrição</label>
			<textarea name="descricao"></textarea>

			<label>Link</label>
			<input type="text" name="link">

			<input type="submit" name="" value="Cadastrar">
		</form>
@endsection