<?php 

	// variable declaration
	
	// Info update
	$location="";
	$area ="";
    $address = "";
	

	// Password Update
    $password_1="";
    $password_2="";
	
	
	
	
    //getting users ip
    $ip=$_SERVER['REMOTE_ADDR'];
    if(isset($_SESSION['user'])){
    $id=$_SESSION['user']['id'];
    }


	
	if (isset($_POST['profile'])) {
		// receive all input values from the form
	    $area = esc($_POST['area']);
	    $location = esc($_POST['location']);
	    $address = esc($_POST['address']);
	    
	    
			$query = "UPDATE users SET area = '$area', location = '$location', address='$address' WHERE id=$id";
			mysqli_query($conn, $query);
			
			$sql = "SELECT * FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql);
			
				// get id of created user
				$reg_user_id = mysqli_fetch_assoc($result)['id'];
				// put logged in user into session array
				$_SESSION['user'] = getUserById($reg_user_id);
	}
	


    if (isset($_POST['product'])) {
		// receive all input values from the form
	    $name = esc($_POST['name']);
	    $detials = esc($_POST['detials']);
	    $amount = esc($_POST['amount']);
	    
	    
			$query = "INSERT INTO products (id,name,detials,amount) 
            VALUES('$id','$name', '$detials', '$amount')";
			mysqli_query($conn, $query);
			
			$sql = "SELECT * FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql);
			
				// get id of created user
				$reg_user_id = mysqli_fetch_assoc($result)['id'];
				// put logged in user into session array
				$_SESSION['user'] = getUserById($reg_user_id);
	}
	
	
	
		if (isset($_POST['password_update'])) {
		// receive all input values from the form
	    $passwordo = esc($_POST['passwordo']);
	    $password = esc($_POST['password']);
	    $pass=$_SESSION['user']['password'];
	    
	    $password1=md5($passwordo);
	    $password2=md5($password);
	    if($pass!=$password1)
	    {
	        	$_SESSION['message'] = "Password not matching...";
	    }
	    else
	    {
	    
			$query = "UPDATE users SET password='$password2' WHERE id=$id";
			mysqli_query($conn, $query);
			
			$sql = "SELECT * FROM users WHERE id=$id";
			$result = mysqli_query($conn, $sql);
			
				// get id of created user
				$reg_user_id = mysqli_fetch_assoc($result)['id'];
				// put logged in user into session array
				$_SESSION['user'] = getUserById($reg_user_id);
					$_SESSION['message'] = "Password Updated Successfully";
				
	    }
	}
	
	
	
	
	
	//functions - decleration for esc and retrival of data from database.
	// Get user info from user id
?>