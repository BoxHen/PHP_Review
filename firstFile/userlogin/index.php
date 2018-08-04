<?php
  require 'core.php';
  require 'loginform.php';
  require 'connect.php';

  //echo $current_file; 
?>
<?php
/*
NOTES:
	-"$":
		used to signify variable
		can start with underscore or letter or number

	-echo:
		is a language contruct that allows you to print to screen
		can use single or double quotes

		"" for echo-ing variables (slower)
		In double quoted strings other escape sequences are interpreted as well any variable will be
		replaced by their value.

		'' easiest way to sepecify a stringThis method in used when we want to the string to be exactly
		as it is written. When string is specified in single quotes PHP will not evaluate it or interpret
		escape characters except single quote with backslash (‘) and backslash(\) which has to be escaped.

		we can use tags like this in echo <strong> </strong>

	-print:
		older way to print data to screen/browser

		and slower and more characters to type

	-html tags in echo/print
		we will get error with semi colon since it will think:
		echo "<input type = "text" name = "name">";
		the "" on type = "text" ends the quotations
		FIX: use type = 'text' inside, use echo '', or escape charaters \" (preferable to use 2nd or last)
	-comments: use // or /(star)(star)/

	-in error reporting:
		if no errors appear but something is wrong check in php.ini file and make sure error_reporting
		is not set to 0 also turn error_reporting off when done with coding so viewers dont see errors
		if page doesnt load
		for security reasons we turn error_reporting to 0

		we can change it dynamically in code with "error_reporting('E_ALL');"

	-concatenation:
		We concat with the dot "."
		|ex| $day = 'Saturday'; $date = 4; $year = 2018;
			 echo 'The date is '.$day.' '.$date.' '.$year;
								OR
			 echo "The date is $day $date $year";
		with "" we don't need the dot
		'' is faster and with complex code '' may be better

	-if statements
		same concept as other language

	-assignment operator:
		+=, -=, etc exist in php
		.= is a concat

	-comparison operator
		!=, ==, <, >, <=, >=
		<> is same as !=

	- arithmetic operators:
		same concept as other lang (+, -, /, *, %)

	-Logical operator:
		&& or AND
		|| or OR

	-Triple equals: same as == but compares data type as well

	-while loop: same as other lang
		while(){}

	-do while loop:
		do{
			//executes this first and at least once
		}while()

	-for loop: same as other lang
		for(i = 0; i <= 10; i++){}

	-switch statement:
		switch(case){
			case 1:
				something;
				break;
			case 2:
				something;
				break;
			default:
		}

	-die and exit functions:
		die(); and exit(); do same thing - kill rest of code - goes over them
		we can print with the functions by doing die('error') OR exit('error')
		we do this because
			|Ex| mysql_connect('localhost','root','') or exit('Could not connect to database')
				 echo 'Connected!'
			this will display connected! if connection successful or exits if not

	-expression matching:
		preg_match

		$string = 'This is a string.'
		if (preg_match('/is/', $string) ){
			echo 'Match Found';
		}else {
			echo 'No match found';
		}
		note:
			The solution (which other answers don't mention—at least at the time of my originally
			writing this) is that when PHP refers to delimiters, it's not referring to the delimiters you
			see in your code (which are quote marks) but the next characters inside the string.
			(In fact I've never seen this stated anywhere in any documentation: you have to see it in examples.)
			So instead of having a regular expression syntax like what you may be accustomed to from many other
			languages:
			/something/
			PHP uses strings, and then looks inside the string for another delimiter:
			'/something/'
			The delimiter PHP is referring to is the pair of / characters, instead of the pair of ' characters.
			So if you write 'something', PHP will take s as the intended delimiter and complain that you're not
			allowed to use alphanumeric characters as your delimiter.

			So if you want to pass (for instance) an i to show that you want a case-insensitve match, you pass
			it inside the string but outside of the regex delimiters:
			'/something/i'
			If you want to use something other than / as your delimiter, you can, such as if you're matching a
			URL and don't want to have to escape all the slashes:
			'~something~'

	-functions:
		function functionName(argument1, argument2){
			something;
		}



	-
*/
?>
