<div class="row">
	<div class="col-sm-12">
		<div class="bg-white">

			<div class="label-header">
				<span><?php echo $event->what; ?></span>
			</div>
			<div class="margin-40">

				<div class="view-news-image margin-bottom-50">
					<div>
						<?php 
							$picture = ($event->picture == '') ? 'assets/images/logo_blue.png' : $event->picture;

							echo '<a class="thumbnail" href="'.base_url($picture).'"
					                	data-toggle="lightbox" data-gallery="columnwrappers" data-parent=".wrapper-parent">
					                    <img class="img-responsive" src="'.base_url($picture).'" alt="">
					                </a>'; 
						?>
					</div>
				</div>

				<div>
					<div class="">
						<p><b>Venue:</b></p>
						<p style="padding-left:40px;" >
							<table>
								<tr>
									<td width="100px" style="padding: 5px;">Where:</td>
									<td style="padding: 5px;">
										<span style="color: #de3c2f;" class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
										<i><?php echo $event->where; ?></i>
									</td>
								</tr>
								<tr>
									<td style="padding: 5px;">When:</td>
									<td style="padding: 5px;">
										<span style="color: #de3c2f;" class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
										<i><?php echo date("F j, Y, g:i a",strtotime($event->when)); ?></i>
									</td>
								</tr>
							</table>
							<br/>
						</p>
					</div>
					<div class="">
						<h4>Description</h4>
						<div class="tab"></div>
						<span><?php echo $event->details; ?></span>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>