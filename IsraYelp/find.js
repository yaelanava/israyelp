var g_map_on_this_page=null;

$().ready(function(){
	addAutoComplete("find_form");
	$("#find_form").keypress(function(e){
		if(e.which==13){
			find();
			return false;
		}
	});
});

var find=function(){
	var url="/WAS/mozi";
	var params=$("#find_form").serialize();
	$(".search_wrapper").fadeIn("slow");
	$(".search_wrapper").fadeTo("fast",0.9);
	$("#search_results").empty();
	$(".hide").click(function(){
		$(".search_wrapper").fadeOut("slow");
		return false;
	});
	var findResult=function(json){
		$.each(json,function(){
			var list=$("#search_results");
			var next_item=$("<li><a></a></li>");
			$(list).append(next_item);
			var location=this.location;
			var raw_bounds=this.bounds;
			$("a",next_item).attr("href","#").text(this.name).click(function(e){
				if(typeof(g_map)=="undefined"||!location)
					return;
				$("#search_results a").removeClass("selected");
				$(this).addClass("selected");
				var center=null;
				var bounds=new OpenLayers.Bounds();
				if(g_map.map_info.base_layer_type=="OSM"){
					center=OpenLayers.Layer.SphericalMercator.forwardMercator(lon=location.lon,lat=location.lat);
					bounds.extend(OpenLayers.Layer.SphericalMercator.forwardMercator(raw_bounds.left,raw_bounds.top));
					bounds.extend(OpenLayers.Layer.SphericalMercator.forwardMercator(raw_bounds.right,raw_bounds.bottom));
				} else {
					center=new OpenLayers.LonLat(lon=location.lon,lat=location.lat);
					bounds.extend(new OpenLayers.LonLat(raw_bounds.left,raw_bounds.top));
					bounds.extend(new OpenLayers.LonLat(raw_bounds.right,raw_bounds.bottom));
				}
				var zoom=g_map.getZoom();
				var zoom_to=g_map.getZoomForExtent(bounds,true);
				if(zoom!=zoom_to)
					g_map.moveTo(center,zoom_to);
				else
					g_map.panTo(center);
				g_map.markersLayer.clearMarkers();
				g_map.markersLayer.addMarker(new OpenLayers.Marker(center));
			});
		});
		
		if(json.length==0){
			var none_found=$("<li></li>");
			$("#search_results").append(none_found);
			$(none_found).text($("#not_found").text());
		}
		$(".search_wrapper").fadeIn("slow");
		$(".search_wrapper").fadeTo("fast",0.9);
	}	
	var center=null;
	if(g_map.map_info.base_layer_type=="OSM")
		center=OpenLayers.Layer.SphericalMercator.inverseMercator(g_map.getCenter().lon,g_map.getCenter().lat);
	else
		center=g_map.getCenter();
	$.getJSON(url=url,data=params+"&lon="+center.lon+"&lat="+center.lat,findResult);
}

var addAutoComplete=function(element_id){
	$("#"+element_id+" input[name=city_name]").autocomplete("/WAS/autocomplete",{extraParams:{name:"city_name"}});
	$("#"+element_id+" input[name=street_name]").autocomplete("/WAS/autocomplete",{extraParams:{name:"street_name",city_name:function(){
		return $("#"+element_id+" input[name=city_name]").val();
	}
}
	,cacheLength:1});
}