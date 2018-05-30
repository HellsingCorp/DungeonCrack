<?php
/**
 * Created by GuiltyCode
 * Date: 5/20/2018
 */
?>

<!DOCTYPE html>
<html lang = "en-US">
<head>
<title>Super Awesome Title!</title>
<meta charset = "UTF-8"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="/floatbox_752/floatbox.css" />
    <script src="/floatbox_752/floatbox.js"></script>
</head>
<body>
<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="main.php">Home</a></li>
			</ul>
            <div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign up</a>';
					}

				?>
			</div>
            <div class="nav-uname">
                <?php
                if (isset($_SESSION['u_id']))
                {
                    echo "---Logged in to---";
                    echo $_SESSION['u_email'];
                }
                ?>
            </div>
		</div>
	</nav>
</header>
</body>
