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

        if(isi == ''){
        $("#revfile").val('');
        }
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

            <div class="md-card">
                <div class="md-card-content">
                    <h1>Panitia</h1>
           			<span class="uk-text-upper uk-text-small">Form Edit Panitia PASWA</span>
                   <form action="<?php echo base_url('panitia/pro_edit');?>" method="POST" enctype="multipart/form-data"> 

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-2-1">
                            <label>Nama</label>
                            <input type="hidden" name="id" value="<?php echo $listing->id; ?>">
                            <input type="text" class="input-count md-input" id="input_counter" name="nm_panitia" value="<?php echo $listing->nm_panitia; ?>" />
                        </div>
                        
                    </div>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-2-1">
                            <label>Semester </label>
                             <select id="select_demo_1" data-md-selectize name="semester">
                                
                                 
                                    <option value="1" <?php if($listing->semester == '1'){ echo "selected=selected"; }?> > 1 </option>
                                    <option value="2" <?php if($listing->semester == '2'){ echo "selected=selected"; }?> > 2 </option>
                                    <option value="3" <?php if($listing->semester == '3'){ echo "selected=selected"; }?> > 3 </option>
                                    <option value="4" <?php if($listing->semester == '4'){ echo "selected=selected"; }?> > 4 </option>
                                    <option value="5" <?php if($listing->semester == '5'){ echo "selected=selected"; }?> > 5 </option>
                                    <option value="6" <?php if($listing->semester == '6'){ echo "selected=selected"; }?>> 6 </option>
                                    <option value="7" <?php if($listing->semester == '7'){ echo "selected=selected"; }?>> 7 </option>
                                    <option value="8" <?php if($listing->semester == '8'){ echo "selected=selected"; }?>> 8 </option>
                                
                            </select>
                        </div>
                        
                    </div>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-2-1">
                            <label>Kampus</label>
                        <select id="select_demo_1" data-md-selectize name="id_kampus">
                            <option value="">--Pilh--</option>
                            <?php 
                            foreach($opt_kampus->result() as $rowkampus){ 
                                if($rowkampus->id == $listing->id_kampus){
                                    echo "<option value=".$rowkampus->id." selected=selected> ".$rowkampus->nm_kampus."</option>" ;
                                }else{
                                    echo "<option value=".$rowkampus->id."> ".$rowkampus->nm_kampus."</option>" ;
                                }
                                  
                            }
                            ?> 
                        </select>
                         
                        </div>
                        
                    </div>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-2-1">
                            <label>Jabatan</label>
                           <select id="select_demo_1" data-md-selectize name="id_jabatan">
                            <option value="">--Pilh--</option>
                            <?php 
                            foreach($opt_jabatan_panitia->result() as $rowjbt){  
                                if($listing->id_jabatan == $rowjbt->id){
                                    echo "<option value=".$rowjbt->id." selected=selected> ".$rowjbt->nm_jabatan."</option>" ;   
                                }else{
                                    echo "<option value=".$rowjbt->id."> ".$rowjbt->nm_jabatan."</option>" ;   
                                }
                               
                            }
                            ?> 
                        </select>
                        </div>
                        
                    </div>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-2-1">
                            <label>No.HP / Telp</label>
                            <input type="text" class="input-count md-input" id="input_counter" value="<?php echo $listing->telp;?>" name="telp" />
                        </div>
                        
                    </div>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-2-1">
                            <label>Alamat</label>
                            <input type="text" class="input-count md-input" value="<?php echo $listing->alamat; ?>" id="input_counter" name="alamat" />
                        </div>
                        
                    </div>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-2-1">
                            <label>Foto </label>
                            <br>
                            <label><p style="color:red; font-weight:800;"> Hanya File JPG,JPEG,PNG,GIF Dan Maksimal 2MB! </p></label>
                            <div align="center">
                            <img src="<?php echo base_url('photo_uploads/'.$listing->foto); ?>">
                            </div>
                            <br>
                            
                            <input type="file" name="foto" id="input-file-b" class="dropify" onchange="getfile();" />
                            <input type="hidden" name="filename" id="revfile" value="<?php echo $listing->foto; ?>">

                        </div>
                       
                    </div>

                    <div class="uk-grid" data-uk-grid-margin>
                        <div class="uk-width-medium-2-1">
                            <button class="md-btn md-btn-primary md-btn-block md-btn-wave-light" > Simpan </button>
                             
                        </div>
                        
                    </div>

                  

                    </form>

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