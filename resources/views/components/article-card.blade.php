<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$article->title}}</h5>
      <h5 class="card-title">{{$article->author}}</h5>
      <p class="card-text">{{substr($article->body , 0 , 30)}} ...</p>
      <p class="card-text">Caricato il : {{$article->created_at->format('d/m/y - h:m')}}</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>