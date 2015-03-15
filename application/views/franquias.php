<div class="container marketing franquias">

  <div class="row">
    <div class="col-lg-8">
      <h3><?php echo lang("franquias"); ?></h3>
      <?php 
      if(!empty($franquiasList)){?>
      <div id="accordion">  
       <?php foreach($franquiasList as $r): ?>        
         <h2><?php echo $r->Nome;?></h2> 

         <div class="accordion_sub"> <p ><?php echo $r->Descricao; ?></p> </div>       

       <?php endforeach; ?>
     </div>
     <?php } else{ 
       echo "<h3>Nenhuma franquia encontrada</h3>"; 
     } ?>
   </div>
   <div class="col-lg-4">
     <h3><?php echo lang("franquia_filtro"); ?></h3>
     <a href="<?php echo base_url(); ?>franquias" class="list-group-item active">Exibir todas as Franquias</a>
     <div class="list-group">
      <?php foreach($segmentoList as $s): ?>        
        <a href="<?php echo base_url(); ?>franquias/filter/<?php echo $s->Id; ?>" class="list-group-item"><?php echo $s->Segmento;?></a>
      <?php endforeach; ?>
    </div>
  </div>


  
  <hr/>
</div>

<hr class="featurette-divider">