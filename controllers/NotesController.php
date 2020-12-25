<?php

class NotesController extends Controller
{

    private $pageTpl = '/views/notes.tpl.php';


    public function __construct()
    {
        parent::__construct();
        $this->model = new NotesModel();
        $this->view = new View();

    }


    public function index()
    {
        if(!($_SESSION['user'])) {
            header("Location: /");
        }

        $this->pageData['title'] = "Заметки";

        $notes = $this->model->getNotes();
        $this->pageData['notes'] = $notes;

        $this->view->render($this->pageTpl, $this->pageData);
    }


}
