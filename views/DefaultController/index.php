<?php ?>
<!DOCTYPE html>
<html lang="pl">
<head>
<?php include (dirname(__DIR__).'/head.html'); ?>
</head>
<body>
<header>
    <div class="container">
        <div id="logo">
            <a href="?page=index"><img src="public/img/logo.png"> </a>
        </div>
        <div id="login">
            <a href="?page=login"><img src="public/img/login.png"></a>
        </div>
    </div>
    <?php include(dirname(__DIR__) . "/header.html");?>
</header>
<?php if(isset($_SESSION))
    print_r($_SESSION);
?>

</body>
</html>
