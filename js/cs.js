document.getElementsByTagName('button')[0].addEventListener('click',newGame);
document.getElementsByTagName('button')[0].addEventListener('click',displayTimer);
document.getElementsByTagName('button')[0].addEventListener('click', startStopwatch);
document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);
const SPAWN = [0,40,80,120,160,200,240,280,320,360,400,440,500,540];  //позиции для рождения по горизонтали
var spawned = false;
var floImgStand = new Image();
floImgStand.src ='/step/pics/sit.png';
var canImg = new Image();
canImg.src = '/step/pics/canaryflight01.png';
var rightMoveArtImg1 = '/step/pics/right.png';
var rightMoveArtImg2 = '/step/pics/right2.png';
var leftMoveArtImg1 = '/step/pics/left.png';
var leftMoveArtImg2 = '/step/pics/left2.png';
var sitMoveArtImg = '/step/pics/sit.png';
var catchedImg = '/step/pics/catched.png';
var canvas = document.getElementById('myCanvas');
var ctx = canvas.getContext("2d");
var x = canvas.width/2;
var y = canvas.height-70;
var floX = 300;
var floY = 720;
var canX = 300;
var cat = new Flo();
var rightPressed = false;
var leftPressed = false;
var floWidth = 55;
var floHeight = 80;
var canWidth = 40;
var canHeight = 50;
var canSpeed = 100;
var canPadding = 30;
var canOffsetLeft = 35;
var stepsCount = 1;
var animationMoveRight = null;
var animationMoveLeft = null;
var stepPack = new stepsPack();
var a = null;
var dy = 10;
var mil = document.querySelector('.milis');
var sec = document.querySelector('.secs');
var min = document.querySelector('.mins');
var hours = document.querySelector('.hours');
var errors = document.getElementById('errors');
var score = document.getElementById('score');
var errorsLeft = null;
var txtErrors = 0;
errors.textContent  = txtErrors;
var txtScore = 0;
score.textContent = txtScore;
var intervalCatchCheck  = null;
var level5 = false;
var moveIntervalStep = null;
var spawnIntervalStep = null;
var catchedArtInterval = null;
var clearMissedInterval = null;
var checkLevelInterval = null;
var drawInterval = null;
var level = 0;

function arrayShuffle(a){
  if(a.length == 1) return this;
  for(var j, x, i = a.length; i; j = Math.floor(Math.random() * i), x = a[--i], a[i] = a[j], a[j] = x);
}
function rightMoveArt(){
    if(floImgStand.src === rightMoveArtImg1){
        floImgStand.src = rightMoveArtImg2;
        
    } else if(floImgStand.src === rightMoveArtImg2){
        floImgStand.src = rightMoveArtImg1;
    }
}
function leftMoveArt(){
    if(floImgStand.src === leftMoveArtImg1){
        floImgStand.src = leftMoveArtImg2;
    } else if(floImgStand.src === leftMoveArtImg2){
        floImgStand.src = leftMoveArtImg1;
    }
}
function keyDownHandler(e) {
    if(e.keyCode == 39) {
        rightPressed = true;
        floWidth = 75;
        floHeight = 60;
        floY = 740;
        floImgStand.src = rightMoveArtImg1;
        ctx.clearRect(floX, floY, floWidth,  -20);
    }
    else if(e.keyCode == 37) {
        leftPressed = true;
        floWidth = 75;
        floHeight = 60;
        floY = 740;
        floImgStand.src = leftMoveArtImg1;
        ctx.clearRect(floX, floY, floWidth,  -20);
    }
}
function keyUpHandler(e) {
    if(e.keyCode == 39) {
        rightPressed = false;
        floWidth = 55;
        floHeight = 80;
        floY = 720;
        floImgStand.src = sitMoveArtImg;
        ctx.clearRect(floX+floWidth, canvas.height, 25,  -floHeight);
    }
    else if(e.keyCode == 37) {
        leftPressed = false;
        floWidth = 55;
        floHeight = 80;
        floY = 720;
        floImgStand.src = sitMoveArtImg;
        ctx.clearRect(floX+floWidth, canvas.height, 25,  -floHeight);
    }
}
function checkWalls(){
    if (floX> canvas.width){
        floX = canvas.width-floWidth;
    } else if (floX< 0){
        floX = 0;
    }
}
function Flo(){
    this.spawn = function(){
    ctx.beginPath();
    ctx.drawImage(floImgStand,floX,floY,floWidth,floHeight);
    ctx.closePath();
    };
}
function stepObject(){
    arrayShuffle(SPAWN);
    var stepX = SPAWN[0];
	this.stepX = stepX;
    this.canY = 0;
    this.status = 1;
    this.bg = canImg;
    this.draw = function(){
        ctx.beginPath();
        ctx.clearRect(this.stepX,this.canY,canWidth,canHeight);
        ctx.drawImage(this.bg,this.stepX,this.canY,canWidth,canHeight);
        ctx.closePath();
        arrayShuffle(SPAWN);
	}
	this.move = function(){
	    ctx.beginPath();
        ctx.clearRect(this.stepX,this.canY,canWidth,canHeight);
        this.canY = this.canY + dy;
        ctx.drawImage(this.bg,this.stepX,this.canY,canWidth,canHeight);
        ctx.closePath();
	}
	this.clear = function(){
	    ctx.beginPath();
	    ctx.clearRect(this.stepX,this.canY,canWidth,canHeight);
	}
}
 function stepsPack(){
    var steps = [];
    this.steps = steps;
    this.length = this.steps.length;
    this.add = function(stepObject){
    	steps.push(stepObject);
/*    	console.log('ENEMYS LIST START');
        for(e=0;e<steps.length;e++){
            console.log(steps[e]);
        }
        console.log('ENEMYS LIST END');*/
    }
}
function stepMoving(){
	for(i=0;i<stepPack.steps.length;i++){
		if(stepPack.steps[i].status===1){
		stepPack.steps[i].move();
		}
	}
}
function spawnSteps(){
		spawnIntervalStep = setInterval(function(){
		a = new stepObject();
		stepPack.add(a);
		//console.log(canSpeed);
		},2500);
		moveIntervalStep = setInterval(function(){
			stepMoving();
			drawSteps();
		},canSpeed);
}
function drawSteps(){

		for(g=0;g<stepPack.steps.length;g++){
		if(stepPack.steps[g].status === 1){
		stepPack.steps[g].draw();
		}else{
		    //console.log('waiting for spawn...');
		 }
	}
}
function draw(){
  ctx.clearRect(floX, floY, floWidth, floHeight);
  checkWalls();
  cat.spawn();
  if(rightPressed && floX < canvas.width - floWidth) {
        floX += 2;
    }
    else if(leftPressed && floX > 0) {
        floX -= 2;
    }
}
function catchedStep(){
intervalCatchCheck = setInterval(function(){
    for(h=0;h<stepPack.steps.length;h++){
        if(stepPack.steps[h].status === 1 ){
          if(stepPack.steps[h].canY + canHeight  >= floY){
            if(stepPack.steps[h].stepX > floX - floWidth &&  stepPack.steps[h].stepX < floX + floWidth){
            //catched, actions to kill step;
             stepPack.steps[h].status = 0;
             ctx.clearRect(stepPack.steps[h].stepX,stepPack.steps[h].canY,canWidth,canHeight);
             console.log('CATCHED');
             catchedArtInterval = setInterval(function(){
                 floImgStand.src  = catchedImg; 
                },100);
             setTimeout(function(){
                 clearInterval(catchedArtInterval);
                 floImgStand.src  = sitMoveArtImg;
             },200);
             txtScore++;
             score.textContent = txtScore;
                }else if(stepPack.steps[h].canY > floY){
                stepPack.steps[h].status = 0;
                ctx.clearRect(stepPack.steps[h].stepX,stepPack.steps[h].canY,canWidth,canHeight);
                console.log('MISSED');
                txtErrors++;
                errors.textContent = txtErrors;
                if(txtErrors>3){
                         document.location.href="betw.php"+"?u_score="+txtScore+""
                         +"&hours="+hours+
                         "&min="+ minutes +"" +
                         "&sec="+seconds + 
                         "&msecs="+milliseconds;
                }else if(txtScore>150){
                          document.location.href="betw.php"+"?u_score="+txtScore+""
                         +"&hours="+hours+
                         "&min="+ minutes +"" +
                         "&sec="+seconds + 
                         "&msecs="+milliseconds;
                }
            }
        }
    }
    }},500);
}
function clearMissed(){
    clearMissedInterval = setInterval(function(){
        for(g=0;g<stepPack.steps.length;g++){
            if(stepPack.steps[g].missed === 1){
               stepPack.steps[g]=null; 
            }
        }
    },200);
}
function levelControl(){
    this.level = level;
    checkLevelInterval = setInterval(function(){
            if(txtScore===6){
            dy++;
            }
            if(txtScore===7){
            dy++;
            }
            if(txtScore===12){
            dy++;
            }
            if(txtScore===15){
            dy++;
            }
            if(txtScore===25){
            dy++;
            }
            if(txtScore===35){
            dy++;
            }
            if(txtScore===45){
            dy++;
            }
            if(txtScore===55){
            dy++;
            }            
            if(txtScore===65){
            dy++;
            }
            if(txtScore===75){
            dy++;
            }
            if(txtScore===85){
            dy++;
            }
            if(txtScore===95){
            dy++;
            }
            if(txtScore===105){
            dy++;
            }
    },2500);
}
            
            

function clearIntervals(){
    if(drawInterval){
        clearInterval(drawInterval)};
    if(checkLevelInterval){
        clearInterval(checkLevelInterval)};
    if(clearMissedInterval){
        clearInterval(clearMissedInterval)};
    if(catchedArtInterval){
        clearInterval(catchedArtInterval)};
    if(intervalCatchCheck){
        clearInterval(intervalCatchCheck)};
    if(spawnIntervalStep){
        clearInterval(spawnIntervalStep)};
    if(moveIntervalStep){
        clearInterval(moveIntervalStep)};
    if(animationMoveRight){
        clearInterval(animationMoveRight)};
    if(animationMoveLeft){
        clearInterval(animationMoveLeft)};
    console.log('intervals cleared');
}
function dataReset(){
    txtErrors = 0;
    errors.textContent  = txtErrors;
    txtScore = 0;
    score.textContent = txtScore;
}
function newGame(){
    dataReset();
    clearIntervals();
    levelControl();
    animationMoveRight = setInterval(rightMoveArt,200);
    animationMoveLeft = setInterval(leftMoveArt,200)
    drawInterval = setInterval(draw,10);
    spawnSteps();
    catchedStep();
    //checkLevel();
    clearMissed();
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