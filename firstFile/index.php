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
	-"$" used to signify variable 
	-echo is a language contruct that allows you to print to screen
		can use single or double quotes
		
		"" for echo-ing variables (slower)
		In double quoted strings other escape sequences are interpreted as well any variable will be 
		replaced by their value.
		
		'' easiest way to sepecify a stringThis method in used when we want to the string to be exactly 
		as it is written. When string is specified in single quotes PHP will not evaluate it or interpret 
		escape characters except single quote with backslash (‘) and backslash(\) which has to be escaped.
		
		we can use tags like this in echo <strong> </strong>
	-print
		older way to print data to screen/browser 
		
		and slower and more characters to type 
	-html tags in echo/print 
		we will get error with semi colon since it will think:
		echo "<input type = "text" name = "name">";
		the "" on type = "text" ends the quotations 
		FIX: use type = 'text' inside, use echo '', or escape charaters \" (preferable to use 2nd or last)
		
*/ 
?>
