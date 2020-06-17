<?php
$img = str_replace('data:image/jpeg;base64,', '', $_POST['img_data']);
$img = str_replace(' ', '+', $img);
//file_put_contents('img.jpg', ($img));

generateImage($_POST['img_data']);

function generateImage($img)

{

    $folderPath = "images/";


    $image_parts = explode(";base64,", $img);

    $image_type_aux = explode("image/", $image_parts[0]);

    $image_type = $image_type_aux[1];

    $image_base64 = base64_decode($image_parts[1]);

    $file = uniqid() . '.jpg';


    file_put_contents($file, $image_base64);
    echo '1';
}


?>