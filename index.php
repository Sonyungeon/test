<!DOCTYPE html>
<html lang = "KO">
    <head>
	    <meta charset = "utf-8">
	</head>
	
<?php
//http://localhost/index.php
    try {
	    $pdo = new PDO('mysql:host=localhost; dbname = world', 'root', '1234');
		$output = '데이터베이스 서버 접속 성공!';
	}
	catch (PDOException $e) {
	    $output = '데이터베이스 서버에 접속할 수 없습니다: '.$e;
	}
	
	include __DIR__.'/output.html';
?>
</html>