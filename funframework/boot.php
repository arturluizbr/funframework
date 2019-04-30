<?php

class FFAutoloader {

    /**
     * Valid namespace name regex
     * 
     * @var string
     */
    private $phpValidNamespaceRegex = '[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*';

    private $classExtension = '.php';

    /**
     * @todo DOC
     */
    public function loadClass(string $className) {
        $namespaceSegmentRegex = '/('.$this->phpValidNamespaceRegex.')+/i';
        echo $namespaceSegmentRegex."\n";
        preg_match_all($namespaceSegmentRegex, $className, $namespaceSegments);
        if(isset($namespaceSegments[0]) && isset($namespaceSegments[0][0]) && $namespaceSegments[0][0]=='ff') {
            print_r($namespaceSegments);
        }
    }


    /**
     * @todo DOC
     */
    private function isFFClass() {


        return true;
    }

}

$autoloader = new FFAutoloader();

spl_autoload_register(array($autoloader, 'loadClass'));