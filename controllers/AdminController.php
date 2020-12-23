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


        $this->view->render($this->pageTpl, $this->pageData);
    }

}
