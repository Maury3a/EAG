

<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> --> 


<div id="modal" class="modal fade col-md-12 center-block" role="dialog">
  <div class="modal-dialog">

 
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close colorred" data-dismiss="modal">&times;</button>
        <div class="clearfix"></div>
        <h4 class="modal-title">INFORMACIÓN DEL SISTEMA</h4>
      </div>
      <div class="modal-body">
        <p><?php isset($error_system) ? $error_system : "" ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
