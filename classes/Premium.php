<?php 
    require_once __DIR__ ."/User.php";

    require_once __DIR__ . "/CreditCard.php";

    class Premium extends user{
        use CreditCard;
        private $fidelity_card;
        private $points_premium;

        /**********************************
         * SETTER
         **********************************/

        public function setFidelityCard($_fidelity_card){
            
            $this->fidelity_card = $_fidelity_card;
        }

        public function setPointsPremium($_points_premium){
            
            $this->points_premium = $_points_premium;
        }

        /**********************************
         * GETTER
         **********************************/

         
        public function getFidelityCard(){
            
            return $this->fidelity_card;
        }

        public function getPointsPremium(){
            
            return $this->points_premium;
        }

        public function getInfoPremium(){
            return "<li> Nome: " . $this->name ."</li> <li> Cognome:  " . $this->lastname ."</li> <li> Email: " .$this->email ."</li> <li> Numero carta: ". $this->num_card ."</li> <li>Cvv: " . $this->cvv ."</li> <li> Scadenza carta : ". $this->getExpirationDate() ."</li> <li> Carrello : " . $this->getCart() . "</li> <li> Numero carta fedeltà : " . $this->getFidelityCard() . "</li> <li> Punti premium: " . $this->getPointsPremium() . "</li>";
         }
    }

?>