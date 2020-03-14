
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
 

     <!-- DATETIMEPICKER -->
     <div class='col-sm-4'>
      <label>Tanggal_waktu</label>
      <div class="form-group">
       <div class='input-group date' id='datetimepicker'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
         <span class="glyphicon glyphicon-calendar"></span>
        </span>
       </div>
      </div>
      
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript">
   $(function () {
    $('#datetimepicker').datetimepicker({
     format: 'DD MMMM YYYY HH:mm',
      });
   });
  </script>
