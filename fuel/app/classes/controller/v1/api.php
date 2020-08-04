<?php


use Fuel\Core\DB;
use Fuel\Core\Log;

class Controller_V1_Api extends Controller_Base_Api
{

    protected function execute()
    {
        $list = Model_Emp::query()->get();
        Log::debug(DB::last_query());
        return $this->response($list);
    }
}