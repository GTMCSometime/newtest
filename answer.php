<?php
function pairNumbersSearcher(array $array)  {
    $arrayFilter = array_filter($array, 'is_int');
    $dropKey = array_values($arrayFilter);
    $result = [];
    for($i = 0; $i < count($dropKey) -  1; $i++) {
        if($dropKey[$i] === $dropKey[$i + 1] - 1) {
            $result[] = [$dropKey[$i], $dropKey[$i + 1]];
        }
    }
    return count($result);
}
