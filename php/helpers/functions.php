<?php


function inputHas($key)
{
	//return true/false if it has the key
	return isset($_REQUEST[$key]);
}

function inputGet($key)
{
	//returns the value specified by the key, or null if the key is not set.
	return (inputHas($key)) ? escape($_REQUEST[$key]) : null;
}

function escape($input)
{
	//strip all special characters
	return htmlspecialchars(strip_tags($input));

}

function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();
}

?>