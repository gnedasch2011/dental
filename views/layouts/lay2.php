<?php
/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use app\assets\Land1Asset;
Land1Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="MediPress - Health & Medical HTML Template"/>
    <meta name="keywords" content="keyword1,keyword2,keyword3,keyword4,keyword5"/>
    <meta name="author" content="ThemeMascot"/>
    <!-- Page Title -->
    <title>DentalPro | Dental Clinic, Dentist & Dental Care HTML5 Template</title>

    <!-- Favicon and Touch Icons -->
    <link href="/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

</head>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
