<?php

class Logger
{
    private static $instance;
    private $logFilePath;

    
    private function __construct($logFilePath)
    {
        $this->logFilePath = $logFilePath;
    }

    
    public static function getInstance($logFilePath): Logger
    {
        if (!self::$instance) {
            self::$instance = new static($logFilePath);
        }
        return self::$instance;
    }

    
    public function log($message)
    {
        $logMessage = "[" . date("Y-m-d H:i:s") . "] " . $message . PHP_EOL;
        file_put_contents($this->logFilePath, $logMessage, FILE_APPEND);
    }

    
    public function clearLog()
    {
        file_put_contents($this->logFilePath, "");
    }

    
    public function getLogFilePath()
    {
        return $this->logFilePath;
    }
}
