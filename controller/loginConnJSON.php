<?php

$emptyMail = "";
$emptyPass = "";


if (isset($_POST["login"]))
{
	if (empty($_POST["email"])) 
	{
        $emptyMail = "*";
        
    }
	else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
	{
        $emptyMail  = "*";
        
    }
	if (empty($_POST["password"])) 
	{
        $emptyPass = "*";   
    } 
	
}