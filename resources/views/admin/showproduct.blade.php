<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        @include('admin.css')
  </head>
  <body>
        <!-- partial -->
        @include('admin.sidebar')
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" >

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class='close' data-dismiss="alert"></button>
                        {{session()->get('message')}}
                    </div>
                @endif
                
                <table>
                    <tr style="border: 3px solid white;">
                        <td style="padding: 30px; text-align:center; font-weight:bold; border: 1px solid white;">NAME</td>
                        <td style="padding: 15px; text-align:center; font-weight:bold; border: 1px solid white;">PRICE</td>
                        <td style="padding: 50px; text-align:center; font-weight:bold; border: 1px solid white;">DESCRIPTION</td>
                        <td style="padding: 30px; text-align:center; font-weight:bold; border: 1px solid white;">QUANTITY</td>
                        <td style="padding: 50px; text-align:center; font-weight:bold; border: 1px solid white;">IMAGE</td>
                        <td style=" text-align:center; font-weight:bold;">ACTION</td>
                    </tr>
                    @foreach ($data as $product)
                    <tr style="border: 3px solid white;">
                        <td style="padding: 30px; text-align:center; border: 1px solid white;">{{$product->title}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$product->price}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$product->description}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$product->quantity}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >
                            <img src="/productImage/{{$product->image}}" height="400px" width="400px"/>
                        </td>
                        
                        <td><a href="{{url('updateview', $product->id)}}" class="btn btn-primary" style="margin-left: 5px; border-radius:20px;">UPDATE</a></td>
                        <td><a href="{{url('deleteproduct',$product->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger" style="margin-left: 10px; margin-right:5px; border-radius:20px;">DELETE</a></td>
                        

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
          <!-- partial -->
        @include('admin.js')
  </body>
</html>
