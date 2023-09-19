    <!--Header-->
    <header>
    <!--Default header container-->
    <div class="inner header-default">
      <!--Header bar-->
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4">
            <div class="logo-container">
              <a class="logo" href="#">
                <img src="img/f-logo.png" alt="Netmatters">
              </a>
            </div>
          </div>
          <div class="col-xs-3 hidden-sm hidden-md hidden-lg mobile-container"> <!-- Phone icon on mobile small screens-->
            <a class="mobile" href="#">
              <span class="icon-phone_in_talk"></span>
            </a>
          </div>
          <div class="col-xs-3 col-sm-6 col-md-7 col-lg-8">
            <div class="actions">
              <a href="#" class="btn btn-it hidden-xs hidden-sm header-btn" rel="noopener noreferrer">
                <span class="pull-left icon-mouse"></span> Support </a>
              <a href="#" class="btn btn-default hidden-xs hidden-sm header-btn">
                <span class="pull-left icon-paperplane"></span> Contact </a>
              <div class="hidden-xs pull-left search-form-wrapper--tablet">
                <form method="GET" action="#" accept-charset="UTF-8" class="search-form ">
                  <label for="search-input" class="hidden">Search:</label>
                  <input class="form-control search-bar" placeholder="Search..." id="search-input" name="keyword" type="text" value="">
                  <button type="submit" id="search-submit">
                    <span class="icon-search" aria-hidden="true"></span>
                  </button>
                </form>
              </div>
              <button onclick="handleNav(this)" type="button" class="btn btn-primary hamburger hamburger--spin">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <!--Search bar for mobile sized screens.-->
        <div class="hidden-sm hidden-md hidden-lg search-form-wrapper--mobile">
          <form method="GET" action="#" accept-charset="UTF-8" class="search-form ">
            <label for="search-input" class="hidden">Search:</label>
            <input class="form-control search-bar" placeholder="Search..." id="mobile-search-input" name="keyword" type="text" value="">
            <button type="submit" id="mobile-search-submit">
              <span class="icon-search" aria-hidden="true"></span>
            </button>
          </form>
        </div>
      </div>
      <!--Dropdown Submenu-->
      <div class="main-navigation hidden-xs hidden-sm ">
        <div class="container">
          <ul>

            <li data-key="software" class="software  nav-item">
              <a href="#">
                <span class="icon-apps software"></span>
                <small>Bespoke</small> Software </a>
              <div class="sub-menu-banner software">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Bespoke Software Services </li>
                  
                  
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-cogs"></span>
                      </span>
                      <span class="link-text">Bespoke CRM</span>
                    </a>
                  </li>


                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-briefcase1"></span>
                      </span>
                      <span class="link-text">Business Automation</span>
                    </a>
                  </li>


                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-shuffle1"></span>
                      </span>
                      <span class="link-text">Software Integrations</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-mobile"></span>
                      </span>
                      <span class="link-text">Mobile App Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-folder-open1"></span>
                      </span>
                      <span class="link-text">Bespoke Databases</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="fa-solid fa-arrow-right-arrow-left"></span>
                      </span>
                      <span class="link-text">Sharepoint Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-download1"></span>
                      </span>
                      <span class="link-text">Operational Systems</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-users"></span>
                      </span>
                      <span class="link-text">Business Central Implementation</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-laptop"></span>
                      </span>
                      <span class="link-text">Internet of Things (IoT) Software</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-cloud"></span>
                      </span>
                      <span class="link-text">Intranet Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-cloud-download"></span>
                      </span>
                      <span class="link-text">Customer Portal Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-globe"></span>
                      </span>
                      <span class="link-text">Reporting Hub</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="it" class="it  nav-item">
              <a href="#">
                <span class="icon-display it"></span>
                <small>IT</small> Support </a>
              <div class="sub-menu-banner it">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our IT Support Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="fa-solid fa-headphones-simple"></span>
                      </span>
                      <span class="link-text">Managed IT Support</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-briefcase"></span>
                      </span>
                      <span class="link-text">Business IT Support</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-laptop"></span>
                      </span>
                      <span class="link-text">Office 365 for Business</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-school"></span>
                      </span>
                      <span class="link-text">IT Consultancy</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-cloud"></span>
                      </span>
                      <span class="link-text">Cloud Service Provider</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-drive2"></span>
                      </span>
                      <span class="link-text">Data Backup &amp; Disaster Recovery</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="digital" class="digital  nav-item">
              <a href="#">
                <span class="icon-bar-graph digital"></span>
                <small>Digital</small> Marketing </a>
              <div class="sub-menu-banner digital">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Digital Marketing Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-search"></span>
                      </span>
                      <span class="link-text">Search Engine Optimisation (SEO)</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-money"></span>
                      </span>
                      <span class="link-text">Pay Per Click Advertising (PPC)</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="fa-solid link-icon-container">
                        <span class="fa-arrow-trend-up"></span>
                      </span>
                      <span class="link-text">Conversion Rate Optimisation (CRO)</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-envelope"></span>
                      </span>
                      <span class="link-text">Email Marketing</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-users"></span>
                      </span>
                      <span class="link-text">Social Media Marketing</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-pencil"></span>
                      </span>
                      <span class="link-text">Content Marketing</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="telecoms" class="telecoms  nav-item">
              <a href="#">
                <span class="icon-phone_in_talk telecoms"></span>
                <small>Telecoms</small> Services </a>
              <div class="sub-menu-banner telecoms">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Telecoms Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-ticket"></span>
                      </span>
                      <span class="link-text">Business Mobile</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-phone"></span>
                      </span>
                      <span class="link-text">Hosted VoIP Provider</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-phone-square"></span>
                      </span>
                      <span class="link-text">Business VoIP Systems</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-tachometer"></span>
                      </span>
                      <span class="link-text">Business Broadband</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa icon-handshake-o"></span>
                      </span>
                      <span class="link-text">Leased Lines Provider</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="icon-phone_in_talk"></span>
                      </span>
                      <span class="link-text">3CX Systems</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="web" class="web  nav-item">
              <a href="#">
                <span class="icon-code web"></span>
                <small>Web</small> Design </a>
              <div class="sub-menu-banner web">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Web Design Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-pencil"></span>
                      </span>
                      <span class="link-text">Bespoke Website Design</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa-solid fa-cart-shopping"></span>
                      </span>
                      <span class="link-text">eCommerce Website Design</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-desktop"></span>
                      </span>
                      <span class="link-text">Pay Monthly Websites</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-bullhorn"></span>
                      </span>
                      <span class="link-text">Branding &amp; Design</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-mobile"></span>
                      </span>
                      <span class="link-text">Mobile App Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon glyphicon glyphicon-cloud"></span>
                      </span>
                      <span class="link-text">Web Hosting</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="security" class="security  nav-item">
              <a href="#">
                <span class="icon-security security"></span>
                <small>Cyber</small> Security </a>
              <div class="sub-menu-banner security">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Cyber Security Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-clipboard"></span>
                      </span>
                      <span class="link-text">Cyber Security Assessment</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-clock-o"></span>
                      </span>
                      <span class="link-text">Cyber Security Management</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-flask"></span>
                      </span>
                      <span class="link-text">Cyber Penetration Testing</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-school"></span>
                      </span>
                      <span class="link-text">Cyber Essentials Certification</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="icon-security"></span>
                      </span>
                      <span class="link-text">PCI Compliance</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-lock"></span>
                      </span>
                      <span class="link-text">Hacking Prevention</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="developer-course" class="developer-course  nav-item">
              <a href="#">
                <span class="icon-school developer-course"></span>
                <small>Developer</small> Course </a>
              <div class="sub-menu-banner developer-course">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Developer Course Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-laptop"></span>
                      </span>
                      <span class="link-text">Train For A Career In Tech</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-code"></span>
                      </span>
                      <span class="link-text">Skills Bootcamp</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-question-circle"></span>
                      </span>
                      <span class="link-text">Scion Scheme Frequently Asked Questions</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa icon-handshake-o"></span>
                      </span>
                      <span class="link-text">Scion Collaborators</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!--Sticky header container-->
    <div class="inner header-sticky">
      <!--Header bar-->
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-5 col-lg-4">
            <div class="logo-container">
              <a class="logo" href="#">
                <img src="img/f-logo.png" alt="Netmatters">
              </a>
            </div>
          </div>
          <div class="col-xs-3 hidden-sm hidden-md hidden-lg mobile-container"> <!-- Phone icon on mobile small screens-->
            <a class="mobile" href="#">
              <span class="icon-phone_in_talk"></span>
            </a>
          </div>
          <div class="col-xs-3 col-sm-6 col-md-7 col-lg-8">
            <div class="actions">
              <a href="#" class="btn btn-it hidden-xs hidden-sm header-btn" rel="noopener noreferrer">
                <span class="pull-left icon-mouse"></span> Support </a>
              <a href="#" class="btn btn-default hidden-xs hidden-sm header-btn">
                <span class="pull-left icon-paperplane"></span> Contact </a>
              <div class="hidden-xs pull-left search-form-wrapper--tablet">
                <form method="GET" action="#" accept-charset="UTF-8" class="search-form ">
                  <label for="search-input" class="hidden">Search:</label>
                  <input class="form-control search-bar" placeholder="Search..." id="sticky-search-input" name="keyword" type="text" value="">
                  <button type="submit" id="sticky-search-submit">
                    <span class="icon-search" aria-hidden="true"></span>
                  </button>
                </form>
              </div>
              <button onclick="handleNav(this)" type="button" class="btn btn-primary hamburger hamburger--spin">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
          </div>
        </div>
        <!--Search bar for mobile sized screens.-->
        <div class="hidden-sm hidden-md hidden-lg search-form-wrapper--mobile">
          <form method="GET" action="#" accept-charset="UTF-8" class="search-form ">
            <label for="search-input" class="hidden">Search:</label>
            <input class="form-control search-bar" placeholder="Search..." id="sticky-mobile-search-input" name="keyword" type="text" value="">
            <button type="submit" id="sticky-mobile-search-submit">
              <span class="icon-search" aria-hidden="true"></span>
            </button>
          </form>
        </div>
      </div>
      <!--Dropdown Submenu-->
      <div class="main-navigation hidden-xs hidden-sm ">
        <div class="container">
          <ul>

            <li data-key="software" class="software  nav-item">
              <a href="#">
                <span class="icon-apps software"></span>
                <small>Bespoke</small> Software </a>
              <div class="sub-menu-banner software">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Bespoke Software Services </li>
                  
                  
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-cogs"></span>
                      </span>
                      <span class="link-text">Bespoke CRM</span>
                    </a>
                  </li>


                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-briefcase1"></span>
                      </span>
                      <span class="link-text">Business Automation</span>
                    </a>
                  </li>


                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-shuffle1"></span>
                      </span>
                      <span class="link-text">Software Integrations</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-mobile"></span>
                      </span>
                      <span class="link-text">Mobile App Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-folder-open1"></span>
                      </span>
                      <span class="link-text">Bespoke Databases</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="fa-solid fa-arrow-right-arrow-left"></span>
                      </span>
                      <span class="link-text">Sharepoint Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-download1"></span>
                      </span>
                      <span class="link-text">Operational Systems</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-users"></span>
                      </span>
                      <span class="link-text">Business Central Implementation</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-laptop"></span>
                      </span>
                      <span class="link-text">Internet of Things (IoT) Software</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-cloud"></span>
                      </span>
                      <span class="link-text">Intranet Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-cloud-download"></span>
                      </span>
                      <span class="link-text">Customer Portal Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-globe"></span>
                      </span>
                      <span class="link-text">Reporting Hub</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="it" class="it  nav-item">
              <a href="#">
                <span class="icon-display it"></span>
                <small>IT</small> Support </a>
              <div class="sub-menu-banner it">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our IT Support Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="fa-solid fa-headphones-simple"></span>
                      </span>
                      <span class="link-text">Managed IT Support</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-briefcase"></span>
                      </span>
                      <span class="link-text">Business IT Support</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-laptop"></span>
                      </span>
                      <span class="link-text">Office 365 for Business</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-school"></span>
                      </span>
                      <span class="link-text">IT Consultancy</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-cloud"></span>
                      </span>
                      <span class="link-text">Cloud Service Provider</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-drive2"></span>
                      </span>
                      <span class="link-text">Data Backup &amp; Disaster Recovery</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="digital" class="digital  nav-item">
              <a href="#">
                <span class="icon-bar-graph digital"></span>
                <small>Digital</small> Marketing </a>
              <div class="sub-menu-banner digital">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Digital Marketing Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-search"></span>
                      </span>
                      <span class="link-text">Search Engine Optimisation (SEO)</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-money"></span>
                      </span>
                      <span class="link-text">Pay Per Click Advertising (PPC)</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="fa-solid link-icon-container">
                        <span class="fa-arrow-trend-up"></span>
                      </span>
                      <span class="link-text">Conversion Rate Optimisation (CRO)</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-envelope"></span>
                      </span>
                      <span class="link-text">Email Marketing</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-users"></span>
                      </span>
                      <span class="link-text">Social Media Marketing</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-pencil"></span>
                      </span>
                      <span class="link-text">Content Marketing</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="telecoms" class="telecoms  nav-item">
              <a href="#">
                <span class="icon-phone_in_talk telecoms"></span>
                <small>Telecoms</small> Services </a>
              <div class="sub-menu-banner telecoms">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Telecoms Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-ticket"></span>
                      </span>
                      <span class="link-text">Business Mobile</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-phone"></span>
                      </span>
                      <span class="link-text">Hosted VoIP Provider</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-phone-square"></span>
                      </span>
                      <span class="link-text">Business VoIP Systems</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-tachometer"></span>
                      </span>
                      <span class="link-text">Business Broadband</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa icon-handshake-o"></span>
                      </span>
                      <span class="link-text">Leased Lines Provider</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="icon-phone_in_talk"></span>
                      </span>
                      <span class="link-text">3CX Systems</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="web" class="web  nav-item">
              <a href="#">
                <span class="icon-code web"></span>
                <small>Web</small> Design </a>
              <div class="sub-menu-banner web">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Web Design Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-pencil"></span>
                      </span>
                      <span class="link-text">Bespoke Website Design</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa-solid fa-cart-shopping"></span>
                      </span>
                      <span class="link-text">eCommerce Website Design</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-desktop"></span>
                      </span>
                      <span class="link-text">Pay Monthly Websites</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-bullhorn"></span>
                      </span>
                      <span class="link-text">Branding &amp; Design</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-mobile"></span>
                      </span>
                      <span class="link-text">Mobile App Development</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon glyphicon glyphicon-cloud"></span>
                      </span>
                      <span class="link-text">Web Hosting</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="security" class="security  nav-item">
              <a href="#">
                <span class="icon-security security"></span>
                <small>Cyber</small> Security </a>
              <div class="sub-menu-banner security">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Cyber Security Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-clipboard"></span>
                      </span>
                      <span class="link-text">Cyber Security Assessment</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-clock-o"></span>
                      </span>
                      <span class="link-text">Cyber Security Management</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-flask"></span>
                      </span>
                      <span class="link-text">Cyber Penetration Testing</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-school"></span>
                      </span>
                      <span class="link-text">Cyber Essentials Certification</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="icon-security"></span>
                      </span>
                      <span class="link-text">PCI Compliance</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-lock"></span>
                      </span>
                      <span class="link-text">Hacking Prevention</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li data-key="developer-course" class="developer-course  nav-item">
              <a href="#">
                <span class="icon-school developer-course"></span>
                <small>Developer</small> Course </a>
              <div class="sub-menu-banner developer-course">
                <ul class="container sub-menu" role="menu">
                  <li class="h2 sub-menu-banner-title"> Our Developer Course Services </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-laptop"></span>
                      </span>
                      <span class="link-text">Train For A Career In Tech</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon icon-code"></span>
                      </span>
                      <span class="link-text">Skills Bootcamp</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa fa-question-circle"></span>
                      </span>
                      <span class="link-text">Scion Scheme Frequently Asked Questions</span>
                    </a>
                  </li>
                  <li class="nav-item nav-item--sub-menu">
                    <a href="#">
                      <span class="link-icon-container">
                        <span class="link-icon fa icon-handshake-o"></span>
                      </span>
                      <span class="link-text">Scion Collaborators</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>