<?php
echo 'Hello World';
/*phpinfo(); gives info but do not use in final(remove after)*/
$name = 'Henry';
$age = 21;
if (strtolower($name)==='henry'){
	if($age >= 21){
		echo'You\'re over 21';
	}
}else{
	echo 'You\'re not Henry!';
}

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
*/ 
?>


















