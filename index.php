!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php

    $name = "PHP Store";
    $credit = 1000;
    // Using two forward slashes we create comments in php.
    // Within the php tag, we can insert values into our HTML.
    echo "<h1>Welcome Tiagolas to ".$name."! Your first great PHP website in Ubuntu</h1>";

    echo "<h2>You have a $".$credit." in your virtual wallet</h2>";

        //$ArrayVariable['keyName'] = 'something'
        $products['Computer'] = 750;
        $products['Car'] = 15000;
        $products['iPhone'] = 900;
        $products['Printer'] = 150;

        foreach($products as $key => $value){
          echo "<p>The ".$key." costs ".$value."</p>";
        }
    
    	echo "<h2>Items you can afford pre tax</h2>";

	foreach($products as $key => $value){
	  if($value <= $credit ){
	  	echo "<p>".$key." without tax</p>"; 
	  }
	}

      $taxRate=0.0825;

      function tax_calc($amount,$tax){
	    	$addedTax = $amount*$tax;
	    	$amountWithTax = round($amount+$addedTax,2);
	    	return $amountWithTax;
    	}

	    foreach($products as $key => $value){
	    	$costWithTax = tax_calc($value,$taxRate);
		    echo "<p>The ".$key." costs ".$costWithTax." with tax</p>";
	    }

	    echo "<h2>Items you can afford post tax</h2>";

	    foreach($products as $key => $value){
	    	$costWithTax = tax_calc($value,$taxRate);
		    if($costWithTax <= $credit ){
		    	echo "<p>".$key."</p>"; 
		    }
	    }

    ?>
  </body>
</html>
