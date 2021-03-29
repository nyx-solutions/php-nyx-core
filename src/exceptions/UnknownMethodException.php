<?php

    namespace NYX\base\exceptions;

    /**
     * Class UnknownMethodException
     *
     * @package NYX\base\exceptions
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
