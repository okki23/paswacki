<h1 align="center"> Data Panitia </h1>
<?php
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
<table cellpadding="3" cellspacing="0" border="1">
                                
                                    <tr>
                                        <th align="center">Nama Panitia</th>
                                        <th align="center">Semester</th>
                                        <th align="center">Jabatan</th>
                                    </tr>
                                 
                               
                                <?php 
                                foreach ($listing->result() as $row) {
                                ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $row->nama_panitia; ?></td>
                                        <td><?php echo $row->semester; ?></td>
                                        <td align="center"><?php echo $row->nm_jabatan; ?></td>                   </tr>
                                <?php     
                                }
                                ?>
                                    
                                        
                                
                            </table>