<div class="row">
	<div class="col-sm-12">
		<div class="bg-white">

			<div class="label-header">
				<span>Upcoming Events</span>
			</div>
			<div class="margin-40">

				<?php
					foreach ($eventslist as $event) {
						$eventid = $event->id;
						$what = $event->what;
						$when = $event->when;
						$where = $event->where;
						$details = $event->details;
						$picture = ($event->picture == '') ? 'assets/images/logo_blue.png' : $event->picture;
						$datecreated = $event->datecreated;

						echo '<div class="media">
							      <div class="media-left  news-image">
							        <a class="thumbnail" href="'.base_url($picture).'"
					                	data-toggle="lightbox" data-gallery="columnwrappers" data-parent=".wrapper-parent">
					                    <img class="img-responsive" src="'.base_url($picture).'" alt="">
					                </a>
							      </div>
							      <div class="media-body news-details">
							        <h3 class="media-heading news-header"><a href="'.base_url('news_events/events/view/'.$eventid).'">'.$what.'</a></h3>
							        <p> <span style="
    color: #de3c2f;" class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> &nbsp;'.$where.'</p>
							        <h4 class="news-date"><span style="
    color: #de3c2f;" class="glyphicon glyphicon-calendar" aria-hidden="true"></span>  &nbsp;<i>'.date("F j, Y, g:i a",strtotime($datecreated)).'</i></h4>
							        '.$details.'
							      </div>
							    </div>
							    <div class="hr-dot"></div>';
					}

				?>

				
			</div>

		</div>
	</div>
</div>