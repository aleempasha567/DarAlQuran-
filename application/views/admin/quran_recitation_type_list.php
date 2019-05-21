<link href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
<main role="main" class="container">
  <div class="alert alert-dark table_header">
    <h5>List Of Recitation Types In Quran</h5>
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
          <th>Recitation Type Name - English</th>
          <th>Recitation Type Name - Arabic</th>
          <th>Recitation Type Name - French</th>
          <th>Date Added</th>
          <th>Status</th>
          <th>Update </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i=1;
        foreach ($recitationTypes as $row)
        {
        ?>
        <tr
          id="<?php echo $row->id.'_'.$row->recitation_type_name_arabic.'_'.$row->recitation_type_name.'_'.$row->recitation_type_name_french.'_'.$row->status;?>">
          <td><?php echo $i;?></td>
          <td><?php echo $row->recitation_type_name;?></td>
          <td><?php echo $row->recitation_type_name_arabic;?></td>
          <td><?php echo $row->recitation_type_name_french;?></td>
          <td><?php echo $row->date_time;?></td>
          <td><?php if($row->status) echo 'Active'; else echo 'In-Active'?></td>
          <td>
            <button type="button" class="btn btn-info btn-sm editRow" data-toggle="modal"
              data-target="#exampleModalCenter1">
              Edit
            </button>
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
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Recitation Type Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputAuthorName">Enter Recitation Type Name - Arabic</label>
            <input type="text" class="form-control" id="recitationTypeNameArabic"
              placeholder="Recitation Type Name Arabic"> <label for="exampleInputAuthorName">Enter Recitation Type Name
              - English</label>
            <input type="text" class="form-control" id="recitationTypeName" placeholder="Recitation Type Name English">
            <label for="exampleInputAuthorName">Enter Recitation Type Name - French</label>
            <input type="text" class="form-control" id="recitationTypeNameFrench"
              placeholder="Recitation Type Name French">
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
  <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Update Recitation Type Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="rowId">
          <div class="form-group">
            <label for="exampleInputAuthorName">Recitation Type Name - Arabic</label>
            <input type="text" class="form-control" id="editRecitationTypeNameArabic"
              placeholder="Recitation Type Name Arabic"> <label for="exampleInputAuthorName">Recitation Type Name -
              English</label>
            <input type="text" class="form-control" id="editRecitationTypeName"
              placeholder="Recitation Type Name English"> <label for="exampleInputAuthorName">Recitation Type Name
              French</label>
            <input type="text" class="form-control" id="editRecitationTypeNameFrench"
              placeholder="Recitation Type Name French">

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
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-success" id="updateToDB">Update</button>
        </div>
      </div>
    </div>
  </div>
</main><!-- /.container -->
<script>
$(document).ready(function() {
  var baseURL = '<?php echo base_url(''); ?>';
  $('#example').DataTable();
  $('#addToDB').on('click', function() {
    var recitationTypeName = $('#recitationTypeName').val();
    var recitationTypeNameArabic = $('#recitationTypeNameArabic').val();
    var recitationTypeNameFrench = $('#recitationTypeNameFrench').val();
    $.post(baseURL + '/admin/quranrecitationtypes/addRecitationType', {
      "recitationTypeName": recitationTypeName,
      "recitationTypeNameArabic": recitationTypeNameArabic,
      "recitationTypeNameFrench": recitationTypeNameFrench
    }, function(data) {
      if (data) {
        alert('Recitation Type Added Sucessfully');
        location.reload();
      }
    })
  });
  $('.editRow').on('click', function() {
    var recitationTypeDetails = $(this).parents('tr').attr('id');
    var res = recitationTypeDetails.split('_');
    $('#rowId').val(res[0]);
    $('#editRecitationTypeNameArabic').val(res[1]);
    $('#editRecitationTypeName').val(res[2]);
    $('#editRecitationTypeNameFrench').val(res[3]);
    if (res[4] == '1')
      $("#customRadio").prop("checked", true);
    else
      $("#customRadio2").prop("checked", true);
  });
  $('#updateToDB').on('click', function() {
    var recitationTypeId = $('#rowId').val();
    var recitationTypeName = $('#editRecitationTypeName').val();
    var recitationTypeNameArabic = $('#editRecitationTypeNameArabic').val();
    var recitationTypeNameFrench = $('#editRecitationTypeNameFrench').val();
    var status = $("input[name='status']:checked").val();
    $.post(baseURL + '/admin/quranrecitationtypes/updateRecitationType', {
      "recitationTypeId": recitationTypeId,
      'recitationTypeName': recitationTypeName,
      'recitationTypeNameArabic': recitationTypeNameArabic,
      'recitationTypeNameFrench': recitationTypeNameFrench,
      'status': status
    }, function(data) {
      if (data) {
        alert('Recitation Type Details Updated Sucessfully');
        location.reload();
      }
    })
  });
});
</script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js"');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap4.min.js');?>"></script>
