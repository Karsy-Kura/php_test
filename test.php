<?php
$name = htmlspecialchars($_POST["Name"], ENT_QUOTES);

echo $name . "さんご登録ありがとうございます.";