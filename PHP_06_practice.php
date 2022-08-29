<?php

/*引数に数値を指定して実行すると、
数値を2倍にして返す関数を作成してください*/

function double($number) {
    
    $result = $number * 2;
    
    return $result;
}

echo double(5);


/*$a と $b を仮引数に持ち、　
$a と $b　を足した結果を返す関数を作成してください*/

function add($a, $b){
    
    $result = $a + $b;
    
    return $result;
}

echo add(10, 15);


/*$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください*/


function mul($arr){
    
     $result = 1;
     
     foreach($arr as $array){
     
     $result = $result * $array;
     }
     
     return $result;
}

echo mul(array(1, 3, 5, 7, 9));



/*【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array 
という関数を実装しようとしています。途中の部分を完成させてください*/

function max_array($arr){
    
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
      
    // ここで配列の中の1番大きい値を探したい
    if($max_number < $a){
        $max_number = $a;
    }
  }

  return $max_number;
}

echo max_array(array(1, 5, 10, 7));

/*strip_tags*/
$text = "<h1>tech boost</h1><a helf = http://xxx> link </a>";

echo strip_tags($text);
echo "\n";


/*array_push*/

$arr = array(5, 10, 15);

$result = 0;

array_push($arr, 2, 5);

foreach($arr as $a) {
    
    $result = $result + $a;

}

echo $result;



/*array_merge*/

$color1 = ["red", "green", "blue"];
$color2 = ["yellow", "orange", "pulple"];
$color = array_merge($color1, $color2);

for ($i = 0; $i < count($color); $i++) {
  echo $color[$i];
  echo"\n";
}


/*time, mktime*/ /*date*/

$day = (date("Y年m月d日", time()));

$today = "今日は". $day . "です";

echo $today;

