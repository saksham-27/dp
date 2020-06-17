<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id11"
          content="104542777987-ruj96p52qsnntnqe1ts1p2kcvppuve2l.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
</head>
<body>


<body>
<div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
<script>
    function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
    }
</script>


<div class="container">
    <div class="container" style="margin-top: 100px;margin-bottom: 40px">
        <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" style="background: #006cef;color: white" href="top.php">Top</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
            </li>
        </ul>
    </div>
    <div>
        <?php for($i=0;$i<10;$i++){ ?>
            <div class="row" style="margin-top: 20px">
                <div class="col-sm-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbLqy2xURGqyId4YoC62JDmqNeh0fdB7g_kun1Q-T2KV8bEyft&usqp=CAU"
                         style="object-fit: cover; height: 120px;width: 120px" class="rounded-circle">
                </div>
                <div class="col-sm-9">
                    <h2>Hiroshima Nagasaki</h2>
                    <h4>@neon_tesla</h4>
                    <h5>Likes: 1350~</h5>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script>
    $(function () {
        $('#username').change(function () {
            $('#userHelp').text('This username is available!');
            $('#userHelp').css('color', '#00a903');
            $('#userHelp').css('display', '');

        });
        $('#submit').on('click', function (e) {
            //  e.preventDefault();
            $("<a href='http://localhost/dp'></a>").click();
        });
    });
</script>
</body>
