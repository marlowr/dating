<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forest Admin</title>
</head>
<tr>
    <th>Name</th>
    <th>Color</th>
    <th>Type</th>
</tr>
<body>
    <table>
        <?php foreach (($_SESSION['members']?:[]) as $member): ?>
            <tr><td><?= ($member['fname']) ?></td></tr>
        <?php endforeach; ?>
    </table>
</body>
</html>