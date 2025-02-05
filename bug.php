```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number; 
  }
  return $sum; 
}

$numbers = [1, 2, 3, 4, '5a']; //Notice the string '5a'
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // unexpected output
```