<!DOCTYPE html>
<html>
<head>
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="tes.js"></script>
<meta charset=utf-8 />
<title>JS Bin</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
</head>
<body>
    <?php include "header.php"?>

  <input type='file' onchange="readURL(this);" />
    <img id="blah" src="asset/img/produk/produk (11).jpg" alt="your image"  width="100px" height="100px" />
  
  <input type='file' onchange="readURL1(this);" />
    <img id="blah1" src="#" alt="your image" width="100px" height="100px"/>
  
  <input type='file' onchange="readURL2(this);" />
    <img id="blah2" src="#" alt="your image" width="100px" height="100px"/>
    <?php include "footer.php"?>
</body>
</html>