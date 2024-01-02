<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      
       <form name="f1" action = "save.php"  method = "POST" class="form"> 
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" id="name" name ="name"placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" id ="email" name  = "email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number"id ="number" name  = "number" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date"id ="dob" name  = "dob" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" id = "add1" name = "add1" placeholder="Enter street address" required />
          <input type="text" id = "add2" name = "add2" placeholder="Enter street address line 2" required />
          <div class="column">
            <div class="select-box">
              <select name="location" id="location">
                <option hidden>Country</option>
                <option>America</option>
                <option>Japan</option>
                <option>India</option>
                <option>Nepal</option>
              </select>
            </div>
            <input type="text"  name = "city" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" id = "region" name = "region" placeholder="Enter your region" required /> 
            <input type="number" id = "code" name = "code" placeholder="Enter postal code" required />
          </div>
        </div>
      <div class ="submit">
        <input type = "submit" id = "btn" name = "submit"></button>
      <div>
      </form>
    </section>
  </body>
</html>


