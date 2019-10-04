<!-- ============== owl slide items  ============= -->
<div class="owl-carousel owl-theme" autoplay= "true">	
			
    <?php if(count($produtos->listarNovos(8)) > 0) : ?>	
        <?php foreach($produtos->listarNovos(8) as $produto) : ?>	
            <?php $id = $produto["id_produto"]; ?>
            <figure class="card card-product" onclick="location.href='produto.php?id=<?=$id?>';" style="cursor: pointer;">
                <div class="img-wrap"> 
                    <img src="<?=$produto["imagem"]?>">
                </div>
                <figcaption class="info-wrap">
                    <h6 class="title text-dark"><?= $produto["nome"]?></h6>						
                    <div class="price-wrap">
                        <h3><span class="price-new text-info">R$<?=$produto["valor"]?></span></h3>
                    </div> <!-- price-wrap.// -->					
                </figcaption>
            </figure> <!-- card // -->
        <?php endforeach; ?>	
    <?php else: ?>
        <!-- caso não tiver nenhum produto -->
    <?php endif; ?>
            
</div>





<!-- ============== owl slide items .end // ============= -->			