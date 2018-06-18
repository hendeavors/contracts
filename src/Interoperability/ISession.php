<?php

namespace Endeavors\Contracts\Interoperability;

/**
 * Handle the maxmd api session
 */
interface ISession
{
    /**
     * The session id
     * @return string
     */
    function Id();

    /**
     * The login time in minutes
     * @todo create a more elegant api for time conversion
     */
    function LoginTime();

    /**
     * The expire time in minutes
     */
    function ExpiresAt();

    /**
     * The expire time in minutes
     */
    function ExpiresIn();

    /**
     * Is now greater than the login time plus 10 minutes
     * @return bool
     */
    function Expired();

    /**
     * Expire the session
     */
    function Expire();

    /**
     * Alias
     * @see Active
     */
    function Valid();

    /**
     * We are not expired
     */
    function Active();
}
