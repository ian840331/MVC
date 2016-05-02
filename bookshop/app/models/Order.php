<?php
/**
 * Created by PhpStorm.
 * User: yj
 * Date: 25/08/15
 * Time: 10:04 AM
 */

class Order {

    public $id;
    public $userId;
    public $bookId;
    public $qty;
    public $orderTime;

    function __construct($id, $userId, $bookId, $qty, $orderTime)
    {
        $this->bookId    = $bookId;
        $this->id        = $id;
        $this->orderTime = $orderTime;
        $this->qty       = $qty;
        $this->userId    = $userId;
    }
}
