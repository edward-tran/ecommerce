<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>MUJI</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <!--<div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  -->
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg" style="background-color: whitesmoke;">
        <div class="container">
          <a class="navbar-brand" href="/" style="color: black;"><h2 style="color: black;" >MUJI 無印良品</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/" style="color: black;">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html" style="color: black;">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html" style="color: black;" >About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html" style="color: black;">Contact Us</a>
              </li>
              <li class="nav-item">
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('showcart')}}" style="color: black;"><i class="fas fa-shopping-cart"> Cart [{{$count}}]</i></a>
                    </li>
                    <x-app-layout>
                    </x-app-layout>
                    @else
                        <li> <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="color: black; padding-right:40px;" >Log in</a> </li>
                        @if (Route::has('register'))
                            <li><a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" style="color: black;" >Register</a></li>
                        @endif
                    @endauth
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
      </div>
      <img src="home/anni.jpg" alt="" width="100%" style="margin-top: 10px;">
        <!--<div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals On Sale</h2>
          </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>-->
      </div>
    </div>
    <!-- Banner Ends Here -->

    @include('user.product')

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2><b>About Muji</b></h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="left-content">
              <p>
              MUJI, được thành lập tại Nhật Bản vào năm 1980, MUJI cung cấp các sản phẩm đa dạng với chất lượng tuyệt vời bao gồm đồ gia dụng, các sản phẩm thời trang và thực phẩm.
MUJI là chữ viết tắt của từ Mujirushi Ryohin trong tiếng Nhật, có nghĩa là “sản phẩm chất lượng không thương hiệu”.

MUJI hoạt động dựa trên ba nguyên tắc cốt lõi, vẫn luôn không thay đổi cho đến ngày nay:</p>

<p> 1. Lựa chọn nguyên vật liệu<br>
   2. Giám sát quy trình<br>
   3. Đơn giản hóa bao bì</p>


<p>Các sản phẩm của MUJI được tạo ra từ quy trình sản xuất vô cùng tối ưu và kỹ lưỡng, nhưng không hoàn toàn dựa trên phong cách tối giản. Tính đơn giản trong các sản phẩm của MUJI mang tính đại chúng cao, phù hợp với nhiều đối tượng khách hàng.
MUJI được thành lập vào năm 1980. Khởi nguyên của công ty là sự tối ưu hóa quy trình sản xuất với mục đích tạo ra các sản phẩm đơn giản, chi phí hợp lý, chất lượng tốt. Đặc biệt, MUJI kiểm soát chất lượng các sản phẩm thông qua ba yếu tố: lựa chọn nguồn nguyên liệu, giám sát quy trình và đơn giản hóa bao bì</p>

<p>Ví dụ, nếu bạn bỏ qua quy trình tẩy trắng cho bột giấy, thì giấy thành phẩm sẽ có màu nâu nhạt. MUJI đã sử dụng loại giấy này cho việc đóng gói và dán nhãn của mình. Nhờ đó, các sản phẩm của Muji đều có vẻ ngoài giản dị và gần gũi. Dù đi ngược lại với xu hướng trình bày bao bì cầu kì trên thị trường, nhưng sản phẩm của MUJI luôn giành được sự đánh giá cao, và tạo ra làn sóng chấn động khắp Nhật Bản cũng như trên toàn thế giới.</p>

<p>Thành công này đến từ việc chúng tôi không tạo ra những sản phẩm chỉ để theo đuổi thị hiếu chung trên thị trường như là “Đây là những gì tôi thực sự muốn” hoặc “Tôi phải có được món này”.
Mục tiêu của MUJI là mang lại cho khách hàng sự hài lòng ở mức độ hợp lý, không phải thể hiện bằng “Đây là những gì tôi thực sự muốn” mà bằng “Thế này là đủ”.</p>

<p>“Đây là những gì tôi thực sự muốn” nghe có chút cố chấp và vị kỷ, trong khi đó “THẾ NÀY LÀ ĐỦ” lại thể hiện lập luận mang tính hòa nhã.<p>

<p>Trên thực tế, cụm từ này thậm chí còn có thể là sự kết hợp giữa từ bỏ và một chút không hài lòng. Mục tiêu của MUJI là xóa bỏ sự không hài lòng dù chỉ là một phần nhỏ. Từ đó tạo nên một “Thế này là đủ” rõ ràng và tự tin.
Các sản phẩm của MUJI được tạo ra từ quy trình sản xuất vô cùng tối ưu và kỹ lưỡng, nhưng không hoàn toàn dựa trên phong cách tối giản. Tính đơn giản trong các sản phẩm của MUJI mang tính đại chúng cao, phù hợp với nhiều đối tượng khách hàng.</p>

<p>Chúng tôi đã được công nhận là doanh nghiệp “tiết kiệm tài nguyên”, “giá cả thấp”, “đơn giản”, “ẩn danh”và “hướng tới thiên nhiên”.
MUJI không thiên về một đánh giá nào trong tất cả các đánh giá ở trên mà chú trọng phát triển đồng đều các phương diện.</p>

<p>Chúng tôi có hơn 1000 cửa hàng MUJI trên khắp thế giới, mang theo hơn 7.000 mặt hàng đa dạng từ quần áo,
đồ gia dụng, đến thực phẩm và thậm chí cả nhà ở.
Tuy vậy, nền tảng hệ tư tưởng vẫn được giữ nguyên vẹn như những ngày đầu thành lập; giống như la bàn luôn chỉ về hướng Bắc, và chúng tôi sẽ tiếp tục đưa MUJI hướng đến sự giản đơn và phổ quát trong đời sống thường ngày.</p>
              </p>
              <!--<ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>-->
              <a href="about.html" class="btn btn-info" style="border-radius:30px;">Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="right-image" style="padding-bottom: 10px;">
              <img src="home/muji.jpg" alt="" >
            </div>
            <div class="right-image" style="padding-bottom: 10px;">
              <img src="home/Muji1.jpg" >
            </div>
            <div class="right-image" style="padding-bottom: 10px;">
              <img src="home/muji2.png" alt="" >
            </div>
            <div class="right-image">
              <img src="home/muji3.jpg" alt="" >
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4><em>Location and Time</em></h4>
                  <p><em>© Ryohin Keikaku Co., Ltd.
                    CÔNG TY TNHH MUJI RETAIL (VIỆT NAM).</em><br>
                    Giấy CNĐKDN: 0315855270. Ngày cấp: 20/08/2019, được sửa đổi lần thứ 1 ngày 12/05/2020.</p>
                    <p>Cơ quan cấp: Phòng Đăng Ký kinh doanh – Sở Kế Hoạch và Đầu Tư TP.HCM.<br>
                    Trụ sở chính: Parkson Saigontourist Plaza, Số 35Bis – 45 Đường Lê Thánh Tôn, Phường Bến Nghé,
                    Quận 1, Thành Phố Hồ Chí Minh, Việt Nam.
                    Thời gian làm việc: Thứ 2 - Thứ 6. Từ 9:00 – 16:00.</p><br>
                  <h4><em>Contact</em></h4>
                    <p>
                    Điện thoại liên hệ : 028 710 88 3 88 <br>
                    Email: info@muji.vn
                </p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="btn btn-success" style="border-radius:30px;">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <b><p style="color: red;">Copyright &copy; 2021 Muji, Ltd.
            
            - Design: </p></b>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
