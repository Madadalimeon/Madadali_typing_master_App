<?php

$Errorcode = [];

$Errorcode[20001] = "Missing required fields.";
$Errorcode[20002] = "Invalid email address.";
$Errorcode[20003] = "Password min 6 word";
$Errorcode[20004] = "Registration successful.";
$Errorcode[20005] = "Username is required.";
$Errorcode[20006] = "Email is required.";
$Errorcode[20007] = "Password is required.";
$Errorcode[20008] = "Unable to register user.";
function getErrorMessage($code)
{
    global $Errorcode;
    return $Errorcode[$code] ?? "Unknown error.";
}
