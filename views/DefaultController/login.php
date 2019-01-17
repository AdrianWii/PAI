<!DOCTYPE html>
<html>

<head>
    <?php include(dirname(__DIR__) . '/head.html'); ?>
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
    <?php include(dirname(__DIR__) . "/header.html"); ?>
</header>
<div class="box">
    <h1>LOGIN</h1>

    <?php if (isset($message)): ?>
        <?php foreach ($message as $item): ?>
            <div><?= $item ?></div>
        <?php endforeach; ?>
    <?php endif; ?>

    <form action="?page=login" method="POST">
        <input name="email" placeholder="Email" required>
        <input name="password" placeholder="Password" type="password" required>
        <input type="submit" value="Zaloguj się" style="cursor: pointer">
        <input type="button" value="Nowy klient"
               onclick="window.location.href = '?page=new_user';" style="
               cursor: pointer;">
    </form>

</div>
</body>
</html>


