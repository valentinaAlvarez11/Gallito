@extends('layouts.app')
@section('content')

<div class="container">

<h1>Editar un post existente</h1>
@include('layouts.subview-form-errors')
{!! Form::model($post, ['method' => 'put','route' => ['posts.update', $post->id]])!!}

@include('posts.subview-post-fields')
 <button type="submit" class="btn btn-primary">Editar</button>

{!! Form::close() !!}
</div>

@endsection


