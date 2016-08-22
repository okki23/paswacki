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

    <title><?php echo $judul; ?></title>

    <!-- additional styles for plugins -->

      <!-- additional styles for plugins -->
        <!-- weather icons -->
        <link rel="stylesheet" href="http://localhost/paswacki/bower_components/weather-icons/css/weather-icons.min.css" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="http://localhost/paswacki/bower_components/metrics-graphics/dist/metricsgraphics.css">
        <!-- chartist -->
        <link rel="stylesheet" href="http://localhost/paswacki/bower_components/chartist/dist/chartist.min.css">

        
    <!-- htmleditor (codeMirror) -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/codemirror/lib/codemirror.css">
    
    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url();?>bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.min.css" media="all">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/skins/dropify/css/dropify.css">
 <script type="text/javascript">
     //alert('iii');
     //$(".dropify getfile").change(function(){
       //    $("#revfile").val(this.val());
        //alert('ok');
    //});
    function getfile(){
        var isi = $("#input-file-b").val();
        //alert(isi);
        $("#revfile").val(isi);
    }
 </script>
</head>
<body class=" sidebar_main_open sidebar_main_swipe">
    <?php
    $this->load->view('header');
    ?>
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
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match id="user_profile">
                <div class="uk-width-large-12-10">
                    <div class="md-card">
                        <div class="user_heading">
                            
                            <div class="user_heading_avatar">
                             <a href="<?php echo base_url('photo_uploads/'.$listing->foto);?>" data-uk-lightbox="{group:'user-photos'}">
                                           
                                <div class="thumbnail">

                                    <img src="<?php echo base_url('photo_uploads/'.$listing->foto);?>" />
                                </div>
                                     
                                            </a>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b uk-margin-bottom"><span class="uk-text-truncate">  <?php echo $listing->nama_peserta; ?> </span><span class="sub-heading"><?php echo $listing->nm_jurusan; ?></span></h2>
                                <ul class="user_stats">
                                    <li>
                                        <h4 class="heading_a">NIM <span class="sub-heading"> <?php echo $listing->nim; ?> </span></h4>
                                    </li>
                                    <li>
                                        <h4 class="heading_a">Semester <span class="sub-heading">  <?php echo $listing->semester; ?></span></h4>
                                    </li>
                                    <li>
                                        <h4 class="heading_a">Kampus <span class="sub-heading"><?php echo $listing->nm_kampus; ?> </span></h4>
                                    </li>
                                    <li>
                                        <h4 class="heading_a">Kelas <span class="sub-heading"> <?php echo $listing->namakelas; ?> </span></h4>
                                    </li>
                                     <li>
                                        <h4 class="heading_a">Jenis Kelamin <span class="sub-heading"> <?php echo $listing->status_jk; ?></span></h4>
                                    </li>
                                </ul>
                            </div>

                            <a class="md-fab md-fab-small md-fab-accent" href=" ">
                                <i class="material-icons">&#xE150;</i>
                            </a>

                        </div>
                        <div class="user_content">
                            <ul id="user_profile_tabs" class="uk-tab" data-uk-tab="{connect:'#user_profile_tabs_content', animation:'slide-horizontal'}" data-uk-sticky="{ top: 48, media: 960 }">
                                <li class="uk-active"><a href="#">Motto</a></li>
                                <li><a href="#">Foto</a></li>
                                 
                            </ul>
                            <ul id="user_profile_tabs_content" class="uk-switcher uk-margin">
                                <li>
                                <?php echo $listing->motto; ?>
                                            <div class="uk-grid uk-margin-medium-top uk-margin-large-bottom" data-uk-grid-margin>
                                        <div class="uk-width-large-1-2">
                                            <h4 class="heading_c uk-margin-small-bottom">Informasi</h4>
                                            <ul class="md-list md-list-addon">
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons">&#xE158;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"> <?php echo $listing->email; ?></span>
                                                        <span class="uk-text-small uk-text-muted">Email</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                        <i class="md-list-addon-icon material-icons">&#xE0CD;</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"> <?php echo $listing->no_telp; ?></span>
                                                        <span class="uk-text-small uk-text-muted">No.Telp / HP</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="md-list-addon-element">
                                                       <i class="material-icons md-36">account_balance</i>
                                                    </div>
                                                    <div class="md-list-content">
                                                        <span class="md-list-heading"> <?php echo $listing->alamat; ?> </span>
                                                        <span class="uk-text-small uk-text-muted">Alamat</span>
                                                    </div>
                                                </li>
                                                 
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    


                                 </li>
                                <li>
                                    <div id="user_profile_gallery" data-uk-check-display class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid="{gutter: 4}">
                                        <div>
                                            <a href="<?php echo base_url('photo_uploads/'.$listing->foto);?>" data-uk-lightbox="{group:'user-photos'}">
                                                <img src="<?php echo base_url('photo_uploads/'.$listing->foto);?>" />
                                            </a>
                                        </div>
                                        
                                    </div>
                                    
                                </li>
                                 
                            </ul>
                        </div>
                    </div>
                </div>
                


            </div>
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
    <script src="<?php echo base_url();?>assets/js/common.min.js"></script>
    <!-- uikit functions -->
    <script src="<?php echo base_url();?>assets/js/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="<?php echo base_url();?>assets/js/altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
    <!--  dropify -->
    <script src="<?php echo base_url();?>assets/js/custom/dropify/dist/js/dropify.min.js"></script>

    <!--  form file input functions -->
    <script src="<?php echo base_url();?>assets/js/pages/forms_file_input.min.js"></script>
    
 
     
    <!-- page specific plugins -->
    <!-- ionrangeslider -->
    
    <!-- htmleditor (codeMirror) -->
    <script src="<?php echo base_url();?>assets/js/uikit_htmleditor_custom.min.js"></script>
    <!-- inputmask-->
    <script src="<?php echo base_url();?>bower_components/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>

    <!--  forms advanced functions -->
    <script src="<?php echo base_url();?>assets/js/pages/forms_advanced.min.js"></script>
    
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