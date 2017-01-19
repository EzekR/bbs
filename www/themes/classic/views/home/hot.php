<div class="right-down">
	<img src="img/72paihang.jpg" width="100%" />
	<table class="paihang72">
	<?php if ($post) {?>
	<?php foreach ($post as $k=>$v) {?>
		<tr>
			<th class="paihang72-1">
			<?php if ($k <= 2) {?>
				<img src="img/fang-chengse.png" />
			<?php } else { ?>
				<img src="img/fang-lvse">
			<?php }?>
				<span class="text-shu"><?php echo $k+1;?></span>
			</th>
			<th class="paihang72-2">
				<a href="<?php echo Yii::app()->createUrl("home/view", array("id"=>$v->id));?>" class="co3"><?php echo $v->title;?></a>
			</th>
			<th class="paihang72-3 fo13 co9">
				<?php echo $v->hits; ?>
			</th>
		</tr>
	<?php } ?>
	<?php }?>
	</table>
</div>