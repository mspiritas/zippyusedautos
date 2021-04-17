<?php

class AdminDB {

public static function add_admin($username, $password) {
    global $db;
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO administrators (username, password)
              VALUES (:username, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':password', $hash);
    $statement->execute();
    $statement->closeCursor();
}

public static function is_valid_admin_login($username, $password) {
    global $db;
    $query = 'SELECT password FROM administrators
              WHERE username = :username';
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();
    $hash = (!empty($row['password'])) ? $row['password'] : NULL; 

    return password_verify($password, $hash);
}

public static function username_exists($username) {
    global $db;
    $result = $statement->fetchColumn();
    $username = $_POST['username'];
    $query = "SELECT COUNT(*)
              FROM administrators
              WHERE username = '$username'";
    // if ($query) > 0 {
    if ($query) {
        echo "Username already exists.";
        return TRUE;
    } else {
        //'INSERT INTO administators(password, username)
        // VALUES('$_POST['password']', '$_POST['username']');'
        return FALSE;
    }
    $statement = $db->prepare($query);
    $statement->execute();
    $makes = $statement->fetch();
    $statement->closeCursor();
    return $username;
    echo $query;
}
}
?>
