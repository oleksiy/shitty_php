<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Defined Functions</title>
</head>
<body>
<?php
function say_hello(){
    echo "shitty PHP!<br/>";
}

function where_is_billy($response){
    if(str_ireplace(" ", "", strtolower($response)) === "roadhouse"){
        echo "We've got to get to the {$response}!!!";
    }else{
        echo "Well, that's not right, Billy's not a at {$response}<br/>";
    }
}
say_hello();
where_is_billy("Road House");
?>
<pre>
<?php
//Multiple Returns Function
function add_subt($a, $b){
    $add = $a + $b;
    $subtract = $a - $b;
    return array($add, $subtract);
}
$result = add_subt(2800, 500);
print_r($result) . "<br/>";
echo current($result) . " current return value" . "<br/>";
echo next($result) . " next array return value" . "<br/>";


?>
</pre>

<?php
//global variables vs local
$this_is_global = 3.99;
function modifyGlobal(){
    $local = 2.99;
    $result = array();
    global $this_is_global;
    array_push($result ,"prior to changing global variable its value is " . $this_is_global);
    $this_is_global += 2000;
    array_push($result,"after changing the value {$local}, global {$this_is_global}");
    //var_dump(debug_backtrace());
    return $result;
}

$result = modifyGlobal();
print_r(current($result));
echo "<br/>";
print_r(next($result));
echo "<br/>";
echo $this_is_global;
?>
<br/>
<pre>
<?php
var_dump($result);//check everything about variable
echo "<br/>";
print_r(get_defined_vars());
?>
</pre>
</body>
</html>