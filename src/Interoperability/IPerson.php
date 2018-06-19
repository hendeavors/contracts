<?php

namespace Endeavors\Contracts\Interoperability;

interface IPerson
{
    /**
     * The id of the person from the interoperable service
     * @return id
     */
    function id();

    /**
     * The persons verification status
     * @return string
     */
    function status();

    /**
     * The service for which this person belongs to
     * @return IService
     */
    function service();


}
