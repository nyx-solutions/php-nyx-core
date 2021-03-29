<?php

    namespace NYX\base\exceptions;

    /**
     * Class UnknownPropertyException
     *
     * @package NYX\base\exceptions
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
