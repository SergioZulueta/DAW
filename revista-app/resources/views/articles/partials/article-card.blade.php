<div class="col-md-4">
  <div class="card mb-4 box-shadow {{ in_array( $article->id, $read_articles) ? 'border-info' : '' }}">
    <div class="card-body">
        <h5 class="card-title">{!! in_array( $article->id, $favourites) ? '<span>&#11088;</span>' : '' !!} {{ $article->title }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ \Illuminate\Support\Str::limit($article->subtitle, 40, $end='...') }}</h6>
        <p class="card-text">{{ \Illuminate\Support\Str::limit($article->body, 100, $end='...') }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a id="{{ $article->id}}" class="btn btn-sm btn-outline-info mr-1 leer" href="{{ route('articles.show',$article->id) }}"><i class="fa fa-eye"></i> Leer</a>
                <form action="{{ route('articles.favourite', $article->id) }}" method="POST">
                    @csrf
                    <button class="btn btn-sm mr-1 btn-outline-success">
                        <i class="fa fa-star"></i> Favorito
                    </button>
                </form>
                @if(Auth::check())
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn btn-sm btn-outline-danger">
                        <i class="fa fa-trash"></i> Borrar
                    </button>
                </form>
                @endif
            </div>
            <small class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
        </div>
    </div>
  </div>
</div>