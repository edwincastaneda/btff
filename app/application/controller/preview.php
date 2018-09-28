<?php

class Preview extends Controller
{

    public function index($theme)
    {
			
        // load views
        require APP . 'view/themes/'.$theme.'/header.php';
        require APP . 'view/themes/'.$theme.'/home.php';
        require APP . 'view/themes/'.$theme.'/footer.php';
    }
	
			    public function elements($theme)
    {
        // load views
        require APP . 'view/themes/'.$theme.'/header.php';
        require APP . 'view/_templates/elements.php';
        require APP . 'view/themes/'.$theme.'/footer.php';
    }
	
	    public function single($theme)
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/preview/index.php';
        require APP . 'view/_templates/footer.php';
    }
	
		    public function contact($theme)
    {
        // load views
        require APP . 'view/themes/'.$theme.'/header.php';
        require APP . 'view/_templates/contact.php';
        require APP . 'view/themes/'.$theme.'/footer.php';
    }

	
		    public function archive()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/preview/index.php';
        require APP . 'view/_templates/footer.php';
    }
}
