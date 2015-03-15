<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Adicionar Notícia</h1>

  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label for="Titulo" class="col-sm-2 control-label">Título</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="form-group">
      <label for="Conteudo" class="col-sm-2 control-label">Conteúdo</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="3"></textarea>
      </div>
    </div>
    <div class="form-group">
    <label for="Titulo" class="col-sm-2 control-label">Segmento</label>
      <div class="col-sm-10">
      <select multiple class="form-control">
      <?php foreach($segmentoList as $s): ?>        
        <option value=<?php echo $s->Id;?>><?php echo $s->Segmento;?></option>
      <?php endforeach; ?>
    </select>
      </div>
    </div>
    
    <div class="form-group pull-right">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Adicionar Notícia</button>
      </div>
    </div>
  </form>


</div>