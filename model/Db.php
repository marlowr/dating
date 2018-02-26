<?php
/**
 * Created by PhpStorm.
 * User: mrrya
 * Date: 2/26/2018
 * Time: 12:26 PM
 *
 * CREATE TABLE Members (
 *      member_id AUTO_INCREMENT PRIMARY KEY,
 *      fname varchar(55),
 *      lname varchar(55),
 *      age tinyint,
 *      gender varchar(6),
 *      phone varchar(20),
 *      email varchar(55),
 *      state varchar(55),
 *      seeking varchar(6),
 *      bio varchar(500),
 *      premium tinyint,
 *      image varchar(100),
 *      interests varchar(500)
 * );
 */

require("/home/rmarlowg/config.php");

class Db {
    function addMember($fname,$lname,$age,$gender,$phone,$email,$state,$seeking,$bio,
                       $premium,$image,$interests) {
        try {
            //Instantiate a database object
            $dbh = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    //Define query
        $sql = "INSERT INTO `Members` (`member_id`, `fname`, `lname`, `age`, `gender`, 
                `phone`, `email`, `state`, `seeking`, `bio`, `premium`, `image`, `interests`) 
                VALUES (NULL, :fname,:lname,:age,:gender,:phone,:email,:state,:seeking,:bio,
                :premium,:image,:interests)";

        //prepare the statement
        $statement = $dbh->prepare($sql);

        //Bind the parameters
        $statement->bindParam(':fname',$fname, PDO::PARAM_STR);
        $statement->bindParam(':lname',$lname, PDO::PARAM_STR);
        $statement->bindParam(':age',$age, PDO::PARAM_INT);
        $statement->bindParam(':gender',$gender, PDO::PARAM_STR);
        $statement->bindParam(':phone',$phone, PDO::PARAM_STR);
        $statement->bindParam(':email',$email, PDO::PARAM_STR);
        $statement->bindParam(':state',$state, PDO::PARAM_STR);
        $statement->bindParam(':seeking',$seeking, PDO::PARAM_STR);
        $statement->bindParam(':bio',$bio, PDO::PARAM_STR);
        $statement->bindParam(':premium',$premium, PDO::PARAM_INT);
        $statement->bindParam(':image',$image, PDO::PARAM_STR);
        $statement->bindParam(':interests',$interests, PDO::PARAM_STR);

        //Execute
        $statement->execute();
    }

    function getMembers() {
        try {
            //Instantiate a database object
            $dbh = new PDO(DB_DSN,DB_USERNAME,DB_PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $sql = "SELECT * FROM Members ORDER BY lname";
        $statement = $dbh->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
