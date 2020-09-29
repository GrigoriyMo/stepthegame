/*document.getElementsByTagName('button')[0].addEventListener('click',newGame);
document.getElementsByTagName('button')[0].addEventListener('click',displayTimer);
document.getElementsByTagName('button')[0].addEventListener('click', startStopwatch);
document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);*/
    document.getElementsByClassName('right')[0].addEventListener('touchstart',rightTouchStart);
    document.getElementsByClassName('right')[0].addEventListener('touchend',rightTouchEnd);
    document.getElementsByClassName('left')[0].addEventListener('touchstart',leftTouchStart);
    document.getElementsByClassName('left')[0].addEventListener('touchend',leftTouchEnd);
document.getElementsByClassName('start')[0].addEventListener('click',newGame);
const SPAWN = [0,40,80,120,160,200,240,280,320,360,400,440,500,540];  //позиции для рождения по горизонтали
var spawned = false;
var floImgStand = new Image();
floImgStand.src ='../pics/mob/Flositting.png';
var canImg = new Image();
canImg.src = '../pics/mob/Stepich.png';
var rightMoveArtImg1 = 'https://step-grigoriymoscow.c9users.io/pics/mob/FloGoright_1.png';
var rightMoveArtImg2 = 'https://step-grigoriymoscow.c9users.io/pics/mob/FloGoright_2.png';
var leftMoveArtImg1 = 'https://step-grigoriymoscow.c9users.io/pics/mob/FloGoleft_1.png';
var leftMoveArtImg2 = 'https://step-grigoriymoscow.c9users.io/pics/mob/FloGoleft_2.png';
var sitMoveArtImg = '../pics/mob/Flositting.png';
var catchedImg = '../pics/mob/Flocatching.png';
var canvas = document.getElementById('myCanvas');
var ctx = canvas.getContext("2d");
var x = canvas.width/2;
var y = canvas.height-70;
var floX = 450;
var floY = 1120;
var canX = 300;
var cat = new Flo();
var rightPressed = false;
var leftPressed = false;
var floWidth = 110;
var floHeight = 160;
var canWidth = 80;
var canHeight = 100;
var canSpeed = 100;
var canPadding = 60;
var canOffsetLeft = 70;
var stepsCount = 1;
var animationMoveRight = setInterval(rightMoveArt,200);
var animationMoveLeft = setInterval(leftMoveArt,200);
var stepPack = new stepsPack();
var a = null;
var dy = 20;
//var mil = document.querySelector('.milis');
//var sec = document.querySelector('.secs');
//var min = document.querySelector('.mins');
//var hours = document.querySelector('.hours');
//var errors = document.getElementById('errors');
//var score = document.getElementById('score');
//var txtErrors = 0;
//errors.textContent  = txtErrors;
//var errorsLeft = null;
//var txtScore = 0;
var intervalCatchCheck  = null;
var level5 = false;
//score.textContent = txtScore;

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
        floImgStand.src = rightMoveArtImg1;
    }
    else if(e.keyCode == 37) {
        leftPressed = true;
        floImgStand.src = leftMoveArtImg1;
    }
}
function keyUpHandler(e) {
    if(e.keyCode == 39) {
        rightPressed = false;
        floImgStand.src = sitMoveArtImg;
    }
    else if(e.keyCode == 37) {
        leftPressed = false;
        floImgStand.src = sitMoveArtImg;
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
    	//
    	console.log('ENEMYS LIST START');
        for(e=0;e<steps.length;e++){
            console.log(steps[e]);
        }
        console.log('ENEMYS LIST END');
        //
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
		var spawnIntervalStep = setInterval(function(){
		a = new stepObject();
		stepPack.add(a);
		
		},4400);
		
		var moveIntervalStep = setInterval(function(){
			stepMoving();
			drawSteps();
		},canSpeed);
		
}
function drawSteps(){
	if(spawned){
		for(c=0;c<stepPack.steps.length;c++){
		if(stepPack.steps[h].status === 1){
		stepPack.steps[c].draw();
		}else{
		    console.log('waiting for spawn...');
		 }
	}}
}

function draw(){
  ctx.clearRect(floX, floY, floWidth, floHeight);
  checkWalls();
  cat.spawn();
  if(rightPressed && floX < canvas.width - floWidth) {
        floX += 2;
        //console.log(floX);
    }
    else if(leftPressed && floX > 0) {
        floX -= 2;
        		//console.log(floX);
    }

}
function rightTouchStart(){
    rightPressed = true;
    floImgStand.src = rightMoveArtImg1;
}

function rightTouchEnd(){
    rightPressed = false;
    floImgStand.src = sitMoveArtImg;
}

function leftTouchStart(){
    leftPressed = true;
    floImgStand.src = leftMoveArtImg1;
}

function leftTouchEnd(){
    leftPressed = false;
    floImgStand.src = sitMoveArtImg;

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
             var catchedArtInterval = setInterval(function(){floImgStand.src  = catchedImg; },10);
             setTimeout(function(){
                 clearInterval(catchedArtInterval);
                 floImgStand.src  = sitMoveArtImg;
             },400);
             txtScore++;
             
             score.textContent = txtScore;
             
                }else if(stepPack.steps[h].canY > floY){
                stepPack.steps[h].status = 0;
                ctx.clearRect(stepPack.steps[h].stepX,stepPack.steps[h].canY,canWidth,canHeight);
                console.log('MISSED');
                txtErrors++;
                errors.textContent = txtErrors;
                if(txtErrors>15){
                         document.location.href="credits_add.php"+"?u_score="+txtScore+""
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
    var clearMissedInterval = setInterval(function(){
        for(g=0;g<stepPack.steps.length;g++){
            if(stepPack.steps[g].missed === 1){
               stepPack.steps[g]=null; 
            }
        }
    },500);
}

function checkLevel(){
    var checkLevelInterval = setInterval(function(){
        if(!level5){
            if(txtScore>5){
            level5 = true;
            canSpeed -= 50; 
            console.log(canSpeed +"LEVEL");
            }
        }
    },2000);
}

function newGame(){
var drawInterval = setInterval(draw,10);

spawnSteps();
catchedStep();
//checkLevel();
//clearMissed();
}
///////////////////////////////////////////////////////////////////TIMER 



