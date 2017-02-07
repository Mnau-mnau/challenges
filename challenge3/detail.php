<?php
require('lib/data-function.php');

$data = get_data($_GET[$id]);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
    	<meta name="author" content="">
		<title>Database of DIY lectors</title>
	
	    <!-- Bootstrap core CSS -->
		<link rel="icon" href="fav.gif" type="image/gif" sizes="16x16">
		<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,600,700,800&amp;subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" href="form-style.css" type="text/css">
	</head>
    <body>
        <header class="header">
            <nav class="navbar"> 
                <ul>
                    <li><a href="index.php"> Home</a></li>
                    <li><a href="index.php?page=list"> List </a></li>
                    <li><a href="index.php?page=detail"> Detail</a></li>
                    
                </ul>
             </nav>        
        </header>

        <h1> <?php echo $data['name']; ?></h1>
        <div class="type"> <?php echo $data['type'];?></div>

        </body>
        </html> 