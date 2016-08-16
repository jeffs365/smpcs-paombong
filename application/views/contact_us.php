
	<div class="row">
		
		<div class="col-sm-6">
			<div class="con_body">
				<div class="h_25">
					<span>Contact Us</span>
				</div>
				<div class="hr"></div>

				<div>
					<div class="">
						<h3><span>St. Martin de Porres Catholic School</span></h3>
						<span><?php echo configvalue('school_address') ?></span><br>
						<span>Tel: <?php echo configvalue('tel_number') ?></span><br>
						<span>Fax: <?php echo configvalue('fax_number') ?></span><br>
						<span><?php echo configvalue('school_email') ?></span>
					</div>
				</div>

			</div>
		</div>
		<div class="col-sm-6">
			<div class="con_body">
				<div class="h_25">
					<span>Visit Us</span>
				</div>
				<div class="hr"></div>
				<div class="map">
					<?php print_r($mapcode); ?>
				</div>
				<div>
					<span>St. Martin de Porres Catholic School
Poblacion Rd., Poblacion, Paombong, Bulacan
Philippines</span>
				</div>
			</div>
		</div>
	</div>
