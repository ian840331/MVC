<html>
    <head>
        <title>User Profile</title>
    </head>
    <body>
        <h1>User Profile</h1>
        <p>User ID: <? echo $user['id'] ?></p>
        <p>Username: <? echo $user['username']?></p>
        <p>Status: <? echo $users['status']?></p>
        <a href="?action=logout">Log Out</a>
        <a href="?page=login">Login</a> | <a href="?page=register">Register</a>
    </body>
</html>