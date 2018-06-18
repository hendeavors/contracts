<?php

namespace Endeavors\Contracts\Interoperability;

interface IAuthenticate
{
    /**
     * @return IAuthenticate
     */
    function Login($username, $password);

    /**
     * void
     */
    function Logout();
}
