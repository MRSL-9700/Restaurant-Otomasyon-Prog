<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="dist/js/jquery-3.5.1.min.js"></script>
<script src="dist/js/jquery.fullscreen-min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
<script type="text/javascript">
    $(window).resize(function() {

        console.log("Window Change : " + $(window).width());

        var Width = $(window).width();

        if (Width > 767) {
            $("#desktop").removeClass("hide");
            $("#mobile").addClass("hide");
        }
        if (Width < 767) {
            $("#mobile").removeClass("hide");
            $("#desktop").addClass("hide");
        }

        console.log($("#desktop").attr("class"));
        console.log($("#mobile").attr("class"));
    });

    $(document).ready(function() {

        if ($(window).width() > 767) {
            $("#desktop").removeClass("hide");

        }
        if ($(window).width() < 767) {
            $("#mobile").removeClass("hide");

        }
        console.log(Popper);
    });
</script>