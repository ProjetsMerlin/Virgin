<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
			<div class="px-4 py-6 sm:px-0">
				<div class="w-full lg:w-full md:px-4 lg:px-6 py-5">
					<div class="inline-block bg-white hover:shadow-xl">
						<?php if (has_post_thumbnail() === true):?>
							<div class="">
								<img src="<?= the_post_thumbnail_url('medium');?>" alt=""
								class="h-56 w-full border-white border-8 hover:opacity-25">
							</div>
						<?php endif;?>
						<div class="px-4 py-4 md:px-10">
							<h1 class="font-bold text-lg">
								<?= the_title();?>
							</h1>
							<div class="py-4">
								<?= the_content();?>
							</div>
							<div class="flex flex-wrap pt-8">
								<div class="w-full md:w-1/2 text-sm font-medium">
									<?= the_date();?>
								</div>
								<div class="1/2">
									<?php if (has_tag() === true):?>
										<div class="text-sm font-medium">
											Tags:
											<?php
											$display_tags = display_tags(get_the_ID());
											foreach($display_tags as $tag) {
												echo '<a
												href="'.site_url().'/tags/'.$tag->slug.'"
												class="text-blue-700 px-1">
												'.$tag->name . '
												</a>
												'; 
											}
											?>
										</div>
									<?php endif;?>
								</div>
							</div>
							<div>
								<?php comments_template(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}
else {
	"pas d'articles";
}
?>