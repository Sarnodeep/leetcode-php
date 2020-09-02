<?php
class Solution
{
/**
 * @param Integer[] $arr
 * @return Integer[]
 */
    public function replaceElements($arr)
    {
        $length = count($arr);
        $right = $arr[$length - 1];
        $arr[$length - 1] = -1;

        for ($i = $length - 2; $i > -1; $i--) {
            $last = $arr[$i];
            $arr[$i] = $right;
            $right = $last < $arr[$i] ? $arr[$i] : $last;
        }
        return $arr;
    }
}
