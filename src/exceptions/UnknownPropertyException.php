<?php

    namespace nyx\base\exceptions;

    /**
     * Class UnknownPropertyException
     *
     * @package nyx\base\exceptions
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
