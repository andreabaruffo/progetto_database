<form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label class="form-label">Titolo Articolo</label>
      <input type="text" name="title"class=" form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
    @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Nome Autore</label>
        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{old('author')}}">
    @error('author')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    </div>
    <div class="mb-3">
      <label class="form-label">Immagine</label>
      <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
  @error('img')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    </div>
      <div class="mb-3">
        <label class="form-label">Corpo Articolo</label>
        <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">{{old('body')}}</textarea>
   @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
   @enderror
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>