<?php
// Classe abstrata
abstract class Animal {
    protected string $nome;

    public function __construct(string $nome) {
        $this->nome = $nome;
    }

    // Método abstrato: deve ser implementado pelas subclasses
    abstract public function emitirSom(): string;

    // Método concreto: pode ser usado diretamente
    public function apresentar(): string {
        return "Eu sou um(a) {$this->nome}.";
    }
}

class Cachorro extends Animal {
    public function emitirSom(): string {
        return "Au au!";
    }
}

class Gato extends Animal {
    public function emitirSom(): string {
        return "Miau!";
    }
}

$cachorro = new Cachorro("Cachorro");
$gato = new Gato("Gato");

echo $cachorro->apresentar(); // Eu sou um(a) Cachorro.
echo "<br>";
echo $cachorro->emitirSom(); // Au au!

echo "<br><br>";

echo $gato->apresentar(); // Eu sou um(a) Gato.
echo "<br>";
echo $gato->emitirSom(); // Miau!
