<div class="container" style="background-color:<?php echo $blockcolor; ?>; border-radius:10px; padding:15px; margin-top:20px;">
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <?php
                if(!isset($_GET['view'])){
                    ?>
                <div class="col-xs-12">
                    <h1>Your Messages</h1>
                </div>
                <div class="col-xs-12" style="background-color:beige; padding:15px;">
                    <!-- Start of message -->
                    <a href="?" style="text-decoration:none; color:inherit;">
                        <div class="col-xs-12">
                            <div class="col-sm-2 col-xs-4">
                                <img src="https://scontent-lhr3-1.xx.fbcdn.net/v/t1.0-9/39616889_10214161539526076_6742971957479735296_n.jpg?_nc_cat=0&oh=eca667b7d8a355f1e7ac5d7c36d50a64&oe=5BF68F64"
                                    width="100" class="img-circle">
                            </div>
                            <div class="col-xs-8 col-xs-4">
                                <div class="col-xs-12">
                                    <h3>Ethel Highnes</h3>
                                </div>
                                <div class="col-xs-12">
                                    <p>You: That's true!</p>
                                </div>
                            </div>

                        </div>
                    </a>
                    <!-- End of message -->
                </div>
                <?php
            }
            ?>
            <?php
            if(isset($_GET['view']) && isset($_GET['id']) && isset($information)){
                ?>
                <div class="col-xs-12">
                        <h1>Messages with some body.</h1>
                    </div>
                    <div class="col-xs-12" style="background-color:beige; padding:15px;">
                        <!-- Start of message -->
                        <a href="?" style="text-decoration:none; color:inherit;">
                            <div class="col-xs-12">
                                <div class="col-sm-2 col-xs-4">
                                    <img src="https://scontent-lhr3-1.xx.fbcdn.net/v/t1.0-9/39616889_10214161539526076_6742971957479735296_n.jpg?_nc_cat=0&oh=eca667b7d8a355f1e7ac5d7c36d50a64&oe=5BF68F64"
                                        width="100" class="img-circle">
                                </div>
                                <div class="col-xs-8 col-xs-4">
                                    <div class="col-xs-12">
                                        <h3>Ethel Highnes</h3>
                                    </div>
                                    <div class="col-xs-12">
                                        <p>You: That's true!</p>
                                    </div>
                                </div>
    
                            </div>
                        </a>
                        <!-- End of message -->
                    </div>
                <?php
            }
            ?>
            </div>
        </div>

    </div>

</div>