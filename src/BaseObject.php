<?php

    namespace nyx\base;

    /**
     * Class BaseObject
     *
     * @package nyx\base
     */
    class BaseObject
    {
        use ObjectTrait;

        /**
         * Constructor.
         * The default implementation does two things:
         *
         * - Initializes the object with the given configuration `$config`.
         * - Call [[init()]].
         *
         * If this method is overridden in a child class, it is recommended that
         *
         * - the last parameter of the constructor is a configuration array, like `$config` here.
         * - call the parent implementation at the end of the constructor.
         *
         * @param array $config name-value pairs that will be used to initialize the object properties
         */
        public function __construct($config = [])
        {
            if (!empty($config)) {
                static::configure($this, $config);
            }

            $this->init();
        }

        /**
         * Initializes the object.
         * This method is invoked at the end of the constructor after the object is initialized with the
         * given configuration.
         */
        public function init()
        {
        }
    }
