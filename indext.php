<?php 
/**Question 01:

		Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.
*/
?>
<h1>ANSWER-1:</h1>
<?php 
$running_month_april = date( "t" );
$initial_month_april = $running_month_april;
for($initial_month_april =1; $initial_month_april <= $running_month_april; $initial_month_april++)
{
    echo $initial_month_april ;
    echo "<br>";
   }

   
   echo "<br>";

/**
 * Question 02: 
 * If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.You have to rotate from 1 to 100.Your output message should like that, “3 is a odd number” Not need to print even number
 */
//ANSWER-2:-
?>
<h1>ANSWER-2:</h1>
<?php


for($numer=0; $numer<=100; $numer++){
    if($numer%2){
        echo $numer;
        echo "<br>";
    }

}
echo "<br>";
/***
 * Question 03: 

		Factorial - I think everyone knows the word. Factorial of 4 is given below:

4! = 4*3*2*1 = 24

6! = 6*5*4*3*2*1 = 720  

So let’s calculate the factorial of 7.
 */
?>

<h1>ANSWER-3:</h1>
<?php
$number=7;
$factoryal_number=1;
for($t=$number; $t >0; $t--){
    $factoryal_number=$factoryal_number*$t;
    echo "total value=" . $factoryal_number;
}
echo "<br>";

/**
 * Question 04: 
 * Print out from 100 - 1 using a while loop. 
 * You must use decrement operator
 */
?>
<h1>ANSWER-4:</h1>
<?php
$i=100;
$i-=1;
while($i>=1){
    echo $i;
    $i--;

}
/**
 * You have an array of your purchased product items. 
 * ['apple', 'orange', 'banana', 'mango']
 * Show all products as a table list.
 * Output should like that: “sl- 1 and product - apple”
 */
echo "<br>";
?>
<h1>ANSWER-5:</h1>
<?php
$product=['apple', 'orange', 'banana','mango' ];
foreach($product as $value =>$product){
    echo ++$value . '_' . $product;
}

?>
