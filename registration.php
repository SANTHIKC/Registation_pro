<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <div class=" Education Registration Form"></div>
        <h2>Education Registration Form</h2>
        <form action="" method="post">
            <label for="Fist Name">First Name</label>
            <br>
            <input type="text" name="name" id="name" placeholder="First name">
            <br>
            <label for="Last Name">Last Name</label>
            <br>
            <input type="text" name="name" id="name" placeholder=" Last name">
            <br>
            <label for="Phone Number">Phone Number</label>
            <br>
            <input type="number" name="phno" id="phno" placeholder="Phone number">
            <br>
            <label for="Email">Email Address</label>
            <br>
            <input type="email" name="email" id="email" placeholder="Email Address">
            <br>
            <div>
            <label for="Gender">Gender</label>
            <br>
            Male:<input type="radio" name="gender" id="male">
            Female:<input type="radio" name="gender" id="female">
            </div>
            <br>
            <div> 
                <label for="date of birth">Date of Birth</label>
                <br>
            <input type="date" name="" id=""></div>
           <br>
           <label for="address">Address</label>
            <br>
            <input type="text" name="address" id="address" placeholder=" Address">
            <br>
            <div>
            <label for="Blood Group">Blood Group</label>
            <br>
            <select name="drop-down" id="Blood Group">Blood Group
                <option value="A">A</option>
                <option value="A+">A+</option>
                <option value="B">B</option>
                <option value="B+">B+</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
                
                
            </select>  
            </div>
            <br>
            <div>
            <label for="Course">Course</label> 
            <br>
            PHP<input type="checkbox" name="" id="">  
            java<input type="checkbox" name="" id="">
            C<input type="checkbox" name="" id="">  
            C++<input type="checkbox" name="" id="">
            </div>
            <br>
            <div>
            <label for="Photo">Photo</label> 
            <br> 
            <input type="file" src="" alt=""> 
            </div>
            <br>
            <input type="submit" value="Submit">

            
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>