<div class="card bg-transparent border-0 text-white">
    <h4 style="color: {{$categories[$product->category_id - 1]['color']}} ">
        <div>{{$categories[$product->category_id - 1]['name']}}</div>
    </h4>
    <div class="product_price">
        {{$product->price}} €
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