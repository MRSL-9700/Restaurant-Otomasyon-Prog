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

            /*
            background-color: #000000;
            background-image: linear-gradient(315deg, black 20%, red 75%, white 100%);
            */

        }

        .hide {
            display: none;
        }
    </style>
    <script>
        function xalert(icons, titles, texts) {
            Swal.fire({
                icon: icons,
                title: titles,
                text: texts,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            });
        }
    </script>
</head>

<body>

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

    <div class="container-fluid">

        <div class="row">

            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">

                <div class="card border-0" style="opacity: 0.8;">
                    <br>
                    <svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-app-indicator text-danger mx-auto mt-5 mb-3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    </svg>
                    <div class="card-body text-center">

                        <h4 class="card-title">
                            Company Name
                        </h4>
                        <br>


                        <div class="container mt-5">
                            <form name="LoginInput" method="POST">
                                <div class="form-group row">
                                    <div class="col-md-6 mx-auto">
                                        <input type="text" style="height: 45px;" required class="form-control border border-danger font-weight-bold" placeholder="Kullanıcı Adı" name="inputUsername" id="inputUsername" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 mx-auto">
                                        <input type="password" style="height: 45px;" required class="form-control border border-danger font-weight-bold" placeholder="Parola" name="inputPassword" id="inputPassword" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-sm-2 col-1-12 mx-auto">

                                        <button type="button" value="True" name="LoginInput" class="btn btn-danger border-0  btn-lg">
                                            Oturum Aç
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <?php require_once("dist/js.php"); ?>

    <script type="text/javascript">
        var Form = $("form[name='LoginInput']");
        var FormSubmitButton = $("button[name='LoginInput']");

        FormSubmitButton.click(function() {
            var FormData = Form.serializeArray();

            var UserName = FormData[0].value;
            var PassWord = FormData[1].value;

            //xalert('success', "Ready", "Sayfa Hazır !");

            if (UserName == " " || UserName == "") {
                xalert('warning', "Uyarı", "Kullanıcı Adı Boş !");
            } else {
                if (PassWord == " " || PassWord == "") {
                    xalert('warning', "Uyarı", "Parola Boş !");
                } else {
                    var base64_Data = {
                        'UserName': {
                            'value': UserName,
                            'length': UserName.length
                        },

                        'PassWord': {
                            'value': PassWord,
                            'length': PassWord.length
                        },
                    };
                    $.post("library/login.php", base64_Data, function(data, status) {
                        console.log(data);
                        console.log(status);

                        var Q = JSON.parse(data);
                        console.log(Q);


                        xalert(Q.status, Q.info);




                        setTimeout(function() {
                            if (Q.status == "success") {
                                window.location.href = "main.php";
                            }
                        }, 2500);


                    });
                }

            };
        });
    </script>



</body>

</html>