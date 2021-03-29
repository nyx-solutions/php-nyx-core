<?php

    namespace nyx\base\exceptions;

    /**
     * Class InvalidCallException
     *
     * @package nyx\base\exceptions
     */
    class InvalidCallException extends \BadMethodCallException
    {
        /**
         * @return string the user-friendly name of this exception
         */
        public function getName()
        {
            return 'Invalid Call';
        }
    }
