<div class="card border-0">
    <h2 style="color: {{$categories[$product->category_id - 1]['color']}} ">
        <div>{{$categories[$product->category_id - 1]['name']}}</div>
        <div>
            {{$categories[$product->category_id - 1]['color']}}
        </div>
    </h2>
    <div class="price">
        {{$product->price}} €
    </div>
    <div>
        {{$product->name}}
    </div>
    <div>
        {{$product->description}} 
    </div>
    <div>
        <button class="btn">
            get started
        </button>
    </div>
</div>