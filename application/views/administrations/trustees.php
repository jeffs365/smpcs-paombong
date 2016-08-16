<div class="row ">
	<div class="col-sm-12">
		<div class="bg-white marketing">
			<div class="label-header" style="margin-bottom: 20px;">
				<span>Board of Trustees</span>
			</div>
			<div class="row" style="padding: 10px;">
				<?php
					$maxctr = count($trustees);
					$ctr = 1;

					foreach ($trustees as $trust) {
						$picture = $trust->picture;
						$column = 12;

						if($picture == '')
							$picture = 'assets/images/trustees/default.jpg';

						// if($ctr < 3 && intval($maxctr % 3) == 2)
						// {
						// 	$column = 6 ;						
						// }
						// elseif ($ctr < 2 && intval($maxctr % 3) == 1) {
						// 	$column = 12;
						// }

						echo '<div class="col-lg-'.$column.' text-center margin-bottom-50" style="padding: 20px;">
						          <img class="img-circle" src="'.base_url($picture).'" alt="" width="140" height="140">
						          <h4 style="margin-bottom: 0px;">'.$trust->name.'</h4>
						          <p><i>'.$trust->address.'</i></p>
						          <p>'.$trust->otherinfo.'</p>
						      </div>';

						$ctr += 1;
					}
				?>
			</div>
		</div>
	</div>
</div>