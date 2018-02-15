<!-- Ryan Marlow
     IT 328 2/2/2018
     This file contains the HTML to show the profile information.
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
    <title>Profile Summary</title>
</head>
<body>
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
            <h1>Profile</h1>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="informational">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><strong>Name:</strong> <?= ($_SESSION['newMember']->getFname())."
" ?>
                                        <?= ($_SESSION['newMember']->getLname()) ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Gender:</strong> <?= ($_SESSION['newMember']->getGender()) ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Age:</strong> <?= ($_SESSION['newMember']->getAge()) ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Phone:</strong> <?= ($_SESSION['newMember']->getPhone()) ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong> <?= ($_SESSION['newMember']->getEmail()) ?></td>
                                </tr>
                                <tr>
                                    <td><strong>State:</strong> <?= ($_SESSION['newMember']->getState()) ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Seeking:</strong> <?= ($_SESSION['newMember']->getSeeking()) ?></td>
                                </tr>
                                    <tr>
                                        <td><strong>Interests:</strong>
                                            <?php foreach (($_SESSION['newMember']->getInterests()?:[]) as $interest): ?>
                                                <?= ($interest)."
" ?>
                                            <?php endforeach; ?>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <img class="image" src="images/default-profile.png" class="rounded" alt="Profile Picture">
                    </div>
                    <hr>
                    <label><strong>Biography</strong></label>
                    <p><?= ($_SESSION['newMember']->getBio()) ?></p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <button class="btn btn-primary">Contact Me!</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>