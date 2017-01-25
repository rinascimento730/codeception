<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>新規ユーザー作成</title>
</head>
<body>
	<form action="/user/create/" method="post">
		<input type="text" name="username" id="username">
		<input type="password" name="password" id="password">
		<input type="email" name="email" id="email">
		<input type="submit" name="regist" id="regist">
	</form>
</body>
</html>