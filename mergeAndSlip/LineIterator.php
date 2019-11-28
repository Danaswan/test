<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/11/20
 * Time: 13:58
 */


class LineIterator implements Iterator
{
    protected $fileHandle;
    protected $line;
    protected $i;

    public function __construct($fileName)
    {
        if (!$this->fileHandle = fopen($fileName, 'r')) {
            throw new \http\Exception\RuntimeException('Countdn\'t open file "' . $fileName . '"');
        }
    }

    public function rewind()
    {
        fseek($this->fileHandle, 0);
        $this->line = fgets($this->fileHandle);
        $this->i = 0;
    }

    public function valid()
    {
        return false !== $this->line;
    }

    public function current()
    {
        return $this->line;
    }

    public function key()
    {
        return $this->i;
    }

    public function next()
    {
        if (false !== $this->line) {
            $this->line = fgets($this->fileHandle);
            $this->i ++;
        }
    }

    public function __destruct()
    {
        fclose($this->fileHandle);
    }
}

$lines = new LineIterator('account_operation_analysis.sql');

$num = 0;
foreach ($lines as $line){
    echo $line;
    $sum++;
}
var_dump($sum);