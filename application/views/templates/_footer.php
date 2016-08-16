			</div>
		</div>
	</div>
	<div class="site_footer">
		<div class="site_footer_bg">
			<div class="site_footer_content"></div>
		</div>
	</div>

</div>
	<?php
		foreach ($header_js as $js) {
			echo '<script type="text/javascript" src="'.base_url("assets/js/".$js).'"></script>';
		}
	?>
</body>
</html>