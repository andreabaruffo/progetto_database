<x-layout>
    <x-header 
        title="I nostri Articoli"
    />
    <div class="container my-3">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
               <div class="col-12 col-lg-6">
                    <x-article-card 
                        :article="$article"
                    />
                </div>  
            @endforeach
           
        </div>
    </div>
</x-layout>