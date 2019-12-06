<nav uk-navbar uk-sticky="sel-target: .navbar-sticky; cls-active: uk-navbar-sticky" style="background-color:#222;">
    <div class=" uk-navbar-left">
        <img class=" uk-navbar-item uk-logo" src="spotify.png" width="110px" alt="">
        <h2 style="color:white; font-family:'Poppins', sans-serif;">Sepotifae</h2>
    </div>
    <div class="uk-navbar-right">

        <nav class="uk-navbar-container " uk-navbar>
            <div class="uk-navbar-left">

                <ul class="uk-navbar-nav ">
                    <li
                        class=" uk-background-secondary <?= $link, $playlist == NULL ? 'uk-active' : '' ?>  uk-visible@m">
                        <a href="index.php?page=dashboard" class=""
                            style="<?= $link, $playlist == NULL ? 'color:white;' : '' ?>font-family:'Poppins', sans-serif;">Home</a>
                    </li>
                    <li class=" uk-background-secondary <?= $link == 'all-songs' ? 'uk-active' : '' ?> uk-visible@m"><a
                            href="index.php?page=dashboard&link=all-songs" class=""
                            style="font-family:'Poppins', sans-serif; <?= $link == 'all-songs' ? 'color:white;' : '' ?>">Songs</a>
                    </li>
                    <li class=" uk-background-secondary <?= $playlist == 'playlist' ? 'uk-active' : '' ?> uk-visible@m">
                        <a href="index.php?page=dashboard&playlist=playlist" class=""
                            style="font-family:'Poppins', sans-serif; <?= $playlist == 'playlist' ? 'color:white;' : '' ?>">Playlists</a>
                    </li>


                    <li>
                        <a class="uk-navbar-toggle uk-hidden@m uk-background-secondary"
                            uk-toggle="target: #offcanvas-nav" uk-navbar-toggle-icon href="#"></a>
                        <a href="#" uk-icon="icon: user; ratio: 2;"
                            class="uk-navbar-nav uk-visible@m uk-background-secondary"></a>
                        <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                            <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                                <div>
                                    <ul class="uk-nav uk-navbar-dropdown-nav ">
                                        <li class="uk-active"><a href="">Hai <?= $name;?></a></li>
                                        <hr>


                                        <li class="uk-active"><a href="logout.php">LOG OUT</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
    <hr style="color:white;">
</nav>