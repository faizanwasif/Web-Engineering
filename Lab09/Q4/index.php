<?php

// Whats happening in the code?
// We have made a small program for a candy store's stock.
// Stock information has been displayed using a table.
// The table has 4 rows and 5 cols.
// If the stock is less than 10, reorder value for that particular product is set to "yes" using php code.
// The values for Total-value and Tax-due are also calculated and displayed using php.
// While all the functionalities are being perfomed usinf php, HTML is used for creating table and webpage desiging.


	declare(strict_types = 1); // strict types mean const type which cannot be changed like c++
	// creating associative arrays which are like dictionaries in python and maps in c++
	$candy = [
		'Toffee' => ['price' => 3, 'stock' => 12],
		'Mints' => ['price' => 2, 'stock' => 26],
		'Fudge' => ['price' => 4, 'stock' => 8],
	];
	
	// declaring tax variable
	$tax = 20; // 20% tax is injustice
	
	// declaring functions
	
	// this function is for reorder message
	function get_reorder_message(int $stock): string
	{
		return ($stock < 10) ? 'Yes' : 'No';
	}
	
	// this function gets total value
	function get_total_value(float $price, int $quantity): float
	{
		return $price * $quantity;
	}
	
	// this function gets tax due
	function get_tax_due(float $price, int $quantity, int $tax = 0): float
	{
		return ($price * $quantity) * ($tax / 100);
	}
?>
<!DOCTYPE html>

<!-- the following code is written in html -->

<html>
	<head>
	<!-- this is the header in which we are calling css style sheet. Which unfortunately, I think, the ma'am forgot to share -->
		<title>Functions Example</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
	
	<!-- the below two lines contain headings-->
		<h1>The Candy Store</h1>
		<h2>Stock Control</h2>
		
		<!-- here we create a table to display information -->
		<table>
			<tr>
				<th>Product</th><th>Stock</th><th>Re-order</th><th>Total value</th><th>Tax
				due</th>
			</tr>
			
			<!-- the following code is php, in which we are using a loop to iterate through the data to display it -->
			<?php foreach ($candy as $product => $data) { ?>
				<tr>
				<td><?= $product ?></td>
				<td><?= $data['stock'] ?></td>
				<td><?= get_reorder_message($data['stock']) ?></td>
				<td>$<?= get_total_value($data['price'], $data['stock']) ?></td>
				<td>$<?= get_tax_due($data['price'], $data['stock'], $tax) ?></td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>
