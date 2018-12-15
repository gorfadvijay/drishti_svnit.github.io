
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

    
  
</head>

<body class="eyebot">

  <div id="container">
  <div id="bot" class="neutral">
    <div id="head">
      <div id="left-ear">
        <div id="left-ear-inner"></div>
      </div>
      <div id="face">
        <div id="eyes">
          <div id="left-eye"></div>
          <div id="right-eye"></div>
        </div>
        <div id="mouth"></div>
      </div>
      <div id="right-ear">
        <div id="right-ear-inner"></div>
      </div>
    </div>
  </div>
  <ul id="switches">
  
   
    <li class="waiting" onmouseover="setStatus('thinking')">|||||------------------------------------------------------------------------------------||||</li>  
    
    
  </ul>
</div>
  
  

    <script  src="js/index.js"></script>




</body>

</html>

<style type="text/css">


#switches
{
  width: 100%;
  padding: 0;
  list-style-type: none;
  text-align: center;
}

#switches li
{
  display: inline-block;
  font-size: large;
  padding: 0.5em 0.5em;
  cursor: pointer;
}

/* BOT */

#bot
{
  position: relative;
  text-align: left;
  width: 24em;
  height: 24em;
  min-width: 10em;
  min-height: 10em;
  /*border: 1px solid lightblue;*/
  margin: 0 auto;
}

#head
{
  position: relative;
  display: inline-block;
  margin-top: 15%;
  margin-left: 10%;
  width: 80%;
  height: 70%;
  /*border : 1px solid yellow;*/
}

#face
{
  position: absolute;
  margin-left: 0%;
  margin-right: 0%;
  width: 100%;
  height: 100%;
  border: 0.4em solid #FFF;
  border-radius: 1.5em;
  /*border : 1px solid red;*/
}

#left-ear, #right-ear
{
  position: absolute;
  top: 30%;
  width: 6%;
  height: 25%;
  border: 0.15em solid #FFF;
  background-color: lightgray;
  border-radius: 0.1em;
}

#left-ear
{
  left: -6%;
}

#right-ear
{
  right: -6%;
}

#left-ear-inner, #right-ear-inner
{
  position: absolute;
  top: 20%;
  width: 100%;
  height: 60%;
  background-color: lightgray;
  border-radius: 0.1em;
}

#left-ear-inner
{
  left: -150%;
}

#right-ear-inner
{
  right: -150%;
}

#eyes
{
  position: absolute;
  width: 70%;
  height: 20%;
  margin-left: 16%; /* 16 */
  margin-top: 20%; /* 20 */
  /*border : 1px solid lightseagreen;*/
}

#left-eye, #right-eye
{
  position: absolute;
  width: 35%;
  height: 100%;
  background-color: lightseagreen;
  border-radius: 0.5em;
  /*border: 0.15em solid #FFF;*/
}

 #right-eye
{
  right: 0%;
}

#mouth
{
  position: absolute;
  width: 30%;
  height: 4%;
  border-left: 0.2em solid #FFF;
  border-right: 0.2em solid #FFF;
  border-bottom: 0.2em solid #FFF;
  border-top: 0.0em solid #FFF;
  border-radius: 0.5em;
  left: 35%;
  bottom: 20%;
}

/* Animations */
#bot.neutral #left-eye, #bot.neutral #right-eye
{
   animation: blink-eyes 3s infinite ease-in alternate;
   animation-delay: 2s;
}

#bot.neutral #left-ear-inner
{
   animation: move-left-ear-inner 5.0s infinite ease alternate;
}

#bot.neutral #right-ear-inner
{
   animation: move-right-ear-inner 5.0s infinite ease alternate;
}



/* thinking */
#bot.thinking #mouth
{
   border-top: 0.2em solid #FFF;
   background-color: #FFF;
   animation: speak-mouth 1.0s infinite ease alternate;
}

@keyframes speak-mouth {
  0%   { width: 10%; height: 4%; left: 45%;}
  25% { width: 30%; height: 10%; left: 35%;}
  50% { width: 6%; height: 4%; left: 47%;}
  75% { width: 40%; height: 8%; left: 30%;}
  100% { width: 30%; height: 4%; left: 35%;}
}

/* Waiting (Thinking) */
#bot.thinking #eyes
{
   animation: glance-eyes 8s infinite ease-in-out;
   animation-delay: 2s;
}



#bot.thinking #left-ear-inner
{
   animation: move-left-ear-inner 6.0s infinite ease alternate;
   animation-delay: 4s;
}

#bot.thinking #right-ear-inner
{
   animation: move-right-ear-inner 6.0s infinite ease alternate;
   animation-delay: 4s;
}

@keyframes glance-eyes {
  0%  { margin-left: 16%; }
  10% { margin-left: 6%; }
  40% { margin-left: 6%; }
  60% { margin-left: 24%; }
  70% { margin-left: 24%; }
  80% { margin-left: 16%; }
  100% { margin-left: 16%; }
}

@keyframes pinch-mouth {
  0%   { width: 30%; left: 35%; }
  48%  { width: 30%; left: 35%; }
  50%  { width: 10%; left: 45%; }
  52%  { width: 30%; left: 35%; }
  100% { width: 30%; left: 35%;}
}

@keyframes move-left-ear-inner {
  0%   { left: -150%; }
  48%  { left: -150%; }
  50%  { left: -100%; }
  52%  { left: -150%; }
  100% { left: -150%; }
}

@keyframes move-right-ear-inner {
  0%   { right: -150%; }
  48%  { right: -150%; }
  50%  { right: -100%; }
  52%  { right: -150%; }
  100% { right: -150%; }
}

/* thinking */


</style>
<script type="text/javascript">
  function setStatus(newstatus)
{
  $("#bot").removeClass("thinking");
  $("#bot").addClass(newstatus);
}
</script>