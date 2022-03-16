<?php
include_once("models/shoppingListElement.php");
$shoppingListElements = array();
$shoppingListElements[0] = new shoppingListElement(1,"bacalao",2,1,"pescado");
$shoppingListElements[1]= new shoppingListElement(1,"longaniza",3,2,"carne");
$shoppingListElements[2]= new shoppingListElement(1,"cerezas",2,1.5,"fruta");

$shoppingListName = "lista molona";
?>
<article class="panel is-primary">
    <p class="panel-heading" style="text-align: center;">
Lista de la compra - <i><?=$shoppingListName?></i>
</p>
<div class="box">
    <table class="table is-fullwidth is-bordered is-striped is-narrow is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total = 0;
            foreach ($shoppingListElements as $shoppingItem) {
             $productTotal = $shoppingItem->getQuantity()*$shoppingItem->getPrice();
             $total = $total +$productTotal;
             print("<tr><td>{$shoppingItem->getName()}</td><td>{$shoppingItem->getQuantity()}</td><td>$productTotal</td>
             <td>{$shoppingItem->getCategoria()}</td></tr>");  
            }
            print("<tfoot><th colspan=\"2\">TOTAL</th><th>$total</th></tfoot>");
            ?>
        </tbody>
</div>

</article>
