<?PHP
function do_alert($msg)
{
    echo '<script type = "text/javascript">alert("' . $msg . '"); </script>';
}
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $hostname = "localhost";
    do_alert($password . $firstname . $lastname);

    if ($password != "propwash") {
        #echo "<script type = 'text/javascript'> alert (\"Password invalid. Please try again.\"); </script>";
        header("Location: wrongPassword.html");
        die();
    }
    if ($lastname === "") {
        #echo "<script type = 'text/javascript'> alert (\"Last name missing. Please try again.\"); </script>";
        header("Location: noLastName.html");
        die();
    }
    if ($firstname === "") {
        #echo "<script type = 'text/javascript'> alert (\"First name missing. Please try again.\"); </script>";
        header("Location: noFirstName.html");
        die();
    }
    setcookie("reporterFirstName", $firstname, time() + 86400);
    setcookie("reporterLastName", $lastname, time() + 86400);
    header("Location: enterScoutingData.html");
    die();
?>
