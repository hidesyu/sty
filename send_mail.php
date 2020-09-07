<?php
/*
Template Name: SEND-MAIL
*/
?>
<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

// $to = "andrew.ndr2045@gmail.com";
$to = "sty.ryugaku@gmail.com";
$title = "Webサイトお問い合わせ";

$contact_types = $_POST['contact_types'];

$contact_reason = "";

foreach($contact_types as $contact_type) {

  switch ($contact_type) {
    case '1':
      $contact_reason .= "お見積りのご依頼";
      break;
    case '2':
      $contact_reason .= "サービスに関するお問い合わせ";
      brea;
    case '3':
      $contact_reason .= "その他のお問い合わせ";
      break;
  }

  $contact_reason .= ",";

}

$full_name = $_POST['full_name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$text = $_POST['text'];

$contents = <<<EOF
お問い合わせタイプ： $contact_reason
お名前： $full_name
メールアドレス： $email
電話番号： $tel
お問い合わせ内容： $text
EOF;

$flg = wp_mail($to, $title, $contents);

header('Location: /contact-comp/');
exit;
