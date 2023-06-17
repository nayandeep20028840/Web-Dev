<!DOCTYPE html>
<html>
   <head>
      <title>Home</title>
      <style type="text/css">
         :root{
         --grad:linear-gradient(to bottom right, #ffeb3b, #e91e63);
         --clip: polygon(52% 65%, 100% 38%, 100% 0, 0 0, 0% 38%);
         --shadow:rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
         --c:#eaeaea;
         --g:#74d800;
         }
         @font-face{
         src:url("q.ttf");
         font-family: f;
         }body{
         font-family: f;
         }
         *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         }.grad{
         clip-path: var(--clip);
         background-image: var(--grad);
         height: 120vh;
         width: 100%;position: fixed;
         
         }.qqq{
          display: flex;
          align-items: center;
         }
         .body{
          position: absolute;top:50%;
          left:50%;
          transform: translate(-50% , -50%);
         	box-shadow: var(--shadow);
         	background: white;
         	width:295px;
         	border-radius: 5px;
         }.body_head{
         	height: 70px;
         	width:100%;
         	border-bottom: 1px solid var(--c);
            display: flex;
            align-items: center;
            padding: 10px

         }.img{
         	width:55px;
         	height: 55px;
         	border-radius: 5px;
         	border:1px solid grey;
         
         }.head_text{
         	margin-left: 10px;
         }h3{
         	font-size: 18px;
         }
         h4{
         	color:#313131;
         	font-size: 14px;
         }.b{
         	padding: 10px;
          display: grid;grid-template-columns: repeat(3,1fr);grid-template-rows: repeat(3,1fr);
         	border-bottom: 1px solid var(--c);
          grid-gap: 10px;
         }.i{
         	border-radius: 5px;
          height: 75px;width:75px;object-fit: cover;
         	
         }.c_btm{
             width: 100%;
             display: flex;align-items: center;
             justify-content: flex-end;
             padding: 10px;
             justify-content: space-between;
         }button{
         	padding: 10px 20px;font-family: f;color:white;
         	border:none;
         	outline: none;
         	border-radius: 5px;
         	background: #673ab7;
         	transition: 0.6s ease;
         	text-transform: uppercase;
         }button:hover{
         opacity: .8;
     }.text{
     	display: none;color: red;
     }.green{
      color:green;
     }.red{
      color:red;
     }.right{
      flex:1;
     }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
      	function val(e) {
$(".i").click(function () {
$(this).css({'opacity':'.5'});
});
$(".text").append(e+" ");
$(".bt").click(function () {
	var e=$(".text").text();
$.post("verify.php",{
      			data:e
      		},function (a) {
      			if(a=="ok"){
              
              $(".check").text("Right Captcha.");
              
            }else{

               $(".check").text("Wrong Captcha.");
            };
      		});
});}
      </script>   
   </head>
   <body><?php include 'include.php';?>
      <div class="grad"></div>
 
      <div class="body">
           <div class="body_head">
           	<img src="files/<?php echo $folder."/".$i ;?>.png" class="img">
           	<div class="head_text">
              
           		<h3>Onkar Jha Recaptcha</h3>
           		<h4>Hint:- <?php echo $hint ;?></h4>
           	</div>
           
           </div>
           	<div class="b">
           		<img class="i" src="files/<?php echo $folder."/".$one ;?>.png" onclick="val(1)">
           		<img class="i" src="files/<?php echo $folder."/".$two;?>.png" onclick="val(2)">
           		<img class="i" src="files/<?php echo $folder."/".$three;?>.png" onclick="val(3)">
           		<img class="i" src="files/<?php echo $folder."/".$four?>.png" onclick="val(4)">
           		<img class="i" src="files/<?php echo $folder."/".$five?>.png" onclick="val(5)">
           		<img class="i" src="files/<?php echo $folder."/".$six?>.png" onclick="val(6)">
           		<img class="i" src="files/<?php echo $folder."/".$seven?>.png" onclick="val(7)">
           		<img class="i" src="files/<?php echo $folder."/".$eight?>.png" onclick="val(8)">
           		<img class="i" src="files/<?php echo $folder."/".$nine?>.png" onclick="val(9)">
           	</div>
           	<div class="text"></div>
           	<div class="c_btm">
              <p class="check"></p>
           		<button class="bt">Verify</button>
           	</div>
      </div>
      

   </body>
</html>