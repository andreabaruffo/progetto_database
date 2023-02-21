<x-layout>
    <x-header
    title="Crea Prodotto"
    />
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('product.store')}}">
                  @csrf
                    <div class="mb-3">
                      <label class="form-label">Nome Prodotto</label>
                      <input type="text" class="form-control" name="name"> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Brand Prodotto</label>
                        <input type="text" class="form-control" name="brand"> 
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Descrizione Prodotto</label>
                        <textarea name="description" id="" cols="30" rows="10"class="form-control" ></textarea>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Prezzo Prodotto</label>
                        <input type="number" step="0.1" class="form-control" name="price" max="9999"> 
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>