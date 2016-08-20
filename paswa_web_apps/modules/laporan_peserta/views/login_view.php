<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $judul;?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">

    <!-- <link href="assets/less/styles.less" rel="stylesheet/less" media="all"> -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    
    <!-- <script type="text/javascript" src="assets/js/less.js"></script> -->
</head>
<body class="focusedform">

<div class="verticalcenter">
    <h4 align="center"> <?php echo $judul; ?></h4>
    <div class="panel panel-primary">
        <div class="panel-body">
           
                <form action="<?php echo base_url('login/auth');?>" class="form-horizontal" style="margin-bottom: 0px !important;" method="POST">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                </div>
                            </div>
                        </div>
                         
                    
                    
        </div>
        <div class="panel-footer">
             
            
            <div class="pull-right">
                <button type="submit" name="login" class="btn btn-primary"> Login</button>
             
            </div>
        </div>
        </form>
    </div>
 </div>
      
</body>
</html>