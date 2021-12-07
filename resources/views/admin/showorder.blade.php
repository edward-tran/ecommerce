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
                        <td style="padding: 10px; text-align:center; font-weight:bold; border: 1px solid white;">CUSTOMER</td>
                        <td style="padding: 10px; text-align:center; font-weight:bold; border: 1px solid white;">PHONE</td>
                        <td style="padding: 10px; text-align:center; font-weight:bold; border: 1px solid white;">ADDRESS</td>
                        <td style="padding: 10px; text-align:center; font-weight:bold; border: 1px solid white;">PRODUCT NAME</td>
                        <td style="padding: 10px; text-align:center; font-weight:bold; border: 1px solid white;">PRICE</td>
                        <td style="padding: 10px; text-align:center; font-weight:bold; border: 1px solid white;">QUANTITY</td>
                        <td style="padding: 10px; text-align:center; font-weight:bold; border: 1px solid white;">STATUS</td>
                        <td style=" text-align:center; font-weight:bold;">ACTION</td>
                    </tr>
                    @foreach ($order as $ord)
                    <tr style="border: 3px solid white;">
                        <td style="padding: 30px; text-align:center; border: 1px solid white;">{{$ord->name}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$ord->phone}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$ord->address}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$ord->product_name}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$ord->price}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$ord->quantity}}</td>
                        <td style="padding: 30px; text-align:center;border: 1px solid white;" >{{$ord->status}}</td>
                        <td>
                            <a href="{{url('updatestatus', $ord->id)}}" class="btn btn-success" style="border-radius:30px;">Delivered</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
          <!-- partial -->
        @include('admin.js')
  </body>
</html>
