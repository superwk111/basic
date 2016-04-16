<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/16
 * Time: 15:50
 */
use yii\helpers\Url;
use yii\helpers\Heml;

?>

<b>Filter data by year</b>
<br />
<ul>
    <?php $currentYear = date('Y'); ?>
    <?php for($year =$currentYear; $year>($currentYear-5); $year--) { ?>
</ul>
