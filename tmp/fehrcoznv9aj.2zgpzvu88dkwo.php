<!-- Ryan Marlow
     IT 328 2/2/2018
     This file contains the HTML to gather the personal info on the dating website.
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
        <h1>Personal Information</h1>
        <hr>
        <form method="POST" action="./profile">
        <div class="row">
            <div class="col">
                    <div class="form-group">
                        <label for="first-name"><strong>First Name</strong>
                            <?php if ($firsterror): ?>
                                <span class="text-danger"><?= ($firsterror) ?></span>
                            <?php endif; ?>
                        </label>
                        <input name="first-name" type="text" class="form-control" id="first-name"
                                       placeholder="First" value="<?= ($_SESSION['newMember']->getFname()) ?>">

                    </div>
                    <div class="form-group">
                        <label for="last-name"><strong>Last Name</strong>
                            <?php if ($lasterror): ?>
                                <span class="text-danger"><?= ($lasterror) ?></span>
                            <?php endif; ?>
                        </label>
                        <input name="last-name" type="text" class="form-control" id="last-name"
                                       placeholder="Last" value="<?= ($_SESSION['newMember']->getLname()) ?>">
                    </div>
                    <div class="form-group">
                        <label for="age"><strong>Age</strong>
                            <?php if ($ageerror): ?>
                                <span class="text-danger"><?= ($ageerror) ?></span>
                            <?php endif; ?>
                        </label>
                        <input name="age" type="text" class="form-control" id="age"
                                       placeholder="Age" value="<?= ($_SESSION['newMember']->getAge()) ?>">
                    </div>

                    <label><strong>Gender</strong>
                        <?php if ($gendererror): ?>
                            <span class="text-danger"><?= ($gendererror) ?></span>
                        <?php endif; ?>
                    </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <?php if ($_SESSION['newMember']->getGender()=='Male'): ?>
                                
                                <input class="form-check-input" type="radio"
                                       name="gender" value="Male" checked=""> Male
                                
                                <?php else: ?>
                                    <input class="form-check-input" type="radio"
                                           name="gender" value="Male"> Male
                                
                            <?php endif; ?>
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <?php if ($_SESSION['newMember']->getGender()=='Female'): ?>
                                
                                    <input class="form-check-input" type="radio"
                                           name="gender" value="Female" checked=""> Female
                                
                                <?php else: ?>
                                    <input class="form-check-input" type="radio"
                                           name="gender" value="Female"> Female
                                
                            <?php endif; ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="phone"><strong>Phone Number</strong>
                            <?php if ($phoneerror): ?>
                                <span class="text-danger"><?= ($phoneerror) ?></span>
                            <?php endif; ?>
                        </label>
                        <input name="phone" type="text" class="form-control"
                                       id="phone" placeholder="123-456-7890"
                               value="<?= ($_SESSION['newMember']->getPhone()) ?>">
                    </div>
                    <label><strong>Premium Membership</strong></label><br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <?php if ($_SESSION['premium']=='Yes'): ?>
                                
                                    <input class="form-check-input" type="checkbox"
                                           name="premium" value="Yes" checked="">
                                    Sign me up for a premium account!
                                
                                <?php else: ?>
                                    <input class="form-check-input" type="checkbox"
                                           name="premium" value="Yes">
                                    Sign me up for a premium account!
                                
                            <?php endif; ?>
                        </label>
                    </div>
            </div>
            <div class="col">
                <p id="info">
                    <strong>Note:</strong> All information entered is protected by our
                    <a href="#">privacy policy</a>.<br> Profile
                    information can only be viewed by others with your permission.
                </p>
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