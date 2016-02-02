<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title>Welcome to Fault Booking</title>
</head>
<body>
    <div>
        <h2>Fault booking</h2>
    </div>
    <div>
        <form>
            <div>
                <label for="faulty_telephone_number">Telephone Number</label>
                <input type="text" name="telephoneNumber" placeholder="">
            </div>
            <div>
                <label for="fault_desc">Fault Type</label>
                <select name="fault_desc">
                    <option value="phonedead">Phone Dead</option>
                    <option value="bbfault">BB Completely Out Of Order</option>
                    <option value="newbb">New Broadband</option>
                    <option value="shift">SHIFT</option>
                    <option value="reconn">Reconnection</option>
                </select> 
            </div>
            <div>
                <label for="fault_date">Date</label>
                <input type="date" name="fault_date">
            </div>
            <div>
                <label for="fault_remarks">Remarks</label>
                <input type="text" name="fault_remarks" placeholder="">
            </div>
            <div>
                <input type="submit" name="Submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
