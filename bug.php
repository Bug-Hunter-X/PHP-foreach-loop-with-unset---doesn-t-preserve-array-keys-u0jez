function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 0) {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 0, 2, 0, 3];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )

//The bug is that the keys will be reindexed after unset.
//This may not be what is expected.
//If we need to preserve keys, we should use a different approach.

function fooPreserveKeys(array $arr): array {
    return array_filter($arr, fn($v) => $v !== 0);
}

$arr = [1, 0, 2, 0, 3];
$result = fooPreserveKeys($arr);
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )