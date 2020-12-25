<?php
class UsersController extends Controller {
    private $pageTpl = '/views/users.tpl.php';


    public function __construct()
    {
        parent::__construct();
        $this->model = new UsersModel();
        $this->view = new View();

    }


    public function index()
    {
        if(!($_SESSION['user'])) {
            header("Location: /");
        }

        $this->pageData['title'] = "Пользователи";


        $this->view->render($this->pageTpl, $this->pageData);
    }
}