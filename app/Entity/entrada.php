<?php

    namespace App\Entity;

use Andersonhsilva\MetodosPhp\Metodos;
use \App\Db\Database;
    
    use \PDO;

    class Entrada{

        /**
         * Identifcador único do registro de entrada
         * @var integer 
         */

        public $id;

        /**
         * Valor da entrada
         * @var float 
         */

        public $value;
        
        /**
         * Data da entrada
         * @var string
         */

        public $date;

        /**
         *Descrição ocional da entrada
         * @var string
         */
        
        public $obs;
        
        /**
         *Método responsável por insrir uma nova entrada 
         * @return boolean
         */
        public function cadastrar(){
            //INSERIR A ENTRADA NO BANCO
            $obDatabase = new Database('entrada');
            $this->id=$obDatabase-> insert([
                        'value'=> $this->value,
                        'date'=> $this->date,
                        'obs'=> $this->obs
            ]);
            //RETORNAR SUCESSO
            return true;
        }
        /**
         *  Método responsável por obter vagas do banco de dados
         * @param string $where
         * @param string $order
         * @param string $limit
         * @return array
         */
        public static function getEntrada($where= null, $order=null,$limit=null){
            return(new Database('entrada'))->select($where,$order,$limit)
                                            ->fetchAll(PDO::FETCH_CLASS,self::class); 
        }


        /**
         *  Método responsável por Por atualizara os dados no banco
         * @return boolean
         */
        public function atualizar(){
            return(new Database('entrada'))->update(' id= '.$this->id,[
                                                    'value'=> $this->value,
                                                    'date'=> $this->date,
                                                    'obs'=> $this->obs
                                                    ]);
        }
        /**
         *  Método responsável por Por atualizara os dados no banco
         * @return boolean
         */
        public function excluir(){
            return(new Database('entrada'))->delete('id= '.$this->id);
        }

        /**
         *  Método responsável por ebuscar uma vendo com base em seu ID
         * @param integer $id
         * @return Entrada
         */
        public static function getEdit($id){
            return(new Database('entrada'))->select(' id = '.$id)
                                            ->fetchObject(self::class);
                                            
        }

    
    }
