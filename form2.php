<?php
include('header.php')
?>

<?php
if(isset($_REQUEST['fullname'])){
    $result = $_REQUEST['fullname'];
    var_dump($_REQUEST);
}

?>

<form method="post" action="">
    <input type="text" name="fullname" placeholder="Enter your full name">

    <button>Submit</button>
</form>

<?php
include('footer.php')
?>
