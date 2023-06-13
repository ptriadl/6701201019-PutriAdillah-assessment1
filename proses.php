<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $input1 = $_POST["input1"];
  $input2 = $_POST["input2"];
  $operator = $_POST["operator"];

  if($operator == "+") {
    $result = $input1 + $input2;
  } elseif($operator == "-") {
    $result = $input1 - $input2;
  } elseif($operator == "*") {
    $result = $input1 * $input2;
  } elseif($operator == "/") {
    $result = $input1 / $input2;
  } else {
    $result = "Error: Invalid operator";
  }

  echo "Result: " . $result;
}
?>
