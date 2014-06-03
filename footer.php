
<?php
	echo "Copyright &copy; 1999-" . date("Y") . " W3Schools.com  ";?>
<?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
	$H = date('H') +2;
	echo "Last modified: " . date ("F d Y $H:i:s.  ", getlastmod());
	echo '<a href = "http://www.cssportal.com/css-validator/validate.php?url=http://jtsdev.com/index.php&warning=1&profile=css3&usermedium=all"><strong>CSS Compliance</strong></a> <a href = "http://validator.w3.org/check?uri=http%3A%2F%2Fjtsdev.com%2Findex.php&charset=%28detect+automatically%29&doctype=Inline&ss=1&outline=1&group=0&st=1&user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices"><strong>W3C Compliance</strong></a>';
?>

