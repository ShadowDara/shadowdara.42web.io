<?php

/**
 * @Author Shadowdara
 * PHP Script to track statistics for the usage of my programms
 * and websites
*/

//Variables
$base_token = "1234";
$identifiers = array("nn");


if (isset($_GET['token']))
{
    $token = htmlspecialchars($_GET['token']); // Sicherheitsmaßnahme gegen XSS

    if ($token === $base_token)
    {
        if (isset($_GET['identifier']) && in_array($_GET['identifier'], $identifiers))
        {
            echo "done";
        }

        else
        {
            echo "Wrong identifier";
        }
    }

    else
    {
        echo "403";
        echo "Permission denied";
    }
}

else
{
    echo "Token missing!";
}

?>
