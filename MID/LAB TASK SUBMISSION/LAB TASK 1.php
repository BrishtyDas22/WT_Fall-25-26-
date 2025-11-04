<!DOCTYPE html>
<html>
<head>

    <title>
      Student Registration Information
       
    </title>
</head>
<style>
    div {
  width: 320px;
  height: 930px;
  padding: 10px;
  border: 1px solid gray;
  margin: 0;
  background-color:white
}
 body{
    background-color:pink
 }
 div{
  margin-left:33vw;
 }
           
    </style>
<body>
  
    <div>
     
      <h1 style ="color:red;">Student Registration Information</h1>
        <hr color ="red">
           <br>
           
           
  First Name <br>
    <input type="text">
    <br>
    Last Name <br>
    <input type="text">
    <br>
     student ID <br>
    <input type="text">
    <br>
    Program/Major 
    <br>
    <select name="sub" id="sub">
        <option value="CS">BSC in CSE</option>
        <option value="EEE">BSC in EEE</option>
        <option value="IPE">BSC in IPE</option>
        <option value="Pharmacy">BSC in PHARMACY</option>
</select>
        <br> 
       
        Deparment
    <br>

    <select name="Select Department" id="dept">
           <option value="">Select Department</option>
        <option value="Fst">Faculty of Science and technology</option>
        <option value="Fass">Faculty of</option>
        <option value="FAE">Faculty of</option>
        </select>
        <br> 
        Phone: <br>
    <input type="number">
    <br>
 University Email: <br>
    <input type="text">
    <br>
    Create Password(min 8 characters)
    <br>

        <input type="password">
         <br>  
          Confirm Password
    <br>

        <input type="password">
         <br>

        Semester Selection:<br>
          <input type="radio" name="pc">Summer 2024
          <input type="radio" name="pc">Fall 2024
          <input type="radio" name="pc">Spring 2025
           <input type="radio" name="pc">Other/Special Term
              <br>
Requested Credit Load(Max 15) <br>

    <input type="number" placeholder="e.g.,9 or 12"><br>
    <br>
        <input type="checkbox">I require academic advising before final registration


    <br>
    <h1 style ="color:red;">Course Selection</h1>
        <hr color ="red">
           <input type="checkbox">MATH 1201(Calculus I)
              <input type="checkbox">CS 2105 (Data Structure)
                 <input type="checkbox">ECON 1001 (Microeconomics)
                 <br>
                    <input type="checkbox">PHY 1102 (Physics Lab)
                    <br> <br>
                    Comments/Special Requests
                     <br> 

        <input type="text" style="width: 300px;height :50px;">
         <br>

</div>

</body>
</html>