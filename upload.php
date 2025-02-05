<?php
include('header.php')
?>
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
<h2>Upload files</h2>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" accept=".jpg,.jpeg,.png">
    <button>Upload</button>
</form>

<div class="gallery">
    <?php
    $images = scandir("images/");
    // var_dump($images);
    for($i=2;$i<sizeof($images);$i++){
        echo "<img src='images/$images[$i]'>";
    }
    ?>
</div>

<?php
include('footer.php')
?>