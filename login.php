        <form class="form-signin" action="index.php" method="post" name="login">
            <?php
            if($error_txt != ""){
            ?>
                <div class="alert <?php echo $error_style; ?>" role="alert">
                <?php echo $error_txt; ?>
            </div>
            <?php
            }
            ?>
            <div class="text-center mb-4">
                <img class="mb-4" src="../img/lsmc-banner.png" alt="" width="288" height="144">
                <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                <p>Einloggen ins Fraktionsinterne</p>
            </div>
            <div class="text-center form-label-group">
                <label for="inputicname">IC Name</label>
                <input name="inputicname" type="text" id="inputicname" class="form-control" placeholder="IC Name: Max_Mustermann" required autofocus>
            </div>
            <div class="text-center form-label-group">
                <label for="inputPassword">Passwort</label>
                <input name="inputpassword" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-label-group">
                &nbsp;
            </div>
            <input type="hidden" name="site" value="login" />
            <input class="btn btn.lg btn-primary btn-block" type="submit" value="Einloggen" />
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2018 by Mike Mathews</p>
        </form>