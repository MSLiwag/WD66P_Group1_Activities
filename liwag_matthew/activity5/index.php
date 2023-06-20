<?php
	 $item1 = 100;
	 $item2 = 200;
	 $item3 = 300;
	echo totalStocksPerItem (1, 5);
	echo "\n";
	echo totalStocksPerItem (2, 25);
	echo "\n";
	echo totalStocksPerItem (3, 50);
	echo "\n";
	echo totalStocksPerItem (2, 0);
	echo "\n";
	echo totalStocksPerItem ("mali", "mali");

	function totalStocksPerItem ($itemNumber, $quantityTaken){
	 global $item1, $item2, $item3;
	  if ($itemNumber == 1)
	  {
	    $item1 -= $quantityTaken;
	     return "Item $itemNumber (-$quantityTaken) | Stocks Remaining: $item1";
	  }
	  else if ($itemNumber == 2)
	  {
	   $item2 -= $quantityTaken;
	    return "Item $itemNumber (-$quantityTaken) | Stocks Remaining: $item2";
	  }
	  else if ($itemNumber == 3)
	  {
	   $item3 -= $quantityTaken;
	    return "Item $itemNumber (-$quantityTaken) | Stocks Remaining: $item3";
	  }
	  else
	  {
	    echo "Invalid Input. Please Try Again";
	  }
	 }	
?>