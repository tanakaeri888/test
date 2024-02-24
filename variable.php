<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP基礎編</title>
</head>
<body>
	<p>
		<?php
			// 変数に値を代入する
			$user_name = '侍太郎';
			// 変数の中身を出力する
			echo $user_name;

			echo '<br>';
 
			// 変数に値を再代入する
			$user_name = '花子';
			
			echo $user_name;
			
			echo '<br>';
 
			// 変数と数値の計算
			$number = 3;
			echo $number - 1.2;

			echo '<br>';
 
			// 変数と文字列の連結
			$user_name = '侍二郎';
			echo "私は" . $user_name . 'です';

			// 文字列の中で変数の中身を表示する（変数展開）
			$my_name = '侍一郎';
			echo "私の名前は{$my_name}です。";
			// この書き方は必ずダブルクオーテーション！
		?>
	</p>
	
</body>
</html>