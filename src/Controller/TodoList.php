<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class TodoList
{
    public function getTodoList() : Response
    {
        $myTodoList = [
            $this->buildTodo(1, "some task", false),
            $this->buildTodo(2, "some other task", false),
            $this->buildTodo(3, "send valid todo list", true),
            array("id"=>4, "label"=>"new label", "checked"=>false)];
        return new Response(json_encode($myTodoList));
    }

    private function buildTodo($id, $label, $checked){
        return array("id"=>$id, "label"=>$label, "checked"=>$checked);
    }
}