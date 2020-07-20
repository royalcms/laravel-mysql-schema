<?php


namespace Royalcms\Laravel\MysqlSchema\DBAL\Schema;


class TableStatus
{

    /**
     * @var string
     */
    protected $_name;

    /**
     * @var string
     */
    protected $_engine;

    /**
     * @var int
     */
    protected $_version;

    /**
     * @var int
     */
    protected $_rowFormat;

    /**
     * @var int
     */
    protected $_rows;

    /**
     * @var int
     */
    protected $_avgRowLength;

    /**
     * @var int
     */
    protected $_dataLength;

    /**
     * @var int
     */
    protected $_maxDataLength;

    /**
     * @var int
     */
    protected $_indexLength;

    /**
     * @var int
     */
    protected $_dataFree;

    /**
     * @var int
     */
    protected $_autoIncrement;

    /**
     * @var int
     */
    protected $_createTime;

    /**
     * @var int
     */
    protected $_updateTime;

    /**
     * @var int
     */
    protected $_checkTime;

    /**
     * @var int
     */
    protected $_collation;

    /**
     * @var int
     */
    protected $_checksum;

    /**
     * @var string
     */
    protected $_createOptions;

    /**
     * @var string
     */
    protected $_comment;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     * @return TableStatus
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEngine()
    {
        return $this->_engine;
    }

    /**
     * @param string $engine
     * @return TableStatus
     */
    public function setEngine($engine)
    {
        $this->_engine = $engine;
        return $this;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->_version;
    }

    /**
     * @param int $version
     * @return TableStatus
     */
    public function setVersion($version)
    {
        $this->_version = $version;
        return $this;
    }

    /**
     * @return int
     */
    public function getRowFormat()
    {
        return $this->_rowFormat;
    }

    /**
     * @param int $rowFormat
     * @return TableStatus
     */
    public function setRowFormat($rowFormat)
    {
        $this->_rowFormat = $rowFormat;
        return $this;
    }

    /**
     * @return int
     */
    public function getRows()
    {
        return $this->_rows;
    }

    /**
     * @param int $rows
     * @return TableStatus
     */
    public function setRows($rows)
    {
        $this->_rows = $rows;
        return $this;
    }

    /**
     * @return int
     */
    public function getAvgRowLength()
    {
        return $this->_avgRowLength;
    }

    /**
     * @param int $avgRowLength
     * @return TableStatus
     */
    public function setAvgRowLength($avgRowLength)
    {
        $this->_avgRowLength = $avgRowLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getDataLength()
    {
        return $this->_dataLength;
    }

    /**
     * @param int $dataLength
     * @return TableStatus
     */
    public function setDataLength($dataLength)
    {
        $this->_dataLength = $dataLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDataLength()
    {
        return $this->_maxDataLength;
    }

    /**
     * @param int $maxDataLength
     * @return TableStatus
     */
    public function setMaxDataLength($maxDataLength)
    {
        $this->_maxDataLength = $maxDataLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getIndexLength()
    {
        return $this->_indexLength;
    }

    /**
     * @param int $indexLength
     * @return TableStatus
     */
    public function setIndexLength($indexLength)
    {
        $this->_indexLength = $indexLength;
        return $this;
    }

    /**
     * @return int
     */
    public function getDataFree()
    {
        return $this->_dataFree;
    }

    /**
     * @param int $dataFree
     * @return TableStatus
     */
    public function setDataFree($dataFree)
    {
        $this->_dataFree = $dataFree;
        return $this;
    }

    /**
     * @return int
     */
    public function getAutoIncrement()
    {
        return $this->_autoIncrement;
    }

    /**
     * @param int $autoIncrement
     * @return TableStatus
     */
    public function setAutoIncrement($autoIncrement)
    {
        $this->_autoIncrement = $autoIncrement;
        return $this;
    }

    /**
     * @return int
     */
    public function getCreateTime()
    {
        return $this->_createTime;
    }

    /**
     * @param int $createTime
     * @return TableStatus
     */
    public function setCreateTime($createTime)
    {
        $this->_createTime = $createTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getUpdateTime()
    {
        return $this->_updateTime;
    }

    /**
     * @param int $updateTime
     * @return TableStatus
     */
    public function setUpdateTime($updateTime)
    {
        $this->_updateTime = $updateTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCheckTime()
    {
        return $this->_checkTime;
    }

    /**
     * @param int $checkTime
     * @return TableStatus
     */
    public function setCheckTime($checkTime)
    {
        $this->_checkTime = $checkTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getCollation()
    {
        return $this->_collation;
    }

    /**
     * @param int $collation
     * @return TableStatus
     */
    public function setCollation($collation)
    {
        $this->_collation = $collation;
        return $this;
    }

    /**
     * @return int
     */
    public function getChecksum()
    {
        return $this->_checksum;
    }

    /**
     * @param int $checksum
     * @return TableStatus
     */
    public function setChecksum($checksum)
    {
        $this->_checksum = $checksum;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreateOptions()
    {
        return $this->_createOptions;
    }

    /**
     * @param string $createOptions
     * @return TableStatus
     */
    public function setCreateOptions($createOptions)
    {
        $this->_createOptions = $createOptions;
        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->_comment;
    }

    /**
     * @param string $comment
     * @return TableStatus
     */
    public function setComment($comment)
    {
        $this->_comment = $comment;
        return $this;
    }


    public function toArray()
    {
        return [
            'name'          => $this->_name,
            'engine'        => $this->_engine,
            'version'       => $this->_version,
            'rowFormat'     => $this->_rowFormat,
            'rows'          => $this->_rows,
            'avgRowLength'  => $this->_avgRowLength,
            'dataLength'    => $this->_dataLength,
            'maxDataLength' => $this->_maxDataLength,
            'indexLength'   => $this->_indexLength,
            'dataFree'      => $this->_dataFree,
            'autoIncrement' => $this->_autoIncrement,
            'createTime'    => $this->_createTime,
            'updateTime'    => $this->_updateTime,
            'checkTime'     => $this->_checkTime,
            'collation'     => $this->_collation,
            'checksum'      => $this->_checksum,
            'createOptions' => $this->_createOptions,
            'comment'       => $this->_comment,
        ];
    }

}