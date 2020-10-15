<?php

require_once 'Entry.php';

use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testEntryList01()
    {
        $rootDir = new Dir("\n/");
        $rootDir->add(new File("file_01.txt"));
        $rootDir->add(new File("file_02.txt"));

        $rootDir->add(new Dir("dir01/"));
        $rootDir->add(new Dir("dir02/"));

        $dir03 = new Dir("dir03/");
        $dir03->add(new File("file_04.txt"));
        $dir03->add(new File("file_05.txt"));
        $dir03->add(new File("file_06.txt"));
        $dir03->add(new SymbolicLink("symbolic_01"));

        $dir04 = new Dir("dir04/");
        $dir04->add(new File("file_07.txt"));
        $dir04->add(new SymbolicLink("symbolic_02"));
        $dir03->add($dir04);
        $rootDir->add($dir03);
        $rootDir->printList();

        // echoをテストするため、標準出力を取得する
        ob_start();
        $rootDir->printList();
        $actual = ob_get_contents();
        ob_end_clean();
        $expected = "\n/\nfile_01.txt\nfile_02.txt\ndir01/\ndir02/\ndir03/\nfile_04.txt\nfile_05.txt\nfile_06.txt\nsymbolic_01\ndir04/\nfile_07.txt\nsymbolic_02\n";
        $this->assertEquals($expected, $actual);
    }

}
