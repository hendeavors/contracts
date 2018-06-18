<?php

namespace Endeavors\Contracts\Interoperability;

interface IRegister
{
    /**
     * @param string directDomain
     * @param string directUsername
     * @param string directPassword
     * @return IRegister
     */
    function ProvisionIDProofedPatient($directDomain, $request, $directUsername, $directPassword);

    /**
     * @param String directDomain
     * @param $request
     * @return IRegister
     */
    function GetPatientAddressByMeta($directDomain, $request);

    /**
     * @param string directDomain
     * @param string directUsername
     * @return IRegister
     */
    function GetPatientAddressByUsername ($directDomain, $directUsername);

    /**
     * return a raw response from the service
     */
    function Raw();
}
