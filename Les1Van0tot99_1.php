<?php
//initialisatie
$_output="<h1>Van 0 tot 100</h1>";
//verwerking
for($_x=0; $_x<100; $_x++)//alle cijfers van 0 tot 99
{
    if($_x<10)//de cijfers lager dan 10 krijgen 2 extra "spaties"
    {
        $_output.="&nbsp;&nbsp;";
    }
    //toon $_x en 2 spaties
    $_output = $_output."$_x&nbsp;";
    
    if($_x % 10==9) //rest deling door 10 == 9
    {
        $_output= $_output."<br>";//andere lijn
    }
}
//output
echo($_output);
    
?>