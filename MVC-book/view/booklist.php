<html>
<head></head>

<body>

<table>
	<tr><td>Title</td><td>Author</td><td>Description</td></tr>
	<?php 

		foreach ($books as $book)
		{
			echo '<tr><td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td><td>'.$book->author.'</td><td>'.$book->description.'</td></tr>';
		}

	?>
</table>
<br><br>
<a href="index.php?op=add">add new book</a>

</body>
</html>