<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@400;600&family=Nerko+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


    <style>
        :root{
            --green: #B2CC24;
            --red: #DA3D07; 
            --brown: #613E3E;
            --font-body:'Nerko One', cursive;
            --font-menu:'Mitr', sans-serif;
            /* --border: 1px solid red;  */
        }


        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none !important;
            text-decoration: none !important;
        }

     

        /* bootstrap resets */
        img {
    vertical-align: top;
     }

        .navbar-toggler{
            border: none; 
        }
        .navbar-toggler:focus{
            box-shadow: none; 
        }

        /* nav */
      
        .nav{
         font-family: var(--font-menu);
         padding:.8rem 0 ; 
       border: var(--border);
        }

      
        .nav__left{
            flex:1;
            border: var(--border);
        }
        .nav__center{
            flex:2;
            border: var(--border);
            /* display: none; */
        }

      

        .nav__center ul li a {
            color: #613E3E;
            /* font-size: 1.3rem; */
            /* font-weight: 600; */
        }
        .nav__right{
            flex:1;
            border: var(--border);
        }

        .img{
            max-width: 13rem;
        }

        .nav__btn{
            background-color: var(--green);
            padding: .3rem 2.2rem; 
            color: #613E3E;
            border: none;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
            position: relative;
        }
        .nav__btn:hover{
            background-color: var(--red);
            color: white;
            border: none;
          
        }

        /* .nav__btn::after {
            position: absolute;
            content:url('./img/small.png');
            content:"______________";
            left: 0;
            top: 25%;
            overflow: hidden;
            z-index: -1;
        

        }   */

        .hero{
     
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url("./img/hero_dish.jpg"); 
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100vh;
            font-family: var(--font-body);
            color: white;
            /* border:1px solid red;  */
        }
   
        .hero__img{
            width: 100vw;
         
            /* margin-top: 60rem; */
       
        } 

    
        .hero__img--top{
            width: 100%;
         
            /* margin-top: 60rem; */
       
        } 

        .hero__icon{
            max-width: 4rem;
        }

        .hero__text{
            height: inherit;
            margin-top: -2rem;
          
        }
        
        .hero__font{
       
            font-weight: 600;
            font-family: var(--font-menu);
            /* font-size: 6rem; */
        }

        .loser{
            background-color: blue;
            color: white;
            margin-top: 10rem;
            
        }

        .hero--2{
            display:none;
    
            background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)),url("./img/hero_tacos-2.png"); 
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100vh;
            font-family: var(--font-body);
            color: white;

        }
        .hero--3{
            display:none;
            background: linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)),url("./img/hero_fajitas.png"); 
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100vh;
            font-family: var(--font-body);
            color: white;
        }

        /* specials */

              .hero-2{
            margin-top: -8rem;
            /* position: relative; */
            overflow-x: hidden;
            height: 100vh;
            background: url("./img/bottom.webp"); 
            background-position: right;
            background-size: cover;
            /* border: 1px solid red; */
           
        }

        .specials{
            font-family: var(--font-menu);
            color: var(--brown);
            /* left: 50%;
            transform: translate(0, -5%); */
            width: 100%;
            /* position: absolute; */
            /* background: url("./img/bottom.webp"); 
            background-position: center;
            background-size: cover; */
            /* border: solid blue 1px; */
            /* margin-top: -2rem; */ 
        } 

          
        .specials h5{
            color: var(--green);
            font-weight: 600;
            font-size: 1.8rem;
 
        }

        .specials img{
            max-width: 100%;
            
        }

        .specials h3{
            font-size: 300%;
            font-weight: 600;
        }

     

        .happy__hour--right{
            /* border: 1px solid red;  */
            flex: 1;
            width: 100%;
     
    
        }   
       
        
        .happy__hour--right h1{
            font-size: 4vw;
            line-height: 5vw;
            font-weight: 900;
            color: var(--brown);
        }

           .happy__hour--right h5{
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--red);
            font-family: var(--font-menu);
        }
           .happy__hour--right p{
            font-size: 1rem;
            font-weight: 300;
            color:#613E3E;
            font-family: var(--font-menu);
            letter-spacing: 0rem;
            line-height: 1.3rem;
            opacity: .7;
        }

        .happy__hour--right button{
            font-size: 1.1rem;
            font-weight: 600;
        }
/* 
           .happy__hour--right button{
            background-color: var(--green);
            padding: .6rem 2.2rem; 
            width: 50%;
            color: #613E3E;
            border: none;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;
            position: relative;
            font-size: 1rem;
            font-weight: 900;
        }
         */

        .happyhour__img{
            flex:1; 
            border: var(--border);
            /* border: 1px solid red;  */
        }

        .happy__img{
            border: var(--border); 
            margin: 0 auto;
            display: block;
            flex: 1;
            width: 100%;
            max-width: 35rem;
        }

        @media screen and (max-width: 768px) {
            .happy__hour--right h1{
            font-size: 8vw;
            line-height: 8vw;
    
        }
        
}


.content-main {
    position: relative;
    width: 400px;
    /* margin: 40px auto; */
}

.content-box {
        height: auto;
        overflow: hidden;
        padding: .8rem 3.5rem;
        background-color: var(--green);
        border:none; 
        color: #613E3E;
        clip-path: polygon(
            1% 2%,
            3.5% 0.1%,
            8.9% 2.7%,
            16.2% 1.2%,
            19.7% 0.8%,
            24.7% 2%,
            31.2% 0%,
            35.9% 2.3%,
            40.6% 0.5%,
            47.1% 1.8%,
            49.9% 1%,
            53.8% 2.5%,
            62.2% 0.4%,
            67.3% 1.2%,
            70.3% 0.3%,
            75.8% 1.4%,
            78.5% 1.7%,
            84% 2.6%,
            91.1% 0.5%,
            93.6% 2.4%,
            97.3% 0.3%,
            98.9% 6%,
            98.1% 11.4%,
            98.6% 15.5%,
            97.3% 17.8%,
            97.7% 27.4%,
            98.3% 28.5%,
            99.7% 34.1%,
            98.8% 41.9%,
            98.3% 45.7%,
            98.4% 50.9%,
            98.7% 57.4%,
            99.6% 60.4%,
            99.4% 66.6%,
            99.2% 69.5%,
            97.4% 77.1%,
            98.1% 82.3%,
            99.9% 83.5%,
            98.2% 91.5%,
            99.3% 95.3%,
            98% 98.6%,
            93.6% 97.4%,
            90.3% 98.3%,
            86.8% 98.3%,
            78.6% 98.5%,
            76.4% 99.2%,
            69.7% 99.8%,
            64.2% 99.3%,
            61.8% 99.2%,
            57.2% 98.1%,
            48.7% 98.3%,
            46.8% 99%,
            39.6% 98.9%,
            33.8% 97.3%,
            28.2% 99.4%,
            27% 98.3%,
            22.1% 98.6%,
            13.1% 97.1%,
            8.7% 99.3%,
            2.7% 97.4%,
            2% 98.2%,
            2.1% 94.3%,
            0.7% 90.5%,
            0.9% 86.3%,
            2.2% 78.2%,
            0.4% 76.7%,
            1.2% 72.1%,
            2% 64%,
            1.4% 59.8%,
            0.4% 57.3%,
            0.3% 49.1%,
            2.9% 44.7%,
            1.9% 41.3%,
            0.8% 35.7%,
            2.9% 31.3%,
            0.8% 24.9%,
            2.7% 20.5%,
            0.8% 17.4%,
            2.5% 8.6%,
            1.1% 5.5%
        );
    }
      
    
      

    

      
        

    

       

        .slideInUp {
  -webkit-animation-name: slideInUp;
  animation-name: slideInUp;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  animation-delay: .2s;
  }
  @-webkit-keyframes slideInUp {
  0% {
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  }
  @keyframes slideInUp {
  0% {
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  visibility: visible;
  }
  100% {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  }
  } 

  .zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes zoomIn {
  0% {
  opacity: 0;
  -webkit-transform: scale3d(.3, .3, .3);
  transform: scale3d(.3, .3, .3);
  }
  50% {
  opacity: 1;
  }
  }
  @keyframes zoomIn {
  0% {
  opacity: 0;
  -webkit-transform: scale3d(.3, .3, .3);
  transform: scale3d(.3, .3, .3);
  }
  50% {
  opacity: 1;
  }
  } 




   

      
      

    
    </style>
    <title>La Bamba Mexican Kitchen</title>
    
</head>
<body>
  
<!-- nav -->
<nav class="nav d-flex justify-content-center align-items-center container-fluid">
    <div class="nav__left d-flex justify-content-center">
        <img class="img" src="./img/logo.png" alt="">
    </div>
    <div class="nav__center">
        <ul class="d-flex justify-content-between mt-3 gap-2 px-3">
            <li><a href="">HOME</a></li>
            <li><a href="">ABOUT</a></li>
            <li><a href="">MENU</a></li>
            <li><a href="">CONTACT</a></li>
            <li ><a href="">SPECIALS</a></li>
        </ul>
    </div>
    <div class="nav__right d-flex justify-content-center content-main">
        <button class="content-box ">Order</button>
    </div>  
</nav>


<!-- hero -->
<div class="hero fluid-container">
    <img class="hero__img--top" src="./img/top.webp" alt="">
    <div class="hero__text d-flex flex-column justify-content-center align-items-center text-center zoomIn">
        <h2 class="hero__text--h2">Taste from Mexico</h2>
        <img class="hero__icon" src="./img/hero_icons.webp" alt="">
        <h1 class="hero__font display-1 hero__text--h1">Flavors from Home</h1>
        <p class= "hero__text--p"style="font-family:sans-serif; margin: .9rem auto; width:80%;" >Explore a new world with a taste from old Mexico</p>
        <button class="nav__btn ">Explore Menu</button>
    </div>
    

    <div class="fluid-container hero-2">
    <!-- <img class="hero__img" src="./img/bottom.webp" alt=""> -->
    </div>





</div>


<div class="hero--2 fluid-container">
    <img class="hero__img--top" src="./img/top.webp" alt="">
    <div class="hero__text d-flex flex-column justify-content-center align-items-center text-center zoomIn">
        <h2 class="hero__text--h2">Hero 2</h2>
        <img class="hero__icon" src="./img/hero_icons.webp" alt="">
        <h1 class="hero__font display-1 hero__text--h1">Hero 2</h1>
        <p class= "hero__text--p"style="font-family:sans-serif; margin: .9rem auto; width:80%;" >Explore a new world with a taste from old Mexico</p>
        <button class="nav__btn ">Explore Menu</button>
    </div>
    <div class="fluid-container hero-2">
    <!-- <img class="hero__img" src="./img/bottom.webp" alt=""> -->
    </div>
    </div>
</div>
<div class="hero--3 fluid-container">
    <img class="hero__img--top" src="./img/top.webp" alt="">
    <div class="hero__text d-flex flex-column justify-content-center align-items-center text-center zoomIn">
        <h2 class="hero__text--h2">Hero3</h2>
        <img class="hero__icon" src="./img/hero_icons.webp" alt="">
        <h1 class="hero__font display-1 hero__text--h1">Hero 3</h1>
        <p class= "hero__text--p"style="font-family:sans-serif; margin: .9rem auto; width:80%;" >Explore a new world with a taste from old Mexico</p>
        <button class="nav__btn ">Explore Menu</button>
    </div>
    <div class="fluid-container hero-2">
    <!-- <img class="hero__img" src="./img/bottom.webp" alt=""> -->
   
    </div>
</div>

   <!-- specials -->
<div class="specials container-lg d-flex justify-content-center flex-column align-items-center text-center">
<div class="special__text mt-5">
    <!-- <img src="./img/small.png" alt=""> -->
    <h5>Hola!</h5>
    <h3>Hungry like a Fox?</h3>
    </div>
    <div class="container my-5">
  <div class="row">
  <div class="col-lg-4 col-md-6" align="center"><img  src="./img/picture.png" alt=""></div>
    <div class="col-lg-4 col-md-6" align="center"><img  src="./img/picture.png" alt=""></div>
    <div class="col-lg-4 col-md-6" align="center"><img  src="./img/picture.png" alt=""></div>
  </div>
  </div>
</div>

<!-- happy hour  -->
<div class="container happyhour d-md-flex justify-content-center align-items-center mt-2 px-3">

    <div class="happyhour__img">
    <img src="./img/shots.jpg" alt="" class="happy__img">
    </div>

    <div class="container happy__hour--right d-flex flex-column align-items-around gap-2">
        <h5>The Party!</h5>
        <img class="hero__icon" src="./img/hero_icons.webp" alt="">
        <h1>LET'S HAPPY HOUR!</h1>
        <p>Gustavo is your place to gather with your friends and enjoy some of the best drinks around. See you after work! *Happy Hour prices and participation may vary by location.</p>
        <div class="content-main">
        <button class="content-box">See Our Specials</button>
        </div>
    </div>

</div>

<script>

    const hero = document.querySelector(".hero");
    const heroH2 = document.querySelector(".hero__text--h2");
    const heroH1 = document.querySelector(".hero__text--h1");
    const heroP = document.querySelector(".hero__text--p");
    const hero2 = document.querySelector(".hero--2");
    const hero3 = document.querySelector(".hero--3");

      function bgImage(){

    setTimeout(() => {
  hero.style.display = "none";
  hero2.style.display = "block";
}, "5000")

setTimeout(() => {
  hero2.style.display = "none";
  hero3.style.display = "block";
}, "10000")

setTimeout(() => {
  hero3.style.display = "none";
  hero.style.display = "block";
}, "15000")

setTimeout(() => {
  bgImage();
}, "15000")
    
  }



//   function bgImage(){

//     setTimeout(() => {
//   hero.style.backgroundImage = "url('./img/hero_tacos-2.png";
//   heroH2.innerText = "hello Nigger";
  
// }, "5000")

// setTimeout(() => {
//   hero.style.backgroundImage = "url('./img/hero_dish.png";
//   heroH2.innerText = "will this work";
// }, "10000")

// setTimeout(() => {
//   hero.style.backgroundImage = "url('./img/hero_fajitas.png";
//   heroH2.innerText = "lets find out";
// }, "15000")

// setTimeout(() => {
//   bgImage();
// }, "15000")
    
//   }

  bgImage()

</script>
</body>
</html>