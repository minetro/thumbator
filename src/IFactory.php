<?php

namespace Thumbator;

/**
 * Thumbator service factory interface
 *
 * @version 1.0.0
 * @author Milan Felix Sulc <rkfelix@gmail.com>
 */
interface IFactory
{

    /**
     * @return Service
     */
    function create();
}