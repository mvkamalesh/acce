<!DOCTYPE html>
<html>

<head>
  <meta charSet="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Accecore | Contact Us</title>
  <link rel="stylesheet" href="css/style.css">
  <?php include 'favicon.php';?>
  <meta name="theme-color" content="#663399" />
</head>

<body>
  <div id="home">
    <div style="outline:none" tabindex="-1" role="group">
      <div class="overflowX-hidden">
        <!-- Header --> <?php include 'header.php';?>
        <!-- Header Ends -->
        <!-- Inner Page Start -->
        <!-- Hero -->
        <div class="hero-section" style="background-image: url(images/contact_banner.jpg);">
            <div class="content-section">
              <h1>Careers</h1>
            </div>
          </div>
          <div class="ant-row custome-breadcrumb px-5 pt-5 pb-0">
          <div class="ant-breadcrumb"><span><span class="ant-breadcrumb-link"><a href="/career-advice/">
             Home</a> / Careers</span><span class="ant-breadcrumb-separator"></span></span></div></div> 
          </div>
          <!-- Hero -->
        <section class="adviceDetailsSection px-3 px-md-6">

        <div class="ant-row">
        <div class="ant-col-md-10">
          <img src="images/softwareinner.png" alt="">

          </div>

          <div class="ant-col-md-10">
          <div class="ant-row">
          <div class="ant-row mb-5">
            <div class="ant-col ant-col-xs-24 ant-col-sm-24 ant-col-md-24 ant-col-lg-16 ant-col-xl-16">
              <div class="details">
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <div class="wrapper">
    <header>Send us a Message</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email">
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="website" placeholder="Enter your website">
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Send Message</button>
        <span></span>
      </div>
      <br/>
    </form>
  </div>

  <script src="script.js"></script>
<script>
    //Contact Form in PHP
const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");
form.onsubmit = (e)=>{
  e.preventDefault();
  statusTxt.style.color = "#0D6EFD";
  statusTxt.style.display = "block";
  statusTxt.innerText = "Sending your message...";
  form.classList.add("disabled");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "message.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState == 4 && xhr.status == 200){
      let response = xhr.response;
      if(response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf("failed") != -1){
        statusTxt.style.color = "red";
      }else{
        form.reset();
        setTimeout(()=>{
          statusTxt.style.display = "none";
        }, 3000);
      }
      statusTxt.innerText = response;
      form.classList.remove("disabled");
    }
  }
  let formData = new FormData(form);
  xhr.send(formData);
}
    </script>

              </div>

            </div>
          </div>
          </div>
          </div>

        </section>
        <!-- Inner Page Ends -->
        
        <!-- Footer --> <?php include 'footer.php';?>
        <!-- Footer Ends -->
      </div>
    </div>
  </div>
</body>

</html>