@extends('layouts.app')
@section('content')


<div class="container">

<h1 class="text-center">Publicaciones de {{ $user->name}}</h1>

@forelse($posts as $post)
    @include('posts.subview-post',compact('posts'))

@empty
    <div class="alert alert-info" role="alert">
        ¡ El usuario no ha publicado mensajes!
    </div>
@endforelse

    <div class ="mt-3">
{{ $posts->links() }}
    </div>

</div>
<br></br>
<br></br>
<div>
<footer class="page-footer font-small blue pt-4 ">
<!-- Copyright -->
<div class="footer-copyright text-center py-3">Desarrollado en programación Backend por Isabella Grajales © 2022

  <!-- Copyright -->

</footer>
</div>
@endsection
