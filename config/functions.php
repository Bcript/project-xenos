<?php
function get_user_ip()
{
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"]))
	{
		if ($_SERVER["REMOTE_ADDR"] != $_SERVER["HTTP_CF_CONNECTING_IP"])
		{
			return $_SERVER["HTTP_CF_CONNECTING_IP"];
		}
		else
		{
			return $_SERVER["REMOTE_ADDR"];
		}
	}
	else
	{
		return $_SERVER["REMOTE_ADDR"];
	}
}

function gethost()
{
	$host = "http";
	if (isset($_SERVER["HTTPS"]))
	{
		$host .= "s";
	}

	return $host . "://". $_SERVER["HTTP_HOST"];
}

function ends_with($haystack, $needle) 
{
	return substr_compare($haystack, $needle, -strlen($needle)) === 0;
}

function build_nav()
{
	require_once($_SERVER["DOCUMENT_ROOT"]. "components/topbar.php");
}

function build_footer()
{
	require_once($_SERVER["DOCUMENT_ROOT"]. "components/footer.php");
}
