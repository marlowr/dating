<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Interests</title>
</head>
<body>
<!-- Main information Div -->
<div class="main">
    <div class="card-block">
        <h1>Interests</h1>
        <hr>
        <form method="POST" action="./summary">
            <div class="personal-info">

                    <label><strong>In-door interests</strong></label>
                    <br>
                    <?php foreach (($interestsin?:[]) as $interest): ?>
                        <div class="form-check form-check-inline spaced">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="<?= ($interest) ?>" value="<?= ($interest) ?>"> <?= ($interest)."
" ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
            </div>
            <div class="d-flex flex-row-reverse">
                <div class="p-2">
                    <button type="submit" class="btn btn-primary">Next ></button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Bootstrap Script Links -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- JavaScript links -->
</body>
</html>