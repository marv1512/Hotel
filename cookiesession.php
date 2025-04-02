<pre>

<?php



$name = $_POST["name"];
$_COOKIE["name"] = $name;

$password = $_POST["password"];
$_COOKIE["password"] = $password;

setcookie($_COOKIE["name"], time() + 86400 * 30, );



if (!isset($_COOKIE["name"])) {
    echo $_COOKIE["name"] . " is not set";
} else {
    echo $_COOKIE["name"] . "is set";
}


var_dump($_COOKIE);



// if ($_SERVER["REQUEST_METHOD"] = "POST") {
//     header("location: cookie.php");
// }




?>
</pre>