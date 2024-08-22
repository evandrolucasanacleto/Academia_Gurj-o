<?php
/*
    Criação da classe Conta com o CRUD
*/
class ContaDAO
{

    public function create(Conta $conta)
    {
        try {
            $sql = "INSERT INTO conta (                   
                  nome,sobrenome,telefone,email,senha)
                  VALUES (
                  :nome,:sobrenome,:telefone,:email, :senha)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $conta->getNome());
            $p_sql->bindValue(":sobrenome", $conta->getSobrenome());
            $p_sql->bindValue(":telefone", $conta->getTelefone());
            $p_sql->bindValue(":email", $conta->getEmail());
            $p_sql->bindValue(":senha", $conta->getSenha());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir conta <br>" . $e . '<br>';
        }
    }

    public function read()
    {
        try {
            $sql = "SELECT * FROM conta order by nome asc";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaContas($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }

    public function update(Conta $conta)
    {
        try {
            $sql = "UPDATE conta set
                
                  nome=:nome,
                  sobrenome=:sobrenome,
                  telefone=:telefone,
                  email=:email,
                  senha=:senha                  
                                                                       
                  WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $conta->getNome());
            $p_sql->bindValue(":sobrenome", $conta->getSobrenome());
            $p_sql->bindValue(":telefone", $conta->getTelefone());
            $p_sql->bindValue(":email", $conta->getEmail());
            $p_sql->bindValue(":senha", $conta->getSenha());
            $p_sql->bindValue(":id", $conta->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Conta $conta)
    {
        try {
            $sql = "DELETE FROM conta WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $conta->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir conta<br> $e <br>";
        }
    }

    private function listaContas($row)
    {
        $conta = new Conta();
        $conta->setId($row['id']);
        $conta->setNome($row['nome']);
        $conta->setSobrenome($row['sobrenome']);
        $conta->setTelefone($row['telefone']);
        $conta->setEmail($row['email']);
        $conta->setSenha($row['senha']);

        return $conta;
    }
}
