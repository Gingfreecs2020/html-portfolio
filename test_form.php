<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="Jeyson Aying">
        <span class="error">* </span>
        <br><br>
        E-mail: <input type="text" name="email" value="1231231">
        <span class="error">* Invalid email format</span>
        <br><br>
        Website: <input type="text" name="website" value="https://blendit.eu/">
        <span class="error"></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40">dadasdasdasd</textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" checked="" value="male">Male
        <input type="radio" name="gender" value="other">Other  
        <span class="error">* </span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>
</body>
</html>