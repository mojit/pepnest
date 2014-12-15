<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Where | Hush</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/hush.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <div class="logo">
        <a href="index.html"><img src="img/logob.png" class="img-responsive"></a>
    </div>

    <header class="where-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text-why">
                        <span class="name">Where</span>
                    </div>
                </div>
            </div>
        
        </div>

    </header>
    <div class="circle-why">
                            <div class="btn-circle-who">
                                <img src="img/where1.png" class="img-responsive" style="margin-top: -15px;">
                            </div>
                        </div>
                        <br><br>
    <section id="why-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="img/double.jpg" class="img-responsive">
                </div>
                <div class="col-sm-6 text-center contact-form">
                    <!-- Button trigger modal -->
                    <h2>
                    <i class="fa fa-envelope" data-toggle="modal" data-target="#myModal"></i>
                    </h2>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="myModalLabel">Thank you for writing to us</h4>
                          </div>
                          <div class="modal-body text-right">
                            <form class="form-signin" role="form" role="form" method="POST" action="contact.php" id="consultation">
                                  <textarea type="textarea" rows="5" class="form-control" name="message" placeholder="Type your Message here..." required ></textarea>
                                  <input type="hidden" name="save" value="contact"><br>
                                  <button class="btn btn-warning" type="submit">Submit</button>
                            </form>
                          </div>
                          
                        </div>
                      </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - Hush
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/freelancer.js"></script>

</body>

</html>
