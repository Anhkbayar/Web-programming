<!DOCTYPE html>
<html>

<head>
    <title>PHP GET and POST Method Example</title>

    <link rel="stylesheet" href="style.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script defer type="text/javascript" src="myMeth.js"></script>
</head>

<body>
    <?php
    $successMSG = "";
    $nameError = $ageError = "";
    $name = $age = "";

    function isValidName($name)
    {
        return preg_match("/^[a-zA-Z]+$/", $name);
    }

    function isValidAge($age)
    {
        return preg_match("/^\d{1,3}$/", $age);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_POST['submit']) || isset($_GET['submit'])) {
            $method = $_SERVER["REQUEST_METHOD"];
            $name = htmlspecialchars($method == "POST" ? $_POST['name'] : $_GET['name']);
            $age = htmlspecialchars($method == "POST" ? $_POST['age'] : $_GET['age']);

            if (empty($name) || !isValidName($name)) {
                $nameError = "<p class='error'>Name must only contain letters.</p>";
            }

            if (empty($age) || !isValidAge($age)) {
                $ageError = "<p class='error'>Age must be a number between 1 and 999.</p>";
            }

            if (!$nameError && !$ageError) {
                $successMSG = "<p>Form submitted via <span id='b'>" . strtoupper($method) . "</span></h3>";
                $sname = "<p>Name: " . $name . "</p>";
                $sage = "<p>Age: " . $age . "</p>";
            }
            else{
                $successMSG = "<p>Form submitted couldn't via <span class='error'>" . strtoupper($method) . "</span></h3>";
                $sname = "<p>null</p>";
                $sage = "<p>null</p>";
            }
        }
    }
    ?>

    <div class="container">
        <div class="main">
            <h2 class="header">PHP GET and POST Method Example</h2>
            <form method="" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form">
                <label>Select Form Method :</label>
                <span>
                    <input type="radio" name="meth" id="r1" class="meth1" value="post"> POST
                    <input type="radio" name="meth" class="meth1" value="get"> GET
                </span>
                <br><br>
                <label>Name :</label>
                <input type="text" name="name" id="name">
                <div id="namerr"><?php echo $nameError ?></div>
                <br><br>
                <label>Age :</label>
                <input type="text" name="age" id="age">
                <div id="namerr"><?php echo $ageError ?></div>
                <br><br>
                <div class="button-container">
                <input type="submit" name="submit" id="submit" value="Submit">
                </div>
            </form>
            <div id="success">
                <?php echo $successMSG ?>
            </div>
        </div>
        <div class="side">
            <h2>Submitted Info</h2>
            <div class="sname"><?php echo $sname ?></div>
            <div class="sage"><?php echo $sage ?></div>
        </div>
    </div>
</body>

</html>