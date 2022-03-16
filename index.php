<!DOCTYPE html>
<html lang="en" class="has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/bulma.min.css">
    <title>ListaCompra</title>
</head>
<body>
    <nav class="navbar is-fixed-top">
        <div class="navbar-brand">
            <a class="navbar-item">

                <img src="lista.png" width="112" height="160">
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary">
                            <strong>Sing up</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section class="section" id="seccionPrincipal">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <?php include("view/userDetails.php"); ?>
                </div>
                <div class="column is-three-quarters">
                    <?php include("view/shoppingList.php");?>
                </div>
            </div>
        </div>
    </section>

</body>
</html>