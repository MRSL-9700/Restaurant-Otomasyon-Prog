<?php
require_once("controller/AppController.php");

?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Restaurant - Otomasyon Prog</title>
    <?php require_once("dist/css.php"); ?>
    <style>
        body {
            /*ackground-color: #363636;*/
            background-image: url("dist/img/5a572afeda849.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;


        }

        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div id="desktop" class="hide">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand mr-auto" href="javascript:history.go(-1)" alt="Geri Dönmek Için Tıklayın">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" />
                </svg>
            </a>
            <!-- <a href="javascript:history.go(-1)"></a> -->
            <a class="navbar-brand mx-auto" href="index.php">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-app-indicator text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                </svg>
            </a>
            <a class="navbar-brand ml-auto" href="javascript:history.go(+1)">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 8.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" />
                </svg>
            </a>

        </nav>

    </div>
    <div id="mobile" class="hide">
        <div class="container-fluid pt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-light mb-3">
                        <div class="card-header card-header-pills border-0">
                            <h5 class="card-title text-danger float-left editorbx-css-70">
                                <span>
                                    <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-grid " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                                    </svg>
                                </span>
                                <b class="popover-header bg-transparent">
                                    Header
                                </b>
                            </h5>
                            <p class="card-text float-right pt-2 text-muted">
                                <b>
                                    Lüften Masa Seçimi Yapınız...
                                </b>
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-sm-6, col-md-6 col-6">
                                    <div class="card text-danger border-0 shadow-lg mb-3">
                                        <div class="row no-gutters">
                                            <div class="col-xl-4 col-sm-4, col-md-4 col-4">
                                                <!-- Image or SVG -->
                                                <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-grid card-img my-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                                                </svg>
                                            </div>
                                            <div class="col-xl-8 col-sm-8, col-md-8 col-8">
                                                <div class="card-body">
                                                    <h5 class="card-title my-2">
                                                        Masa <b>1</b>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-sm-6, col-md-6 col-6">
                                    <a href="#" dataIcon="Lock">

                                        <div class="card text-white border-0 bg-danger shadow-lg mb-3">
                                            <div class="row no-gutters">
                                                <div class="col-xl-4 col-sm-4, col-md-4 col-4">
                                                    <!-- Image or SVG -->
                                                    <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-grid card-img my-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                                                    </svg>
                                                </div>
                                                <div class="col-xl-8 col-sm-8, col-md-8 col-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title my-2">
                                                            Masa <b>2</b>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer fixed-bottom bg-light pb-0 pt-3">

            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-4">
                        <a href="" class="w-100 h-100  text-center">
                            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-arrow-left-short text-danger mt-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-4">
                        <a href="" class="offset-2">
                            <svg width="5em" height="4em" viewBox="0 0 16 16" class="bi bi-app-indicator text-danger mt-2 mr-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-4">
                        <div class="btn-group dropup">
                            <button type="button" class="btn dropdown-toggle text-danger  mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <svg width="4em" height="3em" viewBox="0 0 16 16" class="bi bi-view-list text-danger mt-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M3 4.5h10a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H3zM1 2a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2zm0 12a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 14z" />
                                </svg>
                            </button>
                            <div class="dropdown-menu dropdown-menu-left">
                                <a class="dropdown-item" href="#">

                                </a>

                                <a class="dropdown-item" href="#">Action 2</a>
                                <a class="dropdown-item" href="#">Action 3</a>
                                <a class="dropdown-item" href="#">Action 4</a>
                                <a class="dropdown-item" href="#">Action 5</a>
                                <a class="dropdown-item" href="#">Action 6</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a class="navbar-brand mr-auto " href="javascript:history.go(-1)" alt="Geri Dönmek Için Tıklayın">

            </a>
            <!-- <a href="javascript:history.go(-1)"></a> -->
            <a class="navbar-brand mx-auto" href="index.php">

            </a>



        </footer>

    </div>
    <!--nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand mr-auto" href="javascript:history.go(-1)" alt="Geri Dönmek Için Tıklayın">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left-square-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm9.5 8.5a.5.5 0 0 0 0-1H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5z" />
            </svg>
        </a>
         
        <a class="navbar-brand mx-auto" href="index.php">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-app-indicator text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            </svg>
        </a>
        <a class="navbar-brand ml-auto" href="javascript:history.go(+1)">
            <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-right-square-fill text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 8.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" />
            </svg>
        </a></nav-->

    <div class="container-fluid" style="display:none;">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="card shadow-lg border-0 ">
                    <div class="w-100  h-25 p-3">
                        <span class="badge badge-success font-weight-bold float-left">2</span>
                        <span class="badge badge-danger float-right">10</span>
                    </div>
                    <a href="" class="text-center">
                        <div class="w-100 h-75 p-5 text-center">
                            <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-ui-checks-grid text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 10a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H2zm9-9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-3zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854l-2 2a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708L3 3.793l1.646-1.647a.5.5 0 1 1 .708.708z" />
                            </svg>
                            <h4 class="mt-4 text-danger">
                                Masalar
                            </h4>
                        </div>
                    </a>


                </div>
            </div>
            <div class="col-md-4 mt-2 ">
                <div class="card shadow-lg pt-4">

                    <a href="" class="link">
                        <div class="w-100 h-100 p-5 text-center">
                            <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-ui-checks-grid  text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 10a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H2zm9-9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-3zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854l-2 2a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708L3 3.793l1.646-1.647a.5.5 0 1 1 .708.708z" />
                            </svg>
                            <h4 class="mt-4 text-danger">
                                <span class="badge badge-danger text-white">
                                    0
                                </span>
                                Siparişlerim
                            </h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-2 ">
                <div class="card shadow-lg pt-4">

                    <a href="" class="link">
                        <div class="w-100 h-100 p-5 text-center">
                            <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-ui-checks-grid text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 10a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1H2zm9-9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-3zm0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-3zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-3zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.354.854l-2 2a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708L3 3.793l1.646-1.647a.5.5 0 1 1 .708.708z" />
                            </svg>
                            <h4 class="mt-4 text-danger">
                                <span class="badge badge-danger text-white">
                                    0
                                </span>
                                Fatura
                            </h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <hr class="border border-white w-100">

            <hr class="border border-white w-75">

            <hr class="border border-white w-50">

            <hr class="border border-white w-25">

        </div>







        <div class="row">
            <div class="col-md-6 mt-2">
                <div class="card shadow-lg pt-4">


                    <div class="w-100 h-100 p-5 text-center">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-alarm-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                        </svg>
                        <h4 class="mt-4 text-danger">
                            Çalışma Saatleri
                            <br><br>
                            <span class="badge badge-danger">07:00</span> <b class="text-white">---</b> <span class="badge badge-dark">23:00</span>

                        </h4>
                    </div>

                </div>
            </div>
            <div class="col-md-6 mt-2">
                <div class="card shadow-lg pt-4">


                    <div class="w-100 h-100 p-5 text-center">
                        <svg width="2.5em" height="2.5em" viewBox="0 0 16 16" class="bi bi-building text-dark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fil.l-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                            <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                        </svg>
                        <h4 class="mt-4 text-danger">
                            Adress
                            <p class="text-dark " style="font-size: 12px;margin-top: inherit;">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                        </h4>
                    </div>

                </div>
            </div>

        </div>
    </div>

    </div>
    <?php require_once("dist/js.php"); ?>
</body>

</html>