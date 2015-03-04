<?php
    $nav = 2;
    $title = 'Projects';
    $head = '<link rel="stylesheet" href="css/timeline.css"><link rel="stylesheet" href="css/timeline-custom.css">';
    require('_header.php');
?>


    <div class="page-header">
        <h1 id="timeline">Projects</h1>
        This is an overview of some of the sites I have created for school, for fun, and assorted extra-curricular projects.
        My professional work is mostly listed on <a href="http://www.linkedin.com/in/tlianza" target="_blank">LinkedIn</a>, and not here.
        In some cases, clicking on the screenshot will bring you to that page, or to a description of how that page was created.
    </div>
    <ul class="timeline">

        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-comment"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">JokeWars</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2008</small></p>
            </div>
            <div class="timeline-body">
                <a href="http://jokewars.com/"><img src="../images/screen_jokewars.png" width="225" alt="Joke Wars" border="1" /></a>
              <p>Written with Ruby on Rails and MySQL, allows people to battle two jokes together.  Uses full RESTful-routing and REST-based techniques.
                  Also developed a Facebook app with the <a href="http://facebooker.rubyforge.org/">facebooker plugin</a>.
              </p>
            <dl class="dl-horizontal">
                <dt>Team Members</dt>
                <dd><a href="http://fortes.com/">Fil</a>,
                    <a href="http://jonahb.com">Jonah</a>
                </dd>
                <dt>Technologies</dt>
                <dd>Ruby On Rails, MySQL</dd>
            </dl>
            </div>
          </div>
        </li>

        <li class="timeline-inverted">
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-globe"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Google Maps Mashup for Patriots.com</h4>
                <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> March 2008</small></p>
            </div>
            <div class="timeline-body">
                <a href="http://fanclubs.patriots.com/"><img src="../images/screen_patriots.jpg" border="1"></a>
              <p>This Google Maps mashup plots the Patriots Fan Clubs across the world, and allows you to zoom in,
                  and search for them. It uses the Google Maps API to generate the map, and the Geocoding API to
                  look up the latitude and longitude of new clubs when they are created.</p>
                <dl class="dl-horizontal">
                    <dt>Technologies</dt>
                    <dd>ColdFusion 8, REST/XML</dd>
                </dl>
            </div>
          </div>
        </li>


        <li>
            <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Internet Connection Diagnostics</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2005</small></p>
                </div>
                <div class="timeline-body">
                    <img src="../images/screen_diagnostics.gif" border="1">
                    <p>There are a lot of great bandwidth testers out there (DSLReports, Speakeasy, etc.) but no
                        free/open source solutions I could find. The problem with a hosted bandwidth tester is that your
                        results are subject to their bandwidth. By having one of my own I can drop it on any computer
                        and test the connectivity between them. This project is no longer under development, but I was
                        looking to build more functionality into it, including traceroute utilities and
                        other monitoring/troubleshooting tools... VoIP, QoS, etc. This utility is implemented using a J
                        ava Applet with a Swing UI, and it tests uploads by making calls back to a Servlet. It can therefore
                        be conveniently packaged up in a WAR file and dropped into Tomcat as a webapp.
                    </p>
                    <dl class="dl-horizontal">
                        <dt>Technologies</dt>
                        <dd>Java, Swing, Applet</dd>
                    </dl>
                </div>
            </div>
        </li>

        <li class="timeline-inverted">
            <div class="timeline-badge warning"><i class="glyphicon glyphicon-oil"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Delivery Scheduling</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2004-2005</small></p>
                </div>
                <div class="timeline-body">
                    <img src="../images/screen_usoil.gif" border="1">
                    <p>Developed a system for scheduling deliveries of motor oil. It uses a
                        DHTML-based front end for manually laying out the schedule in a drag-and-drop fashion.
                        Delivery schedules are projected and arranged based on delivery and consumption history.</p>
                    <dl class="dl-horizontal">
                        <dt>Technologies</dt>
                        <dd>Java/JSP, Spring, MySql</dd>
                    </dl>
                </div>
            </div>
        </li>

        <li>
            <div class="timeline-badge success"><i class="glyphicon glyphicon-usd"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Book Price Comparison</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> May 2001 / February 2003</small></p>
                </div>
                <div class="timeline-body">
                    <img src="../images/screen_diagnostics.gif" border="1">
                    <p>This project was originally done as part of the
                        <a href="http://www.mism.cmu.edu/desc.asp?menu=currentStudentsMenu&menuSection=CourseDescription&course=95-702" title="95-702 Organizational Communication and Distributed Object Technologies">Distributed Object Technologies</a>
                        course, implemented in both <a href="http://www.corba.org/">CORBA</a> and <a href="http://java.sun.com/products/jdk/rmi/">RMI</a>.
                        I later rewrote it, and it is currently implemented as a web service running under <a href="http://ws.apache.org/axis/" title="Apache Axis home page">Apache Axis</a>.
                        The concept is simple - there are plenty of price comparison sites, but in order to use them, you have to go visit them.
                        In other words, you either have to do your shopping from their site, or shop at another site and then go
                        to their site to find the product (shop twice).  We wanted to create something whereby you can shop at your
                        favorite site, then click a button and see prices at other stores.  This application detects what product
                        you're looking at, then goes out to other retailers and finds their prices in real time (no database required).
                    </p>
                    <dl class="dl-horizontal">
                        <dt>Team Members</dt>
                        <dd><a href="http://www.linkedin.com/pub/jerry-yoo/1/75a/292">Jerry Yoo</a>,
                            <a href="http://www.linkedin.com/in/kritivichare">Kriti Bhandari</a>,
                            <a href="http://uk.linkedin.com/pub/christopher-ghazaryans/7/a9/19a">Chris Ghazaryans</a>
                        </dd>
                        <dt>Technologies</dt>
                        <dd>Java, SOAP, Apache Axis</dd>
                    </dl>
                </div>
            </div>
        </li>


        <li class="timeline-inverted">
            <div class="timeline-badge info"><i class="glyphicon glyphicon-calendar"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Court Reservation System</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> May 2001</small></p>
                </div>
                <div class="timeline-body">
                    <a href="http://reservesport.sourceforge.net/"><img src="../images/screen_hcicourt.jpg"  alt="Court Reservation System" border="1" /></a>
                    <p>Developed as part of the <a href="http://www.hcii.cmu.edu/" title="Human Computer Interaction Institute home page">HCI</a>
                        project course, we built this site for the <a href="http://www.cmu.edu/athletic/">CMU Athletic Department</a>.
                        It allows students to reserve Racquetball, Squash, Tennis, and Spinning times. </p>
                    <dl class="dl-horizontal">
                        <dt>Team Members</dt>
                        <dd><a href="http://www.linkedin.com/pub/lydia-choy/0/b47/68b">Lydia Choy</a>,
                            <a href="http://www.linkedin.com/in/aaronpowers">Aaron Powers</a>,
                            <a href="http://www.linkedin.com/in/davidsterngottfried">David Stern-Gottfried</a>,
                            Ayaka Uchida</dd>
                        <dt>Technologies</dt>
                        <dd>JSP using Custom Tag Libraries and MySQL</dd>
                    </dl>
                </div>
            </div>
        </li>


        <li>
            <div class="timeline-badge danger"><i class="glyphicon glyphicon-education"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">GSIA MBA/MSIA Home Page</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> March 2001</small></p>
                </div>
                <div class="timeline-body">
                    <img src="../images/screen_mba.jpg" border="1" />
                    <p>This is a revamped version of the old front page for the GSIA's MBA program.
                        The site is used regularly by current students as a portal to different sources of academic information.
                        In addition to development, I was also responsible for the design.
                    </p>
                </div>
            </div>
        </li>


        <li class="timeline-inverted">
            <div class="timeline-badge primary"><i class="glyphicon glyphicon-heart"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Love and Respect</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> December 2000</small></p>
                </div>
                <div class="timeline-body">
                    <a href="http://loveandrespect.com" target="_blank"><img src="../images/screen_loveres.jpg" border="1" /></a>
                    <p> This site was for our senior Information Systems project course. It is currently online at loveandrespect.com.
                        Our team worked with the client, Dr. Emerson Eggerichs, to create an online presence for his business.
                        We helped him formulate the ideas, architected the system, and implemented it completely. </p>
                    <dl class="dl-horizontal">
                        <dt>Team Members</dt>
                        <dd>Gabe Chua,
                            <a href="http://www.linkedin.com/pub/tara-dwivedi-mathew/0/ab0/907">Tara Dwivedi</a>,
                            <a href="http://www.linkedin.com/pub/lauren-holz/4/900/ab5">Lauren Holz</a>,
                            <a href="https://www.linkedin.com/in/wlong">Bill Long</a>,
                            Eunjae Lim</dd>
                        <dt>Technologies</dt>
                        <dd>ASP, XML, Microsoft SQL Server</dd>
                    </dl>
                </div>
            </div>
        </li>


        <li>
            <div class="timeline-badge success"><i class="glyphicon glyphicon-usd"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Fatdeal</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2000</small></p>
                </div>
                <div class="timeline-body">
                    <a href="http://fatdeal.com"><img src="../images/screen_fatdeal.jpg" width="225" height="123" target="_blank" border="1" /></a>
                    <p>This site was started as an independent study, but is no longer active at fatdeal.com. It allows online shoppers to look for coupons at their favorite stores.
                        Member features allow people to store coupons in a "coupon wallet", keep an eye on their favorite sites, and set up coupon alerts based on their preferences.
                        Chalk this up as another failed dot-com.
                    </p>
                    <dl class="dl-horizontal">
                        <dt>Team Members</dt>
                        <dd><a href="https://www.linkedin.com/in/wlong">Bill Long</a></dd>
                        <dt>Technologies</dt>
                        <dd>ASP, Microsoft SQL Server</dd>
                    </dl>
                </div>
            </div>
        </li>


        <li class="timeline-inverted">
            <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Auction Blitz</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> November 2000</small></p>
                </div>
                <div class="timeline-body">
                    <img src="../images/screen_auction.jpg" width="225" height="125" alt="" border="1" />
                    <p> For the Intro to Electronic Commerce class we created this site based on some research on auction theory.
                        It is similar in format to ebay, but instead of one auction type we implemented three. It could
                        theoretically replace the current CMU system misc.market because the "sealed bid" option allows
                        people to trade goods instead of simply buying or selling them.</p>
                    <dl class="dl-horizontal">
                        <dt>Team Members</dt>
                        <dd><a href="http://www.linkedin.com/pub/benjamin-j-pillet/7/a1b/361">Ben Pillet</a>,
                            <a href="http://www.linkedin.com/pub/mike-walsh/3/209/a8"> Mike Walsh</a>,
                            <a href="http://www.linkedin.com/pub/cameron-white/7/a27/496">Cameron White</a>
                        </dd>
                    </dl>
                </div>
            </div>
        </li>


        <li>
            <div class="timeline-badge primary"><i class="glyphicon glyphicon-picture"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Album Greetings</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> May 2000</small></p>
                </div>
                <div class="timeline-body">
                    <img src="../images/screen_album.jpg" width="225" height="125" alt="" border="1" />
                    <p>This was a project for the junior level information systems project course.
                        It was an online photo album that allowed people to upload photographs, configure and manage
                        multiple photo albums, and share these albums with friends by creating passworded albums.
                    </p>
                    <dl class="dl-horizontal">
                        <dt>Team Members</dt>
                        <dd><a href="http://www.linkedin.com/pub/kim-willment/11/a47/62b">Kim Celone</a>,
                            <a href="http://www.linkedin.com/pub/ray-park/a/44/539">Ray Park</a>,
                            <a href="http://www.linkedin.com/in/christopherstratis">Chris Stratis</a>,
                            <a href="http://www.linkedin.com/pub/jen-tso/5/601/390">Jen Tso</a>
                        </dd>
                        <dt>Technologies</dt>
                        <dd>ASP, Microsoft Access</dd>
                    </dl>
                </div>
            </div>
        </li>


        <li class="timeline-inverted">
            <div class="timeline-badge"><i class="glyphicon glyphicon-briefcase"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">IMC America</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> February 2000</small></p>
                </div>
                <div class="timeline-body">
                    <a href="http://www.imcamerica.com/" target="_blank"><img src="../images/screen_imc.jpg" width="225" height="125" alt="" border="1" /></a>
                    <p> This is the first site Bill and I did for an actual company, which was launched online at
                        <a href="http://www.imcamerica.com" target="_blank"><b>imcamerica.com</b></a>.
                        This was largely an exercise in information architecture defintion, followed by front-end coding and design.</p>
                    <dl class="dl-horizontal">
                        <dt>Team Members</dt>
                        <dd><a href="https://www.linkedin.com/in/wlong">Bill Long</a></dd>
                    </dl>
                </div>
            </div>
        </li>


        <li>
            <div class="timeline-badge success"><i class="glyphicon glyphicon-search"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">Where Is Bob?</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> January 2000</small></p>
                </div>
                <div class="timeline-body">
                    <img src="../images/screen_bob.jpg" width="225" height="125" alt="" border="1" />
                    <p>This site was launched at whereisbob.com and began as a project for Web Business Engineering. It was
                        an online game that allowed visitors to hunt around a map for this character named Bob.
                        If they sign up for membership, they were able to earn points, keep statistics, and store the
                        clues they picked up during the search.
                    </p>
                    <dl class="dl-horizontal">
                        <dt>Team Members</dt>
                        <dd><a href="https://www.linkedin.com/pub/brendan-lund/6/32a/229">Brendan Lund</a>, <a href="https://www.linkedin.com/in/wlong">Bill Long</a></dd>
                        <dt>Technologies</dt>
                        <dd>ASP, Microsoft Access</dd>
                    </dl>
                </div>
            </div>
        </li>


        <li class="timeline-inverted">
            <div class="timeline-badge warning"><i class="glyphicon glyphicon-briefcase"></i></div>
            <div class="timeline-panel">
                <div class="timeline-heading">
                    <h4 class="timeline-title">GSIA Job Offer Reporting</h4>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> January 2000</small></p>
                </div>
                <div class="timeline-body">
                    <a href="p-gsia.php"><img src="../images/screen_gsia.jpg" width="225" height="125" alt="" border="1" /></a>
                    <p> This site was used by students at Carnegie Mellon's GSIA to report their job offers.
                        Administrative features allow career center personnel to review and verify the offers, and receive
                        nightly e-mail notifications about which students accepted which offers each day.
                    </p>
                    <hr>
                    <div class="btn-group">
                        <a href="/p-gsia.php" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
        </li>

        
    </ul>

<?php require('_footer.php'); ?>