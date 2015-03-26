<?php

namespace EOI\BlackboardBundle\VO;

/**
 * CourseVO
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class CourseVO
{
    private $allowGuests;
    private $allowObservers;
    private $available;
    private $batchUid;
    private $buttonStyleBbId;
    private $buttonStyleShape;
    private $buttonStyleType;
    private $cartridgeId;
    private $classificationId;
    private $courseDuration;
    private $courseId;
    private $coursePace;
    private $courseServiceLevel;
    private $dataSourceId;
    private $decAbsoluteLimit;
    private $description;
    private $endDate;
    private $enrollmentAccessCode;
    private $enrollmentEndDate;
    private $enrollmentStartDate;
    private $enrollmentType;
    private $expansionData;
    private $fee;
    private $hasDescriptionPage;
    private $id;
    private $institutionName;
    private $locale;
    private $localeEnforced;
    private $lockedOut;
    private $name;
    private $navCollapsable;
    private $navColorBg;
    private $navColorFg;
    private $navigationStyle;
    private $numberOfDaysOfUse;
    private $organization;
    private $showInCatalog;
    private $softLimit;
    private $startDate;
    private $uploadLimit;

    function __construct(
        $allowGuests = "",
        $allowObservers = "",
        $available = "",
        $batchUid = "",
        $buttonStyleBbId = "",
        $buttonStyleShape = "",
        $buttonStyleType = "",
        $cartridgeId = "",
        $classificationId = "",
        $courseDuration = "",
        $courseId = "",
        $coursePace = "",
        $courseServiceLevel = "",
        $dataSourceId = "",
        $decAbsoluteLimit = "",
        $description = "",
        $endDate = "",
        $enrollmentAccessCode = "",
        $enrollmentEndDate = "",
        $enrollmentStartDate = "",
        $enrollmentType = "",
        $expansionData = array(),
        $fee = "",
        $hasDescriptionPage = "",
        $id = "",
        $institutionName = "",
        $locale = "",
        $localeEnforced = "",
        $lockedOut = "",
        $name = "",
        $navCollapsable = "",
        $navColorBg = "",
        $navColorFg = "",
        $navigationStyle = "",
        $numberOfDaysOfUse = "",
        $organization = "",
        $showInCatalog = "",
        $softLimit = "",
        $startDate = "",
        $uploadLimit = ""
    ) {
        $this->allowGuests = $allowGuests;
        $this->allowObservers = $allowObservers;
        $this->available = $available;
        $this->batchUid = $batchUid;
        $this->buttonStyleBbId = $buttonStyleBbId;
        $this->buttonStyleShape = $buttonStyleShape;
        $this->buttonStyleType = $buttonStyleType;
        $this->cartridgeId = $cartridgeId;
        $this->classificationId = $classificationId;
        $this->courseDuration = $courseDuration;
        $this->courseId = $courseId;
        $this->coursePace = $coursePace;
        $this->courseServiceLevel = $courseServiceLevel;
        $this->dataSourceId = $dataSourceId;
        $this->decAbsoluteLimit = $decAbsoluteLimit;
        $this->description = $description;
        $this->endDate = $endDate;
        $this->enrollmentAccessCode = $enrollmentAccessCode;
        $this->enrollmentEndDate = $enrollmentEndDate;
        $this->enrollmentStartDate = $enrollmentStartDate;
        $this->enrollmentType = $enrollmentType;
        $this->expansionData = $expansionData;
        $this->fee = $fee;
        $this->hasDescriptionPage = $hasDescriptionPage;
        $this->id = $id;
        $this->institutionName = $institutionName;
        $this->locale = $locale;
        $this->localeEnforced = $localeEnforced;
        $this->lockedOut = $lockedOut;
        $this->name = $name;
        $this->navCollapsable = $navCollapsable;
        $this->navColorBg = $navColorBg;
        $this->navColorFg = $navColorFg;
        $this->navigationStyle = $navigationStyle;
        $this->numberOfDaysOfUse = $numberOfDaysOfUse;
        $this->organization = $organization;
        $this->showInCatalog = $showInCatalog;
        $this->softLimit = $softLimit;
        $this->startDate = $startDate;
        $this->uploadLimit = $uploadLimit;
    }

    /**
     * @return string
     */
    public function getAllowGuests()
    {
        return $this->allowGuests;
    }

    /**
     * @param string $allowGuests
     */
    public function setAllowGuests($allowGuests)
    {
        $this->allowGuests = $allowGuests;
    }

    /**
     * @return string
     */
    public function getAllowObservers()
    {
        return $this->allowObservers;
    }

    /**
     * @param string $allowObservers
     */
    public function setAllowObservers($allowObservers)
    {
        $this->allowObservers = $allowObservers;
    }

    /**
     * @return string
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param string $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return string
     */
    public function getBatchUid()
    {
        return $this->batchUid;
    }

    /**
     * @param string $batchUid
     */
    public function setBatchUid($batchUid)
    {
        $this->batchUid = $batchUid;
    }

    /**
     * @return string
     */
    public function getButtonStyleBbId()
    {
        return $this->buttonStyleBbId;
    }

    /**
     * @param string $buttonStyleBbId
     */
    public function setButtonStyleBbId($buttonStyleBbId)
    {
        $this->buttonStyleBbId = $buttonStyleBbId;
    }

    /**
     * @return string
     */
    public function getButtonStyleShape()
    {
        return $this->buttonStyleShape;
    }

    /**
     * @param string $buttonStyleShape
     */
    public function setButtonStyleShape($buttonStyleShape)
    {
        $this->buttonStyleShape = $buttonStyleShape;
    }

    /**
     * @return string
     */
    public function getButtonStyleType()
    {
        return $this->buttonStyleType;
    }

    /**
     * @param string $buttonStyleType
     */
    public function setButtonStyleType($buttonStyleType)
    {
        $this->buttonStyleType = $buttonStyleType;
    }

    /**
     * @return string
     */
    public function getCartridgeId()
    {
        return $this->cartridgeId;
    }

    /**
     * @param string $cartridgeId
     */
    public function setCartridgeId($cartridgeId)
    {
        $this->cartridgeId = $cartridgeId;
    }

    /**
     * @return string
     */
    public function getClassificationId()
    {
        return $this->classificationId;
    }

    /**
     * @param string $classificationId
     */
    public function setClassificationId($classificationId)
    {
        $this->classificationId = $classificationId;
    }

    /**
     * @return string
     */
    public function getCourseDuration()
    {
        return $this->courseDuration;
    }

    /**
     * @param string $courseDuration
     */
    public function setCourseDuration($courseDuration)
    {
        $this->courseDuration = $courseDuration;
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
    public function getCoursePace()
    {
        return $this->coursePace;
    }

    /**
     * @param string $coursePace
     */
    public function setCoursePace($coursePace)
    {
        $this->coursePace = $coursePace;
    }

    /**
     * @return string
     */
    public function getCourseServiceLevel()
    {
        return $this->courseServiceLevel;
    }

    /**
     * @param string $courseServiceLevel
     */
    public function setCourseServiceLevel($courseServiceLevel)
    {
        $this->courseServiceLevel = $courseServiceLevel;
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
    public function getDecAbsoluteLimit()
    {
        return $this->decAbsoluteLimit;
    }

    /**
     * @param string $decAbsoluteLimit
     */
    public function setDecAbsoluteLimit($decAbsoluteLimit)
    {
        $this->decAbsoluteLimit = $decAbsoluteLimit;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getEnrollmentAccessCode()
    {
        return $this->enrollmentAccessCode;
    }

    /**
     * @param string $enrollmentAccessCode
     */
    public function setEnrollmentAccessCode($enrollmentAccessCode)
    {
        $this->enrollmentAccessCode = $enrollmentAccessCode;
    }

    /**
     * @return string
     */
    public function getEnrollmentEndDate()
    {
        return $this->enrollmentEndDate;
    }

    /**
     * @param string $enrollmentEndDate
     */
    public function setEnrollmentEndDate($enrollmentEndDate)
    {
        $this->enrollmentEndDate = $enrollmentEndDate;
    }

    /**
     * @return string
     */
    public function getEnrollmentStartDate()
    {
        return $this->enrollmentStartDate;
    }

    /**
     * @param string $enrollmentStartDate
     */
    public function setEnrollmentStartDate($enrollmentStartDate)
    {
        $this->enrollmentStartDate = $enrollmentStartDate;
    }

    /**
     * @return string
     */
    public function getEnrollmentType()
    {
        return $this->enrollmentType;
    }

    /**
     * @param string $enrollmentType
     */
    public function setEnrollmentType($enrollmentType)
    {
        $this->enrollmentType = $enrollmentType;
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
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param string $fee
     */
    public function setFee($fee)
    {
        $this->fee = $fee;
    }

    /**
     * @return string
     */
    public function getHasDescriptionPage()
    {
        return $this->hasDescriptionPage;
    }

    /**
     * @param string $hasDescriptionPage
     */
    public function setHasDescriptionPage($hasDescriptionPage)
    {
        $this->hasDescriptionPage = $hasDescriptionPage;
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
    public function getInstitutionName()
    {
        return $this->institutionName;
    }

    /**
     * @param string $institutionName
     */
    public function setInstitutionName($institutionName)
    {
        $this->institutionName = $institutionName;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getLocaleEnforced()
    {
        return $this->localeEnforced;
    }

    /**
     * @param string $localeEnforced
     */
    public function setLocaleEnforced($localeEnforced)
    {
        $this->localeEnforced = $localeEnforced;
    }

    /**
     * @return string
     */
    public function getLockedOut()
    {
        return $this->lockedOut;
    }

    /**
     * @param string $lockedOut
     */
    public function setLockedOut($lockedOut)
    {
        $this->lockedOut = $lockedOut;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNavCollapsable()
    {
        return $this->navCollapsable;
    }

    /**
     * @param string $navCollapsable
     */
    public function setNavCollapsable($navCollapsable)
    {
        $this->navCollapsable = $navCollapsable;
    }

    /**
     * @return string
     */
    public function getNavColorBg()
    {
        return $this->navColorBg;
    }

    /**
     * @param string $navColorBg
     */
    public function setNavColorBg($navColorBg)
    {
        $this->navColorBg = $navColorBg;
    }

    /**
     * @return string
     */
    public function getNavColorFg()
    {
        return $this->navColorFg;
    }

    /**
     * @param string $navColorFg
     */
    public function setNavColorFg($navColorFg)
    {
        $this->navColorFg = $navColorFg;
    }

    /**
     * @return string
     */
    public function getNavigationStyle()
    {
        return $this->navigationStyle;
    }

    /**
     * @param string $navigationStyle
     */
    public function setNavigationStyle($navigationStyle)
    {
        $this->navigationStyle = $navigationStyle;
    }

    /**
     * @return string
     */
    public function getNumberOfDaysOfUse()
    {
        return $this->numberOfDaysOfUse;
    }

    /**
     * @param string $numberOfDaysOfUse
     */
    public function setNumberOfDaysOfUse($numberOfDaysOfUse)
    {
        $this->numberOfDaysOfUse = $numberOfDaysOfUse;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param string $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * @return string
     */
    public function getShowInCatalog()
    {
        return $this->showInCatalog;
    }

    /**
     * @param string $showInCatalog
     */
    public function setShowInCatalog($showInCatalog)
    {
        $this->showInCatalog = $showInCatalog;
    }

    /**
     * @return string
     */
    public function getSoftLimit()
    {
        return $this->softLimit;
    }

    /**
     * @param string $softLimit
     */
    public function setSoftLimit($softLimit)
    {
        $this->softLimit = $softLimit;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getUploadLimit()
    {
        return $this->uploadLimit;
    }

    /**
     * @param string $uploadLimit
     */
    public function setUploadLimit($uploadLimit)
    {
        $this->uploadLimit = $uploadLimit;
    }
}