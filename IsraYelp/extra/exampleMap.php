<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1255">
<title>מפה</title>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;hl=iw&amp;key=AABQIAAAAdoQqj4v1_cpdHiZHC2r_YRTsd_gJePVngQmnV01BMukz4Ce8HhSgtedZTyzF-FzMD-hKPaEkdDTLDA"
            type="text/javascript"></script>
    <script type="text/javascript">

//    function initialize() {
//      if (GBrowserIsCompatible()) {
//        var map = new GMap2(document.getElementById("map_canvas"));
//        map.setCenter(new GLatLng(37.4419, -122.1419), 13);
//        map.setUIToDefault();
//      }
//    }

    function initialize() {
        if (GBrowserIsCompatible()) {
          var map = new GMap2(document.getElementById("map_canvas"));
          map.setCenter(new GLatLng(32.06711, 34.77177), 13);
   
          // Add 10 markers to the map at random locations
          var bounds = map.getBounds();
          var southWest = bounds.getSouthWest();
          var northEast = bounds.getNorthEast();
          var lngSpan = northEast.lng() - southWest.lng();
          var latSpan = northEast.lat() - southWest.lat();
          for (var i = 0; i < 10; i++) {
            var point = new GLatLng(southWest.lat() + latSpan * Math.random(),
                                    southWest.lng() + lngSpan * Math.random());
            map.addOverlay(new GMarker(point));
          }
        }
      }
    
    </script>

  <!--
  // Created with a Google AJAX Search Wizard
  // http://code.google.com/apis/ajaxsearch/wizards.html
  -->

  <!--
  // The Following div element will end up holding the map search control.
  // You can place this anywhere on your page
  -->
 

  <!-- Maps Api, Ajax Search Api and Stylesheet
  // Note: If you are already using the Maps API then do not include it again
  //       If you are already using the AJAX Search API, then do not include it
  //       or its stylesheet again
  //
  // The Key Embedded in the following script tags is designed to work with
  // the following site:
  // http://localhost/IsraYelp
  -->
  <script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAdoQqj4v1_cpdHiZHC2r_YRTsd_gJePVngQmnV01BMukz4Ce8HhSgtedZTyzF-FzMD-hKPaEkdDTLDA"
    type="text/javascript"></script>
  <script src="http://www.google.com/uds/api?file=uds.js&v=1.0&source=uds-msw&key=ABQIAAAAdoQqj4v1_cpdHiZHC2r_YRTsd_gJePVngQmnV01BMukz4Ce8HhSgtedZTyzF-FzMD-hKPaEkdDTLDA"
    type="text/javascript"></script>
  <style type="text/css">
    @import url("http://www.google.com/uds/css/gsearch.css");
  </style>

  <!-- Map Search Control and Stylesheet -->
  <script type="text/javascript">
    window._uds_msw_donotrepair = true;
  </script>
  <script src="http://www.google.com/uds/solutions/mapsearch/gsmapsearch.js?mode=new"
    type="text/javascript"></script>
  <style type="text/css">
    @import url("http://www.google.com/uds/solutions/mapsearch/gsmapsearch.css");
  </style>

  <style type="text/css">
    .gsmsc-mapDiv {
      height : 275px;
    }

    .gsmsc-idleMapDiv {
      height : 275px;
    }

    #mapsearch {
      width : 365px;
      margin: 10px;
      padding: 4px;
    }
  </style>
  <script type="text/javascript">
    function LoadMapSearchControl() {

      var options = {
            zoomControl : GSmapSearchControl.ZOOM_CONTROL_ENABLE_ALL,
            title : "לוקאס",
            url : "http://localhost/IsraYelp/restaurants/restaurant.php?biz_id=1",
            idleMapZoom : GSmapSearchControl.ACTIVE_MAP_ZOOM,
            activeMapZoom : GSmapSearchControl.ACTIVE_MAP_ZOOM
            }

      new GSmapSearchControl(
            document.getElementById("mapsearch"),
            "מזא&amp;quot;ה 5, תל אביב, ישראל",
            options
            );

    }
    // arrange for this function to be called during body.onload
    // event processing
    GSearch.setOnLoadCallback(LoadMapSearchControl);
  </script>
<!-- ++End Map Search Control Wizard Generated Code++ -->
  </head>
  
  <p><iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;hl=iw&amp;geocode=&amp;ie=UTF8&amp;ll=32.06711,34.77177&amp;spn=0.008528,0.011437&amp;t=h&amp;z=14&amp;output=embed&amp;s=AARTsJplR0gK9t0LuAm1U8rQ8ahaNqMHQQ"></iframe></p>
	<p><small><a href="http://maps.google.com/maps?f=q&amp;hl=iw&amp;geocode=&amp;q=%D7%94%D7%A9%D7%9C%D7%95%D7%9D+1,+%D7%AA%D7%9C+%D7%90%D7%91%D7%99%D7%91,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;sll=32.045096,34.83623&amp;sspn=0.00853,0.011437&amp;g=%D7%94%D7%A9%D7%9C%D7%95%D7%9D+1,+%D7%AA%D7%9C+%D7%90%D7%91%D7%99%D7%91,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;ie=UTF8&amp;ll=32.082356,34.799194&amp;spn=0.008528,0.011437&amp;t=h&amp;z=14&amp;source=embed" style="color:#0000FF;text-align:left">הצג מפה גדולה יותר</a></small></p>
  

  <body onload="initialize()" onunload="GUnload()">
    <div id="map_canvas" style="width: 500px; height: 300px"></div>

      <iframe src="http://maps.freemap.co.il/api/openlayers/?zoom=9&lat=32.06711&lon=34.77177&marker=true"
        width="300px" height="400px"
        scrolling="no"
        marginwidth="0" marginheight="0" 
        frameborder="1">        
      </iframe>
      
      <iframe width="250" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=iw&amp;geocode=&amp;q=%D7%9E%D7%96%D7%90%22%D7%94+5&amp;sll=32.226743,34.747009&amp;sspn=1.270898,2.903137&amp;ie=UTF8&amp;t=h&amp;ll=32.067374,34.773359&amp;spn=0.021821,0.021458&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=iw&amp;geocode=&amp;q=%D7%9E%D7%96%D7%90%22%D7%94+5&amp;sll=32.226743,34.747009&amp;sspn=1.270898,2.903137&amp;ie=UTF8&amp;t=h&amp;ll=32.067374,34.773359&amp;spn=0.021821,0.021458&amp;z=14" style="color:#0000FF;text-align:left">הצג מפה גדולה יותר</a></small>

<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=iw&amp;geocode=&amp;;sll=32.226743,34.747009&amp;sspn=1.270898,2.903137&amp;ie=UTF8&amp;ll=32.077193,34.776363&amp;spn=0.019892,0.045362&amp;t=h&amp;z=14&amp;iwloc=r0&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=iw&amp;geocode=&amp;q=%D7%9E%D7%96%D7%90%22%D7%94+5,+%D7%AA%D7%9C+%D7%90%D7%91%D7%99%D7%91,+%D7%99%D7%A9%D7%A8%D7%90%D7%9C&amp;sll=32.226743,34.747009&amp;sspn=1.270898,2.903137&amp;ie=UTF8&amp;ll=32.077193,34.776363&amp;spn=0.019892,0.045362&amp;t=h&amp;z=14&amp;iwloc=r0" style="color:#0000FF;text-align:left">הצג מפה גדולה יותר</a></small>
 <div id="mapsearch">
    <span style="color:#676767;font-size:11px;margin:10px;padding:4px;">Loading...</span>
  </div>            
</body>
</html>