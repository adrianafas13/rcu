<style>
  .modal-header h4{
    
    text-align: center;
  }


</style>

<!-- Modal -->

<div id="modalLogin" class="modal fade show" tabindex="-1" arial-modal="true">
  <div class="modal-dialog modal-login modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Iniciar Sesión</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">x</button>
      </div>
      <div class="modal-body">
        <from action="#" method="post">
          <div class="form-group">
            <i class="fa fa-user"> Correo Electronico</i>
            <input type="text" class="form-control" placeholder="revistauc@unimar.edu.ve" require="required">
          </div>
          <div class="form-group">
            <i class="fa fa-lock"> Contraseña</i>
            <input type="password" class="form-control" placeholder="contraseña" require="required">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block btn lg" value="Login">
          </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary">¿Olvido su contraseña?</button>
        <button type="button" class="btn btn-primary">Iniciar</button>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>
