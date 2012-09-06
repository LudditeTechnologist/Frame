<?php
	
	class HelloWorld
	{
		var $hello = 'hello';

		function __construct()
		{
			echo $this->hello;
		}
	}
	
	$hi = new HelloWorld;
		
?>
