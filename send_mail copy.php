<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = "andrew.ndr2045@gmail.com";
// $to = "sty.ryugaku@gmail.com";
$title = "Webサイトお問い合わせ";

$contact_check = $_POST['contact_check'];

switch ($contact_check) {
  case '1':
    $type = "お見積りのご依頼";
    break;
  case '2':
    $type = "サービスに関するお問い合わせ";
    brea;
  case '3':
    $type = "その他のお問い合わせ";
    break;
}

$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$text = $_POST['text'];

$contents = <<<EOF
お問い合わせタイプ： $type
お名前： $name
メールアドレス： $email
電話番号： $tel
お問い合わせ内容： $text
EOF;

if(!$_POST) {
  $contents = <<<EOF
  お問い合わせタイプ： test
  お名前： test
  メールアドレス： testl
  電話番号： test
  お問い合わせ内容： test
  EOF;
}

print_($contents);

$flg = wp_mail($to, $title, $contents);
?>
