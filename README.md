# yimei-sms

亿美短信（5.0）客户端

#### 安装

```bash
$ composer require chxj1992/yimei-sms:1.0
```

#### examples

```php

<?php

    $config = [
        'gwUrl' => 'http://sdk4rptws.eucp.b2m.cn:8080/sdk/SDKService',
        'serialNumber' => '6SDK-EMY-6688-AAAAA',
        'password' => '123456',
        'sessionKey' => '123456',
    ];
        
    $client = Chxj1992\YimeiSms\App\ClientFactory::instance($config);
    
    $client->sendSMS(array('15528280000'),"短信内容")

```

更多细节请参见 [Client Class](https://github.com/chxj1992/yimei-sms/blob/master/app/Client.php)
