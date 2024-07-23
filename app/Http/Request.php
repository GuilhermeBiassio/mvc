<?php

namespace App\Http;

class Request
{
    /**
     * HTTP method
     * @var string
     */
    private $httpMethod;

    /**
     * page URI
     * @var string
     */
    private $uri;

    /**
     * URL parameters ($_GET)
     * @var array
     */
    private $queryParams = [];

    /**
     * page POST variables ($_POST)
     * @var array
     */
    private $postVars = [];

    /**
     * Request headers
     * @var array
     */
    private $headers = [];

    public function __construct()
    {
        $this->httpMethod = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
    }

    /**
     * Returns request HTTP method
     * @return mixed|string
     */
    public function getHttpMethod(): mixed
    {
        return $this->httpMethod;
    }

    /**
     * Returns request URI
     * @return mixed|string
     */
    public function getUri(): mixed
    {
        return $this->uri;
    }

    /**
     * Returns request headers
     * @return array|false
     */
    public function getHeaders(): false|array
    {
        return $this->headers;
    }

    /**
     * Returns request URL query parameters
     * @return array
     */
    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    /**
     * Returns request POST variables
     * @return array
     */
    public function getPostVars(): array
    {
        return $this->postVars;
    }
}