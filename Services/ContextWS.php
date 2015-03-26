<?php

namespace EOI\BlackboardBundle\Services;

/**
 * ContextWS
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class ContextWS
{
    private $wsLocator;

    public function __construct(
        WSLocator $wsLocator
    ) {
        $this->wsLocator = $wsLocator;
    }

    public function getMemberships($userBatchUid) {
        $client = $this->wsLocator->getClient();

        $data = [
            "userid" => $userBatchUid
        ];

        return $client->getMemberships($data);
    }
}
