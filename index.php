<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="izmir.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="hover-min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <script type="text/javascript" src="jquery.color.js"></script>
</head>
<script>
    $(function () {
        function reset() {
            $('.fig1').removeClass('animate__zoomIn');
            $('.fig2').removeClass('animate__zoomIn');
            $(this).unbind("mouseenter mouseleave");
        }

        $(".img_head1").on('click', function () {
            reset();
            $('.hart1').animate({
                color: "#cb0300",
                fontSize: "60px"
            }, 300);
            setTimeout(function () {
                $('.fig1').addClass('animate__zoomOut');
            }, 400);
            setTimeout(function () {
                $('.fig2').addClass('animate__fadeOutRight');
            }, 400);
            setTimeout(function () {
                addImgs()
            }, 1100);
        });

        $(".img_head2").on('click', function () {
            reset();

            $('.hart2').animate({
                color: "#cb0300",
                fontSize: "60px"
            }, 300);
            setTimeout(function () {
                $('.fig2').addClass('animate__zoomOut');
            }, 400);
            setTimeout(function () {
                $('.fig1').addClass('animate__fadeOutLeft');
            }, 400);
            setTimeout(function () {
                addImgs()
            }, 1100);
        });

        function addImgs() {
            $('body').blur();
            img1 = 'https://5.imimg.com/data5/WO/KT/MY-20506059/model-shoot-500x500.jpg';
            img2 = 'https://5.imimg.com/data5/WO/KT/MY-20506059/model-shoot-500x500.jpg';
            $('.imgTag1').attr('src', img1);
            $('.imgTag2').attr('src', img2);

            $('.fig1').attr('class', 'fig1');
            $('.fig2').attr('class', 'fig2');
            $('.fig1').attr('class', 'fig1 animate__animated c4-izmir c4-border-corners-2 c4-image-rotate-right c4-gradient-bottom-right');
            $('.fig2').attr('class', 'fig2 animate__animated c4-izmir c4-border-bottom-left c4-image-rotate-right c4-gradient-bottom-right');


            $('.fig1').addClass('animate__zoomIn');
            $('.fig2').addClass('animate__zoomIn');
            $('.hart1').css({
                color: "#ffffff",
                fontSize: "30px"
            });
            $('.hart2').css({
                color: "#ffffff",
                fontSize: "30px"
            });
        }
    });
</script>
<style>
    .c4-izmir {
        --primary-color: #F6CD14;
        --secondary-color: #D0206E;
        --transition-duration: 400ms;
        --border-width: 4px;
        --overlay-opacity: .9;
    }
    .fig1,.fig2{
        width: 90%;
        height: auto;
    }
</style>
<body>
<div class="container" style="margin-top: 100px">
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link active" style="background: #006cef;color: white" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="top.php">Top</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profile.php">Profile</a>
        </li>
    </ul>
</div>

<center style="margin-top: 10px">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12" style="margin-bottom: 10px">
                <figure class="fig1 animate__animated c4-izmir c4-border-bottom-left c4-image-rotate-right c4-gradient-bottom-right">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbLqy2xURGqyId4YoC62JDmqNeh0fdB7g_kun1Q-T2KV8bEyft&usqp=CAU"
                         alt="Sample Image" class="imgTag1">
                    <figcaption class="c4-layout-center-center img_head1">
                        <div class="c4-izmir-icon-wrapper c4-fade" style="--transition-duration: 0ms">
                            <h3>
                                <i class="hart1 fa fa-heart" aria-hidden="true"></i>
                            </h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 col-sm-12 ">
                <figure class="c4-izmir c4-border-corners-2 c4-image-rotate-right c4-gradient-bottom-right fig2 animate__animated">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbLqy2xURGqyId4YoC62JDmqNeh0fdB7g_kun1Q-T2KV8bEyft&usqp=CAU"
                         alt="Sample Image" class="imgTag2">
                    <figcaption class="img_head2 c4-layout-center-center">
                        <div class="c4-izmir-icon-wrapper" style="--transition-duration: 0ms">
                            <h3>
                                <i class="hart2 fa fa-heart" aria-hidden="true"></i>
                            </h3>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</center>
</body>
