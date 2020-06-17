<head>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="hover.css">

</head>
<script>
    $(function () {
        img1 = 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbLqy2xURGqyId4YoC62JDmqNeh0fdB7g_kun1Q-T2KV8bEyft&usqp=CAU';
        $('.img1').attr('src', img1);
        $('.img2').attr('src', img1);

        $(".grey2").on('mouseover', function () {
            $('.img2').animate({width: "62%", height: "auto"}, 100);
            $(".hrt2").animate({opacity:1},200);
        });
        $(".grey2").on('mouseleave', function () {
            $('.img2').animate({width: "60%", height: "auto"}, 100);
            $(".hrt2").animate({opacity:0.0},200);
        });
        $(".grey1").on('mouseover', function () {
            $(".hrt1").animate({opacity:1},200);
            $('.img1').animate({width: "62%", height: "auto"}, 100);
        });
        $(".grey1").on('mouseleave', function () {
            $(".hrt1").animate({opacity:0.0},200);
            $('.img1').animate({width: "60%", height: "auto"}, 100);
        });

        $(".grey1").on('click', function () {
            $(".hrt1").fadeOut(300);
            $(".hrt1").css('opacity','1.0');
            $(".hrt1").css('color','red');
            $(".hrt1").fadeIn(100);
        });
        $(".grey2").on('click', function () {
            $(".hrt2").fadeOut(100);
            $(".hrt2").css('color','red');
            $(".hrt2").fadeIn(100);
        });
        /*when the animation is over, remove the class*/


        setTimeout(function() {
            $('.zoomimg').animate({width: "28%"}, 'slow');
        }, 1000 );
        // your code here
    });

</script>
<style>

    .grey1 img, .grey2 img {
        margin-top: -100px;
        background-size: cover;
        background: no-repeat 50% 50%;
        width: 60%;
        height: auto;
        cursor: pointer;
    }

    .hrt1, .hrt2 {
        position: relative;
        top: 30%;
        cursor: pointer;
        color: #ffffff;
        font-size: 100px;
        opacity: 0.0;
    }
</style>

<body>
<div class="container" style="margin-top: 100px">
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link active" style="background: #006cef;color: white" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Top</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
    </ul>
</div>

<center style="margin-top: 10px">
    <div class="container-fluid">
        <div class="row">
            <div class="col grey1">
                <div class="hrt1">❤</div>
                <img class="img1 zooming">
            </div>
            <div class="col grey2">
                <div class="hrt2">❤</div>
                <img class="img2 zooming">
            </div>

        </div>
    </div>
</center>
</body>