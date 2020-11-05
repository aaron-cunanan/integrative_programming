<?php
    class User {
        // properties
        public $name;
        public $username;
        public $email;

        // methods
        function addFriend($name, $username, $email){
            $this->name = $name;
            echo "{$this->name} added a friend.";
            echo "<br>";
        }
        function postStatus($name, $username, $email){
            $this->name = $name;
            echo "{$this->name} posted a status.";
        }
 
    }
    $example = new User();
    $example->addfriend('Aaron', 'aaron-cunanan', 'aaronyuu@yahoo.com');
    $example->postStatus('Aaron', 'aaron-cunanan', 'aaronyuu@yahoo.com');


    
    
?>
