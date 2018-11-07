<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Codeigniter 3 CRUD Example from scratch</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="<?php echo base_url('phoneCRUD/create') ?>"> Create New Phone</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>Cedula</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Telefono</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $phone) { ?>      
      <tr>
          <td><?php echo $phone->id; ?></td>
          <td><?php echo $phone->name; ?></td> 
          <td><?php echo $phone->lastname; ?></td> 
          <td><?php echo $phone->phone; ?></td>          
      <td>
        <form method="DELETE" action="<?php echo base_url('phoneCRUD/delete/'.$phone->id);?>">
          <a class="btn btn-info" href="<?php echo base_url('phoneCRUD/'.$phone->id) ?>"> show</a>

 
         <a class="btn btn-primary" href="<?php echo base_url('phoneCRUD/edit/'.$phone->id) ?>"> Edit</a>
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>


</table>