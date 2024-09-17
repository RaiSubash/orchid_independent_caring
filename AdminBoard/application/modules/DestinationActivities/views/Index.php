<!-- DataTable -->
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/plugins/datatable/table/css/dataTables.bootstrap4.min.css">
<script src="<?=base_url();?>assets/plugins/datatable/table/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/plugins/datatable/table/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

<div class="row">
  <div class="col-md-12">
    <table id="destinationList" class="table table-bordered nowrap display" border="1" width="100%">
      <thead>
        <tr>
          <th>Destination Name</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody></tbody>
      <tfoot>
        <tr>
          <th></th>
          <th></th>
        </tr>
      </tfoot>
    </table>  
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="destinationActivitiesAssignModal">
  <div class="modal-dialog modal-lg" role="document" style="width: 1000px !important">
    <div class="modal-content" id="destinationActivitiesAssignModalContent">
      <div class="modal-body"></div>
    </div>
  </div>
</div>
<!-- Manage User Nav Permission Modal End -->


<script type="text/javascript">

	var DestinationActivitiesModule = {};
	
  $(document).ready(function(){

    DestinationActivitiesModule.userListTable = $('#destinationList').DataTable({
      dom:'lrtip',
      destroy:true,
      processing:true,
      language: {
        processing: '<span style="color:white;">Processing...</span>'
      },
      serverSide: true,
      ajax:{
        url: "<?=site_url('DestinationActivities/getDestinationList')?>",
        type: "POST",
        data: function(postData){

        }
      },
      scrollY: "50vh",
      scrollX: true,
      lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
      columns: [
      {data:"name"},
      {data:"action"},
      ],
      columnDefs: [{ "orderable": false, "targets": 1 }],
      initComplete: function (){
        var negletColumns = ['Action'];
        window.ct.initDataTableSearch(this, negletColumns);
      },
    });

    $('#destinationList').on('click', '.manage_activities',function(){
      var encId = $(this).data('id');
      var url = "<?=base_url()?>DestinationActivities/manageDestinationActivities/"+encId;
      window.ct.getData(url).then(function(responseData){
        $('#destinationActivitiesAssignModal .modal-body').html('');
        $('#destinationActivitiesAssignModal .modal-body').html(responseData.result);
        $('#destinationActivitiesAssignModal').modal('show');
      });
    });


    $("#destinationActivitiesAssignModal").on('submit', '#destinationActivityForm',function(){
      if(validator.checkAll($(this))) {
        var data = $(this).serializeArray();        
        var url = $(this).attr('action');

        window.ct.postData(url, data, $("#save")).then(function(responseData){
          window.ct.notify('success',responseData.msg);
          $('#destinationActivitiesAssignModal').modal('hide');
        }, function(error){
          ct.notify('danger',error.msg);

          $.each(error.result, function(index, el) {
            $("#destinationActivityForm [name='"+index+"']").parent().append('<div class="error_msg">'+el+'</div>')
          });
        });
      }
      return false;
    });

  });
  
</script>	