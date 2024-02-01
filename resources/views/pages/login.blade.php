<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
  body {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width: 100vw;
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
  }

  .nav {
    height: 40px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px;
    background-color: white;

  }

  .act {
    color: #4c87ff;
  }

  select {
    border: none;
    color: #4c87ff;
  }

  .right {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-around;

  }

  /* .main {
    min-height: 90vh;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
} */

  .box {
    min-height: 70vh;
    position: absolute;
    top: 10%;
    right: 10%;
    min-width: 480px;
    background-color: white;
    box-shadow: 2px 2px 4px rgb(33, 33, 33, 0.3);
    border-radius: 10px;
    padding: 45px;
  }

  .nonact {
    color: rgb(87, 84, 84);
  }

  .head {
    display: flex;
    flex-direction: row;

    gap: 20px;
    width: 100%;
    align-items: center;
  }

  .fontS {
    font-size: 22px;
  }

  .inputF {
    width: 100%;
    border: none;
    background-color: #d9e1f1;
    font-size: 15px;
    padding: 9px;
  }

  .input-container {
    position: relative;
    width: 100%;
    border: none;
    border-radius: 5px;
  }

  .inputF {
    padding-left: 30px;
    border-radius: 5px;

  }

  .icon {
    position: absolute;
    left: 10px;

    top: 50%;
    transform: translateY(-50%);
    color: #999;

  }

  .iconA {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    position: absolute;
    right: -12%;
    background-color: white;
    height: 0px;
    top: 49%;
    width: 12%;
    transform: translateY(-50%);
    color: #999;

  }

  .inputF.active {

    border-color: #007bff;

  }

  .swiper-container {
    width: 90%;
    height: 100%;
  }

  .swiper-slide {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-color: #7ac23c;
    font-size: 15px;
    padding: 9px;
    border-radius: 5px 0 0 5px;
  }

  .swiper-slide .iconA {
    color: rgb(53, 52, 52);
    cursor: pointer;
    margin-left: 10px;
  }

  .forms {
    display: flex;
    /* position: relative; */
    flex-direction: column;
  }

  button {
    height: 45px;
    margin-top: 20px;
    border: none;
    background-color: #007bff;
    color: white;
    border-radius: 6px;
  }


  @media screen and (max-width: 600px) {
    .box {
      inset: 0;
      width: auto;
      margin: 10px;

    }
  }
</style>

<body>
  <nav class="nav">
    <div class="left pt-2">
      <p class="act ">Solarman Home</p>
    </div>
    <div class="right">
      <select>
        <option>India</option>
        <option>Bharat</option>
        <option>Hindustan</option>
      </select>
      <div class="user ml-3">
        <a aria-current="page" href="#" style="color: #4c87ff!important;"><span>
            <i class="fa fa-columns " aria-hidden="true"
              style=" font-size: 15px; margin-left: -5px;color:#4c87ff"></i></span>
          User
          Manual</a>
      </div>
      <div class="user ml-4">
        <a aria-current="page" href="#" style="color: #4c87ff!important;"><span>
            <i class="fa fa-mobile " aria-hidden="true"
              style=" font-size: 19px; margin-left: -5px;color:#4c87ff"></i></span>
          Download App</a>
      </div>
      <select class="ml-3">
        <option>English</option>
        <option>Hindi</option>
        <option>French </option>
      </select>
    </div>
  </nav>
  <section class="main" style="min-height: 90vh; background-image: url('./images/bg.jpeg'); background-repeat: no-repeat; background-size: cover; position: relative;">
    <div class="box">
      <div class="head">
        <p class="act fontS">E-mail</p>
        <p class="nonact fontS">Phone</p>
        <p class="nonact fontS">Username</p>
      </div>
      <form class="forms"  action="{{route('loginuser')}}" method="POST">
							@csrf
        <div class="input-container mt-4">
          <i class="icon fa fa-envelope" style="color: rgb(53, 52, 52);"></i>
          <input class="inputF" type="text" placeholder="E-mail" name="email">
        </div>

        <div class="input-container mt-4">
          <i class="icon fa fa-lock " style="color: rgb(53, 52, 52);"></i>
          <input class="inputF" type="password" placeholder="Password" name="password">
        </div>
        <div class="swiper-container mt-4">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div style='color: black;'>Verification Passed </div>
              <div class="iconA"
                style=" border-right: 0.5px solid grey;border-top: 0.5px solid grey;border-bottom: 0.5px solid grey; padding: 19px;">
                <i class="fa fa-check p-1"
                  style="color: white;font-size: 8px; background-color: #7ac23c;border-radius: 50%; "></i>
              </div>
            </div>
          </div>
        </div>
        <p class="mt-4 mb-2 act" style="align-self: flex-end;">Forgot Your Account and Password </p>
        <button type="submit">Login</button>
        <p class="act" style="align-self: flex-end; position: absolute; bottom: 3%; right: 6%;">Register </p>
      </form>

    </div>
  </section>
  <!-- <center style="font-weight: 500 ; color: gray;">Current Version V1.7.1 T&Cs Privacy Policy</center> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 
  <!-- <script>
    var mySwiper = new Swiper(' .swiper-container', {
      slidesPerView: 1, spaceBetween: 0, grabCursor: true,
      slideToClickedSlide: true, loop: false, observer: true, observeParents: true,
    }); const
      form = document.getElementById('form'); form.addEventListener('submit', (e) => {
        e.preventDefault();
      })


  </script> -->

</body>

</html>