<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if ($email == 'lokesh@nuncsystems.com' && $password == '123456') {
    header('Location: addjudgement.php');
    exit;
}

header('Location: index.html')

?>
</body>
</html>