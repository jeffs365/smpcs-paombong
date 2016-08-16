<?php

/**
* 
*/
class News extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('news_model');
	}

	public function index()
	{
		$data = array(
					'title' => 'News',
					'header_css' => array( 'bootstrap.min.css', 'ekko-lightbox.min.css', 'main.css', 'menu.css', 'news.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'ekko-lightbox.min.js', 'menu.js', 'news.js' ) 
					);

		$news = $this->news_model->get_allnews();

		$data['newslist'] = $news;

		load_template('News','news_events/news/main', $data);
	}

	public function view($id)
	{
		$data = array(
					'title' => 'News',
					'header_css' => array( 'bootstrap.min.css', 'ekko-lightbox.min.css', 'main.css', 'menu.css', 'news.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'ekko-lightbox.min.js', 'menu.js', 'news.js' ) 
					);

		$news = $this->news_model->get_newsbyid($id);

		if(count($news) == 0)
			redirect('news_events/news');

		$data['news'] = $news[0];

		load_template('News','news_events/news/view', $data);
	}
}