<?php
// mysql hostname
$db_host = "localhost";

// database name
$db_name = "rmap";

// database user name
$db_user = "rmap";

// database password
$db_pass = "rmap";

// admin username
$admin_user = "admin";

// admin password
$admin_pass = "admin123";


// StartupGenome.com integration (optional)
//
// We recommend integrating your map with the StartupGenome project.
// It's easy to setup, it will allow people to keep their profiles update
// over time, and it can help you show the world how your startup community
// is growing. StartupGenome also has a great interface for curating your
// map data.
//
// To use this feature, you need to be a curator for your city.
// If you're not yet a curator, learn more here:
// http://www.startupgenome.com/curators/
//
// If you are already a curator, find your API key on your
// Startup Genome profile and enter it below. You can manage the markers
// on your map from the Startup Genome website, rather than using the
// built-in admin panel.
//
// You can turn on Startup Genome integration by changing
// $sg_enabled to "true".
$sg_enabled = false;

  // Put your SG API code here
  $sg_auth_code = '';

  // Choose your map's location here. If you're not sure
  // about this, check the URL on the Startup Genome website.
  $sg_location = '';
  // Examples:
  // $sg_location = '/city/los-angeles-ca';
  // $sg_location = '/state/ca-us';
  // $sg_location = '/country/chile';

  // We only check for new data from SG when people visit your map,
  // or when you run "startupgenome_get.php?override=true" manually.
  // You can limit how often this happens to avoid slow page loads.
  // Set the frequency below (in seconds).
  $sg_frequency = "3600";



// EventBrite.com integration (optional)
//
// Show events on the map? If set to "true", an event
// category will appear in the marker list, and you can
// run events_get.php in your browser (or a chron) to populate
// it with data from eventbrite.
$show_events = true;

    // put your eventbrite api key here
    $eb_app_key = "";

    // search eventbrite for these keywords
    // use "+" for spaces
    // e.g. 'startup', 'startups', 'demo+day'
    $eb_keywords = join("%20OR%20", array('startup', 'startups'));

    // specify city to search in and around
    // example: Santa+Monica
    $eb_city = "Santa+Monica";

    // specify search radius (in miles)
    $eb_within_radius = 50;


// set timezone
// date_default_timezone_set("America/Los_Angeles");

// HTML that goes just before </head>
$head_html = "";

// The <title></title> tag
$title_tag = "Coimbatore Startups - map of the Coimbatore startup community";

// The latitude & longitude to center the initial map
$lat_lng = "11.0118701,76.897195";

// Domain to use for various links
$domain = "http://map.coimbatorestartups.org";

// Twitter username and default share text
$twitter = array(
  "share_text" => "Let's put Coimbatore startups on the map:",
  "username" => "cbestartups"
);

// Short blurb about this site (visible to visitors)
$blurb = "This map was made to connect and promote the Coimbatore startup community.";

// attribution (must leave link intact, per our license)
$attribution = "
  <div style='text-align:center !important;'>
    Enhanced and hosted by<br/>
    <a href='http://usistech.com' target='_blank'><img src='http://usistech.com/images/logo-white.png' alt='technology that emerges' title='uSiS Technologies Private Limited' style='max-height: 27px;'/></a>
    <br/>

    <br/>
    
    Ideated by<br/><a href='http://www.tinywall.com/' target='_blank'>
    <img src='http://www.tinywall.com/images/logo.jpg' alt='technology that emerges' title='Tinywall Technologies Private Limited' style='max-height: 27px;' /> Tinywall</a><br/>

    <br/>

    Built with <br/><a href='https://github.com/abenzer/represent-map' target='_blank'>RepresentLA</a>
  </div>
";

// add startup genome to attribution if integration enabled
if($sg_enabled) {
  $attribution .= "
    <br /><br />
    Data from <a target='_blank' href='http://www.startupgenome.com'>StartupGenome</a>
  ";
}




define('GOOGLE_MAPS_API_KEY',   'AIzaSyAQKbj1WwDWt_xKsIsUNORIXdcpFr6zHzc');
define('FB_APP_ID',             '421651897866629');
