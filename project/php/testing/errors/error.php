<main>
    <h1>Error</h1>
    <p class="first_paragraph"><?php echo $error; ?></p>
        <form action="index.php" method="post">
        <input type="hidden" name="action" value ="return_login">
        <input type="submit" value="Back">
        </form>
</main>
