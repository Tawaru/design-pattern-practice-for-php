<?php

/**
 * ディレクトリクラス
 */
class Dir
{
    private $name;
    private $entries = [];

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function add(File $entry)
    {
        $this->entries[] = $entry;
    }

    public function printList()
    {
        echo sprintf("%s\n", $this->name);
        foreach ($this->entries as $entry) {
            $entry->printList();
        }
    }
}

/**
 * ファイルクラス
 */
class File
{
    private $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function printList()
    {
        echo sprintf("%s\n", $this->name);
    }

}

