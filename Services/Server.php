<?php

namespace EOI\BlackboardBundle\Services;

use BeSimple\SoapClient\SoapClient;
use BeSimple\SoapClient\WsSecurityFilter as BeSimpleWsSecurityFilter;

/**
 * Server
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class Server
{
    private $client;
    private $proxyTool;
    private $session_id;

    public function __construct(
        SoapClient $client,
        array $proxyTool
    ) {
        $this->client = $client;
        $this->proxyTool = $proxyTool;
        $this->initialize();
        $this->login();
    }

    public function initialize() {
        $this->buildHeader();
        $this->session_id = $this->client->initialize();
    }

    public function login()
    {
        $this->buildHeader();
        $this->client->loginTool($this->proxyTool);
    }

    public function getSessionId()
    {
        return $this->session_id;
    }

    public function setSessionId($session)
    {
        $this->session_id = $session;
    }

    private function buildHeader()
    {
        if (empty($this->session_id)) {
            $password = 'nosession';
        } else {
            $password = $this->session_id->return;
        }

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
