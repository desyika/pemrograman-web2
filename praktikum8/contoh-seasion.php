<?php
    session_start();
    if (!isset($SESSION['count'])){
        $_SESSION['count'] = 1;
    }else{
        $count = $_SESSION['count'];
        $SESSION['count'] = $count + 1;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Implementasi Session</h1>
    <P> Anda telahh mengunjungi halaman ini <?php echo $_SESSION ['count']?> kali.</p>
    
</body>
</html>