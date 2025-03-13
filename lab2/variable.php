<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
</head>
<body>

    <h2>EXERCISE 1</h2>
    <?php
        $a = 15;
        $b = 7;
        
        echo "Sum is: " . ($a + $b) . "<br>";
        echo "Difference is: " . ($a - $b) . "<br>";
        echo "Product is: " . ($a * $b) . "<br>";
        echo "Quotient is: " . ($a / $b) . "<br>";
    ?>

    <h2>EXERCISE 2</h2>
    <?php
        function checkEvenOdd($num) {
            if ($num % 2 == 0) {
                echo "$num is even.<br>";
            } else {
                echo "$num is odd.<br>";
            }
        }

        checkEvenOdd(10); // Sample test
    ?>

    <h2>EXERCISE 3</h2>
    <?php
        // FizzBuzz Problem
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz<br>";
            } elseif ($i % 3 == 0) {
                echo "Fizz<br>";
            } elseif ($i % 5 == 0) {
                echo "Buzz<br>";
            } else {
                echo $i . "<br>";
            }
        }

        // Fibonacci Sequence
        $fibonacci = [0, 1];
        for ($i = 2; $i < 10; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        echo "Even Fibonacci numbers:<br>";
        foreach ($fibonacci as $num) {
            if ($num % 2 == 0) {
                echo $num . "<br>";
            }
        }
    ?>

    <h2>EXERCISE 4</h2>
    <?php
        function greet($name) {
            return "Hello, " . $name . "!<br>";
        }

        function square($number) {
            return $number * $number;
        }

        echo greet("John");
        echo "Square of 5 is: " . square(5) . "<br>";
    ?>

    <h2>EXERCISE 5</h2>
    <form method="POST" action="">
        <input type="text" name="text_input" placeholder="Enter some text" required>
        <button type="submit">Submit</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["text_input"])) {
                $submittedText = htmlspecialchars($_POST["text_input"]);
                echo "You submitted: " . $submittedText;
            } else {
                echo "No text submitted.";
            }
        }
    ?>

</body>
</html>
