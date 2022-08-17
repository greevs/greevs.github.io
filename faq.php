<!DOCTYPE html>

<html style="background-color:black;">
<div style="background-color: black;">
<head>
  <title>FAQ</title>
  <style>
    body{
      background-color: rgb(153, 218, 196);
    }
    .layout{
      width: 600px;
      margin: auto;
    }
    .accordion{
      padding: 10px;
      margin-top: 10px;
      margin-bottom: 10px;
      background: rgb(105, 206, 105);
      border-radius: 10px;
    }
    .accordion__question p{
      margin: 5px;
      padding: 0;
      font-family: Verdana;
      font-size: 20px;
    }
    .accordion__answer p{
      margin: 5px;
      padding: 10px;
      font-size: large;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      color: rgb(255, 255, 255);
      background: rgb(82, 170, 122);
      border-radius: 10px;
    }
    .accordion:hover{
      cursor: pointer;
    }
    .accordion__answer {
      display: none;
    }
    .accordion.active .accordion__answer {
      display: block;
    }


    .topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav a.active {
  background-color: #04AA6D;
  color: white;
}




    body {
      background-color: white;
      background-image: url(image1.jpg);
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  background-color: white;
  box-sizing: border-box;
 
}

*, *:before, *:after {
  box-sizing: inherit;
}
  #nope {

  color:black;
 }
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


  </style>
</head>
<body>


<div class="topnav">
  <a class="active" href="homepage.php">Home</a>
  <a href="faq.php">FAQ</a>
  <a href="aboutus.php">about us</a>
  <a href="login.php">Login/Register</a>
  <a href="test2.php">Subscriptions</a>
</div>
<div style="text-align: center;">
  <div style="color: white;">
<h1>Frequently Asked Questions:-</h1>
</div>
</div>
  <h2 style="color:green; text-align:center"></h2>
  <div class="layout">
    <div class="accordion">
      <div class="accordion__question">
        <p> What is GreEV's</p>

      </div>
      <div class="accordion__answer">
        <p>GreEV's stand for Green EVs
</p>

      </div>
    </div>
    <div class="accordion">
      <div class="accordion__question">
        <p>Where do we provide our service? 
</p>

      </div>


      <div class="accordion__answer">
        <p>
       For now we are only available in Delhi NCR and Delhi highways
we'll soon be available in other parts of India too!
        </p>

      </div>
    </div>
  <h2 style="color:green; text-align:center"></h2>
  <div class="layout">
    <div class="accordion">
      <div class="accordion__question">
        <p>After how many kms are you available on highaways </p>

      </div>
      <div class="accordion__answer">
        <p>After every 60 kms 
</p>

      </div>
    </div>
    <div class="accordion">
      <div class="accordion__question">
        <p>What are the subscriptions? 
</p>

      </div>


      <div class="accordion__answer">
        <p>
       We have 3 subscription Silver, Gold and Platinum for more details you can check the subscriptions page!
        </p>

      </div>
    </div>

 <div class="accordion">
      <div class="accordion__question">
        <p>Where are we currently available?
</p>

      </div>


      <div class="accordion__answer">
        
      <h3> <a href="https://www.google.com/maps/place/NEELKANTH+STAR+DHABA/@29.0494394,77.0639254,17z/data=!3m1!4b1!4m5!3m4!1s0x390db1fddac2378b:0x1c0b7939fca032ea!8m2!3d29.0494348!4d77.0661058">Neekanth Star Dhaba Sonipat, Haryana</a></h3>
 <h3><a href="https://www.google.co.in/maps/dir/28.5922512,77.2520096/Jaggi+city+center/@29.4804015,75.9029874,8z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390fc84909308685:0x309799843953bb5f!2m2!1d76.7992759!2d30.3681917?hl=en-in">Jaggi City Centre</a></h3>
 <h3><a href="https://www.google.com/maps/place/Haveli+Ludhiana/@30.855547,75.6980351,17z/data=!3m1!4b1!4m5!3m4!1s0x391a83064693563f:0xf0408d0b7cee03dd!8m2!3d30.8555421!4d75.7002711">Ludiana Haveli</a></h3>
      </div>
    </div>

  <script>
    let answers=document.querySelectorAll(".accordion");
    answers.forEach((event)=>{
      event.addEventListener('click',()=>{
        if(event.classList.contains("active")){
          event.classList.remove("active");
        }
        else{
          event.classList.add("active");
        }
      })
    })
  </script>
</body>
</div>
</html>
