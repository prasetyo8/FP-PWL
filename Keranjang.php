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

    include "proses/koneksi.php";
    

?>  
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                
          
                            <h2>Produk yang di beli</h2>
                            <!-- <form method="post" action="#"> -->
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp; No</th>
                                            <th class="product-thumbnail">&nbsp;Gambar</th>
                                            <th class="product-name">Produk</th>
                                            <th class="product-price">Harga</th>
                                            <th class="product-quantity">Jumlah</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <?php $totalBelanja = 0; ?>
                                        <?php $nomor=1; ?>
                                    <?php
                                        if(isset($_SESSION["keranjang"])) 
                                            foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):  ?>
                                    <?php  

                                    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                                    $pecah = $ambil->fetch_assoc();

                                    $subtotal = $pecah["harga"]*$jumlah;
                                    $harga = $pecah["harga"];
                                    $totalBelanja +=$subtotal;
                                    ?>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#"><?php echo $nomor; ?></a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="asset/img/produk/<?php echo $pecah["direktori_gambar"]; ?>">
                                            </td>

                                            <td class="product-name">
                                                <a href=""><?php echo $pecah["nama_produk"]; ?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">Rp. <?php echo number_format($pecah["harga"]); ?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <?php echo $jumlah; ?>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">Rp. <?php echo number_format($subtotal); ?></span> 
                                            </td>
                                        </tr>
                                        <?php $nomor++; ?>
                                        <?php endforeach ?>
                                        <tr>
                                            <td class="actions" colspan="7">
                                                <a href="Checkout.php" class="add_to_cart_button">Chekout</a>
                                                 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <!-- </form> -->

                            <div class="cart-collaterals">


                 

                            <div class="cart_totals ">
                                <h2>Total Belanja</h2>

                                <table cellspacing="0">
                                    <tbody>
                                            <tr class="order-total">
                                            <th>Total Order</th>
                                            <td><strong><span class="amount">Rp. <?php echo number_format($totalBelanja); ?></span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/skel/3.0.1/skel.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/skel/3.0.1/skel-layout.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/skel/3.0.1/skel-viewport.min.js"></script>
    <script type="text/javascript" src="asset/js/main.js"></script>
    <script type="text/javascript">
        $('#Checkout').off('click').on('click', function () {
            console.log('masuk');
            window.location= 'Checkout.php' ;           
        });
    </script>

</body>
</html>
