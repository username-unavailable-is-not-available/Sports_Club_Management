<?php session_start();

require_once 'loginConnJSON.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $data = file_get_contents("model/data.json");
    $data = json_decode($data, true);
    foreach ($data as $data) {
        if ($data["email"] == $_POST['email'] && $data["password"] == $_POST['password']) {

            $_SESSION['email'] = $data["email"];
            $_SESSION['password'] = $data["password"];

            if (!isset($_SESSION['name'])) {
                $_SESSION['name'] = $data["name"];
            }

            if (empty($_POST['rememberMe'])) {
                setcookie("email", "");
                setcookie("password", "");
            } else {
                setcookie("email", $_POST['email'], time() + 120);
                setcookie("password", $_POST['password'], time() + 120);
            }

            header("location: AdminHome.php");
        } else {
            $error = "Username or password invalid";
        }
    }
}