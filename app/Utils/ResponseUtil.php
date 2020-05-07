<?php


namespace App\Utils;

use stdClass;

class ResponseUtil extends stdClass
{
    public $success = false;
    public $data = [];
    public $error = null;
    public $action = null;
    public $message = null;

    /**
     * @return array
     */
    public function getArray()
    {
        return $this->stripArray();
    }

    /**
     * @return string
     */
    public function getJson()
    {
        return json_encode($this->getArray());
    }

    /**
     * @return array
     */
    private function stripArray()
    {
        return array_filter((array) $this, function ($val) {
            return !is_null($val);
        });
    }

    /**
     * Get Response for Mobile without API error
     */
    public function getResponse()
    {
        return $this->getArray();
    }
}
