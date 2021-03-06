
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>

<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+a', function assets() {
       window.location.href = BASE_URL + '/administrator/proforma/add';
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
      Liste de proforma <small></small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Liste de proforma</li>
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
                        <?php is_allowed('proforma_add', function(){?>
                        <a class="btn btn-flat btn-success btn_add_new" id="btn_add_new" title="Ajouter" href="<?=  site_url('administrator/registers/add/'.$this->uri->segment(4).''); ?>"><i class="fa fa-plus" ></i></a>
                        <?php }) ?>
                        <?php is_allowed('proforma_export', function(){?>
                        <a class="btn btn-flat btn-success" title="Export XLS" href="<?= site_url('administrator/proforma/export/'.$this->uri->segment(4).''); ?>"><i class="fa fa-file-excel-o" ></i></a>
                        <?php }) ?>
                        <?php is_allowed('proforma_export', function(){?>
                        <a class="btn btn-flat btn-success" title="Export PDF" href="<?= site_url('administrator/proforma/export_pdf/'.$this->uri->segment(4).''); ?>"><i class="fa fa-file-pdf-o" ></i></a>
                        <?php }) ?>
                     </div>
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/list.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Proforma</h3>
                     <h5 class="widget-user-desc"><i class="label bg-yellow"><?= $proforma_counts; ?>  <?= cclang('items'); ?></i></h5>
                  </div>

                  <form name="form_proforma" id="form_proforma" action="<?= base_url('administrator/proforma/index'); ?>">
                  

                  <div class="table-responsive"> 
                  <table class="table table-bordered table-striped dataTable">
                     <thead>
                        <tr class="">
                           <th>
                            <input type="checkbox" class="flat-red toltip" id="check_all" name="check_all" title="check all">
                           </th>
                           <th>Numéro de la proforma</th>
                           <th>Titre</th>
                           <th>Client</th>
                           <th>Total</th>
                           <th>Paiement</th>
                           <th>Statut</th>
                           <th>Date</th>
                           <th>Par</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody id="tbody_proforma">
                     <?php foreach($proformas as $proforma): 

                      $ref_client=$this->model_registers->getOne('pos_ibi_clients',array('ID_CLIENT'=>$proforma->REF_CLIENT_PROFORMA));
                      $author_PROFORMA=$this->model_registers->getOne('aauth_users',array('id'=>$proforma->AUTHOR_PROFORMA));

                      if($proforma->TYPE_PROFORMA == 'ibi_proforma_pv'){
                          $type_proforma = "Proforma point de vente";
                      }elseif($proforma->TYPE_PROFORMA == 'ibi_proforma_devis'){
                          $type_proforma = "Proforma devis";
                      }else{
                          $type_proforma = "Aucun";
                      }

                      ?>
                        <tr>
                           <td width="5">
                              <input type="checkbox" class="flat-red check" name="id[]" value="<?= $proforma->ID_PROFORMA; ?>">
                           </td>
                           
                           <td><?= _ent($proforma->CODE_PROFORMA); ?></td> 
                           <td><?= _ent($proforma->TITRE_PROFORMA); ?></td>
                             
                           <td><?= _ent($ref_client['NOM_CLIENT']); ?></td> 
                           <td><?= _ent($proforma->TOTAL_PROFORMA); ?></td>
                           <td></td> 
                           <td><?= _ent($type_proforma);?></td>
                           <td><?= _ent($proforma->DATE_CREATION_PROFORMA); ?></td>
                           <td><?= _ent($author_PROFORMA['username']); ?></td> 
                           <td width="200">
                              <?php is_allowed('proforma_view', function() use ($proforma){?>
                              <a href="<?= site_url('administrator/proforma/print/'.$this->uri->segment(4).'/' . $proforma->ID_PROFORMA); ?>" title="Proforma" class="btn btn-primary btn-sm"><i class="fa fa-print"></i></a>
                              <?php }) ?>
                              <?php is_allowed('proforma_view', function() use ($proforma){?>
                              <a href="<?= site_url('administrator/client_file/add/'.$this->uri->segment(4).'/' . $proforma->ID_PROFORMA); ?>" title="Nouvelle fiche sur bon de commande" class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></a>
                              <?php }) ?>
                              <?php is_allowed('proforma_update', function() use ($proforma){?>
                              <a href="<?= site_url('administrator/proforma/edit/'.$this->uri->segment(4).'/' . $proforma->ID_PROFORMA); ?>" class="btn btn-info btn-sm"><i class="fa fa-edit "></i></a>
                              <?php }) ?>
                              <?php is_allowed('proforma_delete', function() use ($proforma){?>
                              <a href="javascript:void(0);" data-href="<?= site_url('administrator/proforma/delete/'.$this->uri->segment(4).'/' . $proforma->ID_PROFORMA); ?>" class="btn btn-danger btn-sm remove-data"><i class="fa fa-close"></i></a>
                               <?php }) ?>
                           </td>
                        </tr>
                      <?php endforeach; ?>
                      <?php if ($proforma_counts == 0) :?>
                         <tr>
                           <td colspan="100">
                           Les données proforma ne sont pas disponibles
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
                            <option <?= $this->input->get('f') == 'TITRE' ? 'selected' :''; ?> value="TITRE">TITRE</option>
                           <option <?= $this->input->get('f') == 'REF_CLIENT' ? 'selected' :''; ?> value="REF_CLIENT">REF CLIENT</option>
                           <option <?= $this->input->get('f') == 'DATE_CREATION' ? 'selected' :''; ?> value="DATE_CREATION">DATE CREATION</option>
                           <option <?= $this->input->get('f') == 'DATE_MOD' ? 'selected' :''; ?> value="DATE_MOD">DATE MOD</option>
                           <option <?= $this->input->get('f') == 'AUTHOR' ? 'selected' :''; ?> value="AUTHOR">AUTHOR</option>
                          </select>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <button type="submit" class="btn btn-flat" name="sbtn" id="sbtn" value="Apply" title="<?= cclang('filter_search'); ?>">
                        Filter
                        </button>
                     </div>
                     <div class="col-sm-1 padd-left-0 ">
                        <a class="btn btn-default btn-flat" name="reset" id="reset" value="Apply" href="<?= base_url('administrator/proforma');?>" title="<?= cclang('reset_filter'); ?>">
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
      var serialize_bulk = $('#form_proforma').serialize();

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
               document.location.href = BASE_URL + '/administrator/proforma/delete?' + serialize_bulk;      
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