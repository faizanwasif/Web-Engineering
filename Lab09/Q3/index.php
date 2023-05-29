<?php
	include("header.php");
	class Accounts{ // creatiing accounts class
		public $balance; // declaring variable
		public $withdrawAmount;
		public $depositAmount;
		public $balanceAfterwithdraw;
    		public $balanceAfterdeposit;
		
		// constructor
		// basically all the calculations will be done in the constructor
		public function __construct($balance, $withdrawAmount, $depositAmount) // create constructor
		{
			if ($balance < 0 || $withdrawAmount < 0 || $depositAmount < 0) {
		    		echo "Balance, withdraw amount, and deposit amount must all be positive numbers.";
		    		
		    		trigger_error("Warning", e_error_warning);
        		}
        		else{
				$this->balance = $balance;
				$this->balanceAfterwithdraw = ($this-> balance - $withdrawAmount);
				$this->balanceAfterdeposit = ($this->balance + $depositAmount);
			}
		}
		
		// get initial balance
		public function getBalance()
		{
			
			return "Your balance is " . $this->balance;
			
		}
		
		// get balance after withdraw
		
		public function withdraw()
		{
			if($this->balanceAfterwithdraw > 0){
				return "Your balance after withdraw is " . $this->balanceAfterwithdraw;
			}
			else{
				return "Account balance not enough";
			}
		}
		
		// get balance after deposit
		
		public function deposit()
		{
			
			return "Your balance after deposit is " . $this->balanceAfterdeposit;
			
		}
				
	}
	
	// objects
	$objAcc= new Accounts(5000, 400, 7000);
	echo $objAcc -> getBalance();
	
	echo "<br>";
	echo $objAcc -> withdraw();
	
	echo "<br>";
	echo $objAcc -> deposit();
	
	include("footer.php")

?>
