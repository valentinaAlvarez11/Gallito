@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">últimas publicaciones de {{ Auth::user()->name }}</h1>
    <div class="row justify-content-center">
            @forelse ($posts as $post)

                <div class="card mb-3" >
                    <div class="card-body border-0">
                    @include('posts.subview-post', ['user'=>Auth::user()])
                    </div>
                </div>
@empty
                <div class="alert alert-info" role='alert'>
                    El usuario no ha publicado mensajes.
                </div>
            @endforelse
        </div>
    </div>
</div>



<br></br>
<footer class="page-footer font-small blue pt-4 ">
<!-- Copyright -->
<div class="footer-copyright text-center py-3">Desarrollado en programación Backend por Isabella Grajales © 2022

  <!-- Copyright -->

</footer>
@endsection
