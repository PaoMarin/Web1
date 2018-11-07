<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Phone</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="<?php echo base_url('phoneCRUD');?>"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Cedula:</strong>
            <?php echo $phone->id; ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            <?php echo $phone->name; ?>
        </div>
    </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellido:</strong>
            <?php echo $phone->lastname; ?>
        </div>
    </div>
       <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Telefono:</strong>
            <?php echo $phone->phone; ?>
        </div>
    </div>
</div>