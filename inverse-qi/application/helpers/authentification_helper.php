<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( !function_exists('isAuthenticated'))
{
	function isAuthenticated()
	{
		if (isset($_COOKIE["Connexion"]))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

if ( !function_exists('getUsername'))
{
	function getUsername()
	{
		if (isset($_COOKIE["username"]))
		{
			return $_COOKIE["username"];
		}
		else
		{
			return 0;
		}
	}
}