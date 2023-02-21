<x-layout>
    <x-header
    title="Contattaci"
    />
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-mb-8 col-lg-6">
                <form method="POST" action="{{route('contact.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" name="name"
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="mail" class="form-control" name="email"
                    </div>
                    <div class="mb-3">
                      <label class="form-label">lasciaci un messaggio</label>
                      <textarea name="message" id="" cols="30" rows="10"class="form-control" placeholder="commenta"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>