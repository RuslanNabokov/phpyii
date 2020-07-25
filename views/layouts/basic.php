<?php

/* @var $this \yii\web\View */
/* @var $content string */


use app\assets\AppAsset;

AppAsset::register($this);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php $this->beginPage()  ?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Document</title>

    <?php $this->head()  ?>
</head>
<body>

<?php $this->beginBody()  ?>
<h1> Bas </h1>
<?=  $content   ?>
<?php $this->endBody()  ?>
</body>
</html>
<?php $this->endPage()  ?>