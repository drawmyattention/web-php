<?php

namespace File;

class LastModified
{
    /**
     * @var string $file Fully qualified filename
     */
    private $file;

    /**
     * @var int|null $modifiedAt Timestamp when the file was last modified
     */
    private $modifiedAt = null;

    /**
     * LastModified constructor.
     *
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = $file;
        $this->modifiedAt = @filemtime($file);
    }

    /**
     * Return the filename.
     *
     * @return string
     */
    public function file()
    {
        return $this->file;
    }

    /**
     * Return the last modified timestamp.
     *
     * @return int|null
     */
    public function modifiedAt()
    {
        return $this->modifiedAt;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->modifiedAt;
    }

}
