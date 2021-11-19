$(document).ready(function(){
    //initialize swiper when document ready 
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters 
        direction: 'horizontal', 
        loop: true,
        navigation: { 
            nextEl: '.swiper-button-next', 
            prevEl: '.swiper-button-prev', 
        },
        slidesPerView: 4,        
    });
    
    $('.prev').on('click', function(e){ //swiper 2.X 버전 스크립트 
		e.preventDefault();					//이벤트 객체의 preventDefault 메소드를 실행하면 기본 동작이 취소된다	
		mySwiper.swipePrev();
		///return false ;					// ie9 이하 버전에서는 event.returnValue를 false로 해야 한다. 
	});
	$('.next').on('click', function(e){
		e.preventDefault();					//이벤트 객체의 preventDefault 메소드를 실행하면 기본 동작이 취소된다	
        mySwiper.swipeNext();
		//return false ;
    });
    
    var mo_mySwiper = new Swiper ('.mo-swiper-container', {
        // Optional parameters 
        direction: 'horizontal', 
        loop: true,
        navigation: { 
            nextEl: '.swiper-button-next', 
            prevEl: '.swiper-button-prev', 
        },
        slidesPerView: 1,
    });
    //메인페이지 메뉴 자동 슬라이드 기능 ( 화살표 버튼에 마우스 이벤트 감지 )
    function Timer(fn, t) {
        var timerObj = setInterval(fn, t);
    
        this.stop = function() {
            if (timerObj) {
                clearInterval(timerObj);
                timerObj = null;
            }
            return this;
        }
    
        // start timer using current settings (if it's not already running)
        this.start = function() {
            if (!timerObj) {
                this.stop();
                timerObj = setInterval(fn, t);
            }
            return this;
        }
    
        // start with new interval, stop current interval
        this.reset = function(newT) {
            t = newT;
            return this.stop().start();
        }
    }
    var timer = new Timer(function(e) {		//이벤트 객체의 preventDefault 메소드를 실행하면 기본 동작이 취소된다	
        mySwiper.swipeNext();
        
    }, 2500);
    $('.next , .prev').mouseover(function (e){
        // clearInterval(interval);
        timer.stop();
    });
    $('.next , .prev').mouseleave(function (e){
       timer.start();
    });
});