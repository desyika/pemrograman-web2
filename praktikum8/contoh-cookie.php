<?php
    $value = "ini cookie pertama";
    if(!isset($_COOKIE['firs_cookie'])){
         setcookie("firs_cookie", $value, time() + 3600 * 24 * 30);
    }
?>    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>implementasi cookie</h1>
    <?php if (isset($_COOKIE['firs_cookie'])):?>
        <p><?php echo $_COOKIE['firs_cookie'];?></p>
    <?php else:?>
        <p>cookie belum di-set</p>
    <?php endif;?>

    <!-- menghapus cookie -->
     <?php
        if(isset($_COOKIE['firs_cookie'])){
            setcookie('firs_cookie');
        }
    ?>
</body>
</html>