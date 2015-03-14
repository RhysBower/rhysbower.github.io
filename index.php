<?php
$page = "/";
$title = "Rhys Bower";

require 'includes/header.php';

?>

<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <img alt="" class="head-shot img-responsive" data-user="3077743" height="230" src="/static/img/profile.jpg" width="230">
      </div>
      <div class="col-sm-8">
        <h1>Rhys Bower</h1>
        <div class="tagline">Freelance Web Developer</div>
      </div>
    </div>
  </div>
</header>

<section id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Portfolio</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p>Check out my <a href="https://www.github.com/RhysBower" class="link">GitHub</a> profile for the source code to many of these cool projects.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <a href="#" class="portfolio-link" data-toggle="modal" data-target="#portfolio1">
          <h3>Tank</h3>
          <div class="row img-container">
            <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img src="/static/img/portfolio/tank-thumb.png" class="img-responsive">
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="#" class="portfolio-link" data-toggle="modal" data-target="#portfolio2">
          <h3>freenode</h3>
          <div class="row img-container">
            <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img src="/static/img/portfolio/freenode-thumb.png" class="img-responsive">
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="#" class="portfolio-link" data-toggle="modal" data-target="#portfolio3">
          <h3>Pong</h3>
          <div class="row img-container">
            <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img src="/static/img/portfolio/pong-thumb.png" class="img-responsive">
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="#" class="portfolio-link" data-toggle="modal" data-target="#portfolio4">
          <h3>Fluffy Ball</h3>
          <div class="row img-container">
            <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img src="/static/img/portfolio/fluffyball-thumb.png" class="img-responsive">
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="#" class="portfolio-link" data-toggle="modal" data-target="#portfolio5">
          <h3>UFO Ride Franchise</h3>
          <div class="row img-container">
            <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img src="/static/img/portfolio/uforide2-thumb.png" class="img-responsive">
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="#" class="portfolio-link" data-toggle="modal" data-target="#portfolio6">
          <h3>The Unbeatable Test</h3>
          <div class="row img-container">
            <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img src="/static/img/portfolio/theunbeatabletest-thumb.png" class="img-responsive">
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-md-4">
        <a href="#" class="portfolio-link" data-toggle="modal" data-target="#portfolio7">
          <h3>Boyle's Law</h3>
          <div class="row img-container">
            <div class="caption">
              <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
              </div>
            </div>
            <img src="/static/img/portfolio/boyleslaw-thumb.png" class="img-responsive">
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Services</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-5 col-md-offset-1">
        <h3>Web Design</h3>
        <p>Do you need a website to promote your new business. I can help promote your company by creating a professional website to showcase everything you have to offer.</p>
      </div>
      <div class="col-sm-6 col-md-5">
        <h3>Computer Builds and Repairs</h3>
        <p>Builds, virus removal, software installation. Send me a message for all of your PC or Mac problems. Want a new custom built gaming machine. I can set you up with the best machine's out there all the way down to a reliable office machine to get work done.</p>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Contact</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-1">
        <h3>Ask me a question</h3>
        <p>I'll get back to you as soon as I can.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-8 col-md-offset-2">
        <div id = "alert_placeholder"></div>
        <form id="contactForm" action="mail/" method="POST" data-toggle="validator" role="form">
          <div class="row form-group col-xs-12">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" id="name" name="name" required>
          </div>
          <div class="row form-group col-xs-12">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
          </div>
          <div class="row form-group col-xs-12">
            <label>Phone</label>
            <input type="tel" class="form-control" placeholder="Phone" id="phone" name="phone" required>
          </div>
          <div class="row form-group col-xs-12">
          <label>Message</label>
            <textarea rows="5" class="form-control message" placeholder="Message" id="message" name="message" required></textarea>
          </div>
          <div class="row form-group">
            <div class="form-group col-xs-12">
              <button id="submit" type="submit" class="btn btn-success">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<div class="modal fade" id="portfolio1" tabindex="-1" role="dialog" aria-labelledby="portfolio1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="portfolio1Label">Tank</h4>
      </div>
      <div class="modal-body">
        <img src="/static/img/portfolio/tank.png" class="img-responsive">
        <p>"Tank" is a fast paced tank shooter programmed in Unity.  This is a personal project of mine to test out 3D game development.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portfolio2" tabindex="-1" role="dialog" aria-labelledby="portfolio2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="portfolio2Label">freenode</h4>
      </div>
      <div class="modal-body">
        <img src="/static/img/portfolio/freenode.png" class="img-responsive">
        <p>I redesigned the freenode website as a sample to build my portfolio. This is after only three days of work.  Note that it has currently has layout bugs on small screens (phones, tablets, and small laptops).</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="http://freenode-redesign.herokuapp.com/" class="btn btn-primary" target="_blank">View Site</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portfolio3" tabindex="-1" role="dialog" aria-labelledby="portfolio3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="portfolio3Label">Pong</h4>
      </div>
      <div class="modal-body">
        <img src="/static/img/portfolio/pong.png" class="img-responsive">
        <p>Pong is a one or two player pong game written in ActionScript 3. It has multiple difficulty levels to challenge you for hours on end.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portfolio4" tabindex="-1" role="dialog" aria-labelledby="portfolio4Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="portfolio4Label">Fluffy Ball</h4>
      </div>
      <div class="modal-body">
        <img src="/static/img/portfolio/fluffyball.png" class="img-responsive">
        <p>Bounce your way to freedom.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="/games/FluffyBall" class="btn btn-primary">Play Fluffy Ball</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portfolio5" tabindex="-1" role="dialog" aria-labelledby="portfolio5Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="portfolio5Label">UFO Ride Franchise</h4>
      </div>
      <div class="modal-body">
        <img src="/static/img/portfolio/uforide2.png" class="img-responsive">
        <p>Help the alien avoid the asteroids while collecting money and diamonds.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="/games/UfoRide" class="btn btn-primary">Play UFO Ride</a>
        <a href="/games/UfoRide2" class="btn btn-primary">Play UFO Ride 2</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portfolio6" tabindex="-1" role="dialog" aria-labelledby="portfolio6Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="portfolio6Label">The Unbeatable Test</h4>
      </div>
      <div class="modal-body">
        <img src="/static/img/portfolio/theunbeatabletest.png" class="img-responsive">
        <p>Can you make it to the end alive?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="/games/TheUnbeatableTest" class="btn btn-primary">Play The Unbeatable Test</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="portfolio7" tabindex="-1" role="dialog" aria-labelledby="portfolio7Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="portfolio6Label">Boyle's Law</h4>
      </div>
      <div class="modal-body">
        <img src="/static/img/portfolio/boyleslaw.png" class="img-responsive">
        <p>An animation to explain Boyle's law.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="/BoylesLaw" class="btn btn-primary">View Boyle's Law</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php require 'includes/footer.php' ?>