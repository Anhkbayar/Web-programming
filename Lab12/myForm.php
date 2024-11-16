<!DOCTYPE html>
<html>
<head>
    <title>PHP GET and POST Method Example</title>
    <!-- Include CSS File Here -->
    <link rel="stylesheet" href="style.css" />
    <!-- Include JavaScript File Here -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="myMeth.js"></script>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle POST request
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        echo "<h3>Form submitted via POST</h3>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Handle GET request
        if (isset($_GET['name']) && isset($_GET['age'])) {
            $name = htmlspecialchars($_GET['name']);
            $age = htmlspecialchars($_GET['age']);
            echo "<h3>Form submitted via GET</h3>";
            echo "Name: " . $name . "<br>";
            echo "Age: " . $age . "<br>";
        } else {
            echo "<h3>No GET data submitted</h3>";
        }
    }
    ?>

    <div class="container">
        <div class="main">
            <form method="" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form">
                <h2>PHP GET and POST Method Example</h2>
                <label>Select Form Method :</label>
                <span>
                    <input type="radio" name="meth" id="r1" class="meth1" value="post"> POST
                    <input type="radio" name="meth" class="meth1" value="get"> GET
                </span>
                <br><br>
                <label>Name :</label>
                <input type="text" name="name" id="name">
                <br><br>
                <label>Age :</label>
                <input type="text" name="age" id="age">
                <br><br>
                <input type="submit" name="submit" id="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>
