<table width="100%" border="0" cellpadding="0" style="padding-bottom:1px; padding-left: 1px; padding-right: 1px; padding-top: 1px;">
    <tr>
 
        <td width="20%"> <img src="<?php echo base_url('images/logo.png');?>" width="110" height="60">  </td>
        <td width="75%"> <b> <br> &nbsp; PT.ASDP INDONESIA FERRY </b> <br> &nbsp; <b>REPORT DATA RIWAYAT HIDUP </b>  </td>        
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>

        <td width="100%" align="center"> <b style="font-size: 12px;"> DAFTAR RIWAYAT HIDUP </b>  </td>
              
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>
    
        <td width="25%" style="border-bottom: 1px solid #0099FF; background-color:#0099FF;"> <b> DATA PRIBADI </b>  </td>
        <td width="75%" style="border-bottom: 1px solid #0099FF;">   </td>        
    </tr>
    &nbsp;
    <tr>
        <td> &nbsp; </td>
    </tr>
    
    <div style="font-size: 9px; align-content: left;">
            <table border="0">
                <tr>
                    <td width="30%;"> Nama Lengkap </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $name_full; ?></td>
                    <td rowspan="13"> <img src="<?php echo base_url('assets/images/foto/'.$foto);?>" width="90" height="120">  </td>
                    
                </tr>
            
             
                <tr>
                    <td width="30%;"> NIK </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $personelid; ?> </td>
                </tr>
           
             
                <tr>
                    <td width="30%;"> Pangkat/Golongan </td>
                    <td width="3%;" > : </td>
                    <td width="35%;">  </td>
                </tr>
             
           
                <tr>
                    <td width="30%;"> Tempat/Tanggal Lahir </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $tempatlahir.' / '.$tanggallahir; ?></td>
                </tr>
             
                <tr>
                    <td width="30%;"> Alamat Tempat Tinggal </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $isialamat;   ?>
                    </td>
                </tr>
            
                <tr>
 

                    <td width="30%;"> No.Telepon/Fax </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo '+'.$comunication; ?>  </td>
                </tr>
            
                <tr>
                    <td width="30%;"> Agama </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $agama; ?>   </td>
                </tr>
            
                <tr>
                    <td width="30%;"> Status Pernikahan </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $statusnikah; ?>  </td>
                </tr>
             
                <tr>
                    <td width="30%;"> SK </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $sk; ?> </td>
                </tr>
            
                <tr>
                    <td width="30%;"> Unker/Cabang </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $namaunit; ?> </td>
                </tr>
             
                <tr>
                    <td width="30%;"> Bagian/KMP </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $bagian;?> </td>
                </tr>
             
                <tr>
                    <td width="30%;"> Jabatan </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $namajabatan; ?></td>
                </tr>
             
                <tr>
                    <td width="30%;"> Wilayah </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $namawilayah; ?> </td>
                </tr>
            </table>
        </div>
     <tr>
    
        <td width="25%" style="border-bottom: 1px solid #0099FF; background-color:#0099FF;"> <b> DATA PRIBADI </b>  </td>
        <td width="75%" style="border-bottom: 1px solid #0099FF;">   </td>        
    </tr>
    
</table>