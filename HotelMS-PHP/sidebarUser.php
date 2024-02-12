
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar" style="background-color :ivory">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="img/user.png" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"><?php echo $user['name'];?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Pengguna</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
    <?php 
        if (isset($_GET['reservation'])){ ?>
            <li class="active">
            <a href="indexUser.php?reservationUser"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        <?php } else{?>
            <li>
            <a href="indexUser.php?reservationUser"><em class="fa fa-calendar">&nbsp;</em>
                    Reservation
                </a>
            </li>
        
        <?php }
        if (isset($_GET['complain'])){ ?>
            <li class="active">
                <a href="indexUser.php?complain"><em class="fa fa-comments">&nbsp;</em>
                    Manage Complaints
                </a>
            </li>
        <?php } else{?>
            <li>
                <a href="indexUser.php?complain"><em class="fa fa-comments">&nbsp;</em>
                    Manage Complaints
                </a>
            </li>
        <?php }
        ?>

        

        
    </ul>
</div><!--/.sidebar-->