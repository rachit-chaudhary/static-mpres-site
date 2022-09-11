<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(!empty($_POST["send"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $product = $_POST["product"];
        $quantity = $_POST["quantity"];
        $toEmail = "mailracit@gmail.com";

        $mailHeaders = "Name: " . $name .
        "\r\n Email: " . $email .
        "\r\n Product: " . $product .
        "\r\n Quantity: " . $quantity . "\r\n";

        if(mail($toEmail, $name, $mailHeaders)) {
            $message = "Information received successfully.";
        }
    }
?>

<form action="" method="post" autocomplete="off">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <label for="product">Product:</label>
    <select name="product">
        <option value="mini-hair-straightener">Mini Hair Straightener</option>
        <option value="mini-hair-curler">Mini Hair Curler</option>
        <option value="mini-hair dryer">Mini Hair Dryer</option>
    </select>
    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" id="quantity" required>
    <input type="submit" name="send" value="send">
    <?php
        if(!empty($message)) { ?>
            <div class="success">
                <strong><?php echo $message; ?></strong>
            </div>
    <?php } ?>
</form>
</body>
</html>