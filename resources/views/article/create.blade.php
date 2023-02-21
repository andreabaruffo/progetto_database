<x-layout>
    <x-header
    title="Crea il tuo Articolo"
    />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <x-article-form></x-article-form>
            </div>
        </div>
    </div>
</x-layout>