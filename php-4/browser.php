<html>
    <body>
       <?php 
       $viewer = getenv( "HTTP_USER_AGENT" );
       $browser = "An unidentifid browser";
       if( preg_match( "/MSIE/i", "$viewer"))
       {
           $browser = "Internet Explorer";
       }
       else if( preg_match( "/Nestcape/i", "$viewer" ) )
       {
           $browser = "Netscape";
       }
       else if( preg_match( "/Mozilla/i", "$viewer" ) )
       {
           $browser= "Mozilla";
       }       
       $platform = "an unidentified OS!";
       if( preg_match( "/Windows/i", "$viewer")) 
   { 
       $platform ="windows";
   }
   else if ( preg_match( "/Linux/i", "$viewer"))
   {
      $platform = "Linux!";
   }
    echo("You are using $browser on $platform");
   ?>
</body>
</html>