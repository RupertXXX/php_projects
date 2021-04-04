<?php
class Controller_rent extends Controller
{
    function __construct()
    {
        $this->model = new Model_Rent();
        $this->view = new View();
    }
	function action_page($page)
	{
        $data = $this->model->get_page($page);
		$this->view->generate('page_rent_view.php', 'template_view.php', $data);
	}
    function action_post($id)
	{
        $data = $this->model->get_post($id);
		$this->view->generate('post_rent_view.php', 'template_view.php', $data);
	}
    function action_addPost()
    {
        $data = true;
        $this->view->generate('add_rent_view.php', 'template_view.php', $data);
    }
    function action_postAded()
    {
        if(!(empty($_POST))){
            $data = $this->model->set_post($_POST);
            $this->view->generate('add_rent_view.php', 'template_view.php', $data);
        }
        else{
            $data = false;
            $this->view->generate('add_rent_view.php', 'template_view.php', $data);
        }
    }
}
?>