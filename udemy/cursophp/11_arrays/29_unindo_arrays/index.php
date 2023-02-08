<?php

    $arr1 = [1, 2, 3];
    $arr2 = [10, 40, 90];
    $arr3 = [2.1, 44.5, 64.8];
    $arr4 = ["asd", "as", "a"];

    $arrMerge = array_merge($arr1, $arr2, $arr3, $arr4, [0, 15]);

    print_r($arrMerge);