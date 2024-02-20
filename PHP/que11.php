<html>
<head>
    <title>Quiz Application</title>
</head>
<body>

<?php
$correctAns = ['Q1' => 'Paris', 'Q2' => 'Jupiter', 'Q3' => 'Seven'];
$userScore = 0;

if (isset($_POST['submit'])) {

    foreach ($_POST as $que => $selected) {
        if (substr($que, 0, 1) === 'Q') {
        if ($selected === $correctAns[$que]) {
            $userScore++;
        }
        }
    }
    echo "<p>Your score: $userScore / " . count($correctAns) . "</p>";
}
?>
<form action="" method="post">
    <p>Question 1: What is the capital of France?</p>
    <label><input type="radio" name="Q1" value="Paris"> Paris</label>
    <label><input type="radio" name="Q1" value="Germany">Germany</label>
    <label><input type="radio" name="Q1" value="Italy">Italy</label>

    <p>Question 2: What is the largest planet in our solar system?</p>
    <label><input type="radio" name="Q2" value="Earth"> Earth</label>
    <label><input type="radio" name="Q2" value="Venus"> Venus</label>
    <label><input type="radio" name="Q2" value="Jupiter"> Jupiter</label>

    <p>Question 3: How many continents are there on Earth?</p>
    <label><input type="radio" name="Q3" value="two"> two </label>
    <label><input type="radio" name="Q3" value="Seven"> Seven</label>
    <label><input type="radio" name="Q3" value="four">four </label>

    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
