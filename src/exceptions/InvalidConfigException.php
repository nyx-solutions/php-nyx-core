<?php

    namespace nox\base\exceptions;

    /**
     * Class InvalidConfigException
     *
     * @package nox\base\exceptions
     */
    class InvalidConfigException extends \Exception
    {
        /**
         * @return string the user-friendly name of this exception
         */
        public function getName()
        {
            return 'Invalid Configuration';
        }
    }
