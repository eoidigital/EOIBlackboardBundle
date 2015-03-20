<?php

namespace EOI\BlackboardBundle\Services;

use BeSimple\SoapClient\SoapClient;
use BeSimple\SoapClient\WsSecurityFilter as BeSimpleWsSecurityFilter;

/**
 * UserWSLocator
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class UserWSLocator
{
    private $client;
    private $server;

    public function __construct(
        SoapClient $client,
        Server $server
    ) {
        $this->client = $client;
        $this->server = $server;
        $this->buildHeader();
    }

    public function getClient()
    {
        return $this->client;
    }

    public function buildHeader()
    {
        $password = $this->server->getSessionId()->return;
        $this->setHeader($password);
    }

    private function setHeader($password)
    {
        $wssFilter = new BeSimpleWsSecurityFilter(true, 600);
        $wssFilter->addUserData('session', $password, BeSimpleWsSecurityFilter::PASSWORD_TYPE_TEXT);
        $soapKernel = $this->client->getSoapKernel();
        $soapKernel->registerFilter($wssFilter);
    }
}
