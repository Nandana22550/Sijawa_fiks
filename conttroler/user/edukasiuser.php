<?php
include('model/usersModel.php'); // Include the model from user

class Users extends UserModel {
    // Main function to display the data
    public function index($data) {
        $title = "Edukasi";
        $action = 4;
        require('view/user/edukasiuser.php'); // Display the frontend from the view folder
    }
}

// Instantiate the controller
$class = new Users();

// Fetch the data
$data = $class->get_edukasi_data();

// Display the data
$class->index($data);
?>
