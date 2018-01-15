<?php

class ExperienceController extends Controller
{

	function __construct()
	{
		$this->model = new ExperienceModel();
		$this->view = new View();
	}
	
	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('experience_view.php', 'template_view.php', $data);
	}
}
