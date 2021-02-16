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

        echo "<h2>Items you can afford</h2>";

    foreach($products as $key => $value){
      if($value <= $credit ){
        echo "<p>".$key."</p>"; 
      }
    }

    $amount=800;
    $taxRate=0.08255599;
    $addedTax= $amount*$taxRate;  //amount = 800, tax = .0825
    echo "<p> Tax added ".$addedTax."! Rounded tax is: ".round($addedTax, 2)."</p>";
      
      function tax_calc($amount,$tax){
      $calculate_tax = $amount*$tax;
      $amount = round($amount+$calculate_tax,3);
      return $amount; 	
    }
    
     echo tax_calc(750,0.223); 
     // When you refresh your page you should a value at the bottom of the screen.

    ?>
  </body>
</html>
