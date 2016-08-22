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
 <h2 align="center"> Daftar Panitia</h2>

    <table cellpadding="3" cellspacing="0" border="1">
                                
                                    <tr>
                                        <th align="center">Nama Panitia</th>
                                        <th align="center">Semester</th>
                                        <th align="center">Kampus</th>
                                        <th align="center">Jabatan</th>
                                        <th align="center">No.Telp</th>
                                        <th align="center">Alamat</th>
                                    </tr>
                                 
                               
                                <?php 
                                foreach ($listing->result() as $row) {
                                ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row->nm_panitia; ?></td>
                                        <td align="center"><?php echo $row->semester; ?></td>
                                        <td align="center"><?php echo $row->nm_kampus; ?></td> 
                                        <td align="center"><?php echo $row->nm_jabatan; ?></td>
                                        <td align="center"><?php echo $row->telp; ?></td>
                                        <td align="center"><?php echo $row->alamat; ?></td>    
                                    </tr>
                                <?php     
                                }
                                ?>
                                    
                                        
                                
                            </table>
</body>
</html>