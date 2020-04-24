<!DOCTYPE HTML>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<title><?php echo e(config('app.name', 'Laravel')); ?></title>

<?php echo notifyCss(); ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<!-- <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' /> -->
<!-- Custom CSS -->
<!-- <link href="css/style.css" rel='stylesheet' type='text/css' /> -->
<!-- Graph CSS -->
<!-- <link href="css/lines.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">  -->
<!-- jQuery -->
<script src="<?php echo e(URL::asset('js/jquery.min.js')); ?>"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!---//webfonts--->  
<!-- Nav CSS -->
<!-- <link href="css/custom.css" rel="stylesheet"> -->
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo e(URL::asset('js/metisMenu.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/metisMenu.min.js')); ?>"></script>
<!-- Graph JavaScript -->
<script src="<?php echo e(URL::asset('js/d3.v3.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/rickshaw.js')); ?>"></script>


<link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet" type="text/css" >
<link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" >
<link href="<?php echo e(URL::asset('css/lines.css')); ?>" rel="stylesheet" type="text/css" >
<link href="<?php echo e(URL::asset('css/font-awesome.css')); ?>" rel="stylesheet" type="text/css" >
<link href="<?php echo e(URL::asset('css/custom.css')); ?>" rel="stylesheet" type="text/css" >

<style>
.graphs {
            position: relative;
            min-height: 650px;
        }

.copy {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
        }

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 2px 15px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 6px;
  padding-bottom: 6px;
  background-color: #4CAF50;
  color: white;
}

label {
    text-align: right;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal2, .modal3 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content, .modal-content2, .modal-content3 {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close, .close2 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus, ..close2:hover, .close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>

<body>

<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Modern</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
                    <h4>Welcome <?php echo e(Auth::user()->name); ?></h4>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" style="position: relative;min-height:600px;">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/account/dashboard"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/account/branches"><i class="fa fa-flask nav_icon"></i>Branches/Stores</a>
						</li>
						<li>
                            <a href="/account/products"><i class="fa fa-flask nav_icon"></i>Products</a>
						</li>
						<li style="position: absolute;bottom: 0;left: 0;">
						<a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
										<i class="fa fa-flask nav_icon"></i>
										<?php echo e(__('Logout')); ?>

										
                        </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
						</li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
            <div id="page-wrapper">
                <div class="graphs" style="height:100%;">
                    <p id = "branchname" style="color:black;"></p>
                    <!-- <?php echo $__env->make('notifications.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
                    <!-- <?php echo $__env->make('flash::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->
                    

                    <?php echo $__env->yieldContent('content'); ?>  
                    <?php echo $__env->make('notify::messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo notifyJs(); ?>

                    <div class="copy">
                        <p>Copyright &copy; 2020 Habib Yoh. All Rights Reserved | Designed & Developed by <a href="#" target="_blank">Toba Damola</a> </p>
                    </div>
                </div>
            </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        $('#flash-overlay-modal').modal();
    </script>

    <script>
        $('div.alert').not('.alert-important').delay(5000).fadeOut(350);
    </script>
    
</body>
</html>
<?php /**PATH C:\Users\My Notebook 3\projects\hbyo\resources\views/account/layouts/app.blade.php ENDPATH**/ ?>