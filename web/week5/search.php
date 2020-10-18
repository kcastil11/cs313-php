<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>The Cool Comics</title>
</head>
<body>
	<header class="nav">
		<ul>
			<h1>The Cool Comics</h1>
			<li><a href="login.php">LOG-IN</a></li>
			<li><a href="search.php">LOOK</a></li>
			<li><a href="index.php">HOME</a></li>
		</ul>
	</header>

	<div>
		<h2>Comics Search</h2>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

			<label for="comic">Product Name:</label><br>
			<input type="text" name="comico" id="comics"><br><br>
			<input type="submit" name="submit" value="Search">
		</form>

	</div>

</body>
</html>