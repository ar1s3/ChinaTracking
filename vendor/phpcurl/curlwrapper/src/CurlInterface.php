<?php

namespace PHPCurl\CurlWrapper;

interface CurlInterface {
    /**
     * @param string $url URL
     * @return void
     * @see curl_init()
     *
     */
    public function init($url = null);

    /**
     * @return int
     * @see curl_errno()
     *
     */
    public function errno();

    /**
     * @return string
     * @see curl_error()
     *
     */
    public function error();

    /**
     * @return boolean|string
     * @see curl_exec()
     *
     */
    public function exec();

    /**
     * @param int $opt CURLINFO_*
     * @return array|string
     * @see curl_getinfo()
     *
     */
    public function getInfo($opt = 0);

    /**
     * @param int $option Option code
     * @param mixed $value Option value
     * @return boolean
     * @see curl_setopt()
     *
     */
    public function setOpt($option, $value);

    /**
     * @param array $options Options
     * @return boolean
     * @see curl_setopt_array()
     *
     */
    public function setOptArray(array $options);

    /**
     * @param int $age
     * @return array
     * @see curl_version()
     *
     */
    public function version($age = CURLVERSION_NOW);

    /**
     * @param int $errornum
     * @return string
     * @see curl_strerror()
     *
     */
    public function strError($errornum);

    /**
     * @param string $str
     * @return string
     * @see curl_escape()
     *
     */
    public function escape($str);

    /**
     * @param string $str
     * @return string
     * @see curl_unescape()
     *
     */
    public function unescape($str);

    /**
     * @return void
     * @see curl_reset()
     *
     */
    public function reset();

    /**
     * @param int $bitmask
     * @return int
     * @see curl_pause()
     *
     */
    public function pause($bitmask);

    /**
     * Get curl handle
     *
     * @return resource
     */
    public function getHandle();
}
