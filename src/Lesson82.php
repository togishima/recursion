<?php

namespace Recursion;

class Lesson82
{
    public static function middleSubstring(string $stringInput): string
    {
        $length = strlen($stringInput);
        // 例外系の処理
        if ($length <= 2) {
            return $stringInput[0];
        } 
        if ($length === 3) {
            return $stringInput[1];
        }
        // 4文字以上ならアルゴリズムで対応
        $half = intval(floor($length/2));
        $start = $half - intval($half/2);
        return substr($stringInput, $start, $half);
    }


}