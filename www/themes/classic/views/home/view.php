<?php 
$userId = (int) Yii::app()->user->id;
$p = new CHtmlPurifier();
$p->options = array('URI.AllowedSchemes'=>array(
    'http' => true,
    'https' => true,
));
?>
<div class="huifu">
    <div style="position: relative;">
        <p><span>参与/回复主题</span> <img class="gb" src="img/叉叉.jpg" /></p>
        <?php if (!Yii::app()->user->isGuest): ?>
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'comment-form',
            "htmlOptions" => array(
            'role' => "form",
            ),
        )); ?>
        <?php echo $form->hiddenField($comment, 'postId', array('value' => $model->id)); ?>
                <?php echo $form->textArea($comment, 'content', array('class'=>'form-control', 'style'=>'height:100px;')); ?>
                <?php echo $form->error($comment, 'content', array('class'=>'help-block')); ?>
            <div style="padding: 10px 15px;" id="submit-btn">
                <input type="submit" class="btn btn-primary" value="回复">
            </div>
        </div>
        <?php $this->endWidget(); ?>
        <?php else: ?>
        <div class="login-reply">
        <span style="font-size: 13px;">您需要登陆后才可以回帖</span>
        <a href="<?php echo Yii::app()->createUrl("home/login");?>">登陆</a>
        <div class="zx3 "></div>
        <a href=" ">回帖</a>
        </div>
        <?php endif;?>
    </div>
</div>
<div class="nr">
<!--内容顶部-->
<div>
<div class="container">
    <div style="margin-top: 20px; margin-bottom: 20px">
            <a href="<?php echo Yii::app()->createUrl("home/index"); ?>"><span class="sps1">首页</span></a>>
        <a href="<?php echo Yii::app()->createUrl("home/index", array("Post[nodeId]"=>$node->id));?>"><span class="sps1">
            <?php echo $node->name; ?>
        </span></a>>
        <a href="jyltxqy.html"><span class="sps2"><?php echo $node->name; ?>详情页</span></a>
    </div>
</div>
<div class="container">
    <div>
        <span class="nr-sp">上海小学生涂色</span>
        <div class="nr-div">
            <p><?php echo $site['post_today']; ?></p>
            <p>今日</p>
        </div>
        <div class="zx"></div>
        <div class="nr-div1">
            <p><?php echo $site['post'];?></p>
            <p>主题</p>
        </div>
        <div class="nr-div2">版主：admin</div>
    </div>
</div>
<div class="container">
    <div class="nr-div3">交流各地教育，加强学生学习</div>
</div>
<div class="container">
    <div style="margin-top: 15px; margin-bottom: 10px;">
        <a style="" href=""><img src="img/hg.jpg" /></a>
    </div>
</div>
<div class="container">
    <div style="margin-top: 15px; margin-bottom: 10px;">
        <a style="" href=""><img src="img/hf.jpg" /></a>
    </div>
</div>
<div class="container">
    <!--主版块左-->
    <div class="nr-bk1">
        <div class="nr-bbk">
            <a href=""><img src="img/gg1.jpg" /></a>
        </div>
        <div class="pugnub">
            <div class="nr-bk1-2-1-1">
                <div id="cli">
                    <img src="img/hftb.png" />
                    <span class="cli">回复</span>
                </div>
            </div>
        </div>
        <div class="tznr">
            <div class="tznr-1">
                <div><img src="avatar_img/<?php echo $model->user->avatar; ?>" />
                    <p class="czname">
                        <a href=""><?php echo CHtml::encode($model->user->username); ?></a>
                    </p>
                </div>
            </div>
            <div class="tznr-2">
                <div class="tznr-2-1">
                    <div class="tznr-2-2"><span><?php echo $model->title; ?></span>
                        <a href="">复制链接</a>
                    </div>
                    <div class="tznr-2-3">
                        <ul>
                            <li style="margin-left: 0;">查看：<span><?php echo $model->hits; ?></span>
                                <div class="zx2"></div>
                            </li>
                            <li>回复：<span><?php echo $model->reply; ?></span>
                                <div class="zx2"></div>
                            </li>
                            <li>发表于 <?php echo Util::timeElapsedStr($model->createTime); ?>
                                <div class="zx2"></div>
                            </li>
                            <li>只看该作者
                                <div class="zx2"></div>
                            </li>
                            <li>只看大图
                                <div class="zx2"></div>
                            </li>
                            <li>倒序浏览</li>
                        </ul>
                        <div class="louzhu">
                            <a href="">楼主</a>
                        </div>
                    </div>
                    <div class="hfnr" style="margin-top: 50px;">
                        <?php echo $p->purify($model->content);?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($model->comments): ?>
            <?php foreach ($model->comments as $k => $v): ?>
                <div class="tznr1">
                    <div class="tznr-3">
                        <div><img src="avatar_img/<?php echo $v->user->avatar; ?>" />
                            <p class="czname cz">
                                <a href=""><?php echo CHtml::encode($v->user->username); ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="gentie">
                        <div class="tznr-2-4">
                            <ul>
                                <li>
                                    <?php echo Util::timeElapsedStr($v->createTime); ?>
                                    <div class="zx2"></div>
                                </li>
                                <li>
                                    只看该作者
                                    <div class="zx2"></div>
                                </li>
                                    
                                </ul>
                                <div class="louzhu1">
                                    <a href="">板凳</a>
                                </div>
                        </div>
                        <div class="hfnr"><?php echo $p->purify($v->content); ?></div>
                        <div>
                            <hr />
                            <div><img style="vertical-align: middle;" src="img/hfb.png"/><a style="vertical-align: middle;" href="">回复</a></div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
</div>
<div class="nr-bk2">
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
    <span class="ggy "><a href=" ">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top; " src="img/fire.jpg"/></span>
        </div>
</div>
</div>
<!---->
                    <div class="nr-bk1-2-1-3">
        <div class="nr-bk1-2-1-2-2">
            <div class="nr-bk1-2-1-2-1">我的足迹</div>
            <div style="margin-top: 15px; margin-bottom: 15px;">
                <a href=""><img style="width: 100%; height: 100%;" src="img/cyse.png" /></a>
            </div>
            <div style="height: 30px; border-bottom: 1px dashed darkgray;">
                <span class="ggz"><a href="">插画，漫画</a></span>
                <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>
            </div>
            <div style="margin-top: 15px; margin-bottom: 15px;">
                <a href=""><img style="width: 100%; height: 100%;" src="img/cyse2.png" /></a>
            </div>
            <div style="height: 30px;">
                <span class="ggz"><a href="">美术吧</a></span>
                <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>

            </div>

</div>
</div>
<!---->
    <div class="nr-bk1-2-1-3">
        <div class="nr-bk1-2-1-2-2">
            <div class="nr-bk1-2-1-2-1">猜你喜欢</div>
            <div style="margin-top: 15px; margin-bottom: 15px;">
                <a href=""><img style="width: 100%; height: 100%;" src="img/cyse3.png" /></a>
            </div>
            <div style="height: 30px; border-bottom: 1px dashed darkgray;">
                <span class="ggz"><a href="">插画，漫画</a></span>
                <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>
            </div>
            <div style="margin-top: 15px; margin-bottom: 15px;">
                <a href=""><img style="width: 100%; height: 100%;" src="img/cyse4.png" /></a>
            </div>
            <div style="height: 30px;">
                <span class="ggz"><a href="">美术吧</a></span>
                <span class="ggy"><a href="">人气：2759 </a><img style="position: absolute; left: -17px; top: -6px; float: right; vertical-align: top;" src="img/fire.jpg"/></span>

            </div>
</div>
</div>
</div>

    <div class="tel-around ">
            <div class="telback "></div>

            <div class="nice-tel ">
                <a href="#no "><img src="img/template/nicetel.jpg " alt="tel " class="telpic "></a>
                <span>欢迎加入30元/月，加亮50元/月</span>
                <a href="#no ">查看更多 +</a>
            </div>
        </div>

        <div class="teltags ">
            <div class="teltag color1 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color2 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color3 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color4 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color5 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color6 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color7 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color5 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color1 nomargin ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>

            <div class="teltag color6 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color5 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color7 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color1 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color6 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color3 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color2 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color1 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color6 nomargin ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>

            <div class="teltag color4 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color1 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color5 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color2 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color5 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color6 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color1 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color4 ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
            <div class="teltag color2 nomargin ">
                <p>虚位以待</p>
                <p>021-51083516</p>
            </div>
        </div>
        </div>
        <?php $this->widget("SideOutlinkWidget");?>
<div class="row" style="display: none;">
    <div class="col-md-9">
        <!-- view -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="<?php echo $this->createUrl("home/index") ?>">首页</a>
                <span>/</span>
                <?php echo CHtml::encode(isset($model->node->name)?$model->node->name:"默认"); ?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-11">
                        <h4><?php echo CHtml::encode($model->title); ?></h4>
                        <span class="light">
                            <?php echo Util::timeElapsedStr($model->createTime); ?>
                            |
                            By <a href="<?php echo $this->createUrl("home/index", array("Post[userId]"=>$model->userId)) ?>"><?php echo CHtml::encode($model->user->username); ?></a>
                            |
                            <?php echo $model->hits; ?> 次点击
                        </span>
                    </div>
                    <div class="col-md-1">
                        <a href="<?php echo $this->createUrl('home/index', array('Post[userId]'=>$model->userId)); ?>" class="pull-right">
                            <?php if (isset($model->user->avatar) && (($avatar = $model->user->avatar) || ($avatar = Util::gavatar($model->user->email)))): ?>
                            <img class="img-circle" src="<?php echo $avatar; ?>" alt="<?php echo CHtml::encode($model->user->username); ?>">
                            <?php else: ?>
                            <div class="avatar"></div>
                            <?php endif; ?>  
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <article>
                        <?php echo $p->purify($model->content); ?>    
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- view // -->
        <!-- comments list -->
        <?php if ($model->comments): ?>
        <div class="panel panel-default">
        <div class="panel-body">
        <?php foreach ($model->comments as $k => $v): ?>
        <div class="row">
            <div class="col-md-1">
                <a href="<?php echo $this->createUrl("home/index", array('Post[userId]' => $v->userId)); ?>">
                    <?php if (isset($v->user->avatar) && ($avatar = $v->user->avatar) || ($avatar = Util::gavatar($v->user->email))): ?>
                    <img class="img-circle" src="<?php echo $avatar; ?>" alt="<?php echo CHtml::encode($v->user->username); ?>">
                    <?php else: ?>
                    <div class="avatar"></div>
                    <?php endif; ?>   
                </a>
            </div>
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-11">
                        <a group="reply" href="javascript:;"><?php echo CHtml::encode($v->user->username); ?></a>
                        <span class="light"><?php echo Util::timeElapsedStr($v->createTime); ?></span>
                        <?php if ($v->userId == $userId): ?>
                        <a class="badge" href="<?php echo $this->createUrl("home/delcomment", array("id"=>$v->id)); ?>">删除</a>
                        <?php endif; ?>
                        <a name="go<?php echo $v->id; ?>"></a>
                        <div class="dashed"></div>
                        <article>
                            <?php echo $p->purify($v->content); ?>
                        </article>
                    </div>
                    <div class="col-md-1">
                        <span class="badge">#<?php echo ($k + 1); ?></span>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <?php endforeach; ?>
        </div>
        </div>
        <?php else: ?>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">暂时没有回复.</div>
            </div>
        </div>
        <?php endif; ?>
        <!-- comments list // -->

        <!-- comment -->
        <?php if (!Yii::app()->user->isGuest): ?>
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => 'comment-form',
        )); ?>
        <?php echo $form->hiddenField($comment, 'postId', array('value' => $model->id)); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="light">回复</span>
            </div>
            <div class="panel-body">
                <?php echo $form->textArea($comment, 'content', array('class'=>'form-control', 'style'=>'height:100px;resize:none;')); ?>
                <?php echo $form->error($comment, 'content', array('class'=>'help-block')); ?>
            </div>
            <div class="panel-footer">
                <input type="submit" class="btn btn-primary" value="回复">
            </div>
        </div>
        <?php $this->endWidget(); ?>
        <?php endif; ?>
        <!-- comment // -->

    </div>
    <div class="col-md-3">
    <?php if (Yii::app()->user->isGuest): ?>
    <?php $this->widget("SideLoginWidget"); ?>
    <?php if (isset(Yii::app()->params['sina']) || isset(Yii::app()->params['qq'])): ?>
        <?php $this->widget("ThirdPlatformWidget"); ?>
    <?php endif; ?>
    <?php else: ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="<?php echo $this->createUrl("home/post") ?>" class="btn btn-block btn-primary">发表话题</a>
        </div>
    </div>
    <?php $this->widget("SideUserWidget"); ?>
    <?php endif; ?>
    <?php $this->widget("SideHotPostWidget"); ?>
    <?php $this->widget("SideSiteWidget"); ?>
    <?php $this->widget("SideOutlinkWidget"); ?>
    </div>
</div>
<?php if (!Yii::app()->user->isGuest): ?>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/public/ke/kindeditor-all-min.js"></script>
<script type="text/javascript">
$(function(){
    var comment;
    var UPLOAD_CSRF_TOKEN = <?php echo json_encode(Yii::app()->request->csrfToken); ?>;
    KindEditor.ready(function(K) {
        comment = K.create('#Comment_content', {
            formatUploadUrl: false,
            themeType: "simple",
            filePostName: 'upload',
            uploadJson: IMAGE_UPLOAD_URL,
            items : [
                'forecolor', 'hilitecolor', 'bold', 'underline', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                'insertunorderedlist', '|', 'image', 'link', 'code'
            ],
            cssData: 'body { font-size: 14px; }',
            extraFileUploadParams: {
                <?php echo Yii::app()->request->csrfTokenName ?>: UPLOAD_CSRF_TOKEN
            }
        });
    });
    $('a[group="reply"]').on('click', function(){
        var txt = "@" + $(this).text();
        var content = txt + "&nbsp;";
        if (!comment.isEmpty()) {
            content = comment.html() + content;
        }
        comment.html(content);
    });
});
</script>
<?php endif; ?>
<script type="text/javascript">
$.ajax(<?php echo json_encode($this->createUrl("ajax/postView", array("id"=>$model->id))); ?>);
</script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#cli').click(function() {
        $('.huifu').css('display','block'),
        $('.ke-container').removeAttr("style")
    })
    $('.gb').click(function() {
        $('.huifu').css('display','none')
    })
})
</script>