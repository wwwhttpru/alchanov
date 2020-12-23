<?php

class RegisterController extends Controller
{
    private $pageTpl = '/views/register.tpl.php';


    public function __construct()
    {
        parent::__construct();
        $this->model = new RegisterModel();
        $this->view = new View();
    }

    public function index()
    {
        if (($_SESSION['user'])) {
            header("Location: /admin");
        } else {
            $this->pageData['title'] = "Регистрация";
            if (!empty($_POST)) {
                if (!$this->register()) {
                    $this->pageData['error'] = "Ошибка регистрации";
                }
            }

            $this->view->render($this->pageTpl, $this->pageData);
        }
        
    }

    public function register()
    {
        if (!$this->model->registerUser()) {
            return false;
        }
        return true;
    }
}
