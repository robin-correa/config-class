<?php

/**
 * Configuration class
 * 
 * Provides the methods to retrieve configuration preferences
 * 
 * @author Robin Correa <robincorrea@axs.com.sg>
 * @version 1.0.0
 */
class Config
{
    /**
     * Config data
     *
     * @var string
     */
    protected $configData;

    /**
     * Default value
     *
     * @var null
     */
    protected $default = null;

    /**
     * Load Configuration
     *
     * @param   string  $file  Config file
     *
     * @return  void
     */
    public function load($file)
    {
        $this->configData = require $file;
    }

    /**
     * Get Configuration
     *
     * @param   string  $key      Key name
     * @param   null  $default  Default Value
     *
     * @return  string            Config data
     */
    public function get($key, $default = null)
    {
        $segments = explode('.', $key);
        $data = $this->configData;

        foreach ($segments as $segment) {
            if (isset($data[$segment])) {
                $data = $data[$segment];
            } else {
                $data = $this->default;
                break;
            }

            if (isset($default)) {
                return $default;
            }
        }

        return $data;
    }

    /**
     * Check Exist
     *
     * @param   string  $key  Config Key
     *
     * @return  bool        Boolean if exists or not
     */
    public function exists($key)
    {
        return $this->get($key) !== $this->default;
    }
}
