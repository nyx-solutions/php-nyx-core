<?php

    namespace nyx\base\exceptions;

    /**
     * Class UnknownMethodException
     *
     * @package nyx\base\exceptions
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
