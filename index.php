<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <title>Apau's Portfolio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
  <header>
	<div class="container">
	  <h1>Noel</h1>
	  <nav>
		<ul>
		  <li><a href="#intro">首頁</a></li>
		  <li><a href="#portfolio">作品集</a></li>
		  <li><a href="#services"">服務</a></li>
		  <li><a href="#contact">聯絡</a></li>
		</ul>
	  </nav>
	</div>
  </header>

  <section id="intro" class="intro">
	<div class="container">
		<div class="intro-me-desc">
			<h2>Hi! I'm Apau</h2>
			<p>Develop and maintain a robust framework for collecting, analyzing, and reporting on UX metrics, including user/customer satisfaction, product engagement/usage metrics, product adoption rates, external data sets, task success rates, and usability issues.</p>
			<div class="social-icons">
				<i class="fab fa-instagram"></i>
				<i class="fab fa-github"></i>
				<i class="fab fa-facebook"></i>
			</div>
		</div>
	</div>
	<div class="container">
		<img src="images/hero-lg.png" />
	</div>
  </section>

  <section id="portfolio" class="portfolio">
	<div class="container">
	  <h2>作品介紹</h2>
	  <div class="project project-no-a">
		<img src="images/work-image1.png" alt="Journey Project">
		<div class="project-desc-panel">
			<h3>星際旅行行程平台</h3>
			<p>悠遊宇宙的夢想，從這裡開始</p>
			<p><span class="label">網頁設計</span><span class="label">響應式網頁</span><span class="label">Bootstrap</span></p>
			<hr></hr>
			<button>完整介紹&nbsp;&#x2192;</button>
		</div>
	  </div>
	  <div class="project project-no-b">
		<div class="project-desc-panel">
			<h3>健康APP</h3>
			<p>Healthcare interfaces</p>
			<p><span class="label">網頁設計</span><span class="label">響應式網頁</span><span class="label">Bootstrap</span></p>
			<hr></hr>
			<button>完整介紹&nbsp;&#x2192;</button>
		</div>
	  </div>
	  <div class="project project-no-c">
		<img src="images/work-image3.png" alt="Cafe Project">
		<div class="project-desc-panel">
			<h3>咖啡店網站</h3>
			<p>前端開發</p>
			<p><span class="label">網頁設計</span><span class="label">響應式網頁</span><span class="label">Bootstrap</span></p>
			<hr></hr>
			<button>完整介紹&nbsp;&#x2192;</button>
		</div>
	  </div>
	</div>
  </section>

  <section id="services" class="services">
	<div class="container">
	  <h2>服務項目</h2>
	  <div class="service">
		<i class="fa-solid fa-pen-ruler fa-2x"></i>
		<h3>平面設計</h3>
	  </div>
	  <div class="service">
		<i class="fa-solid fa-pen-nib fa-2x"></i>
		<h3>UI & UX 設計</h3>
	  </div>
	  <div class="service">
		<i class="fa-solid fa-desktop fa-2x"></i>
		<h3>切版服務</h3>
	  </div>
	  <div class="service">
		<i class="fa-solid fa-code fa-2x"></i>
		<h3>前端開發</h3>
	  </div>
	  <div class="contact-me-for-more">
		  <h4>想要合作或瞭解更多？</h4>
		  <button>詳細內容與合作流程&nbsp;&#x2192;</button>
	  </div>
	</div>
  </section>

  <section class="blog">
	<div class="container">
	  <h2>精選文章</h2>
	  <div class="articles">
		<div class="article">
		  <img src="images/article-image1.png" alt="Article 1">
		  <h3>Vision Pro 與 Vision Pro UX 設計新趨勢</h3>
		  <p>2023/07/20</p>
		</div>
		<div class="article">
		  <img src="images/article-image2.png" alt="Article 2">
		  <h3>掌握最強的 Figma Dev Mode 教你如何快速截圖</h3>
		  <p>2023/08/12</p>
		</div>
		<div class="article">
		  <img src="images/article-image3.png" alt="Article 3">
		  <h3>如何在設計工作中提升效率</h3>
		  <p>2023/09/11</p>
		</div>
	  </div>
	</div>
  </section>
  
  <section id="contact" class="contact">
  	<div class="container">
		  <div class="about">
			  <div class="about-wrapper">
			  	<h3>APAU</h3>
			  	<p>If you have any questions about my artwork, please do not hesitate to contact me.</p>
			  	<p class="email">apau79427@gmail.com</p>
			  </div>
		  </div>
		  <div class="social-list">
			  <ul>
				  <li class="active"><i class="far fa-file-alt fa-2x"></i>&nbsp;填寫表單</li>
				  <li><i class="fab fa-instagram fa-2x"></i>&nbsp;apau_ig_demo</li>
				  <li><i class="fab fa-facebook fa-2x"></i>&nbsp;apau79427TW</li>
			  </ul>
		  </div>
  	</div>
  </section>

  <footer>
	<div class="container">
	  <p>Apau | 尊重設計 不抄襲 以豐富視覺效果達成目標</p>
	  <div class="contact-info">
		<p>Email: apau79427@gmail.com</p>
		<p>© 2024 Apau</p>
	  </div>
	</div>
  </footer>
</body>
</html>