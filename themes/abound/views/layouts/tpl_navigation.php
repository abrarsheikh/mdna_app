<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="#"><?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/DF LOGO PNG.png', 'Home'); ?></a>

            <div class="nav-collapse">
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class' => 'pull-right nav'),
                    'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                    'itemCssClass' => 'item-test',
                    'encodeLabel' => false,
                    'items' => array(
                        array('label' => 'Dashboard', 'url' => array('/site/index'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Child Profiles', 'url' => array('/mdnaChild/index'), 'visible' => !Yii::app()->user->isGuest),
                        array('url' => array('site/login'), 'label' => Yii::app()->getModule('user')->t("Login"), 'visible' => Yii::app()->user->isGuest),
//                        array('url' => Yii::app()->getModule('user')->registrationUrl, 'label' => Yii::app()->getModule('user')->t("Register"), 'visible' => Yii::app()->user->isGuest),
                        array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => 'Account', 'visible' => !Yii::app()->user->isGuest),
                        array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', 'visible' => !Yii::app()->user->isGuest),
                    ),
                )); //Yii::app()->getModule('user')->loginUrl, 'label' => Yii::app()->getModule('user')->t("Login")
                ?>
            </div>
        </div>
    </div>
</div>

<div class="subnav navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">  
            <div class="style-switcher pull-left">
                <?php if (Yii::app()->user->hasFlash('success')): ?>

                    <div class="success">
                        <?php echo Yii::app()->user->getFlash('success'); ?>
                    </div>

                <?php endif; ?>
            </div>
            <form class="navbar-search pull-right" action="">

                <input type="text" class="search-query span2" placeholder="Search">

            </form>
        </div><!-- container -->
    </div><!-- navbar-inner -->
</div><!-- subnav -->