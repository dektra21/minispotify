<style>
    .iya a {
        color: grey;
        padding: 10px;
        border-radius: 30px;
        transition: all 0.1s ease;
    }

    .iya a:hover {
        background-color: black;
        color: white;
        padding: 15px;
        border-radius: 35px;
    }
    
</style>
<h1 align="center" style=" color:white;">Your Playlists</h1>
<?php 
    if ($newplaylists):
        foreach ($newplaylists as $dataapa):
?>
<?php
    $songbyPlaylists = $classPlaylists->songbyPlaylist($dataapa->id);
?>

<div class="uk-container uk-background-secondary" uk-slider>
<h2 style="color:white;" class="uk-navbar-left "><?php echo  $dataapa->name; ?></h2>


    <a href="include/action/delete-playlist.php?id= <?= $dataapa->id; ?>"
    class="uk-icon-button uk-margin-small-right uk-navbar-right" uk-icon="close"></a>
   

     <hr style="color:white;">
    <div class="uk-child-width-1-5@m uk-grid-small uk-grid-match uk-slider-items" uk-grid style="padding:20px;">
        <?php $a = 1; 
        if ($songbyPlaylists):
            foreach ($songbyPlaylists as $dataplaylist): ?>
        <div>
            <div class="uk-card uk-card-default" style="">
                <div class="uk-card-media-top">
                    <div class="uk-inline">
                        <img src="<?php echo  "assets/cover/".$dataplaylist->cover;?>" width="100%" alt="">
                        <div class="iya">
                            <a class="uk-position-center  " style="left: 50%; top: 50%"
                                uk-icon="icon:play-circle; ratio: 2;"
                                href="#modal-category-<?= $dataapa->id ?>-<?= $a ?>" uk-toggle>
                            </a>
                        </div>
                    </div>

                    <div class="uk-modal-body">

                        <h3 class="uk-card-title" align="center"><?php echo  $dataplaylist->name; ?></h3>
                        <p align="center"><?php echo  $dataplaylist->artist; ?></p>

                    </div>

                </div>
            </div>
        </div>

            <div id="modal-category-<?= $dataapa->id ?>-<?= $a ?>" uk-modal>
                <div class="uk-modal-dialog">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <div class="uk-modal-header">

                    </div>
                    <div class="uk-modal-body">
                        <div class="uk-card-media-top"><img src="<?php echo  "assets/cover/".$dataplaylist->cover; ?>"
                                width="100%" alt="">
                        </div>
                        <p align="center"><audio src="<?php echo  "assets/songs/".$dataplaylist->file;  ?>"
                                controls></audio>
                        </p>
                        <h2 class="uk-modal-title" align="center"><?php echo  $dataplaylist->artist; ?> -
                            <?php echo  $dataplaylist->name; ?></h2>
                    </div>
                    <div class="uk-modal-footer uk-text-right">
                        <a class="uk-button uk-button-primary"
                            href="include/action/delete-songs.php?id= <?= $dataplaylist->playlistdataid ?>">Delete From Playlist</a>
                    </div>
                </div>
            </div>
            <?php 
            $a++;
        
            endforeach;
        endif;?>
        </div> <br>
    </div>


</div>



<?php
    
endforeach;
endif;
?>


</div>