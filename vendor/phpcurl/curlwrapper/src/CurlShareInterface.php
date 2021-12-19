<?php

namespace PHPCurl\CurlWrapper;

interface CurlShareInterface {
    /**
     * @return void
     * @see curl_share_init()
     *
     */
    public function init();

    /**
     * @param int $opt
     * @param mixed $val
     * @return boolean
     * @see curl_share_setopt
     *
     */
    public function setOpt($opt, $val);
}
