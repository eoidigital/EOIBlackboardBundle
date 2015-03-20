<?php

namespace EOI\BlackboardBundle\VO;

/**
 * UserVO
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class UserVO
{
    private $birthDate;
    private $dataSourceId;
    private $educationLevel;
    private $expansionData;
    private $extendedInfo;
    private $genderType;
    private $id;
    private $insRoles;
    private $isAvailable;
    private $name;
    private $password;
    private $studentId;
    private $systemRoles;
    private $title;
    private $userBatchUid;

    function __construct(
        $dataSourceId = "",
        $birthDate = "",
        $educationLevel = "",
        $expansionData = array(),
        $extendedInfo = "",
        $genderType = "",
        $id = "",
        $insRoles = array(),
        $isAvailable = "",
        $name = "",
        $password = "",
        $studentId = "",
        $systemRoles = array(),
        $title = "",
        $userBatchUid = ""
    ) {
        $this->dataSourceId = $dataSourceId;
        $this->birthDate = $birthDate;
        $this->educationLevel = $educationLevel;
        $this->expansionData = $expansionData;
        $this->extendedInfo = $extendedInfo;
        $this->genderType = $genderType;
        $this->id = $id;
        $this->insRoles = $insRoles;
        $this->isAvailable = $isAvailable;
        $this->name = $name;
        $this->password = $password;
        $this->studentId = $studentId;
        $this->systemRoles = $systemRoles;
        $this->title = $title;
        $this->userBatchUid = $userBatchUid;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getDataSourceId()
    {
        return $this->dataSourceId;
    }

    /**
     * @param mixed $dataSourceId
     */
    public function setDataSourceId($dataSourceId)
    {
        $this->dataSourceId = $dataSourceId;
    }

    /**
     * @return mixed
     */
    public function getEducationLevel()
    {
        return $this->educationLevel;
    }

    /**
     * @param mixed $educationLevel
     */
    public function setEducationLevel($educationLevel)
    {
        $this->educationLevel = $educationLevel;
    }

    /**
     * @return mixed
     */
    public function getExpansionData()
    {
        return $this->expansionData;
    }

    /**
     * @param mixed $expansionData
     */
    public function setExpansionData($expansionData)
    {
        $this->expansionData = $expansionData;
    }

    /**
     * @return mixed
     */
    public function getExtendedInfo()
    {
        return $this->extendedInfo;
    }

    /**
     * @param mixed $extendedInfo
     */
    public function setExtendedInfo($extendedInfo)
    {
        $this->extendedInfo = $extendedInfo;
    }

    /**
     * @return mixed
     */
    public function getGenderType()
    {
        return $this->genderType;
    }

    /**
     * @param mixed $genderType
     */
    public function setGenderType($genderType)
    {
        $this->genderType = $genderType;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getInsRoles()
    {
        return $this->insRoles;
    }

    /**
     * @param mixed $insRoles
     */
    public function setInsRoles($insRoles)
    {
        $this->insRoles = $insRoles;
    }

    /**
     * @return mixed
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * @param mixed $isAvailable
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @param mixed $studentId
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    /**
     * @return mixed
     */
    public function getSystemRoles()
    {
        return $this->systemRoles;
    }

    /**
     * @param mixed $systemRoles
     */
    public function setSystemRoles($systemRoles)
    {
        $this->systemRoles = $systemRoles;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getUserBatchUid()
    {
        return $this->userBatchUid;
    }

    /**
     * @param mixed $userBatchUid
     */
    public function setUserBatchUid($userBatchUid)
    {
        $this->userBatchUid = $userBatchUid;
    }


}