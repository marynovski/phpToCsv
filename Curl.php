<?php
    class Curl {
        private $handle;
        private $url;
        private $fileHandle;

        public function __construct($handle, $url, $fileHandle) {
            $this->handle = curl_init();
            $this->url = $url;
            $this->fileHandle = $fileHandle;
        }

        public function convert(){
            curl_setopt($this->handle, CURLOPT_URL, $this->url);
            curl_setopt($this->handle, CURLOPT_FILE, $this->fileHandle);
            curl_exec($this->handle);
        }


        public function __destruct() {
            curl_close($this->handle);
        }

    }
?>
