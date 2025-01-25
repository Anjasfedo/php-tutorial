<?php 

// array filter
$arrayLang1 = [
    'english' => 'fluent',
    'indonesia' => 'fluent',
    'japan' => 'good',
    'korean' => 'basic',
    'chinese' => 'basic'
];

// mode: 0 = each items
// mode: ARRAY_FILTER_USE_KEY = each keys = 2
// mode: ARRAY_FILTER_USE_BOTH = each items = 1

$filteredArrayValue = array_filter($arrayLang1, fn($value) => $value == 'fluent', mode: 0);
print_r($filteredArrayValue);

$filteredArrayKey = array_filter($arrayLang1, fn($key) => $key == 'korean', mode: 2);
print_r($filteredArrayKey);

$filteredArrayBoth = array_filter($arrayLang1, fn($value, $key) => $key == 'korean' || $value == 'fluent', mode: 1);
print_r($filteredArrayBoth);

// array merge

$array1 = ["alex", "jane", "jack", "simon"];

$array2 = ["simon", "john", "jane", "jonny"];

$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);

// if use key array, it override new data
$arrayLang2 = [
    'germany' => 'fluent',
    'indonesia' => 'basic',
    'french' => 'good',
];

$mergedArray = array_merge($arrayLang1, $arrayLang2);
print_r($mergedArray);

// array map
$mappedArray = array_map(fn($value) => $value . '!', $array1);
print_r($mappedArray);

// it was shorthand of
$mappedArray = [];
foreach ($array1 as $value) {
    $mappedArray[] = $value . '!';
}
print_r($mappedArray);

// array chunk
// preserve_keys: true, will keep the keys
$chunkedArray = array_chunk($arrayLang1, 2, true);
print_r($chunkedArray);

// array search
// strict: true, will sensitive the case type
$searchedData = array_search('basic', $arrayLang1, true);
print_r($searchedData);

// array replace
$replacedArray = array_replace(
    $arrayLang1,
    [
        'indonesia' => 'basic',
        'japan' => 'fluent',
        'indian' => 'basic',
        'chinese',
        'italian',
    ]
);

print_r($replacedArray);


// array sort
// 1 sort by the value or by the key
ksort($replacedArray);
print_r($replacedArray);

krsort($replacedArray);
print_r($replacedArray);

// 3 keep the keys
asort($replacedArray);
print_r($replacedArray);

arsort($replacedArray);
print_r($replacedArray);

// 2 order
sort($replacedArray);
print_r($replacedArray);

rsort($replacedArray);
print_r($replacedArray);


// array unique
$array = ['lorem', 'lorem', 'ipsum', 'dolor', '2022', 2022, 'res'];

// SORT_STRING
$uniqueArray = array_unique($array, SORT_REGULAR);
print_r($uniqueArray);

// array combine
$keys = ['english', 'indonesia', 'japan', 'korean', 'chinese'];
$values = ['fluent', 'fluent', 'good', 'basic', 'basic'];

$combinedArray = array_combine($keys, $values);
print_r($combinedArray);

// array reduce
$array = [1,2,3,4,5];
$reduced = array_reduce($array, fn($carry, $item) => $carry + $item);

print_r($reduced);

// we can use
echo array_sum($array);
// or
echo array_product($array);

// array flip
$flippedArray = array_flip($arrayLang1);
print_r($flippedArray);

// array diff
$array1 = [
    'english' => 'fluent',
    'indonesia' => 'fluent',
    'japan' => 'good',
    'italian' => 'unknown',
    'chinese' => 'basic'
];

$array2 = [
    'english' => 'fluent',
    'indonesia' => 'basic',
    'japan' => 'good',
    'korean' => 'basic',
    'french' => 'basic'
];

$diffArray = array_diff($array1, $array2);
print_r($diffArray);

$diffArray1 = array_diff_key($array1, $array2);
print_r($diffArray1);

$diffArray2 = array_diff_assoc($array1, $array2);
print_r($diffArray2);

// array intersect
$intersectArray = array_intersect($array1, $array2);
print_r($intersectArray);

$intersectArray1 = array_intersect_key($array1, $array2);
print_r($intersectArray1);

$intersectArray2 = array_intersect_assoc($array1, $array2);
print_r($intersectArray2);

// array change key case
$changedKeyCaseArray = array_change_key_case($array1, CASE_UPPER);
print_r($changedKeyCaseArray);

// array to string
$string = implode(',', $array1);
print_r($string);

$newArray = explode(',', $string);
print_r($newArray);