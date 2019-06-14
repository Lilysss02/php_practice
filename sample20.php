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
    <!-- 半角数字に直して、数字であるかをチェックする -->
    <?php
    $age = '２０';
    
    // mb マルチバイト（全角を扱う時に使われる）
    // 全角の数字を半角に変換する
    $age = mb_convert_kana($age, 'n', 'UTF-8');
    
    // is_numeric 数字かどうかを判断
    if (is_numeric($age)) {
        print($age . '歳');
    } else {
        print('※ 年齢が数字ではありません');
    }
    ?>
</pre>
</main>
</body>    
</html>