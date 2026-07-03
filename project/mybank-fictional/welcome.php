<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyBank Australia | MyBank.com.au</title> <!-- TT -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <html class="no-js" lang="en"> <!-- TT -->
  
    <meta name="description" content="Personal online banking in Australia"> <!-- TT -->
    <meta name="keywords" content="Personal, Loan, National Australia Bank"> <!-- TT -->
    <meta name="author" content="Tulay Tsambardas, tulaytsambardasdesign@gmail.com "> <!-- TT -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="MyBank">
    <meta property="og:type" content="">
    <meta property="og:url" content="https//www.MyBank.com.au/title/mybank_index">
    <meta property="og:image" content="https//www.mybankaustralia/images/mybanklogo.png">

    <link rel="manifest" href="https://site.webmanifest" crossorigin="use-credentials">
    <link rel="apple-touch-icon" href="icon.png">
  
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mybank_index.css"><!-- TT -->
    <link rel="stylesheet" href="css/responsive.css"><!-- TT -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="theme-color" content="#fafafa">
    <style>
        body{ font: 14px sans-serif;}
        <style>
      header {
        background-color: orange;
      }
    
      .header-container {
        width: 100%;
        background-color: black;
        text-align: center;
      }
      
      .header-container > div {
        padding: 14px;
        font-size: 18px;
        display: inline-flex;
      }

      @media screen and (max-width: 600px) {
        .header-container > div {
          display: flex;
        }
      }

      .header-container > div a {
        color: white;
        text-decoration: none;
      }

      .nav-container{
        text-align: center;
        background-color:white;
      }

      .nav-container > div{
        padding: 0px 14px;
        font-size: 24px;
        display: inline-flex;
      }

      @media screen and (max-width: 600px) {
        .nav-container > div{
          display: flex;
          text-align: center;
        }
      }

      .nav-container > div a {
        color: black;
        text-decoration: none;
      }

      .nav-container a.active {
        text-decoration: underline;
    
      }

      .orange-container {
        background-color: orange;
        min-height: 300px;
        text-align: center;
        overflow-x:auto;
      }

      * {
        box-sizing: border-box;
      }

      .main-container{
        margin-top:-240px;
      }
      .row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other on screens that are smaller than 600 px */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

      #myfoothernav {
        display:flex;
      }

      #myfooternav div {
        -ms-flex: 1;  /* IE 10 */  
        flex: 1;
      }

      .row3 {  
        display: flex;
        padding: 20px;
        text-align: left;
      
      }

      .active{
        background-color: orange;
      }
    </style>
    </style>
</head>
<body>

    <div id="wrapper">
        
        <header>
            <div class="header-container">
                <div>
                    <a href="#">&#128424;&#65039;Print</a>
                </div>

                <div>
                    <input type="text" placeholder="Search..">
                </div>  
                <div>
                    <a href="#">&#10067;Help</a>
                </div> 
                <div>
                <a href="logout.php" class="btn btn-warning ml-3">Log out</a>
                </div> 
            </div>
        </header>
        
        <nav>
            <div class="nav-container">
                <div>
                    <a href="#"><img src="images/mybanklogo.png" alt="mybank logo" title="MyBank" style="height: 100px;"></a>
                </div>
                <div>
                    <a class="active" href="#">My home</a>
                </div>
                <div>
                    <a href="#">View accounts</a>
                </div>
                <div>
                    <a href="#">Transfer & BPAY</a>
                </div>
                <div>
                    <a href="#">Settings</a>
                </div>
                <div>
                    <a href="#">&#128233;Inbox</a>
                </div>
            </div>
        </nav>
        <div class="orange-container">
            <h1 class="my-5">Welcome <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
        </div>
        <br>
        <br>
        <div  class="main-container">
            <div class="row">
                <div class="column">
                  <table>
                    <tr>
                        <th><a href="#"><img src="images/mybank_personal/everyday.jpg"  style="height: 100px;"></a></th>
                        <th><a href="#">Everyday account</a></th>
                        <th><a href="#">Balance</a></th>
                        <th><a href="#">Available</a></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>012-555 8000 7897</td>
                        <td>$100.50</td>
                        <td>$100.50</td>
                    </tr>
                    <tr>
                        <th><a href="#"><img src="images/mybank_personal/savings.jpg"  style="height: 100px;"></a></th>
                        <th><a href="#">Saving account</a></th>
                        <th><a href="#">Balance</a></th>
                        <th><a href="#">Available</a></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>012-555 8000 7897</td>
                        <td>$100.50</td>
                        <td>$100.50</td>
                    </tr>
                    <tr>
                        <th><a href="#"><img src="images/mybank_personal/joint.png"  style="height: 100px;"></a></th>
                        <th><a href="#">Joint account</a></th>
                        <th><a href="#">Balance</a></th>
                        <th><a href="#">Available</a></th>
                    </tr>
                    <tr>
                        <td></td>
                        <td>012-555 8000 7897</td>
                        <td>$100.50</td>
                        <td>$100.50</td>
                        
                    </tr>
                  </table>
                </div>
                <div class="column">
                    <table>
                      <tr>
                          <th><a href="#"><img src="images/mybank_personal/everyday.jpg"  style="height: 100px;"></a></th>
                          <th><a href="#">Everyday account</a></th>
                          <th><a href="#">Balance</a></th>
                          <th><a href="#">Available</a></th>
                      </tr>
                      <tr>
                          <td></td>
                          <td>012-555 8000 7897</td>
                          <td>$100.50</td>
                          <td>$100.50</td>
                      </tr>
                      <tr>
                          <th><a href="#"><img src="images/mybank_personal/savings.jpg"  style="height: 100px;"></a></th>
                          <th><a href="#">Saving account</a></th>
                          <th><a href="#">Balance</a></th>
                          <th><a href="#">Available</a></th>
                      </tr>
                      <tr>
                          <td></td>
                          <td>012-555 8000 7897</td>
                          <td>$100.50</td>
                          <td>$100.50</td>
                      </tr>
                      <tr>
                          <th><a href="#"><img src="images/mybank_personal/joint.png"  style="height: 100px;"></a></th>
                          <th><a href="#">Joint account</a></th>
                          <th><a href="#">Balance</a></th>
                          <th><a href="#">Available</a></th>
                      </tr>
                      <tr>
                          <td></td>
                          <td>012-555 8000 7897</td>
                          <td>$100.50</td>
                          <td>$100.50</td>
                          
                      </tr>
                    </table>
                  </div>
            </div>  
        </div>
        <hr>
        <footer>
            <div class="row3">
            <div class="column" style="font-size:12px;">
                <div class="topnav" id="myfooternav">
                <a href="mybank_index.html"><img src="images/mybanklogo.png" alt="mybank logo" title="MyBank logo" style="height:100px;"></a>
                <a href="mybank_personal.html">Personal</a>
                <a href="mybank_homeloans.html">Home loans</a>
                <a href="mybank_aboutus.html">About us</a>
                </div>
            </div>
            <div class="column" style="font-size: 12px;">
                <p>We acknowledge the Traditional Owners of the land, the Wurundjeri Woi Wurrung and Bunurong peoples of the Kulin Nation and pay our respect to their Elders, past, present and emerging.</p>
                <p>&copy;2022 MyBank of Australia ABN 49 494 494 494 AFSL and Australian credit licence 888888</p>
            </div>
            </div>
        </footer>
    </div>

</body>
</html>