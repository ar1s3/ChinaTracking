<?php

namespace PHPCurl\CurlWrapper;

interface CurlMultiInterface {
    public function init();

    /**
     * Get handle
     *
     * @return resource
     */
    public function getHandle();

    /**
     * @param CurlInterface $curl Curl object to add
     * @return int
     * @see curl_multi_add_handle()
     *
     */
    public function add(CurlInterface $curl);

    /**
     * @param int $stillRunning Flag
     * @return int (One of CURLM_* constants)
     * @see curl_multi_exec()
     *
     */
    public function exec(&$stillRunning);

    /**
     * @param CurlInterface $curl
     * @return string
     * @see curl_multi_getcontent()
     *
     */
    public function getContent(CurlInterface $curl);

    /**
     * @param int $msgs
     * @return array
     * @see curl_multi_info_read()
     *
     */
    public function infoRead(&$msgs = null);

    /**
     * @param CurlInterface $curl Handle to remove
     * @return int
     * @see curl_multi_remove_handle()
     *
     */
    public function remove(CurlInterface $curl);

    /**
     * @param float $timeout Timeout
     * @return int
     * @see curl_multi_select()
     *
     */
    public function select($timeout = 1.0);

    /**
     * @param int $errornum
     * @return string
     * @see curl_multi_strerror
     *
     */
    public function strError($errornum);

    /**
     * @param int $opt
     * @param mixed $val
     * @return boolean
     * @see curl_multi_setopt
     *
     */
    public function setOpt($opt, $val);
}
