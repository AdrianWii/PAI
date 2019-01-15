<!DOCTYPE html>
<html>
<body>
<?php
include (dirname(__DIR__.'/header.html'));
?>
<h1>LOGIN</h1>
<?php
if (isset($message)):?>
    <?php foreach ($message as $item): ?>
        <div><?= $item ?></div>
    <? endforeach; ?>
<?php endif; ?>
<form action="?page=login" method="post">
    <input name="email" placeholder="email" required/>
    <input name="password" type="password" placeholder="Password" required/>
</form>
<div>
    aaaa
</div>
</body>
</html>


