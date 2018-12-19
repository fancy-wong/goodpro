<?php
echo(strval(microtime(true)*10000));exit;
		

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sss</title>
</head>
<body>
<h1>轮播图设置</h1>
<form action="s.php" method="post" enctype="multipart/form-data">
图片1：<input type="file" name="file1" />
<input type="text" name="url1" value="" />
<input type="submit" value="提交" />
</form>
<form action="s.php" method="post" enctype="multipart/form-data">
图片2：<input type="file" name="file2" />
<input type="text" name="url2" value="" />
<input type="submit" value="提交" />
</form>
<form action="s.php" method="post" enctype="multipart/form-data">
图片3：<input type="file" name="file3" />
<input type="text" name="url3" value="" />
<input type="submit" value="提交" />
</form>
</body>
</html>
