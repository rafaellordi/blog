@extends('admin/base')
@section('title','Criar novo POSTS')

@section('content')


		<h1> Novo Video</h1>

		<form method="POST" action="{{url('admin/videos/'.$video->id)}}" >
			<!--@csrf-->
			{!! csrf_field() !!}
			<input type="hidden" name="_method" value="PUT">
			<label>Título</label>
			<input type="text" name="titulo" value="{{$video->titulo}}">

			<label>Descrição</label>
			<textarea name="descricao">{{$video->descricao}}</textarea>

			<label>Video</label>
			<input type="text" name="link" value="{{$video->link}}">
			<input type="submit" name="" value="Cadastrar">
		</form>
@endsection