<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.07 - PDOStatement e bind modes");

require __DIR__ . "/../source/autoload.php";

use Source\Database\Connect;

/**
 * [ prepare ] http://php.net/manual/pt_BR/pdo.prepare.php
 */
fullStackPHPClassSession("prepared statement", __LINE__);

$stmt = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 1");
$stmt->execute();

var_dump(
    $stmt,
    "<br><br>",
    $stmt->rowCount(),
    "<br><br>",
    $stmt->columnCount(),
    "<br><br>",
    $stmt->fetch(),
    "<br><br>"
);

/*
 * [ bind value ] http://php.net/manual/pt_BR/pdostatement.bindvalue.php
 *
 */
fullStackPHPClassSession("stmt bind value", __LINE__);

// $stmt = Connect::getInstance()->prepare("SELECT * FROM users WHERE id = :id");
// $stmt->bindValue(":id", 10, PDO::PARAM_INT);
// $stmt->execute();

// var_dump(
//     $stmt->fetch()
// );

$stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name, last_name)
    VALUE (?, ?)
");

$stmt->bindValue(1, "Tigger", PDO::PARAM_STR);
$stmt->bindValue(2, "Maggie", PDO::PARAM_STR);

$stmt->execute();

var_dump(
    $stmt->rowCount(),
    "<br><br>",
    Connect::getInstance()->lastInsertId(),
    "<br><br>",
);

$stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name, last_name)
    VALUE (:first_name, :last_name)
");

$name = "Tigger";

$stmt->bindValue('first_name', $name, PDO::PARAM_STR);
$stmt->bindValue("last_name", "Turtle", PDO::PARAM_STR);

$stmt->execute();

var_dump(
    $stmt->rowCount(),
    "<br><br>",
    Connect::getInstance()->lastInsertId(),
    "<br><br>",
);
 
/*
 * [ bind param ] http://php.net/manual/pt_BR/pdostatement.bindparam.php
 */
fullStackPHPClassSession("stmt bind param", __LINE__);

$stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name, last_name)
    VALUE (:first_name, :last_name)
");

$firstName = "Cascudo";
$lastName = "Pedreira";

$stmt->bindParam('first_name', $firstName, PDO::PARAM_STR);
$stmt->bindParam("last_name", $lastName, PDO::PARAM_STR);

$stmt->execute();

var_dump(
$stmt->rowCount(),
"<br><br>",
Connect::getInstance()->lastInsertId(),
"<br><br>",
);

/*
 * [ execute ] http://php.net/manual/pt_BR/pdostatement.execute.php
 */
fullStackPHPClassSession("stmt execute array", __LINE__);

$stmt = Connect::getInstance()->prepare("
    INSERT INTO users (first_name, last_name)
    VALUE (:first_name, :last_name)
");

 $user = [
    ":first_name"   => "Peixe",
    ":last_name"    => "Espada"
 ];

 $stmt->execute($user);

 var_dump(
    $stmt->rowCount(),
    "<br><br>",
    Connect::getInstance()->lastInsertId(),
    "<br><br>"
 );

/*
 * [ bind column ] http://php.net/manual/en/pdostatement.bindcolumn.php
 */
fullStackPHPClassSession("bind column", __LINE__);

$stmt = Connect::getInstance()->prepare("SELECT * FROM users LIMIT 3");
$stmt->execute(); 

$stmt->bindColumn("first_name", $name);
$stmt->bindColumn("email", $email);

// deste modo nao consegue resultar o bindColumn
// foreach ($stmt->fetchAll() as $user) {
//     var_dump($user, "<br><br>");
//     echo "O e-mail de {$name} é {$email}";
// }

while ($user <= $stmt->fetch()) {
    var_dump($user, "<br><br>");
    echo "O e-mail de {$name} é {$email}";
}
