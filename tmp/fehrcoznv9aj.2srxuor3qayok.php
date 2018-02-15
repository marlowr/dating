<!-- Ryan Marlow
     IT 328 2/2/2018
     This file contains the HTML to gather the profile information on the dating website.
     -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Create a New Profile!</title>
</head>
<body>
<!-- Main information Div -->
<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
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
        <h1>Profile</h1>
        <hr>
        <form method="POST" action="./interests">
        <div class="row">
            <div class="col">
                    <div class="form-group">
                        <label for="email"><strong>Email</strong>
                            <?php if ($emailerror): ?>
                                <span class="text-danger"><?= ($emailerror) ?></span>
                            <?php endif; ?>
                        </label>
                        <input name="email" type="text" class="form-control" id="email"
                               placeholder="example@mail.com"
                               value="<?= ($_SESSION['newMember']->getEmail()) ?>">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="state"><strong>State</strong></label>
                            <select name="state" class="form-control" id="state">
                                <option>Select</option>
                                <?php foreach (($states?:[]) as $value): ?>
                                    <?php if ($value == $_SESSION['newMember']->getState()): ?>
                                        
                                            <option value="<?= ($value) ?>"
                                                    selected="selected"><?= ($value) ?></option>
                                        
                                        <?php else: ?>
                                            <option value="<?= ($value) ?>"><?= ($value) ?></option>
                                        
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <label><strong>Seeking</strong></label>
                    <br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <?php if ($_SESSION['newMember']->getSeeking()=='Male'): ?>
                                
                                    <input class="form-check-input" type="radio"
                                           name="seeking" value="Male" checked=""> Male
                                
                                <?php else: ?>
                                    <input class="form-check-input" type="radio"
                                           name="seeking" value="Male"> Male
                                
                            <?php endif; ?>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <?php if ($_SESSION['newMember']->getSeeking()=='Female'): ?>
                                
                                    <input class="form-check-input" type="radio"
                                           name="seeking" value="Female" checked=""> Female
                                
                                <?php else: ?>
                                    <input class="form-check-input" type="radio"
                                           name="seeking" value="Female"> Female
                                
                            <?php endif; ?>
                        </label>
                    </div>
            </div>
            <div class="col">
                <label for="biography"><strong>Biography</strong></label>
                <textarea name="biography" placeholder="Describe yourself here..."
                          class="form-control" id="biography" rows="6"
                          cols="70"><?= ($_SESSION['newMember']->getBio()) ?></textarea>
            </div>
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