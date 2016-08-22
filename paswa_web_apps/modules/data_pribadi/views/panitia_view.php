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
        <h4> Selamat Datang <b> <?php echo $username; ?> ! </b> 
             Login Sebagai : <b><?php if($level == '1'){
                echo "Panitia";
                }else{
                echo "Peserta";
                } ?>! 
                </b></h4>
                             
            <hr>
            <!-- statistics (small charts) -->
             <div id="page_heading" data-uk-sticky="{ top: 48, media: 960 }">
            <div class="heading_actions">
                 
            </div>
            <h1>Panitia</h1>
            <span class="uk-text-upper uk-text-small">Listing Data Panitia PASWA</span>
            <br>
            <a href="<?php echo base_url('panitia/add');?>" class="md-btn md-btn-primary md-btn-wave-light" > <i class="material-icons">library_add</i> Add Panitia</a>

            <a href="<?php echo base_url('print_panitia');?>" target="_blank" class="md-btn md-btn-primary md-btn-wave-light" > <i class="material-icons">print</i> Print Panitia</a>
        </div>

        <div id="page_content_inner">
            <div class="md-card">
                <div class="md-card-content">
                    <div class="uk-overflow-container uk-margin-bottom">
                        <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_issues">
                            <thead>
                                <tr>
                                    <th class="uk-text-center">No</th>
                                    <th>Nama Panitia</th>
                                    <th>Semester</th>
                                    <th>Jabatan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                             
                            <tbody>
                            <?php
                            $no = 1;
                            foreach ($listing->result() as $row) {
                            ?>
                            
                            <tr>
                                    <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap"><?php echo $no; ?></span></td>
                                    <td> <?php  echo $row->nm_panitia; ?> </td>
                                    <td> <?php  echo $row->semester; ?></td>
                                    <td> <?php  echo $row->nm_jabatan; ?></td>
                                    
                                      <td>   <a href="<?php echo base_url('panitia/edit/'.$row->id); ?>"> <i class="material-icons md-24">create</i> </a>  &nbsp;   <a href="<?php echo base_url('panitia/delete/'.$row->id); ?>"  onclick="return confirm('Kamu yakin mau hapus data ini ?');"> <i class="material-icons md-24">delete_forever</i> </a> &nbsp; <a href="<?php echo base_url('print_panitia/detail/'.$row->id); ?>" target="_blank" > <i class="material-icons">account_box</i></a>    </td>
                                </tr>

                            <?php
                            $no++;
                            }
                            ?>
                                

 

 

                            </tbody>
                        </table>
                    </div>
                    <ul class="uk-pagination ts_pager">
                        <li data-uk-tooltip title="Select Page">
                            <select class="ts_gotoPage ts_selectize"></select>
                        </li>
                        <li class="first"><a href="javascript:void(0)"><i class="uk-icon-angle-double-left"></i></a></li>
                        <li class="prev"><a href="javascript:void(0)"><i class="uk-icon-angle-left"></i></a></li>
                        <li><span class="pagedisplay"></span></li>
                        <li class="next"><a href="javascript:void(0)"><i class="uk-icon-angle-right"></i></a></li>
                        <li class="last"><a href="javascript:void(0)"><i class="uk-icon-angle-double-right"></i></a></li>
                        <li data-uk-tooltip title="Page Size">
                            <select class="pagesize ts_selectize">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    

    <div class="uk-modal" id="new_issue">
        <div class="uk-modal-dialog">
            <form class="uk-form-stacked">
                <div class="uk-margin-medium-bottom">
                    <label for="task_title">Title</label>
                    <input type="text" class="md-input" id="Task_title" name="snippet_title"/>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_description">Description</label>
                    <textarea class="md-input" id="task_description" name="task_description"></textarea>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_assignee" class="uk-form-label">Assignee</label>
                    <select class="uk-form-width-medium" name="task_assignee" id="task_assignee" data-md-selectize-inline>
                        <option value="user_me">Me</option>
                        <option value="user_1">Nina Bartoletti</option>
                        <option value="user_2">Eliza Gottlieb</option>
                        <option value="user_3">Verner McKenzie</option>
                        <option value="user_4">Brandon Hegmann</option>
                    </select>
                </div>
                <div class="uk-margin-medium-bottom">
                    <label for="task_priority" class="uk-form-label">Priority</label>
                    <div>
                            <span class="icheck-inline">
                                <input type="radio" name="task_priority" id="task_priority_minor" data-md-icheck />
                                <label for="task_priority_minor" class="inline-label uk-badge uk-badge-success">MINOR</label>
                            </span>
                            <span class="icheck-inline">
                                <input type="radio" name="task_priority" id="task_priority_critical" data-md-icheck />
                                <label for="task_priority_critical" class="inline-label uk-badge uk-badge-warning">CRITICAL</label>
                            </span>
                            <span class="icheck-inline">
                                <input type="radio" name="task_priority" id="task_priority_blocker" data-md-icheck />
                                <label for="task_priority_blocker" class="inline-label uk-badge uk-badge-danger">BLOCKER</label>
                            </span>
                    </div>
                </div>
                <div class="uk-modal-footer uk-text-right">
                    <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button><button type="button" class="md-btn md-btn-flat md-btn-flat-primary" id="snippet_new_save">Add Issue</button>
                </div>
            </form>
        </div>
    </div>
            <br>
 
 
           
  
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
    <!-- tablesorter -->
    <script src="<?php echo base_url(''); ?>bower_components/tablesorter/dist/js/jquery.tablesorter.min.js"></script>
    <script src="<?php echo base_url(''); ?>bower_components/tablesorter/dist/js/jquery.tablesorter.widgets.min.js"></script>
    <script src="<?php echo base_url(''); ?>bower_components/tablesorter/dist/js/widgets/widget-alignChar.min.js"></script>
    <script src="<?php echo base_url(''); ?>bower_components/tablesorter/dist/js/extras/jquery.tablesorter.pager.min.js"></script>

    <!--  issues list functions -->
    <script src="<?php echo base_url(''); ?>assets/js/pages/pages_issues.min.js"></script>
    



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