<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Form Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form, .output {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 350px;
        }
        input, button {
            width: 100%;
            padding: 8px;
            margin: 6px 0;
            border-radius: 6px;
            border: 1px solid #5d4e4eff;
        }
        h2 {
            text-align: center;
        }
        .output {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<form method="post" action="">
    <h2>User Information</h2>
    <label>Name:</label>
    <input type="text" name="name" required>

    <label>Age:</label>
    <input type="number" name="age" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <button type="submit" name="submit">Submit</button>
</form>

<?php
if(isset($_POST['submit'])) {

    
    $user = array(
        "Name" => $_POST['name'],
        "Age" => $_POST['age'],
        "Email" => $_POST['email']
    );

    echo "<div class='output'>";
    echo "<h2>Array Data Display</h2>";

   
    echo "<h3>Using print_r()</h3>";
    echo "<pre>";
    print_r($user);
    echo "</pre>";

   
    echo "<h3>Using foreach loop:</h3>";
    foreach($user as $key => $value) {
        echo "$key : $value <br>";
    }

   
    echo "<h3>Array Keys:</h3>";
    $keys = array_keys($user);
    echo implode(", ", $keys);

   
    echo "<h3>Array Values:</h3>";
    $values = array_values($user);
    echo implode(", ", $values);

   
    $user['Country'] = "India";
    echo "<h3>After adding new element (Country):</h3>";
    print_r($user);

    
    asort($user);
    echo "<h3>After Sorting (asort):</h3>";
    print_r($user);

    echo "</div>";
}
?>

</body>
</html>
