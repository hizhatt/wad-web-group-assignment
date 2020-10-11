<!DOCTYPE html>
<html>
    <title>Anime</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
        <link rel="stylesheet" href="css/top_nav.css">
		<link rel="stylesheet" href="css/home_page.css">
        <link rel="stylesheet" href="css/cart.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <header>
		<?php include"header.php" ?>
    </header>
    
    <body>
        <table id="user">
            <tr>
              <th class="test">Number of Item</th>
              <th class="title">Title</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>Item 1</td>
              <td>Detective Conan</td>
              <td>RM 150</td>
            </tr>
            <tr>
                <td>Item 2</td>
                <td>Detective Conan</td>
                <td>RM 150</td>
            </tr>
            <tr>
                <td>Item 3</td>
                <td>Detective Conan</td>
                <td>RM 150</td>
            </tr>
        </table>
        <br>
        <table id="total">
            <tr>
                <th class="subtotal">Total</th>
                <td>RM 450</td>
            </tr>
        </table>

        <br>
        
        <a href="Checkout.html">
        <button class="button">Proceed to Checkout</button></a>

        

    </body>
</html>