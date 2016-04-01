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
echo $this->context->renderPartial('_copyright');
?>

<table>
    <tr>
        <th>Title</th>
        <th>Date</th>
    </tr>
    <?php foreach($newsList as $item) { ?>
    <tr>
        <th><a href="<?php echo Yii::$app->urlManager->createUrl(['news/item-detail' ,
                'id' => $item['id']]) ?>"><?php echo $item['title'] ?></a></th>
        <th><?php echo yii::$app->formatter->asDatetime($item['date'], "php:d/m/Y"); ?></th>
    </tr>
    <?php } ?>
</table>
