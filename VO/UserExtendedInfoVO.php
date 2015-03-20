<?php

namespace EOI\BlackboardBundle\VO;

/**
 * UserExtendedInfoVO
 *
 * @author Jon González <jon.gonzalez@eoi.es>
 *
 * @copyright 2015 Fundación EOI.
 */
class UserExtendedInfoVO
{
    private $businessFax;
    private $businessPhone1;
    private $businessPhone2;
    private $city;
    private $company;
    private $country;
    private $department;
    private $emailAddress;
    private $expansionData;
    private $familyName;
    private $givenName;
    private $homeFax;
    private $homePhone1;
    private $homePhone2;
    private $jobTitle;
    private $middleName;
    private $mobilePhone;
    private $state;
    private $street1;
    private $street2;
    private $webPage;
    private $zipCode;

    function __construct(
        $businessFax = "",
        $businessPhone1 = "",
        $businessPhone2 = "",
        $city = "",
        $company = "",
        $country = "",
        $department = "",
        $emailAddress = "",
        $expansionData = array(),
        $familyName = "",
        $givenName = "",
        $homeFax = "",
        $homePhone1 = "",
        $homePhone2 = "",
        $jobTitle = "",
        $middleName = "",
        $mobilePhone = "",
        $state = "",
        $street1 = "",
        $street2 = "",
        $webPage = "",
        $zipCode = ""
    ) {
        $this->businessFax = $businessFax;
        $this->businessPhone1 = $businessPhone1;
        $this->businessPhone2 = $businessPhone2;
        $this->city = $city;
        $this->company = $company;
        $this->country = $country;
        $this->department = $department;
        $this->emailAddress = $emailAddress;
        $this->expansionData = $expansionData;
        $this->familyName = $familyName;
        $this->givenName = $givenName;
        $this->homeFax = $homeFax;
        $this->homePhone1 = $homePhone1;
        $this->homePhone2 = $homePhone2;
        $this->jobTitle = $jobTitle;
        $this->middleName = $middleName;
        $this->mobilePhone = $mobilePhone;
        $this->state = $state;
        $this->street1 = $street1;
        $this->street2 = $street2;
        $this->webPage = $webPage;
        $this->zipCode = $zipCode;
    }

    /**
     * @return mixed
     */
    public function getBusinessFax()
    {
        return $this->businessFax;
    }

    /**
     * @param mixed $businessFax
     */
    public function setBusinessFax($businessFax)
    {
        $this->businessFax = $businessFax;
    }

    /**
     * @return mixed
     */
    public function getBusinessPhone1()
    {
        return $this->businessPhone1;
    }

    /**
     * @param mixed $businessPhone1
     */
    public function setBusinessPhone1($businessPhone1)
    {
        $this->businessPhone1 = $businessPhone1;
    }

    /**
     * @return mixed
     */
    public function getBusinessPhone2()
    {
        return $this->businessPhone2;
    }

    /**
     * @param mixed $businessPhone2
     */
    public function setBusinessPhone2($businessPhone2)
    {
        $this->businessPhone2 = $businessPhone2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param mixed $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
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
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @param mixed $familyName
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param mixed $givenName
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * @return mixed
     */
    public function getHomeFax()
    {
        return $this->homeFax;
    }

    /**
     * @param mixed $homeFax
     */
    public function setHomeFax($homeFax)
    {
        $this->homeFax = $homeFax;
    }

    /**
     * @return mixed
     */
    public function getHomePhone1()
    {
        return $this->homePhone1;
    }

    /**
     * @param mixed $homePhone1
     */
    public function setHomePhone1($homePhone1)
    {
        $this->homePhone1 = $homePhone1;
    }

    /**
     * @return mixed
     */
    public function getHomePhone2()
    {
        return $this->homePhone2;
    }

    /**
     * @param mixed $homePhone2
     */
    public function setHomePhone2($homePhone2)
    {
        $this->homePhone2 = $homePhone2;
    }

    /**
     * @return mixed
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param mixed $jobTitle
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * @return mixed
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param mixed $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * @return mixed
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param mixed $mobilePhone
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param mixed $street1
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    }

    /**
     * @return mixed
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param mixed $street2
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    /**
     * @return mixed
     */
    public function getWebPage()
    {
        return $this->webPage;
    }

    /**
     * @param mixed $webPage
     */
    public function setWebPage($webPage)
    {
        $this->webPage = $webPage;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param mixed $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }


}