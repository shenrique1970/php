<?php
// outro exemplo simples.
// classe pai
class BaseController
{
    protected function renderView(string $viewName, array $dados = [])
    {
        extract($dados);
        include "views/{$viewName}.php";
    }

    protected function redirect(string $url)
    {
        header("Location: $url");
        exit;
    }
}

// HomeController herdam de BaseController
// Métodos renderView() e redirect() são compartilhados pela classe apai
class HomeController extends BaseController
{
    public function index()
    {
        $mensagem = "Bem-vindo à página inicial!";
        $this->renderView("home", ["mensagem" => $mensagem]);
    }
}

// loginController herdam de BaseController
// Métodos renderView() e redirect() são compartilhados pela classe pai
class LoginController extends BaseController
{
    public function autenticar(string $usuario, string $senha)
    {
        if ($usuario === "admin" && $senha === "1234") {
            $this->redirect("dashboard.php");
        } else {
            $this->renderView("login", ["erro" => "Usuário ou senha inválidos."]);
        }
    }
}

$home = new HomeController();
$home->index();

$login = new LoginController();
$login->autenticar("admin", "1234");


?>
