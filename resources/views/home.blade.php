@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

 <div class="row justify-content-center">
            @forelse ($posts as $post)
                <div class="card mb-3 bg-dark">
                    <div class="card-body border-0">
                        @include('posts.subview-post')
                    </div>
                </div>
@empty
                <div class="alert alert-info" role='alert'>
                    El usuario no ha publicado mensajes.
                </div>
            @endforelse
        </div>
    </div>

<br></br>
<footer class="page-footer font-small blue pt-4 ">
<!-- Copyright -->
<div class="footer-copyright text-center py-3">Desarrollado en programación Backend por Isabella Grajales © 2022

  <!-- Copyright -->

</footer>
@endsection
