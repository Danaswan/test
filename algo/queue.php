<?php
/**
 * Created by PhpStorm.
 * User: ZhouFurong
 * Date: 2019/12/6
 * Time: 15:19
 */

class ArrayQueue
{
    /**
     * @var int 队头指针
     */
    private $front;

    /**
     * @var int 队尾指针
     */
    private $tail;

    /**
     * @var array 队列数组
     */
    private $queueArray;

    /**
     * @var int 队列实际长度
     */
    private $queueLength;

    /**
     * @var int 队列容量
     */
    private $queueSize;

    /**
     * ArrayQueue constructor. 初始化队列
     * @param $size 容量 (循环队列的最大长度)
     */
    public function __construct($size)
    {
        $this->queueArray = [];
        $this->queueSize = $size;
        $this->front = 0;
        $this->tail = 0;
        $this->queueLength = 0;
    }

    /**
     * 销毁队列
     */
    public function __destruct()
    {
        unset($this->queueArray);
    }

    public function enQueue($elem)
    {
        if(!$this->isFull()){
            $this->queueArray[$this->tail] = $elem;
            $this->tail ++;
        }
    }

    public function delQueue()
    {

    }

    /**
     * @desc 判断队列是否为空
     * @return bool
     */
    public function isEmpty()
    {
        return $this->queueLength === 0;
    }

    /**
     * @desc 判断队列是否饱和
     * @return bool
     */
    public function isFull()
    {
        return $this->queueLength === $this->queueSize;
    }

    /**
     * @desc 遍历队列并输出
     */
    public function outPutQueue()
    {
        for ($i = $this->front; $i < $this->queueLength + $this->front; $i ++) {
            echo $this->queueArray[$i] . PHP_EOL;
        }
    }

    /**
     * @desc 清空队列
     */
    public function clearQueue()
    {
        $this->queueArray = [];
        $this->front = 0;
        $this->tail = 0;
        $this->queueLength = 0;
    }


}

