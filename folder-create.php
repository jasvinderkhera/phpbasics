<?php
if(file_exists("images")){
    
    echo 'folder exists';
}else{
    mkdir('images');
    echo 'folder created';
}
?>