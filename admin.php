<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <title>Anime</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <head>
        <link rel="stylesheet" href="css/top_nav.css">
        <link rel="stylesheet" href="css/admin.css">
		<link rel="stylesheet" href="css/home_page.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <header>
		<?php include"headeradmin.php" ?>
    </header>
    
    <body>
            <table id="user">
            <tr>
              <th class="test">User</th>
              <th>Action <a href='adminAddUser.php'><button class="user">Add User</button></a></th>
            </tr>
        <?php
        $sql ="SELECT * FROM users";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
            echo
            "<tr>
              <td>$row[username]</td>
              <td>
                <a href='adminEditUser.php'>
                    <button type='edit'>Edit</button></a>
                    <button onclick='del()'>Delete</button>
              </td>
            </tr>";
            }   
        }
        ?>
            </table>

        <br>

        <table id="anime">
            <tr>
              <th class="test">Anime</th>
              <th>Action <a href='adminAddProduct.php'><button class="user">Add Anime</button></a></th>
            </tr>
        <?php
        $sql ="SELECT * FROM products";
        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
            echo
            "<tr>
              <td>$row[title]</td>
              <td>
                <a href='adminEditProduct.php'>
                    <button type='edit'>Edit</button></a>
                    <button onclick='del()'>Delete</button>
              </td>
            </tr>";
            }   
        }
        ?>
        </table>
    </body>
</html>