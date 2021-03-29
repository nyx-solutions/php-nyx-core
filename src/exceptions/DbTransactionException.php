<?php

    namespace NYX\base\exceptions;

    /**
     * Class DbTransactionException
     *
     * @package NYX\base\exceptions
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
