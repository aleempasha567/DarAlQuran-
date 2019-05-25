<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn">&times;</a>
  <a href="#">المنتديات<img src="<?php echo base_url('assets/images/icons/1.png'); ?>" class="menu-icon"></a>
  <a href="#">إذاعة دار القرآن<img src="<?php echo base_url('assets/images/icons/2.png'); ?>" class="menu-icon"></a>
  <a href="#">البث المباشر<img src="<?php echo base_url('assets/images/icons/3.png'); ?>" class="menu-icon"></a>
  <a href="<?php echo site_url('quran'); ?>">القرآن الكريم<img src="<?php echo base_url('assets/images/icons/4.png'); ?>" class="menu-icon"></a>
  <a href="#">الدروس والمحاضرات المسموعة<img src="<?php echo base_url('assets/images/icons/5.png'); ?>" class="menu-icon"></a>
  <a href="#">الدروس والمحاضرات المرئية<img src="<?php echo base_url('assets/images/icons/6.png'); ?>" class="menu-icon"></a>
  <a href="#">الكتب<img src="<?php echo base_url('assets/images/icons/7.png'); ?>" class="menu-icon"></a>
  <a href="#">المخطوطات<img src="<?php echo base_url('assets/images/icons/8.png'); ?>" class="menu-icon"></a>
  <a href="#">الردود والمقالات<img src="<?php echo base_url('assets/images/icons/9.png'); ?>" class="menu-icon"></a>
  <a href="#">الفتاوى الشرعية<img src="<?php echo base_url('assets/images/icons/10.png'); ?>" class="menu-icon"></a>
  <a href="#">البرامج الاسلامية<img src="<?php echo base_url('assets/images/icons/11.png'); ?>" class="menu-icon"></a>
  <a href="#">خدمات الموقع<img src="<?php echo base_url('assets/images/icons/12.png'); ?>" class="menu-icon"></a>
  <a href="#">بوابات المعاهد الالكترونية<img src="<?php echo base_url('assets/images/icons/13.png'); ?>" class="menu-icon"></a>
  <a href="#">بوابة المقارىء الالكترونية<img src="<?php echo base_url('assets/images/icons/14.png'); ?>" class="menu-icon"></a>
</div>
<script>
  $(document).ready(function() {
    $('#sideNav').on('click', function() {
      $('#mySidenav').toggleClass("active");
    });
    $('html').click(function(e) {
      if (e.target.id != 'sideNav')
        $('#mySidenav').removeClass('active');
    });
  });
</script>
