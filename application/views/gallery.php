<div class="row">
	<div class="col-sm-12">
		<div class="row">
			<div class="col-sm-9">
				<div class="bg-white">
					<div class="row wrapper-parent">
						<!-- thubnail gallery -->
						<div class="col-lg-12">
			                <h2 class="page-header marg-10"><?php echo $g_images['folder']; ?></h2>
			            </div>

			            <?php 
			            	foreach ($g_images['images'] as $image) {
			            		$i_path = 'assets/images/gallery/'.$g_images['folder'].'/'.$image->filename;

			            		echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
							                <a class="thumbnail" href="'.base_url($i_path).'"
							                data-toggle="lightbox" data-gallery="columnwrappers" data-parent=".wrapper-parent">
							                    <img class="img-responsive" src="'.base_url($i_path).'" alt="">
							                </a>
							            </div>';		
			            	}
			            ?>
			      	</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="bg-white padding-5">
					<!-- List of folder -->
					<h3 class="page-header marg-10">Directory</h3>
					<div class="list-group">
						<?php 
							foreach ($g_folder as $folder) {
								$active = '';
								$icon = 'glyphicon glyphicon-folder-close';

								if($folder->name == $g_images['folder'])
								{
									$active = ' active ';
									$icon = 'glyphicon glyphicon-folder-open';
								}

								echo ''.
									'<a class="list-group-item '.$active.' " href="'.base_url('gallery/'.$folder->name).'">
										<i class="'.$icon.'"></i>'.$folder->name.'</a>'
									.'';
							}

						 ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>