<?php

class View
{
	
	protected $userSession;
	private $template;

	public function __construct()
	{
		$this->userSession = new UserSession();
	}

	public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

	public function render($template, $params = array())
	{
		extract($params);

		$userSession = $this->userSession;
        
		ob_start();
		include_once(VIEW.$template.'.php');
		$contentPage = ob_get_clean();
		
		include_once(VIEW.'_gabarit.php');

	}

	public function redirect($route)
    {
        header("Location: ".HOST.$route);
        exit;
    }



    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param mixed $template
     *
     * @return self
     */

}
