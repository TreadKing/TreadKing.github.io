<!DOCTYPE html>
<html>
<head>
    <title> CW 04 </title>
</head>
<body>
<h2> Exercise 1 </h2>
<p>
<?php
    function hello_world() {
        echo "Hello World";
    }
    hello_world();
?>
</p>

<h2> Exercise 2 </h2>
<p>
<?php  
for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
</p>

<h2> Exercise 3 </h2>
<p>
<?php 
    function triangle($n){
        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
        $n = 5;
    triangle($n);
?> 
</p>

<h2> Exercise 4 </h2>
<p>
<?php

    function word_count($input) {
        $count = 0;
        $strlen = strlen($input);
        for($i = 0; $i < $strlen; $i++) {
            $char = substr($input, $i, 1);
            if ($char == " "){
                $count++;
            }

            if ($i == $strlen-1){
                if ($char != " "){
                    $count++;
                }
            }
        }
        echo $count;
    }

    $input = "hello world thing";
    word_count($input);
?>
</p>

<h2> Exercise 5 </h2>

<?php

    function countWords($str) {
        $string = explode(" ",$str);
        $count = array();
	    foreach($string as $word => $words){
            if (array_key_exists( $words , $count)){
                $count[$words] = $count[$words]+1;
            }

            else{
                $count[$words]=1;
            }
		}
		print_r($count);
		}
        $str =strtolower("According to all known laws
        of aviation,
        
          
        there is no way a bee
        should be able to fly.");
        countWords($str);

?>

<h2> Exercise 6 </h2>
<?php

function remove_all($str, $char){
    $len = strlen($str);
    $str2 = "";
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] !== $char) {
            $str2 = $str2.$str[$i];
        }
    }

    return $str2;
}
echo remove_all("according to all known laws
of aviation,

  
there is no way a bee
should be able to fly.", "a");

?>

</body>
</html>