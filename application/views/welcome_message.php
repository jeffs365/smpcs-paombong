
<div class="home_content_1">

	<div class="home_pics">
		<div class="home_caousel">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		      <li data-target="#myCarousel" data-slide-to="5"></li>
		      <li data-target="#myCarousel" data-slide-to="6"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">
		      <div class="item active">
		        <img src="<?php echo base_url("assets/images/carousel/1.jpg"); ?>" alt="Chania" width="460" height="345">
		      </div>
		      <div class="item">
		        <img src="<?php echo base_url("assets/images/carousel/2.jpg"); ?>" alt="Chania" width="460" height="345">
		      </div>
		      <div class="item">
		        <img src="<?php echo base_url("assets/images/carousel/3.jpg"); ?>" alt="Flower" width="460" height="345">
		      </div>
		      <div class="item">
		        <img src="<?php echo base_url("assets/images/carousel/4.jpg"); ?>" alt="Flower" width="460" height="345">
		      </div>
		      <div class="item">
		        <img src="<?php echo base_url("assets/images/carousel/5.jpg"); ?>" alt="Flower" width="460" height="345">
		      </div>
		      <div class="item">
		        <img src="<?php echo base_url("assets/images/carousel/6.jpg"); ?>" alt="Flower" width="460" height="345">
		      </div>
		      <div class="item">
		        <img src="<?php echo base_url("assets/images/carousel/7.jpg"); ?>" alt="Flower" width="460" height="345">
		      </div>
		    </div>
		  </div>
		</div>
	</div>

	<div class="home_right">
		<div class="home_welcome">
			<div class="span_welcome">
				<span>Welcome to <?php echo configvalue('short_name'); ?></span>
			</div>
		</div>
		<div class="home_note">
			<p>
				<span>
					We welcome you to the Internet home of St. Martin de Porres School. We strive to provide a solid, Catholic-Christian education to children from kindergarten through the 8th grade. We endeavor to build within our students a strong sense of Christian character and cultural pride, and we expect them to accomplish high levels of proficiency, so they will be well-prepared to meet the challenges of high school, college, and beyond. 
				</span>
			</p>
		</div>
		<div class="home_button_div">
			<a href="<?php echo base_url("admissions/requirements"); ?>" class="home_button btn btn-primary" role="button">Apply Now</a>
			<a href="<?php echo base_url("contact_us"); ?>" class="home_button btn btn-primary" role="button">Visit Us</a>
		</div>
	</div>

</div>
<br>
<div class="row">
	<div class="col-sm-6">
		<div class="bg-white">
			<div class="holder_txt">
				<span>MISSION</span>
			</div>
			<div class="holer_hr"></div>
			<div class="hieght-450">
				<div class="tab"></div>
				<span>St. Martin de Porres Catholic School of Paombong envisions a school community educated in the faith, living and proclaiming the Gospel through prayer, study and service to the poor as exemplified by its Patron, St. Martin de Porres and revitalized by a special devotion to the Holy Eucharist, to the Blessed Virgin Mary and St. James the Apostle, the Patron Saint of the Parish. </span>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="bg-white">
			<div class="holder_txt">
				<span>VISION</span>
			</div>
			<div class="holer_hr"></div>
			<div class="hieght-450">
				<div class="tab"></div>
				<span>Inspired by this vision, we commit ourselves to provide quality education and to work for integral evangelization for the total formation of the entire school community into a truly Catholic, integral service-oriented persons.</span>
			</div>
		</div>
	</div>
</div>

<div class="home_content_2">
	<div class="bg_home_3">
		<div class="home_news bg_home_2">
			<div class="holder_div_news">
				<div class="holder_txt">
					<span>SCHOOL NEWS</span>
				</div>
				<div class="holer_hr"></div>
				<div class="home_news_content">
					<?php
						foreach ($topfournews as $news) {
							echo "<a href='".base_url('news_events/news/view/'.$news->id)."'>
									<div class='home_news_div'>
										<p class='home_news_date'>
											<strong>".date("F d, Y",strtotime($news->datecreated))."</strong>
										</p>
										<p>
											".$news->title." 
										</p>
									</div>
								</a>";
						}
					?>
					<div class="read_more">
						<a href="<?php echo base_url('news_events/news'); ?>">+ Read More</a>
					</div>
				</div>
			</div>
		</div>
		<div class="home_contacts bg_home_2">
			<div class="holder_div_news">
				<div class="holder_txt">
					<span>CONTACT US</span>
				</div>
				<div class="holer_hr"></div>
				<div >
					<p><?php echo configvalue('school_address') ?></p>
					<span>Tel: <?php echo configvalue('tel_number') ?></span><br>
					<span>Fax: <?php echo configvalue('fax_number') ?></span><br>
					<span><?php echo configvalue('school_email') ?></span>
				</div>
			</div>
		</div>
		<div class="home_events bg_home_2">
			<div class="holder_div_events">
				<div class="holder_txt">
					<span>UPCOMING EVENTS</span>
				</div>
				<div class="holer_hr"></div>
				<div class="home_news_content">
					<?php
						foreach ($topfourevent as $event) {
							echo '<a href="'.base_url('news_events/events/view/'.$event->id).'">
									<ul class="media-list">
				      					<li class=" home_event_div media">
				      						<div class="row">
					        					<div class=" col-sm-4 home_news_date">
										          <strong>'.date("M j, y g:i a",strtotime($news->datecreated)).'</strong>
										        </div>
										        <div class=" col-sm-8">
					          						<strong>
					          							'.$event->what.'
					          						</strong>
					          						<p>
					          							'.$event->where.'
					          						</p>
											    </div>
											</div>
										</li>
									</ul>
								</a>';
						}
					?>
					<div class="read_more">
						<a href="<?php echo base_url('news_events/events'); ?>">+ Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>