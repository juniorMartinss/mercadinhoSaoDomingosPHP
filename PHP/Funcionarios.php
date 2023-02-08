<?php

    namespace PHP;
    
    require_once('Endereco.php');
    require_once('Pessoas.php');
    require_once('Modelo/DAO/Conexao.php');

    use PHP\Endereco;
    use PHP\Pessoas;
    use PHP\Modelo\DAO\Conexao;

    class Funcionario {
        public float $salario;
        public string $cargo;
        public int $codigo;

        public function __construct(float $salario, string $cargo, int $codigo)
        {
           $this->salario = $salario;
           $this->cargo   = $cargo;
           $this->codigo  = $codigo;
        }//fim do construtor

        public function inserirFuncionarios(Conexao $conexao, Funcionario $funcionario){
            $conn = $conexao->conectar();
            $sql = "INSERT INTO funcionario(matricula, salario, cargo, endereco) VALUES ('', '$funcionario->salario', '$funcionario->cargo', '$funcionario->codigo')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "Funcionario adicionado com sucesso!";
            } else {
                echo "Erro ao adicionar funcionario: " . mysqli_error($conn);
            }

            mysqli_close($conn);
        }

        public function __get(string $nomeVariavel){
            return $this->nomeVariavel;
        }//fim do get

        public function __set(string $nomeVariavel, string $valor) : void
        {
            $this->nomeVariavem = $valor;
        }//fim do set

        public function __toString() : string
        {
            return "<br>Matrícula: ".$this->matricula."<br>Cargo: ".$this->cargo."<br>Salário: ".$this->salario;
        }//fim do toString

    }//fim da classe Funcionario

?>