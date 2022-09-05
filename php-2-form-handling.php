<form action="welcome.php" method="get">
    First name: <input type="text" name="fname">
</form>

<html>
<body>
    welcome <?php echo $_GET["name"]; ?>
</body>
</html>
