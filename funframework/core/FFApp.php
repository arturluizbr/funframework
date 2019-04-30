<?php
namespace ff\core;

/**
 * Creates the base of Fun Framework APP, initiating router component and displaying specified component
 */
class FFApp {

    /**
     * Application name, may be used to search default app directory
     * @var string
     */
    private $appName;

    /**
     * Application directory
     */
    private $appDirectory;

    /**
     * Router Component used to display specific component
     * @var FFComponent
     */
    private $routerComponent;

    /**
     * FFApp Constructor
     * 
     * Initializes app's name and directory
     * 
     * @param string $appName Application name
     * @param string|null $appDirectory Application directory
     */
    function __construct(string $appName, string $appDirectory = null) {
        $this->setAppName($appName);
        $this->setAppDirectory($appDirectory);
    }

    /**
     * Sets app name
     * 
     * @param string $appName Application name
     * @return void
     */
    private function setAppName(string $appName) {
        $this->appName = $appName;
    }

    /**
     * Gets application name
     * 
     * @return string
     */
    public function getAppName() {
        return $this->appName;
    }

    /**
     * Sets application directory
     * 
     * @todo implementation
     * 
     * @param string|null $appDirectory Application directory
     * @return void
     */
    public function setAppDirectory(string $appDirectory) {

    }

}