<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<div class="profile_info">
    <div>
        <?php  if (isset($_SESSION['user'])) : ?>
            <strong><?php echo $_SESSION['user']['username']; ?></strong>
            <strong><?php echo ucfirst($_SESSION['user']['user_type']); ?><strong>
        <?php endif ?>
    </div>
</div>