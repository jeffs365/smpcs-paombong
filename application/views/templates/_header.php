<html>
<head>
	<title>SMPCS<?php if($title != '') echo ' | '.$title;  ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<?php
		foreach ($header_css as $css) {
			echo '<link rel="stylesheet" href="'.base_url("assets/css/".$css).'" />';
		}
	?>
</head>
<body class="bg-gradient">
<div class="site_body">
	<div class="site_header">
		<div class="site_header_bg">
			<div class="site_header_content">
				<div class="header_0">
					<div class="header_logo_a">
						<span ><?php echo $header['headertxt_left']; ?></span>
					</div>
					<div class="header_logo" style="background-image: url(<?php echo base_url($header['headerlogo']); ?>);"></div>
					<div class="header_logo_b">
						<span ><?php echo $header['headertxt_right']; ?></span>
					</div>
				</div>
				<div class="header_menu">
					<div class="menu_link">
						
						<div id="menuWrapper">
					        <?php echo loadmenu(); ?>
					    </div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="site_content">
		<div class="site_content_bg">
			<div class="site_content_body">

			
			<!-- end of header view -->

		
