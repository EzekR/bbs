<?php $this->beginContent('//layouts/layout'); ?>
<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>">Birdbbs</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo Yii::app()->createUrl("home/index") ?>">首页</a></li>
            </ul>
            <!-- <form class="navbar-form" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form> -->
        </div>
    </div>
</div>
<div class="container">
<?php echo $content; ?>
</div>
<?php
$this->endContent();