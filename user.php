<?php
    /**
     *      Definire classe User:
     *          ATTRIBUTI (private):
     *          - username 
     *          - password
     *          - age
     *          
     *          METODI:
     *          - costruttore che accetta username, e password
     *          - proprieta' getter/setter
     *          - printMe: che stampa se stesso
     *          - toString: "username: age [password]"
     * 
     *          ECCEZIONI:
     *          - scatenare eccezione quando username e' minore di 3 caratteri o maggiore di 16
     *          - scatenare eccezione se password non contiene un carattere speciale (non alpha-numerico)
     *          - scatenare eccezione se age non e' un numero
     * 
     *          NOTE:
     *          - per testare il singolo carattere di una stringa
     * 
     *      Testare la classe appena definita con dati corretti e NON corretti all'interno di un
     *      try-catch e eventualmente informare l'utente del problema
     */

    // CODE
    class User {
        // attributes
        private $username;
        private $password;
        private $age;

        // construct
        public function __construct($username, $password) {
            $this -> setUsername($username);
            $this -> setPassword($password);
        }

        // GETTER AND SETTER
        // getter
        public function getUsername() {
            return $this -> username;
        }
        public function getPassword() {
            return $this -> password;
        }
        public function getAge() {
            return $this -> age;
        }

        // setter
        public function setUsername($username) {
            if(strlen($username) < 3 || strlen($username) > 16) {
                throw new Exception('Devi inserire un nome tra i 3 e i 16 caratteri');
            }
            $this -> username = $username;
        }
        public function setPassword($password) {
            if(ctype_alnum($password) || !preg_match('~[0-9]+~', $password)) {
               throw new Exception('La password deve contenere almeno un carattere speiale e un numero');
            }
            $this -> password = $password;
        }
        public function setAge($age) {
            if(!is_int($age)) {
                throw new Exception("L'età va espressa in numeri");
            }
            $this -> age = $age;
        }

        // METHODS
        public function printMe() {
            echo $this . '<br>';
        }
        public function __toString() {
            return $this -> getUsername() . ': ' . $this -> getAge() . ' [' . $this -> getPassword() . ']';
        }
    }

    try {
        $u1 = new User('John Doe', 'ab1?');
        $u1 -> setAge(30); 
        $u1 -> printMe();
        $u2 = new User('Noemi Doe', 'Noemi@123');
        $u2 -> setAge(30); 
        $u2 -> printMe();
    } catch (Exception $e) {
        echo $e -> getMessage();
    }
?>