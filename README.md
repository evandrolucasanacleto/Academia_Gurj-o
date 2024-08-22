# Academia Gurjão
Projeto final grau tecnico campina grande - Curso  Técnico de TI

# Componentes

- Paulo Daniel
- João Mercus (joaomercus16@gmail.com)
- Pedro
- Evandro Lucas (evandrolucasanacletob@gmail.com) 
- Woshi
- Derik
- Izabella
-
-
-


Instalação
------------

## Pré-requisito 
- Instalação do XAMPP com Apache e MySQL

Criar o banco de dados e sua respectiva tabela:

```sql
CREATE DATABASE academia_gurjao;

create table academia_gurjao.conta(
    id integer primary key AUTO_INCREMENT,
    nome varchar(200) not null,
    sobrenome varchar(300) not null,
    telefone varchar(100) not null,
    email varchar(100) not null,
    senha varchar(100) not null
)
```

Configurar o arquivo Conexao.php dentro da pasta 'app/conexao': <br>

Adicione o codigo abaixo dentro da função getConexão(), caso seu banco seja Mysql ja está como padrão.<br>
Lembre-se de alterar os dados(dbname,user,password) na conexão de acordo com seu banco.

-Exemplo de conexão para MySql
```php
 if (!isset(self::$instance)) {
           self::$instance = new PDO('mysql:host=localhost;dbname=academia_gurjao', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
           self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
       }

       return self::$instance;
```

