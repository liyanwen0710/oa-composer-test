<?php

namespace Finlab\Packages;

/**
 * Class MD5Hasher
 *
 * @package Finlab\Packages
 */
class MD5Hasher
{

    /**
     * @param       $plainValue
     * @param array $options
     *
     * @return string
     */
    public function make($plainValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';

        return hash('md5', $plainValue . $salt);

    }

    /**
     * @param       $plainValue
     * @param       $hashValue
     * @param array $options
     *
     * @return bool
     */
    public function check($plainValue, $hashValue, array $options = [])
    {
        return $this->make($plainValue, $options) === $hashValue;
    }
}