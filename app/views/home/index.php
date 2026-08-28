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
<form action='?url=home/store' method='post'>
<label for='user-name'>
	Add a name:
</label>
<input type='text' id='user-name' name='user-name'>
<button type='submit'>
submit
</button>
</form >
<div id="names" >
</div>
</p>
<script type='module'>
    import { AddNamesDomFromArray } from "./javascript/addNamesDomFromArray.js";
AddNamesDomFromArray(<?= json_encode($data['names'])?>);
</script>
</body>

