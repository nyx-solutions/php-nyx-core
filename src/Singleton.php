<?php

    namespace nyx\base;

    /**
     * Class Singleton
     *
     * @package nyx\base
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
        protected static ?Singleton $instance = null;

        /**
         * @return static
         *
         * @noinspection PhpUnused
         */
        public static function instance(): ?Singleton
        {
            if (is_null(static::$instance)) {
                static::$instance = new static();
            }

            return static::$instance;
        }
        #endregion
    }
