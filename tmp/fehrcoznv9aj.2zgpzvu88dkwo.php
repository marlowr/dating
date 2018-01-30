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
<div class="main">
    <div class="card-block">
        <h1>Personal Information</h1>
        <hr>
        <div class="row">
            <div class="personal-info">
                <form method="POST" action="./profile">
                    <div class="form-group">
                        <label for="first-name"><strong>First Name</strong></label>
                        <input name="first-name" type="text" class="form-control" id="first-name" placeholder="First">
                    </div>
                    <div class="form-group">
                        <label for="last-name"><strong>Last Name</strong></label>
                        <input name="last-name" type="text" class="form-control" id="last-name" placeholder="Last">
                    </div>
                    <div class="form-group">
                        <label for="age"><strong>Age</strong></label>
                        <input name="age" type="text" class="form-control" id="age" placeholder="Age">
                    </div>

                    <label><strong>Gender</strong></label>
                    <br>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male"> Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female"> Female
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="age"><strong>Phone Number</strong></label>
                        <input name="phone" type="text" class="form-control" id="phone" placeholder="123-456-7890">
                    </div>


            </div>
            <div>
                <p id="info">
                    <strong>Note:</strong> All information entered is protected by our
                    <span id="privacy-policy">privacy policy</span>.<br> Profile
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