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
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Forest</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
        </ul>
    </div>
</nav>
<div class="main">
    <div class="card-block">
        <h1>Interests</h1>
        <?php if ($interesterror): ?>
            <span class="text-danger"><?= ($interesterror) ?></span>
        <?php endif; ?>
        <hr>
        <form method="POST" action="./summary">
            <label><strong>In-door interests</strong></label>
            <br>
            <div class="row">
                <?php foreach (($interestsin?:[]) as $interestin): ?>
                    <div class="form-check form-check-inline col">
                        <label class="form-check-label">
                            <?php if ($interesetselected != null && in_array($interestin, $interestselected)): ?>
                                
                                    <input name="interests[]" class="form-check-input" type="checkbox"
                                           value="<?= ($interestin) ?>" checked="checked"> <?= ($interestin)."
" ?>
                                
                                <?php else: ?>
                                    <input name="interests[]" class="form-check-input" type="checkbox"
                                           value="<?= ($interestin) ?>"> <?= ($interestin)."
" ?>
                                
                            <?php endif; ?>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
            <br>
            <label><strong>Out-door interests</strong></label>
            <br>
            <div class="row">
                <?php foreach (($interestsout?:[]) as $interestout): ?>
                    <div class="form-check form-check-inline col">
                        <label class="form-check-label">
                            <?php if ($interesetselected != null && in_array($interestout, $interestselected)): ?>
                                
                                    <input name="interests[]" class="form-check-input" type="checkbox"
                                           value="<?= ($interestout) ?>" checked="checked"> <?= ($interestout)."
" ?>
                                
                                <?php else: ?>
                                    <input name="interests[]" class="form-check-input" type="checkbox"
                                           value="<?= ($interestout) ?>"> <?= ($interestout)."
" ?>
                                
                            <?php endif; ?>
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