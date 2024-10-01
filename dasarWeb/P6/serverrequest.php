<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // collect value of input field
    if (empty($_POST['fname'])) {
        echo "Name is empty";
    } else {
        echo $_POST['fname'];
    }
}
?>
</body>
</html>