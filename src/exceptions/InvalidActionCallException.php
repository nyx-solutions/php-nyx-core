<?php

    namespace NYX\base\exceptions;

    /**
     * Class InvalidActionCallException
     *
     * @package NYX\base\exceptions
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
