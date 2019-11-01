@extends('admin/base')
@section('title','Pag POSTS')

@section('content')
	<h1>LISTA DE POSTS</h1>
	<a href="{{url('posts/create')}}" class="btn btn-primary">Novo Post</a>
	<table class="table">
		<thead>
			<th>#</th>
			<th>Título</th>
			<th>Criado em</th>
			<th>Ações</th>
		</thead>
		<tbody>
			@foreach($posts as $post)
				<tr>
					<td>{{$post->id}}</td>
					<td>{{$post->titulo}}</td>
					<td>{{$post->created_at->format('d/m/y')}}</td>
					<td><a href="{{url('admin/posts/'.$post->id.'/edit')}}">Editar</a>
					<form method="post" action="{{url('admin/posts/'.$post->id)}}">
						{{csrf_field()}}
						
						<input type="hidden" name="_method" value="DELETE">
						<button type="submit">Ecluir</button>
					</form></td>
				</tr>
				{{$post->titulo}}
			@endforeach
		</tbody>
	</table>

@endsection

