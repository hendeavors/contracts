<?php

namespace Endeavors\Contracts\Interoperability;

interface IService
{
    /**
     * The display name of the interoperable service
     * @return string
     */
    function name();

    /**
     * The key or identifier of the interoperable service
     * @return string
     */
    function identifier();
}
