<div class="main-content-al-quran">
  <div class="inner-banner">
    <img src="<?php echo base_url('assets/images/sky-banner.jpg'); ?>" class="img-responsive" />
    <div class="top-header col-md-12">
      <div class="threesecs">
        <div class="col-md-3 col-xs-3 menu-icon">
          <i class="fa fa-bars" id="sideNav"></i>
        </div>
        <div class="col-md-offset-3 col-md-2 col-xs-9 logosec">
          <a href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url('assets/images/al-quran-logo.png'); ?>" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-4 col-xs-12 pull-right searchbar">
          <form class="example" action="">

            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="page-search-section text-center">
      <h1>عنوان صفحة الفتوى</h1>
      <div class="s130">
        <form>
          <div class="inner-form">
            <div class="input-field first-wrap">
              <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
              </div>
              <input id="search" type="text" placeholder="بحث" />
            </div>
            <div class="input-field second-wrap">
              <button class="btn-search" type="button">بحث</button>
            </div>
          </div>
        </form>
      </div>
      <div class="ask-qsns"><a href="#messageSection">انقر هنا لطرح الأسئلة</a></div>
    </div>
  </div>
</div>
<?php
function getArabicDate($str)
{
  $western_arabic = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
  $eastern_arabic = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');

  $str = str_replace($western_arabic, $eastern_arabic, $str);
  echo $str;
}
function custom_echo($x, $length)
{
  if (strlen($x) <= $length) {
    echo $x;
  } else {
    $y = substr($x, 0, $length) . '...';
    echo $y;
  }
}
?>
<input type="hidden" value="<?php echo $rowsPerPage; ?>" id="rowsPerPage">
<input type="hidden" value="1" id="pageCount">
<div class="article-page article-main-content">
  <!--Carousel-->
  <div class="container">
    <h1 class="text-center">معظم تحديثها مؤخرا</h1>
    <div class="row">
      <div class="col-md-12">
        <div id="Carousel" class="carousel slide multi-item-carousel">
          <!-- Carousel items -->
          <div class="carousel-inner">
            <?php
            $i = 0;
            foreach ($questions as $row) {
              ?>
              <div class="item <?php if ($i == 0) echo 'active'; ?>">
                <div class="col-md-3 carousel-content">
                  <p><?php echo $row->question; ?></p>
                </div>
              </div>
              <?php $i++;
            } ?>
          </div>
          <!--.carousel-inner-->
          <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
          <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
        </div>
        <!--.Carousel-->

      </div>
    </div>
  </div>
  <!--.container-->
  <!--Carousel-->
  <!--Order by section-->
  <div class="order-section container margin-bottom-30">
    <div class="col-md-4 col-sm-4">
      <div class="select">
        <select name="slct" id="dropdown3">
          <option value="">تحديد</option>
          <option></option>
          <option></option>
        </select>
      </div>
    </div>
    <div class="col-md-4 col-sm-4">
      <div class="select">
        <select name="slct" id="dropdown2">
          <option value="">تحديد</option>
          <?php
          foreach ($categories as $row) {
            ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->category_name_arabic; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="col-md-4 col-sm-4">
      <div class="select">
        <select name="slct" id="dropdown1">
          <option value="">تحديد</option>
          <?php
          foreach ($muftinames as $row) {
            ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->mufti_name_arabic; ?></option>
          <?php } ?>
        </select>
      </div>
    </div>
  </div>
  <!--Order by section-->
  <!--Questions section-->
  <div id="result">
    <?php
    foreach ($questions as $row) {
      ?>
      <div class="mishary-section ">
        <div class="col-md-offset-1 col-md-10 shaikh-section margin-bottom-30">
          <div>
            <p class="margin-0"><?php echo getArabicDate($row->last_updated); ?></p>
            <p class="shaikh-name"><?php echo $row->question; ?></p>
          </div>
          <p class="complete-answer hide"><?php echo $row->answer; ?></p>
          <div class="middle-cotent">
            <p><?php echo custom_echo($row->answer, 200); ?></p>
            <a data-toggle="modal" data-target="#exampleModalCenter" class="complete_answer <?php if (strlen($row->answer) < 200) echo 'hide'; ?>">قراءة المزيد</a>
          </div>
          <div class="shaikh-icon">
            <div class="image-section">
              <img src="<?php echo base_url('assets/images/mishary-rashed.png'); ?>" class="img-responsive" />
            </div>
          </div>
          <div class="views">
            شوهد 99 <i class="fa fa-eye"></i>
          </div>
        </div>
      </div>
    <?php
  } ?>
    <?php if ($toatlCount > $rowsPerPage) {
      ?>
      <div style="text-align:center;padding: 5px;">
        <button type="button" id="loadmore" class="btn btn-info">Load More</button>
      </div>
    <?php
  }
  ?>
  </div>
  <!--Questions section-->
</div>


<div class="clearfix"></div>

<div class="message-section" id="messageSection">
  <div class="col-md-offset-8 col-md-2 col-sm-4">
    <h1 class="">الرد على شيء</h1>
    <div class="select">
      <select name="slct" id="dropdown4">
        <option value="">تحديد</option>
        <?php
        foreach ($categories as $row) {
          ?>
          <option value="<?php echo $row->id; ?>"><?php echo $row->category_name_arabic; ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-md-offset-1 col-md-10 text-center">
      <div class="form-group">
        <label for="email">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Name" name="email">
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
      </div>
      <textarea placeholder="أكتب هنا" rows="20" name="comment[text]" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea>
      <div class="tectarea-buttons">
        <input type="submit" class="send" value="إرسال" />
        <input type="reset" class="reset" value="إعادة تعيين" />
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<link href="<?php echo base_url('assets/css/quran.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/search.css'); ?>" rel="stylesheet">
<script type="text/javascript">
  $(document).ready(function() {
    var baseURL = '<?php echo base_url(''); ?>';
    $('#Carousel').carousel({
      interval: false
    });
    $('.multi-item-carousel .item').each(function() {
      var itemToClone = $(this);

      for (var i = 1; i < 4; i++) {
        itemToClone = itemToClone.next();

        // wrap around if at end of item collection
        if (!itemToClone.length) {
          itemToClone = $(this).siblings(':first');
        }

        // grab item, clone, add marker class, add to collection
        itemToClone.children(':first-child').clone()
          .addClass("cloneditem-" + (i))
          .appendTo($(this));
      }
    });
    $('.complete_answer').on('click', function() {
      var question = $(this).parents('.shaikh-section').find('.shaikh-name').html();
      var answer = $(this).parents('.shaikh-section').find('.complete-answer').html();
      $('#exampleModalCenter #exampleModalLongTitle').html(question);
      $('#exampleModalCenter .modal-body').html('<p>' + answer + '</p>');
    });
    $('.reset').on('click', function() {
      $('#name').val('');
      $('#email').val('');
      $('#mobile').val('');
      $('#comment_text').val('');
      $('#dropdown4').val('');
    });
    $('.send').on('click', function() {
      var question = $('#comment_text').val();
      var fatwaCategoryId = $('#dropdown4').val();
      var name = $('#name').val();
      var email = $('#email').val();
      var mobile = $('#mobile').val();

      $.post(baseURL + '/admin/fatawaquestion/addFatawaQuestion', {
        "question": question,
        "fatwaCategoryId": fatwaCategoryId,
        "name": name,
        "email": email,
        "mobile": mobile,
        "status": '1'
      }, function(data) {
        if (data) {
          alert('Question Posted Sucessfully');
          location.reload();
        }
      })
    });
    $('#dropdown1, #dropdown2').on('change', function() {
      $('#pageCount').val('1'); //resetting the page count if search is updated
      var shaikh_id = $('#dropdown1').val();
      var category_id = $('#dropdown2').val();
      $.post(baseURL + 'Fatwa/getAllFatawaQuestions', {
        shaikh_id: shaikh_id,
        category_id: category_id,
        rowsPerPage: $('#rowsPerPage').val(),
        pageCount: $('#pageCount').val()
      }, function(data) {
        $('#result').html(data);
      });
    });
    $('#result').on('click', '#loadmore', function() {
      $(this).parent('div').remove();
      var shaikh_id = $('#dropdown1').val();
      var category_id = $('#dropdown2').val();
      var pageCount = parseInt($('#pageCount').val()) + 1;
      $.post(baseURL + 'Fatwa/getAllFatawaQuestions', {
        shaikh_id: shaikh_id,
        category_id: category_id,
        rowsPerPage: $('#rowsPerPage').val(),
        pageCount: pageCount
      }, function(data) {
        $('#result').append(data);
        $('#pageCount').val(pageCount);
      });
    });
  });
</script>
