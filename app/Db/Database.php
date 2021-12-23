<?php

namespace App\db;
use App\db;

use \PDO;
use \PDOException;

class Database{

    /**
     * Host de conexão com o banco de dados
     * @var string
     */

    const HOST = 'localhost';


    /**
     * Nome do banco de dados 
     * @var string
     */

    const NAME = 'lucas_teste';

    /**
     * Usuário do banco de dados
     * @var string
     */

    const USER = 'system_saude';

    /**
     * Usuário do banco de dados
     * @var string
     */

    const PASS = 'System-Saude12';

    /**
     * Nome da tabela a ser manipulada
     * @var string
     */

    private $table;

    /**
     * Instância de conexão com o banco de dados
     * @var PDO
     */

    private $connection;

    /**
     * Define a tabela e instancia a conxão
     * @param string $table
     */

    public function __construct($table = null){
        $this->table = $table;
        $this-> setConnection();
    }
    /**
     * Método responsável poe criar uma comexão com banco de dados
     */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: '.$e->getMessage());
        }
    }
        /**
         * Método responsável ppr exercutar querires dentro do banco de dados
         * @param string $query
         * @param array $params
         * @return PDOStatement
         */
        public function execute($query,$params = []){
            try{
                $statement = $this->connection->prepare($query);
                $statement->execute($params);
                return $statement;
            }catch(PDOException $e){
                die('ERROR: '.$e->getMessage());
            }
        
        }
        /**
         * Meétodo responsável por inserir dados np banco
         * Define a tabela e instancia a conxão
         * @param array $values[ field => value ]
         * @return integer
         */

        public function insert($values){
            //Dados da querry 
            $fields = array_keys($values);
            $binds = array_pad([],count($fields),'?');
            
            //Mostra a query
            $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';
            //Executa o insert
            $this->execute($query,array_values($values));
            
            //Retorna  id inserido
            return $this->connection->lastInsertId();
        }
        
        /**
         *  Método responsável por executar uma consulta no banco
         * @param string $where
         * @param string $order
         * @param string $limit
         * @param string $fields
         * @return PDOStatement
         */
        public function select($where=null, $order=null,$limit=null, $fields='*'){
                //Dados da query
                $where = strlen($where) ? 'WHERE'.$where: '';
                $order = strlen($order) ? 'ORDER BY'.$order: '';
                $limit = strlen($limit) ? 'LIMIT'.$limit: '';

                //Monta a query
                $query = 'SELECT '.$fields.' FROM '.$this->table. ' '.$where.' '.$order.' '.$limit;
                
                //Executa a query
                return $this->execute($query); 
        }

        /**
         * Métodp responsável por executar atualizações no banco de dados
         * @param string
         * @param array
         * @return boolean
         */
        public function update($where,$values){
            //Dados da query
            $fields = array_keys($values);
            
            //monta a querry
            $query = 'UPDATE '.$this->table. ' SET '.implode(' =? ,', $fields).' =?  WHERE '.$where;
            
            //Executar a query

            $this->execute($query,array_values($values));

            return true;

        }

        /**
         * Métodp responsável por excluir atualizações no banco de dados
         * @param string
         * @return boolean
         */
        public function delete($where){
            //Monta a query
            $query = 'DELETE FROM '.$this->table.' WHERE '.$where;
            
            //Executa a query
            $this->execute($query);

            //Retorna sucesso
            return true;

        }
}


