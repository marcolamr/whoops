<?php

namespace MarcolaMr\Whoops;

use Whoops\Handler\JsonResponseHandler;
use Whoops\Handler\PlainTextHandler;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\XmlResponseHandler;
use Whoops\Run;

class ErrorHandler
{
    /** @var string */
    private $handler;

    /** @var Run */
    private $whoops;

    /** @var PrettyPageHandler | JsonResponseHandler | XmlResponseHandler | PlainTextHandler */
    private $errorHandler;
    
    public function __construct($handler = "html", string $pageTitle = "Whoops! There was an error.", array $data = [])
    {
        $this->handler = $handler;
        $this->whoops = new Run();
        $this->setHandler();
        $this->setPageTitle($pageTitle);
        $this->setData("Extra Information", $data);
        $this->register();
    }

    private function register()
    {
        $this->whoops->pushHandler($this->errorHandler);
        $this->whoops->register();
    }

    private function setPageTitle(string $pageTitle): void
    {
        if ($this->handler === "html" && !empty($pageTitle)) {
            $this->errorHandler->setPageTitle($pageTitle);
        }
    }

    private function setData(string $label, array $data): void
    {
        if ($this->handler === "html" && !empty($label) && !empty($data)) {
            $this->errorHandler->addDataTable($label, $data);
        }
    }

    private function setHandler(): void
    {
        switch ($this->handler) {
            case 'json':
                $this->errorHandler = new JsonResponseHandler();
                break;

            case 'xml':
                $this->errorHandler = new XmlResponseHandler();
                break;

            case 'txt':
                $this->errorHandler = new PlainTextHandler();
                break;

            default:
                $this->errorHandler = new PrettyPageHandler();
                break;
        }
    }
}
