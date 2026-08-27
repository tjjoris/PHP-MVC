<h1>
welcome page
</h1>
<p>
Hello World <?=$data['name']?>
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
