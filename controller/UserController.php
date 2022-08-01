<?php

class UserController extends Controller
{
    public function loginAction()
    {
        if (count($_POST) > 0) {
            // username and password sent from form
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT email FROM user WHERE email = '$username' AND password = '$password'";

            $result = mysqli_query($this->database, $sql);
            $count = mysqli_num_rows($result);

            if ($count == 1) {
                echo json_encode(array("statusCode" => 200));
            } else {
                echo json_encode(array("statusCode" => 500));
            }
            mysqli_close($this->database);
        }
    }

    public function userAction()
    {
        if (count($_POST) > 0) {
            if ($_POST['type'] == 1) {
                $name  = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $city  = $_POST['city'];
                $sql   = "INSERT INTO `user`( `name`, `email`,`phone`,`city`) 
            VALUES ('$name','$email','$phone','$city')";
                if (mysqli_query($this->database, $sql)) {
                    echo json_encode(array("statusCode" => 200));
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($this->database);
                }
                mysqli_close($this->database);
            }
        }
        if (count($_POST) > 0) {
            if ($_POST['type'] == 2) {
                $id    = $_POST['id'];
                $name  = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $city  = $_POST['city'];
                $sql   = "UPDATE `user` SET `name`='$name',`email`='$email',`phone`='$phone',`city`='$city' WHERE id=$id";
                if (mysqli_query($this->database, $sql)) {
                    echo json_encode(array("statusCode" => 200));
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($this->database);
                }
                mysqli_close($this->database);
            }
        }
        if (count($_POST) > 0) {
            if ($_POST['type'] == 3) {
                $id  = $_POST['id'];
                $sql = "DELETE FROM `user` WHERE id=$id ";
                if (mysqli_query($this->database, $sql)) {
                    echo $id;
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($this->database);
                }
                mysqli_close($this->database);
            }
        }
        if (count($_POST) > 0) {
            if ($_POST['type'] == 4) {
                $id  = $_POST['id'];
                $sql = "DELETE FROM user WHERE id in ($id)";
                if (mysqli_query($this->database, $sql)) {
                    echo $id;
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($this->database);
                }
                mysqli_close($this->database);
            }
        }
    }
}