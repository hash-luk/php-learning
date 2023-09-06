<!-- Create IMC calculator -->
<?php

class IMCCalculator {
    private $weight;
    private $height;

    public function __construct($weight, $height) {
        $this->weight = $weight;
        $this->height = $height;
    }

    public function calculateIMC() {
        $heightInMeters = $this->height / 100;
        $imc = $this->weight / ($heightInMeters * $heightInMeters);
        return $imc;
    }

    public function getResult() {
        $imc = $this->calculateIMC();

        switch($imc) {
            case($imc < 18.5):
                return "Abaixo do peso";
            case($imc < 24.9):
                return "Peso normal";
            case($imc < 29.9):
                return "Sobrepeso";
            case($imc < 34.9):
                return "Obesidade Grau I";
            case($imc < 39.9):
                return "Obsidade Grau II";
            default:
                return "Obesidade Grau III";
        }
    }
}

echo "Calculadora de IMC \n";

do {
    $weight = readline("Informe o peso (Em Kg): ");
} while(!is_numeric($weight));

do {
    $height = readline("Informe a altura (Em cm): ");
} while(!is_numeric($height));

$calculator = new IMCCalculator($weight, $height);

$imcResult = $calculator->calculateIMC();
$textResult = $calculator->getResult();

echo "Seu IMC é: " . number_format($imcResult,2) . PHP_EOL;
echo "Classificado como: " . $textResult . PHP_EOL;



