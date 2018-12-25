<?php
include 'config.php';
// menyimpan data kedalam variabel


if (isset($_POST['kirim'])) {
	$nama           = $_POST['name'];
	$email       	= $_POST['email'];
	$subject  		= $_POST['subject'];
	$pesan          = $_POST['message'];
	$query="INSERT INTO komentar SET nama='$nama',email='$email',subject='$subject',pesan='$pesan'";
if(mysqli_query($conn, $query)) {
   ?>
   <script type="text/javascript">
      alert("Pesan Terkirim");
      window.location="contact.php";
   </script>
   <?php
} 
//tutup kurung jika pesan berhasil disimpan dalam database
else {
    ?>
   <script type="text/javascript">
      alert("Pesan gagal Terkirim");
      window.location="contact.php";
   </script>
   <?php
}
//tutup kurung pesang gagal karena database
}
//tutup kurung juka tombol kirim dipencet
else {
   ?>
   <script type="text/javascript">
      window.location="index.php";
   </script>
   <?php
}


?>
