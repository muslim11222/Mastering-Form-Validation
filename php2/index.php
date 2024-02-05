<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
     <title>Document</title>
</head>
<body>
     
<form id="myform">
<label for="field"> Username </label>
<input type="text" id="username" name="username"> </br> </br>


<label for="field"> Email </label>
<input type=" email" id="email" name="email"> </br> </br>



<label for="field"> Course_fee </label>
<input type="number" id="Course_fee" name="Course_fee"> </br> </br>


<br/>

<label for="password">Password</label>
<input id="password" name="password" />
<br/>
<label for="password_again">Again</label>
<input class="left" id="password_again" name="password_again" />
<br>

<input type="submit" value="Registration">
</form>



<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
// just for the demos, avoids form submit
jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});
$( "#myform" ).validate({
  rules: {
     username: {
      required: true,
      rangelength: [8, 10]
    },
    email: {
      required: true,
      email: true
    },
    Course_fee: {
      required: true,
      min:2000
    },
    password: "required",
    password_again: {
      equalTo: "#password"
    },
  }
});
</script>
</body>
</html>











































































































































































<!-- <!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <h1>Admissoin Form</h1>

     <form action="Update.php" method="POST">
          <label for="username">Username</label>
          <input type="text" name="username" id=""> </br> </br>

          
          <label for="password">Password</label>
          <input type="password" name="password"> </br> </br>


          <label for="address">Address</label>
          <input type="address" name="address">  </br> </br>


          <label for="call">Cell</label>
          <input type="call" name="call"> </br> </br>


          <label for="Gender">Gender</label>
          <input type="radio" name="gender" value="male" id=""> male
          <input type="radio" name="gender" value="Female" id=""> Female
          <input type="radio" name="gender" value="other" id=""> Other </br> </br>




         <label for="bestmentor">Best Mentor</label>
          <input type="checkbox" name="bestmentor" value="Rasel Ahmed" id=""> Rasel Ahmed
          <input type="checkbox" name="bestmentor" value="Sumit Dada" id=""> Sumit Dada
          <input type="checkbox" name="bestmentor" value="Ali Hossain" id=""> Ali Hossain </br> </br>


          <label for="coursefee">Course fee</label>
          <input type="number" name="course_fee" id=""> </br> </br>


          <label for="cell"> Write your cell number </label>
          <input type="tel" name="cell" id=""> </br> </br>


<label for="birth Date">Birth Date</label>
     <input type="date" name="birthdate" id=""> </br> </br> 

     
     <label for="color">Your Best Color</label>
     <input type="color" name="color" id=""> </br> </br>


     <label for="classtime">Class Time</label>
     <input type="time" name="classtime" id="">  </br> </br>


     <label for="websiteurl">Web Site URL</label>
     <input type="url" name="websiteurl" id=""> </br> </br>


     <input type="reset" value="reset"> </br> </br>



     <label for="image">Uploade Your Image</label>
     <input type="file" name="image" id=""> </br> </br>


     <label for="month">Month</label>
     <input type="month" name="month" id=""> </br> </br>


<input type="range" name="price_range" min="1" max="100" id=""> </br> </br>
     
     <input type="search" name="seach_data" id=""> </br> </br>


     <input type="datetime-local" name="DateTime" id=""> </br> </br>    







     Select Dropdowns, Multiple Selections, and Option Handling

     <select name="course_name[]" id="" multiple>

          <option value="0" selected>Select Your Course</option>
          <option value="Web Development">Full Stackt Web Development</option>
          <option value="PHP Expert">Full Stackt PHP</option>
          <option value="Javascript Expert">Full Stackt Javascript</option>
          <option value="Wordpress Expert">Full Stackt wordpress</option>

     </select> 

          <button type="submit">Submit</button>
     </form>
</body> 
</html>


 -->
