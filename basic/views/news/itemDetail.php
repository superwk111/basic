<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/28
 * Time: 12:07
 */
// $item is from actionItemDetail?>
<?php echo $this->context->renderPartail('_copyright'); ?>
<h2>News Item Detail</h2>
<br/>
Title: <b><?php echo $item['title'] ?></b>
<br/>
Date: <b><?php echo $item['date'] ?></b>
