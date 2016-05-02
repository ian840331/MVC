<html>
    <head>
        <title>User Login Form</title>
    </head>
    <body>
        <h1>User Login Form</h1>
        <form action="?action=login" method="post">
            Username: <input type="text" name="username" /><br />
            Password: <input type="password" name="password" /><br />
            Remember me: <input type="checkbox" name="remember" /><br />
            <input type="submit" name="submit" value="Login" />
        </form>
            <a href="?page=register">Register</a>
    </body>
</html>