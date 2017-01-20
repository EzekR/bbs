<div class="left-down">
	<div class="left-down-hudong">
		<div class="ddd5"></div>
		<img src="img/hudongluntan.jpg" class="hudong-left" />
		<a href="<?php echo Yii::app()->createUrl("home/index");?>"><img src="img/gengduo.jpg" class="hudong-right" /></a>
	</div>
	<div style="clear: both;"></div>
<div class="ninekuai">
<?php foreach ($nodes as $k=>$v) {?>
 <?php if ($k <=2) {?>
		<a href="<?php echo Yii::app()->createUrl("home/index", array("Post[nodeId]"=>$v->id)); ?>">
			<div class="nine-kuai">
				<div class="nine-kuai-left">
					<img src="upload_img/<?php echo $v->img;?>" style="width: 58px; height: 56px;"/>
				</div>
				<div class="nine-kuai-right">
					<p class="font16">
						<span class="co3" ><?php echo $v->name; ?></span>
					</p>
					<p class="font12 co6">主题：<?php echo $node_posts[$k]['topic'];?>  贴数: <?php echo $reply[$k]['reply'];?></p>
					<p class="font12 co6">最后发表：2016-6-16 09:22</p>
				</div>
			</div>
		</a>
	<?php } else {?>
<div style="display: none"></div>
	<?php } ?>
<?php } ?>
	</div>
</div>