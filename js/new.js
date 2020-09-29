    //i don't know, what are you doing here......//////////////////////
/*window.onkeydown    =  floControl;
window.onkeyup      =  floControl_2;*/
document.getElementsByClassName('right')[0].addEventListener('touchstart',rightTouchStart);
document.getElementsByClassName('right')[0].addEventListener('touchend',rightTouchEnd);
document.getElementsByClassName('left')[0].addEventListener('touchstart',leftTouchStart);
document.getElementsByClassName('left')[0].addEventListener('touchend',leftTouchEnd);

const LEFTWALL      = 0,                           //граница левой стороны игрового поля
    RIGHTWALL       = 300,                          //граница правой стороны игрового поля  
    SPAWN           = [0,20,40,60,80,100,120,140,160,180,200,220,240,260,280,300,320,340];  //позиции для рождения по горизонтали
  

  var spawnInterval = null,
  ms                = null, 
  pos               = 0,                      
  posStep           = 0,
  stepDown          = 0,
  poss              = null,
  errorsLeft        = null,
  txtErrors         = 0,
  score             = null,
  txtScore          = 0,
  stepImg           ='url(../pics/mob/can.gif)',
  floRight          ='../pics/mob/right.png',
  floLeft          ='../pics/mob/left.png',
  flo               = document.getElementById('flo'),
  gameStarted       = false,
  step              = null,
  k                 = null,
  id                = 0,
  interval          = null,
  intervalSpawn     = null,
  intervalFly       = null,
  intervalF         = null,
  gOInterval        = null,
  intervalCatchCheck= null,
  intervalMeow      = null,
  intervalMeow2     = null,
  npcs              = [],
  npc               = null,
  spawned           = null,
  timer             = null,
  flag              = null,
  mil               = null,
  sec               = null,
  min               = null,
  hours             = null,
  speed             = null;
var rightPressed = false;
var leftPressed = false;


/////////////////////////////////////////////////////////////////// ARRAYSHUFFLE FUNCTION;
function arrayShuffle(a){
  if(a.length == 1) return this;
  for(var j, x, i = a.length; i; j = Math.floor(Math.random() * i), x = a[--i], a[i] = a[j], a[j] = x);
}
/////////////////////////////////////////////////////////////////// KEYBOARD CONTROLS FUNCTION;
function floControl(e){
var flo = document.getElementById('flo');
var meow = document.getElementsByClassName('meowBar')[0];
if(leftPressed)      
 {
 flo.className ='floleft';
 poss          = pos-=10;
  flo.style.marginTop = "400px"
 flo.style.left= pos+"px";
 meow.style.left= pos+"px";

 }
else if (rightPressed)
 {
   //alert('message');
 flo.className ='floright';
 this.poss          = pos+=10;
 flo.style.marginTop = "400px"
 flo.style.left= pos+"px";
 meow.style.left= pos+"px";

 }
setInterval(function(){
  if(pos<LEFTWALL)
  {
  pos            = LEFTWALL;
  flo.style.left = pos+"px";
  meow.style.left = pos+"px";
  }
  else if(pos>RIGHTWALL+20)
  {
  pos            = RIGHTWALL-1;

  flo.style.left = pos+"px";
  meow.style.left = pos+"px";
  }
},500);


}

function floControl_2(e){

  var flo = document.getElementById('flo');
  if(leftPressed==false){
      flo.style.marginTop = "380px"
    flo.className='flo';
  }
  if(rightPressed==false){
      flo.style.marginTop = "380px"
    flo.className='flo';    
  }
}


function rightTouchStart(){

    rightPressed = true;
}

function rightTouchEnd(){
    rightPressed = false;
}

function leftTouchStart(){
    leftPressed = true;
}

function leftTouchEnd(){
    leftPressed = false;

}
/////////////////////////////////////////////////////////////////// NEW GAME FUNCTION;
function newGame (){
  alert('Game Started');
  if(cat = document.getElementById('flo')){
    playArea.removeChild(cat);
    console.log('cat cleared');
    kohska = new floObject();
    kohska.newCat();
  }else{
  kohska = new floObject();
  kohska.newCat();
  }
  var flo            = document.getElementById('flo');
  txtErrors          = 0;
  errors.textContent = txtErrors;
  txtScore           = 0;
  score.textContent  = txtScore;
  stepDown           = 0;
  id                 = 1;
  clearInterval(intervalCatchCheck);
  clearInterval(spawnInterval);
  clearSteps();
  step               = null;
  pos                = 0;
  flo.style.left     = pos+"px";
  gameStarted        = true;
  spawnStep();
  catchedStep();
  clearCatched();
  clearMissed();
  deleteInactiveOne();
  deleteInactiveTwo();
  gameOver();
  meowMeow();
  //gotIt()

  }
///////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////// CATCH FUNCTION;
function catchedStep(){

var flo = document.getElementById('flo');
var steps = document.getElementsByClassName('step');

intervalCatchCheck = setInterval(function(){
  if(steps.length>0){
  for(k=0;k<steps.length;k++){
  if(steps[k].style.marginTop === flo.style.marginTop && steps[k].style.left === flo.style.left){
    
    //alert(steps[k].style.marginTop +"==" +flo.style.marginTop + 'STEP CATCHED' + steps[k].id);
    txtScore++;
    score.textContent = txtScore;
    steps[k].className = 'catchedstep';
     setTimeout(function(){
      flo.className = 'flocatch';
    },1);
    setTimeout(function(){
      flo.className = 'flo';
    },500);
    
    
    }
    
}} else {
  return false; //game over
}},1);
}
/////////////////////////////////////////////////////////////////// OK CLEAR STEPS FUNCTION;
function clearSteps(){
  
  var steps = document.getElementsByClassName('step');
  for (i=0;i < steps.length;i++){
    playArea.removeChild(steps[i]);
    for(j=0; j < steps.length; i++){
      playArea.removeChild(steps[j]);
    }
  }
}
/////////////////////////////////////////////////////////////////// OBJ(STEPS СОЗДАНИЕ);
function stepObject(id){
var stepDown = 0;
var step     = document.createElement('div');
var playArea = document.getElementById('playArea');
var speed = 10; //NEW
this.id      = id;
function build(){
  step.style.height     ='100px';
  step.style.width      ='80px';
  step.style.display    ='block';
  step.style.position   ='absolute';
  step.setAttribute('class','step');
  step.setAttribute('id',id);
  arrayShuffle(SPAWN);
  posStep               = SPAWN[0];
  step.style.left       = posStep;
  step.style.marginTop  = '0px';
  if(playArea.appendChild(step))
    {console.log('# '+ id + ' created');
      console.log("style.left is: " + step.style.left.replace(/[^0-9]/g, ''));
    }
 }
function move(){
 ms = setInterval (function(){
   
    stepDown = stepDown + 1;
    step.style.marginTop = stepDown+'px';
    if(stepDown>800 && step.className=='step'){
      txtErrors++;
      errors.textContent = txtErrors;
      step.className = 'missed'
    }
    
    //console.log("gorizontPosition is : " + this.gorizontPosition);
    //alert(stepDown);
  },speed);
 }
this.run = function(){
  build();
  move();

 }
}
/////////////////////////////////////////////////////////////////// FLO & BAR CLASS FUNCTION;
function floObject(){
  
  var cat = document.createElement('div');
  var meow = document.createElement('div');
  var playArea = document.getElementById('playArea');

  function buil(){
    cat.setAttribute('class','flo'); 
    cat.setAttribute('id','flo');
    cat.style.marginTop = '380px';
    playArea.appendChild(cat);
    console.log("cat created ;")
    meow.setAttribute('class','meowBar');
    playArea.appendChild(meow);
    }
    this.newCat = function(){
    buil();
  }

}
/////////////////////////////////////////////////////////////////// STEPS SPAWN FUNCTION;
function spawnStep(){
  spawned = true;

  //if (gameStarted)
  spawnInterval = setInterval(function()
  {
  var steps = document.getElementsByClassName('step');
  objName = new stepObject(id);
  npcs.push(objName);
  id++;
  objName.run();
  
  if(steps.length>5){
    clearInterval(spawnInterval)
  }
},4000);

  }
  

///////////////////////////////////////////////////////////////////
function meowMeow(){
  setInterval(floControl,50);
  setInterval(floControl_2,500);
  var flo = document.getElementById('flo');
  var steps = document.getElementsByClassName('step');
  var meow = document.getElementsByClassName('meowBar')[0];
  intervalMeow = setInterval(function(){
    if(steps.length>0){
      for(k=0;k<steps.length;k++){
        if(steps[k].style.left === flo.style.left){
        console.log('MEOW MEOW MOEW ');
        meow.style.display='block';
        setTimeout(function(){
          meow.style.display='none';
        
        },400);
      }
    }
  }

  },0.5);
}

///////////////////////////////////////////////////////////////////
function clearCatched(){
  var clearCatchedInterval = setInterval(function ()
  {
    var cStep = document.getElementsByClassName('catchedstep');
    for(k=0;k<cStep.length;k++)
    cStep[k].style.display='none';

},
1)
  ;}

function clearMissed(){
  var clearCatchedInterval = setInterval(function ()
  {
    var mStep = document.getElementsByClassName('missed');
    for(k=0;k<mStep.length;k++)
    mStep[k].style.display='none';
    
},
1)
  ;}
function deleteInactiveOne(){
  var deleteInactiveStepsInterval = setInterval(function ()
  {
    var inactiveStepsOne = document.getElementsByClassName('missed');
    for(v=0;v<inactiveStepsOne.length;v++){
      playArea.removeChild(inactiveStepsOne[v]);

    }
  },3000);
}

function deleteInactiveTwo(){
  var deleteInactiveStepsInterval = setInterval(function ()
  {
    var inactiveStepsOne = document.getElementsByClassName('catchedstep');
    for(v=0;v<inactiveStepsOne.length;v++){
      playArea.removeChild(inactiveStepsOne[v]);

    }
  },3000);
}

///////////////////////////////////////////////////////////////////TIMER 

// Get Date start point
function startStopwatch() {
  flag = true;
  initialDate = new Date;
}

// calculate timer
function getTime() {

  var currentDate = new Date;
  timer = new Date (currentDate - initialDate);
  
  milliseconds = timer.getMilliseconds();
  seconds = timer.getSeconds();
  minutes = timer.getMinutes();
  hours = timer.getUTCHours();

  if(milliseconds < 100){
    milliseconds = '0' + milliseconds;
  }
  if(seconds < 10){
    seconds = '0' + seconds;
  }
  if (minutes < 10){
    minutes = '0' + minutes;
  }
  if (hours < 10){
    hours = '0' + hours;
  }
}
// display timer in document
function counter() {
  getTime();
  mil.innerHTML   = milliseconds;
  sec.innerHTML   = seconds;
  min.innerHTML   = minutes;
  hours.innerHTML = hours;
}
// interval for display
function displayTimer() {
  timerId = setInterval(counter, 10);
}
///////////////////////////////////////////////////////////////////
function gameOver(){
  gOInterval = setInterval(function(){
    if(txtErrors>20){
     document.location.href="credits_add.php"+"?u_score="+txtScore+""
     +"&hours="+hours+
     "&min="+ minutes +"" +
     "&sec="+seconds + 
     "&msecs="+milliseconds;
    }
  },1000);
}
///////////////////

function clearIntervals (){
    clearInterval(spawnInterval);
    clearInterval(ms);
    console.log('STOP');
}


/////////////////////////////////////////////////////////////////// WINDOW ONLOAD FUNCTION;
window.onload         = function(){

  flag            = false;

  var flo             = document.getElementById('flo');
  var playArea        = document.getElementById('playArea');

  document.getElementsByClassName('button')[0].addEventListener('touchstart',newGame);




  errors              = document.getElementById('errors');
  errors.textContent  = txtErrors;
  score               = document.getElementById('score');
  score.textContent   = txtScore;
  //flo.style.marginTop = '730px';
}