<!doctype html>
<html>

<head>
<title> My Registration </title>

</head>
<body>
<form class="" action="index.html" method="post">
  <table>
    <tr>
      <td>Name :</td>
      <td> <input type="text" name="Name" value=""> </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>Email :</td>
      <td> <input type="text" name="Email" value=""> </td>
    </tr>
  </table>
  <table>
    <tr>
      <td> User Name :</td>
      <td> <input type="text" name="User Name" value=""> </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>Password :</td>
      <td> <input type="password" name="password" value=""> </td>
    </tr>
  </table>
  <table>
    <tr>
      <td>Confirm Password :</td>
      <td> <input type="password" name="Confirm Password" value=""> </td>
    </tr>
  </table>
  <p> Gender </p>
  <div>
  <input type="radio" id="Male" name="Gender" value="Male"
         checked>
  <label for="Male">Male</label>
</div>
<div>
<input type="radio" id="Female" name="Gender" value="Female"
       checked>
<label for="Male">Female</label>
</div>
<div>
<input type="radio" id="Other" name="Gender" value="Other"
       checked>
<label for="Male">Other</label>
</div>
<label for="Date of Birth">Date of Birth:</label>
  <input type="date" id="Date of Birth" name="Date of Birth">



</form>
<br>
<button type="submit" value="Submit">Submit</button>
<button type="reset" value="Reset">Reset</button>
</body>


</html>
