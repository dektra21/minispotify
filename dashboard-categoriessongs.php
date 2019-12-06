<style>
       .iya a{
        color:grey;
        padding:10px;
        border-radius:30px;
        transition: all 0.1s ease;
    }
    .iya a:hover{
        background-color:black;
        color:white;
        padding:15px;
        border-radius:35px;
    } 
    </style>
<?php 
    if ($newcategories):
    foreach ($newcategories as $datacat):
?>
<?php
    $songbyCategory = $classSongs->songbyCategory($datacat->id);
?>
<div>
<div class="uk-container uk-background-secondary" uk-slider>
    <h1 style="color:white;"><?php echo  $datacat->nama; ?></h1>
    <hr style="color:white;">
    <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match uk-slider-items" uk-grid style="padding:20px;">
        <?php $a = 1; foreach ($songbyCategory as $datalagu): ?>
        <div>
            <div class="uk-card uk-card-default" style="">
                <div class="uk-card-media-top">
                <div class="uk-inline">
                        <img src="<?php echo  "assets/cover/".$datalagu->cover; ?>" width="100%" alt="">
                        <div class="iya">
                            <a class="uk-position-center  " style="left: 50%; top: 50%"
                                uk-icon="icon:play-circle; ratio: 2;" href="#modal-category-<?= $datacat->id ?>-<?= $a ?>" uk-toggle>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="uk-card-body uk-padding-small">

                    <h3 class="uk-card-title" align="center"><?php echo  $datalagu->name; ?></h3>
                    <p align="center"><?php echo  $datalagu->artist; ?></p>
                </div>

            </div>
        </div>

        <div id="modal-category-<?= $datacat->id ?>-<?= $a ?>" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <div class="uk-modal-header">

                </div>
                <div class="uk-modal-body">
                    <div class="uk-card-media-top"><img src="<?php echo  "assets/cover/".$datalagu->cover; ?>"
                            width="100%" alt="">
                    </div>
                    <p align="center"><audio src="<?php echo  "assets/songs/".$datalagu->file;  ?>" controls></audio>
                    </p>
                    <h2 class="uk-modal-title" align="center"><?php echo  $datalagu->artist; ?> -
                        <?php echo  $datalagu->name; ?></h2>
                </div>
                <div class="uk-modal-footer uk-text-right">

                </div>
            </div>
        </div>
        <?php $a++; endforeach;?>
    </div> <br>
</div>


</div>

<?php 
    endforeach;

endif;
?>