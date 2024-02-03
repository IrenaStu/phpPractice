<?php

// $a = $_POST['password'];
// $b = $_POST['confirm_password'];

// if ($a == $b) {
//     echo $_POST["name"] . ', You are welcome!';
// } else {
//     echo 'Please confirm password!';
// }


$i = 0;
while ($i < 100) {
    $i++;

    if ($i == 50) {
        echo '<br>';  
        continue;
    }

    echo $i . ' ';
}



 echo '<br>';

    $operand1 = $_POST['operand1'];
    $operand2 = $_POST['operand2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $result = $operand1 + $operand2;
            break;
        case '-':
            $result = $operand1 - $operand2;
            break;
        case '*':
            $result = $operand1 * $operand2;
            break;
        case '/':
            
            if ($operand2 == 0) {
                echo "Cannot divide by zero.";
                exit();
            }
            $result = $operand1 / $operand2;
            break;
        default:
            echo "Invalid operator.";
            exit();
    }
    echo "Result: $operand1 $operator $operand2 = $result";

    
?>

