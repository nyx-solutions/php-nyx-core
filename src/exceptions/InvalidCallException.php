<?php

    namespace NYX\base\exceptions;

    /**
     * Class InvalidCallException
     *
     * @package NYX\base\exceptions
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
