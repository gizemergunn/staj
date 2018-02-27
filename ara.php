<!DOCTYPE html>
<html >

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>İlk Giriş</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

</head>
<body>
<header >
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="yeni.php">Projeye Başlıyorum.</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>

        </div>
    </nav>
</header>
<br>
<br>
<br>
<br>
<br>
<div>
<table cellspacing="4" cellpadding="4" border="3px" align="center">

    <tr>
        <td><h4 align="center">Baslik</h4></td>
        <td><h4 align="center">İcerik</h4></td>
        <td><h4 align="center">Kategori</h4></td>
    </tr>
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "test_db");

$arama=$_POST['arama']; //arama değişkenini post ile aldık.

if($arama==""){ //eğer arama boşsa...
header("Location:giris.php");
}
else { //boş değilse...

    $bul = mysqli_query($link, "SELECT * FROM tbl_icerik WHERE baslik LIKE '%$arama%'" );

    while ($getir = mysqli_fetch_array($bul))
    {
        $baslik = $getir['baslik'];
        $icerik = $getir['icerik'];
        $kategori=$getir['kategori'];

        echo "<tr>";
        echo" <td>$baslik</td>";
        echo"<td>$icerik</td>";
        echo"<td>$kategori</td>";
        echo"</tr>";
    }
}

?>
</table>
</div>
<br>
<br>
<br>
<br>
<br>
<p>

</p>
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Deneme </h4>
                <p class="lead mb-0">İlk WebSİte

            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Paylaş</h4>

            </div>
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4">WebSite hakkında</h4>
                <p class="lead mb-0">Basit bir deneme sitesidir.</p>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright GİZEM Website 2018</small>
    </div>
</body>

