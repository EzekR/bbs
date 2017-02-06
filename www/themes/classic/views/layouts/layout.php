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
<footer>
    <div class="footer-in clearfix">
        <div class="footer-lt">
            <ul>
                <li>
                    <a href="#no">首页</a>
                </li>
                <li>
                    <a href="#no">隐私保护</a>
                </li>
                <li>
                    <a href="#no">联系我们</a>
                </li>
                <li>
                    <a href="#no">免责条款</a>
                </li>
                <li>
                    <a href="#no">公司简介</a>
                </li>
                <li>
                    <a href="#no">商家驻入</a>
                </li>
                <li>
                    <a href="#no">意见反馈</a>
                </li>
            </ul>

            <div class="footer-tags">
                <a href="#no"><img src="img/template/1003.jpg" alt="footer tags"></a>
                <a href="#no"><img src="img/template/1004.jpg" alt="footer tags"></a>
                <a href="#no"><img src="img/template/1005.jpg" alt="footer tags"></a>
                <a href="#no"><img src="img/template/1006.jpg" alt="footer tags"></a>
                <a href="#no"><img src="img/template/1007.jpg" alt="footer tags"></a>
                <a href="#no"><img src="img/template/1008.jpg" alt="footer tags"></a>
            </div>
        </div>

        <div class="footer-2d">
            <img src="img/template/2d.jpg" alt="two-dimension code">
        </div>

        <div class="dailtel">
            <p>400-029-1027</p>
            <p>周一至周日：9:00 - 17:00</p>
            <p>（仅收市话费）</p>
            <a href="#no">24小时在线客服</a>
        </div>
    </div>
</footer>
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