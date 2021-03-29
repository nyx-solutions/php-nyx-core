<?php

    namespace nyx\base\exceptions;

    /**
     * Class DbTransactionException
     *
     * @package nyx\base\exceptions
     */
    class DbTransactionException extends \Exception
    {
        /**
         * @return string the user-friendly name of this exception
         */
        public function getName()
        {
            return 'DB Transaction Exception.';
        }
    }
