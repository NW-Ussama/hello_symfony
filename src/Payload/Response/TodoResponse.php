<?php


namespace App\Payload\Response;


class TodoResponse
{
    private $id;
    private $label;
    private $checked;

    /**
     * TodoResponse constructor.
     * @param $id
     * @param $label
     * @param $checked
     */
    public function __construct($id, $label, $checked)
    {
        $this->id = $id;
        $this->label = $label;
        $this->checked = $checked;
    }


}