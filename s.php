<?php
echo(strval(microtime(true)*10000));exit;
		$servername = "localhost";
$username = "cs_i_js_cn";
$password = "6zXDb54NKDAa8dGs";
$dbname = "cs_i_js_cn";
$time = time();
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
	if(isset($_FILES["file1"])){
		$arr1 = $_FILES["file1"];
	$aaa1 = $_POST['url1'];
	$filename1 = "demo/" .$arr1["name"];
	move_uploaded_file($arr1["tmp_name"],$filename1);
	$sql = "UPDATE ysk_config SET value = $filename1 WHERE name = tupian1";
mysqli_query($conn, $sql);
$sql = "UPDATE ysk_config SET value = $aaa1  WHERE name = lianjie1";
mysqli_query($conn, $sql);
	echo "上传成功";
	echo '<script>alert("修改成功");</script>';
	
	}
	
	if(isset($_FILES["file2"])){
		$arr2 = $_FILES["file2"];
	$aaa2 = $_POST['url2'];
	
	$filename2 = "demo/" .$arr2["name"];
	move_uploaded_file($arr2["tmp_name"],$filename2);
	
	$sql = "UPDATE ysk_config SET value = $filename1 WHERE name = tupian1";
mysqli_query($conn, $sql);
$sql = "UPDATE ysk_config SET value = $aaa1  WHERE name = lianjie1";
mysqli_query($conn, $sql);
	echo "上传成功";
	echo '<script>alert("修改成功");</script>';
	}
	if(isset($_FILES["file3"])){
		$arr3 = $_FILES["file3"];
	$aaa3 = $_POST['url3'];
	$filename3 = "demo/" .$arr3["name"];
	move_uploaded_file($arr3["tmp_name"],$filename3);

	$sql = "UPDATE ysk_config SET value = $filename1 WHERE name = tupian1";
mysqli_query($conn, $sql);
$sql = "UPDATE ysk_config SET value = $aaa1  WHERE name = lianjie1";
mysqli_query($conn, $sql);
	echo "上传成功";
	echo '<script>alert("修改成功");</script>';
	}





?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上传</title>
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
