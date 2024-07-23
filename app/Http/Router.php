<?php

namespace App\Http;

class Router
{
    /**
     * URL
     * @var string
     */
    private $url = '';

    /**
     * Routes prefix
     * @var string
     */
    private $prefix = '';

    /**
     * Routes index
     * @var array
     */
    private $routes = [];

    /**
     * Request instance
     * @var Request
     */
    private $request;

    /**
     * @param string $url
     */
    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Set routes prefix
     * @return void
     */
    private function setPrefix()
    {
        $parseUrl = parse_url($this->url);
        $this->prefix = $parseUrl['path'] ?? '';
    }

    private function addRoute($method, $route, $params = [])
    {
        foreach ($params as $key => $value) {
            if ($value instanceof \Closure) {
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }

        $patternRoute = '/^' . str_replace('/', '\/', $route) . '$/';
    }

    /**
     * Set a GET route
     * @param string $route
     * @param array $params
     * @return void
     */
    public function get($route, $params = [])
    {
        return $this->addRoute('GET', $route, $params);
    }
}