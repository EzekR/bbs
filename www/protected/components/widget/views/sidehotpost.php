<!-- <div class="panel panel-default">
    <div class="panel-heading">
        <span>热门帖子</span>
    </div>
    <ul class="list-group">
        <?php if ($post) foreach ($post as $v): ?>
        <li class="list-group-item"><a href="<?php echo Yii::app()->createUrl("home/view", array("id"=>$v->id)) ?>"><?php echo CHtml::encode($v->title); ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>-->
<div class="nr-bk1-2-1-3">
	<div class="nr-bk1-2-1-2-2">
		<div class="nr-bk1-2-1-2-1">
			<span>帖子热议榜</span>
			<span><a href="">查看榜单</a></span>
		</div>
		<div style="clear: both;"></div>
		<?php if ($post) foreach ($post as $k=>$v): ?>
		<div class="kz">
			<div class="nub1"><?php echo $k+1; ?></div>
			<span><a href="<?php echo Yii::app()->createUrl("home/view", array("id"=>$v->id))?>">
			<?php if (strlen($v->title) >= 10) {?>
			<?php echo substr($v->title, 0, 10); ?>..
			<?php } else {?>
			<?php echo $v->title;?>
			<?php }?>
			</a></span>
			<span><a href="<?php echo Yii::app()->createUrl("home/view", array("id"=>$v->id))?>"><?php echo $v->hits; ?></a></span>
		</div>
	<?php endforeach; ?>
	</div>
</div>