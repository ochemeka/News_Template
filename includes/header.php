<!DOCTYPE html>
<!--[if lt IE 7 ]><php class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><php class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><php class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title><?php  echo $pagetitle; ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!--[if IE]>
    <script src="http://php5shiv.googlecode.com/svn/trunk/php5.js"></script>
    <![endif]-->

</head>

<body>

    <div class="left-menu hidden-sm hidden-md hidden-xs">
        <ul class="dm-social">
            <li class="facebookbg"><a href="#" class="fa fa-facebook" data-toggle="tooltip" data-placement="right" title="Facebook">Facebook</a></li>
            <li class="googlebg"><a href="#" class="fa fa-google-plus" data-toggle="tooltip" data-placement="right" title="Google+">Google+</a></li>
            <li class="twitterbg"><a href="#" class="fa fa-twitter" data-toggle="tooltip" data-placement="right" title="Twitter">Twitter</a></li>
            <li class="pinterestbg"><a href="#" class="fa fa-pinterest" data-toggle="tooltip" data-placement="right" title="Pinterest">Pinterest</a></li>
            <li class="linkedinbg"><a href="#" class="fa fa-linkedin" data-toggle="tooltip" data-placement="right" title="Linkedin">Linkedin</a></li>
            <li class="rssbg"><a href="#" class="fa fa-rss" data-toggle="tooltip" data-placement="right" title="RSS">RSS</a></li>
            <li class="share">
                <a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a>
            </li>
        </ul>
    </div>

    <!-- START SITE -->

    <div id="wrapper">
        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!-- end col -->
                    <div class="col-md-9 col-sm-12">
                        <div class="ads-widget clearfix">
                            <a href="#"><img src="upload/banner_03.jpg" alt="" class="img-responsive"></a>
                        </div>
                        <!-- end ads-widget -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end logo-wrapper -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="container-full">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                                <?php /*?><li class="dropdown yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Homepage Layouts</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->

                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="index-1.php">Home Version 1</a></li>
                                                                    <li><a href="index-2.php">Home Version 2</a></li>
                                                                    <li><a href="index-3.php">Home Version 3</a></li>
                                                                    <li><a href="index-4.php">Home Version 4</a></li>
                                                                    <li><a href="index-5.php">Home Version 5</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end links -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Post Layouts</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->
                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="single.php">Single Post Sidebar</a></li>
                                                                    <li><a href="single-1.php">Single Post Fullwidth</a></li>
                                                                    <li><a href="single-review.php">Single Review</a></li>
                                                                    <li><a href="single-job.php">Single Job</a></li>
                                                                    <li><a href="single-forum.php">Single Forum</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end links -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Other Post Layouts</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->

                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="category.php">Category Version 1</a></li>
                                                                    <li><a href="category-1.php">Category Version 2</a></li>
                                                                    <li><a href="category-2.php">Category Version 3</a></li>
                                                                    <li><a href="search.php">Search Results</a></li>
                                                                    <li><a href="authors.php">Contributors</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end links -->
                                                        </div>
                                                        <!-- end widget -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="col-md-3">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Default Pages</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->
                                                            <div class="links-widget">
                                                                <ul class="check">
                                                                    <li><a href="page.php">Standard Page</a></li>
                                                                    <li><a href="page-1.php">Fullwidth Page</a></li>
                                                                    <li><a href="sitemap.php">Archives & Sitemap</a></li>
                                                                    <li><a href="404.php">Page Not Found</a></li>
                                                                    <li><a href="shortcodes.php">Shortcodes & Elements</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- end links -->
                                                        </div>
                                                        <!-- end widget -->
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                            </div>
                                            <!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li><?php */?>
                                <li class="dropdown hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Topics <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="reviews.php">Item Reviews</a></li>
                                        <li><a href="jobs.php">Career & Jobs</a></li>
                                        <li><a href="category.php">Technology</a></li>
                                        <li><a href="category.php">Gadgets</a></li>
                                        <li><a href="category.php">Software</a></li>
                                        <li><a href="category.php">Development</a></li>
                                        <li><a href="category.php">WordPress</a></li>
                                        <li><a href="category.php">Icons & Fonts</a></li>
                                    </ul>
                                </li>
                                <?php /*?><li class="dropdown yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Technology <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Widgets</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->

                                                            <div class="mini-widget m30">
                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_01.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Top 10 Android Widgets..</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_02.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Creative Calendar widget</a>
                                                                        <small>12 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_03.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Mobile Device Mockup Builder</a>
                                                                        <small>11 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_04.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Web Design Icon Builder for Mac</a>
                                                                        <small>10 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end mini-widget -->
                                                        </div>
                                                        <!-- end widget -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Tools</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->

                                                            <div class="mini-widget m30">
                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_05.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> A Software Developer Tools</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_06.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Web Development Tools</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_07.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Limitless Functional Web Tools</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_08.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Custom Color Builder Tool</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end mini-widget -->
                                                        </div>
                                                        <!-- end widget -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Gadgets</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->

                                                            <div class="mini-widget m30">
                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_09.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Jessica and Martin talking about...</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="rating">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_10.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> ShowWP team moved to a new office </a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="rating">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_11.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> How do web design? If no information</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="rating">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_12.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> A good strategy is to create 5 rule </a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="rating">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star-o"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end mini-widget -->
                                                        </div>
                                                        <!-- end widget -->
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <div class="widget">
                                                            <div class="widget-title">
                                                                <h4>Plugins</h4>
                                                                <hr>
                                                            </div>
                                                            <!-- end widget-title -->

                                                            <div class="mini-widget m30">
                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_13.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> Jessica and Martin talking about...</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_14.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> ShowWP team moved to a new office </a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_15.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> How do web design? If no information</a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>

                                                                <div class="post clearfix">
                                                                    <div class="mini-widget-thumb">
                                                                        <a href="single.php">
                                                                            <img alt="" src="upload/widget_16.jpg" class="img-responsive">
                                                                        </a>
                                                                    </div>
                                                                    <div class="mini-widget-title">
                                                                        <a href="single.php"> A good strategy is to create 5 rule </a>
                                                                        <small>21 March 2016</small>
                                                                        <div class="mini-widget-hr"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end mini-widget -->
                                                        </div>
                                                        <!-- end widget -->
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end ttmenu-content -->
                                        </li>
                                    </ul>
                                </li><?php */?>
                                <li><a href="jobs.php">Jobs</a></li>
                                <li><a href="category.php">Reviews</a></li>
                                <li><a href="community.php">Forums</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right searchandbag">
                                <li class="dropdown searchdropdown hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu show-right">
                                        <li>
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control input-lg" placeholder="Search here..." />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary btn-lg" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                    <!--/.container-fluid -->
                </nav>
            </div>
            <!-- end container -->
        </header>
        <!-- end header -->