<?php
/**
 * Date: 2018/7/19 10:02
 * @author: Dragon (freedomtouchd@gmail.com)
 */

function triangle()
{
    $n = [1];
    $new = [];

    while (1){
        yield json_encode($n);
        $c = count($n) - 1;
        if($c >= 1){
            foreach (range(1,$c) as  $v){
                $n[$v] = $new[$v] + $new[$v-1];
            }
            array_push($n,1);
            $new = $n;
        }else{
            array_push($n,1);
            $new = $n;
        }
    }

}
