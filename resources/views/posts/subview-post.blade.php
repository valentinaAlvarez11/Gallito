<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <div>
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->diffForHumans()}}</h6>
            <p class="card-text">{{ $post->content }}</p>
        </div>

        <div class="text-right">
            <a href="{{ route('posts.edit', $post->id) }}">
                <i class="fa-solid fa-pen-to-square iconos" style="color:black;" tittle="Editar post"></i>
            </a>
            <a href="iconos">
                <i class="fa-solid fa-trash-can iconos" style="color:black;" title="Remover post"></i>
            </a>
        </div>
    </div>
</div>

