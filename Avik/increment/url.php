<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL information</title>
</head>
<body>
    <form action="url.php" method="post">
    <input type="text" name="web" placeholder="Enter a link">
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $url = $_POST['web'];
        $url_info = parse_url($url);
        print_r($url_info);
    }
    ?>

</body>
</html>