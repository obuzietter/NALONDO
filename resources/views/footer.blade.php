  <style>
      html {
          font-size: 16px !important;
      }

      .site-footer {
          background-color: var(--prim-color);
          padding: 45px 0 20px;
          font-size: 15px;
          line-height: 24px;
          color: var(--colorD);
          scroll-snap-align: center;
      }

      .site-footer hr {
          border-top-color: #bbb;
          opacity: 0.5
      }

      .site-footer hr.small {
          margin: 20px 0
      }

      .site-footer h6 {
          color: #fff;
          font-size: 16px;
          text-transform: uppercase;
          margin-top: 5px;
          letter-spacing: 2px
      }

      .site-footer a {
          color: var(--colorD);
      }

      .site-footer a:hover {
          color: var(--h-color);
          text-decoration: none;
      }

      .footer-links {
          padding-left: 0;
          list-style: none;
      }

      .footer-links li {
          display: block;
      }

      .footer-links a {
          color: var(--h-color);
      }

      .footer-links a:active,
      .footer-links a:focus,
      .footer-links a:hover {
          color: var(--tertiary-color);
          text-decoration: none;
      }

      .footer-links.inline li {
          display: inline-block
      }

      .site-footer .social-icons {
          text-align: right
      }

      .site-footer .social-icons a {
          width: 40px;
          height: 40px;
          line-height: 40px;
          margin-left: 6px;
          margin-right: 0;
          border-radius: 100%;
          background-color: #33353d
      }

      .copyright-text {
          margin: 0;
      }

      @media (max-width:991px) {
          .site-footer [class^=col-] {
              margin-bottom: 30px
          }
      }

      @media (max-width:767px) {
          .site-footer {
              padding-bottom: 0
          }

          .site-footer .copyright-text,
          .site-footer .social-icons {
              text-align: center
          }
      }

      .social-icons {
          padding-left: 0;
          margin-bottom: 0;
          list-style: none
      }

      .social-icons li {
          display: inline-block;
          margin-bottom: 4px
      }

      .social-icons li.title {
          margin-right: 15px;
          text-transform: uppercase;
          color: #96a2b2;
          font-weight: 700;
          font-size: 13px
      }

      .social-icons a {
          background-color: #eceeef;
          color: #818a91;
          font-size: 16px;
          display: inline-block;
          line-height: 44px;
          width: 44px;
          height: 44px;
          text-align: center;
          margin-right: 8px;
          border-radius: 100%;
          -webkit-transition: all .2s linear;
          -o-transition: all .2s linear;
          transition: all .2s linear
      }

      .social-icons a:active,
      .social-icons a:focus,
      .social-icons a:hover {
          color: #fff;
          background-color: #29aafe
      }

      .social-icons.size-sm a {
          line-height: 34px;
          height: 34px;
          width: 34px;
          font-size: 14px
      }

      .social-icons a.facebook:hover {
          background-color: #3b5998
      }

      .social-icons a.twitter:hover {
          background-color: #00aced
      }

      .social-icons a.linkedin:hover {
          background-color: #007bb6
      }

      .social-icons a.dribbble:hover {
          background-color: #ea4c89
      }

      @media (max-width:767px) {
          .social-icons li.title {
              display: block;
              margin-right: 0;
              font-weight: 600
          }
      }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Site footer -->
  <footer class="site-footer">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6">
                  <h6>About</h6>
                  <p class="text-justify">St Josephs Nalondo Boys High School is a county level boy school located in Bungoma County. It is a renowned boarding school dedicated to nurturing young men into well-rounded individuals. Nestled in a picturesque setting, it provides a structured and supportive environment where students thrive academically and personally. With a strong emphasis on character development, this institution instills values such as discipline, integrity, and leadership. The dedicated faculty encourages a love for learning and critical thinking, ensuring that students are well-prepared for future challenges.</p>
              </div>

              <div class="col-xs-6 col-md-3">
                  <h6>Useful Links</h6>
                  <ul class="footer-links">
                      <li><a href="">Photo Gallery</a></li>
                      <li><a href="">Youtube Channel</a></li>
                      <li><a href="">Past KCSE Results</a></li>
                      <li><a href="">The Chapel</a></li>
                      <li><a href="">Management</a></li>
                      <li><a href="">PTA</a></li>
                  </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                  <h6>Quick Links</h6>
                  <ul class="footer-links">
                      <li><a href="{{ route('about') }}">About</a></li>
                      <li><a href="{{ route('faculty') }}">Faculty</a></li>
                      <li><a href="{{ route('studentLife') }}">Student Life</a></li>
                      <li><a href="{{ route('community') }}">Community</a></li>
                      <!-- <li><a href="{{ route('achievements') }}">Achievements</a></li> -->
                      <li><a href="{{ route('contact') }}">Contact Us</a></li>
                  </ul>
              </div>
          </div>
          <hr>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                  <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                      <a href="#">St Joseph's Nalondo Boys High School</a>.
                  </p>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="social-icons">
                      <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a class="dribbble" href="#"><i class="fa fa-instagram"></i></a></li>
                      <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>