<?php
require_once("../controller/LibraryConnect.php");
$SessioN = new Session();
try {
    $SessioN->SessionStart();
    $SessioN->logoutSession("AppSession");

?>


<?php


} catch (PDOException $e) {
    print $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exit Page</title>
    <!-- Bootstrap Main Css Framework -->
    <link rel="stylesheet" href="../dist/css/bootstrap.css?v=<?php echo rand(1, 9999); ?>">
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css?v=<?php echo rand(1, 9999); ?>">

    <!-- Bootstrap Grid Css Framework -->
    <link rel="stylesheet" href="../dist/css/bootstrap-grid.css?v=<?php echo rand(1, 9999); ?>">
    <link rel="stylesheet" href="../dist/css/bootstrap-grid.min.css?v=<?php echo rand(1, 9999); ?>">

    <!-- Bootstrap Reboot Css Framework -->
    <link rel="stylesheet" href="../dist/css/bootstrap-reboot.css?v=<?php echo rand(1, 9999); ?>">
    <link rel="stylesheet" href="../dist/css/bootstrap-reboot.min.css?v=<?php echo rand(1, 9999); ?>">

    <link rel="stylesheet" href="../dist/css/button.css?v=<?php echo rand(1, 9999); ?>">
    <!--https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark/dark.css-->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark/dark.css?v=<?php echo rand(1, 9999); ?>">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4/bootstrap-4.css?v=<?php echo rand(1, 9999); ?>">

    <style type="text/css">
        body {
            font-family: URW Chancery, cursive;

            background-image: url("../dist/img/5a572afeda849.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;

        }

        .hide {
            display: none;
        }
    </style>
</head>

<body class=" ">

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

        <a class="navbar-brand mr-auto" href="javascript:history.go(-1)" alt="Geri Dönmek Için Tıklayın">

            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-danger hide" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" />
            </svg>
        </a>
        <!-- <a href="javascript:history.go(-1)"></a> -->
        <a class="navbar-brand mx-auto" href="index.php">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-app-indicator text-danger hide" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            </svg>
        </a>
        <a class="navbar-brand ml-auto" href="javascript:history.go(+1)">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">

            </svg>
        </a>

    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
                <div class="card card-header-tabs border-0 text-center" style="opacity: 0.8;">
                    <div class="card-img-top">
                        <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-app-indicator text-danger mt-5 rounded-right rounded-bottom " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                            <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        </svg>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title m-4">
                            <b class="display-4">
                                Çıkış Yaptınız !
                            </b>
                        </h4>
                        <p class="card-text  mt-5 mb-5">
                            Email : <b> email@localhost.com </b>
                            <br>
                            Rank : <b> Müşteri </b>
                        </p>
                        <div class="card-footer mt-5 mb-5 border-0 bg-transparent">
                            <a href="../index.php" class="btn shadow shadow-lg btn-lg text-white btn-danger">
                                Giriş
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>



    <script src="../dist/js/jquery-3.5.1.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
</body>

</html>