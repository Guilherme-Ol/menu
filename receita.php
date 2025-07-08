<?php

class Receita
{
    private $descricaor;
    private $valorr;

    function __toString()
    {
        return sprintf("%s %.2f reais\n", $this->descricaor, $this->valorr);
    }


    /**
     * Get the value of descricaor
     */
    public function getDescricaor()
    {
        return $this->descricaor;
    }

    /**
     * Set the value of descricaor
     */
    public function setDescricaor($descricaor): self
    {
        $this->descricaor = $descricaor;

        return $this;
    }

    /**
     * Get the value of valorr
     */
    public function getValorr()
    {
        return $this->valorr;
    }

    /**
     * Set the value of valorr
     */
    public function setValorr($valorr): self
    {
        $this->valorr = $valorr;

        return $this;
    }
}
class Despesa
{
    private $descricaod;
    private $valord;

    function __toString()
    {
        return sprintf("%s %.2f reais\n", $this->descricaod, $this->valord);
    }



    /**
     * Get the value of descricaod
     */
    public function getDescricaod()
    {
        return $this->descricaod;
    }

    /**
     * Set the value of descricaod
     */
    public function setDescricaod($descricaod): self
    {
        $this->descricaod = $descricaod;

        return $this;
    }

    /**
     * Get the value of valord
     */
    public function getValord()
    {
        return $this->valord;
    }

    /**
     * Set the value of valord
     */
    public function setValord($valord): self
    {
        $this->valord = $valord;

        return $this;
    }
}

//Programa Principal

$receitas = array();
$despesas = array();

$sumario;



//Menu
do {
    echo "\n-----Menu-----\n";
    echo "(1) Adicionar Receita\n";
    echo "(2) Adicionar Despesas\n";
    echo "(3) Listar Receitas\n";
    echo "(4) Listar Despesas\n";
    echo "(5) Sumarizar\n";

    $opcao = readline("Informe a opção: \n");

    if ($opcao == 1) {
        $adultor = new Receita();
        $adultor->setDescricaor(readline("Informe a Descrição da Receita: \n"));
        $adultor->setValorr(readline("Informe o Valor: \n"));

        array_push($receitas, $adultor);
    } else if ($opcao == 2) {
        $adultod = new Despesa();
        $adultod->setDescricaod(readline("Informe a Descrição da Despesa: \n"));
        $adultod->setValord(readline("Informe o Valor da Despesa: \n"));

        array_push($despesas, $adultod);
    } else if ($opcao == 3) {
        foreach ($receitas as $rec) {
            echo "\n----Receitas-----\n";
            echo $rec;
            echo "\n------------------\n";
        }
    } else if ($opcao == 4) {
        foreach ($despesas as $des) {
            echo "\n----Despesa-----\n";
            echo $des;
            echo "\n-----------------\n";
        }
    } else if ($opcao == 5) {
        foreach ($receitas as $rec) {
            $totalr = 0;
            $totalr += $rec->getValorr();
        }
        foreach ($despesas as $des) {
            $totald = 0;
            
            $totald += $des->getValord();
        }
        $saldo = $totalr - $totald;

        print "\n-------------------------\n";
        print "Saldo: " . $saldo . "\n";
        print "Total de receitas: " . $totalr . "\n";
        print "Total de despesas: " . $totald . "\n";
        print "\n-------------------------\n";
    } else {
        print "\nOperação inválida\n";
    }
} while ($opcao != 0);
