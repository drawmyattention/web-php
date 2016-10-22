<?php

namespace Header;

class LastModifiedChecker
{
    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var string
     */
    private $modifiedDate;

    /**
     * CacheBuster constructor.
     *
     * @param $timestamp
     */
    public function __construct($timestamp = 0)
    {

        $this->timestamp = ($timestamp == 0 ? time() : $timestamp);

        // Note that this is not a RFC 822 date (the tz is always GMT)
        $this->modifiedDate = gmdate("D, d M Y H:i:s ", $timestamp) . "GMT";

    }

    /**
     * Set the correct last modified header.
     */
    public function setLastModifiedHeader()
    {
        if ($this->isClientCachedPageValid()) {
            $this->setNotModifiedHeader();
        }

        $this->updateLastModifiedHeader();
    }

    /**
     * Check if the client has the same page cached.
     */
    public function isClientCachedPageValid()
    {
        return (isset($_SERVER["HTTP_IF_MODIFIED_SINCE"]) &&
            ($_SERVER["HTTP_IF_MODIFIED_SINCE"] == $this->modifiedDate));
    }

    /**
     *
     */
    private function setNotModifiedHeader()
    {
        header("HTTP/1.1 304 Not Modified");
        exit();
    }

    /**
     *
     */
    private function updateLastModifiedHeader()
    {
        header("Last-Modified: " . $this->modifiedDate);
    }
}