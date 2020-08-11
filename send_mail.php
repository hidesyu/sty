
<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");

$to = "andrew.ndr2045@gmail.com";
// $to = "andrew.ndr2045@gmail.com";
$title = "Webサイトお問い合わせ";

$content = stripslashes($_POST["body"]);
$content = json_decode($content, true);

echo "test desu\n";
print_r($content);

$type = $content[0]["value"];
$name = $content[1]["value"];
$furigana = $content[2]["value"];
$mail = $content[3]["value"];
$tel = $content[4]["value"];
$content = $content[5]["value"];

$contents = <<<EOF
タイプ：$type
お名前：$name
ふりがな：$furigana
メールアドレス：$mail
電話番号：$tel
お問い合わせ内容：$content
EOF;

$flg = wp_mail($to, $title, $contents);
