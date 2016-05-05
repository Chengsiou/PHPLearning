<pre>
<?php
/*$test = array("a", "b", "c", "d");
var_dump($test);*/

/*echo $addresses[0];
echo $addresses;
$addresses[0] = "spam@yahoo.com";
$addresses[1] = "AAAA@yahoo.com";
$addresses[2] = "ujk@yahoo.com";*/
/**********陣列*************/
/*$addresses = array("spam@yahoo.com" ,"AAAA@yahoo.com", "ujk@yahoo.com");
var_dump($addresses);

$price['greent'] = 20.15;
$price['kiki']  = 556;

$price = array
(
    'greent' => 20.15,
    'kiki'=>556
);

var_dump($price);*/

/**********取得陣列的長度*************/
/*$family = array("Apple" , "Banana", "Orange");
$size = sizeof($family);
echo $size;

$confusion = array(10 => "apple" , 11 => "JU", 12 => "aaaa");
$sizLength = count($confusion);
echo $sizLength;

$scores = array(5,10);
$padded = array_pad($scores, -6, 0);
var_dump($padded);*/

/**********多維陣列*************/
/*$row0 = array(1,2,3);
$row1 = array(4,5,6);
$row2 = array(7,8,9);
$multi = array($row0,$row1,$row2);
$value = $multi[1][1];
echo ("The value at row 2, colunm 0 is {$multi[1][1]}\n");*/

/**********取出多個值*************/
/*$person = array("Fred", 35 ,"MOCO");
list($name, $age, $wife) = $person;
var_dump($person);*/

/**********分割陣列*************/
/*$order = array("Tom","MIMI", "Mike","jessie");
list($second , $third) = array_slice($order, 2, 2);
echo '$second:' . "$second\n";
echo '$third:' . "$third";*/

/**********移除或插入元素*************/
/*$subjects = array("physics" , "chem" , "math" , "bio" , "cs" , "drama" , "classics");
$remove = array_splice($subjects, 2);

print_r($remove);
print_r($subjects);*/

/*$subjects = array("physics" , "chem" , "math" , "bio" , "cs" , "drama" , "classics");
$new = array("Apple" , "banana");
$NewTest = array_splice($subjects, 4 , 2 , $new);
print_r($subjects);*/

/*$subjects = array("physics" , "chem" , "math");
$new = array("Apple" , "banana");
array_splice($subjects, 2, 0,$new);
var_dump($subjects);*/

/**********變數與陣列互相轉換*************/
/*$shape = "Mike";
$Apple = array('color' => "blue" , 'shape' => "Jessie");
extract($Apple, EXTR_PREFIX_ALL, "Foe");
echo "color:{$Foe_color} , Book shape :{$Foe_shape} , Shape:{$shape}";

$a = "idoo";
$b = "Coco";
$c = "none";

//$test = compact("a" , "b" , "c");
$name = array("a" , "b" , "c");
$KOKO = compact($name);
print_r($KOKO);*/

/**********走訪陣列*************/
//$address = array("xxxxx@yahoo.com" , "dddd@gmail.com");
/*foreach ($address as $value) 
{
    echo "test: {$value}\n";
}

$person = array ('name' => "Mike" , 'age' => 22 , 'wife' =>"Wilame");

foreach ($person as $key => $value) {
    echo "Frrr {$key} is {$value}\n";
}*/

/*reset($address);
while (list($key, $value) = each($address))
{
    echo "{$key} is {$value}\n";
}*/

/**********建立表格*************/
/*$ages = array(
    'person' =>"Age",
    'Apple' => 35,
    'Jessie' => 24,
    'wayne' =>25,
);

reset($ages);
list($c1 , $c2) = each($ages);
echo ("<table>\n<tr><th>{$c1}</th><th>{$c2}</th></tr>\n");

while (list($c1 , $c2) = each($ages))
{
    echo ("<tr><td>{$c1}</td><td>{$c2}</td></tr>\n");
}

echo("</table>");*/

/**********for印出陣列*************/
/*$addressCount = count($address);
echo "{$addressCount}\n";
for ($i = 0 ; $i < $addressCount ; $i++)
{
    $value = $address[$i];
    echo "{$value}\n";
}*/

/**********array_walk*************/
//function Test($value,$key,$color)
$callback = function($value,$key)
{
  print("<tr><td>{$value}</td><td>{$key}</td></tr>\n");  
  //echo ("<tr>\n<td bgcolor = \"{$color}\">{$value}</td>");
  //echo ("<td bgcolor = \"{$color}\">{$key}</td>\n</tr>\n");
};

$person = array('$name' => "wayne", '$age' => 25, '$wife' =>"AAAA");
//echo "<table border = \"1\">";
//array_walk($person, "Test", "lightblue");
array_walk($person, $callback);
//echo "</table>";

/**********縮小陣列*************/
/*$callback = function($runnimgTotal , $currentValue)
{
    $runnimgTotal += $currentValue * $currentValue;
    return $runnimgTotal;
};

$numbers = array(2,3,5,7);
$total = array_reduce($numbers, $callback,15);
echo $total;*/

/**********array_multisort*************/
/*$name = array("Jessie" , "wayne" , "coco" , "Bill");
$ages = array(33,12,98,25);
$zips = array(80522,'02140',90210,64141);

array_multisort($zips , SORT_DESC , $ages , SORT_ASC , $name , SORT_ASC);
for($i = 0; $i<count($name);$i++)
{
    echo "{$name[$i]}, {$ages[$i]} , {$zips[$i]}\n";
}*/

/**********shuffle、rand隨機*************/
/*$weekdays = array("Monday", "Tuesday","Wednesday", "Thursday");
//shuffle($weekdays);
$random_key = array_rand($weekdays , 2);
echo $weekdays[$random_key[0]]."\n";
echo $weekdays[$random_key[1]]."\n";*/

/**********array_filter過濾*************/
/*$callback = function($element)
{
  return $element % 2 ;  
};
$number = array(12,51,17,13);
$odds = array_filter($number, $callback);
print_r($odds);*/

/**********集合*************/
/*function arrayUnion($a , $b)
{
    $union = array_intersect($a , $b);
    $union = array_unique($union);
    return $union;
}

$first = array(1,"two",3);
$second =  array("two", "three" , "four");

$union = arrayUnion($first, $second);
print_r($union);*/
?>
</pre>

