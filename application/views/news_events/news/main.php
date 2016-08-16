<div class="row">
	<div class="col-sm-12">
		<div class="bg-white">

			<div class="label-header">
				<span>School News</span>
			</div>
			<div class="margin-40">

				<?php
					$ctr = 1;
					foreach ($newslist as $news) {
						$newsid = $news->id;
						$newstitle = $news->title;
						$newsdetails = $news->details;
						$newspicture = ($news->picture == '') ? 'assets/images/logo_blue.png' : $news->picture;
						$datecreated = $news->datecreated;

						$pullright = '';
						$textright = '';

						if(($ctr % 2) == 0)
						{
							$pullright = ' pull-right ';
							$textright = ' text-right ';
						}

						echo '<div class="media">
							      <div class="media-left '.$pullright.' news-image">
							        <a class="thumbnail" href="'.base_url($newspicture).'"
					                	data-toggle="lightbox" data-gallery="columnwrappers" data-parent=".wrapper-parent">
					                    <img class="img-responsive" src="'.base_url($newspicture).'" alt="">
					                </a>
							      </div>
							      <div class="media-body '.$textright.' news-details">
							        <h3 class="media-heading news-header"><a href="'.base_url('news_events/news/view/'.$newsid).'">'.$newstitle.'</a></h3>
							        <h4 class="news-date"><span style="color: #de3c2f;" class="glyphicon glyphicon-calendar" aria-hidden="true"></span>&nbsp;<i>'.date("F d, Y",strtotime($datecreated)).'</i></h4>
							        '.$newsdetails.'
							      </div>
							    </div>
							    <div class="hr-dot"></div>';

						$ctr += 1;
					}

				?>

				
			</div>

		</div>
	</div>
</div>