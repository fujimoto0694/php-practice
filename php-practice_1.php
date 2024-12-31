<?php
// Q1 変数と文字列
$name = '藤本';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$sum = 4*5;
var_dump($sum);
var_dump($sum / 2);

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$today = date('Y年m月d年 H時i分s秒');
echo '現在時刻は、' . $today . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device == 'windows') {
  echo '使用OSは、windowsです。';
} else {
  if ($device == 'mac') {
    echo '使用OSは、macです。';
  } else {
    echo 'どちらでもありません。';
  }
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age < 18) ? '未成年です。' : '成人です。';
echo $message;

// Q6 配列
$prefecture = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '群馬県', '茨城県'];
echo ' '. $prefecture[2] .'と'. $prefecture[3] .'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefecture = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];
foreach($prefecture as $value){
  echo $value . "\n";
}

// Q8 連想配列-2
$prefecture = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];
foreach ($prefecture as $key => $value) {
  if ($key =='埼玉県' && $value =='さいたま市') {
  echo $key . 'の県庁所在地は、' .$value . 'です。';
  } else continue;
}

// Q9 連想配列-3
$prefecture = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
  '愛知県' => '名古屋市',
  '大阪府' => '大阪市',
];
foreach ($prefecture as $key => $value) {
  if ($key == '東京都' || $key == '神奈川県' || $key == '千葉県' || $key == '埼玉県' || $key == '栃木県' || $key == '群馬県' || $key == '茨城県') {
    echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
  } else {
    echo $key . 'は関東地方ではありません。' . "\n";
  }
  }

// Q10 関数-1
function hello($name) {
  echo $name . 'さん、こんにちは。' . "\n";
}
hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price) {
  $taxInPrice = $price * 1.1;
  return $taxInPrice;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo '税抜き価格は' . $price . '円です。税込価格は' . $taxInPrice . '円です。';


// Q12 関数とif文
function distinguishNum($num) {
  if ($num % 2 === 1) {
    return $num . 'は奇数です。' . "\n";
  } else {
    return $num . 'は偶数です。' . "\n";
  }
}
$string = distinguishNum(11);
echo $string;
$string = distinguishNum(24);
echo $string;

// Q13 関数とswitch文


?>