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
		<?php include"header.php" ?>
    </header>
    
    <body>
        <table id="user">
            <tr>
              <th class="test">User</th>
              <th>Action <button class="user">Add User</button></th>
            </tr>
            <tr>
              <td>Alfreds Futterkiste</td>
              <td>
                <a href="Admin_Edit_Account.html">
                    <button type="edit">Edit</button></a>
                    <button onclick="del()">Delete</button>
              </td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>
                    <a href="Admin_Edit_Account.html">
                        <button type="edit">Edit</button></a>
                    <button onclick="del()">Delete</button>
                </td>
            </tr>
        </table>

        <br>

        <table id="anime">
            <tr>
              <th class="test">Anime</th>
              <th>Action <button class="user">Add Anime</button></th>
            </tr>
            <tr>
                <td>huh</td>
                <td>
                    <a href="Admin_Edit_Account.html">
                        <button type="edit">Edit</button></a>
                    <button onclick="del()">Delete</button>
                </td>
            </tr>
            <tr>
                <td>Berglunds snabbköp</td>
                <td>
                    <a href="Admin_Edit_Account.html">
                        <button type="edit">Edit</button></a>
                    <button onclick="del()">Delete</button>
                </td>
            </tr>
        </table>
    </body>
</html>