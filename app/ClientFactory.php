<?php

namespace Chxj1992\YimeiSms\App;

class ClientFactory
{

    /**
     * @param array $config
     * @return Client
     */
    public static function instance(array $config)
    {

        /**
         * 网关地址
         */
        $gwUrl = !empty($config['gwUrl']) ? $config['gwUrl'] : '';

        /**
         * 序列号,请通过亿美销售人员获取
         */
        $serialNumber = !empty($config['serialNumber']) ? $config['serialNumber'] : '';

        /**
         * 密码,请通过亿美销售人员获取
         */
        $password = !empty($config['password']) ? $config['password'] : '';

        /**
         * 登录后所持有的SESSION KEY，即可通过login方法时创建
         */
        $sessionKey = !empty($config['sessionKey']) ? $config['sessionKey'] : '';


        /**
         * 连接超时时间，单位为秒
         */
        $connectTimeOut = !empty($config['connectTimeOut']) ? $config['connectTimeOut'] : 2;

        /**
         * 远程信息读取超时时间，单位为秒
         */
        $readTimeOut = !empty($config['connectTimeOut']) ? $config['connectTimeOut'] : 10;

        /**
         * $proxyHost        可选，代理服务器地址，默认为 false ,则不使用代理服务器
         * $proxyPort        可选，代理服务器端口，默认为 false
         * $proxyUsername    可选，代理服务器用户名，默认为 false
         * $proxyPassword    可选，代理服务器密码，默认为 false
         */
        $proxyHost = !empty($config['proxyHost']) ? $config['proxyHost'] : false;
        $proxyPort = !empty($config['proxyPort']) ? $config['proxyPort'] : false;
        $proxyUsername = !empty($config['proxyUsername']) ? $config['proxyUsername'] : false;
        $proxyPassword = !empty($config['proxyPassword']) ? $config['proxyPassword'] : false;
        /**
         * 短信内容编码
         */
        $outgoingEncoding = !empty($config['outgoingEncoding']) ? !empty($config['outgoingEncoding']) : "UTF-8";


        $client = new Client($gwUrl, $serialNumber, $password, $sessionKey, $proxyHost, $proxyPort, $proxyUsername, $proxyPassword, $connectTimeOut, $readTimeOut);

        $client->setOutgoingEncoding($outgoingEncoding);

        return $client;
    }

}