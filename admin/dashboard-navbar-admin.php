<div>
        <nav class="uk-container navbar-sticky" uk-navbar>
            <div class=" uk-navbar-left">
                <img class=" uk-navbar-item uk-logo" src="spotify.png" width="110px" alt="">
            </div>
            <h1 align="center" style="color:white">Admin : <?= $name;?></h1>
            <div class="uk-navbar-right">

                <nav class="uk-navbar-container " uk-navbar>
                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav ">
                            <li>
                                <a href="#" uk-icon="icon: user; ratio: 3;"
                                    class="uk-navbar-nav uk-background-secondary"></a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-navbar-dropdown-nav ">
                                                <li class="uk-active"><a href="">Hai Admin <?= $name;?></a></li>
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
        </nav>
        <hr style="color:white;">
        <br>