<?php

namespace Chxj1992\YimeiSms\Tests;

use Chxj1992\YimeiSms\App\Client;
use Chxj1992\YimeiSms\App\ClientFactory;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Client
     */
    private $client;

    public function setUp()
    {
        parent::setUp();

        $config = [
           'gwUrl' => getenv('GW_URL'),
           'serialNumber' => getenv('SERIAL_NUMBER'),
           'password' => getenv('PASSWORD '),
           'sessionKey' => getenv('SESSION_KEY'),
        ];

        $this->client = ClientFactory::instance($config);
    }

    public function testSendSms()
    {
        $statusCode = $this->client->sendSMS(array('15528285053'),"【睡呗科技】您收到的验证码为：123456，请在5分钟内完成验证");

        $this->assertEquals(0, $statusCode);
    }

}