<p <?php echo get_block_wrapper_attributes($attributes); ?>>
	<div class="atc-select-wrapper">
		<div class="atc-select-image">
			<img src="<?php echo $attributes['image'] ?>" alt="truck">
		</div>
		<div class="atc-select-title">
			<h5><?php echo $attributes['heading'] ?></h5>
			<h3><?php echo $attributes['subheader'] ?></h3>
		</div>
		<div class="atc-select-button">
			<a href="#" class="atc-select-btn">Select</a>
		</div>
		<div class="atc-select-content">
			<ul>
				<?php echo $attributes['content'] ?>
			</ul>
		</div>
	</div>
</p>
