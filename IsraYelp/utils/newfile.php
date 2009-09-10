<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href="/css/andreas09/old.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
#map {
    width: 500px;
    height: 320px;
    border: 1px solid black;
    float: right;
    margin: 0px 0px 0px 10px;
    background-color:#ffffff;
}

.text {
    width: 100%;
    letter-spacing:0.5px;
    font: 100% "Arial,sans-serif";
    direction: rtl;
    unicode-bidi: bidi-override;
    padding: 10px 10px 10px 10px
}

</style>
<link rel="stylesheet" type="text/css" href="openlayers/style.css" />
<title>FreeMap Israel</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Free Maps Israel" />
<meta name="keywords" content=
"GIS,maps,Israel,mapping,open-source,GPS" />
<meta name="author" content="Ehud Shabtai" />
	<script type="text/javascript" src="/js/OpenLayers.js"></script>
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/he.js"></script>
	<script type="text/javascript" src="openlayers/FreeMapIL.js"></script>
    <script type="text/javascript">
        <!--
	var map = null;
        $().ready(function(){
			    map = new OpenLayers.Map.FreeMapIL("map");
			    map.addControl(new OpenLayers.Control.PanZoomBar());
			    map.addControl(new OpenLayers.Control.MouseDefaults());
			    map.addControl(new OpenLayers.Control.LayerSwitcher());
			    map.addControl(new OpenLayers.Control.Scale());
			    map.zoomToMaxExtent();
			    map.addControl(new OpenLayers.Control.Permalink());
                            map.moveTo(new OpenLayers.LonLat(lon=35,lat=31.5));
        });

	var markers_layer = null;
	function addMarker() {
		if (!markers_layer) {
	        	markers_layer = new OpenLayers.Layer.Markers("Marker");
	        	map.addLayer(markers_layer);
		}
        	markers_layer.addMarker(new OpenLayers.Marker(map.getCenter()));
	}
	
        // -->
    </script>
</head>
<body>
<div id="container">
<div id="sitename">
<h1>FreeMap Israel</h1>
<h2>������ ������ ������ �� �����</h2>
</div>
<div id="mainmenu">
<ul>
<li><a href="/index.html">����</a></li>
<li><a href="/map.html">���</a></li>
<li><a href="/edit_map.html">���� ���</a></li>
<li><a href="/cartouche">���� ����� ���</a></li>
<li><a href="/roadmap.html">�����</a></li>
<li><a class="current" href="/api/">���� ������</a></li>
<li><a href="/forum/">�����</a></li>
<li><a href="/wiki/">Wiki</a></li>
<li><a href="/terms.html">���� �����</a></li>
<li><a href="/contact.html">��� ���</a></li>
</ul>
</div>
<div id="wrap">
	<div id="rightside"></div>
<div id="contentmap">
	<div id="map"></div>
	<div class="text">
	<h2>���� ������</h2>
	<p>���� �� ����� ������ ��� ������������ ��� ��� ����� ����� �����.</p>
	<p>�����, ����� ������ javascript ���� ���� ������ �����, ������:</p>
	<a href="" onClick="addMarker(); return false;">��� ����� ����� ����</a>
	<br/>
	<a href="" onClick="map.setCenter(new OpenLayers.LonLat(34.78992, 32.08694), 8); return false;">���� �� ���� ������ ��"�</a>
</div>
<div class="clearingdiv">&nbsp;</div>
<div class="text">
<p>����� ����� �� <a href="http://openlayers.org">OpenLayers</a> ���� 2. ���� ���� ���� ���� �-javascript ���� ����� ���� ��������.</p>
<p>��� ������ ��� ������ ���� ����,
<br/>
�� �� ����� ��� ������ �� ������ �����:</p>
<span style="direction:ltr; float:left; border:solid;">
    <pre>
      &lt;iframe src="http://maps.freemap.co.il/api/openlayers/"
        width="600px" height="400px"
        scrolling="no"
        marginwidth="0" marginheight="0"
        frameborder="0"&gt;
      &lt;/iframe&gt;</pre>
      </span>
<div class="clearingdiv">&nbsp;</div>
<h4>
�������� ������ ����� �� ���� ��� �������  � URL:
</h4>
<ul>
<li><em>lat + lon</em> - ������ ���� �� �.�. �����</li>
<li><em>zoom</em> - ����� ���� ������ �� ����</li>
<li><em>marker</em> - ����� ����� ����� ���� (�� ��� ��� true ������)</li>
</ul>
<span style="direction:ltr; float:left; border:solid;">
    <pre>
      &lt;iframe src="http://maps.freemap.co.il/api/openlayers/<b>?zoom=10&lat=32.17407&lon=34.91108&marker=true</b>"
        width="600px" height="400px"
        scrolling="no"
        marginwidth="0" marginheight="0"
        frameborder="0"&gt;
      &lt;/iframe&gt;</pre>
</span>
<div class="clearingdiv">&nbsp;</div>
<p><strong>���� �� ���� ���� �-beta ����� �������.</strong></p>
<p>������ ����� �� ���� ����� ������.</p>
</div>
<div class="clearingdiv">&nbsp;</div>
</div>
</div>
</div>
<div id="footer">� 2005 Ehud Shabtai | Design by <a href=
"http://andreasviklund.com">Andreas Viklund</a></div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-352392-1";
urchinTracker();
</script>
</body>
</html>
