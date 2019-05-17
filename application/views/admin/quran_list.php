<link href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
<main role="main" class="container">
  <div class="alert alert-dark table_header">
    <h5>List Of Files In Quran</h5>
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
                <th>Reciter</th>
                <th>Recitation Type</th>
                <th>Riwaya</th>
                <th>Description</th>
                <th>Track Code</th>
                <th>Date Added</th>
                <th>Status</th>
                <th>Update </th>
            </tr>
        </thead>
        <tbody>
        <?php
        $i=1;
        foreach ($quranList as $row)
        {
        ?>
            <tr id="<?php echo $row->id.'_'.$row->reciter_id.'_'.$row->recitation_type_id.'_'.$row->riwaya_id.'_'.$row->description.'_'.$row->url.'_'.$row->status;?>">
                <td><?php echo $i;?></td>
                <td><?php echo $row->reciter_name;?></td>
                <td><?php echo $row->recitation_type_name;?></td>
                <td><?php echo $row->riwaya_name;?></td>
                <td><?php echo $row->description;?></td>
                <td><?php echo $row->url;?></td>
                <td><?php echo $row->date_time;?></td>
                <td><?php if($row->status) echo 'Active'; else echo 'In-Active'?></td>
                <td>
                    <button type="button" class="btn btn-info btn-sm editRow" data-toggle="modal" data-target="#exampleModalCenter1">Edit</button>
                    <button type="button" class="btn btn-success btn-sm playRow" data-toggle="modal" data-target="#exampleModalCenter2">Play</button>
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
        <h5 class="modal-title" id="exampleModalLongTitle">Add Quran Audio Url</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Reciter</label>
          <select class="form-control" id="reciter">
            <option value="">Select</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Recitation Type</label>
          <select class="form-control" id="recitationType">
            <option value="">Select</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Riwaya</label>
          <select class="form-control" id="riwayas">
            <option value="">Select</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Short Description</label>
          <textarea class="form-control" id="description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputAuthorName">Track Code</label>
            <input type="number" class="form-control" id="aduioUrl" placeholder="Track Code">
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
        <h5 class="modal-title" id="exampleModalLongTitle">Update Riwaya</h5>
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
          <label for="exampleFormControlTextarea1">Short Description</label>
          <textarea class="form-control" id="editDescription" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputAuthorName">Track Code</label>
            <input type="number" class="form-control" id="editAduioUrl" placeholder="Track Code">
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

    $.post(baseURL+'/admin/quranlist/getReciters', function(data) {
      $('#reciter').html(data);
      $('#editReciter').html(data);
    });
    $.post(baseURL+'/admin/quranlist/getRecitationTypes', function(data) {
      $('#recitationType').html(data);
      $('#editRecitationType').html(data);
    });
    $.post(baseURL+'/admin/quranlist/getRiwayas', function(data) {
      $('#riwayas').html(data);
      $('#editRiwayas').html(data);
    });

    $('#addToDB').on('click',function() {
        var data = {
          "reciterId": $('#reciter').val(),
          "recitationTypeId": $('#recitationType').val(),
          "riwayasId": $('#riwayas').val(),
          "description": $('#description').val(),
          "aduioUrl": $('#aduioUrl').val()
        }
        $.post(baseURL+'/admin/quranlist/addQuranListType', data , function(data) {
            if(data) {
                alert('Data Added Sucessfully');
                location.reload();
            }
        })
    });
    $('.editRow').on('click',function() {
        var quranListDetails = $(this).parents('tr').attr('id');
        var res = quranListDetails.split('_');
        $('#rowId').val(res[0]);
        $('#editReciter').val(res[1]);
        $('#editRecitationType').val(res[2]);
        $('#editRiwayas').val(res[3]);
        $('#editDescription').val(res[4]);
        $('#editAduioUrl').val(res[5]);
        if(res[6] == '1')
            $("#customRadio").prop("checked", true);
        else
            $("#customRadio2").prop("checked", true);
    });
    $('#updateToDB').on('click',function() {
      var data = {
          "quranTypeId": $('#rowId').val(),
          "reciterId": $('#editReciter').val(),
          "recitationTypeId": $('#editRecitationType').val(),
          "riwayasId": $('#editRiwayas').val(),
          "description": $('#editDescription').val(),
          "aduioUrl": $('#editAduioUrl').val(),
          "status": $("input[name='status']:checked").val()
        }
        $.post(baseURL+'/admin/quranlist/updateQuranList', data , function(data) {
            if(data) {
                alert('Details Updated Sucessfully');
                location.reload();
            }
        })
    });

    $('.playRow').on('click',function(){
      var quranListDetails = $(this).parents('tr').attr('id');
      var res = quranListDetails.split('_');
      var iframeCode = '<iframe width="100%" height="100" scrolling="no" frameborder="yes" allow="autoplay" src="https://w.soundcloud.com/player/?url=https://api.soundcloud.com/tracks/';
        iframeCode += res[5];
        iframeCode += '?secret_token=s-QzwIV&color=#ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>';
      $('#exampleModalCenter2').find('.modal-body').html(iframeCode);
    });
    $('#exampleModalCenter2').on('hidden.bs.modal', function () {
      $(this).find('.modal-body').html('');
    });
    $('#audioPopupClose').on('click',function() {
      $('#exampleModalCenter2').find('.modal-body').html('');
    });
} );
</script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js"');?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap4.min.js');?>"></script>
