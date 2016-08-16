<?php

/**
* 
*/
class Events extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('event_model');
	}

	public function index()
	{
		$data = array(
					'title' => 'Event',
					'header_css' => array( 'bootstrap.min.css', 'ekko-lightbox.min.css', 'main.css', 'menu.css', 'news.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'ekko-lightbox.min.js', 'menu.js', 'news.js' ) 
					);

		$events = $this->event_model->get_allevents();

		$data['eventslist'] = $events;

		load_template('News','news_events/events/main', $data);
	}

	public function view($id)
	{
		$data = array(
					'title' => 'Event',
					'header_css' => array( 'bootstrap.min.css', 'ekko-lightbox.min.css', 'main.css', 'menu.css', 'news.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'ekko-lightbox.min.js', 'menu.js', 'news.js' ) 
					);

		$event = $this->event_model->get_eventbyid($id);

		if(count($event) == 0)
			redirect('news_events/events');

		$data['event'] = $event[0];

		load_template('Event','news_events/events/view', $data);
	}
}