
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style type="text/css">
      body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.login-container {
    display: flex;
    width: 30%;
    max-width: 800px;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

.login-form {
    flex: 1;
    padding: 40px;
    background-color: #fff;
}

.login-form h2 {
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-weight: bold;
    color: #555;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.2s ease-in-out;
}

.form-group input:focus {
    border-color: #3498db;
    outline: none;
}

button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
}

button:hover {
    background-color: #2980b9;
}

.login-image {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #3498db;
}

.login-image img {
    max-width: 100%;
    height: auto;
}

    </style>
    
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="login-form">
                <h2>User Login</h2>
                <form action="process_login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <button type="submit">Login</button>
                </form>
                <br>
                <div class="login-links">
                    <a href="forgot_password.php">Forgot Password?</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp
                    <a href="add_user.php">New Registration</a>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
