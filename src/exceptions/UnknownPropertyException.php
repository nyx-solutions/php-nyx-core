<?php

    namespace nox\base\exceptions;

    /**
     * Class UnknownPropertyException
     *
     * @package nox\base\exceptions
     */
    class UnknownPropertyException extends \BadMethodCallException
    {
        /**
         * @return string the user-friendly name of this exception
         */
        public function getName()
        {
            return 'Invalid Property';
        }
    }
