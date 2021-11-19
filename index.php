<!DOCTYPE html>
<html lang="ko">

<head> 
    <?php include $_SERVER['DOCUMENT_ROOT']."/include/meta.html"; ?> 
    <script src="/common/js/index_script.js"></script>
    <script type="text/javascript"> 
    function getCookie(name) { 
        var cookie = document.cookie; 
        if (document.cookie != "") { 
            var cookie_array = cookie.split("; "); 
            for ( var index in cookie_array) { 
                    var cookie_name = cookie_array[index].split("="); 
                        if (cookie_name[0] == "popupYN") { 
                            return cookie_name[1]; 
                            } 
                        } 
                    } 
                    return ; 
                } 
    function openPopup(url) { 
        var cookieCheck = getCookie("popupYN"); 
        console.log(cookieCheck)
        if (cookieCheck != "N") {
            document.getElementById("popup_kofurn_wrap").style.display = 'block';
            // window.open(url, '', 'width=900,height=540,left=0,top=100') 
        }
    } 
    function setCookie(name, value, expiredays) {
            var date = new Date();
            date.setDate(date.getDate() + expiredays);
            document.cookie = escape(name) + "=" + escape(value) + "; expires=" + date.toUTCString();
        }
    
    function closePopup() {
        if (document.getElementById("check").value) {
            setCookie("popupYN", "N", 1); 
            document.getElementById("popup_kofurn_wrap").style.display = 'none';
            // self.close();
        }
    }
    function deleteCookie() {
        setCookie("popupYN", "N", -1);
        console.log('delete Cookie')
    }
    function checkDate() {
        var date = new Date();
        var nowDate = date.toISOString().slice(0,10).replace(/-/g,"");
        // const expireDate = '20211022';
        const expireDate = '20211101';
        if(nowDate === expireDate){
            deleteCookie();
            closePopup();
        }
        console.log(nowDate === expireDate);

    }
    
    </script>

</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT']."/include/popup.html"; ?> 
    <div class="wrap">
        <?php include $_SERVER['DOCUMENT_ROOT']."/include/header.html"; ?> 

        
        <section id="main_video">
            <video oncontextmenu="return false;" id="myVideo" width="100%" height="100%" autoplay muted>
                <source src="/common/video/main_video.mp4" type="video/mp4">
            </video>
        </section>
        

        <section id="section_brand_story">
            <div class="inner">
                <div class="section_title">
                    <img data-aos="fade-up" src="/common/img/title/section_title_story.png" alt="">
                </div>
                <p data-aos="fade-up" class="font-noto">독일 데트몰드의 작은 가구 공방에서 시작된 힐커는 독일 가구만의 클래식한 매력을 지닌 브랜드입니다.<br>
                    힐커가 추구하는 정신은 최대의 가치와 차별성을 만들어 내는 것입니다.<br>
                    데트몰드의 정신을 이어받아 뛰어난 품질과 디자인의 가구를 탄생시켰습니다.<br>
                    4대째 내려오는 힐커의 자세한 이야기를 만나보세요.
                </p>
                <div data-aos="fade-up" data-aos-delay="200" class="story_img_wrap">
                    <img src="/common/img/story_img.png" alt="">
                </div>
                <div data-aos="zoom-in" class="story_btn">
                    <a href="/content/about.html">
                        <img src="/common/img/title_img_003.png" alt="">
                    </a>
                </div>
            </div>
        </section>
        
        <section id="section_purchase_guide" style="background-image: url(/common/img/purchase_guide_background.jpg); width:100%; height:632px;">
            <div class="inner">
                <div  class="txt_wrap">
                    <!--<h3 class="font-nanum">PURCHASE GUIDE</h3>
                    <p class="font-noto">단순히 제품을 사고 파는게 아닌,<br>고객 자신에게 알맞은 제품을 선택하기 위한 가이드를 제공합니다.</p>
                    <a href="/content/guide.html" class="font-nanum">구매가이드 보러가기</a>-->
                    <h3 data-aos="fade-up" class="font-nanum">Hilker's history</h3>
                    <p data-aos="fade-up" class="font-noto">130년의 역사를 걸쳐 만들어진 힐커 브랜드 이야기를 만나보세요.</p>
                    <a data-aos="zoom-in" data-aos-delay="200"href="/content/history.html" class="font-nanum">HISTORY 보러가기</a>
                </div>                
            </div>
            <img src="" alt="">
        </section>
        
        <section id="section_product">
            <div class="section_title">
                <img data-aos="fade-up" src="/common/img/title/section_title_product.png" alt="">
            </div>
            <div data-aos="fade-up" class="slider_wrap mt100">
                <div class="navigation">
                        <a ref="#" class="prev"><img src="/common/img/index/arrow_prev.png" alt="arrow_prev"/></a>
                        <a ref="#" class="next"><img src="/common/img/index/arrow_next.png" alt="arrow_next"/></a>
                </div>
                <div class="swiper-container">
                    
                    <div class="swiper-wrapper" style="">
                        <div class="swiper-slide">
                            <a href="/content/product_hermann.html">
                                <img onmouseover="this.src='/common/img/index/main_product_14-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_14.jpg'" 
                                src="/common/img/index/main_product_14.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_rein.html">
                                <img onmouseover="this.src='/common/img/index/main_product_08-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_08.jpg'" 
                                src="/common/img/index/main_product_08.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_adel.html">
                                <img onmouseover="this.src='/common/img/index/main_product_09-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_09.jpg'" 
                                src="/common/img/index/main_product_09.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_schwumg.html">
                                <img onmouseover="this.src='/common/img/index/main_product_10-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_10.jpg'" 
                                src="/common/img/index/main_product_10.jpg" alt="">
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="/content/product_oder.html">
                                <img onmouseover="this.src='/common/img/index/main_product_13-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_13.jpg'" 
                                src="/common/img/index/main_product_13.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="swiper-slide">
                            <a href="/content/product_lahit.html">
                                <img onmouseover="this.src='/common/img/index/main_product_01-1.png'" 
                                onmouseout="this.src='/common/img/index/main_product_01.png'" 
                                src="/common/img/index/main_product_01.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_ranjam.html">
                                <img onmouseover="this.src='/common/img/index/main_product_02-1.png'" 
                                onmouseout="this.src='/common/img/index/main_product_02.png'" 
                                src="/common/img/index/main_product_02.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_bezilt.html">
                                <img onmouseover="this.src='/common/img/index/main_product_03-1.png'" 
                                onmouseout="this.src='/common/img/index/main_product_03.png'" 
                                src="/common/img/index/main_product_03.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_cantabel.html">
                                <img onmouseover="this.src='/common/img/index/main_product_04-1.png'" 
                                onmouseout="this.src='/common/img/index/main_product_04.png'" 
                                src="/common/img/index/main_product_04.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_werra.html">
                                <img onmouseover="this.src='/common/img/index/main_product_05-1.png'" 
                                onmouseout="this.src='/common/img/index/main_product_05.png'" 
                                src="/common/img/index/main_product_05.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_leben.html">
                                <img onmouseover="this.src='/common/img/index/main_product_06-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_06.jpg'" 
                                src="/common/img/index/main_product_06.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_leben_ivory.html">
                                <img onmouseover="this.src='/common/img/index/main_product_07-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_07.jpg'" 
                                src="/common/img/index/main_product_07.jpg" alt="">
                            </a>
                        </div>
                        
                        
                        <div class="swiper-slide">
                            <a href="/content/product_schwan.html">
                                <img onmouseover="this.src='/common/img/index/main_product_11-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_11.jpg'" 
                                src="/common/img/index/main_product_11.jpg" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="/content/product_wert.html">
                                <img onmouseover="this.src='/common/img/index/main_product_12-1.jpg'" 
                                onmouseout="this.src='/common/img/index/main_product_12.jpg'" 
                                src="/common/img/index/main_product_12.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- Add Arrows 
                    <div class="swiper-button-prev"></div>                
                    <div class="swiper-button-next"></div>-->
                </div>
            </div>
        </section>
        
        <section id="section_location">
            <div data-aos="fade-up" class="section_title">
                <img src="/common/img/title/section_title_location.png" alt="로케이션">
            </div>
            <div class="location_info text-center font-noto ">
                <div>
                    <img data-aos="fade-up" style="margin:0 auto;" src="/common/img/index/location_hilkerkorea.png" alt="">
                </div>
                <div>
                    <div data-aos="fade-up" style="margin:20px 0 80px 0;" id="daumRoughmapContainer1586327321971" class="root_daum_roughmap root_daum_roughmap_landing" style=""></div>
                </div>
                <!--
                <div>
                    <img style="margin:0 auto;" src="/common/img/index/location_gwangju.png" alt="">
                </div>
                <div>
                    <div style="margin:20px 0 80px 0  ;" id="daumRoughmapContainer1586234041618" class="root_daum_roughmap root_daum_roughmap_landing" style=""></div>
                </div>
                -->
                <!--
                <ul class="oh">
                    <li class="fl">
                        
                    </li>
                    <li class="fl">

                        <div id="daumRoughmapContainer1586327321971" class="root_daum_roughmap root_daum_roughmap_landing" style=""></div>
                    </li>                    
                </ul>
                <ul class="oh" style="margin:80px 0 80px 0;">
                    <li class="fl">
                        <img src="/common/img/index/location_gwangju.png" alt="">
                    </li>
                    <li class="fl">
                        <div id="daumRoughmapContainer1586234041618" class="root_daum_roughmap root_daum_roughmap_landing" style=""></div>
                    </li>                    
                </ul>
                -->
            </div>
            
            <!-- * 카카오맵 - 지도퍼가기 -->
            <!-- 1. 지도 노드 -->
            <!--<div id="daumRoughmapContainer1586234041618" class="root_daum_roughmap root_daum_roughmap_landing" style="margin:80px auto;"></div>
            -->
            <!--
                2. 설치 스크립트
                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
            -->
            <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

            <!-- 3. 실행 스크립트 -->
            <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp" : "1586327321971",
		            "key" : "xuag",
                    "mapWidth" : "1200",
                    "mapHeight" : "500"
                }).render();

                new daum.roughmap.Lander({
                    "timestamp" : "1586234041618",
		            "key" : "xtfq",
                    "mapWidth" : "1200",
                    "mapHeight" : "500"
                }).render();
            </script>           
        </section>
        
        <!--wrap:e-->
        
        <!--footer:s-->
        <?php include $_SERVER['DOCUMENT_ROOT']."/include/footer.html"; ?> 
        <!--footer:e-->
    </div>
    
</body>

</html>
