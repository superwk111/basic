<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/16
 * Time: 15:50
 */
use yii\helpers\Url;
use yii\helpers\Html;

?>

<b>Filter data by year</b>
<br />
<ul>
    <?php $currentYear = date('Y'); ?>
    <?php for($year =$currentYear; $year>($currentYear-5); $year--) { ?>
    <li><?php echo Html::a('List items by year' .$year, Url::to(['news/items-list', 'year' => $year ]))?></li>
    <?php }?>
</ul>

<br/>
<b>Filter data by category:</b>
<br/>
<ul>
    <?php $category = ['business','shopping']; ?>
    <?php foreach($category as $category) { ?>
    <li><?php echo Html::a ('List items by category ' .$category,
            Url::to(['news/items-list','category' => $category]) )?></li>
    <?php } ?>
</ul>

<br/><br/>