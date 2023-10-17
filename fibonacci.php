
<?php
function fibonacci($val) {
    if($val > 20 ){
        return "val is over 20";
    }

    $arr_fibo = [0, 1];
    for ($i = 2; $i <= $val; $i++) {
            $arr_fibo[$i] = $arr_fibo[$i - 1] + $arr_fibo[$i - 2];
    }
    return $arr_fibo;
}

$val = 5; 
$result = fibonacci($val);

foreach ($result as $value) {
    echo $value . " ";
}

?>