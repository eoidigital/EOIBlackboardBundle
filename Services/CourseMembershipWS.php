<?php

namespace EOI\BlackboardBundle\Services;

use EOI\BlackboardBundle\VO\CourseMembershipVO;

/**
 * CourseMembershipWS
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class CourseMembershipWS
{
    private $wsLocator;

    public function __construct(
        WSLocator $wsLocator
    ) {
        $this->wsLocator = $wsLocator;
    }

    public function getCourseMembership($courseId, $userId, $filterType = 6) {
        $client = $this->wsLocator->getClient();

        $data = [
            'courseId' => $courseId,
            "f" => [
                'filterType' => $filterType,
                'userIds' => $userId,
                'courseIds' => $courseId,
            ]
        ];

        return $client->getCourseMembership($data);
    }

    public function saveCourseMembership($courseId, CourseMembershipVO $courseMembershipVO) {
        $client = $this->wsLocator->getClient();

        $enrollData = [
            'courseId' => $courseId,
            "cmArray" => [
                $courseMembershipVO
            ]
        ];

        return $client->saveCourseMembership($enrollData);
    }

    public function deleteCourseMembership($courseId, $ids) {
        $client = $this->wsLocator->getClient();

        $data = [
            'courseId' => $courseId,
            "ids" => $ids,
        ];

        return $client->deleteCourseMembership($data);
    }
}
