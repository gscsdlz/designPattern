<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/24
 * Time: 9:24
 */

namespace designPattern\Structural\Adapter;

class EbookAdapter implements PaperBookInterface
{
    protected $eBook;

    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    public function open()
    {
        // TODO: Implement open() method.
        $this->eBook->pressStart();
    }

    public function turnPage()
    {
        // TODO: Implement turnPage() method.
        $this->eBook->pressNext();
    }
}