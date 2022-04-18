<?php include 'view/header.php'; ?>
<section>
    <h1>Database Error</h1>
    <p>An error occurred connecting to the database.</p>
    <p>The database container must be started with the apache container.</p>
    <p>PGSQL must be running on the same network as your apache container.</p>
    <p class="last_paragraph">Error message: <?php echo $error_message; ?></p>
</section>
<?php include 'view/footer.php'; ?>
