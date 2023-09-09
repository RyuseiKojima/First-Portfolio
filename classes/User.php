<?php
// for user table
require_once "Database.php";

class User extends Database {
    public function register($request) {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $address = $request['address'];
        $number = $request['number'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $username_check = "SELECT `username` FROM user WHERE username = '$username'";

        // Check to username
        if ($result = $this->conn->query($username_check)) {
            // If username is not used
            if ($result->num_rows == 0) {
                // Insert new user's data
                $sql = "INSERT INTO user (`first_name`, `last_name`, `address`, `contact_number`, `username`, `password`) VALUES('$first_name', '$last_name', '$address','$number','$username', '$password')";
                if ($this->conn->query($sql)) {
                    header('location: ../views/login.php'); 
                    exit;
                } else {
                    die('Error creating the user: '.$this->conn->error);
                }
            } else {
                header('location: ../views/signup-retry.php'); 
            }
        } else {
            die("Error: ". $this->conn->error);
        }
    }

    public function login($request) {
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM user WHERE username = '$username'";

        $result = $this->conn->query($sql);
        
        if($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['password'] = $user['password'];
                header('location: ../views/index.php');
                exit;
            } else {
                die("Password is incorrect");
            }
        } else {
            die("Username not found");
        }
    }

    public function getUser() {
        
        $user_id = $_SESSION['user_id'];

        $sql = "SELECT * FROM user WHERE `user_id` = $user_id";

        if ($result = $this->conn->query($sql)) {
            return $result->fetch_assoc();
        } else {
            die('Error retrieving the user: '.$this->conn->error);
        }
    }
    
    public function editProfile($request, $files) {
        session_start();
        $user_id = $_SESSION['user_id'];
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $address = $request['address'];
        $number = $request['contact_number'];
        $photo = $files['photo']['name'];
        $tmp_photo = $files['photo']['tmp_name'];
        echo $number;

        // ['photo'] -> is the name of the input file
        // ['name'] -> is the actual name of the image
        // ['tmp_name'] -> temporary storage that holds the image temporarily
        
        $sql = "UPDATE user SET first_name = '$first_name', last_name = '$last_name', username = '$username', `address` = '$address', contact_number = '$number' WHERE `user_id` = $user_id";

        if($this->conn->query($sql)) {
            $_SESSION['username'] = $username;

            if($photo) {
                $sql = "UPDATE user SET photo = '$photo' WHERE `user_id` = $user_id";
                $destination = "../assets/images/$photo";

                if($this->conn->query($sql)) {
                    if(move_uploaded_file($tmp_photo, $destination)){
                        // header('location: ../views/profile.php');
                        // exit;
                    } else {
                        die('Error moving the photo.');
                    }
                } else {
                    die('Error uploading photo; '.$this->conn->error);
                }
            }
            header("location: ../views/profile.php");
            exit;
        } else {
            die('Error updation the user: '. $this->conn->error);
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();

        header('location:../views');
        exit;
    }
}
?>