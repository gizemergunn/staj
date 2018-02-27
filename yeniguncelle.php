<!DOCTYPE html>
<html >

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>İlk Denemem</title>

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
<body id="page-top">
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
    <?php
    $link = mysqli_connect("127.0.0.1", "root", "", "test_db");
    ?>

    <?php
    $id=$_GET["id"];
    if($_POST) {
        $baslik = $_POST["baslik"];
        $icerik = $_POST["icerik"];
        $kategori = $_POST["kategori"];

        $sonuc = mysqli_query($link, "UPDATE tbl_icerik SET baslik='$baslik', icerik='$icerik', kategori='$kategori'  WHERE id=$id");

        if($sonuc) {
            echo 'Başarıyla güncellendi';}

        else{
            echo "Bir problem oluştu, verileri kontrol ediniz";}
    }
    else {

        echo "<table border='3px' cellspacing='4'cellpadding='4' align='center'>";
        echo "  <tr>";
        echo " <td><h4 align='center'>İD</h4></td>";
        echo " <td><h4 align='center'>Baslik</h4></td>";
        echo "  <td><h4 align='center'>İcerik</h4></td>";
        echo "  <td><h4 align='center'>Kategori</h4></td>";

        echo " </tr>";
        echo "</thead>";
        $id=$_GET["id"];
        $verileriCek = mysqli_query($link, "select * from tbl_icerik WHERE id=$id");
        while ($b = mysqli_fetch_array($verileriCek)) {

            $id = $b['id'];
            $baslik = $b['baslik'];
            $icerik = $b['icerik'];
            $kategori = $b['kategori'];

            echo "<tr>";
            echo " <td>$id</td>";
            echo " <td>$baslik</td>";
            echo "<td>$icerik</td>";
            echo "<td>$kategori</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
<p>

</p>
    <form action="" method="post">
        <table cellspacing="5" cellpadding="5" border="1px" align="center">

            <tr>
                <td>Başlık</td>
                <td><input type="text" name="baslik" value="<?php echo $baslik; ?>" placeholder="Başlık Giriniz"></td>
            </tr>
            <tr>
                <td>İçerik</td>
                <td><input type="text" name="icerik" cols="30" rows="5" value="<?php echo $icerik; ?>" placeholder="İçerik Giriniz"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori" cols="30" rows="5" value="<?php echo $kategori; ?>" placeholder="kategori Giriniz"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="guncelle" /></td>
            </tr>
        </table>

    </form>
</div>
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
</div>
</body>
</html>




