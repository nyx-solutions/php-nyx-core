<?php

    namespace nox\base;

    /**
     * Class Singleton
     *
     * @package nox\base
     */
    class Singleton
    {
        use ObjectTrait;

        #region Initialization
        /**
         * Singleton constructor.
         */
        private function __construct()
        {
        }
        #endregion

        #region Instance
        /**
         * @var Singleton|null
         */
        private static ?Singleton $_instance = null;

        /**
         * @return static
         */
        public static function instance()
        {
            if (is_null(self::$_instance)) {
                self::$_instance = new static();
            }

            return self::$_instance;
        }
        #endregion
    }
