<?php

/**
 * エントリー抽象クラス
 */
abstract class Entry
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public abstract function add(Entry $entry);

    public function getName()
    {
        return $this->name;
    }

    public function printList()
    {
        echo sprintf("%s\n", $this->getName());
    }
}

/**
 * ディレクトリクラス
 */
class Dir extends Entry
{

    private $entries;

    public function __construct(String $name)
    {
        parent::__construct($name);
        $this->entries = [];
    }

    public function add(Entry $entry)
    {
        $this->entries[] = $entry;
    }

    public function printList()
    {
        parent::printList();
        foreach ($this->entries as $entry) {
            $entry->printList();
        }
    }
}

/**
 * ファイルクラス
 */
class File extends Entry
{

    public function __construct(String $name)
    {
        parent::__construct($name);
    }

    public function getName()
    {
        return parent::getName();
    }

    public function add(Entry $entry)
    {
        throw new Exception('This method is not allowed.');
    }
}

/**
 * シンボリックリンククラス
 */
class SymbolicLink extends Entry
{

    public function __construct(String $name)
    {
        parent::__construct($name);
    }

    public function getName()
    {
        return parent::getName();
    }

    public function add(Entry $entry)
    {
        throw new Exception('This method is not allowed.');
    }
}

