<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<!-- ここにプログラムを記述します -->
<?php
date_default_timezone_set('Asia/Tokyo');

// if (date('G') < 9) {
//     print('※ 現在受付時間外です'); 
// } else {
//     print ('ようこそ');
// }

// 条件式の省略
$x = ''; // 文字が入っている=true、文字が入っていない=false
if ($x) {
    print('xには文字が入っています');
}


$x = 1; // 0=false, 0以外=true
if ($x) {
    print('xは0ではありません');
}


$x = 1; // !は否定 0=true, 0以外=false
if (!$x) {
    print('xは0です');
}
?>
</pre>
</main>
</body>    
</html>