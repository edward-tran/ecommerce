@if (session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class='close' data-dismiss="alert"></button>
      {{session()->get('message')}}
    </div>
@endif
<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>

              <form action="{{url('search')}}" method="GET" class="form-inline" style="float:right; padding-top:10px;">
                <input class='form-control' type="search" name="search" placeholder="Search here..." style="margin-right: 10px; border-radius:20px;"/>
                <input type="submit" value="Search" class="btn btn-success" style="border-radius:20px;"/>
              </form>
            </div>
          </div>

          @foreach ($data as $product)
          
          <div class="col-md-4">
            <div class="product-item" style="border-radius:30px;">
              <a href="#" ><img style="border-radius:30px;"src="/productImage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <div>
                <a href="#"><h4>{{$product->title}}</h4></a>
                </div>
                <p style="font-size:1em; font-weight: bold;">{{$product->price}} VND</p>
                <p>{{$product->description}}</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Rates (32)</span>
                <form action="{{url('addtocart', $product->id)}}" method="POST" >
                  @csrf
                  <input type="number" min='1' value="1"/ name="quantity">
                  <input type="submit" class="btn btn-success" style="margin-top:10px; border-radius:30px;" value="ADD TO CART"/>
                </form>
                
              </div>
            </div>
          </div>
          @endforeach
          @if (method_exists($data, 'links'))
          <div class="d-flex justify-content-center">
            {!! $data->links() !!}
          </div>
          @endif
        </div>
      </div>
    </div>