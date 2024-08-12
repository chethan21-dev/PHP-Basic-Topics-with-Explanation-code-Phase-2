<?php

$name = "mahesh";
$age = "27";
$percentage ="87.2";

//here variables is defined as $symbol and it was reusablility
//every variable was having one value wheater its STRING,INT, FLOAT, BOOLEAN etc.,

echo $name; // you can declar at this type of echo. or else another methode is 

echo "My name is $name";

//Now here we give the multiple variables at the same time.
echo $name."<br>". $age;

//now the variable was declaration is two types 1.local variable 2. global variable
//local variable is in the function inside (ie., with in the function calling) the variable was going to declare.
//global variable is any variable that is defined outside of the function.
function myName()
{
    $name1 ="Mahesh"; //Here it is called as local variable

    echo "My name is $name";

}

myName();
//Whatever we give the name of the variable. That name will declare after declaration the statement.
//syntax is function(function declare) after function name (ie., myName()).

echo $name1; //This is called global variable.
?>