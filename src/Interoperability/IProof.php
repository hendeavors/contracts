<?php

namespace Endeavors\Contracts\Interoperability;

interface IProof
{
    /**
     * @param $request
     * @param autsentotp (One Time Password)
     * @return IProof
     */
    function VerifyAndAuthenticate($request, $autoSendOTP = false);

    /**
     * @param $request
     * @return IProof
     */
    function VerifyOneTimePassword($request);

    /**
     * @param $request
     * @return IProof
     */
    function GenerateOneTimePassword($request);

    /**
     * @param $request
     * @return IProof
     */
    function VerifyCreditCard($request);

    /**
     * return a raw response from the service
     */
    function Raw();
}
