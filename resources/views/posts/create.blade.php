@extends ('layouts.app')

@section ('content')

<div class = "container">

<h1 class="text-center">Crear una nueva publicacion</h1>
@include('layouts.subview-form-errors')

{!! Form::open(['route'=> 'posts.store', 'method' => 'post']) !!}

 @include('posts.subview-post-fields')
  <button type="submit" class="btn btn-primary">Crear</button>

    {!! Form::close() !!}
</div>
<div>

<br></br>
<br></br>
<br></br>
<footer class="page-footer font-small blue pt-4 ">
<!-- Copyright -->
<div class="footer-copyright text-center py-3">Desarrollado en programación Backend por Isabella Grajales © 2022

  <!-- Copyright -->

</footer>
</div>
@endsection
