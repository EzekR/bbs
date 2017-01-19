<?php $this->beginContent('//layouts/layout'); ?>
<?php 
$route = $_SERVER['QUERY_STRING'];
if ($route == 'r=home/hot') {?>
<div style="display: none">
<?php } else {?>
<div style = "display: block">
<?php }?>
<div style="background-color: #f7f7f7;" class="head">
    <div class="container">
        <div class="top1">
            <ul>
                <li>欢迎来到中国新人网！</li>
                <?php if (yii::app()->user->isGuest) {?>
                <li>
                    <a style="text-decoration: none; color: orange;" href="<?php echo Yii::app()->createUrl("home/login"); ?>">请登录</a>
                </li>
                <li><a class="a1" href="<?php echo Yii::app()->createUrl("home/register"); ?>">注册</a></li>
                <?php } else {?>
                <li>
                    <a href="<?php echo yii::app()->createUrl("home/user");?>" style="text-align: none; color: orange; "><?php echo yii::app()->user->name; ?></a>
                </li>
                <li>
                    <a href="<?php echo yii::app()->createUrl("home/logout"); ?>">退出</a>
                </li>
                <?php }?>
            <li class="lii">
                        <a class="a1" href=""><img class="shouji" src="img/nr/shouji.jpg"/>&nbsp;&nbsp;手机客户端</a>
                    </li>
                </ul>
            </div>
            <div class="top2">
                <ul>
                    <a href=""><li><span>我的订单</span></li></a>
                    <a href=""><li>
                        <span>我的服务</span>
                        <img src="img/top/top_03.jpg" />
                        <span class="zxx"></span>
                    </li></a>
                    <a href=""><li><span>最近浏览</span>
                        <img src="img/top/top_03.jpg" />
                        <span class="zxx"></span></li></a>
                    <a href=""><li><span id="">
                        我是商家
                    </span>
                        <img src="img/top/top_03.jpg" />
                        <span class="zxx"></span></li></a>
                    <a href=""><li><span>快捷导航</span>
                        <img src="img/top/top_03.jpg" /></li></a>
                </ul>
            </div>
    </div>
</div>
<div class="logo">
    <div class="container">
        <img src="img/top/top_07.jpg" />
        <div class="dss3"><span>7X24客服电话</span><br /><span>
            400-400-400
        </span></div>
        <div class="dss2">
            <img src="img/top/tel.png" />
        </div>
        <div class="dss">
            <input class="sousuo" type="text" name="" id="" value="" placeholder="附近论坛" />
            <div class="anniu">搜 索</div>
            <ul>
                <a href=""><li class="li1">论坛<div class="zxx"></li></a>
                <a href=""><li class="li1">培训<div class="zxx"></li></a>
                <a href=""><li class="li1">学校<div class="zxx"></li></a>
                <a href=""><li class="li1">中学<div class="zxx"></li></a>
                <a href=""><li class="li1">机构<div class="zxx"></li></a>
            </ul>
        </div>
    </div>
</div>
<div class="nav-dh">
    <div class="container">
        <ul>
            <a href="#no"><li class="li2">全部商品分类</li></a>
            <a href="#"><li class="li3">首页</li></a>
            <a href="<?php echo yii::app()->createUrl("home/index");?>"><li class="li4">教育论坛</li></a>
            <a href="http://139.196.42.39/shuimin-education"><li class="li3">学校</li></a>
            <a href="px.html"><li class="li3">培训</li></a>
        </ul>
    </div>
</div>
</div>
<!-- <div class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>/"><?php echo CHtml::encode(Util::config('site_title')); ?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo Yii::app()->createUrl("home/index") ?>">教育论坛</a></li>
                <?php $this->widget('NodeNavWidget'); ?>
            </ul>
            <ul class="nav navbar-nav pull-right">
                <?php if (Yii::app()->user->isGuest): ?>
                <li><a href="<?php echo Yii::app()->createUrl("home/login"); ?>">登录</a></li>
                <li><a href="<?php echo Yii::app()->createUrl("home/register"); ?>">注册</a></li>
                <?php else: ?>
                <li>
                    <a href="<?php echo Yii::app()->createUrl("home/user"); ?>"><?php echo CHtml::encode(Yii::app()->user->name); ?></a>
                </li>
                <li><a href="<?php echo Yii::app()->createUrl("home/logout") ?>">退出</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div> -->
<?php echo $content; ?>
<?php
$this->endContent();