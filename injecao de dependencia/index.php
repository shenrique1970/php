<?php 
interface DatabaseInterface {
    public function connect(): string;
}
class MySqlDatabase implements DatabaseInterface {
    public function connect(): string {
        return "Conectado ao MySQL";
    }
}

class SqliteDatabase implements DatabaseInterface {
    public function connect(): string {
        return "Conectado ao SQLite";
    }
}
class App {
    private DatabaseInterface $db;

    // Injeção de dependência via construtor
    public function __construct(DatabaseInterface $db) {
        $this->db = $db;
    }

    public function iniciar(): void {
        echo $this->db->connect();
    }
}
// Injetando MySQL
$app1 = new App(new MySqlDatabase());
$app1->iniciar(); // Saída: Conectado ao MySQL

echo "<br>";

// Injetando SQLite
$app2 = new App(new SqliteDatabase());
$app2->iniciar(); // Saída: Conectado ao SQLite






?>