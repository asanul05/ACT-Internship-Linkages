<section class='linkages-home-hero'>
    <img src="" alt="">
    <div class="linkages-ero-text-cont">
        <p class="subtitle">WESTERN MINDANAO STATE UNIVERSITY’S</p>
        <h1 class="title">LINKAGES</h1>
        <h1 class="title2">& PARTNERSHPS</h1> 
        <h1 class='tittle3'>Learn about WMSU’s Partnership all around the World!</h1>
    </div>
    <div class='linkages-home-logo-cont'>
        <img src="../imgs/wmsuu-logo.png" alt="">
    </div>
</section>

<section class="our-global-network">
    <div class="ogn-text">
        <h1 class="ogn-h1">Our Global Network</h1>
        <p class="ogn-p">A geographic display of WMSU’s commitment to global collaboration and excellence.</p>
        <!-- <p class="ogn-p">Our university has established strong partnerships with leading institutions across the globe, creating <br>opportunities for research collaboration, student exchange, and academic innovation.</p> -->
    </div>
    <div class="ogn-img-cont">
        <div><img src="../imgs/revised-final-final-world-map.png" alt=""></div>
    </div>

</section>

<section class="linkages-partnership-statistic">
    <div>
        <h1 class="linkages-partnership-statistic-cont">Linkages & Partnership Statistics </h1>
    </div>
    
    <div class="linkages-partnership-statistic-sections">
        <div class='linkages-partnership-statistic-img-cont'>
            <img src="../imgs/total-collaborations.png" alt="">
        </div>
        <div class="linkages-partnership-statistic-text-cont">
            <div class="linkages-partnership-statistic-text-cont-top">
                <div class='partner-count'>
                    <h1> <?php echo $overallCount;  ?> </h1>
                </div>
                <div class='partner-count-desc'>
                    <h1>Total Collaborations</h1>
                    <p>United for global academic growth</p>
                </div>
            </div>
           
            <div class="linkages-partnership-statistic-text-cont-bot">
                <p>Together, our national and international linkages form a strong foundation for WMSU’s global impact and future-ready education. </p>    
            </div>
        </div>
    </div>

    <div class="linkages-partnership-statistic-sections">
        <div class="linkages-partnership-statistic-text-cont">
            <div class="linkages-partnership-statistic-text-cont-top">
                <div class='partner-count'>
                    <h1><?php echo $nationalCount; ?></h1>
                </div>
                <div class='partner-count-desc'>
                    <h1>National Partners</h1>
                    <p>Across the Philippines</p>
                </div>
            </div>
            <div class="linkages-partnership-statistic-text-cont-bot">
                <p>WMSU actively collaborates with key institutions across the Philippines to advance regional development and academic excellence.</p>    
            </div>
        </div>
        <div class='linkages-partnership-statistic-img-cont'>
            <img src="../imgs/national-partners.png" alt="">
        </div>
    </div>

    <div class="linkages-partnership-statistic-sections">
        <div class='linkages-partnership-statistic-img-cont'>
            <img src="../imgs/international-partners.png" alt="">
        </div>

        <div class="linkages-partnership-statistic-text-cont">
            <div class="linkages-partnership-statistic-text-cont-top">
                <div class='partner-count'>
                    <h1><?php echo $internationalCount; ?></h1>
                </div>
                <div class='partner-count-desc'>
                    <h1>International Partners</h1>
                    <p>In 18 countries worldwide</p>
                </div>
            </div>
           
            <div class="linkages-partnership-statistic-text-cont-bot">
                <p>WMSU’s international partnerships foster cultural exchange, collaborative research, and global    innovation through strong academic linkages.</p>    
            </div>
        </div>
    </div>
</section>

<section class="featured-partners">
    <div class='featured-partners-title'>
        <h1>FEATURED PARTNERS </h1>
    </div>
    <div class='featured-partners-sections'>
        <div class='featured-partners-sections-img-cont'>
            <img src="../imgs/featured-partners-huawei.png" alt="">
        </div>

        <div class='featured-partners-sections-text-cont'>
            <div class='featured-partners-sections-text-cont-top-cont'>
                <h1>HUAWEI Ph</h1>
                <p>Taguig City, Metro Manila, Philippines</p>
            </div>

            <div class='featured-partners-sections-text-cont-bot-cont'>
                <p>an exciting collaboration that typically focuses on technology development, digital skills training, and research initiatives in the field of information and communication technology (ICT).</p>
            </div>
            
        </div>
    </div>

    <div class='featured-partners-sections'>
        <div class='featured-partners-sections-img-cont'>
            <img src="../imgs/featured-partners-seameo.png" alt="">
        </div>

        <div class='featured-partners-sections-text-cont'>
            <div class='featured-partners-sections-text-cont-top-cont'>
                <h1>SEAMEO Innotech</h1>
                <p>Quezon City, Philippines</p>
            </div>

            <div class='featured-partners-sections-text-cont-bot-cont'>
                <p>a regional educational organization that aims to promote innovation in education and development across Southeast Asia.  </p>
            </div>
            
        </div>
    </div>  
</section>

<section class='home-eliro'>
    <div class='home-eliro-title-cont'>
        <p>EXTERNAL LINKAGES AND INTERNATIONAL RELATIONS OFFICE </p>
        <h1>The ELIRO: Bridging WMSU and the World </h1>
    </div>

    <div class='home-eliro-cont'>
        <div class='home-eliro-cont-img-cont'>
            <img src="../imgs/home-eliro-img.png" alt="">
        </div>  

        <div class='home-eliro-cont-text-cont'>
            <div class='home-eliro-cont-text-cont-cont'> 
                <h1>DR. MARIO R. OBRA JR</h1>
                <p>Director, Quality Management Office, International <br> Relations Office & External Linkages</p>
    
                <p id='p2'>Learn More About ELIRO Learn More About ELIRO</p>
            </div>
        </div>
    </div>
</section>

<section class="our-partners">
    <div><h1 class="our-partners-h1">OUR PARTNERS<c:\Users\Asanul\Downloads\huawei-logo.png/h1></div>
    
    <!-- Categories -->
    <div class='partners-category-subsect'>
        <div class="our-partners-category-cont">
            <button class="active" data-category="all" onclick="filterPartners('all')">All Partners</button>
            <div class="divider"></div>
            <button data-category="international" onclick="filterPartners('international')">International</button>
            <div class="divider"></div>
            <button data-category="national" onclick="filterPartners('national')">National</button>
        </div>
    </div>
    
    <!-- Search -->
    <div class='search-subsect'>
        <div class="search-container-and-icon">
            <div class='search-icon'><img src="../imgs/icon-search.png" alt=""></div>
            <div class="search-container">
                <input type="text" id="search-input" class="search-input" placeholder="Search partners by name or country..." onkeyup="searchPartners()">
            </div>
        </div>
        <div>
            <button class='search-partner-button'>Search</button>
        </div>
    </div>
    
    <!-- Partners Grid -->
    <div class="partners-grid" id="partners-grid">
        <?php
        $conn = new mysqli("localhost", "root", "", "linkages");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        //Pagination variables
        $limit = 12; // 3 columns x 4 rows
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        // Fetch partners
        $query = "SELECT * FROM partners LIMIT $limit OFFSET $offset";
        $result = $conn->query($query);

        //Render partners
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                    echo '<div class="partner-card" data-id="' . $row['id'] . '">';
                    echo '<img src="../imgs/' . $row['logo'] . '" alt="' . htmlspecialchars($row['name']) . '">';
                    echo '<div class="partner-card-content">';
                        echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                        echo '<p>' . htmlspecialchars($row['location']) . '</p>';
                        echo '<span class="partner-type ' . htmlspecialchars($row['type']) . '">' . ucfirst(htmlspecialchars($row['type'])) . '</span>';
                    echo '</div>';
                    echo '</div>';
            }
            
        } else {
            echo '<p>No partners found.</p>';
        }

        ?>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php

        // Fetch total number of partners
        $totalQuery = "SELECT COUNT(*) AS total FROM partners";
        $totalResult = $conn->query($totalQuery);
        $totalRow = $totalResult->fetch_assoc();
        $totalPages = ceil($totalRow['total'] / $limit);

        if ($totalPages < 1) {
            $totalPages = 1;
        }
        
        // Previous Arrow
        $previousPage = ($page > 1) ? $page - 1 : $totalPages; 
        echo '<button class="page-button" onclick="loadPage(' . $previousPage . ')">&lt;</button>';

        // Page Numbers
        for ($i = 1; $i <= $totalPages; $i++) {
        $activeClass = ($i == $page) ? 'active' : '';
        echo '<button class="page-button ' . $activeClass . '" data-page="' . $i . '" onclick="loadPage(' . $i . ')">' . $i . '</button>';
    }

        // Next Arrow
        $nextPage = ($page < $totalPages) ? $page + 1 : 1; 
        echo '<button class="page-button" onclick="loadPage(' . $nextPage . ')">&gt;</button>';

        ?>
    </div>
</section>

<section class='linkages-home-gallery'>
    <div class='linkages-home-gallery-conts'>
        <img src="" alt="">
    </div>
    <div class='linkages-home-gallery-conts'>
        <img src="" alt="">
    </div>
    <div class='linkages-home-gallery-conts'>
        <img src="" alt="">
    </div>
    
</section>