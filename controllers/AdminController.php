<?php
class AdminController extends Controller
{

    private $pageTpl = '/views/admin.tpl.php';


    public function  __construct()
    {
        parent::__construct();
        $this->model = new AdminModel();
        $this->view = new View();

    }

    public function index()
    {
        if(!($_SESSION['user'])) {
            header("Location: /");
        }
        $this->pageData['title'] = "Админ панель";

        $countSuperUsers = $this->model->getCountSuperUsers();
        $this->pageData['countSuperUsers'] = $countSuperUsers;

        $countUsers = $this->model->getCountUsers();
        $this->pageData['countUsers'] = $countUsers;

        $notes = $this->model->getNotes();
        $this->pageData['notes'] = $notes;

        $comments = $this->model->getComments();
        $this->pageData['comments'] = $comments;

        $this->view->render($this->pageTpl, $this->pageData);
    }

    public  function  logout() {
        session_unset();
        session_destroy();
        header("Location: ../");
    }

}
