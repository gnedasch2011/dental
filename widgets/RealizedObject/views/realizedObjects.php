<?php if(is_array($arrRealized)):?>
    <?php foreach($arrRealized as $objBefore=>$objAfter ):?>
        <div class="gallery-item <?= $group ;?>">
            <div class="thumb">
                <div class="twentytwenty-container"
                     style="height: 240px;">
                    <img src="<?= $objBefore ;?>" alt=""
                         class="twentytwenty-before"
                         style="clip: rect(0px, 180px, 240px, 0px);">
                    <img src="<?= $objAfter ;?>" alt=""
                         class="twentytwenty-after"
                         style="clip: rect(0px, 360px, 240px, 180px);">
                    <div class="twentytwenty-handle"
                         style="left: 180px;"><span
                                class="twentytwenty-left-arrow"></span><span
                                class="twentytwenty-right-arrow"></span><span
                                class="twentytwenty-left-arrow"></span><span
                                class="twentytwenty-right-arrow"></span>
                    </div>
                    <div class="twentytwenty-handle"
                         style="left: 180px;"><span
                                class="twentytwenty-left-arrow"></span><span
                                class="twentytwenty-right-arrow"></span>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>      
  <?php endif;?>


