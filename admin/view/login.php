<?php
echo $login_message; // pg. 707
?>

<form action="." method="post">
    <input type="hidden" name="action" value="login">

    <label>Username:</label>
    <input type="text" class="text" name="username">
    <br>

    <label>Password:</label>
    <input type="password" class="text" name="password">
    <br>

    <label>&nbsp;</label>
    <input type="submit" value="Login">
</form>