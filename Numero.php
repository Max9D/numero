<?php
      class Numero{
        public $n;
        public function __construct($num)
        {
                $this->n=$num;
        }
        public function va(){
            if($this->n<=0) return -1 * $this->n;
            else return $this->n;
        }
    }

?>