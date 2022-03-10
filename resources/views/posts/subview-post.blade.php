<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <div>
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>
            <p class="card-text">{{ $post->content }}</p>
        </div>

        <div class="text-right">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">
                <i class="fa-solid fa-pen-to-square " style="color:black;" title="Editar post"></i>
            </a>
            <br></br>
            {!! Form::open(['route'=> ['posts.destroy', $post->id] , 'method' =>'delete']) !!}

            {!! Form::button('<i class="fa-solid fa-trash-can " style="color:black;" ></i>',[
                'type'=>'submit',
                'title'=>"Remover Post",
                'class'=>'btn btn-danger',
                'onclick'=> " return confirm('¿Está seguro?,tenga en cuenta que esta reaccion no es reversible')"
                ])

            !!}

            {!! Form::close() !!}





        </div>
    </div>
</div>

