<?php
// outro exemplo simples.

// classe pai
class BaseController
{
    // Método protegido que carrega uma view e extrai os dados para uso dentro dela
    protected function renderView(string $viewName, array $dados = [])
    {
        extract($dados); // transforma as chaves do array em variáveis
        include "views/{$viewName}.php"; // inclui o arquivo da view correspondente
    }

    // Método protegido que redireciona o usuário para outra URL
    protected function redirect(string $url)
    {
        header("Location: $url"); // envia cabeçalho HTTP de redirecionamento
        exit; // encerra a execução do script após o redirecionamento
    }
}

// HomeController herda de BaseController
// Métodos renderView() e redirect() são compartilhados pela classe pai
class HomeController extends BaseController
{
    // Método público que simula a exibição da página inicial
    public function index()
    {
        $mensagem = "Bem-vindo à página inicial!"; // define uma mensagem
        $this->renderView("home", ["mensagem" => $mensagem]); // chama o método herdado para renderizar a view
    }
}

// LoginController herda de BaseController
// Métodos renderView() e redirect() são compartilhados pela classe pai
class LoginController extends BaseController
{
    // Método público que simula a autenticação de um usuário
    public function autenticar(string $usuario, string $senha)
    {
        // Verifica se o usuário e senha estão corretos
        if ($usuario === "admin" && $senha === "1234") {
            $this->redirect("dashboard.php"); // redireciona para o painel se autenticado
        } else {
            // renderiza a view de login com uma mensagem de erro
            $this->renderView("login", ["erro" => "Usuário ou senha inválidos."]);
        }
    }
}

// Cria uma instância de HomeController
$home = new HomeController();
// Executa o método index(), que renderiza a view "home"
$home->index();

// Cria uma instância de LoginController
$login = new LoginController();
// Executa o método autenticar() com usuário e senha simulados
$login->autenticar("admin", "1234");
?>
