
<?php

/**
 * @var \app\models\Product[] $products
 * @var \app\models\Product $title
 */
?>
<h2><?=$title?></h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">alias</th>
            <th scope="col">price</th>
        </tr>
        </thead>
        <?php foreach ($products as $product ):?>
        <tbody>
        <tr>
            <th scope="row"><?=$product->id?></th>
            <td> <a href="/products/view/<?=$product->id?>"><?=$product->title?></a></td>
            <td><?=$product->alias?></td>
            <td><?=$product->price?></td>
        </tr>
        </tbody>
        <?php endforeach;?>
    </table>


