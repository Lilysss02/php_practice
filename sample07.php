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
// time は現在のタイムスタンプ
// 24時間分の秒数をかけることで翌日の日付を割り出せる
// print (date('n/j(D)', time() + 60 * 60 * 24));

for ($i=1; $i<=365; $i++) {
    // strtotime は string to timestamp のこと
    $date = strtotime('+' . $i . 'day');
    print (date('n/j(D)', $date));
    print "\n";
}

?>
</pre>
</main>
</body>    
</html>