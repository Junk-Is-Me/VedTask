<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>product_id</th>
            <th>product_name</th>
            <th>product_price</th>
            <th>product_article</th>
            <th></th>
            <th></th>
            <th>product_quantity</th>
            <th>date_create</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['product_id'] ?></td>
                <td><?= $product['product_name'] ?></td>
                <td><?= $product['product_price'] ?></td>
                <td><?= $product['product_article'] ?></td>
                <td class="js-quantity"><?= $product['product_quantity'] ?></td>
                <td><a href="#" data-pid="<?= $product['id'] ?>" class="js-minus">-</a></td>
                <td><a href="#" data-pid="<?= $product['id'] ?>" class="js-plus">+</a></td>
                <td><?= $product['date_create'] ?></td>
                <td><a href="#" data-pid="<?= $product['id'] ?>" class="js-hide">Скрыть</a></td>
            </tr>
        <?php } ?>
    </table>


    <script src="script.js"></script>
</body>

</html>