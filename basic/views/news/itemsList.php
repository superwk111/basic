<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/24
 * Time: 16:22
 */
//$newlist = [
//    [ 'title' => 'First World War', 'date' => '1914-07-28'],
//    ['title' => 'Second World War', 'date' => '1939-09-01'],
//    ['title' => 'First man on the moon', 'date' => '1969-07-20']
//];
//echo $this->context->renderPartial('_copyright');
?>
<?php if($year !=null) { ?>
<b>List for year <?php echo $year ?></b>
<?php } ?>
<?php if ($category !=null) { ?>
<b>List for category <?php echo $category ?></b>
<?php } ?>

<br /><br />
<!--<table >-->
<!--    <tr>-->
<!--        <th>Title</th>-->
<!--        <th>Date</th>-->
<!--    </tr>-->
<!--    --><?php //foreach($newsList as $item) { ?>
<!--    <tr>-->
<!--        <th><a href="--><?php //echo Yii::$app->urlManager->createUrl(['news/item-detail' ,
//                'id' => $item['id']]) ?><!--">--><?php //echo $item['title'] ?><!--</a></th>-->
<!--        <th>--><?php //echo yii::$app->formatter->asDatetime($item['date'], "php:d/m/Y"); ?><!--</th>-->
<!--    </tr>-->
<!--    --><?php //} ?>
<!--</table>-->

<table border="1">
    <tr>
        <th>Date</th>
        <th>Category</th>
        <th>Title</th>
    </tr>
<?php foreach($filteredData as $fd) { ?>
    <tr>
        <td><?php echo $fd['date'] ?></td>
        <td><?php echo $fd['category'] ?></td>
        <td><?php echo $fd['title'] ?></td>
    </tr>
<?php } ?>
</table>