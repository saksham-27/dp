<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.min.js"
            integrity="sha256-bIJf9UoBlMSWH93AiO3pECjw1Gx2n4LBil6o2M9v08k=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
</head>
<style>
    #overlay {
        background-color: black;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        opacity: 0.2; /* also -moz-opacity, etc. */
        z-index: 10;
        display: none;
    }
</style>
<body>
<div id="overlay">

</div>


<div class="container" style="margin-top: 100px">
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="top.php">Top</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style="background: #006cef;color: white" href="profile.php">Profile</a>
        </li>
    </ul>
    <div class="row" style="margin-top: 20px">
        <div class="col-sm-5">
            <center>
                <?php if (1 === 1){ ?>
                    <figure class=" c4-izmir c4-border-corners-2 c4-image-rotate-right c4-gradient-bottom-right">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbLqy2xURGqyId4YoC62JDmqNeh0fdB7g_kun1Q-T2KV8bEyft&usqp=CAU"
                             style="object-fit: cover; height: 250px;width: 250px" class="img-thumbnail"
                             alt="Sample Image">
                        <figcaption class="c4-layout-center-center img_head1">
                            <div class="c4-izmir-icon-wrapper c4-fade" style="--transition-duration: 0ms">
                                <h3>
                                    <i class="hart1 fa fa-camera" aria-hidden="true"></i>
                                    <button type="button" id="changeProfile" class="btn btn-primary btn-sm"
                                            data-toggle="modal"
                                    >
                                        Change
                                    </button>
                                </h3>
                            </div>
                        </figcaption>
                    </figure>
                <?php }else { ?>
                <img src="https://5.imimg.com/data5/WO/KT/MY-20506059/model-shoot-500x500.jpg"
                     style="object-fit: cover; height: 250px;width: 250px" class="img-thumbnail" alt=""></center>
            <?php } ?>
        </div>
        <div class="col-sm-7">
            <h1>Mike Penz</h1>
            <h2>Total Likes: 2557</h2>
        </div>
    </div>
    <div id="notifications">

        <h1 style="color: #919191;margin-top: 50px">No Recent Notifications</h1>
    </div>
</div>
<div class="modal1" id="myModal"
     style="position: fixed; top 0;left: 0;right: 0;bottom: 0;width 100%;height: 100%;opacity: 0;z-index: -10">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Heading</h4>
                <button type="button" class="close" id="closeModel" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Modal body..

                <center>
                    <div style="max-width: 100%">
                        <img id="image" style="display: block;width: 100%"
                             src="https://5.imimg.com/data5/WO/KT/MY-20506059/model-shoot-500x500.jpg">
                    </div>
                </center>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id="crop" class="btn btn-primary" data-dismiss="modal">Crop & Upload</button>
            </div>

        </div>
    </div>
</div>
</body>
<script>
    $(function () {
        $('#notifications').height($(window).height() - $('body').height() - 100);
        $('#closeModel').on('click', function () {
            $('#myModal').css('opacity', '0');
            $('#myModal').css('z-index', '-10');

        });
        $('#changeProfile').on('click', function () {
            $('#myModal').css('opacity', '1');
            $('#myModal').css('z-index', '10');

        });
    });
    var $image = $('#image');

    $image.cropper({
        viewMode: 2,
        aspectRatio: 7 / 8,
        crop: function (event) {
            console.log(event.detail.x);
            console.log(event.detail.y);
            console.log(event.detail.width);
            console.log(event.detail.height);
            console.log(event.detail.rotate);
            console.log(event.detail.scaleX);
            console.log(event.detail.scaleY);
        }
    });
    $('#crop').on('click', function () {
        $('#overlay').css('display', '');
        var cropper = $image.data('cropper');
        $.post("save_file.php", {img_data: cropper.getCroppedCanvas().toDataURL('image/jpeg')}, function (result) {
            // alert(result);
            if (result === '1') {
                $('#myModal').css('opacity', '0');

                $('#myModal').css('z-index', '-10');
                toastr.success('Yayy!.', 'Image Uploaded', {timeOut: 4000});

            } else                 toastr.success('Some Problem Occurred!.', 'Image not uploaded', {timeOut: 4000});


            $('#overlay').css('display', 'none');

        });
        // console.log(cropper.getCroppedCanvas().toDataURL('image/jpeg'));
    });

</script>
