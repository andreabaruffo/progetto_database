<x-layout>

    <x-header
        title="Homepage"  
    />
    @if (session('message'))
        <div class="alert alert-success">
            <p class="m-0">{{session('message')}}</p>
        </div>
        
    @endif

    <div class="container">
        <div class="row justify-content-center py-5">
            @if ($products->isNotEmpty())                   
                @foreach ($products as $product)
                <div class="col-12 col-md-8 col-lg-6">
                    <x-product-card
                   :product="$product"
                    />
                </div>
                @endforeach
            @endif
        </div>
    </div>

</x-layout>