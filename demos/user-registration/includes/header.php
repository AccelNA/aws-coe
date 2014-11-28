<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AWS - Registration</title>
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
   <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">AWS - Registration</a>
            </div>
            <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">
                <?php if(isset($_SESSION['username'])){ ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i><?php echo $_SESSION['username'] ?><b class="caret"></b>
                    </a>
                    
                    <ul class="dropdown-menu">
                       
                       
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                
                <?php } else{ ?>
                 <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="login.php"><i class="fa fa-fw fa-user"></i> Sign In</a>
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-user"></i> Sign Up</a>
                        </li>
                       
                    </ul>
                 </li>
                
                <?php } ?>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">                   
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
