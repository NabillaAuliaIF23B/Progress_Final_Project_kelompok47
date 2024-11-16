<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="assets/css/styleLogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:ital,wght@0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">Rir Outdor</div>
    <div class="container">
        <div class="login-form">
            <h2>Sign In</h2>
            <form>
            <label class="form-label">Username</label>
                <input type="text" name= "username" placeholder="Username" class="form-input" required>
                <label class="form-label">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-input" required>
                <button type="submit" class="btn btn-login">Login</button>
                <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="signup.php">Create an account</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
