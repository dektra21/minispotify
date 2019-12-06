<div id="offcanvas-nav" uk-offcanvas="overlay: true" class="uk-offcanvas">

    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default">
            <li class="uk-active"><a href="#"> <b>Hai <?= $name;?></b> </a></li>
            <hr>
            
            <li
                        class=" uk-background-secondary <?= $link, $playlist == NULL ? 'uk-active' : '' ?>  ">
                        <a href="index.php?page=dashboard" class=""
                            style="<?= $link, $playlist == NULL ? 'color:white;' : '' ?>font-family:'Poppins', sans-serif;">Home</a>
                    </li>
                    <li class=" uk-background-secondary <?= $link == 'all-songs' ? 'uk-active' : '' ?> "><a
                            href="index.php?page=dashboard&link=all-songs" class=""
                            style="font-family:'Poppins', sans-serif; <?= $link == 'all-songs' ? 'color:white;' : '' ?>">Songs</a>
                    </li>
                    <li class=" uk-background-secondary <?= $playlist == 'playlist' ? 'uk-active' : '' ?> ">
                        <a href="index.php?page=dashboard&playlist=playlist" class=""
                            style="font-family:'Poppins', sans-serif; <?= $playlist == 'playlist' ? 'color:white;' : '' ?>">Playlists</a>
                    </li>

            <hr>
            <li class="uk-active"><a href="logout.php">LOG OUT</a></li>
        </ul>

    </div>
</div>