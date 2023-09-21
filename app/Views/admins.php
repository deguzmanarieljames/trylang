<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <br><br>
    <form action="/save" method="post" align="center">
        <label>lastname</label>
        <input type="hidden" name="id" value="<?= $ad['id'] ?? '' ?>">
        <input type="text" name="lastname" placeholder="lastname" value="<?= $_POST['lastname'] ?? $ad['lastname'] ?? '' ?>">
        <br>
        <label>firstname</label>
        <input type="text" name="firstname" placeholder="firstname" value="<?= $_POST['firstname'] ?? $ad['firstname'] ?? '' ?>">
        <br>
        <label>middlename</label>
        <input type="text" name="middlename" placeholder="middlename" value="<?= $_POST['middlename'] ?? $ad['middlename'] ?? '' ?>">
        <br>
        <label>age</label>
        <input type="text" name="age" placeholder="age" value="<?= $_POST['age'] ?? $ad['age'] ?? '' ?>">
        <br>
        <label>dateofbirth</label>
        <input type="date" name="dateofbirth" placeholder="dateofbirth" value="<?= $_POST['dateofbirth'] ?? $ad['dateofbirth'] ?? '' ?>">
        <br>
        <input type="submit" name="update">
    </form>

<br><br><br>
    <h1 align="center">Admin Registration</h1>
    <table border="2" align="center">
        <tr>
            <th>id</th>
            <th>lastname</th>
            <th>firstname</th>
            <th>middlename</th>
            <th>age</th>
            <th>dateofbirth</th>
            <th>action</th>
        </tr>
        <?php foreach ($admin as $ar): ?>
        <tr>
            <td><?= $ar['id'] ?></td>
            <td><?= $ar['lastname'] ?></td>
            <td><?= $ar['firstname'] ?></td>
            <td><?= $ar['middlename'] ?></td>
            <td><?= $ar['age'] ?></td>
            <td><?= $ar['dateofbirth'] ?></td>
            <td><a href="/delete/<?= $ar['id'] ?>">delete</a> | <a href="/edit/<?= $ar['id'] ?>">edit</a></td>
        </tr>

        <?php endforeach; ?>
    </table>
</body>
</html>