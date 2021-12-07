<!DOCTYPE html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        @include('admin.css')
        <style type="text/css">
            .title{
                color:white; 
                padding-top:25px; 
                font-size: 25px;
            }

            label{
                display: inline-block;
                width: 200px;
            }
        </style>
  </head>
  <body>
        <!-- partial -->
        @include('admin.sidebar')
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container" style="text-align: center;">
                <h1 class="title" style="margin-bottom: 20px;">ADD PRODUCT</h1>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class='close' data-dismiss="alert"></button>
                        {{session()->get('message')}}
                    </div>
                @endif
        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data" style="border: 1px solid white;">
            @csrf
            <div style="padding: 15px;">
                <label>Name</label>
                <input style="color:black;border-radius:20px;" type="text" name="title" placeholder="Give a product title" require="">
            </div>

            <div style="padding: 15px;">
                <label>Price</label>
                <input style="color:black;border-radius:20px;" type="number" name="price" placeholder="Give a product price" require="">
            </div>

            <div style="padding: 15px;">
                <label>Description</label>
                <input style="color:black;border-radius:20px;" type="text" name="description" placeholder="Give a product description" require="">
            </div>
            
            <div style="padding: 15px;">
                <label>Quantity</label>
                <input style="color:black;border-radius:20px;" type="text" name="quantity" placeholder="Give a product quantity" require="">
            </div>

            <div style="padding: 15px; padding-left: 150px;">
                <label>Image</label>
                <input type="file" name="file">
            </div>

            <div style="padding: 15px; padding-left:200px;">
                <input class="btn btn-success"type="submit" style="border-radius:20px;" value="ADD">
            </div>
        </form>
            </div>
        </div>
          <!-- partial -->
        @include('admin.js')
  </body>
</html>