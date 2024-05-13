<?php
    $page= 'home';
    if(isset($_GET['page']))
        $page = ($_GET['page']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/menu_squelette.css">
    <link rel="stylesheet" href="css/footer_squelette.css">

    <link rel="stylesheet" href="css/<?=$page?>.css">
</head>
<body>
    <?php
    include 'menu_squelette.php';
    include $page . '.php';
    ?>

    

    <?php
    include 'footer_squelette.php';
    ?>

</body>
</html>