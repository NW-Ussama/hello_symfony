<?php


namespace App\Controller;


use App\Entity\TodoEntity;
use App\Payload\Request\TodoRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class TodoListController extends AbstractController
{
/*    private $serializer;

    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }*/

    /**
     * @Route("/todos", methods={"GET"})
     */
    public function getTodoList() : JsonResponse
    {
        $myTodoList = [
            $this->buildTodo(1, "some task", false),
            $this->buildTodo(2, "some other task", false),
            $this->buildTodo(3, "send valid todo list", true),
            array("id"=>4, "label"=>"new label", "checked"=>false)];

        return JsonResponse::create($myTodoList);
    }

    private function buildTodo($id, $label, $checked){
        return array("id"=>$id, "label"=>$label, "checked"=>$checked);
    }


    /**
     * @Route("/todos", methods={"POST"})
     * @ParamConverter("todoEntity")
     * @param TodoRequest $todoRequest
     * @return JsonResponse
     */
    public function createTodo(TodoRequest $todoRequest): JsonResponse{
//        $data = $request->getContent();
//        $todo = $this->get('jms_serializer')->deserialize($data, 'App\Entity\Todo', 'json');


        return new JsonResponse($todoRequest, Response::HTTP_CREATED);
    }


    /**
     * @Route("/todos_create_fake", methods={"POST"})
     */
    public function createFakeTodo(): Response
    {
        // creating fake todo
        $fakeTodo = new TodoEntity();
        $fakeTodo->setLabel('fake_label');
        $fakeTodo->setChecked(false);

        // persist todo
        $em = $this->getDoctrine()->getManager();
        $em->persist($fakeTodo);
        $em->flush();

        return new Response('', Response::HTTP_CREATED);
    }
}