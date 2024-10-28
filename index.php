<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php } ?>
        <label>Email</label>
        <input type="text" name="uname" placeholder="Email" required><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Your Password" pattern=".{6,}" title="Minimal 6 karakter" required><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>

