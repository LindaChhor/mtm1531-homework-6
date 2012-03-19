<?php 
ini_set("display_errors","on");

error_reporting(-1);

require_once 'includes/filter-wrapper.php';

require_once 'includes/db.php';

$results = $db->query(' SELECT id, movie_title, release_date, director 
						FROM movie_database
						ORDER BY movie_title ASC
					');


?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Movie Database</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>

<h1>My movie database:</h1>

<ul>
	<?php foreach ($results as $movie) : ?>
        <li>
            <a href="single.php?id=<?php echo $movie['id']; ?>"><?php echo $movie['movie_title']; ?></a>
            <a class="delete" href="delete.php?id=<?php echo $movie['id']; ?>">Delete</a>
            <a class="add" href="add.php?id=<?php echo $movie['id']; ?>">Add</a>
            <a class="edit" href="edit.php?id=<?php echo $movie['id']; ?>">Edit</a>
        </li>
	<?php endforeach; ?>
</ul>

</body>
</html>
