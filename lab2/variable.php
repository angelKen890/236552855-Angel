<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        <h2> EXCERCISE 1 </h2>

            $a = 15
            $b = 7
            echo "Sum is". $a + $b;
            echo "Difference is". $a - $b;
            echo "Product is". $a - $b;
            echo "Quotient is". $a - $b;

        <h2> EXCERCISE 2 </h2>
            function checkEvenOdd(num) {
                if ($num % 2 == 0) {
                    echo "$num is odd./n";
                }
            }

            checkEvenOdd(10); //sample

        <h2> EXCERCISE 3</h2>

        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz\n";
            } elseif ($i % 3 == 0) {
                echo "Fizz\n";
            } elseif ($i % 5 == 0) {
                echo "Buzz\n";
            } else {
                echo $i . "\n";
            }
        }

        $fibonacci = [0, 1];
for ($i = 2; $i < 10; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

echo "Even Fibonacci numbers:\n";
foreach ($fibonacci as $num) {
    if ($num % 2 == 0) {
        echo $num . "\n";
    }
}

    <h2> EXCERCISE 4 </h2>

    unction greet($name) {
        return "Hello, " . $name . "!\n";
    }
    
    
    function square($number) {
        return $number * $number;
    }
    

    echo greet("John"); 
    echo "Square of 5 is: " . square(5) . "\n"; 

    <h2> EXCERCISE 5 </h2>
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the text_input field is set
        if (isset($_POST["text_input"])) {
            $submittedText = htmlspecialchars($_POST["text_input"]); // Sanitize input
            echo "You submitted: " . $submittedText;
        } else {
            echo "No text submitted.";
        }
    }
        ?>
</body>
</html>