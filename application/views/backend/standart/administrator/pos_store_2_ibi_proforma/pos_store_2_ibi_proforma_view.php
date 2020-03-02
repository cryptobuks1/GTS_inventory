
<script src="<?= BASE_ASSET; ?>/js/jquery.hotkeys.js"></script>
<script type="text/javascript">
//This page is a result of an autogenerated content made by running test.html with firefox.
function domo(){
 
   // Binding keys
   $('*').bind('keydown', 'Ctrl+e', function assets() {
      $('#btn_edit').trigger('click');
       return false;
   });

   $('*').bind('keydown', 'Ctrl+x', function assets() {
      $('#btn_back').trigger('click');
       return false;
   });
    
}


jQuery(document).ready(domo);
</script>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Pos Store 2 Ibi Proforma      <small><?= cclang('detail', ['Pos Store 2 Ibi Proforma']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/pos_store_2_ibi_proforma'); ?>">Pos Store 2 Ibi Proforma</a></li>
      <li class="active"><?= cclang('detail'); ?></li>
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
                    
                     <div class="widget-user-image">
                        <img class="img-circle" src="<?= BASE_ASSET; ?>/img/view.png" alt="User Avatar">
                     </div>
                     <!-- /.widget-user-image -->
                     <h3 class="widget-user-username">Pos Store 2 Ibi Proforma</h3>
                     <h5 class="widget-user-desc">Detail Pos Store 2 Ibi Proforma</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_pos_store_2_ibi_proforma" id="form_pos_store_2_ibi_proforma" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">ID PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->ID_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">TITRE PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->TITRE_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">CODE PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->CODE_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">REF CLIENT PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->NOM_CLIENT); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">TYPE PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->TYPE_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">DATE CREATION PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->DATE_CREATION_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">DATE MOD PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->DATE_MOD_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">PAYMENT TYPE PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->PAYMENT_TYPE_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">AUTHOR PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->AUTHOR_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">SOMME PERCU PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->SOMME_PERCU_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">TOTAL PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->TOTAL_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">DISCOUNT TYPE PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->DISCOUNT_TYPE_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">TVA PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->TVA_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">GROUP DISCOUNT PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->GROUP_DISCOUNT_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">REF SHIPPING ADDRESS PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->REF_SHIPPING_ADDRESS_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">SHIPPING AMOUNT PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->SHIPPING_AMOUNT_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">TYPE DELAY PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->TYPE_DELAY_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">TEMPS DELAY PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->TEMPS_DELAY_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">COND PAID PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->COND_PAID_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">PERCENT PAID PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->PERCENT_PAID_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">PERCENT PAID LIVR PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->PERCENT_PAID_LIVR_PROFORMA); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">VALID OFFRE PROFORMA </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_proforma->VALID_OFFRE_PROFORMA); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('pos_store_2_ibi_proforma_update', function() use ($pos_store_2_ibi_proforma){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit pos_store_2_ibi_proforma (Ctrl+e)" href="<?= site_url('administrator/pos_store_2_ibi_proforma/edit/'.$pos_store_2_ibi_proforma->ID_PROFORMA); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Pos Store 2 Ibi Proforma']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/pos_store_2_ibi_proforma/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Pos Store 2 Ibi Proforma']); ?></a>
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
