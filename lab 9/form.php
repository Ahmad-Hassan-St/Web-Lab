<?php
use LDAP\Result;

$email = $_POST['email'];
$password = $_POST['password'];
$rdaio = $_POST['gridRadios'];
//$checkBox = $_POST['checkbox'];
echo ("<b>Check Box : </b>");
if (!empty($_POST['checkbox'])){
   
    echo $_POST['checkbox']; // Displays value of checked checkbox.
    }
    else{
    echo ("false");
    }

    if($email!="" || $password !="" )
    {
    echo ("<b><br>Email :</b>" . $email);
    echo ("<b><br>Password :</b>" . $password);
 
    }else{
    echo 'error';
    }
    echo ("<b><br>Radio Button: </b>");
    echo($rdaio);
function Sorted($array, $argument)
{
    $rdaio = $_POST['gridRadios'];
    if ($argument == "ASC") {
        sort($array);
        return ($array);
    } else if ($argument == "DES") {
        rsort($array);
        return ($array);
      
    }
    else{
        sort($array);
        return ($array);
    }
}
function shuffle_assoc($arr)
    {
        $keys = array_keys($arr);
        shuffle($keys);
        foreach($keys as $key) {
            $new[$key] = $arr[$key];
        }
        $arr = $new;
        return $arr;
    }
//Question 1,2
echo ("<h1>Sorted Array</h1>");
if ($rdaio == "First radio"){
    $Integer_Array = range(0, 200);
    shuffle($Integer_Array);
    $random_suffle = array_slice($Integer_Array, 0, 100);
   $result= Sorted($random_suffle, null);
    foreach ($result as $value)
        echo ($value . " , ");
        
} 
else if ($rdaio == "Second radio") {

    $keys = array('something', 'anotherThing', 'foo', 'bar', 'baz');
    $result = array();
    for( $i=0;$i<100;$i++) {
    $result[$i] = mt_rand(10,99);
}
   $result = Sorted($result, "DES");
    print_r($result);
    //print_r($result);
    // $random = rand();
    // $array = array_fill_keys($key_array, $random);
    // $array = array_fill_keys($key_array, 0);
    // Sorted($array, "AES");
    // echo ("chedck");

}

?>