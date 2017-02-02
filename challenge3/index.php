array(1) {
  ["page"]=>
  string(4) "form"
}
<hr>
array(0) {
}


<br />
<b>Notice</b>:  Undefined variable: import_data in <b>/Users/Mnau/www/challenge3/index.php</b> on line <b>25</b><br />

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
                    <li><a href="index.php?page=form"> Form</a></li>
                    <li><a href="index.php?page=list"> List </a></li>
                    <li><a href="index.php?page=persona"> Persona </a></li>
                    
                </ul>
             </nav>        
        </header>
        <section class = "nm-main">
                                        <h1 class="heading"> DIY online classes lector database </h1>

        <h4 class="subheading"> Do you want to be our online lecturer?</h4>
        <h5 class="subheading2"> Please fill up this form to apply</h5>

        <form class="nm-form" action="" method="post">
            First name: <input class="nm-input" type="text" name="firstname"><br>
            Last name: <input class="nm-input" type="text" name="lastname"><br>
            Email: <input class="nm-input" type="text" name="email"><br>
            Gender: <select class="nm-choice" name="gender"><br>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select><br>

            Main language: <select class="nm-choice extra" name="language"><br>
                    <option value="cz">Czech</option>
                    <option value="en">English</option>
                    </select><br>
            Write something about yourself:<br>
            <textarea class="nm-input-textarea extra"name="message" rows="10" cols="50">
                    </textarea><br>
            Do you have previous teaching experience?<br>
            <input type="checkbox" class="nm-choice" name="experience" value="true"> I have taught before<br>
                    <input class="nm-submit" type="submit" value=" Send and apply">
        </form>
                              </section>
    </body>
</html>