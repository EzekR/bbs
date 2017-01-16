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
    <link rel="stylesheet" href="<?php echo $staticUrl; ?>/public/css/csjy.css" />
    <script type="text/javascript" src="<?php echo $staticUrl; ?>/public/js/jquery.min.js"></script>
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
<div class="container" style="text-align: center;">
    <hr>
    <p>&copy; 技术支持，无可奉告</p>
</div>
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