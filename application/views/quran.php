<div class="row">

  <div class="main-content-al-quran">
    <div class="inner-banner">
      <img src="<?php echo base_url('assets/images/header1.jpg');?>" class="img-responsive" />
      <div class="top-header col-md-12">
        <div class="threesecs">
          <div class="col-md-3 col-xs-3 menu-icon">
            <i class="fa fa-bars" onclick="openNav()" style="font-size:38px;color:#c8ae77;margin-top: -11%;"></i>
          </div>

          <div class="col-md-offset-3 col-md-2 col-xs-9 logosec">
            <img src="<?php echo base_url('assets/images/al-quran-logo.png');?>" class="img-responsive" />
          </div>

          <div class="col-md-4 col-xs-12 pull-right searchbar">
            <form class="example" action="">

              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mid-section">

  <div class="audio-section">
    <div class="col-md-3">
      <div class="mobile-head">
        <img src="<?php echo base_url('assets/images/phone-with-logo.jpg');?>" class="img-responsive" />
      </div>
    </div>

    <!--audio player-->
    <div class="col-md-8">
      <div id="hap-wrapper">
        <div class="left-scroller">
          <marquee behavior="scroll" direction="left" scrollamount="5">Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</marquee>
        </div>
        <div class="hap-player-holder">

          <div class="hap-player-controls-left">

            <div class="hap-prev-toggle hap-contr-btn"><i class="fa fa-backward"></i></div>
            <div class="hap-playback-toggle hap-contr-btn"><i class="fa fa-play"></i></div>
            <div class="hap-next-toggle hap-contr-btn"><i class="fa fa-forward"></i></div>

            <div class="hap-media-time-current">00:00</div>

          </div>

          <div class="hap-seekbar-wrap">
            <div class="hap-seekbar">
              <div class="hap-progress-bg">
                <div class="hap-load-level"></div>
                <div class="hap-progress-level"></div>
              </div>
            </div>
          </div>

          <div class="hap-player-controls-right">

            <div class="hap-media-time-total">00:00</div>

            <div class="hap-volume-wrapper hap-contr-btn hap-volume-closed">
              <div class="hap-volume-toggle" data-tooltip="Volume"><i
                  class="hap-icon hap-icon-volume-up fa fa-volume-up"></i></div>
              <div class="hap-volume-seekbar hap-volume-vertical">
                <div class="hap-volume-bg">
                  <div class="hap-volume-level"></div>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="hap-tooltip"></div>
      </div>


    </div>
    <!--audio player-->

  </div>
  <div class="clearfix"></div>
  <div class="dropdown-section">
    <div class="col-md-4">
      <div class="select">
        <select name="slct" id="slct">
          <option>تحديد</option>
          <?php
        foreach ($riways as $row)
        {
        ?>
          <option value="<?php echo $row->id; ?>"><?php echo $row->riwaya_name_arabic; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="upper-icon1">
        <img src="<?php echo base_url('assets/images/man-reciting-quran.png');?>" class="img-responsive" />
      </div>
    </div>

    <div class="col-md-4">
      <div class="select">
        <select name="slct" id="slct">
          <option>تحديد</option>
          <?php
          foreach ($recitationTypes as $row)
          {
          ?>
          <option value="<?php echo $row->id; ?>"><?php echo $row->recitation_type_name_arabic; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="upper-icon1">
        <img src="<?php echo base_url('assets/images/Folder-classification-inquiries-tool-appliance-filing (1).png');?>"
          class="img-responsive" />
      </div>
    </div>

    <div class="col-md-4">
      <div class="select">
        <select name="slct" id="slct">
          <option>تحديد</option>
          <?php
            foreach ($reciters as $row)
            {
          ?>
          <option value="<?php echo $row->id; ?>"><?php echo $row->reciter_name_arabic; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="upper-icon">
        <img src="<?php echo base_url('assets/images/Islamic_14-512.png');?>" class="img-responsive" />
      </div>
    </div>
  </div>

  <div class="clearfix"></div>

  <div class="dropdown-bottom">
    <div class="select">
      <span name="slct" id="slct">
        Computer Science Subjects
      </span>
    </div>
    <div class="upper-icon2">
      <img src="<?php echo base_url('assets/images/quran-book.png');?>" class="img-responsive" />
    </div>

    <div class="dropdown-bottom-content col-md-12">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>Riwaya Name</th>
            <th>Recitation Type Name</th>
            <th>Reciter Name</th>
            <th>Surah Name</th>
          </tr>
        </thead>
        <tbody>

          <?php
            foreach ($quranList as $row) {
              ?>
          <tr>
            <td><?php echo $row->riwaya_name_arabic; ?></td>
            <td><?php echo $row->recitation_type_name_arabic; ?></td>
            <td><?php echo $row->reciter_name_arabic; ?></td>
            <td><?php echo $row->surah_name_arabic; ?></td>
          </tr>
          <?php
            }
            ?>

      </table>
    </div>

  </div>

</div>
<link href="<?php echo base_url('assets/css/quran.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js"');?>"></script>
<script src="<?php echo base_url('assets/js/v3/dataTables.bootstrap.min.js');?>"></script>
<script>
$(document).ready(function() {
  $('#example').DataTable();
});
</script>
