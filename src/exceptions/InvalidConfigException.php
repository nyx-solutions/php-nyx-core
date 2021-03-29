<?php

    namespace nyx\base\exceptions;

    /**
     * Class InvalidConfigException
     *
     * @package nyx\base\exceptions
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
