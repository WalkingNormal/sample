<!DOCTYPE html>
<html>
<head>
	<title>注册确认</title>
</head>
<body>
<h1>感谢注册</h1>
<p>
	点击链接完成注册
	<a href="{{ route('confirm_email', $user->activation_token) }}">
		{{ route('confirm_email', $user->activation_token) }}
	</a>
</p>
<p>如果不是本人操作，请忽略</p>
</body>
</html>