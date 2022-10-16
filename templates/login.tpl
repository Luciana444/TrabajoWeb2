{include file="templates/header.tpl"}

<form method="POST" action="validar">
  <div class="col-xs-12 col-md-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="col-xs-12 col-md-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  {if $error}
    <div class="alert alert-danger mt-3">
      {$error}
    </div>
  {/if}
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>