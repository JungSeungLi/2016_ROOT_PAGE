<? session_start(); ?>
<script language="javascript" type="text/javascript" src="assets/js/end.js"></script>
<header>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ROOT </a>
            </div>
            <!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php#home">HOME</a>
                    </li>
                    <li><a href="index.php#services">TRACK</a>
                    </li>
                    <li><a href="index.php#Parallax-one">PROGRAM</a></li>
                    <li><a href="index.php#price-sec">ChairMan</a>
                    </li>

                    <li><a href="index.php#contact-sec">Map</a>
                    </li>
                    <?php
                    if(isset($_SESSION['email']))
                    {?>
                    <li><a href="ctf.php">Ctf</a></li>
                    <?php 
                    }else{
		    ?>
		    <li><a href=signup_page.php>join root</a></li>
			<?php
			}
                    ?>
 	             	<?php
						if($_SESSION['name']=='root'){
		?>
							<li><a href="ctfupload.php">CTF Upload</a></li>
						<?php
		}
		?>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
          </header>
