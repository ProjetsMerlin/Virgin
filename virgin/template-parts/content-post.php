<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
			<div class="px-4 py-6 sm:px-0">
				<div class="w-full lg:w-1/2 md:px-4 lg:px-6 py-5">
					<a href="<?= the_permalink();?>" class="inline-block bg-white hover:shadow-xl">
						<div class="">
							<img src="<?= the_post_thumbnail_url();?>" alt="<?= the_title();?>" title="<?= the_title();?>"
							class="h-56 w-full border-white border-8 hover:opacity-25">
						</div>
						<div class="px-4 py-4 md:px-10">
							<h1 class="font-bold text-lg">
								<?= the_title();?>
							</h1>
							<div class="py-4">
								<?= the_excerpt();?>
							</div>
							<div class="flex flex-wrap pt-8">
								<div class="w-full md:w-1/2 text-sm font-medium">
									<?= the_date();?>
								</div>
								<div class="1/2">
									<div class="text-sm font-medium">
										Tags:
										<?php
										$display_tags = display_tags(get_the_ID());
										if(!empty($display_tags)){
											foreach($display_tags as $tag) {
												echo '<span
												class="text-blue-700 px-1">
												'.$tag->name . '
												</span>
												'; 
											}
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</a>
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