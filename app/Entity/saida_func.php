<?php

    namespace App\Entity;

use Andersonhsilva\MetodosPhp\Metodos;
use \App\Db\Database;
    
    use \PDO;


    class Saida{

        /**
         * Identifcador único do registro de entrada
         * @var integer 
         */

        public $id;
        
        /**
         *Descrição ocional da entrada
         * @var string
         */
        
        public $descript;
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
         *Método responsável por insrir uma nova entrada 
         * @return boolean
         */
        public function cadastrarS(){
            //INSERIR A ENTRADA NO BANCO
            $obDatabase = new Database('saida');
            $this->id=$obDatabase-> insert([
                        'descript'=> $this->descript,
                        'value'=> $this->value,
                        'date'=> $this->date
                        
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
        static function getEntradaS($where= null, $order=null,$limit=null){
            return(new Database('caixa_move'))->select($where,$order,$limit)
                                            ->fetchAll(PDO::FETCH_CLASS,self::class); 
        }


        /**
         *  Método responsável por Por atualizara os dados no banco
         * @return boolean
         */
        function atualizarS(){
            return(new Database('saida'))->update(' id= '.$this->id,[
                                                    'descript'=> $this->descript,
                                                    'value'=> $this->value,
                                                    'date'=> $this->date
                                                    ]);
        }
        /**
         *  Método responsável por Por atualizara os dados no banco
         * @return boolean
         */
        function excluirS(){
            return(new Database('saida'))->delete('id= '.$this->id);
        }

        /**
         *  Método responsável por ebuscar uma vendo com base em seu ID
         * @param integer $id
         * @return Entrada
         */
        static function getEditS($id){
            return(new Database('saida'))->select(' id = '.$id)
                                            ->fetchObject(self::class);
                                            
        }

    
    }