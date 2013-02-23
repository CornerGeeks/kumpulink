<?php
$url = urlencode($_GET["tag"]);
header('Location: ./?/tag/'.$url);
?>