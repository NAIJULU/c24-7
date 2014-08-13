<?php

if(!filter_var($_GET['url'], FILTER_VALIDATE_URL))
  {
  	echo "URL is not valid";
  	die;
  }
else
  {
  	try 
  	{
  		$array_url = get_headers($_GET['url'], 1);
		if( strstr($array_url[0], '200') )
		{
			echo '200';
			die;
		}
		else
		{
			echo 'error'.$array_url[0];
			die;
		}
  	} catch (Exception $e) {

	  	$url = parse_url($_GET['url']);
	  	$host = isset($url['host']) ? $url['host'] : '';
	  	$port = isset($url['port']) ? $url['port'] : 80;
	  	$path = (isset($url['path']) ? $url['path'] : '/') . (isset($url['query']) ? '?' . $url['query'] : '');
	  	$fp = fsockopen($host, $port, $errno, $errstr, 30); 
	  	
	  	if (!$fp) 
	  	{
	  		echo "$errstr ($errno)";
	  		die;
	  	}
	  	 else 
	  	{
	  		echo '200';
	  		die;
	  	}
  	}

  }


?>