
            <li class="header">MENU KAPRODI</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Kelola Penunjang</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('penunjang/') ?>"><i class="fa fa-circle-o"></i>List Penunjang Dosen</a></li>
                    <li><a href="<?php echo site_url('penunjang/validasi') ?>"><i class="fa fa-circle-o"></i>Validasi Penunjang</a></li>
                </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-check-circle"></i> <span>Kelola Kuesioner</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?=site_url('kuesioner')?>"><i class="fa fa-circle-o"></i> Kuesioner</a></li>
                  <li><a href="<?=site_url('kuesioner/list_nilai')?>"><i class="fa fa-circle-o"></i> List Nilai Kuesioner</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-archive"></i> <span>Data PPM Prodi</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?=site_url('lppm')?>"><i class="fa fa-circle-o"></i> List PPM Prodi</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-graduation-cap"></i> <span>Laporan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?=site_url('kinerja_dosen/nilai_prodi')?>"><i class="fa fa-circle-o"></i> Kinerja Prodi</a></li>
              </ul>
            </li>
