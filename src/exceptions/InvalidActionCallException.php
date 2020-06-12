<?php

    namespace nox\base\exceptions;

    /**
     * Class InvalidActionCallException
     *
     * @package nox\base\exceptions
     */
    class InvalidActionCallException extends \BadMethodCallException
    {
        /**
         * @return string the user-friendly name of this exception
         */
        public function getName()
        {
            return 'Invalid Action Call';
        }
    }
