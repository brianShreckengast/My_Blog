<?php

include ('database_connection.php');

?>

<h1>Create A New Post</h1>
<form action = "view-post.php" method = "POST">
	<p>Title: <input type = "text" name = "title"></p>
	<p>Author: <input type="text" name ="author"></p>
	<p>Post:</p><textarea name="contents" rows="20" cols="200">Start writing here.</textarea>
	<input type ="submit" name ="submit" value ="Save Post">
</form>
