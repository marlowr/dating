<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Forest Admin</title>
</head>
<body>
<h1>Members:</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone</th>
            <th>Email</th>
            <th>State</th>
            <th>Gender</th>
            <th>Seeking</th>
            <th>Premium</th>
            <th>Interests</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach (($members?:[]) as $member): ?>
                <tr>
                    <td><?= ($member['member_id']) ?></td>
                    <td><?= ($member['lname']) ?>, <?= ($member['fname']) ?></td>
                    <td><?= ($member['age']) ?></td>
                    <td><?= ($member['phone']) ?></td>
                    <td><?= ($member['email']) ?></td>
                    <td><?= ($member['state']) ?></td>
                    <td><?= ($member['gender']) ?></td>
                    <td><?= ($member['seeking']) ?></td>
                    <?php if ($member['premium'] == 0): ?>
                        
                            <td><input class="form-check-input" type="checkbox" value=""></td>
                        
                        <?php else: ?>
                            <td><input class="form-check-input" type="checkbox" value="" checked></td>
                        
                    <?php endif; ?>
                    <td><?= ($member['interests']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Bootstrap Script Links -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- JavaScript links -->
</body>
</html>