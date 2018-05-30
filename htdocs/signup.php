<?php
session_start();
include_once 'header.php';
include_once 'includes/signup.inc.php';
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder="Firstname">
			<input type="text" name="last" placeholder="Lastname">
			<input type="text" name="email" placeholder="E-mail">
			<input type="text" name="uid" placeholder="Username">
			<input type="password" name="pwd" placeholder="Password">
            <input type="hidden" name="char" value="0">
			<button type="submit" name="submit">Sign up</button>
		</form>
	</div>
</section>
<?php
	include_once 'footer.php';
?>