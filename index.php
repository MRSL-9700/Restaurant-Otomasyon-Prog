<?php
header("location: app/");
require_once("docs/controller.php");
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Otomasyon Prog</title>

    <?php
    require_once("dist/css.php");
    ?>

    <link rel="stylesheet" href="dist/css/navbar.css?v=<?php echo rand(1, 9999); ?>">
    <link rel="stylesheet" href="dist/css/animate.min.css?v=<?php echo rand(1, 9999); ?>">
    <style type="text/css">
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


        #main {
            width: auto;
            height: auto;
            position: static;
            margin-left: 20%;
            margin-right: 20%;

            padding: 15px;
            margin-top: 15%;
            margin-bottom: 25%;
        }
    </style>
</head>

<body class="text-white">



    <div class="container-fluid text-center">
        <nav class="navbar navbar-expand-lg navbar-dark animate__animated animate__backInUp">
            <div id="navbar-container" class="container w-50 p-2">
                <a class="navbar-brand" href="#">L O G O</a>
                <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#IndexCover" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon bg-dark"></span>
                </button>
                <div class="collapse navbar-collapse" id="IndexCover">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Ev <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-12">
                <div id="main" class="text-center  ">

                    <h3 class="animate__animated animate__backInLeft">Lorem Ipsum</h3>
                    <p class="animate__animated animate__backInRight">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis quisquam dolor recusandae laborum distinctio. Provident fuga pariatur quasi quae quo. Libero magni, animi molestias similique nam reiciendis eaque eos unde!</p>
                    <a href="app/index.php" class="btn border-0 blockquote bg-transparent " style=""> Uygulama'ya Git </a>

                </div>

            </div>
            <div class="col-12  p-5 bg-dark">
                <h3> Header </h3>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum modi fugiat necessitatibus quam iusto. Voluptates, ipsa quisquam enim distinctio architecto veniam nesciunt fugit modi, ex tempora expedita voluptatem? Explicabo, accusamus?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum modi fugiat necessitatibus quam iusto. Voluptates, ipsa quisquam enim distinctio architecto veniam nesciunt fugit modi, ex tempora expedita voluptatem? Explicabo, accusamus?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum modi fugiat necessitatibus quam iusto. Voluptates, ipsa quisquam enim distinctio architecto veniam nesciunt fugit modi, ex tempora expedita voluptatem? Explicabo, accusamus?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum modi fugiat necessitatibus quam iusto. Voluptates, ipsa quisquam enim distinctio architecto veniam nesciunt fugit modi, ex tempora expedita voluptatem? Explicabo, accusamus?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum modi fugiat necessitatibus quam iusto. Voluptates, ipsa quisquam enim distinctio architecto veniam nesciunt fugit modi, ex tempora expedita voluptatem? Explicabo, accusamus?
                </p>
            </div>
        </div>
    </div>

    <footer class=" container-fluid mt-4 animate__animated animate__backInDown ">
        <p class="text-center text-white mt-2">&copy; Company <b>Localhost</b> </p>
    </footer>



    <?php
    require_once("dist/js.php");
    ?>
    <script type="text/javascript">
        $(window).resize(function() {
            var x = $(window).width();
            console.log(x);
            // #navbar-container
            // 768 > window
            if (x < 768) {
                $("#navbar-container").addClass("container-fluid");
                $("#navbar-container").removeClass("container").removeClass("w-50");
            }
            if (x > 768) {
                $("#navbar-container").removeClass("container-fluid");
                $("#navbar-container").addClass("container").addClass("w-50");;
            }


        });
        $(document).ready(function() {
            location.href = "#main";
        })
    </script>
</body>

</html>