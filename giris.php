<!DOCTYPE html>
<html>

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

<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="giris.php">Admin Giriş</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#kayitol">Kayıt OL</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#admin">Giriş</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <?php
    echo "<body bgcolor='#00bfff'>";
    if(isset($_POST['kullanici']) && isset($_POST['sifre']))
    {
        $kullanici = $_POST['kullanici'];
        $sifre = $_POST['sifre'];

        if(empty($kullanici) || empty($sifre)) {
            echo 'Lütfen boş bırakmayın';
        } else {
            echo 'Girilen kullanıcı adı: ' . $kullanici . ' şifre: ' . $sifre;
        }
    } else {
        echo 'Lütfen formu kullanın';
    }
    echo "<br>";

    ?>

<header class="bg-primary text-white text-center">
<section class="portfolio" id="admin">
        <h2 class="text-uppercase mb-0">GIRIS</h2>
        <hr class="star-light">
    <div class="container">
        <form action="yeni.php" method="post">
        <div class="form-group">
            Kullanıcı:<br/>
            <input type="text" name="kullanici" /><br/>
        </div>
        <div class="form-group">
            Şifre:<br/>
            <input type="password" name="sifre" /><br/>
        </div>
        <input type="submit" value="Giriş Yap" class="btn btn-primary" />
    </form>
    </div>
</section>
</header>
<section id="kayitol">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Kayıt Ol</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">

            </div><br>
        </div>
    </div>
    </div>
</section>

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
                <p class="lead mb-0">Basit bir deneme sitesidir.
                </p>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright GİZEM Website 2018</small>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="js/freelancer.min.js"></script>
</body>
</html>




