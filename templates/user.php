<?php include('templates/_header.php'); ?>

    <div class="my-4">
        <?php echo $_SESSION['user'];?>
        |
        <a href="<?php echo $myUrl.'?section=logout';?>">déconnexion</a>
    </div>

    <?php include('templates/_form.php'); ?>

    <?php include('templates/_ideas.php'); ?>

<?php include('templates/_footer.php'); ?>
