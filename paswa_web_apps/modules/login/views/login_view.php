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

     
    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/uikit/css/uikit.almost-flat.min.css');?>"/>

    <!-- altair admin login page -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login_page.min.css');?>" />


    <!-- uikit -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/uikit/css/uikit.almost-flat.min.css');?>" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/icons/flags/flags.min.css');?>" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css');?>" media="all">
</head>
<body class="login_page">

    <div class="login_page_wrapper">
        <div class="md-card" id="login_card">
            <div class="md-card-content large-padding" id="login_form">
                <div class="login_heading">
                   <h3 align="center"> <?php echo $judul;?> </h3>
                </div>
                <form action="<?php echo base_url('login/auth');?>" method="POST">
                    <div class="uk-form-row">
                        <label for="login_username">Username</label>
                        <input class="md-input" type="text" id="login_username" name="username" />
                    </div>
                    <div class="uk-form-row">
                        <label for="login_password">Password</label>
                        <input class="md-input" type="password" id="login_password" name="password" />
                    </div>
                    <div class="uk-form-row">
                        
                        <select id="select_demo_1" data-md-selectize name="level">
                                <option value="">--Level--</option>
                               
                                    <option value="1">Panitia</option>
                                    <option value="2">Peserta</option>
 
                                
                            </select>
                    </div>
                    <div class="uk-margin-medium-top">
                    <button class="md-btn md-btn-primary md-btn-block md-btn-large"> Login </button>
                     
                    </div>
                    <div class="uk-margin-top">
                        <a href="#" id="login_help_show" class="uk-float-right">Informasi</a>
                        <span class="icheck-inline">
                            
                        </span>
                    </div>
                </form>
            </div>
            <div class="md-card-content large-padding uk-position-relative" id="login_help" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>

                <h2 class="heading_b uk-text-success">Informasi </h2>
                <p>Aplikasi ini digunakan untuk keperluan <b>PASWA</b></p>
                <p>Untuk calon peserta, klik Link <b> Pendaftran Peserta </b> lalu isikan data pada form pendaftaran, dan <b>GUNAKAN EMAIL AKTIF!</b> karena setelah submit form , Sistem akan mengirimkan akun ke email calon peserta, jika sudah mendapatkan akun,silahkan gunakan akun tersebut untuk mendaftar paswa , isilah username dan password sesuai yang tertera pada <b>EMAIL</b> dan pilih Level <b>PESERTA </b>, Setelah itu klik <b>LOGIN</b> <br> <br><b>PENTING !: <br>ISILAH DATA PRIBADI YANG VALID BAIK IDENTITAS MAUPUN FOTO PRIBADI! KARENA PANITIA TIDAK BERTANGGUNG JAWAB TERHADAP KESALAHAN DATA ANDA!</b></p>
                
                 
            </div>
            <div class="md-card-content large-padding" id="login_password_reset" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_a uk-margin-large-bottom">Reset password</h2>
                <form>
                    <div class="uk-form-row">
                        <label for="login_email_reset">Your email address</label>
                        <input class="md-input" type="text" id="login_email_reset" name="login_email_reset" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block">Reset password</a>
                    </div>
                </form>
            </div>
            <div class="md-card-content large-padding" id="register_form" style="display: none">
                <button type="button" class="uk-position-top-right uk-close uk-margin-right uk-margin-top back_to_login"></button>
                <h2 class="heading_a uk-margin-medium-bottom">Pendaftaran Peserta</h2>
                <form>
                    <div class="uk-form-row">
                        <label for="register_username">Username</label>
                        <input class="md-input" type="text" id="register_username" name="register_username" />
                    </div>
                    <div class="uk-form-row">
                        <label for="register_password">Password</label>
                        <input class="md-input" type="password" id="register_password" name="register_password" />
                    </div>
                    <div class="uk-form-row">
                        <label for="register_password_repeat">Repeat Password</label>
                        <input class="md-input" type="password" id="register_password_repeat" name="register_password_repeat" />
                    </div>
                    <div class="uk-form-row">
                        <label for="register_email">E-mail</label>
                        <input class="md-input" type="text" id="register_email" name="register_email" />
                    </div>
                    <div class="uk-margin-medium-top">
                        <a href="index.html" class="md-btn md-btn-primary md-btn-block md-btn-large">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="uk-margin-top uk-text-center">
            <a href="#" id="signup_form_show">Pendaftaran Peserta</a>
        </div>

    </div>
    <marquee> <h5><b>Informasi : Pendaftaran Peserta Paswa dibuka pada tanggal 28 Agustus 2016 sampai 12 September 2016</b></h5> </marquee>

    <!-- common functions -->
    <script src="<?php echo base_url('assets/js/common.min.js');?>"></script>
    <!-- altair core functions -->
    <script src="<?php echo base_url('assets/js/altair_admin_common.min.js');?>"></script>

    <!-- altair login page functions -->
    <script src="<?php echo base_url('assets/js/pages/login.min.js');?>"></script>

</body>
</html>