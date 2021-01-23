<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Notes App</title>
        <link rel="stylesheet" href="css/login.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- jQuery and JS bundle w/ Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" 
        ntegrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

        <script src="js/app.js"></script>

    </head>
    <body>
        <div class="form">
            <form action="php/feed.php" method="post">
                <h2>Login</h2>
                <div class="input">
                    <div class="inputBox">
                        <label>Username</label>
                        <input type="text" name="username" id="username" placeholder="alexanderthegreat" required>
                    </div>
                    <div class="inputBox">
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="•••••••••••••••" required>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Sign in">
                    </div>
                </div>
                <p class="forget">Forget Password? <a href="php/sign_up.php">Click Here</a></p>
            </form>
        </div>
    </body>
</html>