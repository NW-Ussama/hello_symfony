<?php


namespace App\Payload\Request;


class TodoRequest
{
    private $label;
    private $checked;

    /**
     * TodoRequest constructor.
     * @param $label
     * @param $checked
     */
    public function __construct(string $label,bool $checked)
    {
        $todoReq = new TodoRequest($label, $checked);
        $this->label = $todoReq->label;
        $this->checked = $todoReq->checked;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label): void
    {
        $this->label = $label;
    }

    /**
     * @return mixed
     */
    public function getChecked()
    {
        return $this->checked;
    }

    /**
     * @param mixed $checked
     */
    public function setChecked($checked): void
    {
        $this->checked = $checked;
    }

}