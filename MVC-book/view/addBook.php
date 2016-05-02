<html>
<head></head>

<body>

<form action="index.php?op=add" method="post">
    <table border="0" cellspacing="5" cellpadding="5">
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" size="20"/>
            </td>
        </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" name="author" size="20"/>
            </td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name="description" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Add"/>
            </td>

        </tr>
    </table>
</form>
</body>
</html>