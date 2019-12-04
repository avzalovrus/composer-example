<?php
require_once 'ParserInterface.php';

class Parser implements ParserInterface{

    public function process(string $url, string $tag){

        return [
            'just',
            'do',
            'it'
        ];
    }
}