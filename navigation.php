</head>
<body>

<!-- Skiplinks --> 
<p class=skiplinks> <a href="#content">Skip to content</a> <a href="#navigation">Skip to navigation</a> </p>

<!-- Navagation -->    
<a href="#menu" class="menu-link">Menu</a>
        
        <nav class="menu" id="menu" role="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="has-sub-menu"><a aria-haspopup="true">University</a>
                    <ul class="sub-menu">
                        <li><a href="revision.php">Revision</a></li>
                        <!-- <li><a href="#">Where to find help</a></li> -->
                        <li><a href="social.php">Social</a></li>
                        <li><a href="eqguide.php">The Essentials</a></li>
                        <li><a href="applications.php">Applications</a></li>
                        <!-- <li><a href="courses.php">Courses</a></li> -->
                    </ul>
                </li>
                <li><a href="finance.php">Finance</a></li>
                <li class="has-sub-menu"><a href="#" aria-haspopup="true">Living</a>
                    <ul class="sub-menu">
                        <li><a href="hallshouses.php">Halls and Houses</a></li>
                        <li><a href="transport.php">Safety</a></li>
                        <li><a href="social.php">Social</a></li>
                    </ul>
                </li>
                <li class="has-sub-menu"><a aria-haspopup="true">Entertainment</a>
                    <ul class="sub-menu">
                        <li><a href="sports.php" >Sports</a></li>
                        <!-- <li><a href="music.php" >Music Venues</a></li> -->
                        <li><a href="nclubs.php" >Night Clubs</a></li>
                        <!-- <li><a href="museums.php" >Museums</a></li> -->
				    </ul>
                </li>
                <li><a href="health.php" >Health</a></li>
                <li><a href="transport.php" >Transport</a></li>
                <li><a href="food.php" title="">Food</a></li>
                <li><a href="creators.php" title="#">Creators</a></li>
               
            </ul>
        </nav>
    <script>
    $(document).ready( function(e) {
    var $menu = $('#menu'),
      $menulink = $('.menu-link'),
      $menuTrigger = $('.has-sub-menu > a');
    $menulink.click(function(e) {
        e.preventDefault();
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
    });

    $menuTrigger.click(function(e) {
        e.preventDefault();
        var $this = $(this);
        $this.toggleClass('active').next('ul').toggleClass('active');
    });
    e.preventDefault();

});
    </script>
