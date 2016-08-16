<div class="row">
	<div class="col-sm-12">
		<div class="bg-white ">
			<div class="s-label">
				<span>Teacher and Staff</span>
			</div>
			<div class="hr"></div>
			<div class="s-con">
				<?php 
					if(count($designationlist) > 0)
					{
						echo '<div class="row">';

						foreach ($designationlist as $designation) {
							// echo count($designation['staff']).' '.$designation['label']."<br>";
							if($designation['groupid'] > 0)
							{
								echo '<div class="col-sm-6 s-center">
										<h4><p>'.$designation['staff'][0]['name'].'</p></h4>
										<i><p>'.$designation['label'].'</p></i>
									</div>';
							}
							elseif (count($designation['staff']) > 1) 
							{
								echo "<div class='row'>
										<div class='col-sm-12 group-lavel'>
											<h3><span>".$designation['label']."</span><h3>
										</div>";

								foreach ($designation['staff'] as $staff) {
									$otherinfo = '&nbsp;';

									if($staff['otherinfo'] != '')
										$otherinfo= $staff['otherinfo'];

									echo '<div class="col-sm-3 s-center s-4">
												<h4><p>'.$staff['name'].'</p></h4>
												<i><p>'.$otherinfo.'</p></i>
											</div>';
								}

								echo "</div>";
							}
							else
							{
								echo '<div class="col-sm-12 s-center">
										<h4><p>'.$designation['staff'][0]['name'].'</p></h4>
										<i><p>'.$designation['label'].'</p></i>
									</div>';
							}
						}

						echo "</div>";
					}
				?>
			</div>
		</div>
	</div>
</div>