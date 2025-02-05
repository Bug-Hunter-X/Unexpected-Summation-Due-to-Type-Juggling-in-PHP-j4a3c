```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number; 
    } else {
      //Handle non-numeric input, e.g., throw an exception, use 0, or log an error
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, '5a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Correct handling of non-numeric input
```