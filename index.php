<?php
    $name = "Hello";
    $age = 12;
    $isCnic = true;
    $marks = 21.2;
 
     echo "$name";
     echo" <br> $age";
     echo " <br> $isCnic <br> $marks";


     $a = 25;
     $b = 10;
     $c = $a +$b;
     $d = $a -$b;
     $e = $a *$b;
     $f = $a /$b;
     $g = $a %$b;
     echo "<br> The Sum Of $a +$b is :".$c;
     echo "<br> The Sub Of $a -$b is :".$d;
     echo "<br> The mul Of $a *$b is :".$e;
     echo "<br> The div Of $a /$b is :".$f;
     echo "<br> The Modulus Of $a %$b is :".$g;

     $apple =40;
     echo "<br> The Increment of this number is :" .$apple++;
     echo "<br> $apple";
     echo "<br> The Increment of this number is :" .++$apple;

     $number = 209;
     echo "<br> Initial number is:" .$number;
     echo "<br> The decrement of this number is:".--$number -1;
     echo "<br> The Increment of this number is:".++$number +6;
     echo "<br> The decrement of this number is:".--$number -8;
     echo "<br> The Increment of this number is:".++$number -104;


     for($i =1 ; $i<=10 ; $i++){
        echo "<br> 12 x $i =".$i*12;
     }

     $table =63;
     for($a=1 ; $a<=10 ; $a++){
        echo "<br> $table x $a = ".$table*$a;
     }

     for($x = 0 ;$x <=10 ;$x++){
        for($k =0 ; $k<$x; $k++){
            echo "*";
        }
        echo "<br>";
     }

     $tree =65;
     while($tree<70){
        echo "<br> This is while loop: " .$tree;
        $tree++;
     }

     $file = 90;
     do{
        echo "<br> This is do while loop : " .$file;
        $file++;

     }
     while($file<=95);
?>