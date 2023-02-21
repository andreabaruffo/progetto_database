<x-layout>
    <x-header 
        title="I Nostri prodotti"
    />

    <div class="container my-3">
        <div class="row justify-content-center py-5">
            @if ($products->isNotEmpty())                   
                @foreach ($products as $product)
                <div class="col-12 col-md-8 col-lg-6 my-2">
                    <x-product-card
                   :product="$product"
                    />
                </div>
                @endforeach
            @endif
        </div>
    </div>


</x-layout>