<link href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
<main role="main" class="container">
  <div class="alert alert-dark table_header">
    <h5>List Of Article</h5>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Add
        </button>
      </li>
    </ul>
  </div>
  <!--Table-->
  <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Article Scholar</th>
          <th>Article Category</th>
          <th>Article Title - English</th>
          <th>Article Title - Arabic</th>
          <th>Article Title - French</th>
          <th>Article Description - English</th>
          <th>Article Title - Arabic</th>
          <th>Article Title - French</th>
          <th>Date Added</th>
          <th>Status</th>
          <th>Update </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        foreach ($articleList as $row) {
          ?>
          <tr id="<?php echo $row->id .
                    '_' . $row->article_scholar_id .
                    '_' . $row->article_category_id .
                    '_' . $row->article_title_name .
                    '_' . $row->article_title_name_arabic .
                    '_' . $row->article_title_name_french .
                    '_' . $row->article_description_name .
                    '_' . $row->article_description_name_arabic .
                    '_' . $row->article_description_name_french .
                    '_' . $row->date_time .
                    '_' . $row->status; ?>">
            <td><?php echo $i; ?></td>
            <td><?php echo $row->scholar_name; ?></td>
            <td><?php echo $row->article_category_name; ?></td>
            <td><?php echo $row->article_title_name; ?></td>
            <td><?php echo $row->article_title_name_arabic; ?></td>
            <td><?php echo $row->article_title_name_french; ?></td>
            <td><?php echo $row->article_description_name; ?></td>
            <td><?php echo $row->article_description_name_arabic; ?></td>
            <td><?php echo $row->article_description_name_french; ?></td>
            <td><?php echo $row->date_time; ?></td>
            <td><?php if ($row->status) echo 'Active';
                else echo 'In-Active' ?></td>

            <td>
              <button type="button" class="btn btn-info btn-sm editRow" data-toggle="modal" data-target="#exampleModalCenter1">Edit Article</button>

            </td>

          </tr>
          <?php
          $i++;
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Article scholar</label>
            <select class="form-control" id="scholar">
              <option value="">Select</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Article Category</label>
            <select class="form-control" id="category">
              <option value="">Select</option>
            </select>
          </div>




          <div class="form-group">
            <label for="exampleFormControlTextarea1">Article Title- Arabic</label>
            <input type="text" class="form-control" id="articleTitleArabic" placeholder="Article Title - Arabic">
            <label for="exampleFormControlTextarea1">Article Title - English</label>
            <input type="text" class="form-control" id="articleTitle" placeholder="Article Title - English">
            <label for="exampleFormControlTextarea1">Article Title - French</label>
            <input type="text" class="form-control" id="articleTitleFrench" placeholder="Article Title - French">

          </div>


          <div class="form-group">
            <label for="exampleFormControlTextarea1">Article Description- Arabic</label>
            <input type="text" class="form-control" id="articleDescriptionArabic" placeholder="Article Description - Arabic">
            <label for="exampleFormControlTextarea1">Article Description - English</label>
            <input type="text" class="form-control" id="articleDescription" placeholder="Article Description - English">
            <label for="exampleFormControlTextarea1">Article Description - French</label>
            <input type="text" class="form-control" id="articleDescriptionFrench" placeholder="Article Description - French">

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" id="addToDB">Add</button>
        </div>
      </div>
    </div>
  </div>
  <!-- update Model -->
  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Quran File Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="rowId">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Reciter</label>
            <select class="form-control" id="editReciter">
              <option value="">Select</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Recitation Type</label>
            <select class="form-control" id="editRecitationType">
              <option value="">Select</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select Riwaya</label>
            <select class="form-control" id="editRiwayas">
              <option value="">Select</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Article Title - Arabic</label>
            <input type="text" class="form-control" id="editSurahNameArabic" placeholder="Article Title - Arabic">
            <label for="exampleFormControlTextarea1">Article Title - English</label>
            <input type="text" class="form-control" id="editSurahName" placeholder="Article Title - English">
            <label for="exampleFormControlTextarea1">Article Title - French</label>
            <input type="text" class="form-control" id="editSurahNameFrench" placeholder="Article Title - French">

          </div>


          <div class="form-group">
            <label for="exampleInputAuthorName">Track Code</label>
            <input type="text" class="form-control" id="editAduioUrl" placeholder="Track Code">
          </div>

          <div class="form-group">
            <label for="exampleInputStatus">Status</label>
            <br>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio" name="status" value="1">
              <label class="custom-control-label" for="customRadio">Active</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="customRadio2" name="status" value="0">
              <label class="custom-control-label" for="customRadio2">In Active</label>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Short Description</label>
              <textarea class="form-control" id="editDescription" rows="3"></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" id="updateToDB">Update</button>
        </div>
      </div>
    </div>
  </div>
  <!--  Play Model -->
  <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Quran Audio Player</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" id="audioPopupClose" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</main><!-- /.container -->
<script>
  $(document).ready(function() {
    var baseURL = '<?php echo base_url(''); ?>';
    $('#example').DataTable();
    $.post(baseURL + '/admin/articlelist/getArticleScholars', function(data) {
      $('#scholar').html(data);
      $('#editScholar').html(data);
    });
    $.post(baseURL + '/admin/articlelist/getArticleCategory', function(data) {
      $('#category').html(data);
      $('#editCategory').html(data);
    });
    $('#addToDB').on('click', function() {
      var data = {
        "articleScholarId": $('#scholar').val(),
        "articleCategoryId": $('#category').val(),

        "articleTitle": $('#articleTitle').val(),
        "articleTitleArabic": $('#articleTitleArabic').val(),
        "articleTitleFrench": $('#articleTitleFrench').val(),

        "articleDescription": $('#articleDescription').val(),
        "articleDescriptionArabic": $('#articleDescriptionArabic').val(),
        "articleDescriptionFrench": $('#articleDescriptionFrench').val()

      }
      $.post(baseURL + '/admin/articlelist/addArticleList', data, function(data) {
        if (data) {
          alert('Data Added Sucessfully');
          location.reload();
        }
      })
    });
    $('.editRow').on('click', function() {
      var quranListDetails = $(this).parents('tr').attr('id');
      var res = quranListDetails.split('_');
      $('#rowId').val(res[0]);
      $('#editReciter').val(res[1]);
      $('#editRecitationType').val(res[2]);
      $('#editRiwayas').val(res[3]);
      $('#editSurahName').val(res[4]);
      $('#editSurahNameArabic').val(res[5]);
      $('#editSurahNameFrench').val(res[6]);

      $('#editAduioUrl').val(res[7]);
      if (res[8] == '1')
        $("#customRadio").prop("checked", true);
      else
        $("#customRadio2").prop("checked", true);
      $('#editDescription').val(res[9]);
    });
    $('#updateToDB').on('click', function() {
      var data = {
        "quranTypeId": $('#rowId').val(),
        "reciterId": $('#editReciter').val(),
        "recitationTypeId": $('#editRecitationType').val(),
        "riwayasId": $('#editRiwayas').val(),
        "surahName": $('#editSurahName').val(),
        "surahNameArabic": $('#editSurahNameArabic').val(),
        "surahNameFrench": $('#editSurahNameFrench').val(),
        "description": $('#editDescription').val(),
        "aduioUrl": $('#editAduioUrl').val(),
        "status": $("input[name='status']:checked").val()
      }
      $.post(baseURL + '/admin/quranlist/updateQuranList', data, function(data) {
        if (data) {
          alert('Details Updated Sucessfully');
          location.reload();
        }
      })
    });
    $('.playRow').on('click', function() {
      var quranListDetails = $(this).parents('tr').attr('id');
      var res = quranListDetails.split('_');
      var iframeCode =
        '<iframe width="100%" height="100" scrolling="no" frameborder="yes" allow="autoplay" src="https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/';
      iframeCode += res[7];
      iframeCode +=
        '?secret_token=s-QzwIV&color=#ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>';
      $('#exampleModalCenter2').find('.modal-body').html(iframeCode);
    });
    $('#exampleModalCenter2').on('hidden.bs.modal', function() {
      $(this).find('.modal-body').html('');
    });
    $('#audioPopupClose').on('click', function() {
      $('#exampleModalCenter2').find('.modal-body').html('');
    });
  });
</script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js"'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap4.min.js'); ?>"></script>
