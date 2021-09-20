<?php
/* ***bai1
  echo "bai 1 <br>";
  $number = rand(10,1000);
  echo "so dc tao ra la: $number <br>";
  for ($i= 0;$i < $number;$i ++)
  {
      echo "$i <td>";
      
  }
  echo "<br>";

  $text = (string)$number;
  $length = strlen($text);
  echo "gom co: $length chu so <br>";
  $max = 0;  
  while ($number > 0)
  {
    $temp = $number % 10;
    $number /= 10;
    if ($temp > $max)
        $max = $temp; 
  };
  echo "so lon nhat: $max <br>";
*/  
  
/* ***bai 2
 echo "bai2 <br>";
 $number = rand(1,9);
 echo "so dc tao ra la: $number <br>";
 for ($i = 1 ; $i <=10;$i++)
 {
    echo "$number x $i = ".($number*$i);
    echo "<br>";
 }
*/ 

/* bai 3  
<table border="1px">
<tr>
<?php
   echo "bai3 <br>";
   for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</td>";
}
?>
</tr>
</table>
*/
/* *** bai 4
    $a = rand(2,5);
    $b= rand(2,5);
    echo "2 so duoc in ra la $a va $b <br>";
    for ($i = 0; $i < $a; $i++) {
    for ($j = 0; $j < $b; $j++) {
        echo $a.$b." ";
    }
    echo "<br>";
    }
*/


  $path = 'bai5.txt';
  
  echo "bai 5 <br>";
  function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
  }
$number = rand(-100,100) ;
echo ("so duoc chon la:$number <br>");

    if (isPrimeNumber ( $number )==true) {
        echo "$number la so nguyen to";
        $fp = @fopen($path,"a+");
        if (!$fp){
            echo "khong mo dc file";
        }
        else {
            $data = $number."\n";
            fwrite($fp,$data);
            fclose($fp);
      
        }
    }
    else  {
       echo "$number khong phai la so nguyen to";
    }


?> 