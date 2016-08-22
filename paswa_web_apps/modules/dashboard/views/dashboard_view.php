<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
date_default_timezone_set("Asia/Jakarta");
function tanggalan($tanggal){
    $getyear = substr($tanggal,0,4);
    $getmonth = substr($tanggal,5,2);
    $getdate = substr($tanggal,8,2);

    

    switch($getmonth){
        case "01":
        $bulan = "Januari";
        break;

        case "02":
        $bulan = "Februari";
        break;

        case "03":
        $bulan = "Maret";
        break;

        case "04":
        $bulan = "April";
        break;
        
        case "05":
        $bulan = "Mei";
        break;
        
        case "06":
        $bulan = "Juni";
        break;

        case "07":
        $bulan = "Juli";
        break;

        case "08":
        $bulan = "Agustus";
        break;
    
        case "09":
        $bulan = "September";
        break;
    
        case "10":
        $bulan = "Oktober";
        break;

        case "11":
        $bulan = "November";
        break;

        case "12":
        $bulan = "Desember";
        break;

        default:
        $bulan = "Bulan tidak diketahui";
        break;
    }

    $hasil =  $getdate .' '.$bulan. ' ' . $getyear;

    return $hasil;
        }
?>
<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/stikom.png'); ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/stikom.png');?>" sizes="32x32">

    <title> <?php echo $judul; ?></title>

    <!-- additional styles for plugins -->
        <!-- weather icons -->
        <link rel="stylesheet" href="<?php echo base_url(''); ?>bower_components/weather-icons/css/weather-icons.min.css" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="<?php echo base_url(''); ?>bower_components/metrics-graphics/dist/metricsgraphics.css">
        <!-- chartist -->
        <link rel="stylesheet" href="<?php echo base_url(''); ?>bower_components/chartist/dist/chartist.min.css">
    
    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/main.min.css" media="all">
    
    
    <script type="text/javascript">
        window.setTimeout("waktu()",1000); 
        function waktu() { 
        var tanggal = new Date(); 
        setTimeout("waktu()",1000); 
        document.getElementById("jam").innerHTML = tanggal.getHours(); 
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    } 
    </script>
</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                
                   
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
                       
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="<?php echo base_url(''); ?>assets/img/avatars/user.png" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="<?php echo base_url('login/account_setting'); ?>">Pengaturan Akun</a></li>
                                    <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
     
    </header><!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="<?php echo base_url('dashboard');?>" class="sSidebar_hide">  <img src="<?php echo base_url('assets/img/stikom.png');?>" alt="" height="32" width="32"/>  <?php echo $judul; ?> </a>
                
            </div>
            
        </div>
        
        <?php
        $this->load->view('menu_section');
        ?>

          
    </aside><!-- main sidebar end -->

    <div id="page_content">
        <div id="page_content_inner">
        <h4> Selamat Datang <b> <?php echo $username; ?> ! </b> 
             Login Sebagai : <b><?php if($level == '1'){
                echo "Panitia";
                }else{
                echo "Peserta";
                } ?>! 
                 
                </b></h4>
                             
            <hr>
            <!-- statistics (small charts) -->
            <div class="uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-medium uk-sortable sortable-handler hierarchical_show" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Jumlah Calon Peserta </span>
                            <h2 class="uk-margin-remove"><span class="countUpMe"> <?php echo $get_all_peserta; ?> </span></h2>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right uk-margin-top uk-margin-small-right"><span class="peity_visitors peity_data">5,3,9,6,5,9,7</span></div>
                            <span class="uk-text-muted uk-text-small">Jumlah Panitia</span>
                            <h2 class="uk-margin-remove"><span class="countUpMe">0 <?php echo $get_all_panitia; ?></span></h2>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="md-card">
                        <div class="md-card-content">
                         <span class="uk-text-muted uk-text-small">Jam</span>
                            <ul class="uk-pagination">
                                 
                                <li class="uk-active"><span> <p id="jam"></p>  </span></li>
                                <li class="uk-active"><span> <p>:</p>  </span></li>
                                <li class="uk-active"><span> <p id="menit"></p>  </span></li>
                                <li class="uk-active"><span> <p>:</p>  </span></li>
                                <li class="uk-active"><span> <p id="detik"></p>  </span></li>
                                 
                            </ul>
                        </div>
                    </div>
                </div>

                 <div>
                    <div class="md-card">
                        <div class="md-card-content">
                         <span class="uk-text-muted uk-text-small">Tanggal</span>
                            <ul class="uk-pagination">
                                 
                                <li class="uk-active"><span> <?php echo tanggalan(date('Y-m-d')); ?> </span></li>
                               
                                 
                            </ul>
                        </div>
                    </div>
                </div>
               
                
            </div>

            <!-- large chart -->
            <div class="uk-grid">
                <div class="uk-width-medium-2-1">
                    <div class="md-card">
                        <div class="md-card-content">
                            <h3 class="heading_a uk-margin-small-bottom">Foto Kegiatan PASWA</h3>
                            <div class="uk-slidenav-position" data-uk-slideshow="{animation:'fadeZoom'}">
                                <ul class="uk-slideshow">
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas1.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas2.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas3.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas4.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas5.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas6.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas7.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas8.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas9.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas10.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas11.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas12.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas13.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas14.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas15.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas16.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas17.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas18.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas19.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas20.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas21.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas22.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas23.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas24.jpg" alt=""></li>
                                    <li><img src="<?php echo base_url();?>assets/img/gallery/pas25.jpg" alt=""></li>
                                </ul>
                                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                                    <li data-uk-slideshow-item="0"><a href=""></a></li>
                                    <li data-uk-slideshow-item="1"><a href=""></a></li>
                                    <li data-uk-slideshow-item="2"><a href=""></a></li>
                                    <li data-uk-slideshow-item="3"><a href=""></a></li>
                                    <li data-uk-slideshow-item="4"><a href=""></a></li>
                                    <li data-uk-slideshow-item="5"><a href=""></a></li>
                                    <li data-uk-slideshow-item="6"><a href=""></a></li>
                                    <li data-uk-slideshow-item="7"><a href=""></a></li>
                                    <li data-uk-slideshow-item="8"><a href=""></a></li>
                                    <li data-uk-slideshow-item="9"><a href=""></a></li>
                                    <li data-uk-slideshow-item="10"><a href=""></a></li>
                                    <li data-uk-slideshow-item="11"><a href=""></a></li>
                                    <li data-uk-slideshow-item="12"><a href=""></a></li>
                                    <li data-uk-slideshow-item="13"><a href=""></a></li>
                                    <li data-uk-slideshow-item="14"><a href=""></a></li>
                                    <li data-uk-slideshow-item="15"><a href=""></a></li>
                                    <li data-uk-slideshow-item="16"><a href=""></a></li>
                                    <li data-uk-slideshow-item="17"><a href=""></a></li>
                                    <li data-uk-slideshow-item="18"><a href=""></a></li>
                                    <li data-uk-slideshow-item="19"><a href=""></a></li>
                                    <li data-uk-slideshow-item="20"><a href=""></a></li>
                                    <li data-uk-slideshow-item="21"><a href=""></a></li>
                                    <li data-uk-slideshow-item="22"><a href=""></a></li>
                                    <li data-uk-slideshow-item="23"><a href=""></a></li>
                                    <li data-uk-slideshow-item="24"><a href=""></a></li>
                                    <li data-uk-slideshow-item="25"><a href=""></a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
 

             <h5 align="center"> <a href="mailto:okkisetyawan@gmail.com">&copy; 2016 O&S Production </a> </h5>

           
  
        </div>

    </div>

   
<?php
    $this->load->view('secondary_sidebar');
?>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>
   
    <!-- common functions -->
    <script src="<?php echo base_url(''); ?>assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url(''); ?>assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="<?php echo base_url(''); ?>assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
        <!-- d3 -->
        <script src="<?php echo base_url(''); ?>bower_components/d3/d3.min.js"></script>
        <!-- metrics graphics (charts) -->
        <script src="<?php echo base_url(''); ?>bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>
        <!-- chartist (charts) -->
        <script src="<?php echo base_url(''); ?>bower_components/chartist/dist/chartist.min.js"></script>
        <!-- maplace (google maps) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url(''); ?>bower_components/maplace-js/dist/maplace.min.js"></script>
        <!-- peity (small charts) -->
        <script src="<?php echo base_url(''); ?>bower_components/peity/jquery.peity.min.js"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="<?php echo base_url(''); ?>bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <!-- countUp -->
        <script src="<?php echo base_url(''); ?>bower_components/countUp.js/countUp.min.js"></script>
        <!-- handlebars.js -->
        <script src="<?php echo base_url(''); ?>bower_components/handlebars/handlebars.min.js"></script>
        <script src="<?php echo base_url(''); ?>assets/js/custom/handlebars_helpers.min.js"></script>
        <!-- CLNDR -->
        <script src="<?php echo base_url(''); ?>bower_components/clndr/src/clndr.js"></script>
        <!-- fitvids -->
        <script src="<?php echo base_url(''); ?>bower_components/fitvids/jquery.fitvids.js"></script>

        <!--  dashbord functions -->
        <script src="<?php echo base_url(''); ?>assets/js/pages/dashboard.min.js"></script>
     


    <script>
        $(function() {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if(Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>


             
    </div>

    <script>
        $(function() {
            var $switcher = $('#style_switcher'),
                $switcher_toggle = $('#style_switcher_toggle'),
                $theme_switcher = $('#theme_switcher'),
                $mini_sidebar_toggle = $('#style_sidebar_mini'),
                $boxed_layout_toggle = $('#style_layout_boxed'),
                $accordion_mode_toggle = $('#accordion_mode_main_menu'),
                $body = $('body');


            $switcher_toggle.click(function(e) {
                e.preventDefault();
                $switcher.toggleClass('switcher_active');
            });

            $theme_switcher.children('li').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    this_theme = $this.attr('data-app-theme');

                $theme_switcher.children('li').removeClass('active_theme');
                $(this).addClass('active_theme');
                $body
                    .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i')
                    .addClass(this_theme);

                if(this_theme == '') {
                    localStorage.removeItem('altair_theme');
                } else {
                    localStorage.setItem("altair_theme", this_theme);
                }

            });

            // hide style switcher
            $document.on('click keyup', function(e) {
                if( $switcher.hasClass('switcher_active') ) {
                    if (
                        ( !$(e.target).closest($switcher).length )
                        || ( e.keyCode == 27 )
                    ) {
                        $switcher.removeClass('switcher_active');
                    }
                }
            });

            // get theme from local storage
            if(localStorage.getItem("altair_theme") !== null) {
                $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
            }


        // toggle mini sidebar

            // change input's state to checked if mini sidebar is active
            if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
                $mini_sidebar_toggle.iCheck('check');
            }

            $mini_sidebar_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_mini", '1');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                });


        // toggle boxed layout

            if((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
                $boxed_layout_toggle.iCheck('check');
                $body.addClass('boxed_layout');
                $(window).resize();
            }

            $boxed_layout_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_layout", 'boxed');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_layout');
                    location.reload(true);
                });

        // main menu accordion mode
            if($sidebar_main.hasClass('accordion_mode')) {
                $accordion_mode_toggle.iCheck('check');
            }

            $accordion_mode_toggle
                .on('ifChecked', function(){
                    $sidebar_main.addClass('accordion_mode');
                })
                .on('ifUnchecked', function(){
                    $sidebar_main.removeClass('accordion_mode');
                });


        });
    </script>
</body>
</html>