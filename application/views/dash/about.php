	<style>
  	body {font-family: Arial, Helvetica, sans-serif; background-color: lightgreen;
     text-align: center;}
     * {box-sizing: border-box;

     }
     .alo{
      text-align: center;
    }

    input[type=text], select, textarea {
      width: 60%;
      padding: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 10px;
      margin-bottom: 16px;
      margin-left: 30px;
      resize: vertical;
    }

    input[type=file], select, textarea {
      width: 60%;
      padding: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 10px;
      margin-left: 30px;
      margin-bottom: 16px;
      resize: vertical;
    }

    button[type=submit] {
      background-color: #7D3C98;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-left: 30px;

    }

    button[type=submit]:hover {
      background-color: #45a049;
    }
    button[type=reset] {
      background-color: #0073a3;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;


    }

    button[type=reset]:hover 
    {
      background-color: #45a049;
    }

  /*button[type=preview] {
    background-color: #DF013A;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button[type=preview]:hover 
  {
    background-color: #45a049;
    }*/

    .header {
      padding: 80px;
      text-align: center;
      background: #DF013A;
      color: white;
    }


    /* Increase the font size of the heading */
    .header h1 {
      font-size: 40px;
    }

    /* Style the top navigation bar */
    .navbar {
      overflow: hidden;
      background-color: #333;
    }

    /* Style the navigation bar links */
    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }

    /* Right-aligned link */
    .navbar a.right {
      float: right;
    }

    /* Change color on hover */
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Column container */
    .row {  
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
    }

    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
      -ms-flex: 30%; /* IE10 */
      flex: 30%;
      background-color: ;
      padding: 20px;
    }

    /* Main column */
    .main {   
      -ms-flex: 70%; /* IE10 */
      flex: 70%;
      background-color: white;
      padding: 20px;
    }

    /* Fake image, just for this example */
    .fakeimg {
      background-color: ;
      width: 200%;
      padding: 20px;
    }

    /* Footer */
    .footer {
      padding: 20px;
      text-align: center;
      background: #ddd;
    }

    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */

    .container {
      border-radius: 400px;
      background-color: #DF013A;
      padding: 5px;
      text-align: center;
    }

    .text-error
    {
      color: red;
    }


</style>

<div class="container">
  <div class="row">
   <div class="col-md-10">
    <a href="#" id="Heading">About Us</a>
    <p>Mohammad Asif Eqbal was born on June 11, 1999 in Rangpur.Father Mohammad Akbar Ali business tycoon And Mother Anasa Begum housewife . Village house of Gokulpur village of Haridibpur Union of Rangpur district.<br />

      Gokulpur Government Primary School has started its education. I passed SSC from Paglipi School and College. I am currently studying in the Department of Computer Technology, Faripur Polytechnic Institute. & CSE.<br />

    Hobbies and likes“hit” My favorite game is cricket and tennis. Dear Sportsman Mashrafe Bin Mortaza and Cristiano Ronaldo . Hummus rain shower . Preferred food cattle and poles.</p>
  </div>
</div>
</div>
<table>
  <div class="card">
   <h1><img src="<?php echo base_url(); ?>assets/asif.jpg" style="height:120px;"><br>
   Md Asif Eqbal</h1>
   <h2>Web Developer</h2>
   <p>Baitulaman,Faridpur<br>
   Mobile No: 01780775601<br />
   Email : asif.paglapirbd222@gmail.com
  </p>
 </div>
</table>