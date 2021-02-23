<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<form action="02.php" method="POST" >
	<input type="number" name="num1">
	<input type="number" name="num2">
	<select name="cal">
	<option value="add">Add</option>
	<option value="min">Minus</option>
	<option value="mul">Multiple</option>
	</select>
	<button type="submit" class="btn btn-sm btn-light">Done</button>
	</form>
</body>
</html>