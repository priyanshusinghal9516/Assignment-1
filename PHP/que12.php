<html>
<head>
    <title>Subscription Service</title>
</head>
<body>

<?php
$UserNew = true; 

if (isset($_POST['submit'])) {
    // Form has been submitted
    $hasSubscribedBefore = false; 

    if ($hasSubscribedBefore) {
        echo "<p>Welcome back! Choose your subscription plan:</p>";
    } else {
        echo "<p>Welcome! You are eligible for a free trial period.</p>";
    }

    echo "<form action='process_subscription.php' method='post'>";
    echo "    <label><input type='radio' name='subscription' value='basic'> Basic</label><br>";
    echo "    <label><input type='radio' name='subscription' value='premium'> Premium</label><br>";
    echo "    <label><input type='radio' name='subscription' value='pro'> Pro</label><br>";
    echo "    <input type='submit' name='subscribe' value='Subscribe'>";
    echo "</form>";
} else {
    // Display the form
    echo "<form action='' method='post'>";
    echo "    <input type='submit' name='submit' value='Check Eligibility'>";
    echo "</form>";
}
?>

</body>
</html>
