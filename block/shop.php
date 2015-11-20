<div class="container">
    <div class="grid">
        <?php for($i=1;$i<=10;$i++){ $r = rand(0,4); ?>
           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 grid-item">
               <div class="text-center grid-text">
                    Нежность <? if($r == 1){ ?><b class="new">новинка</b>
                    <?php } elseif($r == 2){ ?><b class="new a">новинка</b>
                    <?php } elseif($r == 3){ ?><b class="new sale">скидка</b>
                    <?php } ?>
               <div class="graph g">Для дорогих мам</div>
               </div>
             <img src="img/masonry/<? echo $i; ?>.jpg" class="">
             <div class="price text-center">
                <b class="money"><?php echo rand(200,2500); ?></b> <b class="currency">грн.</b>
             </div>
           </div>
        <?php } ?>
    </div>
</div>