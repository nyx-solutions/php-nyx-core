<?php

    namespace nox\base\exceptions;

    /**
     * Class UnknownMethodException
     *
     * @package nox\base\exceptions
     */
    class UnknownMethodException extends \BadMethodCallException
    {
        /**
         * @return string the user-friendly name of this exception
         */
        public function getName()
        {
            return 'Invalid Method';
        }
    }
