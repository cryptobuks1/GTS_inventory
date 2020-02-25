
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
      Pos Store 2 Ibi Commande      <small><?= cclang('detail', ['Pos Store 2 Ibi Commande']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/pos_store_2_ibi_commande'); ?>">Pos Store 2 Ibi Commande</a></li>
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
                     <h3 class="widget-user-username">Pos Store 2 Ibi Commande</h3>
                     <h5 class="widget-user-desc">Detail Pos Store 2 Ibi Commande</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_pos_store_2_ibi_commande" id="form_pos_store_2_ibi_commande" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande Id </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->commande_id); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande Numero </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->commande_numero); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande Article </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->ID_ARTICLE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande Client Id </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->NOM_CLIENT); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande User Id </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->commande_user_id); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande Categorie Id </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->NOM_CATEGORIE); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande Unite </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->commande_unite); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Delai </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->delai); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Validite </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->validite); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">A La Commande </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->a_la_commande); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">A La Livraison </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->a_la_livraison); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande Date </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->commande_date); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Commande Date Modification </label>

                        <div class="col-sm-8">
                           <?= _ent($pos_store_2_ibi_commande->commande_date_modification); ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('pos_store_2_ibi_commande_update', function() use ($pos_store_2_ibi_commande){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit pos_store_2_ibi_commande (Ctrl+e)" href="<?= site_url('administrator/pos_store_2_ibi_commande/edit/'.$pos_store_2_ibi_commande->commande_id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Pos Store 2 Ibi Commande']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/pos_store_2_ibi_commande/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Pos Store 2 Ibi Commande']); ?></a>
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