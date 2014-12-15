<!DOCTYPE html>
<html lang="en">

<head>     <meta charset="utf-8">     <meta name="viewport" content="width
=device-width, initial-scale=1.0">     <meta name="description" content="">
<meta name="author" content="pepnest.com">     <link rel="icon"
type="image/png"        href="img/verseicongrey.png">     <title>Verse</title>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-
awesome.min.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-select.css" rel="stylesheet" type="text/css">
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body>
        <section class="pep_intro-section">
            <div class="pep_ind">
                <iframe src="https://www.indiegogo.com/project/verse/embedded/8348010" width="222px" height="445px" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="container">
                <div class="pep_box">
                    <div class="pep_hearder-logo">
                        <a href="index.html"><img src="img/versetext1.png" class="img-responsive"></a>
                    </div>      
                    <div class="pep_sub-header">
                        Simple way to get things done
                    </div>
                    <hr>
                    <div class="pep_oneliner">
                        Proliferate requests through your social network to fulfill and quantify human needs.
                    </div>
                    <div class="pep_signup">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <?php  
                                    // check for a successful form post  
                                    if (isset($_GET['s'])) echo "<div class=\"alert alert-success text-center\">".$_GET['s']."<button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button></div>";  
                                    // check for a form error  
                                    elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  
                                ?> 
                                <form class="form-inline" role="form" action="submit.php" method="POST">
                                  <div class="form-group">
                                    <p class="pep_stitle"><span>Get notified when we launch</span></p>
                                  </div>
                                  <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" required>
                                    <input type="hidden" name="save" value="contact">
                                  </div>
                                  <button type="submit" class="btn btn-lg btn-warning">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pep_features-section">
                <div class="pep_vid">
                    <iframe class="pep_yvideo" src="//www.youtube.com/embed/S5OuTglq1qI" frameborder="0" allowfullscreen></iframe>
                </div>
                    
            <div class="container">
                <div class="row pep_features">
                    <div class="col-sm-4">
                        <div class="pep_feature-box">
                            <div class="pep_feature-icon">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <h3>Free-form requests</h3>
                        <p>Requests in Verse are written, delegated, and responded to by the users. All participants can see the wording of the request at all stages, giving everyone the tools to oversee a project.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="pep_feature-box">
                            <div class="pep_feature-icon">
                                <i class="fa fa-share-alt"></i>
                            </div>
                        </div>
                        <h3>Viewable graph</h3>
                        <p>Unlike all other service-exchange sites, Verse makes it possible for every user to follow a request from its individual inception to the distant connections it takes to make it possible.</p>
                    </div>
                    <div class="col-sm-4">
                        <div class="pep_feature-box">
                            <div class="pep_feature-icon">
                                <i class="fa fa-group"></i>
                            </div>
                        </div>
                        <h3>Profiles</h3>
                        <p>Customize your profile in Verse to let your friends know what services you like to provide and search your friends to find who likes to do what you need done.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pep_use-section">
            <div class="container">
                <h1 class="text-center pep_section-heading">How you can use Verse</h1><hr>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">

                        <div class="pep_uses" id="about">
                            <img class="pep_uses-image img-circle img-responsive pull-right" src="img/versecircle1.png">
                            <h2 class="pep_uses-heading">Get dance lessons</h2>
                            <p class="pep_lead">Asking about dance lessons from a friend who may know dance instructors can quickly turn into action using Verse. A quick look at the graph will show the instructors who made the initial request, enabling them to contact you directly.</p>
                        </div>
                        <div class="pep_uses" id="about">
                            <img class="pep_uses-image img-circle img-responsive pull-left" src="img/versecircle2.png">
                            <h2 class="pep_uses-heading">Create a new supply chain</h2>
                            <p class="pep_lead">What starts off as a simple request for food can be passed along to farmers, who can split it into requests for truck drivers and farm supplies. Wherever you spend money, you can try asking for it in Verse; giving them a chance to ask for whatever they want from their friend network.</p>
                        </div>
                        <div class="pep_uses" id="about">
                            <img class="pep_uses-image img-circle img-responsive pull-right" src="img/versecircle3.png">
                            <h2 class="pep_uses-heading">Run your campaign</h2>
                            <p class="pep_lead">Volunteer-run organizations that thrive on social media can use Verse to virally reach out for support. Using Verse, a request to canvass a neighborhood can be split up into duties such as data entry and canvassing certain streets then passed to volunteer leaders and their extended friend network.</p>
                        </div>
                        <div class="pep_uses" id="about">
                            <img class="pep_uses-image img-circle img-responsive pull-left" src="img/versecircle4.png">
                            <h2 class="pep_uses-heading">Streamline your company</h2>
                            <p class="pep_lead">Within Verse, corporate structure is made more friendly for everyone. A CEO who uses Verse to send requests to manage projects can have a better sense of how their company makes things happen. Workers who receive a request in Verse can see the bigger picture for the project they are working on, and coordinate with people working on similar projects to avoid redundancy.</p>
                        </div>
                        <div class="pep_uses" id="about">
                            <img class="pep_uses-image img-circle img-responsive pull-right" src="img/versecircle5.png">
                            <h2 class="pep_uses-heading">Shape everyday projects</h2>
                            <p class="pep_lead">Verse can be used to communicate all kinds of needs to friends. Requests for various kinds of social events, from outings to parties, are all the more accessible when everyone can see who is doing what. Requests for particular items in need can be passed from friend group to friend group without losing track of who asked for it in the first place.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pep_footer">
            <div class="container">
                <p>Copyright @ Verse 2014-15</p>
            </div>
        </section>
    
    
    <!-- Core JavaScript Files -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/vendor/bootstrap.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/main.js"></script>

</body>

</html>