<?php
include_once("models/user.php");
$user = new User(1,"salva","correu@correu.com","homer-x.jpg");

?>
<article class="panel is-primary">
    <p class="panel-heading">
        Informacion Usuario
    </p>
    <div class="box">
        <div>
            <h2><?= $user->__getName() ?></h2>
            <h3><?= $user->__getEmail() ?></h3>
            <div style="text-align: center;"><img src=<?=$user->__getImage() ?> width="200" height="200"></div>
        </div>
    </div>
</article>