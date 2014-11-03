<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="problems.css" />
<title>Variable Variables: PHP Problem Set 3.1</title>
</head>
<body>
<h2>Variable Variables: PHP Problem Set 3.1</h2>
<?php
    // Write a PHP program that retains the state of a set of checkboxes.
    // Complete the script so that on submitting the form the checkboxes
    // selected are maintained with the checked="true" attribute. 
	// Use variable variables (i.e. $$var). Hint: You'll need a loop 
	// to create the variable variables.
	foreach( $_POST[hobby] as $hob ) {
		// create the variable variables in here	
	}
?>
<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
<fieldset class="checkbox">
  <legend>Favorite Hobbies</legend>
<fieldset class="checkbox">
  <legend>Favorite Hobbies</legend>
  <label>
    <input type="checkbox" name="hobby[]" value="Spelunking"<?=$Spelunking?> /> Spelunking  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Crystals" /> Crystals  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Music" /> Music  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Newspapers" />
Newspapers  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Computer_games" />
Computer games  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Bird_Watching" />
Bird Watching  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Macrame" /> Macrame  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Internet_surfing"> />
Internet surfing  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Origami" /> Origami  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Pottery" /> Pottery  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Quilting" /> Quilting  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Scrap_booking" />
Scrap-booking  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Sculpture" />
Sculpture  </label>
  <label>
    <input type="checkbox" name="hobby[]" value="Soap_making" />
Soap-making  </label>
  </fieldset>
  <input type="submit" value="send" />
 </form>
</body>
</html>