<?php
namespace rusik\parser;

class Parser implements ParserInterface{

    public function process(string $url, string $tag){

        $htmlpage = file_get_contents($url);

        if($htmlpage == false){
            return ['Invalid URL'];
        } 
        preg_match_all('/<'.$tag.'.*?>(.*?)<\/'.$tag.'>/s', $htmlpage,$strings);

        if (empty($strings[1])){
            return ['There are no such tags on the page'];
        }
        return $strings[1];
    }
}