function fooPreserveKeys(array $arr): array {
    return array_filter($arr, fn($v) => $v !== 0);
}

$arr = [1, 0, 2, 0, 3];
$result = fooPreserveKeys($arr);
print_r($result); // Output: Array ( [0] => 1 [2] => 2 [4] => 3 )

//Alternative solution using array_values to reindex after filtering
function fooPreserveKeys2(array $arr): array {
    $filtered = array_filter($arr, fn($v) => $v !== 0);
    return array_values($filtered);
}

$arr = [1, 0, 2, 0, 3];
$result = fooPreserveKeys2($arr);
print_r($result); //Output: Array ( [0] => 1 [1] => 2 [2] => 3 )