<link href="<?php echo base_url('assets/css/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
<main role="main" class="container">
  <div class="alert alert-dark table_header">
    <h5>List Of Fatawa Question</h5>
    <ul class="nav justify-content-end">
      <li class="nav-item">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Add Fatawa Q & A
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
          <th>Question</th>
          <th>Category</th>
          <th>Answer/Reply</th>
          <th>Questioner Name</th>
          <th>Questioner ContactNo</th>
          <th>Questioner EmailId</th>
          <th>Status</th>
          <th>Date Added</th>

          <th>Update </th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;


        foreach ($questions as $row) {
          ?>
          <tr id="<?php echo $row->id .
                    '_' . $row->question .
                    '_' . $row->fatwa_category_id .
                    '_' . $row->answer .
                    '_' . $row->questioner_name .
                    '_' . $row->questioner_emailid .
                    '_' . $row->questioner_contactno .
                    '_' . $row->status; ?>">
            <td><?php echo $i; ?></td>
            <td><?php echo $row->question; ?></td>
            <td><?php echo $row->fatwa_category_id; ?></td>
            <td><?php echo $row->answer; ?></td>

            <td><?php echo $row->questioner_name; ?></td>
            <td><?php echo $row->questioner_contactno; ?></td>
            <td><?php echo $row->questioner_emailid; ?></td>
            <td><?php if ($row->status == 1) echo 'Open';
                else if ($row->status == 2) echo 'Process';
                else  echo 'Completed' ?></td>
            <td><?php echo $row->date_time; ?></td>

            <td>
              <button type="button" class="btn btn-info btn-sm editRow" data-toggle="modal" data-target="#exampleModalCenter1">
                Reply/Edit
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
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Fatawa Question</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">
          <div class="form-group">

            <label for="exampleFormControlTextarea1">Enter Question</label>
            <textarea class="form-control" id="question" rows="3" placeholder="Enter Question"></textarea>



            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Category</label>
              <select class="form-control" id="fatwaCategory">
                <option value="">Select</option>
              </select>
            </div>

            <label for="exampleFormControlTextarea1">Enter Answer/Reply</label>
            <textarea class="form-control" id="answer" rows="3" placeholder="Enter Answer/Reply"></textarea>



            <label for="exampleInputAuthorName">Enter Questioner Name</label>
            <input type="text" class="form-control" id="questionerName" placeholder="Questioner Name ">
            <label for="exampleInputAuthorName">Enter Questioner EmailId</label>
            <input type="text" class="form-control" id="questionerEmailid" placeholder="Questioner EmailId ">
            <label for="exampleInputAuthorName">Enter Questioner ContactNo</label>
            <input type="text" class="form-control" id="questionerContactno" placeholder="Questioner ContactNo ">
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
          <h5 class="modal-title" id="exampleModalLongTitle">Update Question</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="rowId">
          <div class="form-group">
            <label for="exampleInputAuthorName">Enter Question</label>
            <input type="text" class="form-control" id="editQuestion" placeholder="Question">

            <div class="form-group">

              <div class="form-group">
                <label for="exampleFormControlSelect1">Select Category</label>
                <select class="form-control" id="editfatwaCategory">
                  <option value="">Select</option>
                </select>
              </div>

              <label for="exampleFormControlTextarea1">Enter Answer/Reply</label>
              <textarea class="form-control" id="editAnswer" rows="3" placeholder="Please Enter Answer/Reply"></textarea>

              <!--
		   <label for="exampleInputAuthorName">Enter Answer/Reply</label>
            <input type="text" class="form-control" id="editAnswer" placeholder="Please Enter Answer/Reply">
		     -->
              <label for="exampleInputAuthorName">Enter Questioner Name</label>
              <input type="text" class="form-control" id="editQuestionerName" placeholder="Questioner Name ">
              <label for="exampleInputAuthorName">Enter Questioner EmailId</label>
              <input type="text" class="form-control" id="editQuestionerEmailid" placeholder="Questioner EmailId ">
              <label for="exampleInputAuthorName">Enter Questioner ContactNo</label>
              <input type="text" class="form-control" id="editQuestionerContactno" placeholder="Questioner ContactNo ">
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Select Fatawa Level</label>
              <select class="form-control" id="editFatwaStatus" name="status">
                <option value="">Select</option>
                <option value="1">Open</option>
                <option value="2">Process</option>
                <option value="3">Close</option>
              </select>
            </div>

            <!--
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
		-->
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
    $.post(baseURL + '/admin/fatawacategories/getCategories', function(data) {
      $('#fatwaCategory').html(data);
      $('#editfatwaCategory').html(data);
    });


    $('#addToDB').on('click', function() {

      var question = $('#question').val();

      var fatwaCategoryId = $('#fatwaCategory').val();
      var answer = $('#answer').val();
      var questionerName = $('#questionerName').val();
      var questionerEmailid = $('#questionerEmailid').val();
      var questionerContactno = $('#questionerContactno').val();

      $.post(baseURL + '/admin/fatawaquestion/addFatawaQuestion', {
        "question": question,
        "fatwaCategoryId": fatwaCategoryId,
        "answer": answer,
        "questionerName": questionerName,
        "questionerEmailid": questionerEmailid,
        "questionerContactno": questionerContactno
      }, function(data) {

        if (data) {
          alert('Fatawa Question Added Sucessfully');
          location.reload();
        }
      })
    });
    $('.editRow').on('click', function() {
      var fatwaQuestionDetails = $(this).parents('tr').attr('id');
      var res = fatwaQuestionDetails.split('_');

      $('#rowId').val(res[0]);
      $('#editQuestion').val(res[1]);
      $('#editfatwaCategory').val(res[2]);
      $('#editAnswer').val(res[3]);

      $('#editQuestionerName').val(res[4]);
      $('#editQuestionerEmailid').val(res[5]);
      $('#editQuestionerContactno').val(res[6]);

      if (res[7] == '1')
        $("#customRadio").prop("checked", true);
      else
        $("#customRadio2").prop("checked", true);
    });
    $('#updateToDB').on('click', function() {
      var questionId = $('#rowId').val();
      var question = $('#editQuestion').val();
      var answer = $('#editAnswer').val();

      var fatwaCategoryId = $('#editfatwaCategory').val();
      var questionerName = $('#editQuestionerName').val();
      var questionerEmailid = $('#editQuestionerEmailid').val();
      var questionerContactno = $('#editQuestionerContactno').val();
      <!-- var status = $("input[name='status']:checked").val();-->
      var status = $('#editFatwaStatus').val();

      $.post(baseURL + '/admin/fatawaquestion/updateFatawaQuestion', {
        "questionId": questionId,
        'question': question,
        'fatwaCategoryId': fatwaCategoryId,
        'answer': answer,
        'questionerName': questionerName,
        'questionerEmailid': questionerEmailid,
        'questionerContactno': questionerContactno,
        'status': status
      }, function(data) {
        if (data) {
          alert('Fatawa Question Updated Sucessfully');
          location.reload();
        }
      })
    });
  });
</script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js"'); ?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap4.min.js'); ?>"></script>
