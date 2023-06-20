<?php
$item1 = 100;
$item2 = 200;
$item3 = 300;

echo getRemainingStocks (1, 20);
echo "\n";
echo getRemainingStocks (2, 30);
echo "\n";
echo getRemainingStocks (1, 10);
echo "\n";
echo getRemainingStocks (3, 30);
echo "\n";
echo getRemainingStocks (2, 40);
echo "\n";
echo getRemainingStocks (3, 50);
echo "\n";
echo getRemainingStocks (4, 50);
echo "\n";

function getRemainingStocks ($item, $qty){
  if ($item == 1){
    global $item1;
    $item1 = $item1 - $qty;
    $totalStocks = $item1;
    return "Item 1 ($qty) qty | Remaining Stocks = $totalStocks";
  }
  else if ($item == 2){
    global $item2;
    $item2 = $item2 - $qty;
    $totalStocks = $item2;
    return "Item 2 ($qty) qty | Remaining Stocks = $totalStocks";
  }
  else if ($item == 3){
    global $item3;
    $item3 = $item3 - $qty;
    $totalStocks = $item3;
    return "Item 3 ($qty) qty | Remaining Stocks = $totalStocks";
  }
  else {
    echo "Invalid Item Number";
  }
}


?>