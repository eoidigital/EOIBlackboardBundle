<?php

namespace EOI\BlackboardBundle\Services;

/**
 * CourseWS
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class CourseWS
{
    private $wsLocator;

    public function __construct(
        WSLocator $wsLocator
    ) {
        $this->wsLocator = $wsLocator;
    }

    public function getCourse($eoiCourseId, $filterType = 1, $available = true) {
        $client = $this->wsLocator->getClient();
        $course = [
            "filter"=> [
                "filterType"=> $filterType,
                'courseIds'=> $eoiCourseId,
                'available' => $available
            ]
        ];

        return $client->getCourse($course);
    }
}
