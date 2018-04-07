<html>
<head>
</head>
<body>
<p>The value of the 'usr' index of your $_GET variable is :<?php if (isset($_GET['user'])) { echo ' ' . $_GET['user']; } ?></p>
<p>Your $_GET variable is :<?php if (!empty($_GET)) { var_dump($_GET); } ?></p>
</body>
</html>
