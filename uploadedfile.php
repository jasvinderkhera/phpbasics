<?php
if(isset($_FILES['image']['tmp_name']) != null){
    $image_name = $_FILES['image']['name'];
    $pathofImage = $_FILES['image']['tmp_name'];
    $extension= pathinfo($image_name, PATHINFO_EXTENSION);
    $renamed = rand(1111,9999)."_user_image.".$extension;
    // echo $pathofImage;
    move_uploaded_file($pathofImage,"images/".$renamed);
}
?>