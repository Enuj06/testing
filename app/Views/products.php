<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<?php ?>
<body>
    <form action="/save" method="post">
            <label>Code</label>
            <input type="text" name="code" placeholder="Code" value="<?=$pro['code']?>">
            <br>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" value="<?=$pro['name']?>">
            <br>
            <label>Quantity</label>
            <input type="text" name="quantity" placeholder="Quantity" value="<?=$pro['quantity']?>">
            <br>
            <input type="submit" value="save">
    </form>
    <h1 style="text-align: center">Product Listing</h1>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Quantity</th>
            <th colspan="2">Action</th>
        </tr>
        <?php foreach ($product as $pr): ?>
            <tr>
            <td><?= $pr['code'] ?></td>
            <td><?= $pr['name'] ?></td>
            <td><?= $pr['quantity'] ?></td>
            <td><a href="/delete/<?= $pr['id'] ?>">Delete</a> || <a href="/update/<?= $pr['id'] ?>">Update</a> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>