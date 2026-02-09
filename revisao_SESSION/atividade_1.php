<?php

    session_start();

    class CadastroAluno{
        private $nome;
        private $sobrenome;
        private $nota;
        private $datanascimento;

        public function __construct ($nome, $sobrenome, $nota, $datanascimento){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->nota = $nota;
            $this->datanascimento = $datanascimento;
        }


        public function salvar(){
            //criar o array se ainda nao xistir 
            if(!isset($_SESSION['alunos'])){
                $_SESSION['alunos'] = [];
            }

            $_SESSION['alunos'][] = [
                'nome' => $this->nome,
                'sobrenome' => $this->sobrenome,
                'nota' => $this->nota,
                'datanascimento' => $this->datanascimento,
                'idade' => $this->calcularidade()
            ];
        }

        public function calcularidade(){

            $data_atual = new DateTime($this->datanascimento);
            $hoje = new DateTime();
            $idade = $hoje -> diff($data_atual);

            return $idade->y;
        }
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $datanascimento = $_POST['datanascimento'];

       if(!empty($nome) && !empty($datanascimento)){
        $aluno = new CadastroAluno($nome, $sobrenome, $nota, $datanascimento);
        $aluno -> salvar();
       }
    }

        $media = 0;
if (!empty($_SESSION['alunos'])) {
    $totalNotas = 0;
    foreach ($_SESSION['alunos'] as $aluno) {
        $totalNotas += $aluno['nota'];
    }
    $media = $totalNotas / count($_SESSION['alunos']);
}

    if(isset($_GET['reset'])) {
        session_destroy();
       }

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário</title>
    </head>
    <body>
        <h2 style="color:darkblue; font-family: Arial"> Cadastro Aluno </h2>
        <form action= "" method="POST" style="background:#f2f2f2; padding:15px border-radius:8px; width:300px;">
            nome: <br> 
            <input type="text" name="nome" value="" style="width: 100%; margin-bottom:10px"><br>
            sobrenome: <br>
            <input type="sobrenome" name="sobrenome" value="" style="width: 100%; margin-bottom:10px"><br>
            nota: <br>
            <input type="number" name="nota" value="" style="width: 100%; margin-bottom:10px"><br>
            datanascimento: <br>
            <input type='date' name= 'datanascimento'><br> <br>
            <button type="submit" style="background:green; color:white; padding: 5px 10px; "> Cadastrar </button>
            <button type="reset" style="background:red; color:white; padding: 5px 10px;"> Limpar </button>

        </form>
        <?php if (isset ($_SESSION['alunos'])): ?>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>sobrenome</th>
                <th>nota</th>
                <th>datadenascimento</th>
                <th>idade</th>
            </tr>
            <tbody>
                <?php foreach($_SESSION['alunos'] as $aluno): ?>
                <tr>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['sobrenome'] ?></td>
                    <td><?= $aluno['nota'] ?></td>
                    <td><?= $aluno['datanascimento'] ?></td>
                    <td><?=$aluno['idade']?></td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <?php endif; ?>
    </body>
</html>

<?php echo "<b>Média dos Alunos:" . number_format($media,2);"<b>" ?>