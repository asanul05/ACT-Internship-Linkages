<?php 
// require_once '../CMS-WMSU-Website/classes/pages.class.php';
// require_once '../CMS-WMSU-Website/tools/functions.php';

$homepageObj = new Pages;

$homeNewsSQL = "SELECT * from page_sections WHERE pageID = 1 AND indicator = 'Wmsu News';
";
$researchArchSQL = "SELECT * from page_sections WHERE pageID = 1 AND indicator = 'Research Archives';
";

$aboutUsSQL = "SELECT * from page_sections LEFT JOIN subpages ON content = subPageName WHERE pageID = 1 AND indicator = 'About WMSU';
";

$presCornerSQL = "SELECT * from page_sections WHERE pageID = 1 AND indicator = 'Pres Corner'; 
";

$servicesSQL = "SELECT * from page_sections WHERE pageID = 1 AND indicator = 'Services';
";

$homeNewsItems = $homepageObj->execQuery($homeNewsSQL);
$researchArchItems = $homepageObj->execQuery($researchArchSQL);
$aboutUsItems = $homepageObj->execQuery($aboutUsSQL);
$presCornerItems = $homepageObj->execQuery($presCornerSQL);
$servicesItems = $homepageObj->execQuery($servicesSQL);
foreach ($homeNewsItems as $items){
    if ($items['description'] == 'news-title'){
        $newsTitles[] = $items['content'];
    }
    if ($items['description'] == 'news-img'){
        $newsImgs[] = [
            'imagePath' => $items['imagePath'],
            'alt' => $items['alt']
        ];
    }
    if ($items['description'] == 'news-content'){
        $newsContent[] = $items['content'];
    }
    if ($items['description'] == 'news-content'){
        $newsContent[] = $items['content'];
    }
}

foreach ($researchArchItems as $items){
    if ($items['description'] == 'research-title'){
        $researchTitles[] = $items['content'];
    }
    if ($items['description'] == 'research-author'){
        $researchAuthors[] = $items['content'];
    }
    if ($items['description'] == 'research-description'){
        $researchDesc[] = $items['content'];
    }
    if ($items['description'] == 'research-pub-date'){
        $researchPubDate[] = $items['content'];
    }
}

foreach ($aboutUsItems as $items){
    if ($items['description'] == 'about-description'){
        $aboutUsDesc = $items['content'];
    }
    if ($items['description'] == 'about-links'){
        $aboutUsLinks[] = [
            'content' => $items['content'],
            'link' => $items['subPagePath']
        ];
    }
}

foreach ($presCornerItems as $items){
    if ($items['description'] == 'report-title'){
        $reportTitles[] = $items['content'];
    }
    if ($items['description'] == 'report-date'){
        $reportDates[] = $items['content'];
    }
}

foreach($servicesItems as $items){
    if ($items['description'] == 'service-title'){
        $serviceTitles[] = $items['content'];
    }
    if ($items['description'] == 'service-imgs'){
        $serviceImages[] = $items['imagePath'];
    }
}
?>

<section class="hero-section-cont">
    <div class="homepage-video-container">
        <video id="delayedVideo" class="homepage-background-video" muted loop>
            <source src="../imgs/WMSU profile 2024.mp4" type="video/mp4">
        </video>
        <div class="Hero-Title-Cont">
            <div class="hero-divider divider-upper"></div>
            <p class="Hero-Title inter-bold">WESTERN MINDANAO</p>
            <p class="Hero-Title Lower-Title inter-bold">STATE UNIVERSITY</p>
            <p class="Hero-Subtitle inter-light">Your Future Starts Here: Learn, Innovate, Lead at WMSU!</p>
            <div class="hero-divider divider-lower"></div>
            <a class="hero-apply" href=""><div class="hero-button inter-light">APPLY</div></a>
            <img class="hero-arrowdown" src="../imgs/down-arrow.png" alt="">
        </div>
    </div>
</section>

<section class="line-after-hero"></section>

<section class="wmsu-news">
    <div class="news-header-container">
        <h2 class="news-title">WMSU NEWS</h2>
        <div class="more">
            <h6 class="inter-extrabold text-wmsu-red hover:text-wmsu-dark-red transition-colors duration-300" id="more-article">MORE ARTICLES</h6>
        </div>
    </div>
    <div class="news-grid">
        <?php 
        for($i = 0; $i < count($newsTitles); $i++){
        ?>
            <div class="news-item">
                <img src="<?php echo $newsImgs[$i]['imagePath']?>" alt="<?php echo $newsImgs[$i]['alt']?>">
                <h6 class="inter-medium text-lg md:text-base sm:text-sm"><?php echo $newsTitles[$i]?></h6>
                <p class="inter-light text-gray-600 md:text-sm sm:text-xs"><?php echo $newsContent[$i]?></p>
                <a href="#" class="read-more text-wmsu-red hover:text-wmsu-dark-red transition-colors duration-300">Read More ></a>
            </div>
        <?php } ?>
    </div>
</section>

<section class="line-page-div"></section>

<section class="research-archives">
    <a href="#" class="learn-more-top absolute top-8 right-8 md:top-4 md:right-4 sm:top-2 sm:right-2 flex items-center gap-2">
        <span class="learn-more-text inter-extrabold text-wmsu-red hover:text-wmsu-dark-red transition-colors duration-300">LEARN MORE</span>
        <span class="learn-more-plus inter-extrabold text-wmsu-red">+</span>
    </a>
    <div class="research-header text-center mb-8">
        <h2 class="research-title">RESEARCH ARCHIVES</h2>
    </div>
    
    <div class="research-content">
        <?php for ($i = 0; $i < count($researchTitles); $i++){ ?>
        <div class="research-text">
            <h3 class="article-title text-2xl md:text-xl sm:text-lg font-bold text-wmsu-red"><?php echo $researchTitles[$i]?></h3>
            <p class="researcher text-gray-600 md:text-sm sm:text-xs"><?php echo $researchAuthors[$i]?></p>
            <p class="description text-gray-700 md:text-sm sm:text-xs"><?php echo $researchDesc[$i]?></p>
            <div class="article-meta flex flex-col gap-2 mt-4">
                <span class="publish-date text-gray-500 md:text-sm sm:text-xs"><?php echo $researchPubDate[$i]?></span>
                <a href="#" class="read-more text-wmsu-red hover:text-wmsu-dark-red transition-colors duration-300">Read More ></a>
            </div>
        </div>
        <?php } ?>
        
        <div class="research-image">
            <img src="../imgs/research.png" alt="Research Image" class="w-full h-auto rounded-lg shadow-md">
        </div>
    </div>
</section>

<section class="line-page-div"></section>

<div class="about-page-title">
    <h1 class="text-4xl md:text-3xl sm:text-2xl font-bold text-wmsu-red text-center">ABOUT WMSU</h1>
    <a href="#" class="about-learn-more absolute top-8 right-8 md:top-4 md:right-4 sm:top-2 sm:right-2 flex items-center gap-2">
        <span class="about-learn-more-text inter-extrabold text-wmsu-red hover:text-wmsu-dark-red transition-colors duration-300">Learn more</span>
        <span class="about-learn-more-plus inter-semibold text-wmsu-red">+</span>
    </a>
</div>

<section class="about-section">
    <div class="about-container">
        <div class="vertical-divider"></div>
        <div class="about-content">
            <p class="about-description inter-extralight text-white md:text-sm sm:text-xs">
                <?php echo $aboutUsDesc?>
            </p>
            <div class="about-links flex flex-col gap-4 md:gap-2 sm:gap-1">
                <?php foreach ($aboutUsLinks as $items){?>
                <a href="<?php echo $items['link']?>" class="about-link inter-semibold text-white hover:text-gray-200 transition-colors duration-300">
                    <span><?php echo $items['content']?></span>
                    <span class="arrow">></span>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="line-page-div"></section>

<section class="presidents-corner">
    <div class="corner-container">
        <div class="corner-image">
            <img src="../imgs/OCHO.png" alt="WMSU President">
        </div>
        <div class="corner-content">
            <h2 class="section-title text-4xl md:text-3xl sm:text-2xl font-bold text-wmsu-red mb-8">PRESIDENT'S CORNER</h2>
            
            <div class="report-links flex flex-col gap-4 md:gap-2 sm:gap-1">
                <?php for ($i = 0; $i < count($reportTitles); $i++) {?>
                <a href="#" class="report-item p-4 hover:bg-gray-50 transition-colors duration-300">
                    <div class="report-info">
                        <h3 class="inter-bold text-lg md:text-base sm:text-sm"><?php echo $reportTitles[$i]?></h3>
                        <span class="report-date text-gray-500 md:text-sm sm:text-xs"><?php echo $reportDates[$i]?></span>
                    </div>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="line-page-div"></section>

<section class="wmsu-campuses">
    <div class="main-page-titles text-4xl md:text-3xl sm:text-2xl font-bold text-wmsu-red text-center mb-8">WMSU CAMPUSES</div>
    <div class="camp-cont">
        <div class="camp-cont-left bg-cover bg-center relative">
            <div class="camp-text absolute inset-0 flex flex-col justify-center items-center text-center p-4">
                <div class="camp-text-title text-white md:text-3xl sm:text-2xl">ZAMBOANGA DEL SUR</div>
                <div class="camp-text-mix flex items-center gap-2 mt-4">
                    <div class="camp-text-plus text-white text-2xl md:text-xl sm:text-lg">+</div>
                    <div class="camp-text-show text-white md:text-sm sm:text-xs">SHOW MORE</div>
                </div>
            </div>
        </div>
        <div class="camp-cont-mid"></div>
        <div class="camp-cont-right bg-cover bg-center relative">
            <div class="camp-text absolute inset-0 flex flex-col justify-center items-center text-center p-4">
                <div class="camp-text-title text-white md:text-3xl sm:text-2xl">ZAMBOANGA SIBUGAY</div>
                <div class="camp-text-mix flex items-center gap-2 mt-4">
                    <div class="camp-text-plus text-white text-2xl md:text-xl sm:text-lg">+</div>
                    <div class="camp-text-show text-white md:text-sm sm:text-xs">SHOW MORE</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="line-page-div"></section>

<section class="wmsu-services">
    <div class="main-page-titles">SERVICES</div>
    <div class="services-cont">

    <?php for($i = 0; $i < count($serviceTitles); $i++) {?>
        <div class="services-squares">
            <div class="square-cont">
                <div class="square-raindrop">
                    <div class="square-outer"></div>
                    <div class="square-inner"></div>
                    <div class="square-icon">
                        <img src="<?php echo $serviceImages[$i]?>" alt="">
                    </div>
                </div>
                <div class="square-text"><?php echo $serviceTitles[$i]?></div>
            </div>
        </div>
       
        <?php } ?>

        <div class="services-rectangle">
            <div class="rectangle-text">
                <div class="rectangle-text-hide">WMSU<br>SERVICES</div>
                <div class="rectangle-plus">+</div>
                <div class="rectangle-more">MORE</div> 
            </div>
        </div> 
    </div>
</section>

<section class="line-page-div"></section>

<section class="follow-wmsu">
    <div class="main-page-titles">FOLLOW WMSU</div>
    <div class="follow-cont">
        <div class="follow-cont-left">
            <div class="follow-left-rect">
                <div class="left-red-overlay"></div>
                <img src="../imgs/facebook.jpg" alt="" class="follow-left-pic">
                <div class="follow-left-text">
                    <div class="left-text-icon">
                        <img src="../imgs/facebook-icon.png" alt="" >
                    </div>
                    <div class="left-text-word">FACEBOOK</div>
                    </div>
                </div>
            </div>
        <div class="follow-cont-right">
            <div class="follow-right-rect">
                <div class="right-red-overlay"></div>
                <img src="../imgs/youtube.jpg" alt="" class="follow-right-pic">
                <div class="follow-right-text">
                    <div class="right-text-word">YOUTUBE</div>
                    <div class="right-text-icon">
                        <img src="../imgs/youtube-icon.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


