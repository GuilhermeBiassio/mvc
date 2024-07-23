<?php

namespace App\Http;

class Response
{
    /**
     * Status code
     * @var int
     */
    private $httpCode = 200;

    /**
     * Response header
     * @var array
     */
    private $headers = [];

    /**
     * Content type
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Response content
     * @var mixed
     */
    private $content;

    /**
     * @param integer $httpCode
     * @param mixed $content
     * @param string $contentType
     */
    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    /**
     * Change Response content type
     * @param string $contentType
     * @return void
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Add a header response register
     * @param string $key
     * @param string $value
     * @return void
     */
    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    /**
     * Send headers to the browser
     * @return void
     */
    private function sendHeaders()
    {
        http_response_code($this->httpCode);

        foreach ($this->headers as $key => $value) {
            header($key . ': ' . $value);
        }
    }

    /**
     * Send response user
     */
    public function sendResponse()
    {
        $this->sendHeaders();
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}