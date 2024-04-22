<?php
if(isset($_GET['page'])){
    if($_GET['page'] == 'contact'){
        include('contact.php');
    }

    else if($_GET['page'] == 'catalogue'){
        include('catalogue.php');
    }
}
else{
    include('home.php');
}



?>
