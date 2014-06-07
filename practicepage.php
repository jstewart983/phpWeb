
<?php
/* This script handle the event form. */

// Address error management, if you want.

// Print the text:
print "<p>You want to add an event called <b>{$_POST['name']}</b> which takes place on: <br />";

// Print each weekday:
if (isset($_POST['days']) AND is_array($_POST['days'])) {

	foreach ($_POST['days'] as $day) {
		print "$day<br />\n";
	}

} else {
	print 'Please select at least one weekday for this event!';
}

// Complete the paragraph:
print '</p>';

$week1specials = array(
	"Monday"=>'Meatball Sandwiches',
	"Tuesday"=>'Grinders',
	"Wednesday"=>'Tacos',
	"Thursday"=>'Fried Chicken',
	"Friday"=>'Pizza',
	"Saturday"=>'Pancakes + Bacon',
	"Sunday"=>'Mac n Cheese');

$week2specials = array(
	"Monday"=>'Chicken Divon',
	"Tuesday"=>'Walnut and Broccoli Pasta',
	"Wednesday"=>'Chicken Tenders',
	"Thursday"=>'Prizza',
	"Friday"=>'Cereal',
	"Saturday"=>'Cheesecake',
	"Sunday"=>'Steak and Potatoes');

$week3specials = array(
	"Monday"=>'Chicken Noodle Soup',
	"Tuesday"=>'Pizza',
	"Wednesday"=>'Lasagna',
	"Thursday"=>'Meatloaf',
	"Friday"=>'Tacos',
	"Saturday"=>'BBQ Chicken',
	"Sunday"=>'Hamburgers');

$specials = array(array("Monday"=>'Meatball Sandwiches','Chicken Divon','Chicken Noodle Soup'),
	array("Tuesday"=>'Grinders','Walnut and Broccoli Pasta','Pizza'));

echo print_r($week1specials);
print '<br />';
$weekmenu = implode('<br />',$week1specials);
print $weekmenu;

echo print_r($specials);
print '<br />';
$twodimensionalmenu = implode('<br />',$specials);
print $twodimensionalmenu;
// Create the first array:
$phpvqs = array (1 => 'Getting Started with PHP', 'Variables', 'HTML Forms and PHP', 'Using Numbers');

// Create the second array:
$phpadv = array (1 => 'Advanced PHP Techniques', 'Developing Web Applications', 'Advanced Database Concepts', 'Security Techniques');

// Create the third array:
$phpmysql = array (1 => 'Introduction to PHP', 'Programming with PHP', 'Creating Dynamic Web Sites', 'Introduction to MySQL');

// Create the multidimensional array:
$books = array (
'PHP VQS' => $phpvqs,
'PHP Advanced VQP' => $phpadv,
'PHP and MySQL VQP' => $phpmysql
);

// Print out some values:
print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
print "<p>The fourth chapter of my fourth book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";

// See what happens with foreach:
foreach ($books as $key => $value) {
	print "<p>$key: $value</p>\n";
}
?>