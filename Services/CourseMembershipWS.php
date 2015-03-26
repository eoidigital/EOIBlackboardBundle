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
}
