<!DOCTYPE html>
<html>
<head>

  <title></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/font-awesome.min.css">
  <link rel="stylesheet" href="asset/css/owl.carousel.css">
  <link rel="stylesheet" href="asset/style.css">
  <link rel="stylesheet" href="asset/css/responsive.css">

  <link rel="stylesheet" type="text/css" href="asset/css/desain.css">
  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

</head>
  <body ng-app="">
    <?php  
    include "header.php";
    include "menu.php";
    include "proses/koneksi.php";

    $id_produk = $_GET["id"];
    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
    $detail = $ambil->fetch_assoc();
?>    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="index.php">Beranda</a>
                            <a href=""><?php echo $detail["nama_produk"]; ?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img class="imgDetail" src="asset/img/produk/<?php echo $detail["direktori_gambar"]; ?>" alt="">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="asset/img/produk/<?php echo $detail["direktori_gambar"]; ?>" alt="">
                                        <img src="asset/img/produk/<?php echo $detail["direktori_gambar2"]; ?>" alt="">
                                        <img src="asset/img/produk/<?php echo $detail["direktori_gambar3"]; ?>" alt="">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $detail["nama_produk"]; ?></h2>
                                    <h4 class="product-name">Stok : <?php echo $detail["jumlah_stok"]; ?></h4>
                                    <div class="product-inner-price">
                                        <ins>Rp. <?php echo $detail["harga"]; ?></ins>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to Cart</button>
                                    </form>   
                                    
                                  
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Deskripsi</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Deskripsi Produk</h2>  
                                                <p><?php echo $detail["deskripsi"]; ?></p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Review</h2>
                                                <form action="" method="post" role="form" enctype="multipart/form-data">
                                                <div class="submit-review">
                                                    <p><label for="name">Nama</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                         
                                                    <p><label for="review">Review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p> <button type="submit" name="kirim" class="btn btn-primary">Kirim</button></p>
                                                </div>
                                                </form>
                                                <?php  
                                                include "proses/koneksi.php";

                                                if (isset($_POST["kirim"])) {
                                                    $nama = $_POST['name'];
                                                    $email = $_POST['email'];
                                                    $review = $_POST['review'];

                                                    $koneksi->query("INSERT INTO review (nama, email, review) VALUES '$nama', '$email', $review");

                                                    echo "<div class='alert alert-info'>Data tersimpan</div>";
                                                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                                              }
                                              ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
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
  </body>
</html>