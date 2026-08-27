<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Page</title>
</head>
<body>
    <!-- Your HTML content -->
</html>
<h1>
welcome page
</h1>
<p>
Hello World <?= json_encode($data['names'])?>
<form action='?url=home/store' method='post'>
<label for='user-name'>
	name
</label>
<input type='text' id='user-name' name='user-name'>
<button type='submit'>
submit
</button>
</form >
</p>
<script type='module'>
    import { AddNamesDomFromArray } from "/php/mvc/public/javascript/addNamesDomFromArray.js";
    AddNamesDomFromArray();
</script>
</body>

