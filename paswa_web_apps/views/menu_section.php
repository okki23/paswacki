<?php
if($level == '1'){
?>

<div class="menu_section">
            <ul>
                <li>
                    <a href="<?php echo base_url('dashboard');?>">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('panitia'); ?>">
                        <span class="menu_icon"><i class="material-icons">supervisor_account</i></span>
                        <span class="menu_title">Panitia</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('peserta'); ?>">
                        <span class="menu_icon"><i class="material-icons">supervisor_account</i></span>
                        <span class="menu_title">Peserta</span>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo base_url('jabatan_panitia'); ?>">
                        <span class="menu_icon"><i class="material-icons">thumbs_up_down</i></span>
                        <span class="menu_title">Jabatan Panitia</span>
                    </a>
                </li>
              
                <li>
                    <a href="<?php echo base_url('kampus'); ?>">
                        <span class="menu_icon"><i class="material-icons">account_balance</i></span>
                        <span class="menu_title">Kampus</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('kelompok'); ?>">
                        <span class="menu_icon"><i class="material-icons">folder_shared</i></span>
                        <span class="menu_title">Kelompok</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('surat_izin_kerja'); ?>">
                        <span class="menu_icon"><i class="material-icons">local_post_office</i></span>
                        <span class="menu_title">Surat Izin Kerja</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('surat_izin_ortu'); ?>">
                        <span class="menu_icon"><i class="material-icons">local_post_office</i></span>
                        <span class="menu_title">Surat Izin Ortu</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('data_pribadi'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Data Pribadi</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('panitia/list_view'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Data Panitia</span>
                    </a>
                </li>

                 <li>
                    <a href="<?php echo base_url('account_setting'); ?>">
                        <span class="menu_icon"><i class="material-icons">settings</i></span>
                        <span class="menu_title">Pengaturan Akun</span>
                    </a>
                </li>
                
                
               
            </ul>
        </div>

<?php
}else{
?>


<div class="menu_section">
            <ul>
                <li>
                    <a href="<?php echo base_url('dashboard');?>">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                </li>
                 
                <li title="Invoices">
                    <a href="<?php echo base_url('peserta/list'); ?>">
                        <span class="menu_icon"><i class="material-icons">supervisor_account</i></span>
                        <span class="menu_title">Peserta</span>
                    </a>
                </li>
 
                <li>
                    <a href="<?php echo base_url('kelompok/list'); ?>">
                        <span class="menu_icon"><i class="material-icons">folder_shared</i></span>
                        <span class="menu_title">Kelompok</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('surat_izin_kerja'); ?>">
                        <span class="menu_icon"><i class="material-icons">local_post_office</i></span>
                        <span class="menu_title">Surat Izin Kerja</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('surat_izin_ortu'); ?>">
                        <span class="menu_icon"><i class="material-icons">local_post_office</i></span>
                        <span class="menu_title">Surat Izin Ortu</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('data_pribadi'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Data Pribadi</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('panitia/list_view'); ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Data Panitia</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url('account_setting'); ?>">
                        <span class="menu_icon"><i class="material-icons">settings</i></span>
                        <span class="menu_title">Pengaturan Akun</span>
                    </a>
                </li>
                
                
               
            </ul>
        </div>

<?php
}
?>
