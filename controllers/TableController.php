<?php
class TableController extends Controller
{

    private $pageTpl = '/views/table.tpl.php';


    public function  __construct()
    {
        parent::__construct();
        $this->model = new TableModel();
        $this->view = new View();

    }

    public function index()
    {
        $this -> checkSession();
        header("Location: table/users");
    }

    public function users() {
        $this -> checkSession();
        $this->pageData['title'] = "Таблица пользователи";

        $this->pageData['tableName'] = "Пользователи";

        $users = $this->model->getUsers();
        $this->pageData['data'] = $users;

        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function notes() {
        $this -> checkSession();
        $this->pageData['title'] = "Таблица заметок";

        $this->pageData['tableName'] = "Заметки";

        $notes = $this->model->getNotes();
        $this->pageData['data'] = $notes;

        $this->view->render($this->pageTpl, $this->pageData);
    }

    public function comments() {
        $this -> checkSession();
        $this->pageData['title'] = "Таблица коментариев";

        $this->pageData['tableName'] = "Коментарии";

        $comments = $this->model->getComments();
        $this->pageData['data'] = $comments;

        $this->view->render($this->pageTpl, $this->pageData);
    }

    private function checkSession() {
        if(!($_SESSION['user'])) {
            header("Location: /");
        }
    }

}
