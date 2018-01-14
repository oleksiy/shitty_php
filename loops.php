<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loops</title>
</head>
<body>
<?php
for($i = 0; $i < 50; $i++) {
    if($i === 49){
        echo($i . ".");
    } else {
        echo $i . ", ";
    }
}
?>
<br/>
<h1>Foreach</h1>
<?php
$array = ["Joey", "Marcus", "Vitalik", "Ivan", "Chloe"];
foreach ($array as $val){
    echo "VALUE: {$val}!<br/>";
}
?>
<br/>
<h1>Foreach with Assoc Arrays</h1>
<?php
$order = [
    "exchange" => "Binance",
    "user" => "Grognak",
    "order_type" => "buy",
    "order_amount" => 5,
    "order_currency" => "ETH",
    "order_limit" => 0.0003
];

foreach($order as $key => $val) {
    $pretty_key = ucwords(str_replace("_", " ", $key));
    echo "${pretty_key}........{$val}<br/>";
}
?>
<br/>
<h1>Continue</h1>
<?php
foreach($array as $val){
    if($val === "Vitalik"){
        continue;
    }
    foreach($array as $val2){
        if($val2 == "Chloe"){
            echo "|WE FOUND HER|<br/>";
        }else{
            continue(1);
        }
    }
    echo "stopped.";
}
?>
<br/>
<h1>Pointers</h1>
<?php
while(current($array)){
    echo current($array)."<br/>";
    next($array);
}
?>
</body>
</html>