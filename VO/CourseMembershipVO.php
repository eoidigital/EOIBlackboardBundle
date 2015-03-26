<?php

namespace EOI\BlackboardBundle\VO;

/**
 * CourseMembershipVO
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class CourseMembershipVO
{
    private $available;
    private $courseId;
    private $dataSourceId;
    private $enrollmentDate;
    private $expansionData;
    private $hasCartridgeAccess;
    private $id;
    private $imageFile;
    private $roleId;
    private $userId;

    function __construct(
        $available = true,
        $courseId = "",
        $dataSourceId = "",
        $enrollmentDate = 0,
        $expansionData = array(),
        $hasCartridgeAccess = "",
        $id = "",
        $imageFile = "",
        $roleId = "",
        $userId = ""
    ) {
        $this->available = $available;
        $this->courseId = $courseId;
        $this->dataSourceId = $dataSourceId;
        $this->enrollmentDate = $enrollmentDate;
        $this->expansionData = $expansionData;
        $this->hasCartridgeAccess = $hasCartridgeAccess;
        $this->id = $id;
        $this->imageFile = $imageFile;
        $this->roleId = $roleId;
        $this->userId = $userId;
    }

    /**
     * @return boolean
     */
    public function isAvailable()
    {
        return $this->available;
    }

    /**
     * @param boolean $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return string
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * @param string $courseId
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }

    /**
     * @return string
     */
    public function getDataSourceId()
    {
        return $this->dataSourceId;
    }

    /**
     * @param string $dataSourceId
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->dataSourceId = $dataSourceId;
    }

    /**
     * @return string
     */
    public function getEnrollmentDate()
    {
        return $this->enrollmentDate;
    }

    /**
     * @param string $enrollmentDate
     */
    public function setEnrollmentDate($enrollmentDate)
    {
        $this->enrollmentDate = $enrollmentDate;
    }

    /**
     * @return array
     */
    public function getExpansionData()
    {
        return $this->expansionData;
    }

    /**
     * @param array $expansionData
     */
    public function setExpansionData($expansionData)
    {
        $this->expansionData = $expansionData;
    }

    /**
     * @return string
     */
    public function getHasCartridgeAccess()
    {
        return $this->hasCartridgeAccess;
    }

    /**
     * @param string $hasCartridgeAccess
     */
    public function setHasCartridgeAccess($hasCartridgeAccess)
    {
        $this->hasCartridgeAccess = $hasCartridgeAccess;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageFile
     */
    public function setImageFile($imageFile)
    {
        $this->imageFile = $imageFile;
    }

    /**
     * @return string
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param string $roleId
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
}
