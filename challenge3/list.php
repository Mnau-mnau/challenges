<?php

require_once 'lib/data-functions.php';

$people = get_index();


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
                    <li><a href="list.php"> List </a></li>
                    <li><a href="detail.php"> Detail</a></li>
                    
                </ul>
             </nav>        
        </header>

        <ul>
            <?php foreach($people as $id => $teacher): ?>
            <li><a href="detail.php?id=<?php echo $id['name']; ?>
            ">
            <?php echo htmlspecialchars($id['name']).htmlspecialchars($id['firstname']);?></a></li>
            <li></li>
            <?php endforeach;?>
        </ul>
    </body>
