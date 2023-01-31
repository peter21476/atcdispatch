<p <?php echo get_block_wrapper_attributes($attributes); ?>>

	<div class="atc-sol-card">
	<div class="atc-sol-card-wrapper">
	<div class="atc-sol-title">
			<div class="atc-sol-icon">
				<img src="<?php echo $attributes['image'] ?>" alt="icon" />
			</div>
			<h4><?php echo $attributes['heading'] ?></h4>
		</div>
		<div class="atc-sol-switch">
		<i class="fa-solid fa-square-plus"></i>
		</div>
	</div>
	<div class="atc-sol-text"><?php echo $attributes['text'] ?></div>
	</div>

</p>
