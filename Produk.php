<!DOCTYPE html>
<html lang="en">
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
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <link rel="stylesheet" type="text/css" href="asset/css/desain.css">
  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

</head>
  <body ng-app="">
 <?php  
    include "header.php";
    include "menu.php";
    //include "proses/koneksi.php";
?>

<?php  
$tab_query = "SELECT * FROM kategori ORDER BY id_kategori ASC";
    $tab_result = mysqli_query($conn, $tab_query);
    $tab_menu = '';
    $tab_content = '';
    $count = 0;
    while($row = mysqli_fetch_array($tab_result,MYSQLI_ASSOC)) {
        if($count == 0) 
        {
            $tab_menu .= '
            <li class="active"><a href="#' .$row["id_kategori"].'" data-toggle="tab">' .$row["nama_kategori"].'</a></li>
            ';

            $tab_content .= '
            <div id="'.$row["id_kategori"].'" class="tab-pane fade in active">
            ';
        }
        else {
            $tab_menu .= '
            <li><a href="#'.$row["id_kategori"].'" data-toggle="tab">'.$row["nama_kategori"].'</a></li>
            ';

            $tab_content .= '
            <div id="'.$row["id_kategori"].'" class="tab-pane fade">
            ';
        }
        $product_query = "SELECT * FROM produk WHERE id_kategori = '".$row["id_kategori"]."'";
        $product_result = mysqli_query($conn, $product_query);
        while ($sub_row = mysqli_fetch_array($product_result)) {
            $tab_content .= '
           <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img class="imgProduk" src="asset/img/produk/'.$sub_row["direktori_gambar"].'" alt="">
                        </div>
                        <h2>'.$sub_row["nama_produk"].'</h2>
                        <div class="product-carousel-price">
                            <ins>Rp. '.$sub_row["harga"].'</ins>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="proses/keranjang.php?id='.$sub_row["id_produk"].';">Add to cart</a>
                            <a class="add_to_cart_button" href="deskripsi.php?id='.$sub_row["id_produk"].'; ">Detail</a>
                        </div>                       
                    </div>
                </div>
            ';
        }
        $tab_content .= '<div style="clear:both"></div></div>';
        $count++;
    }
    ?>
    
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                <a class="navbar-brand" href="#">Categori</a>
            </div>
                <ul class="nav navbar-nav">
                   <?php  
                    echo $tab_menu;
                   ?>
                </ul>
            </div>
        </nav>
    </div>

</div>

<div class="single-product-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">

      <div class="tab-content">
        <?php echo $tab_content; 
        print_r($tab_content);
        ?>
      </div>

      <div class="row">

        <div class="col-md-12">
          <div class="product-pagination text-center">
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li><a href="produk.html">1</a></li>
                <li><a href="produk1.html">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>                        
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
             
<?php include "footer.php"; ?>
    
</div>

   
<script src="https://code.jquery.com/jquery.min.js"></script>
    
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/jquery.sticky.js"></script>

    <script src="asset/js/jquery.easing.1.3.min.js"></script>
    
    <script src="asset/js/main.js"></script>

  </body>
</html>