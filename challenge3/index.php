<?php 
require_once('lib/data-functions.php'); // check if it is correct! and add it to your file
ob_start();
var_dump($_GET);
var_dump($_POST);
//default setting
/*
$name = isset($_POST['name']) ? $_POST['name']: null;

*/
$default_data = array(
    'firstname' => null,
    'name' => null,
    'email' =>null,
    'gender' => null,
    'language' =>'English',
    'message' =>null,
    'experience' => null,
);

$data_to_save = array(
    'firstname' =>$_POST['firstname'],
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'gender' => $_POST['gender'],
    'language' => $_POST['language'],
    'message' => $_POST['message'],
    'experience' => $_POST['experience']
);

if(!isset($data_to_save['name'])){
    $valid = false;
    $errors[] = 'Name cannot be found.';
}
elseif(strlen($data_to_save['name']) == 0){
        $valid = false;
        $errors[] = 'Name cannot be empty.';
}
elseif(strlen($data_to_save['name'])>255) {
        $valid = false;
        $errors[] = 'Name is too long';
}
else {
    $valid = true;
}

if($valid){
    array_merge($default_data, $data_to_save);
    header('Location: list.php');
    }


//function field value
//<?php echo isset($_POST['name']) ? htmlspecialchars($data_to_save['name']):'';
function field_value($post_name, $default_value = null) {
    $value = isset($_POST[$post_name]) ? $_POST[$post_name]: $default_value;
    return htmlspecialchars($data_to_save['name']);
}

function checked_if_value($name, $value) {
    if(isset($_POST[$name]) && $_POST[$name] == $value) {

    }
}


?>
<hr>

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
        <section class = "nm-main">
            <h1 class="heading"> DIY online classes lector database </h1>
            <h4 class="subheading"> Do you want to be our online lecturer?</h4>
            <h5 class="subheading2"> Please fill up this form to apply</h5>

            <form class="nm-form" action="" method="post">
             First name: <input class="nm-input" type="text" name="firstname"><?php // echo field_value('firstname', '');?><br>
            Last name: <input class="nm-input" type="text" name="name"><?php // echo field_value('name', '');?><br>
            Email: <input class="nm-input" type="text" name="email"><?php //echo field_value('email', '');?><br>
            Gender: <select class="nm-choice" name="gender"><?php// echo selected_if_value('gender', '');?><br>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select><br>

            Main language: <select class="nm-choice extra" name="language"><?php// echo selected_if_value('language', '');?><br>
                    <option value="cz">Czech</option>
                    <option value="en">English</option>
                    </select><br>
            Write something about yourself:<br>
                <textarea class="nm-input-textarea extra"name="message" rows="10" cols="50">
                </textarea><br>
            Do you have previous teaching experience?<br>
                <input type="hidden" name="experience" value=0> <!-- this sets value if not selected! -->
                <input type="checkbox" class="nm-choice" name="experience" value="1"> I have taught before 
                <?php echo checked_if_value('experience','');
                // full option: echo isset($_POST['experience'])&& $_POST['experience']==1 ? 'checked': '';
                ?>
                <br>
                <input class="nm-submit" type="submit" value=" Send and apply">
            </form>
        </section>

    </body>
</html>
