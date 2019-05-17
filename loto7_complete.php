<?php
// 金運の乱数をつくる
$m = rand(1, 5);

// 1から4の乱数をつくる
$d = rand(1, 4);
// 乱数から方位を決める
if ($d == 1) {
  $lucky = '北';
} else if ($d == 2) {
  $lucky = '南';
} else if ($d == 3) {
  $lucky = '東';
} else if ($d == 4) {
  $lucky = '西';
}

// 1から37の変数をつくる
$a = range(1, 37);

// シャッフル
shuffle($a);

// 7個取り出す
$loto7 = array_slice($a, 0, 7);

// 並び替え
sort($loto7);
?>
<!DOCTYPE html>
<html lang="ja-JP">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="common.css">
  <title>WHIZZ LOTO7抽選番号予想！</title>
</head>
<body>
<div id="container">
    <!-- 金運 -->
    <p id="fortune">
    <?php
    // 乱数の回数だけ繰り返す
    for ($i = 0; $i < $m; $i++) {
      echo '★';
    }
    //echo $m;
    ?>
    </p>
    <!-- ラッキー方位 -->
    <p id="lucky"><?php echo $lucky; ?></p>
    <p id="title_plate">
      <img src="./img/loto7_title.png">
    </p>
    <!-- 7つの数字 -->
    <p id="lottery_number_area_7">
    <?php
    // 7個の値を繰り返す
    foreach ($loto7 as $no) {
      echo '<span>';
      echo $no;
      echo '</span>';
    }
    ?>
    </p>
  </div>
</body>
</html>