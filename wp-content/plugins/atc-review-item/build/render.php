<div <?php echo get_block_wrapper_attributes($attributes); ?>>
	<div class="atc-review-wrapper">
		<div class="atc-reviewer-wrapper">
			<div class="atc-reviewer-image">
				<img src="<?php echo $attributes['reviewerImage'] ?>" alt="client photo" />
			</div>
			<div class="atc-reviewer-details">
				<div class="atc-reviewer-name"><?php echo $attributes['reviewerName'] ?></div>
				<div class="atc-reviewer-company"><?php echo $attributes['companyName'] ?></div>
			</div>
		</div>
		<div class="atc-review-rating">
			<?php
				$number_of_stars = $attributes['numberOfStars'];
				for($i =1; $i <= $number_of_stars; $i++)
					{
					echo '<span><i class="fa-solid fa-star"></i></span>';
					}
			?>
		</div>
		<div class="atc-review-content"><?php echo $attributes['reviewText'] ?></div>
	</div>
</div>
