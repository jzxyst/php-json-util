<?php
namespace Jzxyst\Test;

use PHPUnit\Framework\TestCase;

class JsonTest extends TestCase
{
    public function test_convertJsonpToJson()
    {
        $jsonp = 'callback({"err": 0,"key": ["0","1","2"]})';
        $json = \Jzxyst\Json::convertJsonpToJson($jsonp);
        $array = json_decode($json, true);
        $this->assertEquals('{"err": 0,"key": ["0","1","2"]}', $json);
        $this->assertEquals('0', $array['err']);
        $this->assertEquals('0', $array['key'][0]);
        $this->assertEquals('1', $array['key'][1]);
        $this->assertEquals('2', $array['key'][2]);
    }
}