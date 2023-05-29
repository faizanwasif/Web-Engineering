<?php
	echo "<table>"; // create the table

	for ($row = 1; $row <= 8; $row++) { // loop through each row
	    echo "<tr>"; // start a newrow

	    for ($col = 1; $col <= 8; $col++) { // loop through each column
		$color = ($row + $col) % 2 == 0 ? "white" : "black"; // determine the color of the square. odd is whiite
		echo "<td width='100' height='100' style='background-color: $color'></td>"; // create the square
	    }

	    echo "</tr>"; // end the table row
	}

	echo "</table>"; // end the table
?>

