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
     * Does this person have a valid id?
     * @return bool
     */
    function hasId();

    /**
     * The service for which this person belongs to
     * @return IService
     */
    function service();
}
