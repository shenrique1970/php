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

// HomeController herda de BaseController
class HomeController extends BaseController
{
    public function index()
    {
        $mensagem = "Bem-vindo à página inicial!";
        $this->renderView("home", ["mensagem" => $mensagem]);
    }
}

// loginController herda de BaseController
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

?>
