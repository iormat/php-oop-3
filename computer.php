<?php
    /**
         *      Definire classe Computer:
         *          ATTRIBUTI:
         *          - codice univoco
         *          - modello
         *          - prezzo
         *          - marca
         * 
         *          METODI:
         *          - costruttore che accetta codice univoco e prezzo
         *          - proprieta' getter/setter per tutte le variabili d'istanza
         *          - printMe: che stampa se stesso (come quella vista a lezione)
         *          - toString: "marca modello: prezzo [codice univoco]"
         * 
         *          ECCEZIONI:
         *          - codice univoco: deve essere composto da esattamente 6 cifre (no altri caratteri)
         *          - marca e modello: devono essere costituiti da stringhe tra i 3 e i 20 caratteri
         *          - prezzo: deve essere un valore intero compreso tra 0 e 2000
         * 
         *      Testare la classe appena definita con tutte le casistiche interessanti per verificare il corretto funzionamento dell'algoritmo
    */

    // CODE

    class Computer {
        // attributes
        private $id;
        private $model;
        private $price;
        private $brand;

        // constructor
        public function __construct($id, $price) {
            $this -> setId($id);
            $this -> setPrice($price);
        }

        // GETTER AND SETTER
        // getter
        public function getId() {
            return $this -> id;
        }
        public function getModel() {
            return $this -> model;
        }
        public function getPrice() {
            return $this -> price;
        }
        public function getBrand() {
            return $this -> brand;
        }

        // setter
        public function setId($id) {
            if(strlen((string)$id) != 6 || !is_numeric($id)) {
                throw new Exception("Il codice univoco deve essere formato da 6 cifre(lettere e segni non ammessi)");
            }
            $this -> id = $id;
        }
        public function setModel($model) {
            $this -> checkLength($model);
            $this -> model = $model;
        }
        public function setPrice($price) {
            if(is_int($price) && $price >= 0 && $price <= 2000) {
                $this -> price = $price;
            }else {
                throw new Exception("Il prezzo deve essere compreso tra 0 e 2000");
            }
        }
        public function setBrand($brand) {
            $this -> checkLength($brand);
            $this -> brand = $brand;
        }

        // METHODS
        public function printSelf() {
            echo $this . '<br>';
        }

        // to string
        public function __toString() {
            return $this -> getBrand() . ' ' . $this -> getModel() 
            . ': ' . $this -> getPrice() . '€ ' 
            . 'Code: [' . $this -> getId() . ']';
        }

        // general function to check string length(brand, model)
        public function checkLength($str) {
            if(strlen($str) < 3 || strlen($str) > 20) {
                throw new Exception($str . ": Deve comprendere tra i 3 e i 20 caratteri");
            }
        }
    }

    // try-catch
    try {
        $pc1 = new Computer('123456', 1000);
        $pc1 -> setBrand('Asus');
        $pc1 -> setModel('Vivobook-14');
        $pc1 -> printSelf();

        $pc2 = new Computer('567894', 1600);
        $pc2 -> setBrand('Apple');
        $pc2 -> setModel('Macbook Pro 13" M1');
        $pc2 -> printSelf();
    } catch (Exception $err) {
        echo $err -> getMessage(); 
    }


    echo '<br><br><br>Hello World'
?>