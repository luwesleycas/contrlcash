<?php

    namespace App\Entity;

    use \App\Db\Database;

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
            $this->data = date('Y-m-d H-i-s');
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
    }
