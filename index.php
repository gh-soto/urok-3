<?php 


//завдання 1 .
function numbers_func ($a=0) {

	 for ($i = 1; $i <= $a; $i++) {

        print $i . ' ';

	}
}
numbers_func(5);




//завдання 2
function mult ($a=0) {
	print '<table border="1" cellspacing="0">';
	for ($i = 1; $i <= $a; $i++) {
		print '<tr>';
		for ($x = 1; $x <= $a ; $x++) { 

			if ($i == 1 || $x == 1) {
				print "<td><strong>" . $i*$x . "</strong></td>";
			}
			else {
				print "<td>" . $i*$x . "</td>";
			}

		}
		print '</tr>';
	}

	print '</table>';
}
mult (20);



//завдання 3
function number_to_text ($a=0) {
	switch ($a) {
		case '1':
			return 'first';
			break;
		case '2':
			return 'second';
			break;
		case '3':
			return 'third';
			break;
		case '4':
			return 'fourth';
			break;
		case '5':
			return 'fifth';
			break;
		case '6':
			return 'sixth';
			break;
		default:
			
			break;
	}
}
$a = number_to_text (3);
print $a;

 