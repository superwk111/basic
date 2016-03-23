<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use source\models\Taxonomy;
use source\libs\Resource;
use source\LuLu;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

?>

<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- iOS webapp icons -->
    <link rel="apple-touch-icon" href="touch-icon-iphone.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="touch-icon-retina.png" />

    <?php Resource::registerAdmin([
        '/css/reset.css',
        '/css/fluid.css',
        '/css/dandelion.theme.css',
        '/css/dandelion.css',
        '/css/demo.css',
       
    ]);?>


    <!-- jQuery JavaScript File -->
    <?php Resource::registerAdmin('/js/jquery-1.7.2.min.js');?>

    <!-- jQuery-UI JavaScript Files -->
    <?php Resource::registerAdmin([
        '/plugins/jui/js/jquery-ui-1.8.20.min.js',
        '/plugins/jui/js/jquery.ui.timepicker.min.js',
        '/plugins/jui/js/jquery.ui.touch-punch.min.js',
        '/plugins/jui/css/jquery.ui.all.css',
    ]);?>

    <!-- Plugin Files -->
    <?php Resource::registerAdmin([
        '/plugins/fileinput/jquery.fileinput.js',
        '/plugins/placeholder/jquery.placeholder.js',
        '/plugins/mousewheel/jquery.mousewheel.js',
        '/plugins/tinyscrollbar/jquery.tinyscrollbar.min.js',
        '/plugins/tipsy/jquery.tipsy-min.js',
        '/plugins/tipsy/tipsy.css',
    ]);?>

    <!-- Demo JavaScript Files -->
    <?php Resource::registerAdmin([
              '/js/demo/demo.ui.js',
            '/js/demo/demo.validation.js',
    ]);?>

    <!-- Core JavaScript Files -->
    <?php Resource::registerAdmin([
        '/js/core/dandelion.core.js',
        '/js/core/dandelion.customizer.js',
    ]);?>

    <title><?php echo $this->title ?> - <?php echo $this->getConfigValue('sys_site_name')?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>

   
        <?php if(LuLu::getViewParam('defaultLayout')===null):?>
        <div class="grid_4">
            <div class="da-panel">
                <div class="da-panel-header">
                    <div class="da-panel-title">
                        <img src="<?php echo Resource::getAdminUrl()?>/images/icons/black/16/pencil.png" alt="">
                        <?= $this->title ?>


                        <!--<?php if(($toolbars = LuLu::getViewParam('toolbars'))!==null):?>
                        <div>
                            <ul>
                                <?php foreach ($toolbars as $bar):?>
                                <li><?php echo $bar;?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                        <?php endif;?>-->
                    </div>
                </div>
                <?php if(($toolbars = LuLu::getViewParam('toolbars'))!==null):?>
                <div class="da-panel-toolbar top">
                    <ul>
                        <?php foreach ($toolbars as $bar):?>
                        <li><?php echo $bar;?></li>
                        <?php endforeach;?>
                    </ul>
                </div>
                <?php endif;?>

                <div class="da-panel-content">
                    <?php echo $content ?>
                </div>
            </div>
        </div>
        <?php else:?>
        <?php echo $content ?>
        <?php endif;?>

    <?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>
