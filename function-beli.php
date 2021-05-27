<?php

    class motor{

        private $namaBarang;
        private $hargaBarang;
        private $jumlahBeli;
        private $gambarBarang;

        public function setNamaBarang($nb){

            $this->namaBarang = $nb;

        }
        
        public function setHargaBarang($hb){

            $this->hargaBarang = $hb;

        }

        public function setJumlahBeli($jb){

            $this->jumlahBeli = $jb;

        }

        public function setGambarBarang($gb){

            $this->gambarBarang = $gb;
        }

        public function getNamaBarang(){

            return $this->namaBarang;
        }

        public function getHargaBarang(){

            return $this->hargaBarang;


        }

        public function getJumlahBeli(){

            return $this->jumlahBeli;


        }

        public function getGambarBarang(){

            return $this->gambarBarang;
        }

    }


    class beli{

        private $namaBarang;
        private $hargaBarang;
        private $jumlahBeli;
        private $namaPembeli;
        private $alamatRumah;
        private $gambarBarang;

        
        function tampilGambar($nb){

            if($nb == "Knalpot"){

                $this->gambarBarang = "knalpot.jpg";
            
            }

            if($nb == "Velg"){

                $this->gambarBarang = "velg.jpg";
            
            }

            if($nb == "Shockbreaker"){

                $this->gambarBarang = "shockbreaker.jpg";
            
            }

            if($nb == "Aki"){

                $this->gambarBarang = "Aki-Motor.jpg";
            
            }

            if($nb == "Ban"){

                $this->gambarBarang = "maxxisban.jpg";
            
            }

            if($nb == "Diskbrake"){

                $this->gambarBarang = "diskbrake.jpg";
            
            }

            if($nb == "Oli"){

                $this->gambarBarang = "oli.jpg";
            
            }

            if($nb == "Tune Up"){

                $this->gambarBarang = "Tune Up.jpg";
            
            }

            if($nb == "Cuci Motor"){

                $this->gambarBarang = "cucimotor.jpg";
            
            }
        
        }

        public function __construct($nb,$hb,$jb,$np,$ar){

            $this->namaBarang = $nb;
            $this->hargaBarang = $hb;
            $this->jumlahBeli = $jb;
            $this->namaPembeli = $np;
            $this->alamatRumah = $ar;
      

        }

        public function getNamaBarang(){

            return $this->namaBarang;


        }

        public function getHargaBarang(){

            return $this->hargaBarang;
        }

        public function getJumlahBeli(){

            return $this->jumlahBeli;
        }

        public function getNamaPembeli(){

            return $this->namaPembeli;
        }

        public function getAlamatRumah(){

            return $this->alamatRumah;
        }

        public function getGambarBarang(){

            return $this->gambarBarang;
        }

       

  

    }



?>