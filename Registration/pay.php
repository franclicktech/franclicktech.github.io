<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       /*body{
            background-image: linear-gradient(black, rgb(61, 61, 61));
            background-repeat: no-repeat;
            height: 952px;
            color: black;
        }*/
        h1{
            color: green;
            
        }
        input{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
        select{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            box-decoration-break: none;
        }
        button{
            border: 2px solid black;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            background-color: teal;
            margin-top: 15px;
            float: right;
        }
        button:hover{
            background-color: cadetblue;
        }
        #totalprice{
            padding-left: 20px;
        }
        .div{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid black;
            overflow: hidden;
            color:black;
        }
    </style>
</head>
<body>

    <center><h1 style="margin-top: 100px">Welcome to Franclick-tech payment point </h1></center>
    <center>
        <div style="background-color: whitesmoke; border: 2px double #6c757d; border-radius: 30px;height: 550px; width: 400px; padding: 20px; margin-bottom: 50px" >
            <form style="margin-top: 15px;" action="Paynow.php" method="get">
                

                  <b>select a course and pay for it:</b> 
                 <select id="selector" onchange="buy()" style=" box-shadow:5px 5px black;">
                  <option value="none" selected disabled>pick an option</option>
                  <option value="web development">web development</option>
                  <option value="graphics design">graphics design</option>
                  <option value="Python programming">Python programming</option>
                </select>
              </form><br><br>
          <b>quantity of course to pay for (one course at a time):</b>
          <input type="number" min="1" max="1" name="" id="qty" placeholder="NB:the maximum selection is just 1 course!" style="margin-top: 10px;"  required><br><br>
          <p style="color:red"><b>Account Details</b></p>
          <b>Account name: Umeudu Francis Tochukwu </b> <br>
          <b>Account number: 0141488742</b> <br>
          <b>Bank: GTB.</b>
          <center><div class="div"id="totalprice" name="cost" style="justify-content: space-between; display: inline-flex; border-radius: 7px;font-size: 30px;margin-top: 30px; width: 100%;"aria-readonly="true">Cost</div><br><br></center>
          
            <div style="display: flex;justify-content: space-around;">
            <button onclick="buy()">Cost</button>
            <a href="paynow.php"><button onclick="buy()">Proceed to Pay</button></a>
            </div>   
          
        </div>


      </center>
</body>
<?php
    $totalprice;
    $_SESSION['totalprice'];
    
?>
<script>
    function buy(option) {
      var x = document.getElementById("selector").value
      var qty = document.getElementById("qty").value;
      if (x === `web development`) {
        
        document.getElementById("totalprice").innerHTML = 70000 *qty
        cost = document.getElementById("totalprice").innerHTML
        document.getElementById("totalprice").innerHTML = `the cost for full stack web development is: N${cost}`
        
      }if (x === `graphics design`) {
        
        document.getElementById("totalprice").innerHTML = 40000 *qty
        
        cost = document.getElementById("totalprice").innerHTML
        document.getElementById("totalprice").innerHTML = `the cost for graphics design is: N${cost}`

      }if (x === `Python programming`) {
        
          document.getElementById("totalprice").innerHTML = 60000 *qty
          cost = document.getElementById("totalprice").innerHTML
          document.getElementById("totalprice").innerHTML = `the cost for python programming is: N${cost}`
        
          
        }
      
    }
  </script>

</html>


