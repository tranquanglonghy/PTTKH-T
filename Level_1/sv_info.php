<div class="profile_info">
    <div>
        <?php  if (isset($_SESSION['user'])) : ?>
            <strong><?php echo $_SESSION['user']['username']; ?></strong>

            <small>
                <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
                <br>
                <a href="index.php?logout='1'" style="color: red;">logout</a>
            </small>

        <?php endif ?>
    </div>
</div>