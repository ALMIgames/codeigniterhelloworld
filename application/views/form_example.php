<?php if(isset($lastname) && isset($firstname)) : ?>
	Hola <?php echo $lastname . ", " . $firstname;?>
<?php else :?>
	Qui ets?
<?php endif ;?>

<form action="<?php echo base_url('/index.php/simpatic/form_example');?>">
	First name: <input type="text" name="firstname"><br>
	Last name: <input type="text" name="lastname">
	<input type="submit" value="Submit">
</form> 