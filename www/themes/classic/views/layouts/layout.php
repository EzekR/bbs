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
    if ($route == 'r=home/hot' || $route == 'r=home/bbs' || $route == 'r=home/login') 
 { ?><div style="display: none;"></div>
<?php } else {?>
<div class="tel-around">
    <div class="telback"></div>

    <div class="nice-tel">
        <a href="#no"><img src="img/template/nicetel.jpg" alt="tel" class="telpic"></a>
        <span>欢迎加入30元/月，加亮50元/月</span>
        <a href="#no">查看更多 +</a>
    </div>
</div>

<div class="teltags">
    <div class="teltag color1">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color2">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color3">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color4">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color5">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color6">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color7">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color5">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color1 nomargin">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>

    <div class="teltag color6">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color5">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color7">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color1">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color6">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color3">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color2">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color1">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color6 nomargin">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>

    <div class="teltag color4">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color1">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color5">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color2">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color5">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color6">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color1">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color4">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
    <div class="teltag color2 nomargin">
        <p>虚位以待</p>
        <p>021-51083516</p>
    </div>
</div>
<?php $this->widget("SideOutlinkWidget");?>
<footer>
    <div class="footer-in clearfix">
        <div class="footer-lt">
            <ul>
                <li>
                    <a href="#no">首页</a>
                </li>
                <li>
                    <a href="#no">特产优聚</a>
                </li>
                <li>
                    <a href="#no">城市教育</a>
                </li>
                <li>
                    <a href="#no">社区生活</a>
                </li>
                <li>
                    <a href="#no">房产集锦</a>
                </li>
                <li>
                    <a href="#no">信息分类</a>
                </li>
                <li>
                    <a href="#no">新闻资讯</a>
                </li>
                <li>
                    <a href="#no">特色餐饮</a>
                </li>
                <li>
                    <a href="#no">旅游天地</a>
                </li>
                <li>
                    <a href="#no">招商加盟</a>
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
            <p>400-129-1027</p>
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