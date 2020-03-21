<?php
	#substr()
	#returns a portion of a string
	
	/*

	$output = substr('Hello', 2); 
	echo $output.'<br>'; //grazins  llo, jei 0, grazins Hello, jei 1 ello

	$output1 = substr('Hello', 1, 3);
	echo $output1.'<br>'; //grazins ell (is viso 3 simbolius)

	$output2 = substr('Hello', -2);
	echo $output2.'<br>'; //grazins nuo desines puses 2 simbolius lo
	
	*/

	#strlen
	#returns the lenght of a string

	/*

	$output = strlen('Hello world');
	echo $output; //grazins 11
	
	*/

	#strpos()
	#Finds the position of the first occurence of a sub string

	/*

	$output = strpos('Hello world', 'o');
	echo $output; //Grazins 4, nes 'o' yra 4 pozocijoje, pirmoji sutampanti raine skaiciuojans nuo nulio. Jei bus daugiau 'o' raidziu, grazins pirmosios pozicija

	*/

	#strrpos()
	#Finds the position of the last occurence of a sub string

	/*

	$output = strrpos('Hello world', 'o');
	echo $output; //Grazins 7, nes 'o' yra 7 pozocijoje, paskutine sutampanti raide skaiciuojans nuo nulio. 
	
	*/

	#trim() use in form input, when submit a form
	#Strips whitespace

	/*

	$text = 'Hello world                        ';
	//var_dump($text); //grazina string(35) "Hello world " stringo ilgis 35 simboliai, nes ivertinat tuscia vieta

	$trimmed = trim($text);
	var_dump($trimmed); //grazina string(11) "Hello world" //imeta tuscius tarpus

	*/

	#strtoupper
	#Makes everything uppercase

	/*

	$output = strtoupper('Hello World');
	echo $output; // grazina HELLO WORLD

	*/

	#strtolower
	#Makes everything lowercase

	/*

	$output = strtolower('Hello World');
	echo $output; //grazina hello world
	
	*/

	# ucwords()
	# Capitalize every word

	/*

	$output = ucwords('hello world');
	echo $output; //grazins Hello World kiekviena zodi pakeicia didziaja raide
	
	*/

	#str_replace()
	#Replace all ccurence of a seach string with a replacement

	/*

	$text = 'Hello World';
	$output =str_replace('World','Everyone', $text); //pirmas parametras iekomas zodis, antras kuri keiciam, trecias teksto
	echo $output;

	*/

	#is_string()
	#Check if string

	/*

	//$val ='Hello world';
	//$output = is_string($val);

	//echo $output; //kadagi stingas grazina 1, jei vietoj 'Hello world' butu 22, nieko negrazintu nes tai ne stringas

	$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '','  ', 0, '0');

	foreach($values as $value) {
		if (is_string($value)){
			echo "{$value} is a string<br>"; //atspausdins visus stringus is masyvo
		}
	}
	
	*/

	# gzcompress()
	# Compress a string

	/*
	$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

	$compressed = gzcompress($string);

	//echo $compressed; //Parodo suspausta teksta, kurio niekur nepanaudosime. Norint naudoti teksta reikia issiarchyvuoti su kita funcija

	$original =gzuncompress($compressed);
	echo $original; //rodys originalu nesuspausta teiksta, kitamaji galima naudoti kitur
	
	*/

	# stristr()
	# Find the first occurrence of "world" inside "Hello world!", and return the rest of the string:

	echo stristr("Hello world!","WORLD"); //return world
	?>

























?>