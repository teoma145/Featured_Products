<div class="card bg-transparent border-0 text-white">
    <h4 style="color: {{$categories[$product->category_id - 1]['color']}} ">
        <div>{{$categories[$product->category_id - 1]['name']}}</div>
    </h4>
    <div class="product_price d-flex justify-content-center align-items-center gap-1">
        <div class="euro"> <span class="fs-2 pe-1">$</span>{{ explode(".", $product->price)[0]}}</div>
        <div class="mb-2">
            <div class="cent">{{ explode(".", $product->price)[1]}}</div>
            <div class="period pt-2">/MO</div>
            
        </div>
    </div>

    <div class="product_name">
        {{$product->name}}
    </div>

    <div class="product_description">
        {{$product->description}} 
    </div>

    <div>
        <button class="btn btn-outline-light">
            get started
        </button>
    </div>
</div>