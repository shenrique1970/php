<?php 
// Interface que define o contrato
interface DatabaseInterface {
    public function connect();
}

// Implementações específicas
class MySqlDatabase implements DatabaseInterface {
    public function connect() {
        return 'Connected to MySql';
    } 
}

class SqLiteDatabase implements DatabaseInterface {
    public function connect() {
        return 'Connected to Sqlite';
    }
}

class PsgDatabase implements DatabaseInterface {
    public function connect() {
        return 'Connected to Postgresql';
    }
}

// Classe que decide qual banco usar
class Database {
    public function connect(string $type): ?DatabaseInterface {
        if ($type === 'mysql') {
            return new MySqlDatabase();
        } elseif ($type === 'sqlite') {
            return new SqLiteDatabase();
        } elseif ($type === 'psg') {
            return new PsgDatabase();
        }

        return null; // caso o tipo não seja reconhecido
    }
}

// Uso
$database = new Database();
$connection = $database->connect('mysql');

if ($connection) {
    echo $connection->connect(); // Saída: Connected to Sqlite
} else {
    echo "Tipo de banco de dados inválido.";
}
?>
