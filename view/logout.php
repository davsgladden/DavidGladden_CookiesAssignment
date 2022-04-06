<?php include('header.php');

if(isset($_COOKIE['userid'])){
    //echo $_COOKIE['userid'];
    $firstname = $_COOKIE['userid'];
    unset($_COOKIE['userid']);
session_destroy();
setCookie('userid', 'Guest');;
}



    if($firstname == 'Guest') { ?>
        <h2 class="margin_top_increase">Please enter your firstname:</h2>
        <form action="index.php" method="post" id="register">
            <input type="hidden" name="action" value="register">
            <input type="text" name="firstname" />
            <input id="register" type="submit" value="Register"/>
        </form>
    <?php } else { ?>
	    <p style="font-weight:bold">Thank you for signing out, <?= $firstname; ?></p><br><br>
        <p style="text-align:left;"><a href="?action=list_vehicles">Click here</a> to view our vehicle list.</p>
	<?php } ?>
<?php include('footer.php'); ?>