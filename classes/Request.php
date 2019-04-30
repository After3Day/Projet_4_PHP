<?php




class Request
{


	private $route;
    private $params;

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param mixed $route
     *
     * @return self
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     *
     * @return self
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    public function get($param)
    {
        if(!isset($this->params[$param])) return null;
        return $this->params[$param];
    }

}
