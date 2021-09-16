<?php
// Returns maximum in array
function getMax($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;      
}
 
// Returns maximum in array
function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}

// Returns last element  in array
function getlast($array)
{
   $n = count($array)-1;
   $last = $array[$n];
   for ($i = 1; $i <= $n; $i++)
           $last = $array[$n];
    return $last;      
}
 
$array = array(55,66,88,44,99,100,150);
echo("The maximum number is ");
echo(getMax($array));
echo ("<br>");
echo("The minimum number is ");
echo(getMin($array));
echo ("<br>");
echo ("The last number is ");
echo (getlast($array));

?>