<!DOCTYPE html>
<html lang="en">
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
  </style>
</head>
<body>
  <h2 style="color:green; text-align:center">GeeksforGeeks</h2>
  <div class="layout">
    <div class="accordion">
      <div class="accordion__question">
        <p>how are we different than a normal electronics company?</p>

      </div>
      <div class="accordion__answer">
        <p>At normal electronic stores </p>

      </div>
    </div>
    <div class="accordion">
      <div class="accordion__question">
        <p>How many planets are there in solar system?</p>

      </div>


      <div class="accordion__answer">
        <p>
        There are eight planets in solar system.
        Mercury, Venus, Earth, Mars, Jupiter, Saturn,
        Uranus, and Neptune.
        </p>

      </div>
    </div>

 <div class="accordion">
      <div class="accordion__question">
        <p>How many planets are there in solar system?</p>

      </div>

      
      <div class="accordion__answer">
        <p>
        There are eight planets in solar system.
        Mercury, Venus, Earth, Mars, Jupiter, Saturn,
        Uranus, and Neptune.
        </p>

      </div>
    </div>

      <div class="accordion__answer">
        <p>
        There are eight planets in solar system.
        Mercury, Venus, Earth, Mars, Jupiter, Saturn,
        Uranus, and Neptune.
        </p>

      </div>
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
</html>
