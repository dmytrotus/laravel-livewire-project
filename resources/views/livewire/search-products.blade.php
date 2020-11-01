@foreach($products as $product)
<div class="card col-md-4 mb-4 shadow-sm p-0 mb-1">
  <div class="card-header">
    <h4 class="my-0 font-weight-normal">{{ $product->title }}</h4>
  </div>
  <div class="card-body">
    <h1 class="card-title pricing-card-title">${{ $product->price->price }}</h1>
    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Buy</button>
  </div>
</div>
@endforeach