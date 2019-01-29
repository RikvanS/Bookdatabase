<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entry Form</title>
</head>
<body>
<a href="index.php">Back home</a>

<form action="entryform.php" method="post">
<div>
    <label for="author">Author</label>
    <input type="text" id="author" name="author" required>
</div>

    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" required>
    </div>

    <div>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">
    </div>

    <div class="button">
        <button type="submit">Voer in</button>
    </div>
</form>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: denjo
 * Date: 29/01/2019
 * Time: 16:18
 */

// Hier komt het invoerveld