<?php 
$staticUrl = Yii::app()->request->baseUrl; 
$version = "?20140114";
?>
<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="<?php echo CHtml::encode(Util::config('site_keywords')); ?>" />
    <meta name="description" content="<?php echo CHtml::encode(Util::config('site_description')); ?>" />
    <title> <?php echo CHtml::encode(Yii::app()->name . ' - ' . $this->pageTitle); ?> </title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/style.css" /> -->
    <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/jylt.css" />
    <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/template.css" />
    <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/fty.css" />
    <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/jyltxqy.css" />
    <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/paging.css" />
    <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/csjy.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $staticUrl; ?>/public/css/index.css" />
    <script type="text/javascript" src="<?php echo $staticUrl; ?>/public/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $staticUrl; ?>/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $staticUrl; ?>/public/js/luntan.js"></script>
    <script type="text/javascript">
    var IMAGE_UPLOAD_URL = <?php echo json_encode($this->createUrl("upload/index")); ?>;
    </script>
    <!--[if lt IE 9]>
    <script type="text/javascript">
        window.location.href = "<?php echo Yii::app()->createUrl("home/browser"); ?>";
    </script>
    <![endif]-->
    <script type="text/javascript">
        function addClass(x){
            x.className = "nr-bk1-2 row-shadow";
        }

        function removeClass(x){
            x.className = "nr-bk1-2";
        }
    </script>
</head>
<body>
<div class="min">
<?php echo $content; ?>
<?php $route = $_SERVER['QUERY_STRING'];
    if ($route == 'r=home/hot' || $route == 'r=home/bbs') 
 { ?><div style="display: none;"></div>
<?php } else {?>
<div class="footer">
<div class="container">
    <div class="footer-left">
        <ul class="footer-list font12">
            <li>
                <a href="">首页</a>
            </li>
            <li>
                <a href="">隐私保护</a>
            </li>
            <li>
                <a href="">联系我们</a>
            </li>
            <li>
                <a href="">免费条款</a>
            </li>
            <li>
                <a href="">公司简介</a>
            </li>
            <li>
                <a href="">商家入驻</a>
            </li>
            <li>
                <a href="">意见反馈</a>
            </li>
        </ul>
        <div class="com">
            <img src="img/com-1.jpg" />
            <img src="img/com-2.jpg" />
            <img src="img/com-3.jpg" />
            <img src="img/com-4.jpg" />
            <img src="img/com-5.jpg" />
            <img src="img/com-6.png" />
        </div>
    </div>
    <div class="footer-right">
        <div class="fr-left">
            <p class="font24">
                400-029-1027
            </p>
            <p class="font12">
                周一至周日：9:00-17:00<br /> （仅收市话费）
            </p>
            <div class="kefu">
                24小时在线客服
            </div>
        </div>
        <div class="fr-right">
            <img src="img/ewm.png" />
        </div>
    </div>

</div>
</div>
                    <?php }?>
<!-- <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-15506010-4', 'buxiangshuo.cn');
ga('send', 'pageview');
</script> -->
</div>
</body>
</html>