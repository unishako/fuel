<?php


use Fuel\Core\Controller_Rest;
use Fuel\Core\Log;

abstract class Controller_Base_Api extends Controller_Rest
{
    protected $format = 'json';

    public function get_index()
    {
        try {
            return $this->execute();
        } catch (Throwable $t) {
            Log::error($t);
            return $this->response("想定外エラー");
        }
    }

    abstract protected function execute();
}