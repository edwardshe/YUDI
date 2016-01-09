<ul class="nav navbar-nav navbar-right">
			 <?php if($_SESSION[SESSION_USERID]=="") {?>
            <li class="hidden"><a href="#page-top"></a></li>
            <li><a href="index.html" class="page-scroll">Home</a></li>
            <li><a href="team.html" class="page-scroll">Team</a></li>
             <li><a href="donate.html" class="page-scroll">Donate</a></li>
            <li><a href="contact.html" class="page-scroll">Contact</a></li>
            <?php } ?>
            <?php if($_SESSION[SESSION_USERID]!="") {?>
             <li class="active"><a href="logout.php" class="page-scroll login_box">Logout</a></li>
             <?php } ?>
          </ul>