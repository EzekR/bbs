<div class="col-md-9">
        <div class="panel panel-default">
            <div class="container">
                <div class="nr-top">
                <a href="<?php echo $this->createUrl("home/index"); ?>"><span class="sps1">首页</span></a>
                <?php if ($nodes) foreach ($nodes as $v): ?>
                ><a href="<?php echo $this->createUrl("home/index", array("Post[nodeId]"=>$v->id)) ?>"><span class="sps2"><?php echo CHtml::encode($v->name); ?></span></a>
                <?php endforeach; ?>            
                </div>
            </div>
            <div class="panel-heading">
            <a class="label label-default" href="<?php echo $this->createUrl("home/index"); ?>">教育论坛</a>
            <?php if ($nodes) foreach ($nodes as $v): ?>
            <a href="<?php echo $this->createUrl("home/index", array("Post[nodeId]"=>$v->id)) ?>" class="label label-default"><?php echo CHtml::encode($v->name); ?></a>
            <?php endforeach; ?>
            </div>
            <div class="panel-body">
                <?php if ($data): ?>
                <?php foreach ($data as $v): ?>
                <div class="row" id="box-title">
                    <div class="col-md-1">
                        <a href="<?php echo $this->createUrl("home/index", array("Post[userId]"=>$v->userId)); ?>">
                        <?php if (isset($v->user->avatar) && (($avatar = $v->user->avatar) || ($avatar = Util::gavatar($v->user->email)))): ?>
                            <img class="img-circle" src="<?php echo $avatar;?>" alt="<?php echo CHtml::encode($v->user->username); ?>">
                        <?php else: ?>
                            <div class="avatar"></div>
                        <?php endif; ?>
                        </a>
                    </div>
                    <div class="col-md-10">
                        <a href="<?php echo $this->createUrl("home/view", array("id" => $v->id)); ?>">
                            <h4 class="post-title">
                                <?php echo CHtml::encode($v->title); ?>
                            </h4>
                        </a>
                        <?php if (isset($v->node->name)): ?>
                        <span><a href="<?php echo $this->createUrl("home/index", array("Post[nodeId]"=>$v->nodeId)); ?>" class="label label-default"><?php echo CHtml::encode($v->node->name); ?></a></span>
                        <?php endif; ?>
                        <?php if (isset($v->user->username)): ?>
                        <span class="light">•</span>
                        <span><a href="<?php echo $this->createUrl("home/index", array("Post[userId]"=>$v->userId)); ?>"><?php echo CHtml::encode($v->user->username); ?></a></span>
                        <?php endif; ?>

                        <span class="light">•</span>
                        <span class="light"></span>

                        <?php if (isset($v->by->username)): ?>
                        <span class="light">•</span>
                        <span class="light">最后回复来自</span>
                        <span><a class="light" href="<?php echo $this->createUrl("home/index", array("Post[userId]"=>$v->lastUpdateUserId)); ?>"><?php echo CHtml::encode($v->by->username); ?></a></span>
                        <?php endif; ?>
                        <s<?php echo Util::timeElapsedStr($v->createTime); ?>pan class="light"><?php echo $v->hits; ?>次浏览</span>
                    </div>
                    <div class="col-md-1">
                        <span class="badge"><?php echo $v->reply; ?> <?php if ($v->sort): ?>T<?php endif; ?></span>
                    </div>
                </div>
                <div class="dashed"></div>
                <?php endforeach; ?>
                <?php else: ?>
                <div class="alert alert-warning">
                    <span>暂时没有话题.</span>
                </div>
                <?php endif; ?>
                <?php $this->widget('CLinkPager', Util::page($page)); ?>
            </div>
        </div>
    </div>
</div> -->
<!--<div class="col-md-3">
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
    </div> -->
    <!-- post cut -->
    <div class="row">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>发表话题</span>
            </div>
            <div class="panel-body">
                
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
                <?php $form = $this->beginWidget("CActiveForm", array(
                    "id" => 'post-form',
                    "htmlOptions" => array(
                    'role' => "form",
                    ),
                )); ?>
                <div class="form-group">
                    <?php echo $form->textField($model, "title", array("class"=>"form-control", "placeholder"=>"标题")); ?>
                </div>
                <div class="form-group" style="display: none">
                <?php if(isset($_GET['node'])) {?>
                <input type="hidden" name="nodeId" value="<?php echo $_GET['node']; ?>">
                <?php } else {?>
                <input type="hidden" name="nodeId" value="1">
                <?php }?>
                </div>
                <div class="form-group">
                    <?php echo $form->textArea($model, "content", array("class"=>'form-control', 'style'=>'min-height:480px')); ?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="发布">
                    <a class="btn btn-default" href="<?php $this->createUrl("index"); ?>">取消</a>
                </div>
                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span>发帖说明</span>
            </div>
            <div class="panel-body">
                <ul style="padding-left: 16px;">
                <li>请明确填写标题</li>
                <li>请选择正确的节点</li>
                </ul>
            </div>
        </div>
        <?php $this->widget("SideHotPostWidget"); ?>
    </div>
</div>