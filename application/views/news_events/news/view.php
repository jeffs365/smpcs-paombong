<div class="row">
	<div class="col-sm-12">
		<div class="bg-white">

			<div class="label-header">
				<span><?php echo $news->title; ?></span>
			</div>
			<div class="margin-40">

				<div class="view-news-image margin-bottom-50">
					<div>
						<?php 
							$newspicture = ($news->picture == '') ? 'assets/images/logo_blue.png' : $news->picture;

							echo '<a class="thumbnail" href="'.base_url($newspicture).'"
					                	data-toggle="lightbox" data-gallery="columnwrappers" data-parent=".wrapper-parent">
					                    <img class="img-responsive" src="'.base_url($newspicture).'" alt="">
					                </a>'; 
						?>
					</div>
				</div>

				<div>
					<div class="">
						<div class="tab"></div>
						<span><?php echo $news->details; ?></span>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>