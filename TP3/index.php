<?php

    $value = 'style1';
    $value = $_GET['css'];
    setcookie("stylecookie", $value);
    $style=$_COOKIE['stylecookie'];
    echo $style;
    
echo '
<html>
<head><title>Test Cookie</title>
<link rel="stylesheet" href="'.$style.'.css" type="text/css" media="screen" title="default" charset="utf-8">
</head>
<body>
    <h1>Test Cookie</h1>
</body>
</html>';

?>


