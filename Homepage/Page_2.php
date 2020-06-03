		<div id="PageLoad">
			
			<style>
				/* S : Fixed header and footer ---------- */
				#header, #footer {
					position:fixed;
					left:0px;
					height: 50px;
					display:block;
					width: 100%;
					background: #1e2327;
					z-index:9;
					text-align:center;
					color: #f2f2f2;
					padding: 20px 0 0 0;
				}

				#header {
					top:0px;
					padding: 0;
					border-bottom: #ffaf54 3px solid;
				}
				#footer {
					height: 150px;
					bottom:0px;
					border-top: #fa8478 3px solid;
					padding: 20px;
				}
				#footer .com-info {width:100%;height:100%}
				#footer .com-info .logo {float:left;width:170px;height:100%;padding:20px}
				#footer .com-info .center {float:left;width:calc(100% - 300px);padding:0 20px;font-size:12px;font-weight:100;color:#909ca5;text-align:left}
				#footer .com-info .center .etc-menu {width:100%;height:35px;border-bottom:1px solid #404447}
				#footer .com-info .center .etc-info {width:100%;padding:10px 0;line-height:20px}
				#footer .com-info .center a {color:#909ca5;text-decoration:none}
				#footer .com-info .right {float:left;width:130px;height:100%;text-align:center}
				/* E : Fixed header and footer ---------- */

				/* S : background and styles ------------ */
				#section1,
				#section2,
				#section3,
				#section4,
				#slide0, #slide1, #slide2{
					background-size: cover;
					background-attachment: fixed;
				}

				#section0{
				//	background-size: initial;
					background-image: url(./image/BG_PLUSPAY.png);
					padding:80px 80px 180px 400px;
				}
				#section1{
					background-image: linear-gradient(22.5deg, rgba(67, 67, 67, 0.02) 0%, rgba(67, 67, 67, 0.02) 29%,rgba(47, 47, 47, 0.02) 29%, rgba(47, 47, 47, 0.02) 37%,rgba(23, 23, 23, 0.02) 37%, rgba(23, 23, 23, 0.02) 55%,rgba(182, 182, 182, 0.02) 55%, rgba(182, 182, 182, 0.02) 69%,rgba(27, 27, 27, 0.02) 69%, rgba(27, 27, 27, 0.02) 71%,rgba(250, 250, 250, 0.02) 71%, rgba(250, 250, 250, 0.02) 100%),linear-gradient(67.5deg, rgba(117, 117, 117, 0.02) 0%, rgba(117, 117, 117, 0.02) 14%,rgba(199, 199, 199, 0.02) 14%, rgba(199, 199, 199, 0.02) 40%,rgba(33, 33, 33, 0.02) 40%, rgba(33, 33, 33, 0.02) 48%,rgba(135, 135, 135, 0.02) 48%, rgba(135, 135, 135, 0.02) 60%,rgba(148, 148, 148, 0.02) 60%, rgba(148, 148, 148, 0.02) 95%,rgba(53, 53, 53, 0.02) 95%, rgba(53, 53, 53, 0.02) 100%),linear-gradient(135deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 6%,rgba(251, 251, 251, 0.02) 6%, rgba(251, 251, 251, 0.02) 18%,rgba(2, 2, 2, 0.02) 18%, rgba(2, 2, 2, 0.02) 27%,rgba(253, 253, 253, 0.02) 27%, rgba(253, 253, 253, 0.02) 49%,rgba(128, 128, 128, 0.02) 49%, rgba(128, 128, 128, 0.02) 76%,rgba(150, 150, 150, 0.02) 76%, rgba(150, 150, 150, 0.02) 100%),linear-gradient(90deg, #ffffff,#ffffff);
					padding:80px 80px 180px 400px;
				}
				#section3{
					background-image: radial-gradient(circle at 13% 47%, rgba(140, 140, 140,0.03) 0%, rgba(140, 140, 140,0.03) 25%,transparent 25%, transparent 100%),radial-gradient(circle at 28% 63%, rgba(143, 143, 143,0.03) 0%, rgba(143, 143, 143,0.03) 16%,transparent 16%, transparent 100%),radial-gradient(circle at 81% 56%, rgba(65, 65, 65,0.03) 0%, rgba(65, 65, 65,0.03) 12%,transparent 12%, transparent 100%),radial-gradient(circle at 26% 48%, rgba(60, 60, 60,0.03) 0%, rgba(60, 60, 60,0.03) 6%,transparent 6%, transparent 100%),radial-gradient(circle at 97% 17%, rgba(150, 150, 150,0.03) 0%, rgba(150, 150, 150,0.03) 56%,transparent 56%, transparent 100%),radial-gradient(circle at 50% 100%, rgba(25, 25, 25,0.03) 0%, rgba(25, 25, 25,0.03) 36%,transparent 36%, transparent 100%),radial-gradient(circle at 55% 52%, rgba(69, 69, 69,0.03) 0%, rgba(69, 69, 69,0.03) 6%,transparent 6%, transparent 100%),linear-gradient(90deg, rgb(255,255,255),rgb(255,255,255));
					padding:80px 80px 180px 400px;
				}
				#section4{
					background:rgba(254,108,147,0.8);
				//	background-image: linear-gradient(22.5deg, rgba(67, 67, 67, 0.02) 0%, rgba(67, 67, 67, 0.02) 29%,rgba(47, 47, 47, 0.02) 29%, rgba(47, 47, 47, 0.02) 37%,rgba(23, 23, 23, 0.02) 37%, rgba(23, 23, 23, 0.02) 55%,rgba(182, 182, 182, 0.02) 55%, rgba(182, 182, 182, 0.02) 69%,rgba(27, 27, 27, 0.02) 69%, rgba(27, 27, 27, 0.02) 71%,rgba(250, 250, 250, 0.02) 71%, rgba(250, 250, 250, 0.02) 100%),linear-gradient(67.5deg, rgba(117, 117, 117, 0.02) 0%, rgba(117, 117, 117, 0.02) 14%,rgba(199, 199, 199, 0.02) 14%, rgba(199, 199, 199, 0.02) 40%,rgba(33, 33, 33, 0.02) 40%, rgba(33, 33, 33, 0.02) 48%,rgba(135, 135, 135, 0.02) 48%, rgba(135, 135, 135, 0.02) 60%,rgba(148, 148, 148, 0.02) 60%, rgba(148, 148, 148, 0.02) 95%,rgba(53, 53, 53, 0.02) 95%, rgba(53, 53, 53, 0.02) 100%),linear-gradient(135deg, rgba(190, 190, 190, 0.02) 0%, rgba(190, 190, 190, 0.02) 6%,rgba(251, 251, 251, 0.02) 6%, rgba(251, 251, 251, 0.02) 18%,rgba(2, 2, 2, 0.02) 18%, rgba(2, 2, 2, 0.02) 27%,rgba(253, 253, 253, 0.02) 27%, rgba(253, 253, 253, 0.02) 49%,rgba(128, 128, 128, 0.02) 49%, rgba(128, 128, 128, 0.02) 76%,rgba(150, 150, 150, 0.02) 76%, rgba(150, 150, 150, 0.02) 100%),linear-gradient(90deg, #ffffff,#ffffff);
					padding:80px 80px 180px 400px;
				}
				#slide0{
					background-image: radial-gradient(circle at 57% 36%, hsla(263,0%,78%,0.04) 0%, hsla(263,0%,78%,0.04) 10%,transparent 10%, transparent 100%),radial-gradient(circle at 22% 61%, hsla(263,0%,78%,0.04) 0%, hsla(263,0%,78%,0.04) 36%,transparent 36%, transparent 100%),radial-gradient(circle at 68% 97%, hsla(263,0%,78%,0.04) 0%, hsla(263,0%,78%,0.04) 41%,transparent 41%, transparent 100%),radial-gradient(circle at 57% 89%, hsla(263,0%,78%,0.04) 0%, hsla(263,0%,78%,0.04) 30%,transparent 30%, transparent 100%),radial-gradient(circle at 39% 80%, hsla(263,0%,78%,0.04) 0%, hsla(263,0%,78%,0.04) 22%,transparent 22%, transparent 100%),radial-gradient(circle at 88% 71%, hsla(263,0%,78%,0.04) 0%, hsla(263,0%,78%,0.04) 30%,transparent 30%, transparent 100%),linear-gradient(0deg, rgb(255,255,255),rgb(255,255,255));
					padding:80px 80px 180px 400px;
				}
				#slide1{
					background-image: repeating-linear-gradient(90deg, rgba(246,246,246, 0.1) 0px, rgba(246,246,246, 0.1) 20px,transparent 20px, transparent 40px),repeating-linear-gradient(0deg, rgba(246,246,246, 0.1) 0px, rgba(246,246,246, 0.1) 20px,transparent 20px, transparent 40px),linear-gradient(90deg, #ffffff,#ffffff);
					padding:80px 80px 180px 400px;
				}
				#slide2{
					background-image: repeating-linear-gradient(90deg, rgba(246,246,246, 0.1) 0px, rgba(246,246,246, 0.1) 20px,transparent 20px, transparent 40px),repeating-linear-gradient(0deg, rgba(246,246,246, 0.1) 0px, rgba(246,246,246, 0.1) 20px,transparent 20px, transparent 40px),linear-gradient(90deg, #ffffff,#ffffff);
					padding:80px 80px 180px 400px;
				}
				/* E : background and styles ------------ */
				

				.outer {display:table;width:100%;height:100%;}
				.inner {display:table-cell;text-align:center;vertical-align:middle}
				.card {display:inline-block;width:645px;height:100%;border-radius:15px;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);overflow:hidden}
				.title {width:100%;height:80px;line-height:80px;background:#fa8478;font-family:'S-CoreDream-5Medium';color:#fff;font-size:28px}
				.content {width:100%;height:100%;padding:20px;text-align:left}
				.content_txt_i {display:inline-block;position:relative;height:60px;font-size:18px;color:#FE6C93}
				.content_txt_i:before {content:'';display:block;position:absolute;left:-4px;right:-4px;bottom:35px;height:8px;background-color:#FFEBFE;border-radius:2px}
				.txt_info {display:inline-block;position:relative}

				.content_txt_img35 {width:35%;float:left}
				.content_txt_img100 {width:100%}
				.content_txtarea_65 {width:65%;padding-left:30px;float:right}
				.content_txtarea_100 {width:100%}
				
				.content_txt_t {display:inline-block;position:relative;margin-top:30px;line-height:50px;font-size:18px;color:#24A6BD}
				.content_txt_t:before {content:'';display:block;position:absolute;left:-4px;right:-4px;bottom:13px;height:8px;background-color:#EBF7FF;border-radius:2px}
				.content_txt_c {padding-left:45px;line-height:22px;font-size:14px;color:#111}
				.content_txt_s {padding-left:45px;margin-top:40px;line-height:25px;font-size:14px;color:#002266}
				.content_txt_c2 {margin-top:35px;margin-left:30px;padding-left:50px;line-height:28px;font-size:17px;color:#002266}

				.icon_1 {background: url(./image/icon_site_1.png) no-repeat}
				.icon_2 {background: url(./image/icon_site_2.png) no-repeat}
				.icon_3 {background: url(./image/icon_site_3.png) no-repeat}
				.icon_4 {background: url(./image/icon_site_4.png) no-repeat}
				.icon_5 {background: url(./image/icon_site_5.png) no-repeat}
				.icon_6 {background: url(./image/icon_site_6.png) no-repeat}
				.icon_7 {background: url(./image/icon_site_7.png) no-repeat}
				.icon_8 {background: url(./image/icon_site_8.png) no-repeat}
				.icon_8_1 {background: url(./image/icon_site_8_1.png) no-repeat}
				
				.img_margin20 {margin-top:20px;margin-left:20px}

				.content_img100 {width:100%;text-align:center}
				.content_txt_100 {display:inline-block;position:relative;margin-top:15px;height:40px;font-size:18px;color:#FE6C93}
				.content_txt_100:before {content:'';display:block;position:absolute;left:-4px;right:-4px;bottom:15px;height:8px;background-color:#FFEBFE;border-radius:2px}
				.content_txt_70 {width:100%;text-align:center}
				.displaynone {display:none}
				
				.bottomtxt100 {font-size:100px;font-family:Baloo;color:#fff}
				.bottomtxt100_2 {font-size:100px;font-family:Baloo;color:#FFE400}
				/* S : 원본 수정 */
				#fp-nav ul li a span,
				.fp-slidesNav ul li a span {
					background: #ff6699;
				}
				#fp-nav ul li:hover a span,
				.fp-slidesNav ul li:hover a span{
					background: #fa8478;
				}
				#fp-nav ul li .fp-tooltip {
					color: #111;
				}

				.fp-controlArrow.fp-prev {
					left: 365px;
					border-color: transparent #fe6c93 transparent transparent;
				}
				.fp-controlArrow.fp-next {
					border-color: transparent transparent transparent #fe6c93;
				}
				#fp-nav.fp-right {
					right: 57px;
				}
				/* E : 원본 수정 */
				
				
				/* 페이지 페이드인 */
				.intro {animation-name:SceneChange;animation-duration:0.5s;animation-delay:0.3s;animation-iteration-count:1;animation-fill-mode:both}
				@keyframes SceneChange {
					0% {
						opacity:0
					} 
					100% {
						opacity:1
					}
				}
				
				/* 이미지 바운스 */
				.bounceInDown{animation-name:bounceInDown;animation-duration:1s;animation-delay:0.5s;animation-iteration-count:1;animation-fill-mode:both}
				@keyframes bounceInDown{
					0%,100%,60%,75%,90%{
						-webkit-transition-timing-function:cubic-bezier(0.215,.61,.355,1);
						transition-timing-function:cubic-bezier(0.215,.61,.355,1)
					}
					0%{
						opacity:0;
						-webkit-transform:translate3d(0,-3000px,0);
						-ms-transform:translate3d(0,-3000px,0);
						transform:translate3d(0,-3000px,0)
					}
					60%{
						opacity:1;
						-webkit-transform:translate3d(0,25px,0);
						-ms-transform:translate3d(0,25px,0);
						transform:translate3d(0,25px,0)
					}
					75%{
						-webkit-transform:translate3d(0,-10px,0);
						-ms-transform:translate3d(0,-10px,0);
						transform:translate3d(0,-10px,0)
					}
					90%{
						-webkit-transform:translate3d(0,5px,0);
						-ms-transform:translate3d(0,5px,0);
						transform:translate3d(0,5px,0)
					}
					100%{
						-webkit-transform:none;
						-ms-transform:none;
						transform:none
					}
				}
				
				/* 줌인 */
				.zoomIn {animation-name:zoomIn;animation-duration:0.6s;animation-delay:0.8s;animation-iteration-count:1;animation-fill-mode:both}
				@keyframes zoomIn {
					0%{
						opacity:0;
						-webkit-transform:scale3d(.3,.3,.3);
						-ms-transform:scale3d(.3,.3,.3);
						transform:scale3d(.3,.3,.3)
					}
					50%{
						opacity:1
					}
				}
				
				.fadeInLeft {animation-name:fadeInLeft;animation-duration:0.7s;animation-delay:1s;animation-iteration-count:1;animation-fill-mode:both}
				@keyframes fadeInLeft {
					0%{
						opacity:0;
						-webkit-transform:translate3d(30%,0,0);
						-ms-transform:translate3d(30%,0,0);
						transform:translate3d(30%,0,0)
					}
					100%{
						opacity:1;
						-webkit-transform:none;
						-ms-transform:none;
						transform:none
					}
				}
				
				.fadeInUp {animation-name:fadeInUp;animation-duration:0.8s;animation-delay:1.2s;animation-iteration-count:1;animation-fill-mode:both}
				@keyframes fadeInUp {
					0%{
						opacity:0;
						-webkit-transform:translate3d(0,30%,0);
						-ms-transform:translate3d(0,30%,0);
						transform:translate3d(0,30%,0)
					}
					100%{
						opacity:1;
						-webkit-transform:none;
						-ms-transform:none;
						transform:none
					}
				}
				
				.lightSpeedIn{-webkit-animation-name:lightSpeedIn;animation-name:lightSpeedIn;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;animation-duration:0.8s;animation-delay:0.9s;animation-iteration-count:1;animation-fill-mode:both}
				@keyframes lightSpeedIn {
					0%{
						-webkit-transform:translate3d(100%,0,0) skewX(-30deg);
						transform:translate3d(100%,0,0) skewX(-30deg);
						opacity:0
					}
					60%{
						-webkit-transform:skewX(20deg);
						transform:skewX(20deg);
						opacity:1
					}
					80%{
						-webkit-transform:skewX(-5deg);
						transform:skewX(-5deg);
						opacity:1
					}
					100%{
						-webkit-transform:none;
						transform:none;
						opacity:1
					}
				}
			</style>
			<script type="text/javascript" src="./js/fullpage.js"></script>

			<div id="fullpage">
				<div class="section" id="section0">
					<div class="outer intro" style="display:none">
						<div class="inner">
							<div class="card">
								<p class="title"><q> 좀 더 똑똑한 소비습관 </q></p>
								<div class="content">
									<p class="content_txt_i zoomIn"><span class="txt_info">플러스페이에 무료 가입하면 다양한 혜택/이벤트 확인이 가능합니다.</span></p>
									<p class="content_txt_img35 bounceInDown"><img width="98%" src="./image/Phone_img_1.png" alt="플러스페이 앱"></p>
									<div class="content_txtarea_65">
										<p class="content_txt_t fadeInLeft"><span class="txt_info">이왕이면 할인된 가격으로</span></p>
										<p class="content_txt_c icon_1 fadeInUp">
											같은 상품이라면 할인된 가격으로...<br>플러스페이 앱 가맹점에서 등록/제시한 할인된 가격의 쿠폰을 구매하여 이용 또는 가맹점의 할인쿠폰을 다운받아 해당 가맹점에 제시하여 이용 가능합니다.
										</p>
										<p class="content_txt_t fadeInLeft"><span class="txt_info">최대 2.5% 포인트 적립까지</span></p>
										<p class="content_txt_c icon_2 fadeInUp">
											같은상품 같은가격 이지만...<br>플러스페이로 결제하면 최대 2.5%의 포인트 적립혜택 / 포인트는 플러스페이 가맹점의 상품결제 또는 기프티콘등으로 사용가능 합니다.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section" id="section1">
					<div class="outer intro" style="display:none">
						<div class="inner">
							<div class="card">
								<p class="title"><q> 위치 정보기반 </q></p>
								<div class="content">
									<p class="content_txt_i zoomIn"><span class="txt_info">내가 서 있는곳, 내가 원하는 장소의 매장정보를 보여드립니다.</span></p>
									<p class="content_txt_img35 bounceInDown"><img width="98%" src="./image/Phone_img_2.png" alt="플러스페이 앱"></p>
									<div class="content_txtarea_65">
										<p class="content_txt_t fadeInLeft"><span class="txt_info">위치정보를 기반으로...</span></p>
										<p class="content_txt_c icon_3 fadeInUp">
											플러스페이 앱에서는 내가 위치한곳을 기준으로 가맹점 리스트를 확인할 수 있습니다.<br>
											매장정보를 확인하고, 해당 매장에서 판매하는 할인쿠폰 및 이벤트 확인이 가능합니다.
										</p>
										<p class="content_txt_s icon_3 fadeInLeft">
											내 주변에 플러스페이 파트너샵들이 보이지 않나요?<BR>
											그렇다면 가맹점등록을 요청해 보세요.<BR>
											플러스페이에서는 고객분들에게 다양한 혜택을 드리기 위해 계속해서 파트너샵들을 업데이트 합니다.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section" id="section2">
					<div class="slide" id="slide0">
						<div class="outer intro" style="display:none">
							<div class="inner">
								<div class="card">
									<p class="title"><q> 포인트에 대한 생각 </q></p>
									<div class="content">
										<div class="content_txtarea_100">
											<p class="content_txt_100 fadeInLeft">
												<span class="txt_info">포인트 소멸 및 사용불가</span>											
											</p>
											<p class="content_txt_img100 zoomIn">
												<img width="100px" class="img_margin20" src="./image/site_txt1.png" alt="플러스페이 앱"> 
												<img width="100px" class="img_margin20" src="./image/site_txt2.png" alt="플러스페이 앱"> 
												<img width="100px" class="img_margin20" src="./image/site_txt3.png" alt="플러스페이 앱"> 
												<img width="100px" class="img_margin20" src="./image/site_txt4.png" alt="플러스페이 앱">
											</p>
											<p class="content_txt_c2 icon_4 fadeInUp">
												- 생활반경이 변경되거나<br>
												- 단골매장이 폐업하거나<br>
												- 종이쿠폰을 분실하거나 또는 소지하지 않거나<br>
												- 이런 경험 해보지 않으셨나요?
											</p>
											<p class="content_txt_c2 icon_4 fadeInUp">
												- 플러스페이의 포인트는...<br>
												- 전화번호 입력방식 적립으로 본인에게 포인트적립 <br>
												- 이 포인트는 플러스페이의 모든 파트너샵에서 사용가능 하며<br>
												- 기프티콘등의 결제로도 사용가능하여<br>
												- 분실 , 소멸의 우려가 없고 간편합니다.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide" id="slide1">
						<div class="outer intro" style="display:none">
							<div class="inner">
								<div class="card">
									<p class="title"><q> PlusPAY 포인트 </q></p>
									<div class="content">
										<div class="content_txtarea_100">
											<p class="content_txt_100 fadeInLeft">
												<span class="txt_info">적극적인 포인트 적립과 공유</span>											
											</p>
											<p class="content_txt_img100 lightSpeedIn">
												<img width="100%" class="" src="./image/site_img_1_1.png" alt="플러스페이 앱">
											</p>
											<p class="content_txt_c2 icon_4 fadeInUp">
												- 플러스페이 파트너샵끼리 포인트가 공유되어 <br>
												- 파트너샵 어디서든 내 포인트를 자유롭게 적립/사용가능
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide" id="slide2">
						<div class="outer intro" style="display:none">
							<div class="inner">
								<div class="card">
									<p class="title"><q> 포인트 적립과 사용 </q></p>
									<div class="content">
										<p class="content_txt_i zoomIn"><span class="txt_info">플러스페이 앱에서는 포인트의 다양한 활용이 가능합니다.</span></p>
										<p class="content_txt_img35 bounceInDown"><img width="98%" src="./image/Pluspay_img_4.png" alt="플러스페이 앱"></p>
										<div class="content_txtarea_65">
											<p class="content_txt_t fadeInLeft"><span class="txt_info">높은 포인트 적립률</span></p>
											<p class="content_txt_c icon_1 fadeInLeft">
												<font color="#FE6C93">어디에도 없는 적립률</font><br>
												플러스페이에서 쿠폰구매/결제하면 사용금액의<br>
												최대2.5% 포인트가 적립됩니다.<br>
												적립률 : 캐시구매 > 정액(선불)권 > 일반상품
											</p>
											<p class="content_txt_t fadeInLeft"><span class="txt_info">다양한 포인트활용</span></p>
											<p class="content_txt_c icon_2 fadeInUp">
												- 파트너샵 어디서나 현금처럼 사용가능<br>
												- 보유한 포인트로 다양한 기프티콘 구매가능
											</p>
											<p class="content_txt_t fadeInLeft"><span class="txt_info">포인트 선물하기</span></p>
											<p class="content_txt_c icon_5 fadeInUp">
												포인트 선물하기 기능을 통해 가족끼리 또는<Br>
												친구끼리 포인트를 모아서 사용할 수 있습니다.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section" id="section3">
					<div class="outer intro" style="display:none">
						<div class="inner">
							<div class="card">
								<p class="title"><q> 사용자 편의성 </q></p>
								<div class="content">
									<p class="content_txt_i zoomIn"><span class="txt_info">플러스페이앱에는 사용자를 위한 다양한 편의성과 기능이 있습니다.</span></p>
									<p class="content_txt_img35 bounceInDown"><img width="98%" src="./image/Pluspay_img_5_1.png" alt="플러스페이 앱"></p>
									<div class="content_txtarea_65">
										<p class="content_txt_t fadeInLeft"><span class="txt_info">정액권 관리</span></p>
										<p class="content_txt_c icon_8_1 fadeInUp">
											앱을통해 다양한 매장의 정액(선불)권을 한곳에서 관리할 수 있습니다<br>
											정액권의 사용일자, 사용금액, 사용용도를 타임라인을 통해 확인이 가능합니다.<br>
											파트너샵에서 제시한 정액권 혜택은 그대로 받고, 사용금액만큼 적립률로 포인트가 추가 적립됩니다.
										</p>
										<p class="content_txt_t fadeInLeft"><span class="txt_info">쉽고 간편한 결제 및 확인</span></p>
										<p class="content_txt_c icon_7 fadeInUp">
											캐시결제를 통해 결제가 간편합니다.<br>
											카드결제내역, 캐시사용내역 , 포인트 적립 및 사용내역을 앱을 통해 한눈에 확인 가능합니다.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section" id="section4">
					<div class="outer intro" style="display:none">
						<div class="inner">
							<font class="bottomtxt100">Enjoy the </font>
							<font class="bottomtxt100_2">Benefits </font>
						</div>
					</div>
				</div>
			</div>

			<script type="text/javascript">
				$(document).ready(function(){
					$('#fullpage').fullpage({
						fullPageInit = true
					});
					$('#fullpage').fullpage({
						verticalCentered: false,
						navigation: true,
						slidesNavigation: true,
						navigationTooltips: ['aaa', 'bbb', 'ccc', 'ddd'],
					//	showActiveTooltip: true,
					//	menu: '#menu',
					//	anchors: ['firstPage', 'secondPage', '3rdPage'],
					//	loopTop: true,
						loopBottom: true,
						afterLoad: function(origin, destination, direction){
							if(destination.index != 2){
								$('#section' + destination.index + ' .outer').show();
								if(origin.index || origin.index != '') {
									$('#section' + origin.index + ' .outer').hide();
								}
							}
							else if(destination.index == 2){
								$('#section' + destination.index + ' #slide0 .outer').show();
								if(origin.index || origin.index == 0 || origin.index != '') {
									$('#section' + origin.index + ' .outer').hide();
								}
							}
						},
						afterSlideLoad: function(section, origin, destination, direction){
							$('#section' + section.index + ' #slide' + destination.index + ' .outer').show(); // 현재 섹션의 현재슬라이드 보이기
							$('#section' + section.index + ' #slide' + origin.index + ' .outer').hide(); // 현재 섹션의 이전슬라이드 숨기기
						},
						resetSliders: true,
						css3:false
					});
				});
			</script>
		</div>