<?php

namespace EOI\BlackboardBundle\Services;

/**
 * UserWS
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class UserWS
{
    private $wsLocator;

    public function __construct(
        WSLocator $wsLocator
    ) {
        $this->wsLocator = $wsLocator;
    }

    public function getUser($username, $filterType = 6, $available = true) {
        $client = $this->wsLocator->getClient();
        $user =  [
            "name" => $username,
            "filter"=> [
                "filterType"=> $filterType,
                "name"=> $username,
                "available" => $available
            ]
        ];

        return $client->getUser($user);
    }

    public function saveUser($userVO) {
        $client = $this->wsLocator->getClient();

        return $client->saveUser($userVO);
    }

    public function deleteUser($userId) {
        $client = $this->wsLocator->getClient();

        $data = [
            "userId" => $userId
        ];

        return $client->deleteUser($data);
    }
}
