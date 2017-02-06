<div class="nr">
    <div class="container">
        <div style="margin-bottom: 20px; margin-top: 20px">
        <a href="<?php echo Yii::app()->createUrl("home/inde");?>"><span class="sps1">首页</span></a>>
        <a href="<?php echo Yii::app()->createUrl("home/index", array("Post[nodeId]"=>$_GET['node'])); ?>"><span class="sps1"><?php echo $node_name->name;?></span></a>>
                <a href="fty.html"><span class="sps2">
                    发帖页
                </span></a>            
    </div>
    </div>
    <div class="container">
        <div>
            <span class="nr-sp"><?php echo $node_name->name; ?></span>
            <div class="nr-div">
                <p>
                    <a href="">9</a>
                </p>
                <p>今日</p>
            </div>
            <div class="zx"></div>
            <div class="nr-div1">
                <p>
                    <a href="">4641</a>
                </p>
                <p>主题</p>
            </div>
            <div class="nr-div2">版主：admin</div>
        </div>
    </div>
    <div class="container">
        <div class="nr-div3">交流各地教育，加强学生学习</div>
    </div>
    <div class="container" style="height: 800px">
        <div class="form-frame">
            <?php if ($model->hasErrors()): ?>
            <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <?php foreach ($model->getErrors() as $v): ?>
                <?php foreach ($v as $value): ?>
                    <?php echo CHtml::encode($value); ?><br>
                <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
             <div class="post-title">发表帖子</div>
            <?php $form = $this->beginWidget("CActiveForm", array(
                "id" => 'post-form',
                "htmlOptions" => array(
                'role' => "form",
                ),
            )); ?>
            <?php if(isset($_GET['node'])) {?>
                <input type="hidden" name="Post[nodeId]" value="<?php echo $_GET['node']; ?>">
                <?php } else {?>
                <input type="hidden" name="Post[nodeId]" value="1">
            <?php }?>
            <div style="margin-bottom: 15px; margin-top: 15px">
                    <?php echo $form->textField($model, "title", array("class"=>'form-title', "placeholder"=>"标题严禁使用【】等异形符号，违者删帖")); ?>
            </div>
            <div class="wenben">
                <?php echo $form->textArea($model, "content", array("class"=>'form-control', 'style'=>'min-height:480px')); ?>
            </div>
            <div>
                <input type="submit" class="fabu" value="发布">
                <a class="btn btn-default" href="<?php $this->createUrl("index"); ?>">取消</a>
            </div>
            <?php $this->endWidget(); ?>
        </div>
        <div class="nr-bk2">
        <!--<div class="nr-bk1-2-1-1">
            <div>
                <img src="img/bi.jpg" />
                <span><a href="">发新帖</a></span>
            </div>
        </div>-->
        <div class="nr-bk1-2-1-2">
            <div class="nr-bk1-2-1-2-2">
                <div class="nr-bk1-2-1-2-1">热门论坛</div>
                <div style="margin-top: 15px; margin-bottom: 15px;">
                    <a href=""><img style="width: 100%; height: 100%;" src="img/tu1.jpg" /></a>
                </div>
                <div style="height: 30px; border-bottom: 1px dashed darkgray;">
                    <span class="ggz"><a href="">插画，漫画</a></span>
                    <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>
                </div>
                <div style="margin-top: 15px; margin-bottom: 15px;">
                    <a href=""><img style="width: 100%; height: 100%;" src="img/tu2.jpg" /></a>
                </div>
                <div style="height: 30px; border-bottom: 1px dashed darkgray;">
                    <span class="ggz"><a href="">美术吧</a></span>
                    <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>

                </div>
                <div style="margin-top: 15px; margin-bottom: 15px;">
                    <a href=""><img style="width: 100%; height: 100%;" src="img/tu3.jpg" /></a>
                </div>
                <div style="height: 30px;">
                    <span class="ggz"><a href="">多肉植物吧</a></span>
                    <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>

                </div>
            </div>
        </div>
    </div>
    </div>
</div>
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
<?php $this->widget("SideOutlinkWidget"); ?>
<script type="text/javascript">
var REQ_CSRF_TOKEN = <?php echo json_encode(array(
    Yii::app()->request->csrfTokenName => Yii::app()->request->csrfToken,
)); ?>
</script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/public/ke/kindeditor-all-min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/public/js/editor.js"></script>