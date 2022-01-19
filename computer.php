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
            $this -> id = $id;
        }
        public function setModel($model) {
            $this -> model = $model;
        }
        public function setPrice($price) {
            $this -> price = $price;
        }
        public function setBrand($brand) {
            $this -> brand = $brand;
        }

    }

?>