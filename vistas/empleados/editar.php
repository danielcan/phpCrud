<div class="card">
    <div class="card-header">
        Agregar Empleado
    </div>
    <div class="card-body">
       <form action="" method="post">

            <div class="mb-3">
              <label for="" class="form-label">ID:</label>
              <input readonly type="text"
                class="form-control" value="<?php echo $empleado->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="">

            </div>

           <div class="mb-3">
             <label for="" class="form-label">nombre</label>
             <input required type="text"
               class="form-control" value="<?php echo $empleado->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre Completo ">
           </div>

          <div class="mb-3">
            <label for="" class="form-label">correo</label>
            <input required type="email" value="<?php echo $empleado->correo; ?>" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del empleado">
          </div>

          <input  id="" class="btn btn-success" type="submit" value="Editar Empleado">

       </form>
    </div>
   
</div>