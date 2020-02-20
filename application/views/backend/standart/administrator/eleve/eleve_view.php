
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
      Espace Enregistrement      <small><?= cclang('detail', ['Espace Enregistrement']); ?> </small>
   </h1>
   <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class=""><a  href="<?= site_url('administrator/eleve'); ?>">Espace Enregistrement</a></li>
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
                     <h3 class="widget-user-username">Espace Enregistrement</h3>
                     <h5 class="widget-user-desc">Detail Espace Enregistrement</h5>
                     <hr>
                  </div>

                 
                  <div class="form-horizontal" name="form_eleve" id="form_eleve" >
                   
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Id </label>

                        <div class="col-sm-8">
                           <?= _ent($eleve->id); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Nom: </label>

                        <div class="col-sm-8">
                           <?= _ent($eleve->nom); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Age: </label>

                        <div class="col-sm-8">
                           <?= _ent($eleve->age); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Classe </label>

                        <div class="col-sm-8">
                           <?= _ent($eleve->title); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Creation </label>

                        <div class="col-sm-8">
                           <?= _ent($eleve->date_creation); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Created By </label>

                        <div class="col-sm-8">
                           <?php
                            $user = $this->model_eleve->get_user_info('aauth_users',$eleve->created_by,'id');
                              foreach ($user as $value) {
                                echo "".$value->username;
                              }
                              ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Date Modified </label>

                        <div class="col-sm-8">
                           <?= _ent($eleve->date_modified); ?>
                        </div>
                    </div>
                                         
                    <div class="form-group ">
                        <label for="content" class="col-sm-2 control-label">Modified By </label>

                        <div class="col-sm-8">
                        <?php
                            $user = $this->model_eleve->get_user_info('aauth_users',$eleve->created_by,'id');
                              foreach ($user as $value) {
                                echo "".$value->username;
                              }
                              ?>
                        </div>
                    </div>
                                        
                    <br>
                    <br>

                    <div class="view-nav">
                        <?php is_allowed('eleve_update', function() use ($eleve){?>
                        <a class="btn btn-flat btn-info btn_edit btn_action" id="btn_edit" data-stype='back' title="edit eleve (Ctrl+e)" href="<?= site_url('administrator/eleve/edit/'.$eleve->id); ?>"><i class="fa fa-edit" ></i> <?= cclang('update', ['Eleve']); ?> </a>
                        <?php }) ?>
                        <a class="btn btn-flat btn-default btn_action" id="btn_back" title="back (Ctrl+x)" href="<?= site_url('administrator/eleve/'); ?>"><i class="fa fa-undo" ></i> <?= cclang('go_list_button', ['Eleve']); ?></a>
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
