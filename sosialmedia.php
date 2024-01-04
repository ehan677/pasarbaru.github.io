<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Media Sosial Pasar Baru</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: gray;
      }

      .menu {
        position: relative;
        width: 280px;
        height: 280px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
    

      .menu .toggle {
        position: relative;
        height: 60px;
        width: 60px;
        background: #fff;
        border-radius: 50%;
        box-shadow: 0 3px 4px rgb(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        font-size: 2em;
        cursor: pointer;
        transition: 1.25s;
        z-index: 1000;
      }

      .menu.active .toggle {
        transform: rotate(360deg);
        box-shadow: 0 6px 8px rgb(0, 0, 0, 0.15), 0 0 0 2px #333, 0 0 0 8px #fff;
      }

      .menu li {
        position: absolute;
        left: 0;
        list-style: none;
        transition: 0.5s;
        transform: rotate(calc(360deg / 8 * var(--i)));
        transform-origin: 140px;
        scale: 0;
        transition-delay: calc(0.05s * var(--i));
      }

      .menu.active li {
        scale: 1;
      }
      .menu li a {
        position: relative;
        display: flex;
        transform: rotate(calc(360deg / -8 * var(--i)));
        width: 60px;
        height: 60px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.75em;
        color: var(--clr);
        box-shadow: 0 3px 4px rgb(0, 0, 0, 0.15);
        transition: 0.5s;
      }

      .menu li:hover a {
        font-size: 2.5em;
        box-shadow: 0 0 0 2px var(--clr), 0 0 0 6px #fff;
      }
       .back-button {
        position: absolute;
        top: 20px;
        left: 20px;
        padding: 10px;
        background-color: #ffc107;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        z-index: 1001;
      }
    </style>
  </head>
  <body>
    <button class="back-button" onclick="goBack()">Back</button>
    <div class="menu active">
      <div class="toggle">
        <ion-icon name="share-social"></ion-icon>
      </div>
      <li style="--i: 0; --clr: #1877f2">
        <a href="https://www.facebook.com/pages/Pasar-Baru-Trend-Center-Bandung/444344642807658?locale=id_ID"><ion-icon name="logo-facebook"></ion-icon></a>
      </li>
      <li style="--i: 1; --clr: #25d366">
        <a href="https://api.whatsapp.com/send/?phone=%2B628112591810&text=Bandung&type=phone_number&app_absent=0"><ion-icon name="logo-whatsapp"></ion-icon></a>
      </li>
      <li style="--i: 2; --clr: #1da1f2">
        <a href="https://twitter.com/humasbandung"><ion-icon name="logo-twitter"></ion-icon></a>
      </li>
      <li style="--i: 3; --clr: #ea4c89">
        <a href="https://www.instagram.com/pasarbarubandung/"><ion-icon name="logo-instagram"></ion-icon></a>
      </li>
      <li style="--i: 4; --clr: #FF0000">
        <a href="https://www.youtube.com/@diskominfokotabandung"><ion-icon name="logo-youtube"></ion-icon></a>
      </li>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>

    <script>
      let toggle = document.querySelector(".toggle");
      let menu = document.querySelector(".menu");
      toggle.onclick = function () {
        menu.classList.toggle("active");
      };
      function goBack() {
        window.history.back();
      }
    </script>
  </body>
</html>
