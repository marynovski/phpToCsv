<?php
    class File {
        private $handle;
        private $name;
        private $openMode;

        public function __construct($name, $openMode) {
            $this->name = $name;
            $this->openMode = $openMode;

        }

        public function openFile(){
            $this->handle = fopen($this->name, $this->openMode);
            if(!$this->handle){    
                throw new Exception("File couldn't be opened!");
            }else{
                return $this->handle;
            }
                
        }


        public function __destruct() {
            fclose($this->handle);
        }
    }
?>
