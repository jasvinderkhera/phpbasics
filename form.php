<?php
if(isset($_POST['username'])){
$username = $_POST['username'];
var_dump($username);
}
?>

<h1>Forms</h1>
<form action="" method="POST">
    <input type="text" name="username" placeholder="Enter your username">
    <button>Submit</button>
</form>