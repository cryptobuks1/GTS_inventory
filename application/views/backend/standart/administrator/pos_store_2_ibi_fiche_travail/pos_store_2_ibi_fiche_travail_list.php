
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/Pos_store_2_ibi_fiche_travail/add';
       return false;
   });

   $('*').bind('keydown', 'Ctrl+f', function assets() {
       $('#sbtn').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
       $('#reset').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+b', function assets() {

       $('#reset').trigger('click');
       return false;
   });
}

jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Pos Store 2 Ibi Fiche Travail<small><?= cclang('list_all'); ?></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pos Store 2 Ibi Fiche Travail</li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row" >
      
      <div class="col-md-12">
         <div class="box box-warning">
            <div class="box-body ">
               <!-- Widget: user widget style 1 -->
               <div class="box box-widget widget-user-2">
                  <!-- Add the bg color to the header using any of the bg-* classes -->
                  <div class="widget-user-header ">
                     <div class="row pull-right">
                        <?php is_allowed('pos_store_2_ibi_fiche_travail_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="<?= cclang('add_new_button', ['Pos Store 2 Ibi Fiche Travail']); ?>  (Ctrl+a)" href="<?=  site_url('administrator/pos_store_2_ibi_fiche_travail/add'); ?>"><i class="fa fa-plus-square-o" ></i> <?= cclang('add_new_button', ['Pos Store 2 Ibi Fiche Travail']); ?></a>
                        <?php }) ?>
                        <?php is_allowed('pos_store_2_ibi_fiche_travail_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> Pos Store 2 Ibi Fiche Travail" href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail/export'); ?>"><i class="fa fa-file-excel-o" ></i> <?= cclang('export'); ?> XLS</a>
                        <?php }) ?>
                        <?php is_allowed('pos_store_2_ibi_fiche_travail_export', function(){?>
                        <a class="btn btn-flat btn-success" title="<?= cclang('export'); ?> pdf Pos Store 2 Ibi Fiche Travail" href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail/export_pdf'); ?>"><i class="fa fa-file-pdf-o" ></i> <?= cclang('export'); ?> PDF</a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Pos Store 2 Ibi Fiche Travail</h3>
                     <h5 class="widget-user-desc"><?= cclang('list_all', ['Pos Store 2 Ibi Fiche Travail']); ?>  <i class="label bg-yellow"><?= $pos_store_2_ibi_fiche_travail_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_pos_store_2_ibi_fiche_travail" id="form_pos_store_2_ibi_fiche_travail" action="<?= base_url('administrator/pos_store_2_ibi_fiche_travail/index'); ?>">
                  

                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <th>Fiche Numero</th>
                           <th>Fiche Client Id</th>
                           <th>Fiche User Id</th>
                           <th>Fiche Date</th>
                           <th>Fiche Date Modification</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_pos_store_2_ibi_fiche_travail">
                     <?php foreach($pos_store_2_ibi_fiche_travails as $pos_store_2_ibi_fiche_travail): ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $pos_store_2_ibi_fiche_travail->fiche_id; ?>">
                           </td>
                           
                           <td><?= _ent($pos_store_2_ibi_fiche_travail->fiche_numero); ?></td> 
                           <td><?= _ent($pos_store_2_ibi_fiche_travail->NOM_CLIENT); ?></td>
                             
                           <td><?= _ent($pos_store_2_ibi_fiche_travail->fiche_user_id); ?></td> 
                           <td><?= _ent($pos_store_2_ibi_fiche_travail->fiche_date); ?></td> 
                           <td><?= _ent($pos_store_2_ibi_fiche_travail->fiche_date_modification); ?></td> 
                           <td width="200">
                              <?php is_allowed('pos_store_2_ibi_fiche_travail_view', function() use ($pos_store_2_ibi_fiche_travail){?>
                              <a href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail/view/' . $pos_store_2_ibi_fiche_travail->fiche_id); ?>" class="label-default"><i class="fa fa-newspaper-o"></i> <?= cclang('view_button'); ?>
                              <?php }) ?>
                              <?php is_allowed('pos_store_2_ibi_fiche_travail_update', function() use ($pos_store_2_ibi_fiche_travail){?>
                              <a href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail/edit/' . $pos_store_2_ibi_fiche_travail->fiche_id); ?>" class="label-default"><i class="fa fa-edit "></i> <?= cclang('update_button'); ?></a>
                              <?php }) ?>
                              <?php is_allowed('pos_store_2_ibi_fiche_travail_delete', function() use ($pos_store_2_ibi_fiche_travail){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/pos_store_2_ibi_fiche_travail/delete/' . $pos_store_2_ibi_fiche_travail->fiche_id); ?>" class="label-default remove-data"><i class="fa fa-close"></i> <?= cclang('remove_button'); ?></a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($pos_store_2_ibi_fiche_travail_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Pos Store 2 Ibi Fiche Travail data is not available
                           </td>
                         </tr>
                      <?php endif; ?>
                     </tbody>
                  </table>
                  </div>
               </div>
               <hr>
               <!-- /.widget-user -->
               <div class="row">
                  <div class="col-md-8">
                     <div class="col-sm-2 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="bulk" id="bulk" placeholder="Site Email" >
                           <option value="">Bulk</option>
                           <option value="delete">Delete</option>
                        </select>
                     </div>
                     <div class="col-sm-2 padd-left-0 ">
                        <button type="button" class="btn btn-flat" name="apply" id="apply" title="<?= cclang('apply_bulk_action'); ?>"><?= cclang('apply_button'); ?></button>
                     </div>
                     <div class="col-sm-3 padd-left-0  " >
                        <input type="text" class="form-control" name="q" id="filter" placeholder="<?= cclang('filter'); ?>" value="<?= $this->input->get('q'); ?>">
                     </div>
                     <div class="col-sm-3 padd-left-0 " >
                        <select type="text" class="form-control chosen chosen-select" name="f" id="field" >
                           <option value=""><?= cclang('all'); ?></option>
                            <option <?= $this->input->get('f') == 'fiche_numero' ? 'selected' :''; ?> value="fiche_numero">Fiche Numero</option>
                           <option <?= $this->input->get('f') == 'fiche_client_id' ? 'selected' :''; ?> value="fiche_client_id">Fiche Client Id</option>
                           <option <?= $this->input->get('f') == 'fiche_user_id' ? 'selected' :''; ?> value="fiche_user_id">Fiche User Id</option>
                           <option <?= $this->input->get('f') == 'fiche_unite' ? 'selected' :''; ?> value="fiche_unite">Fiche Unite</option>
                           <option <?= $this->input->get('f') == 'fiche_date' ? 'selected' :''; ?> value="fiche_date">Fiche Date</option>
                           <option <?= $this->input->get('f') == 'fiche_date_modification' ? 'selected' :''; ?> value="fiche_date_modification">Fiche Date Modification</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/pos_store_2_ibi_fiche_travail');?>" title="<?= cclang('reset_filter'); ?>">
                        <i class="fa fa-undo"></i>
                        </a>
                     </div>
                  </div>
                  </form>                  <div class="col-md-4">
                     <div class="dataTables_paginate paging_simple_numbers pull-right" id="example2_paginate" >
                        <?= $pagination; ?>
                     </div>
                  </div>
               </div>
            </div>
            <!--/box body -->
         </div>
         <!--/box -->
      </div>
   </div>
</section>
<!-- /.content -->

<!-- Page script -->
<script>
  $(document).ready(function(){
   
    $('.remove-data').click(function(){

      var url = $(this).attr('data-href');

      swal({
          title: "<?= cclang('are_you_sure'); ?>",
          text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
          cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){
          if (isConfirm) {
            document.location.href = url;            
          }
        });

      return false;
    });


    $('#apply').click(function(){

      var bulk = $('#bulk');
      var serialize_bulk = $('#form_pos_store_2_ibi_fiche_travail').serialize();

      if (bulk.val() == 'delete') {
         swal({
            title: "<?= cclang('are_you_sure'); ?>",
            text: "<?= cclang('data_to_be_deleted_can_not_be_restored'); ?>",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "<?= cclang('yes_delete_it'); ?>",
            cancelButtonText: "<?= cclang('no_cancel_plx'); ?>",
            closeOnConfirm: true,
            closeOnCancel: true
          },
          function(isConfirm){
            if (isConfirm) {
               document.location.href = BASE_URL + '/administrator/pos_store_2_ibi_fiche_travail/delete?' + serialize_bulk;      
            }
          });

        return false;

      } else if(bulk.val() == '')  {
          swal({
            title: "Upss",
            text: "<?= cclang('please_choose_bulk_action_first'); ?>",
            type: "warning",
            showCancelButton: false,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Okay!",
            closeOnConfirm: true,
            closeOnCancel: true
          });

        return false;
      }

      return false;

    });/*end appliy click*/


    //check all
    var checkAll = $('#check_all');
    var checkboxes = $('input.check');

    checkAll.on('ifChecked ifUnchecked', function(event) {   
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });

  }); /*end doc ready*/
</script>