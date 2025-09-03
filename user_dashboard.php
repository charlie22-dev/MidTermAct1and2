<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$username = "charlie";
$role = "student"; 
$is_Active = true;
$is_Premium = true;
$last_Login = 0;

 echo ($role==="administrator")
    ? "welcome back! admin! <br>" : "Welcome! $username ";

 echo ($last_Login<=1)
        ? " you logged in recently  <br> " : " it's been a while! ";

    if (!$isActive) {
    echo " Account inactive.";
} elseif ($role === "administrator") {
    echo "Access to admin";
} elseif ($role === "editor") {
    echo "Access to to edit ";
    if ($isPremium) {
        echo " you are premium";
    }
} elseif ($role === "member") {
    echo " you have access";
    if ($isPremium) {
        echo "Premium conmtent on!";
    }
} else {
    echo " Limited guest access! Sign up!";
}

$notif= "email"; 

switch ($notif) {
    case "email":
        echo " email notifications are enabled.";
        break;
    case "sms":
        echo " sms notifications are enabled";
        break;
    case "both":
        echo "Email and SMS notifications are enabled.";
        break;
    case "none":
        echo " Notifications are turned off";
        break;
    default:
        echo "Notification preference is not correct";
        break;
}


    ?>
</body>
</html>