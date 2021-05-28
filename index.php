<?php

class User {
    public $name;

    public $lastname;

    public $username;

    public $email;

    public $password;

    public function __construct($name, $lastname, $username, $email, $password) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;

    }

    public function getUser() {
        return $this->name . ' ' . $this->lastname . ' ' . $this->username . ' ' . $this->email . ' ' . $this->password;
    }
}

// Istanza Marco
$name = 'Marco';
$lastname = 'verdi';
$username = 'marco20';
$marco = new User($name, $lastname, $username, 'email', 'password');

var_dump($marco->getUser());
var_dump($marco);

// Istanza Simone
$name = 'Simone';
$lastname = 'rossi';
$username = 'Simone50';
$email = 'email';
$password = 'password';
$simone = new User($name, $lastname, $username, $email, $password);

var_dump($simone->getUser());
var_dump($simone);

// Istanza Anna
$anna = new User('anna', 'blu', 'anna61', 'email', 'password');

var_dump($anna->getUser());
var_dump($anna);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- First User -->
    <h3>MARCO</h3>
    <ul>
        <?php  foreach( $marco as $details ) {?>
        <li>
            <?php echo $details ?>
        </li>
        <?php  } ?>
    </ul>
    
    <!-- Second User -->
    <h3>SIMONE</h3>
    <ul>
        <?php  foreach( $simone as $details ) {?>
        <li>
            <?php echo $details ?>
        </li>
        <?php  } ?>
    </ul>
    
    <!-- Third User -->
    <h3>ANNA</h3>
    <ul>
        <?php  foreach( $anna as $details ) {?>
        <li>
            <?php echo $details ?>
        </li>
        <?php  } ?>
    </ul>

</body>
</html>