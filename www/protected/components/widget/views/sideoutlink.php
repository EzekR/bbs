<div class="f-link-bg clearfix">
	<div class="f-link">
		<div class="f-link-tag">
			<p>友情链接</p>
		</div>
		<div class="f-links">
			<ul>
				<?php if ($link) foreach ($link as $v): ?>
				<li>
					<a href="<?php echo CHtml::encode($v->url); ?>"><?php echo CHtml::encode($v->name); ?></a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>