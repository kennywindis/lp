<?php

//loop mst hv 3 things
//intialization $b=1
//increment/decrement $b++
//condition $b<=>8

//how loop wrks
//b=1, (iteration) 1<=30 2=1 (output)
//     (iteration) 2<=30 3=2  (output)
//      (iterate)  3<=30 4=3 (output)

//abv means it keeps the next value, prints the intial value

//while loop

$b =1;

while($b < 8) {
	echo "n <br>" ."<br>";
	$b++;
}


//while(1) {
//	echo "n <br>";
//	$b++;
	
//	if($b > 4) {
//		break;
//	}
//}


//do .. while

$c=1;

do{

echo "gh<br>";
$c++;

}

while ($c < 8);

echo "<br><br>";


//for loop

for ($k=1;$k<=30;$k++){
	echo "mali<br>"."<br>";
	//echo $k.'';//list all numbs uptill 80
	
}

echo '<br><br>';


$d=[1, 2, 3, 4];
for($v=0;$v<=3;$v++){
	echo $d[$v].'<br>';
}

echo '<br><br>';

for ($t=1;$t<=10;$t++){
	if($t==5) {
		//break; //means just jump out of loop
		continue; //ommit and continue iteration
	}
	echo $t;
	
}

echo '<br><br>';

//for ($tk=1;$tk<=10;$t++){
	//if($t%2 == 0) {
		//break; //means just jump out of loop
		//continue; //ommit and continue iteration
	//}
	//echo $t.'';//list all numbrs 
	
//}

echo '<br><br>';

//foreach loop

$ar = ["lg", "og", "kw"];
foreach($ar as $hr){
	echo $hr. '<br>';
}

echo'<br>';

$a = [
"un" => "ken",
"age" => 20,
];

foreach($a as $ky => $v){
	echo 'key is :'. $ky . 'and val is ' . $v .'<br>';
}


echo "<br><br>";


//nested loop
//means calling nother loop inside another loop
//also mean the inner loop
//when value of outer loop increment, inr loop complete it iteration
//when the value of the loop variable in innr loop is TRUE it print out, but when it is FALSE nttin is printd out, it goes bk to the outr loop and start again

for ($q=1;$q<=10;$q++){
echo "q=".$q.": ";
	
 for($cd=1;$cd<=10;$cd++){
 echo $cd . " "; 
	}
	echo "<br>";
}

echo '<br>';


//when jj=1 yu=1, 1
//when jj=2 yu=1,1 then yu=2,2
//when jj=3 yu=1,1 then yu=2,2 then yu=3,3
//when jj=4 yu=1,1 then yu2,2 then yu=3,3  then yu=4,4

//1
//1 2
//1 2 3
//1 2 3 4

for ($jj=1;$jj<=4;$jj++){

	for($yu=1;$yu<=$jj;$yu++){
		echo $yu . '';
	}
	
	echo '<br>';
}

echo "<br>";


// 1 2 3 4
// 1 2 3
// 1 2
// 1

for ($fs=4;$fs>=1;$fs--){

	for($o=1;$o<=$fs;$o++){
		echo $o . '';
	}
	
	echo '<br>';
}

echo '<br>';


//1
//2 1
//3 2 1
//4 3 2 1

for ($kk=1;$kk<=4;$kk++){

	for($yk=$kk;$yk>=1;$yk--){
		echo $yk . '';
	}
	
	echo '<br>';
}

echo '<br>';


//4 3 2 1
//4 3 2
//4 3
//4


for ($fr=1;$fr<=4;$fr++){

	for($yr=4;$yr>=$fr;$yr--){
		echo $yr . '';
	}
	
	echo '<br>';
}

echo '<br>';


//      1 
//    2 1 2 
//  3 2 1 2 3
//4 3 2 1 2 3 4

$tot = 4;

for ($l=1;$l<=$tot;$l++){

 for ($pp=$tot-1;$pp>=$l;$pp--){
	
	echo '&nbsp;&nbsp;';
}

	for($m=$l;$m>=1;$m--){
		echo $m . '';
	}
   
   for ($pr= $tot-2;$pr<=$l;$pr++){
   echo  $pr. ' ';
   	
   }
	
	echo '<br>';
}

echo"<br><br>";

//5 4 3 2 1
//5 4 3 2
//5 4 3
//5 4
//5


for ($frr=1;$frr<=5;$frr++){

	for($yrr=$frr;$yrr<=5;$yrr++){
		echo $yrr . '';
	}
	
	//echo '<br>';
	
}

echo '<br>';










