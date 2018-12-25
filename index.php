<!DOCTYPE html>
<html lang="en">
<head>

  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" type="asset/text/css" href="css/desain.css">
  <link rel="stylesheet" type="asset/text/css" href="style.css">

  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    
  <script type="text/javascript">
    $(document).ready(function(){
    $( document ).effect( blind,callback );
    function callback() {
      setTimeout(function() {
        $(document).removeAttr( "style" ).hide().fadeIn();
      }, 1000 );
    };
});
  </script>
</head>


<body ng-app="">
<!-- Menu utama Header -->
<?php  
    include "header.php";
    include "menu.php";
    include "proses/koneksi.php";
?>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    
  </ol>

  <!-- slide carausel -->
  <div class="carousel-inner">
    <div class="item active">
       
      <img src="asset/img/banner/batik.jpg">

    </div>

    <div class="item">
        
      <img src="asset/img/banner/mainan.png">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


 <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                 <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Produk Baru</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Berkualitas</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Pengiriman</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Aman</p>
                    </div>
                </div>
               
            </div>
        </div>
    </div> 


 <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
              <h2>Produk Terbaru</h2>
                
                <?php $produk = $koneksi->query("SELECT * FROM produk"); ?>
                <?php while ($perproduk = $produk->fetch_assoc()) {
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img class="imgProduk" src="asset/img/produk/<?php echo $perproduk['direktori_gambar']; ?>" alt="">
                        </div>
                        <h2><?php echo $perproduk['nama_produk']; ?></h2>
                        <div class="product-carousel-price">
                            <ins>Rp. <?php echo number_format($perproduk['harga']); ?></ins>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="proses/keranjang.php?id=<?php echo number_format($perproduk["id_produk"]); ?>">Add to cart</a>
                            <a class="add_to_cart_button" href="deskripsi.php?id=<?php echo number_format($perproduk["id_produk"]); ?>">Detail</a>

                        </div>                       
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
   
 </div>

    
</div>

<?php include "footer.php"; ?>
    <script src="https://code.jquery.com/jquery.min.js"></script>
  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/jquery.sticky.js"></script>
    <script src="asset/js/jquery.easing.1.3.min.js"></script>
    
    <script src="asset/js/main.js"></script>
    <script type="text/javascript" src="asset/js/bxslider.min.js"></script>
  <script type="text/javascript" src="asset/js/script.slider.js"></script>

</body>

</html>
