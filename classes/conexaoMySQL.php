<?php 

  class conexaoMySQL
     {

        protected $servidor;
        protected $usuario;
        protected $senha;
        protected $banco;
        protected $qry;
        protected $conexao;
        protected $dados;

        public function __construct()
        {
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->senha = "1exagon1@";
            $this->banco = "testeaula";
            self::conectar();
        }

        function conectar(){


           $this->conexao = @mysqli_connect($this->servidor,$this->usuario,$this->senha,$this->banco) or die("Não foi possivel se conectar ao banco de dados!"); 
        }

        function executarSQL($sql){

            $conn = @mysqli_connect("localhost", "root", "1exagon1@", "testeaula");
            $r = mysqli_query($conn, $sql);


        }

        function listar($qr){
            $this->dados = @mysqli_fetch_assoc($qr);
            return $this->dados;
        }
    } 

/* declare(strict_types=1);

class Connection
{
  private static $DB_ADAPTER = 'mysql';
  private static $DB_HOST = 'localhost';
  private static $DB_PORT = '3306';
  private static $DB_NAME = 'ecomerce'; //e_commerce
  private static $DB_CHARSET = 'utf8mb4'; //Se não for utf-8, altere para não ter problemas com caracteres
  private static $DB_USER = 'root';
  private static $DB_PASS = '1exagon1@';

  protected static $pdo;

  private function __construtor()
  {
  }

  public static function conectar()
  {
    if (self::$pdo)
      return self::$pdo;

    try {
    self::$pdo = @new PDO(self::$DB_ADAPTER.":host=".self::$DB_HOST.";"."port=".self::$DB_PORT."; dbname=".self::$DB_NAME.";charset=".self::$DB_CHARSET,self::$DB_USER,self::$DB_PASS);

      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$pdo->exec('SET NAMES '.self::$DB_CHARSET);
      self::$pdo->exec('SET @@session.time_zone = "+00:00"');

      //Matheus, deixei isso comentado eu uso e acho bastante util, se você tem de alterar mais de um tabela
      //Basicamente essa linha faz o seguinte, toda transação de gravação ou alteração que tu fizer não é
      //salvo efetivamente no banco de dados. Por exemplo o Banco Brandão, você tem de tirar o dinheiro de uma
      //conta é colocar em outra, mas se por acaso, se tiver uma falha e o credito for descontado e nao cair
      //na outra conta em uma situação real daria muita dor de cabeça. É para isso que serve este behinTransaction,
      //você faz todos os processos necessários, subtrair o dinheiro da conta A, adicionar dinheiro na conta B e se
      //não houve erros você faz o commit, isso também é util para testes que não deseja salvar efetivamente no banco
      //se você fizer um insert, update ou delete e na mesma conexão você fizer um select você consegue ver as alterações
      //antes sem modificar efetivamente o banco, util para testes rápidos.
      //self::$pdo_write->beginTransaction();

      return self::$pdo;
    } catch (\PDOException $e) {
      die("Deu ruim, matheus. Verifique as credencias do banco kkkkkkkkk");
      // die(match ($e->getCode()) {
      //   1044 => 'Internal Error: Access Denied',
      //   default => 'Internal Error: Unforeseen'
      // });
    }
  }
}


//Na conexão com o banco de dados efetivamente tu faz assim

$conn = Connection::conectar();

//Um exemplo de select
$r = $conn->query("select * from carts");
var_dump($r->fetchAll());  */