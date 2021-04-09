<?php include 'header.php';
echo $errors;
 ?>

<form action="." method="post">
    <input type="hidden" name="action" value="register">

    <label>Username:</label>
    <input type="text" class="text" name="username">
    <br>

    <label>Password:</label>
    <input type="password" class="text" name="password">
    <br>

    <label>Confirm Password:</label>
    <input type="password" class="text" name="confirm_password">
    <br>

    <label>&nbsp;</label>
    <input type="submit" value="Login">
</form>

<?php include 'footer.php'; ?>