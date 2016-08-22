<!DOCTYPE html>
<html>
<head>
    <title> </title>
</head>
<body>
  
 <table width="100%" border="0" cellpadding="0" style="padding-bottom:1px; padding-left: 1px; padding-right: 1px; padding-top: 1px;">
    <tr>
 
        <td width="20%"> <img src="<?php echo base_url('assets/img/stikom.png');?>" width="50" height="50">  </td>
        <td width="75%"> <b> <br>   &nbsp; Badan Eksekutif Mahasiswa STIKOM CKI </b> <br> &nbsp; <b> PASWA STIKOM CKI <?php echo date('Y');?>  </b>  </td>        
    </tr>
     
</table>
<div style="border-bottom:2px solid #000;">
</div>
 
<table>
    <tr>
        <td> &nbsp;</td>
    </tr>
</table>
 
<h3 align="center"> Detail Panitia </h3>
<br>
<div align="center">
<img src="<?php echo base_url('photo_uploads/'.$listing->foto);?>">
</div>
   <div style="font-size: 9px; align-content: left;">
            <table border="0">
                <tr>
                    <td width="30%;"> Nama Lengkap </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $listing->nm_panitia; ?></td>
                    <td rowspan="6">    </td>
                    
                </tr>
            
             
                <tr>
                    <td width="30%;"> Semester </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $listing->semester; ?> </td>
                </tr>
           
             
                <tr>
                    <td width="30%;"> Kampus </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $listing->nm_kampus; ?> </td>
                </tr>
             
           
                <tr>
                    <td width="30%;"> Jabatan </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $listing->nm_jabatan; ?></td>
                </tr>
             
                <tr>
                    <td width="30%;"> No.Telp </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $listing->telp; ?></td>
                </tr>
            
                <tr>
                    <td width="30%;"> Alamat </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $listing->alamat; ?></td>
                </tr>
            
              
            </table>
        </div>
 
</body>
</html>