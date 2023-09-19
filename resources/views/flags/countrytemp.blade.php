@extends('flags.layouts.appindex')
<!DOCTYPE html>
<head>    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
        <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>
    
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.4.0/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.4.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://rawcdn.githack.com/python-visualization/folium/master/folium/templates/leaflet.awesome.rotate.css"/>
    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    
            <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <style>
                #map_239e268ba54c49d8b72c48c34178a6ce {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
            </style>
        
</head>
<body>
@section('title', '| Country Flag Map')
@include("flags.navbars.nav")
            <div class="folium-map" id="map_239e268ba54c49d8b72c48c34178a6ce" ></div>
        
</body>
<script>    
    
            var map_239e268ba54c49d8b72c48c34178a6ce = L.map(
                "map_239e268ba54c49d8b72c48c34178a6ce",
                {
                    center: [37.883574, 44.356726],
                    crs: L.CRS.EPSG3857,
                    zoom: 4,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );

            

        
    
            var tile_layer_570f5104a574412b93ce78236e0d358d = L.tileLayer(
                "https://api.mapbox.com/v4/mapbox.streets/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiY2hhd2tlcjIxIiwiYSI6ImNqOXgycWEybDdzYTEzM2xnNG01N2Y5d2UifQ.YMghCTUA1p131erg3_Ln_Q",
                {"attribution": "XXX Mapbox Attribution", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var marker_3ba236e7eccd4b1e85fc798bf81b717a = L.marker(
                [42.546245, 1.6015540000000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b3cdfc29b8f147d8b217b4b4f1e757f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3ba236e7eccd4b1e85fc798bf81b717a.setIcon(icon_b3cdfc29b8f147d8b217b4b4f1e757f1);
        
    
        var popup_732d120577c4406d8d6368ff4c63b2d0 = L.popup({"maxWidth": "100%"});

        
            var html_2cbcb05b7d974f0cae23d0007dc56e96 = $(`<div id="html_2cbcb05b7d974f0cae23d0007dc56e96" style="width: 100.0%; height: 100.0%;">Andorra <img src="http://localhost:8000/flag_resources/img/worldflags/ad.png "width="140px" ></div>`)[0];
            popup_732d120577c4406d8d6368ff4c63b2d0.setContent(html_2cbcb05b7d974f0cae23d0007dc56e96);
        

        marker_3ba236e7eccd4b1e85fc798bf81b717a.bindPopup(popup_732d120577c4406d8d6368ff4c63b2d0)
        ;

        
    
    
            var marker_3c31d38062c84313af152a2c96483a1d = L.marker(
                [23.424076, 53.847818000000004],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_88a32efde5e041bdbbe3127019152194 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3c31d38062c84313af152a2c96483a1d.setIcon(icon_88a32efde5e041bdbbe3127019152194);
        
    
        var popup_f3b3aa9e4ba64fb6a34eb5ad6a54737e = L.popup({"maxWidth": "100%"});

        
            var html_020bc7afc48c46c7baa1be31718d8fc4 = $(`<div id="html_020bc7afc48c46c7baa1be31718d8fc4" style="width: 100.0%; height: 100.0%;">United Arab Emirates <img src="http://localhost:8000/flag_resources/img/worldflags/ae.png "width="140px" ></div>`)[0];
            popup_f3b3aa9e4ba64fb6a34eb5ad6a54737e.setContent(html_020bc7afc48c46c7baa1be31718d8fc4);
        

        marker_3c31d38062c84313af152a2c96483a1d.bindPopup(popup_f3b3aa9e4ba64fb6a34eb5ad6a54737e)
        ;

        
    
    
            var marker_887f4835727a4e05a026ce78a78610e2 = L.marker(
                [33.93911, 67.709953],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_d6a17b94522848bcb6d3f693a4326d5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_887f4835727a4e05a026ce78a78610e2.setIcon(icon_d6a17b94522848bcb6d3f693a4326d5d);
        
    
        var popup_52b6d36173a84024ac487b5a129dbbbb = L.popup({"maxWidth": "100%"});

        
            var html_5682d0f48b3d46ffa3b31be7caed72c9 = $(`<div id="html_5682d0f48b3d46ffa3b31be7caed72c9" style="width: 100.0%; height: 100.0%;">Afghanistan <img src="http://localhost:8000/flag_resources/img/worldflags/af.png "width="140px" ></div>`)[0];
            popup_52b6d36173a84024ac487b5a129dbbbb.setContent(html_5682d0f48b3d46ffa3b31be7caed72c9);
        

        marker_887f4835727a4e05a026ce78a78610e2.bindPopup(popup_52b6d36173a84024ac487b5a129dbbbb)
        ;

        
    
    
            var marker_dfaa85aa1c5944f6927c9915ba3b07cb = L.marker(
                [17.060816, -61.796428000000006],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1bb3cf6122f040a5acbc9cdddd3797eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dfaa85aa1c5944f6927c9915ba3b07cb.setIcon(icon_1bb3cf6122f040a5acbc9cdddd3797eb);
        
    
        var popup_e6d7401a3d7c4cb5b82558820780bdf7 = L.popup({"maxWidth": "100%"});

        
            var html_d7eef99762c1404182175bee227a3b78 = $(`<div id="html_d7eef99762c1404182175bee227a3b78" style="width: 100.0%; height: 100.0%;">Antigua and Barbuda <img src="http://localhost:8000/flag_resources/img/worldflags/ag.png "width="140px" ></div>`)[0];
            popup_e6d7401a3d7c4cb5b82558820780bdf7.setContent(html_d7eef99762c1404182175bee227a3b78);
        

        marker_dfaa85aa1c5944f6927c9915ba3b07cb.bindPopup(popup_e6d7401a3d7c4cb5b82558820780bdf7)
        ;

        
    
    
            var marker_32b8bb9af6544748af1c756b033f5b45 = L.marker(
                [18.220554, -63.068615],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_77b1b698fbcf4b41a5484a355ef1cc36 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_32b8bb9af6544748af1c756b033f5b45.setIcon(icon_77b1b698fbcf4b41a5484a355ef1cc36);
        
    
        var popup_f9da654c14e24135aee18b74022af18a = L.popup({"maxWidth": "100%"});

        
            var html_79de379530da4db68c2501890d177d7a = $(`<div id="html_79de379530da4db68c2501890d177d7a" style="width: 100.0%; height: 100.0%;">Anguilla <img src="http://localhost:8000/flag_resources/img/worldflags/ai.png "width="140px" ></div>`)[0];
            popup_f9da654c14e24135aee18b74022af18a.setContent(html_79de379530da4db68c2501890d177d7a);
        

        marker_32b8bb9af6544748af1c756b033f5b45.bindPopup(popup_f9da654c14e24135aee18b74022af18a)
        ;

        
    
    
            var marker_fa70aa3a6b684c98939fb694f2e91810 = L.marker(
                [41.153332, 20.168331],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_2b5f2498652d49c89c8c1dd738ddd3c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fa70aa3a6b684c98939fb694f2e91810.setIcon(icon_2b5f2498652d49c89c8c1dd738ddd3c0);
        
    
        var popup_cdec9ccfee5743ec831d64f2fad4c886 = L.popup({"maxWidth": "100%"});

        
            var html_22ef8116eed942d4a20c5b9f87c144d0 = $(`<div id="html_22ef8116eed942d4a20c5b9f87c144d0" style="width: 100.0%; height: 100.0%;">Albania <img src="http://localhost:8000/flag_resources/img/worldflags/al.png "width="140px" ></div>`)[0];
            popup_cdec9ccfee5743ec831d64f2fad4c886.setContent(html_22ef8116eed942d4a20c5b9f87c144d0);
        

        marker_fa70aa3a6b684c98939fb694f2e91810.bindPopup(popup_cdec9ccfee5743ec831d64f2fad4c886)
        ;

        
    
    
            var marker_0ca77dffdd424a7aa522faf06fed8a12 = L.marker(
                [40.069099, 45.038189],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c4c981c9dbbc4359b9ece4cd12d268f6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0ca77dffdd424a7aa522faf06fed8a12.setIcon(icon_c4c981c9dbbc4359b9ece4cd12d268f6);
        
    
        var popup_0451bbc0a5cd4cb4ab77365126f009ba = L.popup({"maxWidth": "100%"});

        
            var html_6dcdcdcd6a574c8d919a4f80d07734ed = $(`<div id="html_6dcdcdcd6a574c8d919a4f80d07734ed" style="width: 100.0%; height: 100.0%;">Armenia <img src="http://localhost:8000/flag_resources/img/worldflags/am.png "width="140px" ></div>`)[0];
            popup_0451bbc0a5cd4cb4ab77365126f009ba.setContent(html_6dcdcdcd6a574c8d919a4f80d07734ed);
        

        marker_0ca77dffdd424a7aa522faf06fed8a12.bindPopup(popup_0451bbc0a5cd4cb4ab77365126f009ba)
        ;

        
    
    
            var marker_6c8e5743859a41a586a19655c746865a = L.marker(
                [12.226078999999999, -69.060087],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_8cfb7378c6d9433aac294fdab498dd22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6c8e5743859a41a586a19655c746865a.setIcon(icon_8cfb7378c6d9433aac294fdab498dd22);
        
    
        var popup_4729e4c6e10746149b63ee8ff7324b4e = L.popup({"maxWidth": "100%"});

        
            var html_2a19a5025d15471e82aed5f084a8d4ec = $(`<div id="html_2a19a5025d15471e82aed5f084a8d4ec" style="width: 100.0%; height: 100.0%;">Netherlands Antilles <img src="http://localhost:8000/flag_resources/img/worldflags/an.png "width="140px" ></div>`)[0];
            popup_4729e4c6e10746149b63ee8ff7324b4e.setContent(html_2a19a5025d15471e82aed5f084a8d4ec);
        

        marker_6c8e5743859a41a586a19655c746865a.bindPopup(popup_4729e4c6e10746149b63ee8ff7324b4e)
        ;

        
    
    
            var marker_9316f2461a6641bfb9ac0f80529759aa = L.marker(
                [-11.202691999999999, 17.873887],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_d1ebf2cd88e1464a980664c3ab472c30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9316f2461a6641bfb9ac0f80529759aa.setIcon(icon_d1ebf2cd88e1464a980664c3ab472c30);
        
    
        var popup_f57571bc8f68464798198e78bf95de6d = L.popup({"maxWidth": "100%"});

        
            var html_4dfcfb960944443889e9fe3b33e5f789 = $(`<div id="html_4dfcfb960944443889e9fe3b33e5f789" style="width: 100.0%; height: 100.0%;">Angola <img src="http://localhost:8000/flag_resources/img/worldflags/ao.png "width="140px" ></div>`)[0];
            popup_f57571bc8f68464798198e78bf95de6d.setContent(html_4dfcfb960944443889e9fe3b33e5f789);
        

        marker_9316f2461a6641bfb9ac0f80529759aa.bindPopup(popup_f57571bc8f68464798198e78bf95de6d)
        ;

        
    
    
            var marker_053097cd35914d81b5ff65eb4484159c = L.marker(
                [-75.250973, -0.071389],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_263021d80c1645b8931314f86176716e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_053097cd35914d81b5ff65eb4484159c.setIcon(icon_263021d80c1645b8931314f86176716e);
        
    
        var popup_b6247c610fe64f6f8cd7cb211fc585ad = L.popup({"maxWidth": "100%"});

        
            var html_2093011390a149a89660f0b74c21a005 = $(`<div id="html_2093011390a149a89660f0b74c21a005" style="width: 100.0%; height: 100.0%;">Antarctica <img src="http://localhost:8000/flag_resources/img/worldflags/aq.png "width="140px" ></div>`)[0];
            popup_b6247c610fe64f6f8cd7cb211fc585ad.setContent(html_2093011390a149a89660f0b74c21a005);
        

        marker_053097cd35914d81b5ff65eb4484159c.bindPopup(popup_b6247c610fe64f6f8cd7cb211fc585ad)
        ;

        
    
    
            var marker_ab35671c800449c7a632c9fb4886cb69 = L.marker(
                [-38.416097, -63.616671999999994],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_2c199e4d496b44d69aad8e5ed8e7b0a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ab35671c800449c7a632c9fb4886cb69.setIcon(icon_2c199e4d496b44d69aad8e5ed8e7b0a0);
        
    
        var popup_ef502a798b2b4db0916a6b09f1876236 = L.popup({"maxWidth": "100%"});

        
            var html_5e6bfc02b4af4ccc963ad8dd0e788ca1 = $(`<div id="html_5e6bfc02b4af4ccc963ad8dd0e788ca1" style="width: 100.0%; height: 100.0%;">Argentina <img src="http://localhost:8000/flag_resources/img/worldflags/ar.png "width="140px" ></div>`)[0];
            popup_ef502a798b2b4db0916a6b09f1876236.setContent(html_5e6bfc02b4af4ccc963ad8dd0e788ca1);
        

        marker_ab35671c800449c7a632c9fb4886cb69.bindPopup(popup_ef502a798b2b4db0916a6b09f1876236)
        ;

        
    
    
            var marker_1f9d2f827f7e409e844f0171b2a813dd = L.marker(
                [-14.270972, -170.132217],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_34b2eb47305e44c4b937ba2fc0cb158f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1f9d2f827f7e409e844f0171b2a813dd.setIcon(icon_34b2eb47305e44c4b937ba2fc0cb158f);
        
    
        var popup_3f35de7bc183478591557007f58d6954 = L.popup({"maxWidth": "100%"});

        
            var html_d0ef69d5a04548f79a29b6d5da94eac7 = $(`<div id="html_d0ef69d5a04548f79a29b6d5da94eac7" style="width: 100.0%; height: 100.0%;">American Samoa <img src="http://localhost:8000/flag_resources/img/worldflags/as.png "width="140px" ></div>`)[0];
            popup_3f35de7bc183478591557007f58d6954.setContent(html_d0ef69d5a04548f79a29b6d5da94eac7);
        

        marker_1f9d2f827f7e409e844f0171b2a813dd.bindPopup(popup_3f35de7bc183478591557007f58d6954)
        ;

        
    
    
            var marker_ea700b3044b046a49ae64eceb700c51f = L.marker(
                [47.516231, 14.550072],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_18d288b2585c4810bc55161a857911c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ea700b3044b046a49ae64eceb700c51f.setIcon(icon_18d288b2585c4810bc55161a857911c5);
        
    
        var popup_ae7ac548eb684121a74d068d85598399 = L.popup({"maxWidth": "100%"});

        
            var html_65e6771720164daebc1e548bdd0aaa74 = $(`<div id="html_65e6771720164daebc1e548bdd0aaa74" style="width: 100.0%; height: 100.0%;">Austria <img src="http://localhost:8000/flag_resources/img/worldflags/at.png "width="140px" ></div>`)[0];
            popup_ae7ac548eb684121a74d068d85598399.setContent(html_65e6771720164daebc1e548bdd0aaa74);
        

        marker_ea700b3044b046a49ae64eceb700c51f.bindPopup(popup_ae7ac548eb684121a74d068d85598399)
        ;

        
    
    
            var marker_dcc9be5edba446dd848554445759d3b2 = L.marker(
                [-25.274398, 133.775136],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b37613db0bfa47c4877972b17aa3e394 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dcc9be5edba446dd848554445759d3b2.setIcon(icon_b37613db0bfa47c4877972b17aa3e394);
        
    
        var popup_014adc5e08734a89a87c260ea4fae2cb = L.popup({"maxWidth": "100%"});

        
            var html_cf9190f90e644d2fa53c56fd2d9becb3 = $(`<div id="html_cf9190f90e644d2fa53c56fd2d9becb3" style="width: 100.0%; height: 100.0%;">Australia <img src="http://localhost:8000/flag_resources/img/worldflags/au.png "width="140px" ></div>`)[0];
            popup_014adc5e08734a89a87c260ea4fae2cb.setContent(html_cf9190f90e644d2fa53c56fd2d9becb3);
        

        marker_dcc9be5edba446dd848554445759d3b2.bindPopup(popup_014adc5e08734a89a87c260ea4fae2cb)
        ;

        
    
    
            var marker_ead77a928e784da4877e263ecd33ede0 = L.marker(
                [12.52111, -69.968338],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_391c28bb4f7e449682cb22e86e563614 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ead77a928e784da4877e263ecd33ede0.setIcon(icon_391c28bb4f7e449682cb22e86e563614);
        
    
        var popup_f7bdb99ba610481e9f28058f8c1b57bf = L.popup({"maxWidth": "100%"});

        
            var html_448f61d07b0d472fb8917ec6b74d0576 = $(`<div id="html_448f61d07b0d472fb8917ec6b74d0576" style="width: 100.0%; height: 100.0%;">Aruba <img src="http://localhost:8000/flag_resources/img/worldflags/aw.png "width="140px" ></div>`)[0];
            popup_f7bdb99ba610481e9f28058f8c1b57bf.setContent(html_448f61d07b0d472fb8917ec6b74d0576);
        

        marker_ead77a928e784da4877e263ecd33ede0.bindPopup(popup_f7bdb99ba610481e9f28058f8c1b57bf)
        ;

        
    
    
            var marker_c892e29be6ac4c06a1d9ccc74b6a6ed2 = L.marker(
                [40.143105, 47.576927000000005],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f37f3c3915be4660aea4c82ac8b86132 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c892e29be6ac4c06a1d9ccc74b6a6ed2.setIcon(icon_f37f3c3915be4660aea4c82ac8b86132);
        
    
        var popup_e4eed248c0d14b028685e16d309e85f1 = L.popup({"maxWidth": "100%"});

        
            var html_b4316a95ebf44725abb688685135bb29 = $(`<div id="html_b4316a95ebf44725abb688685135bb29" style="width: 100.0%; height: 100.0%;">Azerbaijan <img src="http://localhost:8000/flag_resources/img/worldflags/az.png "width="140px" ></div>`)[0];
            popup_e4eed248c0d14b028685e16d309e85f1.setContent(html_b4316a95ebf44725abb688685135bb29);
        

        marker_c892e29be6ac4c06a1d9ccc74b6a6ed2.bindPopup(popup_e4eed248c0d14b028685e16d309e85f1)
        ;

        
    
    
            var marker_ea4a92a44b104e6eb16424c10f95e147 = L.marker(
                [43.915886, 17.679076000000002],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_792a6f9b5f3c45138ff953d40de545cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ea4a92a44b104e6eb16424c10f95e147.setIcon(icon_792a6f9b5f3c45138ff953d40de545cb);
        
    
        var popup_79765bb470564bfca7afc2b34bda7a51 = L.popup({"maxWidth": "100%"});

        
            var html_84ea901f724e48d883ec249966ede8a9 = $(`<div id="html_84ea901f724e48d883ec249966ede8a9" style="width: 100.0%; height: 100.0%;">Bosnia and Herzegovina <img src="http://localhost:8000/flag_resources/img/worldflags/ba.png "width="140px" ></div>`)[0];
            popup_79765bb470564bfca7afc2b34bda7a51.setContent(html_84ea901f724e48d883ec249966ede8a9);
        

        marker_ea4a92a44b104e6eb16424c10f95e147.bindPopup(popup_79765bb470564bfca7afc2b34bda7a51)
        ;

        
    
    
            var marker_0b39bccac10744f8b15943e55e1bd4ec = L.marker(
                [13.193887, -59.543198],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ad9f7e6c84364fd0af17a2f3a2dc8a69 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0b39bccac10744f8b15943e55e1bd4ec.setIcon(icon_ad9f7e6c84364fd0af17a2f3a2dc8a69);
        
    
        var popup_8bdc0aaf56ae408e851dd34d69c8938f = L.popup({"maxWidth": "100%"});

        
            var html_40dee1b125ce498f9210cd4453c11572 = $(`<div id="html_40dee1b125ce498f9210cd4453c11572" style="width: 100.0%; height: 100.0%;">Barbados <img src="http://localhost:8000/flag_resources/img/worldflags/bb.png "width="140px" ></div>`)[0];
            popup_8bdc0aaf56ae408e851dd34d69c8938f.setContent(html_40dee1b125ce498f9210cd4453c11572);
        

        marker_0b39bccac10744f8b15943e55e1bd4ec.bindPopup(popup_8bdc0aaf56ae408e851dd34d69c8938f)
        ;

        
    
    
            var marker_0c37f9a7491748378e677fae1be7ecaa = L.marker(
                [23.684994, 90.35633100000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_2a49def0f2ac455ca8cf407f6bb1b063 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0c37f9a7491748378e677fae1be7ecaa.setIcon(icon_2a49def0f2ac455ca8cf407f6bb1b063);
        
    
        var popup_6a40a3e9fcdf46cd9dfa693a61639cca = L.popup({"maxWidth": "100%"});

        
            var html_b6951d29ef9d49dcaaa473a115993e43 = $(`<div id="html_b6951d29ef9d49dcaaa473a115993e43" style="width: 100.0%; height: 100.0%;">Bangladesh <img src="http://localhost:8000/flag_resources/img/worldflags/bd.png "width="140px" ></div>`)[0];
            popup_6a40a3e9fcdf46cd9dfa693a61639cca.setContent(html_b6951d29ef9d49dcaaa473a115993e43);
        

        marker_0c37f9a7491748378e677fae1be7ecaa.bindPopup(popup_6a40a3e9fcdf46cd9dfa693a61639cca)
        ;

        
    
    
            var marker_a6de83145ee04295a7dedac38d418bdf = L.marker(
                [50.503887, 4.469936],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ccc04594dbb44bfb9839f2f4dfc3a0ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a6de83145ee04295a7dedac38d418bdf.setIcon(icon_ccc04594dbb44bfb9839f2f4dfc3a0ee);
        
    
        var popup_89fd63a4053349d9a980d2057b808ff1 = L.popup({"maxWidth": "100%"});

        
            var html_8f66a00810be4ee6a2a2cdeefa54aa78 = $(`<div id="html_8f66a00810be4ee6a2a2cdeefa54aa78" style="width: 100.0%; height: 100.0%;">Belgium <img src="http://localhost:8000/flag_resources/img/worldflags/be.png "width="140px" ></div>`)[0];
            popup_89fd63a4053349d9a980d2057b808ff1.setContent(html_8f66a00810be4ee6a2a2cdeefa54aa78);
        

        marker_a6de83145ee04295a7dedac38d418bdf.bindPopup(popup_89fd63a4053349d9a980d2057b808ff1)
        ;

        
    
    
            var marker_b52b07f1c23a441f83f6cae808eb30b0 = L.marker(
                [12.238333, -1.561593],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_eae9a95b49ec4c429b7d0fbe6fe93531 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b52b07f1c23a441f83f6cae808eb30b0.setIcon(icon_eae9a95b49ec4c429b7d0fbe6fe93531);
        
    
        var popup_cc45bb5c5f074a31a4af0f7dc187d443 = L.popup({"maxWidth": "100%"});

        
            var html_2df048641cd047a2a96ea9ad731da3b5 = $(`<div id="html_2df048641cd047a2a96ea9ad731da3b5" style="width: 100.0%; height: 100.0%;">Burkina Faso <img src="http://localhost:8000/flag_resources/img/worldflags/bf.png "width="140px" ></div>`)[0];
            popup_cc45bb5c5f074a31a4af0f7dc187d443.setContent(html_2df048641cd047a2a96ea9ad731da3b5);
        

        marker_b52b07f1c23a441f83f6cae808eb30b0.bindPopup(popup_cc45bb5c5f074a31a4af0f7dc187d443)
        ;

        
    
    
            var marker_1dc08c230eeb4c0abcf2d47276c90314 = L.marker(
                [42.733883, 25.48583],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1ce78de1b8a04fed9d3fee27300c9325 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1dc08c230eeb4c0abcf2d47276c90314.setIcon(icon_1ce78de1b8a04fed9d3fee27300c9325);
        
    
        var popup_863935521bc847e995c7fecba18f6cc5 = L.popup({"maxWidth": "100%"});

        
            var html_b86b45454924462694d60c7bda90306c = $(`<div id="html_b86b45454924462694d60c7bda90306c" style="width: 100.0%; height: 100.0%;">Bulgaria <img src="http://localhost:8000/flag_resources/img/worldflags/bg.png "width="140px" ></div>`)[0];
            popup_863935521bc847e995c7fecba18f6cc5.setContent(html_b86b45454924462694d60c7bda90306c);
        

        marker_1dc08c230eeb4c0abcf2d47276c90314.bindPopup(popup_863935521bc847e995c7fecba18f6cc5)
        ;

        
    
    
            var marker_5b9a7a9b34964df8ace36e94b2e3dd56 = L.marker(
                [25.930414000000003, 50.637772],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4a22e230ed8b4b56a2ba65e198165396 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5b9a7a9b34964df8ace36e94b2e3dd56.setIcon(icon_4a22e230ed8b4b56a2ba65e198165396);
        
    
        var popup_8a017a5c4e6e4bf6ad8fe30c0a56850a = L.popup({"maxWidth": "100%"});

        
            var html_7df87569d73c42609fc309a460314d8f = $(`<div id="html_7df87569d73c42609fc309a460314d8f" style="width: 100.0%; height: 100.0%;">Bahrain <img src="http://localhost:8000/flag_resources/img/worldflags/bh.png "width="140px" ></div>`)[0];
            popup_8a017a5c4e6e4bf6ad8fe30c0a56850a.setContent(html_7df87569d73c42609fc309a460314d8f);
        

        marker_5b9a7a9b34964df8ace36e94b2e3dd56.bindPopup(popup_8a017a5c4e6e4bf6ad8fe30c0a56850a)
        ;

        
    
    
            var marker_fa4d4b23042243b8ad6a08f2bbe989ee = L.marker(
                [-3.3730559999999996, 29.918885999999997],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_fbdbffb92276408686b4ac0b8689c0cf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fa4d4b23042243b8ad6a08f2bbe989ee.setIcon(icon_fbdbffb92276408686b4ac0b8689c0cf);
        
    
        var popup_b1348366bead4acf9557135e553c08d9 = L.popup({"maxWidth": "100%"});

        
            var html_384ce14ae5fb47df86bfbc40b43c830a = $(`<div id="html_384ce14ae5fb47df86bfbc40b43c830a" style="width: 100.0%; height: 100.0%;">Burundi <img src="http://localhost:8000/flag_resources/img/worldflags/bi.png "width="140px" ></div>`)[0];
            popup_b1348366bead4acf9557135e553c08d9.setContent(html_384ce14ae5fb47df86bfbc40b43c830a);
        

        marker_fa4d4b23042243b8ad6a08f2bbe989ee.bindPopup(popup_b1348366bead4acf9557135e553c08d9)
        ;

        
    
    
            var marker_654d7f5f64fb43188759394a27988c1b = L.marker(
                [9.30769, 2.315834],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4ec6ae21f4784b62b3f9a8208597a6b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_654d7f5f64fb43188759394a27988c1b.setIcon(icon_4ec6ae21f4784b62b3f9a8208597a6b3);
        
    
        var popup_c0a3afddc6e94c5096e01d4704a19e98 = L.popup({"maxWidth": "100%"});

        
            var html_14ea09c977464b9383deb0b3eafbfb1e = $(`<div id="html_14ea09c977464b9383deb0b3eafbfb1e" style="width: 100.0%; height: 100.0%;">Benin <img src="http://localhost:8000/flag_resources/img/worldflags/bj.png "width="140px" ></div>`)[0];
            popup_c0a3afddc6e94c5096e01d4704a19e98.setContent(html_14ea09c977464b9383deb0b3eafbfb1e);
        

        marker_654d7f5f64fb43188759394a27988c1b.bindPopup(popup_c0a3afddc6e94c5096e01d4704a19e98)
        ;

        
    
    
            var marker_bc875b1ec67e45b39f2aad1b853e87dd = L.marker(
                [32.321384, -64.75737],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b5509489a8f44bf4ba8cafa683ab8739 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bc875b1ec67e45b39f2aad1b853e87dd.setIcon(icon_b5509489a8f44bf4ba8cafa683ab8739);
        
    
        var popup_8f42975d15cf4dae81ae05eb38af4e40 = L.popup({"maxWidth": "100%"});

        
            var html_e1f6f748092645a9bb79d8cdcf865716 = $(`<div id="html_e1f6f748092645a9bb79d8cdcf865716" style="width: 100.0%; height: 100.0%;">Bermuda <img src="http://localhost:8000/flag_resources/img/worldflags/bm.png "width="140px" ></div>`)[0];
            popup_8f42975d15cf4dae81ae05eb38af4e40.setContent(html_e1f6f748092645a9bb79d8cdcf865716);
        

        marker_bc875b1ec67e45b39f2aad1b853e87dd.bindPopup(popup_8f42975d15cf4dae81ae05eb38af4e40)
        ;

        
    
    
            var marker_c36f2f8c3d874aaab95f7644be0812fc = L.marker(
                [4.535277, 114.72766899999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_7934d29ac0b849e5ac494d41904aca6c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c36f2f8c3d874aaab95f7644be0812fc.setIcon(icon_7934d29ac0b849e5ac494d41904aca6c);
        
    
        var popup_722a0f55a3d74c9693713cd9e70970ea = L.popup({"maxWidth": "100%"});

        
            var html_d6519e2c249c493186d246516474a795 = $(`<div id="html_d6519e2c249c493186d246516474a795" style="width: 100.0%; height: 100.0%;">Brunei <img src="http://localhost:8000/flag_resources/img/worldflags/bn.png "width="140px" ></div>`)[0];
            popup_722a0f55a3d74c9693713cd9e70970ea.setContent(html_d6519e2c249c493186d246516474a795);
        

        marker_c36f2f8c3d874aaab95f7644be0812fc.bindPopup(popup_722a0f55a3d74c9693713cd9e70970ea)
        ;

        
    
    
            var marker_1c7e1f701aac4f3cb9fdaf501ca637e4 = L.marker(
                [-16.290154, -63.588653],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_929cf05446f24d4f8ed03083772a5423 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1c7e1f701aac4f3cb9fdaf501ca637e4.setIcon(icon_929cf05446f24d4f8ed03083772a5423);
        
    
        var popup_68a9216b0095439da0caf44aed55ffa9 = L.popup({"maxWidth": "100%"});

        
            var html_40f7fdd3942e446fa66c5ca3cc31de16 = $(`<div id="html_40f7fdd3942e446fa66c5ca3cc31de16" style="width: 100.0%; height: 100.0%;">Bolivia <img src="http://localhost:8000/flag_resources/img/worldflags/bo.png "width="140px" ></div>`)[0];
            popup_68a9216b0095439da0caf44aed55ffa9.setContent(html_40f7fdd3942e446fa66c5ca3cc31de16);
        

        marker_1c7e1f701aac4f3cb9fdaf501ca637e4.bindPopup(popup_68a9216b0095439da0caf44aed55ffa9)
        ;

        
    
    
            var marker_ea945d5d45724b25a4e52b5b95c927d9 = L.marker(
                [-14.235004, -51.92528],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_7eebd89477f34f4a9c7fa30b47294433 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ea945d5d45724b25a4e52b5b95c927d9.setIcon(icon_7eebd89477f34f4a9c7fa30b47294433);
        
    
        var popup_aad4c48ccfb4426fb816b475ae5d453a = L.popup({"maxWidth": "100%"});

        
            var html_7943d2e42ae04143b04269d4df3bfafd = $(`<div id="html_7943d2e42ae04143b04269d4df3bfafd" style="width: 100.0%; height: 100.0%;">Brazil <img src="http://localhost:8000/flag_resources/img/worldflags/br.png "width="140px" ></div>`)[0];
            popup_aad4c48ccfb4426fb816b475ae5d453a.setContent(html_7943d2e42ae04143b04269d4df3bfafd);
        

        marker_ea945d5d45724b25a4e52b5b95c927d9.bindPopup(popup_aad4c48ccfb4426fb816b475ae5d453a)
        ;

        
    
    
            var marker_23a6b850402a47dfa32e20859a995ece = L.marker(
                [25.03428, -77.39628],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_5aa88f1b011a4294a5bfe1ec27f2fdc3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_23a6b850402a47dfa32e20859a995ece.setIcon(icon_5aa88f1b011a4294a5bfe1ec27f2fdc3);
        
    
        var popup_afabe312e9e041e4995890baf94326f7 = L.popup({"maxWidth": "100%"});

        
            var html_5047e778a6144ed78e0ae9a331e1e4ac = $(`<div id="html_5047e778a6144ed78e0ae9a331e1e4ac" style="width: 100.0%; height: 100.0%;">Bahamas <img src="http://localhost:8000/flag_resources/img/worldflags/bs.png "width="140px" ></div>`)[0];
            popup_afabe312e9e041e4995890baf94326f7.setContent(html_5047e778a6144ed78e0ae9a331e1e4ac);
        

        marker_23a6b850402a47dfa32e20859a995ece.bindPopup(popup_afabe312e9e041e4995890baf94326f7)
        ;

        
    
    
            var marker_3cbf0b2d7c43460b97a5e6f9ba3098ca = L.marker(
                [27.514162, 90.433601],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ace061643ef344d1a594d6d22f3b6fe4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3cbf0b2d7c43460b97a5e6f9ba3098ca.setIcon(icon_ace061643ef344d1a594d6d22f3b6fe4);
        
    
        var popup_50471f0e74774866934405a727761308 = L.popup({"maxWidth": "100%"});

        
            var html_4537e2c48b194cbcb0241316ce8c586c = $(`<div id="html_4537e2c48b194cbcb0241316ce8c586c" style="width: 100.0%; height: 100.0%;">Bhutan <img src="http://localhost:8000/flag_resources/img/worldflags/bt.png "width="140px" ></div>`)[0];
            popup_50471f0e74774866934405a727761308.setContent(html_4537e2c48b194cbcb0241316ce8c586c);
        

        marker_3cbf0b2d7c43460b97a5e6f9ba3098ca.bindPopup(popup_50471f0e74774866934405a727761308)
        ;

        
    
    
            var marker_b7074c6e875344f98396a39665eaaae0 = L.marker(
                [-54.423199, 3.4131940000000003],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_036bf68beb1347c884f7411226674650 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b7074c6e875344f98396a39665eaaae0.setIcon(icon_036bf68beb1347c884f7411226674650);
        
    
        var popup_11e04660714a4397acc578c36d181216 = L.popup({"maxWidth": "100%"});

        
            var html_c4c6486ca59645e2ad9f8f3dc3953b88 = $(`<div id="html_c4c6486ca59645e2ad9f8f3dc3953b88" style="width: 100.0%; height: 100.0%;">Bouvet Island <img src="http://localhost:8000/flag_resources/img/worldflags/bv.png "width="140px" ></div>`)[0];
            popup_11e04660714a4397acc578c36d181216.setContent(html_c4c6486ca59645e2ad9f8f3dc3953b88);
        

        marker_b7074c6e875344f98396a39665eaaae0.bindPopup(popup_11e04660714a4397acc578c36d181216)
        ;

        
    
    
            var marker_fce398ea374545f59898fd488c760fdc = L.marker(
                [-22.328474, 24.684866],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e347f501ccb646e08729567344c74d12 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fce398ea374545f59898fd488c760fdc.setIcon(icon_e347f501ccb646e08729567344c74d12);
        
    
        var popup_f1decb73c481416eb2594b42d7a360d0 = L.popup({"maxWidth": "100%"});

        
            var html_242e4fe4e3e64edab3d4578756bd02cc = $(`<div id="html_242e4fe4e3e64edab3d4578756bd02cc" style="width: 100.0%; height: 100.0%;">Botswana <img src="http://localhost:8000/flag_resources/img/worldflags/bw.png "width="140px" ></div>`)[0];
            popup_f1decb73c481416eb2594b42d7a360d0.setContent(html_242e4fe4e3e64edab3d4578756bd02cc);
        

        marker_fce398ea374545f59898fd488c760fdc.bindPopup(popup_f1decb73c481416eb2594b42d7a360d0)
        ;

        
    
    
            var marker_a8cb23074fda4430887b4bf7731d8780 = L.marker(
                [53.709807, 27.953389],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_869767695e0549af835a620d46e696a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a8cb23074fda4430887b4bf7731d8780.setIcon(icon_869767695e0549af835a620d46e696a5);
        
    
        var popup_eb203efa57434e989b1ea38d2dbf9d2c = L.popup({"maxWidth": "100%"});

        
            var html_cdf86fdaeff54a0d9f6f4a4ab48d6996 = $(`<div id="html_cdf86fdaeff54a0d9f6f4a4ab48d6996" style="width: 100.0%; height: 100.0%;">Belarus <img src="http://localhost:8000/flag_resources/img/worldflags/by.png "width="140px" ></div>`)[0];
            popup_eb203efa57434e989b1ea38d2dbf9d2c.setContent(html_cdf86fdaeff54a0d9f6f4a4ab48d6996);
        

        marker_a8cb23074fda4430887b4bf7731d8780.bindPopup(popup_eb203efa57434e989b1ea38d2dbf9d2c)
        ;

        
    
    
            var marker_7e2e668b048b4cf3ba0beb6affe9dfa1 = L.marker(
                [17.189877, -88.49765],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_0f482ac45c3f4c8db04c618643aeead3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7e2e668b048b4cf3ba0beb6affe9dfa1.setIcon(icon_0f482ac45c3f4c8db04c618643aeead3);
        
    
        var popup_2549a37de1a94357b1fdd1aa81be820a = L.popup({"maxWidth": "100%"});

        
            var html_38e38d0204ce40a9b0610421a37799a3 = $(`<div id="html_38e38d0204ce40a9b0610421a37799a3" style="width: 100.0%; height: 100.0%;">Belize <img src="http://localhost:8000/flag_resources/img/worldflags/bz.png "width="140px" ></div>`)[0];
            popup_2549a37de1a94357b1fdd1aa81be820a.setContent(html_38e38d0204ce40a9b0610421a37799a3);
        

        marker_7e2e668b048b4cf3ba0beb6affe9dfa1.bindPopup(popup_2549a37de1a94357b1fdd1aa81be820a)
        ;

        
    
    
            var marker_818be299092946a683e6a96bce202260 = L.marker(
                [56.130366, -106.34677099999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_7d96c9ccc12248a2bc20fbd35e70eb1b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_818be299092946a683e6a96bce202260.setIcon(icon_7d96c9ccc12248a2bc20fbd35e70eb1b);
        
    
        var popup_80322aece8ca4a928962b3b642241677 = L.popup({"maxWidth": "100%"});

        
            var html_abd77527e1024841917b69cce7e3bf18 = $(`<div id="html_abd77527e1024841917b69cce7e3bf18" style="width: 100.0%; height: 100.0%;">Canada <img src="http://localhost:8000/flag_resources/img/worldflags/ca.png "width="140px" ></div>`)[0];
            popup_80322aece8ca4a928962b3b642241677.setContent(html_abd77527e1024841917b69cce7e3bf18);
        

        marker_818be299092946a683e6a96bce202260.bindPopup(popup_80322aece8ca4a928962b3b642241677)
        ;

        
    
    
            var marker_6f6f32c8f8cc46b3b8f3471bfb9f6c0e = L.marker(
                [-12.164164999999999, 96.870956],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1c2a3d17d43c4eb49c6f05129a1306d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6f6f32c8f8cc46b3b8f3471bfb9f6c0e.setIcon(icon_1c2a3d17d43c4eb49c6f05129a1306d4);
        
    
        var popup_db81d9865dcf4ba9b66d3f276c490328 = L.popup({"maxWidth": "100%"});

        
            var html_26a8433725bb49248dcb653f24ecaeee = $(`<div id="html_26a8433725bb49248dcb653f24ecaeee" style="width: 100.0%; height: 100.0%;">Cocos [Keeling] Islands <img src="http://localhost:8000/flag_resources/img/worldflags/cc.png "width="140px" ></div>`)[0];
            popup_db81d9865dcf4ba9b66d3f276c490328.setContent(html_26a8433725bb49248dcb653f24ecaeee);
        

        marker_6f6f32c8f8cc46b3b8f3471bfb9f6c0e.bindPopup(popup_db81d9865dcf4ba9b66d3f276c490328)
        ;

        
    
    
            var marker_0942acdd74a24d07be42deec9b9e409c = L.marker(
                [-4.038333000000001, 21.758664000000003],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4a349276e7964e4cad8f893231ddeada = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0942acdd74a24d07be42deec9b9e409c.setIcon(icon_4a349276e7964e4cad8f893231ddeada);
        
    
        var popup_9c6e16b557bd411c99a48ed8bbba9e4b = L.popup({"maxWidth": "100%"});

        
            var html_bb51a58ede0241b9b6aae7d301d88795 = $(`<div id="html_bb51a58ede0241b9b6aae7d301d88795" style="width: 100.0%; height: 100.0%;">Congo [DRC] <img src="http://localhost:8000/flag_resources/img/worldflags/cd.png "width="140px" ></div>`)[0];
            popup_9c6e16b557bd411c99a48ed8bbba9e4b.setContent(html_bb51a58ede0241b9b6aae7d301d88795);
        

        marker_0942acdd74a24d07be42deec9b9e409c.bindPopup(popup_9c6e16b557bd411c99a48ed8bbba9e4b)
        ;

        
    
    
            var marker_7276d72211ac43129962ee47b1fe98ad = L.marker(
                [6.611111, 20.939444],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_614bc4e59f56423a8cfb54620279a99f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7276d72211ac43129962ee47b1fe98ad.setIcon(icon_614bc4e59f56423a8cfb54620279a99f);
        
    
        var popup_01606cb94af1445bb5060c57e0e7ba3a = L.popup({"maxWidth": "100%"});

        
            var html_eafe46ebe756422996f0ae700339d689 = $(`<div id="html_eafe46ebe756422996f0ae700339d689" style="width: 100.0%; height: 100.0%;">Central African Republic <img src="http://localhost:8000/flag_resources/img/worldflags/cf.png "width="140px" ></div>`)[0];
            popup_01606cb94af1445bb5060c57e0e7ba3a.setContent(html_eafe46ebe756422996f0ae700339d689);
        

        marker_7276d72211ac43129962ee47b1fe98ad.bindPopup(popup_01606cb94af1445bb5060c57e0e7ba3a)
        ;

        
    
    
            var marker_d1c337c0f4114f96a2aeb58b1a51a34a = L.marker(
                [-0.228021, 15.827658999999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_65f90e1b42cf4f7f9e4728e98aba19e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d1c337c0f4114f96a2aeb58b1a51a34a.setIcon(icon_65f90e1b42cf4f7f9e4728e98aba19e9);
        
    
        var popup_3d38700336014f7c8d455f893a73188d = L.popup({"maxWidth": "100%"});

        
            var html_ab2c7a391cc34fcabe9883edbee7f66f = $(`<div id="html_ab2c7a391cc34fcabe9883edbee7f66f" style="width: 100.0%; height: 100.0%;">Congo [Republic] <img src="http://localhost:8000/flag_resources/img/worldflags/cg.png "width="140px" ></div>`)[0];
            popup_3d38700336014f7c8d455f893a73188d.setContent(html_ab2c7a391cc34fcabe9883edbee7f66f);
        

        marker_d1c337c0f4114f96a2aeb58b1a51a34a.bindPopup(popup_3d38700336014f7c8d455f893a73188d)
        ;

        
    
    
            var marker_606566c5a7e3455889342cadc8ce3f0d = L.marker(
                [46.818188, 8.227511999999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_36c25b1da80744739d2ee1aeb908fdaf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_606566c5a7e3455889342cadc8ce3f0d.setIcon(icon_36c25b1da80744739d2ee1aeb908fdaf);
        
    
        var popup_6f23c3f6f7be44f58b75bb658d7bc182 = L.popup({"maxWidth": "100%"});

        
            var html_ea9c408a246e4200b016643bc1294081 = $(`<div id="html_ea9c408a246e4200b016643bc1294081" style="width: 100.0%; height: 100.0%;">Switzerland <img src="http://localhost:8000/flag_resources/img/worldflags/ch.png "width="140px" ></div>`)[0];
            popup_6f23c3f6f7be44f58b75bb658d7bc182.setContent(html_ea9c408a246e4200b016643bc1294081);
        

        marker_606566c5a7e3455889342cadc8ce3f0d.bindPopup(popup_6f23c3f6f7be44f58b75bb658d7bc182)
        ;

        
    
    
            var marker_123145b196d14ff8893062ce1d415637 = L.marker(
                [7.539989, -5.54708],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_72f82c6efe144c3db68cf731eace6112 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_123145b196d14ff8893062ce1d415637.setIcon(icon_72f82c6efe144c3db68cf731eace6112);
        
    
        var popup_14a76adf34c2444ebeb39716f00eb7c1 = L.popup({"maxWidth": "100%"});

        
            var html_7418f412f1b24d92a5b5d28123446338 = $(`<div id="html_7418f412f1b24d92a5b5d28123446338" style="width: 100.0%; height: 100.0%;">CÃ´te d'Ivoire <img src="http://localhost:8000/flag_resources/img/worldflags/ci.png "width="140px" ></div>`)[0];
            popup_14a76adf34c2444ebeb39716f00eb7c1.setContent(html_7418f412f1b24d92a5b5d28123446338);
        

        marker_123145b196d14ff8893062ce1d415637.bindPopup(popup_14a76adf34c2444ebeb39716f00eb7c1)
        ;

        
    
    
            var marker_cbd1c0a0181d4198955690b20d651be2 = L.marker(
                [-21.236735999999997, -159.777671],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_bbd460421ee14ae58e3cf903b4ad6870 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cbd1c0a0181d4198955690b20d651be2.setIcon(icon_bbd460421ee14ae58e3cf903b4ad6870);
        
    
        var popup_edd241ab367a44b98c50114e5437a935 = L.popup({"maxWidth": "100%"});

        
            var html_36d1cf03192b47318ac835da90916c83 = $(`<div id="html_36d1cf03192b47318ac835da90916c83" style="width: 100.0%; height: 100.0%;">Cook Islands <img src="http://localhost:8000/flag_resources/img/worldflags/ck.png "width="140px" ></div>`)[0];
            popup_edd241ab367a44b98c50114e5437a935.setContent(html_36d1cf03192b47318ac835da90916c83);
        

        marker_cbd1c0a0181d4198955690b20d651be2.bindPopup(popup_edd241ab367a44b98c50114e5437a935)
        ;

        
    
    
            var marker_937293fd6c764c6494d512ef8f063f7f = L.marker(
                [-35.675146999999996, -71.542969],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_8ae8d85be4234c769738faa51d49d964 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_937293fd6c764c6494d512ef8f063f7f.setIcon(icon_8ae8d85be4234c769738faa51d49d964);
        
    
        var popup_91f07f27eb124c0f92252b74576cd4d1 = L.popup({"maxWidth": "100%"});

        
            var html_455cb0aee6e44cdca51812d8291c7e9a = $(`<div id="html_455cb0aee6e44cdca51812d8291c7e9a" style="width: 100.0%; height: 100.0%;">Chile <img src="http://localhost:8000/flag_resources/img/worldflags/cl.png "width="140px" ></div>`)[0];
            popup_91f07f27eb124c0f92252b74576cd4d1.setContent(html_455cb0aee6e44cdca51812d8291c7e9a);
        

        marker_937293fd6c764c6494d512ef8f063f7f.bindPopup(popup_91f07f27eb124c0f92252b74576cd4d1)
        ;

        
    
    
            var marker_9e5a077ea5c34d358c143bb7fc673014 = L.marker(
                [7.369722, 12.354722],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ce89ed000eff455aa77b5fcd1916771f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9e5a077ea5c34d358c143bb7fc673014.setIcon(icon_ce89ed000eff455aa77b5fcd1916771f);
        
    
        var popup_ca2722fac9a74a58bd0ae0ccd73804a5 = L.popup({"maxWidth": "100%"});

        
            var html_fca53af962184eb8b691ae4caac8f693 = $(`<div id="html_fca53af962184eb8b691ae4caac8f693" style="width: 100.0%; height: 100.0%;">Cameroon <img src="http://localhost:8000/flag_resources/img/worldflags/cm.png "width="140px" ></div>`)[0];
            popup_ca2722fac9a74a58bd0ae0ccd73804a5.setContent(html_fca53af962184eb8b691ae4caac8f693);
        

        marker_9e5a077ea5c34d358c143bb7fc673014.bindPopup(popup_ca2722fac9a74a58bd0ae0ccd73804a5)
        ;

        
    
    
            var marker_07f9b30c0ebd4de68d1ebfeab0d2a492 = L.marker(
                [35.86166, 104.195397],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_83935e8233924d1c8a93d4bb9eecaced = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_07f9b30c0ebd4de68d1ebfeab0d2a492.setIcon(icon_83935e8233924d1c8a93d4bb9eecaced);
        
    
        var popup_76fb628937774c83887040f5d8631b2f = L.popup({"maxWidth": "100%"});

        
            var html_b389dc1a99754891adcbd5b7f4a75515 = $(`<div id="html_b389dc1a99754891adcbd5b7f4a75515" style="width: 100.0%; height: 100.0%;">China <img src="http://localhost:8000/flag_resources/img/worldflags/cn.png "width="140px" ></div>`)[0];
            popup_76fb628937774c83887040f5d8631b2f.setContent(html_b389dc1a99754891adcbd5b7f4a75515);
        

        marker_07f9b30c0ebd4de68d1ebfeab0d2a492.bindPopup(popup_76fb628937774c83887040f5d8631b2f)
        ;

        
    
    
            var marker_a85e3a5e5d354ba78bd24d86b36acfcb = L.marker(
                [4.570868, -74.297333],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1289bdde228d4347ae9982b9135025aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a85e3a5e5d354ba78bd24d86b36acfcb.setIcon(icon_1289bdde228d4347ae9982b9135025aa);
        
    
        var popup_1168caeafa354574adf6ddf1fa9ed3e7 = L.popup({"maxWidth": "100%"});

        
            var html_bee1664b5e944ff4b10691e993bd0c62 = $(`<div id="html_bee1664b5e944ff4b10691e993bd0c62" style="width: 100.0%; height: 100.0%;">Colombia <img src="http://localhost:8000/flag_resources/img/worldflags/co.png "width="140px" ></div>`)[0];
            popup_1168caeafa354574adf6ddf1fa9ed3e7.setContent(html_bee1664b5e944ff4b10691e993bd0c62);
        

        marker_a85e3a5e5d354ba78bd24d86b36acfcb.bindPopup(popup_1168caeafa354574adf6ddf1fa9ed3e7)
        ;

        
    
    
            var marker_e341c85464da49c68b8ce0896bdc52c5 = L.marker(
                [9.748917, -83.753428],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b7cf475c17a54447822880b35228a994 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e341c85464da49c68b8ce0896bdc52c5.setIcon(icon_b7cf475c17a54447822880b35228a994);
        
    
        var popup_a957ce69380a4c8f841b7300d18e5a12 = L.popup({"maxWidth": "100%"});

        
            var html_9fc0bf5cbcf343f28799271405dbd400 = $(`<div id="html_9fc0bf5cbcf343f28799271405dbd400" style="width: 100.0%; height: 100.0%;">Costa Rica <img src="http://localhost:8000/flag_resources/img/worldflags/cr.png "width="140px" ></div>`)[0];
            popup_a957ce69380a4c8f841b7300d18e5a12.setContent(html_9fc0bf5cbcf343f28799271405dbd400);
        

        marker_e341c85464da49c68b8ce0896bdc52c5.bindPopup(popup_a957ce69380a4c8f841b7300d18e5a12)
        ;

        
    
    
            var marker_e1e83c9936a5400eb5e8ef957a633215 = L.marker(
                [21.521757, -77.78116700000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4454e56e7aad4090b73b96a573a2f1e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e1e83c9936a5400eb5e8ef957a633215.setIcon(icon_4454e56e7aad4090b73b96a573a2f1e6);
        
    
        var popup_3d6cc954298b48a8bba6e69504baf2c7 = L.popup({"maxWidth": "100%"});

        
            var html_6cd8a885df8c4d8aa01c2b3456e9df0b = $(`<div id="html_6cd8a885df8c4d8aa01c2b3456e9df0b" style="width: 100.0%; height: 100.0%;">Cuba <img src="http://localhost:8000/flag_resources/img/worldflags/cu.png "width="140px" ></div>`)[0];
            popup_3d6cc954298b48a8bba6e69504baf2c7.setContent(html_6cd8a885df8c4d8aa01c2b3456e9df0b);
        

        marker_e1e83c9936a5400eb5e8ef957a633215.bindPopup(popup_3d6cc954298b48a8bba6e69504baf2c7)
        ;

        
    
    
            var marker_901d18f1709d4c65a233e56fc33c6f7a = L.marker(
                [16.002082, -24.013197],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_8d5ddc9a119d4232bf3d538b3b65d218 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_901d18f1709d4c65a233e56fc33c6f7a.setIcon(icon_8d5ddc9a119d4232bf3d538b3b65d218);
        
    
        var popup_63f219f87c4e41889133bb5ef42bc03b = L.popup({"maxWidth": "100%"});

        
            var html_f6026724e8d845c38651808816211bb1 = $(`<div id="html_f6026724e8d845c38651808816211bb1" style="width: 100.0%; height: 100.0%;">Cape Verde <img src="http://localhost:8000/flag_resources/img/worldflags/cv.png "width="140px" ></div>`)[0];
            popup_63f219f87c4e41889133bb5ef42bc03b.setContent(html_f6026724e8d845c38651808816211bb1);
        

        marker_901d18f1709d4c65a233e56fc33c6f7a.bindPopup(popup_63f219f87c4e41889133bb5ef42bc03b)
        ;

        
    
    
            var marker_6f5bd1e81eaa4c2aaabff90da0c9d312 = L.marker(
                [-10.447525, 105.690449],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_a3a3a9d0647a4cacb965a980f638c65a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6f5bd1e81eaa4c2aaabff90da0c9d312.setIcon(icon_a3a3a9d0647a4cacb965a980f638c65a);
        
    
        var popup_398cdaeb87cb4b948344f1bc9ec604b6 = L.popup({"maxWidth": "100%"});

        
            var html_6783b5816c43428987f7da3255d98996 = $(`<div id="html_6783b5816c43428987f7da3255d98996" style="width: 100.0%; height: 100.0%;">Christmas Island <img src="http://localhost:8000/flag_resources/img/worldflags/cx.png "width="140px" ></div>`)[0];
            popup_398cdaeb87cb4b948344f1bc9ec604b6.setContent(html_6783b5816c43428987f7da3255d98996);
        

        marker_6f5bd1e81eaa4c2aaabff90da0c9d312.bindPopup(popup_398cdaeb87cb4b948344f1bc9ec604b6)
        ;

        
    
    
            var marker_f5dc308d6e3846ef93bca6a635f8f7d2 = L.marker(
                [35.126413, 33.429859],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1d884c8435604ae39de0503e4e012e4c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f5dc308d6e3846ef93bca6a635f8f7d2.setIcon(icon_1d884c8435604ae39de0503e4e012e4c);
        
    
        var popup_c8d01e8c23bf4743a6b52d7570fe54f7 = L.popup({"maxWidth": "100%"});

        
            var html_f5965ac35c1f4ef3aafb49537d788ef8 = $(`<div id="html_f5965ac35c1f4ef3aafb49537d788ef8" style="width: 100.0%; height: 100.0%;">Cyprus <img src="http://localhost:8000/flag_resources/img/worldflags/cy.png "width="140px" ></div>`)[0];
            popup_c8d01e8c23bf4743a6b52d7570fe54f7.setContent(html_f5965ac35c1f4ef3aafb49537d788ef8);
        

        marker_f5dc308d6e3846ef93bca6a635f8f7d2.bindPopup(popup_c8d01e8c23bf4743a6b52d7570fe54f7)
        ;

        
    
    
            var marker_e431835324b14722866c2071781546b1 = L.marker(
                [49.817492, 15.472961999999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_fd797e321ff74d309c76811333f048a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e431835324b14722866c2071781546b1.setIcon(icon_fd797e321ff74d309c76811333f048a4);
        
    
        var popup_46fe3e236c5e4ed792821fbedc88bfd2 = L.popup({"maxWidth": "100%"});

        
            var html_9bd02808bac440719fff5b71aa5f65ad = $(`<div id="html_9bd02808bac440719fff5b71aa5f65ad" style="width: 100.0%; height: 100.0%;">Czech Republic <img src="http://localhost:8000/flag_resources/img/worldflags/cz.png "width="140px" ></div>`)[0];
            popup_46fe3e236c5e4ed792821fbedc88bfd2.setContent(html_9bd02808bac440719fff5b71aa5f65ad);
        

        marker_e431835324b14722866c2071781546b1.bindPopup(popup_46fe3e236c5e4ed792821fbedc88bfd2)
        ;

        
    
    
            var marker_77958fbbbdf34a3298bb03df27278238 = L.marker(
                [51.165690999999995, 10.451526],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_288a97c323dc45a1a27442a9bdebdcee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_77958fbbbdf34a3298bb03df27278238.setIcon(icon_288a97c323dc45a1a27442a9bdebdcee);
        
    
        var popup_336fd06c61db4454a9ef79a3440f644d = L.popup({"maxWidth": "100%"});

        
            var html_5e8f00e9e0c04813b4ab60e6e6833064 = $(`<div id="html_5e8f00e9e0c04813b4ab60e6e6833064" style="width: 100.0%; height: 100.0%;">Germany <img src="http://localhost:8000/flag_resources/img/worldflags/de.png "width="140px" ></div>`)[0];
            popup_336fd06c61db4454a9ef79a3440f644d.setContent(html_5e8f00e9e0c04813b4ab60e6e6833064);
        

        marker_77958fbbbdf34a3298bb03df27278238.bindPopup(popup_336fd06c61db4454a9ef79a3440f644d)
        ;

        
    
    
            var marker_febd686f6b5e40d1981d5dd231a4ebec = L.marker(
                [11.825138, 42.590275],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_aa01f99755394b7a8b34737a5de9a4cd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_febd686f6b5e40d1981d5dd231a4ebec.setIcon(icon_aa01f99755394b7a8b34737a5de9a4cd);
        
    
        var popup_4eda5a6bda8843649a37903be276e483 = L.popup({"maxWidth": "100%"});

        
            var html_e719086e6531438cbc2c3a412537697a = $(`<div id="html_e719086e6531438cbc2c3a412537697a" style="width: 100.0%; height: 100.0%;">Djibouti <img src="http://localhost:8000/flag_resources/img/worldflags/dj.png "width="140px" ></div>`)[0];
            popup_4eda5a6bda8843649a37903be276e483.setContent(html_e719086e6531438cbc2c3a412537697a);
        

        marker_febd686f6b5e40d1981d5dd231a4ebec.bindPopup(popup_4eda5a6bda8843649a37903be276e483)
        ;

        
    
    
            var marker_40b117f77de94e7583b118c22df70d83 = L.marker(
                [56.26392, 9.501785],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_582f8ae4544c475ca4fca5e54840e194 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_40b117f77de94e7583b118c22df70d83.setIcon(icon_582f8ae4544c475ca4fca5e54840e194);
        
    
        var popup_88f3f82d812b4191aed888cb0aad8509 = L.popup({"maxWidth": "100%"});

        
            var html_0b24af1cda6f4906b61c20c8e442a97f = $(`<div id="html_0b24af1cda6f4906b61c20c8e442a97f" style="width: 100.0%; height: 100.0%;">Denmark <img src="http://localhost:8000/flag_resources/img/worldflags/dk.png "width="140px" ></div>`)[0];
            popup_88f3f82d812b4191aed888cb0aad8509.setContent(html_0b24af1cda6f4906b61c20c8e442a97f);
        

        marker_40b117f77de94e7583b118c22df70d83.bindPopup(popup_88f3f82d812b4191aed888cb0aad8509)
        ;

        
    
    
            var marker_574c5840bb504113b99689b34d2bc6b4 = L.marker(
                [15.414999, -61.370976],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_19ae251ffe5343fabd53d383f2f86317 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_574c5840bb504113b99689b34d2bc6b4.setIcon(icon_19ae251ffe5343fabd53d383f2f86317);
        
    
        var popup_f2dab90124184d36bb61fdad7bb83f68 = L.popup({"maxWidth": "100%"});

        
            var html_fb2a273a48144345bb29bd0665cc596a = $(`<div id="html_fb2a273a48144345bb29bd0665cc596a" style="width: 100.0%; height: 100.0%;">Dominica <img src="http://localhost:8000/flag_resources/img/worldflags/dm.png "width="140px" ></div>`)[0];
            popup_f2dab90124184d36bb61fdad7bb83f68.setContent(html_fb2a273a48144345bb29bd0665cc596a);
        

        marker_574c5840bb504113b99689b34d2bc6b4.bindPopup(popup_f2dab90124184d36bb61fdad7bb83f68)
        ;

        
    
    
            var marker_108fb0c97670413783d7d910b95bab65 = L.marker(
                [18.735692999999998, -70.162651],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_0daa2affadfd4c94a6c52e0232531f90 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_108fb0c97670413783d7d910b95bab65.setIcon(icon_0daa2affadfd4c94a6c52e0232531f90);
        
    
        var popup_60f388c4e72f493797089702ed16957c = L.popup({"maxWidth": "100%"});

        
            var html_f92896cc872e45f1b8541b3ad76fdcc7 = $(`<div id="html_f92896cc872e45f1b8541b3ad76fdcc7" style="width: 100.0%; height: 100.0%;">Dominican Republic <img src="http://localhost:8000/flag_resources/img/worldflags/do.png "width="140px" ></div>`)[0];
            popup_60f388c4e72f493797089702ed16957c.setContent(html_f92896cc872e45f1b8541b3ad76fdcc7);
        

        marker_108fb0c97670413783d7d910b95bab65.bindPopup(popup_60f388c4e72f493797089702ed16957c)
        ;

        
    
    
            var marker_f8a915ebb1ba42ef9e15ecf59913a509 = L.marker(
                [28.033886, 1.6596259999999998],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_803249629a6a4b89a2286ca1dbcd6f01 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f8a915ebb1ba42ef9e15ecf59913a509.setIcon(icon_803249629a6a4b89a2286ca1dbcd6f01);
        
    
        var popup_56f38df7ea6147328394eef741797996 = L.popup({"maxWidth": "100%"});

        
            var html_e969b74459da464198e9571d14725203 = $(`<div id="html_e969b74459da464198e9571d14725203" style="width: 100.0%; height: 100.0%;">Algeria <img src="http://localhost:8000/flag_resources/img/worldflags/dz.png "width="140px" ></div>`)[0];
            popup_56f38df7ea6147328394eef741797996.setContent(html_e969b74459da464198e9571d14725203);
        

        marker_f8a915ebb1ba42ef9e15ecf59913a509.bindPopup(popup_56f38df7ea6147328394eef741797996)
        ;

        
    
    
            var marker_1fdfbd6ddd4a4906adeb73578d176005 = L.marker(
                [-1.8312389999999998, -78.183406],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_806ce216800849378997de792e246e3d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1fdfbd6ddd4a4906adeb73578d176005.setIcon(icon_806ce216800849378997de792e246e3d);
        
    
        var popup_7d4520d4285546969cd197110c6aabee = L.popup({"maxWidth": "100%"});

        
            var html_f5479b4b301e42e9ae400a0e52c377ee = $(`<div id="html_f5479b4b301e42e9ae400a0e52c377ee" style="width: 100.0%; height: 100.0%;">Ecuador <img src="http://localhost:8000/flag_resources/img/worldflags/ec.png "width="140px" ></div>`)[0];
            popup_7d4520d4285546969cd197110c6aabee.setContent(html_f5479b4b301e42e9ae400a0e52c377ee);
        

        marker_1fdfbd6ddd4a4906adeb73578d176005.bindPopup(popup_7d4520d4285546969cd197110c6aabee)
        ;

        
    
    
            var marker_f74adebd1c0e427f9da2f3651917dafa = L.marker(
                [58.595271999999994, 25.013607],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_9afe86632e1f443d8997ab78fbf5bcd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f74adebd1c0e427f9da2f3651917dafa.setIcon(icon_9afe86632e1f443d8997ab78fbf5bcd7);
        
    
        var popup_40b97284d30d42df9b0457464ed8afe1 = L.popup({"maxWidth": "100%"});

        
            var html_c6ff51ad4127497886c7e46421273788 = $(`<div id="html_c6ff51ad4127497886c7e46421273788" style="width: 100.0%; height: 100.0%;">Estonia <img src="http://localhost:8000/flag_resources/img/worldflags/ee.png "width="140px" ></div>`)[0];
            popup_40b97284d30d42df9b0457464ed8afe1.setContent(html_c6ff51ad4127497886c7e46421273788);
        

        marker_f74adebd1c0e427f9da2f3651917dafa.bindPopup(popup_40b97284d30d42df9b0457464ed8afe1)
        ;

        
    
    
            var marker_5c15800ae63343288cf3436b621d3df9 = L.marker(
                [26.820553000000004, 30.802497999999996],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1db05e0a38d24fe89e13d149e1382396 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5c15800ae63343288cf3436b621d3df9.setIcon(icon_1db05e0a38d24fe89e13d149e1382396);
        
    
        var popup_9e2fec4c6b994804accac0ebc741824e = L.popup({"maxWidth": "100%"});

        
            var html_79172a36fa5c46ceaeeb4358a3da788b = $(`<div id="html_79172a36fa5c46ceaeeb4358a3da788b" style="width: 100.0%; height: 100.0%;">Egypt <img src="http://localhost:8000/flag_resources/img/worldflags/eg.png "width="140px" ></div>`)[0];
            popup_9e2fec4c6b994804accac0ebc741824e.setContent(html_79172a36fa5c46ceaeeb4358a3da788b);
        

        marker_5c15800ae63343288cf3436b621d3df9.bindPopup(popup_9e2fec4c6b994804accac0ebc741824e)
        ;

        
    
    
            var marker_f11013d4fd664649832069eb2e06cd94 = L.marker(
                [24.215526999999998, -12.885834],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_a1e35dcce4eb45d3a9bf851bde220ff3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f11013d4fd664649832069eb2e06cd94.setIcon(icon_a1e35dcce4eb45d3a9bf851bde220ff3);
        
    
        var popup_be79a6ce1c054c3b884612b79697bfb9 = L.popup({"maxWidth": "100%"});

        
            var html_a9aeb343b44a4a6ea8ace54756f18ac6 = $(`<div id="html_a9aeb343b44a4a6ea8ace54756f18ac6" style="width: 100.0%; height: 100.0%;">Western Sahara <img src="http://localhost:8000/flag_resources/img/worldflags/eh.png "width="140px" ></div>`)[0];
            popup_be79a6ce1c054c3b884612b79697bfb9.setContent(html_a9aeb343b44a4a6ea8ace54756f18ac6);
        

        marker_f11013d4fd664649832069eb2e06cd94.bindPopup(popup_be79a6ce1c054c3b884612b79697bfb9)
        ;

        
    
    
            var marker_297d6156f31742d496bb2368d2d26131 = L.marker(
                [15.179383999999999, 39.782334000000006],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_49224156046444c581b5be53ac7249fb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_297d6156f31742d496bb2368d2d26131.setIcon(icon_49224156046444c581b5be53ac7249fb);
        
    
        var popup_ece7598456be4a508c0c47705c50fdbd = L.popup({"maxWidth": "100%"});

        
            var html_f5ce015ece944edab9025fa310c73bc6 = $(`<div id="html_f5ce015ece944edab9025fa310c73bc6" style="width: 100.0%; height: 100.0%;">Eritrea <img src="http://localhost:8000/flag_resources/img/worldflags/er.png "width="140px" ></div>`)[0];
            popup_ece7598456be4a508c0c47705c50fdbd.setContent(html_f5ce015ece944edab9025fa310c73bc6);
        

        marker_297d6156f31742d496bb2368d2d26131.bindPopup(popup_ece7598456be4a508c0c47705c50fdbd)
        ;

        
    
    
            var marker_9fcb761fe0ad4f33bb6367e7698d4f70 = L.marker(
                [40.463667, -3.7492199999999998],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_adad1c162f124587a8f0984e7ad18825 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9fcb761fe0ad4f33bb6367e7698d4f70.setIcon(icon_adad1c162f124587a8f0984e7ad18825);
        
    
        var popup_ebf0ae4e86f34e53951111e1b75c6151 = L.popup({"maxWidth": "100%"});

        
            var html_448d578515274c1cae6c1540ae87c21f = $(`<div id="html_448d578515274c1cae6c1540ae87c21f" style="width: 100.0%; height: 100.0%;">Spain <img src="http://localhost:8000/flag_resources/img/worldflags/es.png "width="140px" ></div>`)[0];
            popup_ebf0ae4e86f34e53951111e1b75c6151.setContent(html_448d578515274c1cae6c1540ae87c21f);
        

        marker_9fcb761fe0ad4f33bb6367e7698d4f70.bindPopup(popup_ebf0ae4e86f34e53951111e1b75c6151)
        ;

        
    
    
            var marker_f5b07cd16b044789b59a212de28b8cef = L.marker(
                [9.145, 40.489672999999996],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_8181c99a9c40482baa35bc88d1d97394 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f5b07cd16b044789b59a212de28b8cef.setIcon(icon_8181c99a9c40482baa35bc88d1d97394);
        
    
        var popup_02f1462dfe9e40a8b242716e427b9e9f = L.popup({"maxWidth": "100%"});

        
            var html_26b3751fa8ed44029491c38c0f54640c = $(`<div id="html_26b3751fa8ed44029491c38c0f54640c" style="width: 100.0%; height: 100.0%;">Ethiopia <img src="http://localhost:8000/flag_resources/img/worldflags/et.png "width="140px" ></div>`)[0];
            popup_02f1462dfe9e40a8b242716e427b9e9f.setContent(html_26b3751fa8ed44029491c38c0f54640c);
        

        marker_f5b07cd16b044789b59a212de28b8cef.bindPopup(popup_02f1462dfe9e40a8b242716e427b9e9f)
        ;

        
    
    
            var marker_a46613517fca442495730573f2fd70aa = L.marker(
                [61.92411, 25.748151],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_132e683b585945879de14a429bbbfcb7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a46613517fca442495730573f2fd70aa.setIcon(icon_132e683b585945879de14a429bbbfcb7);
        
    
        var popup_8b7c07f5098644bb854c84e40ec8a977 = L.popup({"maxWidth": "100%"});

        
            var html_f27d9b613f4e416ba535c10dcd6895a2 = $(`<div id="html_f27d9b613f4e416ba535c10dcd6895a2" style="width: 100.0%; height: 100.0%;">Finland <img src="http://localhost:8000/flag_resources/img/worldflags/fi.png "width="140px" ></div>`)[0];
            popup_8b7c07f5098644bb854c84e40ec8a977.setContent(html_f27d9b613f4e416ba535c10dcd6895a2);
        

        marker_a46613517fca442495730573f2fd70aa.bindPopup(popup_8b7c07f5098644bb854c84e40ec8a977)
        ;

        
    
    
            var marker_6ff640c0a63a47dd95bfad7858b9f887 = L.marker(
                [-16.578193, 179.414413],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_07f028175ae24b7ebda86cdd3404eba4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6ff640c0a63a47dd95bfad7858b9f887.setIcon(icon_07f028175ae24b7ebda86cdd3404eba4);
        
    
        var popup_05629457c7cb4430815078925f3efd7f = L.popup({"maxWidth": "100%"});

        
            var html_efec1daf37924b31a53f1462d06b74c8 = $(`<div id="html_efec1daf37924b31a53f1462d06b74c8" style="width: 100.0%; height: 100.0%;">Fiji <img src="http://localhost:8000/flag_resources/img/worldflags/fj.png "width="140px" ></div>`)[0];
            popup_05629457c7cb4430815078925f3efd7f.setContent(html_efec1daf37924b31a53f1462d06b74c8);
        

        marker_6ff640c0a63a47dd95bfad7858b9f887.bindPopup(popup_05629457c7cb4430815078925f3efd7f)
        ;

        
    
    
            var marker_0f24f6311dc346468c28d0089de6be7d = L.marker(
                [-51.796253, -59.523613],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f6c6a08ab71d4d85ae55fee15a8724de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0f24f6311dc346468c28d0089de6be7d.setIcon(icon_f6c6a08ab71d4d85ae55fee15a8724de);
        
    
        var popup_d785e42edf4f421eba45417ce1f9c901 = L.popup({"maxWidth": "100%"});

        
            var html_2a66523652a3406c94a6ff55947609dc = $(`<div id="html_2a66523652a3406c94a6ff55947609dc" style="width: 100.0%; height: 100.0%;">Falkland Islands [Islas Malvinas] <img src="http://localhost:8000/flag_resources/img/worldflags/fk.png "width="140px" ></div>`)[0];
            popup_d785e42edf4f421eba45417ce1f9c901.setContent(html_2a66523652a3406c94a6ff55947609dc);
        

        marker_0f24f6311dc346468c28d0089de6be7d.bindPopup(popup_d785e42edf4f421eba45417ce1f9c901)
        ;

        
    
    
            var marker_30d0fd5025c04abca6e176cb9da6fc17 = L.marker(
                [7.425553999999999, 150.550812],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_68ac5b1fe279413d883745c44c9851a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_30d0fd5025c04abca6e176cb9da6fc17.setIcon(icon_68ac5b1fe279413d883745c44c9851a0);
        
    
        var popup_1a0bb144861d4ab891298f7803e16901 = L.popup({"maxWidth": "100%"});

        
            var html_ca94985e55f045dcab068036f0b2954c = $(`<div id="html_ca94985e55f045dcab068036f0b2954c" style="width: 100.0%; height: 100.0%;">Micronesia <img src="http://localhost:8000/flag_resources/img/worldflags/fm.png "width="140px" ></div>`)[0];
            popup_1a0bb144861d4ab891298f7803e16901.setContent(html_ca94985e55f045dcab068036f0b2954c);
        

        marker_30d0fd5025c04abca6e176cb9da6fc17.bindPopup(popup_1a0bb144861d4ab891298f7803e16901)
        ;

        
    
    
            var marker_7aaa572b68c647d78090b7ed19256384 = L.marker(
                [61.892635, -6.9118059999999995],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_6f8569bccd8c455aa5f6e54c16955579 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7aaa572b68c647d78090b7ed19256384.setIcon(icon_6f8569bccd8c455aa5f6e54c16955579);
        
    
        var popup_fc2861b8fd714ed0aff5ff16b66057f7 = L.popup({"maxWidth": "100%"});

        
            var html_35d5df31eaa145baaddb0f83be0a78ad = $(`<div id="html_35d5df31eaa145baaddb0f83be0a78ad" style="width: 100.0%; height: 100.0%;">Faroe Islands <img src="http://localhost:8000/flag_resources/img/worldflags/fo.png "width="140px" ></div>`)[0];
            popup_fc2861b8fd714ed0aff5ff16b66057f7.setContent(html_35d5df31eaa145baaddb0f83be0a78ad);
        

        marker_7aaa572b68c647d78090b7ed19256384.bindPopup(popup_fc2861b8fd714ed0aff5ff16b66057f7)
        ;

        
    
    
            var marker_10bc74637a1d4b249b2624a117b51046 = L.marker(
                [46.227638, 2.213749],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_079c900ca8c044f395fbf9926de061d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_10bc74637a1d4b249b2624a117b51046.setIcon(icon_079c900ca8c044f395fbf9926de061d3);
        
    
        var popup_6e2cbb04594c4439b4fb1ca307f24a96 = L.popup({"maxWidth": "100%"});

        
            var html_268a4a7093c44f82b967f147579e20b4 = $(`<div id="html_268a4a7093c44f82b967f147579e20b4" style="width: 100.0%; height: 100.0%;">France <img src="http://localhost:8000/flag_resources/img/worldflags/fr.png "width="140px" ></div>`)[0];
            popup_6e2cbb04594c4439b4fb1ca307f24a96.setContent(html_268a4a7093c44f82b967f147579e20b4);
        

        marker_10bc74637a1d4b249b2624a117b51046.bindPopup(popup_6e2cbb04594c4439b4fb1ca307f24a96)
        ;

        
    
    
            var marker_dfb57a6b14f74d17a3d67cc1f7df2097 = L.marker(
                [-0.803689, 11.609444],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_95ecb4e3766f448bba6d42c94d2e6ffc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dfb57a6b14f74d17a3d67cc1f7df2097.setIcon(icon_95ecb4e3766f448bba6d42c94d2e6ffc);
        
    
        var popup_e6037700391c4d0c9e24925e0084eb18 = L.popup({"maxWidth": "100%"});

        
            var html_6f536c30b6cd43d783a5f9bf448a7466 = $(`<div id="html_6f536c30b6cd43d783a5f9bf448a7466" style="width: 100.0%; height: 100.0%;">Gabon <img src="http://localhost:8000/flag_resources/img/worldflags/ga.png "width="140px" ></div>`)[0];
            popup_e6037700391c4d0c9e24925e0084eb18.setContent(html_6f536c30b6cd43d783a5f9bf448a7466);
        

        marker_dfb57a6b14f74d17a3d67cc1f7df2097.bindPopup(popup_e6037700391c4d0c9e24925e0084eb18)
        ;

        
    
    
            var marker_cab2f4dcc9124418923ba70dac874f1d = L.marker(
                [55.378051, -3.435973],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_51a6bc680b8a4a1eb7c5d3c515afec5d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cab2f4dcc9124418923ba70dac874f1d.setIcon(icon_51a6bc680b8a4a1eb7c5d3c515afec5d);
        
    
        var popup_9af6c2e533794f74adac12139cae135b = L.popup({"maxWidth": "100%"});

        
            var html_263c41d1a38d44008da1a1e0ef1d63a5 = $(`<div id="html_263c41d1a38d44008da1a1e0ef1d63a5" style="width: 100.0%; height: 100.0%;">United Kingdom <img src="http://localhost:8000/flag_resources/img/worldflags/gb.png "width="140px" ></div>`)[0];
            popup_9af6c2e533794f74adac12139cae135b.setContent(html_263c41d1a38d44008da1a1e0ef1d63a5);
        

        marker_cab2f4dcc9124418923ba70dac874f1d.bindPopup(popup_9af6c2e533794f74adac12139cae135b)
        ;

        
    
    
            var marker_af60c3a6360e4e03a63cd472ee7bb968 = L.marker(
                [12.262775999999999, -61.604170999999994],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_a839df36b6514c4b8c5c9e5b7c55309b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_af60c3a6360e4e03a63cd472ee7bb968.setIcon(icon_a839df36b6514c4b8c5c9e5b7c55309b);
        
    
        var popup_1a4b89c60a6c4b8ea0cb2d9af38b4295 = L.popup({"maxWidth": "100%"});

        
            var html_5a9f7822904447d9ae15ae63994f35b5 = $(`<div id="html_5a9f7822904447d9ae15ae63994f35b5" style="width: 100.0%; height: 100.0%;">Grenada <img src="http://localhost:8000/flag_resources/img/worldflags/gd.png "width="140px" ></div>`)[0];
            popup_1a4b89c60a6c4b8ea0cb2d9af38b4295.setContent(html_5a9f7822904447d9ae15ae63994f35b5);
        

        marker_af60c3a6360e4e03a63cd472ee7bb968.bindPopup(popup_1a4b89c60a6c4b8ea0cb2d9af38b4295)
        ;

        
    
    
            var marker_01c1c5e94b9e484f8b1b545126ceeaad = L.marker(
                [42.315407, 43.356891999999995],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ca691f5176d74c30be9fcbc8eed0ca43 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_01c1c5e94b9e484f8b1b545126ceeaad.setIcon(icon_ca691f5176d74c30be9fcbc8eed0ca43);
        
    
        var popup_d261e9cc402e49ef857757d3f9e5f3da = L.popup({"maxWidth": "100%"});

        
            var html_3bfca89012a24940a45fd354b5d8ea08 = $(`<div id="html_3bfca89012a24940a45fd354b5d8ea08" style="width: 100.0%; height: 100.0%;">Georgia <img src="http://localhost:8000/flag_resources/img/worldflags/ge.png "width="140px" ></div>`)[0];
            popup_d261e9cc402e49ef857757d3f9e5f3da.setContent(html_3bfca89012a24940a45fd354b5d8ea08);
        

        marker_01c1c5e94b9e484f8b1b545126ceeaad.bindPopup(popup_d261e9cc402e49ef857757d3f9e5f3da)
        ;

        
    
    
            var marker_ddf4d15d3ead4838af496b03de09a6d0 = L.marker(
                [3.9338889999999997, -53.125781999999994],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b4b7e311be4b4513acb751845a9e09bf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ddf4d15d3ead4838af496b03de09a6d0.setIcon(icon_b4b7e311be4b4513acb751845a9e09bf);
        
    
        var popup_674b76b3f0cf46c29825162b1b42fd33 = L.popup({"maxWidth": "100%"});

        
            var html_e3643a0c6a984cf3b2bd9ee52792f1e7 = $(`<div id="html_e3643a0c6a984cf3b2bd9ee52792f1e7" style="width: 100.0%; height: 100.0%;">French Guiana <img src="http://localhost:8000/flag_resources/img/worldflags/gf.png "width="140px" ></div>`)[0];
            popup_674b76b3f0cf46c29825162b1b42fd33.setContent(html_e3643a0c6a984cf3b2bd9ee52792f1e7);
        

        marker_ddf4d15d3ead4838af496b03de09a6d0.bindPopup(popup_674b76b3f0cf46c29825162b1b42fd33)
        ;

        
    
    
            var marker_f801396a2dc442119587256e2d276824 = L.marker(
                [49.465691, -2.5852779999999997],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_46189b879cb74fc4ba03ecd429e9f73a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f801396a2dc442119587256e2d276824.setIcon(icon_46189b879cb74fc4ba03ecd429e9f73a);
        
    
        var popup_23e7826402914ee4984a980b1d32a1f9 = L.popup({"maxWidth": "100%"});

        
            var html_2416a0ab881c41ed93d49d8894142da8 = $(`<div id="html_2416a0ab881c41ed93d49d8894142da8" style="width: 100.0%; height: 100.0%;">Guernsey <img src="http://localhost:8000/flag_resources/img/worldflags/gg.png "width="140px" ></div>`)[0];
            popup_23e7826402914ee4984a980b1d32a1f9.setContent(html_2416a0ab881c41ed93d49d8894142da8);
        

        marker_f801396a2dc442119587256e2d276824.bindPopup(popup_23e7826402914ee4984a980b1d32a1f9)
        ;

        
    
    
            var marker_aaa1e00b719f466794c03c057c69002f = L.marker(
                [7.946527000000001, -1.0231940000000002],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_156a2ad4e2724c28a27d7ddd3bad3904 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_aaa1e00b719f466794c03c057c69002f.setIcon(icon_156a2ad4e2724c28a27d7ddd3bad3904);
        
    
        var popup_1bf520c5e5e1427eb032d4adf66eaaf5 = L.popup({"maxWidth": "100%"});

        
            var html_659ca9eda89c48ec8a5df81ca8973c0f = $(`<div id="html_659ca9eda89c48ec8a5df81ca8973c0f" style="width: 100.0%; height: 100.0%;">Ghana <img src="http://localhost:8000/flag_resources/img/worldflags/gh.png "width="140px" ></div>`)[0];
            popup_1bf520c5e5e1427eb032d4adf66eaaf5.setContent(html_659ca9eda89c48ec8a5df81ca8973c0f);
        

        marker_aaa1e00b719f466794c03c057c69002f.bindPopup(popup_1bf520c5e5e1427eb032d4adf66eaaf5)
        ;

        
    
    
            var marker_8e8ffc4a5422402c8403c10330509b90 = L.marker(
                [36.137741, -5.345374],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_277be450a21443e595bde67a7e3b0637 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8e8ffc4a5422402c8403c10330509b90.setIcon(icon_277be450a21443e595bde67a7e3b0637);
        
    
        var popup_4164e919d5614527b6566d05e5c27141 = L.popup({"maxWidth": "100%"});

        
            var html_3ef15313abab4dcda4ad0bb86155a795 = $(`<div id="html_3ef15313abab4dcda4ad0bb86155a795" style="width: 100.0%; height: 100.0%;">Gibraltar <img src="http://localhost:8000/flag_resources/img/worldflags/gi.png "width="140px" ></div>`)[0];
            popup_4164e919d5614527b6566d05e5c27141.setContent(html_3ef15313abab4dcda4ad0bb86155a795);
        

        marker_8e8ffc4a5422402c8403c10330509b90.bindPopup(popup_4164e919d5614527b6566d05e5c27141)
        ;

        
    
    
            var marker_60471506a7b24b37a226a86f3ccd7f7d = L.marker(
                [71.706936, -42.604303],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_99822679a23d4677a3d9910e21ecc6ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_60471506a7b24b37a226a86f3ccd7f7d.setIcon(icon_99822679a23d4677a3d9910e21ecc6ee);
        
    
        var popup_55b8472009774566a177583df295af92 = L.popup({"maxWidth": "100%"});

        
            var html_16856ce037bf4282bd3a092cbcfb86b1 = $(`<div id="html_16856ce037bf4282bd3a092cbcfb86b1" style="width: 100.0%; height: 100.0%;">Greenland <img src="http://localhost:8000/flag_resources/img/worldflags/gl.png "width="140px" ></div>`)[0];
            popup_55b8472009774566a177583df295af92.setContent(html_16856ce037bf4282bd3a092cbcfb86b1);
        

        marker_60471506a7b24b37a226a86f3ccd7f7d.bindPopup(popup_55b8472009774566a177583df295af92)
        ;

        
    
    
            var marker_546a53e751ed44a390d6ffa9988e81b9 = L.marker(
                [13.443182, -15.310139000000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_42f075cbce6749968cc5b94d389f2029 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_546a53e751ed44a390d6ffa9988e81b9.setIcon(icon_42f075cbce6749968cc5b94d389f2029);
        
    
        var popup_e509b4d011d74030a5cdc4fa619de44b = L.popup({"maxWidth": "100%"});

        
            var html_5702710aa8ee4f889e20a4c00bfda4c7 = $(`<div id="html_5702710aa8ee4f889e20a4c00bfda4c7" style="width: 100.0%; height: 100.0%;">Gambia <img src="http://localhost:8000/flag_resources/img/worldflags/gm.png "width="140px" ></div>`)[0];
            popup_e509b4d011d74030a5cdc4fa619de44b.setContent(html_5702710aa8ee4f889e20a4c00bfda4c7);
        

        marker_546a53e751ed44a390d6ffa9988e81b9.bindPopup(popup_e509b4d011d74030a5cdc4fa619de44b)
        ;

        
    
    
            var marker_72fe38fa3eb64e52b3615da6456eaf00 = L.marker(
                [9.945587, -9.696645],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_87d12fd0c3a540acb0c87bccee8886f5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_72fe38fa3eb64e52b3615da6456eaf00.setIcon(icon_87d12fd0c3a540acb0c87bccee8886f5);
        
    
        var popup_0fab74cae4d5484fb390bd4e16e450a4 = L.popup({"maxWidth": "100%"});

        
            var html_cca5e56fc6484350964beb2251db862f = $(`<div id="html_cca5e56fc6484350964beb2251db862f" style="width: 100.0%; height: 100.0%;">Guinea <img src="http://localhost:8000/flag_resources/img/worldflags/gn.png "width="140px" ></div>`)[0];
            popup_0fab74cae4d5484fb390bd4e16e450a4.setContent(html_cca5e56fc6484350964beb2251db862f);
        

        marker_72fe38fa3eb64e52b3615da6456eaf00.bindPopup(popup_0fab74cae4d5484fb390bd4e16e450a4)
        ;

        
    
    
            var marker_d7878ae991c24099bc270f30fa4b25d2 = L.marker(
                [16.995971, -62.067641],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_20c1012ba2b54f3a8d1bc5f1e6ad7f80 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d7878ae991c24099bc270f30fa4b25d2.setIcon(icon_20c1012ba2b54f3a8d1bc5f1e6ad7f80);
        
    
        var popup_c96945625a1246be852f58520b10a530 = L.popup({"maxWidth": "100%"});

        
            var html_e5c7dfb4f0804c90af9c84e308615024 = $(`<div id="html_e5c7dfb4f0804c90af9c84e308615024" style="width: 100.0%; height: 100.0%;">Guadeloupe <img src="http://localhost:8000/flag_resources/img/worldflags/gp.png "width="140px" ></div>`)[0];
            popup_c96945625a1246be852f58520b10a530.setContent(html_e5c7dfb4f0804c90af9c84e308615024);
        

        marker_d7878ae991c24099bc270f30fa4b25d2.bindPopup(popup_c96945625a1246be852f58520b10a530)
        ;

        
    
    
            var marker_2df9be83afcb40b3a65c11125e13aae4 = L.marker(
                [1.6508009999999997, 10.267895],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_631324755b4a447d8a9832dd26360558 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2df9be83afcb40b3a65c11125e13aae4.setIcon(icon_631324755b4a447d8a9832dd26360558);
        
    
        var popup_ee0d5792cd9e47129cda5df8688db401 = L.popup({"maxWidth": "100%"});

        
            var html_00cff447dd194ec59762e52d027a8b3f = $(`<div id="html_00cff447dd194ec59762e52d027a8b3f" style="width: 100.0%; height: 100.0%;">Equatorial Guinea <img src="http://localhost:8000/flag_resources/img/worldflags/gq.png "width="140px" ></div>`)[0];
            popup_ee0d5792cd9e47129cda5df8688db401.setContent(html_00cff447dd194ec59762e52d027a8b3f);
        

        marker_2df9be83afcb40b3a65c11125e13aae4.bindPopup(popup_ee0d5792cd9e47129cda5df8688db401)
        ;

        
    
    
            var marker_35c1ea9bb1df42299c8a04fe5d37eb78 = L.marker(
                [39.074208, 21.824312],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f0b6ad183c764e35aee4c0866526effc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_35c1ea9bb1df42299c8a04fe5d37eb78.setIcon(icon_f0b6ad183c764e35aee4c0866526effc);
        
    
        var popup_fe509c8b4973430d89dd8f7e3285576e = L.popup({"maxWidth": "100%"});

        
            var html_841dd0522e4c47eaa2f5da2640af207c = $(`<div id="html_841dd0522e4c47eaa2f5da2640af207c" style="width: 100.0%; height: 100.0%;">Greece <img src="http://localhost:8000/flag_resources/img/worldflags/gr.png "width="140px" ></div>`)[0];
            popup_fe509c8b4973430d89dd8f7e3285576e.setContent(html_841dd0522e4c47eaa2f5da2640af207c);
        

        marker_35c1ea9bb1df42299c8a04fe5d37eb78.bindPopup(popup_fe509c8b4973430d89dd8f7e3285576e)
        ;

        
    
    
            var marker_a63be1d566aa4638964c93b5cb32bc51 = L.marker(
                [-54.429579000000004, -36.587909],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_6e02b7dd988146be82fbd00d5fac1713 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a63be1d566aa4638964c93b5cb32bc51.setIcon(icon_6e02b7dd988146be82fbd00d5fac1713);
        
    
        var popup_0988e3e91e03447d93b59038b49b9fb7 = L.popup({"maxWidth": "100%"});

        
            var html_858bfe6740ec46bbbd70f040cfaecad6 = $(`<div id="html_858bfe6740ec46bbbd70f040cfaecad6" style="width: 100.0%; height: 100.0%;">South Georgia and the South Sandwich Islands <img src="http://localhost:8000/flag_resources/img/worldflags/gs.png "width="140px" ></div>`)[0];
            popup_0988e3e91e03447d93b59038b49b9fb7.setContent(html_858bfe6740ec46bbbd70f040cfaecad6);
        

        marker_a63be1d566aa4638964c93b5cb32bc51.bindPopup(popup_0988e3e91e03447d93b59038b49b9fb7)
        ;

        
    
    
            var marker_36fb770169e940d7adcd3f181e34b200 = L.marker(
                [15.783470999999999, -90.23075899999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_7712daa12df6473994f6b306ffde5d70 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_36fb770169e940d7adcd3f181e34b200.setIcon(icon_7712daa12df6473994f6b306ffde5d70);
        
    
        var popup_dd2219d7f32449d392b1120c2152ff3a = L.popup({"maxWidth": "100%"});

        
            var html_aa3a5487789a43fe93630295be5d83f2 = $(`<div id="html_aa3a5487789a43fe93630295be5d83f2" style="width: 100.0%; height: 100.0%;">Guatemala <img src="http://localhost:8000/flag_resources/img/worldflags/gt.png "width="140px" ></div>`)[0];
            popup_dd2219d7f32449d392b1120c2152ff3a.setContent(html_aa3a5487789a43fe93630295be5d83f2);
        

        marker_36fb770169e940d7adcd3f181e34b200.bindPopup(popup_dd2219d7f32449d392b1120c2152ff3a)
        ;

        
    
    
            var marker_db8336a3fc594fc3abbce2a0e79c109a = L.marker(
                [13.444304, 144.793731],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e85a9587c965492a991728fd13a4e590 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_db8336a3fc594fc3abbce2a0e79c109a.setIcon(icon_e85a9587c965492a991728fd13a4e590);
        
    
        var popup_33ab774b6f674ba0b94a7f3425852626 = L.popup({"maxWidth": "100%"});

        
            var html_98016d013932459686f417c22f63b6a7 = $(`<div id="html_98016d013932459686f417c22f63b6a7" style="width: 100.0%; height: 100.0%;">Guam <img src="http://localhost:8000/flag_resources/img/worldflags/gu.png "width="140px" ></div>`)[0];
            popup_33ab774b6f674ba0b94a7f3425852626.setContent(html_98016d013932459686f417c22f63b6a7);
        

        marker_db8336a3fc594fc3abbce2a0e79c109a.bindPopup(popup_33ab774b6f674ba0b94a7f3425852626)
        ;

        
    
    
            var marker_8c2d0bb9d30b4edeb10a6e5b63f0409f = L.marker(
                [11.803749, -15.180413],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_38b07c3964a84be8a379bae64ec13468 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8c2d0bb9d30b4edeb10a6e5b63f0409f.setIcon(icon_38b07c3964a84be8a379bae64ec13468);
        
    
        var popup_10e6a37654434d57afd9b8fc18ebdb2f = L.popup({"maxWidth": "100%"});

        
            var html_bfa791f158304d1e89cd29f2f4be5264 = $(`<div id="html_bfa791f158304d1e89cd29f2f4be5264" style="width: 100.0%; height: 100.0%;">Guinea-Bissau <img src="http://localhost:8000/flag_resources/img/worldflags/gw.png "width="140px" ></div>`)[0];
            popup_10e6a37654434d57afd9b8fc18ebdb2f.setContent(html_bfa791f158304d1e89cd29f2f4be5264);
        

        marker_8c2d0bb9d30b4edeb10a6e5b63f0409f.bindPopup(popup_10e6a37654434d57afd9b8fc18ebdb2f)
        ;

        
    
    
            var marker_d68da31f252949cc8eb4a87a870d6252 = L.marker(
                [4.860416000000001, -58.93018000000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_3990c26cf17244cdaad9247d43d618e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d68da31f252949cc8eb4a87a870d6252.setIcon(icon_3990c26cf17244cdaad9247d43d618e1);
        
    
        var popup_d16c6a630c99449e9c71a9965e172dd6 = L.popup({"maxWidth": "100%"});

        
            var html_7992669c08994b11af5d546070e01071 = $(`<div id="html_7992669c08994b11af5d546070e01071" style="width: 100.0%; height: 100.0%;">Guyana <img src="http://localhost:8000/flag_resources/img/worldflags/gy.png "width="140px" ></div>`)[0];
            popup_d16c6a630c99449e9c71a9965e172dd6.setContent(html_7992669c08994b11af5d546070e01071);
        

        marker_d68da31f252949cc8eb4a87a870d6252.bindPopup(popup_d16c6a630c99449e9c71a9965e172dd6)
        ;

        
    
    
            var marker_cf71abb1956845a7ba1c3f2ef9b7116f = L.marker(
                [31.354676, 34.308825],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_30b5754a16e846c7afcbd093bcaed3d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cf71abb1956845a7ba1c3f2ef9b7116f.setIcon(icon_30b5754a16e846c7afcbd093bcaed3d5);
        
    
        var popup_0c4c639236fd4f48ae8330364a74952a = L.popup({"maxWidth": "100%"});

        
            var html_67082de5ada34753a869ffbacb19aa1b = $(`<div id="html_67082de5ada34753a869ffbacb19aa1b" style="width: 100.0%; height: 100.0%;">Gaza Strip <img src="http://localhost:8000/flag_resources/img/worldflags/gz.png "width="140px" ></div>`)[0];
            popup_0c4c639236fd4f48ae8330364a74952a.setContent(html_67082de5ada34753a869ffbacb19aa1b);
        

        marker_cf71abb1956845a7ba1c3f2ef9b7116f.bindPopup(popup_0c4c639236fd4f48ae8330364a74952a)
        ;

        
    
    
            var marker_9d5d2b4603ce4892855e31e36aba96fd = L.marker(
                [22.396428, 114.10949699999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_74f1dd02e5044476a146fada763fbfc7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9d5d2b4603ce4892855e31e36aba96fd.setIcon(icon_74f1dd02e5044476a146fada763fbfc7);
        
    
        var popup_0180097f4a314bfaa0d04f0dbcd4afcb = L.popup({"maxWidth": "100%"});

        
            var html_8ed530c66f94435aacd9553cc72b99e7 = $(`<div id="html_8ed530c66f94435aacd9553cc72b99e7" style="width: 100.0%; height: 100.0%;">Hong Kong <img src="http://localhost:8000/flag_resources/img/worldflags/hk.png "width="140px" ></div>`)[0];
            popup_0180097f4a314bfaa0d04f0dbcd4afcb.setContent(html_8ed530c66f94435aacd9553cc72b99e7);
        

        marker_9d5d2b4603ce4892855e31e36aba96fd.bindPopup(popup_0180097f4a314bfaa0d04f0dbcd4afcb)
        ;

        
    
    
            var marker_670d69d84c4f4e5198cadd71065e4d50 = L.marker(
                [-53.08181, 73.50415799999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_5e94b80835494aab8a7426d20ec696aa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_670d69d84c4f4e5198cadd71065e4d50.setIcon(icon_5e94b80835494aab8a7426d20ec696aa);
        
    
        var popup_c86b6f6ae3234661992c9fda81e6df83 = L.popup({"maxWidth": "100%"});

        
            var html_feaca88eba724b8cbfc4ae26a85fef66 = $(`<div id="html_feaca88eba724b8cbfc4ae26a85fef66" style="width: 100.0%; height: 100.0%;">Heard Island and McDonald Islands <img src="http://localhost:8000/flag_resources/img/worldflags/hm.png "width="140px" ></div>`)[0];
            popup_c86b6f6ae3234661992c9fda81e6df83.setContent(html_feaca88eba724b8cbfc4ae26a85fef66);
        

        marker_670d69d84c4f4e5198cadd71065e4d50.bindPopup(popup_c86b6f6ae3234661992c9fda81e6df83)
        ;

        
    
    
            var marker_5d11cb8b44e0496dae4f4731800a36e8 = L.marker(
                [15.199998999999998, -86.241905],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_04b88908720e4383ade00662ae734e92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5d11cb8b44e0496dae4f4731800a36e8.setIcon(icon_04b88908720e4383ade00662ae734e92);
        
    
        var popup_fc51dbb611cc44c28f032ec740c25614 = L.popup({"maxWidth": "100%"});

        
            var html_68ba9bdae4644cefb82ccf925c2327b7 = $(`<div id="html_68ba9bdae4644cefb82ccf925c2327b7" style="width: 100.0%; height: 100.0%;">Honduras <img src="http://localhost:8000/flag_resources/img/worldflags/hn.png "width="140px" ></div>`)[0];
            popup_fc51dbb611cc44c28f032ec740c25614.setContent(html_68ba9bdae4644cefb82ccf925c2327b7);
        

        marker_5d11cb8b44e0496dae4f4731800a36e8.bindPopup(popup_fc51dbb611cc44c28f032ec740c25614)
        ;

        
    
    
            var marker_18479a98bc0041b0abe87c59763fa81b = L.marker(
                [45.1, 15.2],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ff11d30ba9664c17ab80f90b3d6efb61 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_18479a98bc0041b0abe87c59763fa81b.setIcon(icon_ff11d30ba9664c17ab80f90b3d6efb61);
        
    
        var popup_0eb70a979dad4da9a0e48a1ab01f6834 = L.popup({"maxWidth": "100%"});

        
            var html_debd0512087a455496ecde6c25d8facd = $(`<div id="html_debd0512087a455496ecde6c25d8facd" style="width: 100.0%; height: 100.0%;">Croatia <img src="http://localhost:8000/flag_resources/img/worldflags/hr.png "width="140px" ></div>`)[0];
            popup_0eb70a979dad4da9a0e48a1ab01f6834.setContent(html_debd0512087a455496ecde6c25d8facd);
        

        marker_18479a98bc0041b0abe87c59763fa81b.bindPopup(popup_0eb70a979dad4da9a0e48a1ab01f6834)
        ;

        
    
    
            var marker_33f1ed91bf5444a4bb2912f3928a6535 = L.marker(
                [18.971187, -72.28521500000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_384c0d4bdac24dad9e6a3d53c6bf751c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_33f1ed91bf5444a4bb2912f3928a6535.setIcon(icon_384c0d4bdac24dad9e6a3d53c6bf751c);
        
    
        var popup_88d50258fffd4ebdb9041ccbba55368c = L.popup({"maxWidth": "100%"});

        
            var html_6a7ac23ba84a4e268313e88af0a8cd6a = $(`<div id="html_6a7ac23ba84a4e268313e88af0a8cd6a" style="width: 100.0%; height: 100.0%;">Haiti <img src="http://localhost:8000/flag_resources/img/worldflags/ht.png "width="140px" ></div>`)[0];
            popup_88d50258fffd4ebdb9041ccbba55368c.setContent(html_6a7ac23ba84a4e268313e88af0a8cd6a);
        

        marker_33f1ed91bf5444a4bb2912f3928a6535.bindPopup(popup_88d50258fffd4ebdb9041ccbba55368c)
        ;

        
    
    
            var marker_3f6b5c287ad146a7928457e5cb862aa3 = L.marker(
                [47.162494, 19.503304],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_542ceeb036eb47ccba2fa728cee6b626 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3f6b5c287ad146a7928457e5cb862aa3.setIcon(icon_542ceeb036eb47ccba2fa728cee6b626);
        
    
        var popup_6826f2fad5cf432d9cdeb74c8c387d58 = L.popup({"maxWidth": "100%"});

        
            var html_3ae4e206687a46758afa67c9182ec526 = $(`<div id="html_3ae4e206687a46758afa67c9182ec526" style="width: 100.0%; height: 100.0%;">Hungary <img src="http://localhost:8000/flag_resources/img/worldflags/hu.png "width="140px" ></div>`)[0];
            popup_6826f2fad5cf432d9cdeb74c8c387d58.setContent(html_3ae4e206687a46758afa67c9182ec526);
        

        marker_3f6b5c287ad146a7928457e5cb862aa3.bindPopup(popup_6826f2fad5cf432d9cdeb74c8c387d58)
        ;

        
    
    
            var marker_d7f6efe0c9df4fd1a9816f75f316863e = L.marker(
                [-0.789275, 113.921327],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c53a63a9a32d4545b1b1bcfd295952fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d7f6efe0c9df4fd1a9816f75f316863e.setIcon(icon_c53a63a9a32d4545b1b1bcfd295952fa);
        
    
        var popup_fd8977a7d4804cafb5a1602923f75d00 = L.popup({"maxWidth": "100%"});

        
            var html_fbd982226ea449288104e8f3874687bf = $(`<div id="html_fbd982226ea449288104e8f3874687bf" style="width: 100.0%; height: 100.0%;">Indonesia <img src="http://localhost:8000/flag_resources/img/worldflags/id.png "width="140px" ></div>`)[0];
            popup_fd8977a7d4804cafb5a1602923f75d00.setContent(html_fbd982226ea449288104e8f3874687bf);
        

        marker_d7f6efe0c9df4fd1a9816f75f316863e.bindPopup(popup_fd8977a7d4804cafb5a1602923f75d00)
        ;

        
    
    
            var marker_1935e21590ef40eab465724ddf1562f8 = L.marker(
                [53.41291, -8.243889999999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_0633cba061704e7bbc1a631555834204 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1935e21590ef40eab465724ddf1562f8.setIcon(icon_0633cba061704e7bbc1a631555834204);
        
    
        var popup_bed2599f0dfd4bc79bc8ba367f6983eb = L.popup({"maxWidth": "100%"});

        
            var html_05bf85bc65d74e8ba86ceaed69859f28 = $(`<div id="html_05bf85bc65d74e8ba86ceaed69859f28" style="width: 100.0%; height: 100.0%;">Ireland <img src="http://localhost:8000/flag_resources/img/worldflags/ie.png "width="140px" ></div>`)[0];
            popup_bed2599f0dfd4bc79bc8ba367f6983eb.setContent(html_05bf85bc65d74e8ba86ceaed69859f28);
        

        marker_1935e21590ef40eab465724ddf1562f8.bindPopup(popup_bed2599f0dfd4bc79bc8ba367f6983eb)
        ;

        
    
    
            var marker_cf15d0aeefa048d8b72a5cd76744cde0 = L.marker(
                [31.046051000000002, 34.851612],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_14eea601378a439f9b1d02098dc6a471 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cf15d0aeefa048d8b72a5cd76744cde0.setIcon(icon_14eea601378a439f9b1d02098dc6a471);
        
    
        var popup_d38075a7d6684149b179c4d42292f955 = L.popup({"maxWidth": "100%"});

        
            var html_4d5365b3f090480984b67ea8d04970c7 = $(`<div id="html_4d5365b3f090480984b67ea8d04970c7" style="width: 100.0%; height: 100.0%;">Israel <img src="http://localhost:8000/flag_resources/img/worldflags/il.png "width="140px" ></div>`)[0];
            popup_d38075a7d6684149b179c4d42292f955.setContent(html_4d5365b3f090480984b67ea8d04970c7);
        

        marker_cf15d0aeefa048d8b72a5cd76744cde0.bindPopup(popup_d38075a7d6684149b179c4d42292f955)
        ;

        
    
    
            var marker_715fcbb6830c4376946039ba96e4d4f9 = L.marker(
                [54.236107, -4.548056],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_da1047b49f1b4da784d0df735adc4ad0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_715fcbb6830c4376946039ba96e4d4f9.setIcon(icon_da1047b49f1b4da784d0df735adc4ad0);
        
    
        var popup_48f5da661e1a4b08af7f8f553ef8f527 = L.popup({"maxWidth": "100%"});

        
            var html_5978b000fc2e4f8aab97ca5757795fb4 = $(`<div id="html_5978b000fc2e4f8aab97ca5757795fb4" style="width: 100.0%; height: 100.0%;">Isle of Man <img src="http://localhost:8000/flag_resources/img/worldflags/im.png "width="140px" ></div>`)[0];
            popup_48f5da661e1a4b08af7f8f553ef8f527.setContent(html_5978b000fc2e4f8aab97ca5757795fb4);
        

        marker_715fcbb6830c4376946039ba96e4d4f9.bindPopup(popup_48f5da661e1a4b08af7f8f553ef8f527)
        ;

        
    
    
            var marker_1992d0fcf92c441299b7dc6474dd6c16 = L.marker(
                [20.593684, 78.96288],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_df99902531f04f488c6a6cb63d835c83 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1992d0fcf92c441299b7dc6474dd6c16.setIcon(icon_df99902531f04f488c6a6cb63d835c83);
        
    
        var popup_ceaadf1952ea4c2db3cc0cc19bb5eb57 = L.popup({"maxWidth": "100%"});

        
            var html_8c53dc2e51ec454d9b74a541fb54d85b = $(`<div id="html_8c53dc2e51ec454d9b74a541fb54d85b" style="width: 100.0%; height: 100.0%;">India <img src="http://localhost:8000/flag_resources/img/worldflags/in.png "width="140px" ></div>`)[0];
            popup_ceaadf1952ea4c2db3cc0cc19bb5eb57.setContent(html_8c53dc2e51ec454d9b74a541fb54d85b);
        

        marker_1992d0fcf92c441299b7dc6474dd6c16.bindPopup(popup_ceaadf1952ea4c2db3cc0cc19bb5eb57)
        ;

        
    
    
            var marker_cbc3fea5aaca4a37803349d87fb5edb6 = L.marker(
                [-6.343194, 71.87651899999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c2994d9d82c84f6ca25717c19b0c58ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cbc3fea5aaca4a37803349d87fb5edb6.setIcon(icon_c2994d9d82c84f6ca25717c19b0c58ff);
        
    
        var popup_3dca127807634ec3b0b6fa68c0234a7a = L.popup({"maxWidth": "100%"});

        
            var html_abd0be24f49d4d9ca32fe1c510567407 = $(`<div id="html_abd0be24f49d4d9ca32fe1c510567407" style="width: 100.0%; height: 100.0%;">British Indian Ocean Territory <img src="http://localhost:8000/flag_resources/img/worldflags/io.png "width="140px" ></div>`)[0];
            popup_3dca127807634ec3b0b6fa68c0234a7a.setContent(html_abd0be24f49d4d9ca32fe1c510567407);
        

        marker_cbc3fea5aaca4a37803349d87fb5edb6.bindPopup(popup_3dca127807634ec3b0b6fa68c0234a7a)
        ;

        
    
    
            var marker_f2f43404c74f43158eca2704b52a9f38 = L.marker(
                [33.223191, 43.679291],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_932857e1e10f4d868a99bc38fc916bd6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f2f43404c74f43158eca2704b52a9f38.setIcon(icon_932857e1e10f4d868a99bc38fc916bd6);
        
    
        var popup_f1eab46b59194b50ba7d36c3b9f7a7f2 = L.popup({"maxWidth": "100%"});

        
            var html_9fb8c9e0b0a141dda74b2c21de397462 = $(`<div id="html_9fb8c9e0b0a141dda74b2c21de397462" style="width: 100.0%; height: 100.0%;">Iraq <img src="http://localhost:8000/flag_resources/img/worldflags/iq.png "width="140px" ></div>`)[0];
            popup_f1eab46b59194b50ba7d36c3b9f7a7f2.setContent(html_9fb8c9e0b0a141dda74b2c21de397462);
        

        marker_f2f43404c74f43158eca2704b52a9f38.bindPopup(popup_f1eab46b59194b50ba7d36c3b9f7a7f2)
        ;

        
    
    
            var marker_9c5501fd292a446fbf3b2983833ce1c7 = L.marker(
                [32.427908, 53.68804599999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4ca611b1e99c47bf99afe2e120998da1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9c5501fd292a446fbf3b2983833ce1c7.setIcon(icon_4ca611b1e99c47bf99afe2e120998da1);
        
    
        var popup_fd93ca8d7f47492c87c950175932f107 = L.popup({"maxWidth": "100%"});

        
            var html_9ae83e51f60847f89a6de37fc45770be = $(`<div id="html_9ae83e51f60847f89a6de37fc45770be" style="width: 100.0%; height: 100.0%;">Iran <img src="http://localhost:8000/flag_resources/img/worldflags/ir.png "width="140px" ></div>`)[0];
            popup_fd93ca8d7f47492c87c950175932f107.setContent(html_9ae83e51f60847f89a6de37fc45770be);
        

        marker_9c5501fd292a446fbf3b2983833ce1c7.bindPopup(popup_fd93ca8d7f47492c87c950175932f107)
        ;

        
    
    
            var marker_3bacb90171b14307974040ee613269cf = L.marker(
                [64.96305100000001, -19.020835],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_d9ba81bf5c68473180ed998bd5b23caa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3bacb90171b14307974040ee613269cf.setIcon(icon_d9ba81bf5c68473180ed998bd5b23caa);
        
    
        var popup_23b549ac536c4d1b96d7edb64a939c3a = L.popup({"maxWidth": "100%"});

        
            var html_c70bd49f855e4e11adb83343b053902e = $(`<div id="html_c70bd49f855e4e11adb83343b053902e" style="width: 100.0%; height: 100.0%;">Iceland <img src="http://localhost:8000/flag_resources/img/worldflags/is.png "width="140px" ></div>`)[0];
            popup_23b549ac536c4d1b96d7edb64a939c3a.setContent(html_c70bd49f855e4e11adb83343b053902e);
        

        marker_3bacb90171b14307974040ee613269cf.bindPopup(popup_23b549ac536c4d1b96d7edb64a939c3a)
        ;

        
    
    
            var marker_89c960b1a5c44305b32f0f4fc43fac58 = L.marker(
                [41.87194, 12.56738],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1df545b0f272460b928c14ed0cb90373 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_89c960b1a5c44305b32f0f4fc43fac58.setIcon(icon_1df545b0f272460b928c14ed0cb90373);
        
    
        var popup_3e84cd118bff4969a9d64ec738b943ea = L.popup({"maxWidth": "100%"});

        
            var html_3057eab8a0f74ee7a78044ddfa274b83 = $(`<div id="html_3057eab8a0f74ee7a78044ddfa274b83" style="width: 100.0%; height: 100.0%;">Italy <img src="http://localhost:8000/flag_resources/img/worldflags/it.png "width="140px" ></div>`)[0];
            popup_3e84cd118bff4969a9d64ec738b943ea.setContent(html_3057eab8a0f74ee7a78044ddfa274b83);
        

        marker_89c960b1a5c44305b32f0f4fc43fac58.bindPopup(popup_3e84cd118bff4969a9d64ec738b943ea)
        ;

        
    
    
            var marker_1a41c2499ebf461e8afb615637ad00bd = L.marker(
                [49.214439, -2.13125],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e56964352dee4c2280a117efaa6baf3f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1a41c2499ebf461e8afb615637ad00bd.setIcon(icon_e56964352dee4c2280a117efaa6baf3f);
        
    
        var popup_bd0d93046910411e8c81793e7759b45e = L.popup({"maxWidth": "100%"});

        
            var html_f3ae47faa2c54b559cde3e61ed78a171 = $(`<div id="html_f3ae47faa2c54b559cde3e61ed78a171" style="width: 100.0%; height: 100.0%;">Jersey <img src="http://localhost:8000/flag_resources/img/worldflags/je.png "width="140px" ></div>`)[0];
            popup_bd0d93046910411e8c81793e7759b45e.setContent(html_f3ae47faa2c54b559cde3e61ed78a171);
        

        marker_1a41c2499ebf461e8afb615637ad00bd.bindPopup(popup_bd0d93046910411e8c81793e7759b45e)
        ;

        
    
    
            var marker_0b249e3c2bba4b38ab3a013324a0c665 = L.marker(
                [18.109581, -77.297508],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e41e6654b00441c99422022d6829b9e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0b249e3c2bba4b38ab3a013324a0c665.setIcon(icon_e41e6654b00441c99422022d6829b9e3);
        
    
        var popup_0546c59876e04d37b71cd79f54dbe091 = L.popup({"maxWidth": "100%"});

        
            var html_eba68a33643642a7bf81c203d136ec2d = $(`<div id="html_eba68a33643642a7bf81c203d136ec2d" style="width: 100.0%; height: 100.0%;">Jamaica <img src="http://localhost:8000/flag_resources/img/worldflags/jm.png "width="140px" ></div>`)[0];
            popup_0546c59876e04d37b71cd79f54dbe091.setContent(html_eba68a33643642a7bf81c203d136ec2d);
        

        marker_0b249e3c2bba4b38ab3a013324a0c665.bindPopup(popup_0546c59876e04d37b71cd79f54dbe091)
        ;

        
    
    
            var marker_24f35607bf254cbaa07d8671b478b5e1 = L.marker(
                [30.585164000000002, 36.238414],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e44252d368314bb1b6bc316ce19a0a7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_24f35607bf254cbaa07d8671b478b5e1.setIcon(icon_e44252d368314bb1b6bc316ce19a0a7d);
        
    
        var popup_dbea7e52bbac4b2782b046a31fc5eded = L.popup({"maxWidth": "100%"});

        
            var html_4132a6d055044031996c7aa4a8355c46 = $(`<div id="html_4132a6d055044031996c7aa4a8355c46" style="width: 100.0%; height: 100.0%;">Jordan <img src="http://localhost:8000/flag_resources/img/worldflags/jo.png "width="140px" ></div>`)[0];
            popup_dbea7e52bbac4b2782b046a31fc5eded.setContent(html_4132a6d055044031996c7aa4a8355c46);
        

        marker_24f35607bf254cbaa07d8671b478b5e1.bindPopup(popup_dbea7e52bbac4b2782b046a31fc5eded)
        ;

        
    
    
            var marker_177fa2d46a9e487387f0f00e9c5cace6 = L.marker(
                [36.204824, 138.252924],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_5cfb0db346cc448db1d3fb060cc3ec1d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_177fa2d46a9e487387f0f00e9c5cace6.setIcon(icon_5cfb0db346cc448db1d3fb060cc3ec1d);
        
    
        var popup_94c52e03a5c340abb509b39b39ec7892 = L.popup({"maxWidth": "100%"});

        
            var html_eced7ba37b2d46c181da6f4265066b63 = $(`<div id="html_eced7ba37b2d46c181da6f4265066b63" style="width: 100.0%; height: 100.0%;">Japan <img src="http://localhost:8000/flag_resources/img/worldflags/jp.png "width="140px" ></div>`)[0];
            popup_94c52e03a5c340abb509b39b39ec7892.setContent(html_eced7ba37b2d46c181da6f4265066b63);
        

        marker_177fa2d46a9e487387f0f00e9c5cace6.bindPopup(popup_94c52e03a5c340abb509b39b39ec7892)
        ;

        
    
    
            var marker_40228a13914e45c5b7687bb46447744a = L.marker(
                [-0.023559, 37.906193],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ac925839e421417ba45e8a6f0bb22994 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_40228a13914e45c5b7687bb46447744a.setIcon(icon_ac925839e421417ba45e8a6f0bb22994);
        
    
        var popup_762080b5bd4e4f0db718314b4d66d8d0 = L.popup({"maxWidth": "100%"});

        
            var html_df10665c59fd45b6a49c15f65f9afe08 = $(`<div id="html_df10665c59fd45b6a49c15f65f9afe08" style="width: 100.0%; height: 100.0%;">Kenya <img src="http://localhost:8000/flag_resources/img/worldflags/ke.png "width="140px" ></div>`)[0];
            popup_762080b5bd4e4f0db718314b4d66d8d0.setContent(html_df10665c59fd45b6a49c15f65f9afe08);
        

        marker_40228a13914e45c5b7687bb46447744a.bindPopup(popup_762080b5bd4e4f0db718314b4d66d8d0)
        ;

        
    
    
            var marker_d736a77c3cfc47318ea0932c1a78b595 = L.marker(
                [41.20438, 74.766098],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c7164d9836e94d4e90d4b4899e83ce3a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d736a77c3cfc47318ea0932c1a78b595.setIcon(icon_c7164d9836e94d4e90d4b4899e83ce3a);
        
    
        var popup_4d962af234e1416c917ef501d7e626bd = L.popup({"maxWidth": "100%"});

        
            var html_dabbf0ece6cc414d9dd726f3f43e8c36 = $(`<div id="html_dabbf0ece6cc414d9dd726f3f43e8c36" style="width: 100.0%; height: 100.0%;">Kyrgyzstan <img src="http://localhost:8000/flag_resources/img/worldflags/kg.png "width="140px" ></div>`)[0];
            popup_4d962af234e1416c917ef501d7e626bd.setContent(html_dabbf0ece6cc414d9dd726f3f43e8c36);
        

        marker_d736a77c3cfc47318ea0932c1a78b595.bindPopup(popup_4d962af234e1416c917ef501d7e626bd)
        ;

        
    
    
            var marker_6f652b776f9448f1811c990f040cec01 = L.marker(
                [12.565679, 104.990963],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_226259af68a34cf38e78d522f4f56afb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6f652b776f9448f1811c990f040cec01.setIcon(icon_226259af68a34cf38e78d522f4f56afb);
        
    
        var popup_dc7d3b73dfae4d8494db593edd473f39 = L.popup({"maxWidth": "100%"});

        
            var html_5d74986b7d4840b8b45ef74fa069b32b = $(`<div id="html_5d74986b7d4840b8b45ef74fa069b32b" style="width: 100.0%; height: 100.0%;">Cambodia <img src="http://localhost:8000/flag_resources/img/worldflags/kh.png "width="140px" ></div>`)[0];
            popup_dc7d3b73dfae4d8494db593edd473f39.setContent(html_5d74986b7d4840b8b45ef74fa069b32b);
        

        marker_6f652b776f9448f1811c990f040cec01.bindPopup(popup_dc7d3b73dfae4d8494db593edd473f39)
        ;

        
    
    
            var marker_317ca4c2ca294e598c2e9efdbf2d40bd = L.marker(
                [-3.3704169999999998, -168.734039],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_02dfbcbbcb1f4bc88b9166a78d79ec00 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_317ca4c2ca294e598c2e9efdbf2d40bd.setIcon(icon_02dfbcbbcb1f4bc88b9166a78d79ec00);
        
    
        var popup_bea67c7c46e34e3f9e2fa1e590fac003 = L.popup({"maxWidth": "100%"});

        
            var html_749724f85b8e462f927b742b981be261 = $(`<div id="html_749724f85b8e462f927b742b981be261" style="width: 100.0%; height: 100.0%;">Kiribati <img src="http://localhost:8000/flag_resources/img/worldflags/ki.png "width="140px" ></div>`)[0];
            popup_bea67c7c46e34e3f9e2fa1e590fac003.setContent(html_749724f85b8e462f927b742b981be261);
        

        marker_317ca4c2ca294e598c2e9efdbf2d40bd.bindPopup(popup_bea67c7c46e34e3f9e2fa1e590fac003)
        ;

        
    
    
            var marker_6a28ff77d89f4afdbdefc60dc64ed3e9 = L.marker(
                [-11.875001, 43.872219],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_7bb16c6edd444c7394f0e0bcb75a2bbf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6a28ff77d89f4afdbdefc60dc64ed3e9.setIcon(icon_7bb16c6edd444c7394f0e0bcb75a2bbf);
        
    
        var popup_191fa89a70f14b508741cfe9cab2f7c9 = L.popup({"maxWidth": "100%"});

        
            var html_9e81a262d31a497db1c7fcd9de457aed = $(`<div id="html_9e81a262d31a497db1c7fcd9de457aed" style="width: 100.0%; height: 100.0%;">Comoros <img src="http://localhost:8000/flag_resources/img/worldflags/km.png "width="140px" ></div>`)[0];
            popup_191fa89a70f14b508741cfe9cab2f7c9.setContent(html_9e81a262d31a497db1c7fcd9de457aed);
        

        marker_6a28ff77d89f4afdbdefc60dc64ed3e9.bindPopup(popup_191fa89a70f14b508741cfe9cab2f7c9)
        ;

        
    
    
            var marker_62de2f1e708b43349816e4254b67d49d = L.marker(
                [17.357822, -62.782998],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b08e28b9c6994e908f784006ec85863e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_62de2f1e708b43349816e4254b67d49d.setIcon(icon_b08e28b9c6994e908f784006ec85863e);
        
    
        var popup_24b98daa5b694dfa8777ffee935ffdae = L.popup({"maxWidth": "100%"});

        
            var html_8964cf5bf78f4743abeb0ce9d5cdff03 = $(`<div id="html_8964cf5bf78f4743abeb0ce9d5cdff03" style="width: 100.0%; height: 100.0%;">Saint Kitts and Nevis <img src="http://localhost:8000/flag_resources/img/worldflags/kn.png "width="140px" ></div>`)[0];
            popup_24b98daa5b694dfa8777ffee935ffdae.setContent(html_8964cf5bf78f4743abeb0ce9d5cdff03);
        

        marker_62de2f1e708b43349816e4254b67d49d.bindPopup(popup_24b98daa5b694dfa8777ffee935ffdae)
        ;

        
    
    
            var marker_a891e4a13aed43ebb60ae2b744d94361 = L.marker(
                [40.339852, 127.510093],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_cc54639042e44d6d88717afc557289e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a891e4a13aed43ebb60ae2b744d94361.setIcon(icon_cc54639042e44d6d88717afc557289e5);
        
    
        var popup_9fec928403f14ca9867ae530886190a1 = L.popup({"maxWidth": "100%"});

        
            var html_ec096143621f4e36a3c320e6e685d218 = $(`<div id="html_ec096143621f4e36a3c320e6e685d218" style="width: 100.0%; height: 100.0%;">North Korea <img src="http://localhost:8000/flag_resources/img/worldflags/kp.png "width="140px" ></div>`)[0];
            popup_9fec928403f14ca9867ae530886190a1.setContent(html_ec096143621f4e36a3c320e6e685d218);
        

        marker_a891e4a13aed43ebb60ae2b744d94361.bindPopup(popup_9fec928403f14ca9867ae530886190a1)
        ;

        
    
    
            var marker_e829955c803641b3842bab1ed0403a12 = L.marker(
                [35.907757000000004, 127.766922],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_66241fadc8bc4add88797dbb518c27eb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e829955c803641b3842bab1ed0403a12.setIcon(icon_66241fadc8bc4add88797dbb518c27eb);
        
    
        var popup_66a51752f2df4431a70f1d3fcf25b52a = L.popup({"maxWidth": "100%"});

        
            var html_5e66e04e87384d978f3d2f728de80338 = $(`<div id="html_5e66e04e87384d978f3d2f728de80338" style="width: 100.0%; height: 100.0%;">South Korea <img src="http://localhost:8000/flag_resources/img/worldflags/kr.png "width="140px" ></div>`)[0];
            popup_66a51752f2df4431a70f1d3fcf25b52a.setContent(html_5e66e04e87384d978f3d2f728de80338);
        

        marker_e829955c803641b3842bab1ed0403a12.bindPopup(popup_66a51752f2df4431a70f1d3fcf25b52a)
        ;

        
    
    
            var marker_56a8d593d7004e45b589ba5440cf71ea = L.marker(
                [29.311659999999996, 47.481766],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f40fbb362eca4c8f89b9e84eeb49fdd4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_56a8d593d7004e45b589ba5440cf71ea.setIcon(icon_f40fbb362eca4c8f89b9e84eeb49fdd4);
        
    
        var popup_77da89c7f3194df38b215f83b49ec844 = L.popup({"maxWidth": "100%"});

        
            var html_6869ed1cc4534ff8819b3292d668f506 = $(`<div id="html_6869ed1cc4534ff8819b3292d668f506" style="width: 100.0%; height: 100.0%;">Kuwait <img src="http://localhost:8000/flag_resources/img/worldflags/kw.png "width="140px" ></div>`)[0];
            popup_77da89c7f3194df38b215f83b49ec844.setContent(html_6869ed1cc4534ff8819b3292d668f506);
        

        marker_56a8d593d7004e45b589ba5440cf71ea.bindPopup(popup_77da89c7f3194df38b215f83b49ec844)
        ;

        
    
    
            var marker_379294f9b1614898a53de81133312b8e = L.marker(
                [19.513469, -80.566956],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_93fb3588e85f49edb39dad8d50be96e8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_379294f9b1614898a53de81133312b8e.setIcon(icon_93fb3588e85f49edb39dad8d50be96e8);
        
    
        var popup_c62a39773105405db076baf94c626adb = L.popup({"maxWidth": "100%"});

        
            var html_24843baad208440fbc7be6ca35251655 = $(`<div id="html_24843baad208440fbc7be6ca35251655" style="width: 100.0%; height: 100.0%;">Cayman Islands <img src="http://localhost:8000/flag_resources/img/worldflags/ky.png "width="140px" ></div>`)[0];
            popup_c62a39773105405db076baf94c626adb.setContent(html_24843baad208440fbc7be6ca35251655);
        

        marker_379294f9b1614898a53de81133312b8e.bindPopup(popup_c62a39773105405db076baf94c626adb)
        ;

        
    
    
            var marker_458a537d50f14df095ec173223420494 = L.marker(
                [48.019573, 66.923684],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1308a355022e431ba27008c3a6feb8ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_458a537d50f14df095ec173223420494.setIcon(icon_1308a355022e431ba27008c3a6feb8ce);
        
    
        var popup_7a9edc70e6a24e3ca8939909f8da8aa2 = L.popup({"maxWidth": "100%"});

        
            var html_d324a3a3af5049b991d06bf0a9ec9934 = $(`<div id="html_d324a3a3af5049b991d06bf0a9ec9934" style="width: 100.0%; height: 100.0%;">Kazakhstan <img src="http://localhost:8000/flag_resources/img/worldflags/kz.png "width="140px" ></div>`)[0];
            popup_7a9edc70e6a24e3ca8939909f8da8aa2.setContent(html_d324a3a3af5049b991d06bf0a9ec9934);
        

        marker_458a537d50f14df095ec173223420494.bindPopup(popup_7a9edc70e6a24e3ca8939909f8da8aa2)
        ;

        
    
    
            var marker_bef41aecad024086909cbdcf0c6d4faa = L.marker(
                [19.856270000000002, 102.495496],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_578bd5efe0e44794939d8cebedd6a2ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bef41aecad024086909cbdcf0c6d4faa.setIcon(icon_578bd5efe0e44794939d8cebedd6a2ab);
        
    
        var popup_9409abdab7b64e7d93857f4543223d0d = L.popup({"maxWidth": "100%"});

        
            var html_226450cf8dfc4de28e47079f8893b8d7 = $(`<div id="html_226450cf8dfc4de28e47079f8893b8d7" style="width: 100.0%; height: 100.0%;">Laos <img src="http://localhost:8000/flag_resources/img/worldflags/la.png "width="140px" ></div>`)[0];
            popup_9409abdab7b64e7d93857f4543223d0d.setContent(html_226450cf8dfc4de28e47079f8893b8d7);
        

        marker_bef41aecad024086909cbdcf0c6d4faa.bindPopup(popup_9409abdab7b64e7d93857f4543223d0d)
        ;

        
    
    
            var marker_5ccc4635ab1c4665b54d0139dd10f98a = L.marker(
                [33.854721000000005, 35.862285],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_16dcfdd6ea994d49b76fc8779904d86d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5ccc4635ab1c4665b54d0139dd10f98a.setIcon(icon_16dcfdd6ea994d49b76fc8779904d86d);
        
    
        var popup_f80e1578ecc44a28ab1ba33ac4cd3fda = L.popup({"maxWidth": "100%"});

        
            var html_927f01aa69a74f6e82e1a4f65efe089a = $(`<div id="html_927f01aa69a74f6e82e1a4f65efe089a" style="width: 100.0%; height: 100.0%;">Lebanon <img src="http://localhost:8000/flag_resources/img/worldflags/lb.png "width="140px" ></div>`)[0];
            popup_f80e1578ecc44a28ab1ba33ac4cd3fda.setContent(html_927f01aa69a74f6e82e1a4f65efe089a);
        

        marker_5ccc4635ab1c4665b54d0139dd10f98a.bindPopup(popup_f80e1578ecc44a28ab1ba33ac4cd3fda)
        ;

        
    
    
            var marker_9478a2b6b3af4543a9b30dccf7fa8eec = L.marker(
                [13.909444, -60.97889300000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_0475910bcbc1402c876d2fe6d3efef59 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9478a2b6b3af4543a9b30dccf7fa8eec.setIcon(icon_0475910bcbc1402c876d2fe6d3efef59);
        
    
        var popup_d5f7a4f8a0d2495faa0d8f494c2a33d8 = L.popup({"maxWidth": "100%"});

        
            var html_3bcc31c39c52492d836a9ffc56b80ba0 = $(`<div id="html_3bcc31c39c52492d836a9ffc56b80ba0" style="width: 100.0%; height: 100.0%;">Saint Lucia <img src="http://localhost:8000/flag_resources/img/worldflags/lc.png "width="140px" ></div>`)[0];
            popup_d5f7a4f8a0d2495faa0d8f494c2a33d8.setContent(html_3bcc31c39c52492d836a9ffc56b80ba0);
        

        marker_9478a2b6b3af4543a9b30dccf7fa8eec.bindPopup(popup_d5f7a4f8a0d2495faa0d8f494c2a33d8)
        ;

        
    
    
            var marker_920817e844e34ce49c8b2dad12e53368 = L.marker(
                [47.166000000000004, 9.555373],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_dd3fec0687d74221be3e5e4917d1e0ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_920817e844e34ce49c8b2dad12e53368.setIcon(icon_dd3fec0687d74221be3e5e4917d1e0ec);
        
    
        var popup_1af6b8235dbd4bd6b1f1f14f7215aabf = L.popup({"maxWidth": "100%"});

        
            var html_1d5d852cce3d49f18300c1199ece4d1f = $(`<div id="html_1d5d852cce3d49f18300c1199ece4d1f" style="width: 100.0%; height: 100.0%;">Liechtenstein <img src="http://localhost:8000/flag_resources/img/worldflags/li.png "width="140px" ></div>`)[0];
            popup_1af6b8235dbd4bd6b1f1f14f7215aabf.setContent(html_1d5d852cce3d49f18300c1199ece4d1f);
        

        marker_920817e844e34ce49c8b2dad12e53368.bindPopup(popup_1af6b8235dbd4bd6b1f1f14f7215aabf)
        ;

        
    
    
            var marker_e656ef9403e348ce87752e3d1172b424 = L.marker(
                [7.873054, 80.77179699999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f7d7111674ba4d48a65e71d022a94cd6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e656ef9403e348ce87752e3d1172b424.setIcon(icon_f7d7111674ba4d48a65e71d022a94cd6);
        
    
        var popup_c60719a8810841c5a4a4068f78c6206d = L.popup({"maxWidth": "100%"});

        
            var html_5d11a271f9a24aeca84388d5b58e1482 = $(`<div id="html_5d11a271f9a24aeca84388d5b58e1482" style="width: 100.0%; height: 100.0%;">Sri Lanka <img src="http://localhost:8000/flag_resources/img/worldflags/lk.png "width="140px" ></div>`)[0];
            popup_c60719a8810841c5a4a4068f78c6206d.setContent(html_5d11a271f9a24aeca84388d5b58e1482);
        

        marker_e656ef9403e348ce87752e3d1172b424.bindPopup(popup_c60719a8810841c5a4a4068f78c6206d)
        ;

        
    
    
            var marker_7775da900f83432c847a2172a3850275 = L.marker(
                [6.4280550000000005, -9.429499],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_88cd66538b6d40b58fa9fcd5055d2a54 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7775da900f83432c847a2172a3850275.setIcon(icon_88cd66538b6d40b58fa9fcd5055d2a54);
        
    
        var popup_217da2cfa75342eb9d718ea3ed571845 = L.popup({"maxWidth": "100%"});

        
            var html_72a8343bb43d426aa75942bf2b91a357 = $(`<div id="html_72a8343bb43d426aa75942bf2b91a357" style="width: 100.0%; height: 100.0%;">Liberia <img src="http://localhost:8000/flag_resources/img/worldflags/lr.png "width="140px" ></div>`)[0];
            popup_217da2cfa75342eb9d718ea3ed571845.setContent(html_72a8343bb43d426aa75942bf2b91a357);
        

        marker_7775da900f83432c847a2172a3850275.bindPopup(popup_217da2cfa75342eb9d718ea3ed571845)
        ;

        
    
    
            var marker_d3dd43f2979c443fa4e84f5e7143a984 = L.marker(
                [-29.609988, 28.233608],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c82db59fe4eb498991df201eb33e0e8c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d3dd43f2979c443fa4e84f5e7143a984.setIcon(icon_c82db59fe4eb498991df201eb33e0e8c);
        
    
        var popup_f81329f21a3a470b85589c2573e6355d = L.popup({"maxWidth": "100%"});

        
            var html_786d3740179c44c19ab0a049f350eaf3 = $(`<div id="html_786d3740179c44c19ab0a049f350eaf3" style="width: 100.0%; height: 100.0%;">Lesotho <img src="http://localhost:8000/flag_resources/img/worldflags/ls.png "width="140px" ></div>`)[0];
            popup_f81329f21a3a470b85589c2573e6355d.setContent(html_786d3740179c44c19ab0a049f350eaf3);
        

        marker_d3dd43f2979c443fa4e84f5e7143a984.bindPopup(popup_f81329f21a3a470b85589c2573e6355d)
        ;

        
    
    
            var marker_0ea523c187544fafa67ce85fda3bd5a3 = L.marker(
                [55.169438, 23.881275],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e57d5366bd2942f586d05429b383b1a4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0ea523c187544fafa67ce85fda3bd5a3.setIcon(icon_e57d5366bd2942f586d05429b383b1a4);
        
    
        var popup_b544fb3ad7a24e21abfa3201bd42165d = L.popup({"maxWidth": "100%"});

        
            var html_e294333b57ec4ba9b25232d979d3e901 = $(`<div id="html_e294333b57ec4ba9b25232d979d3e901" style="width: 100.0%; height: 100.0%;">Lithuania <img src="http://localhost:8000/flag_resources/img/worldflags/lt.png "width="140px" ></div>`)[0];
            popup_b544fb3ad7a24e21abfa3201bd42165d.setContent(html_e294333b57ec4ba9b25232d979d3e901);
        

        marker_0ea523c187544fafa67ce85fda3bd5a3.bindPopup(popup_b544fb3ad7a24e21abfa3201bd42165d)
        ;

        
    
    
            var marker_ad45bd99f4ba409e8e5c68b9d46cd1de = L.marker(
                [49.815273, 6.129583],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_9366916014ad49f4a5719f496b78935e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ad45bd99f4ba409e8e5c68b9d46cd1de.setIcon(icon_9366916014ad49f4a5719f496b78935e);
        
    
        var popup_d97129ccfdff4c3f930ad598efa786a7 = L.popup({"maxWidth": "100%"});

        
            var html_38fdc16b47ea4e64a384645abd01035a = $(`<div id="html_38fdc16b47ea4e64a384645abd01035a" style="width: 100.0%; height: 100.0%;">Luxembourg <img src="http://localhost:8000/flag_resources/img/worldflags/lu.png "width="140px" ></div>`)[0];
            popup_d97129ccfdff4c3f930ad598efa786a7.setContent(html_38fdc16b47ea4e64a384645abd01035a);
        

        marker_ad45bd99f4ba409e8e5c68b9d46cd1de.bindPopup(popup_d97129ccfdff4c3f930ad598efa786a7)
        ;

        
    
    
            var marker_dabb0394f20d4d31a7c19592e0c8f96b = L.marker(
                [56.879635, 24.603189],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_116e5c6cd9e6476baec8bc65c1ad2f74 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dabb0394f20d4d31a7c19592e0c8f96b.setIcon(icon_116e5c6cd9e6476baec8bc65c1ad2f74);
        
    
        var popup_7a672b708c1242c9b2ab3d5d5080ff90 = L.popup({"maxWidth": "100%"});

        
            var html_6f3ca17480d9488ca16ca6f9d5d6416c = $(`<div id="html_6f3ca17480d9488ca16ca6f9d5d6416c" style="width: 100.0%; height: 100.0%;">Latvia <img src="http://localhost:8000/flag_resources/img/worldflags/lv.png "width="140px" ></div>`)[0];
            popup_7a672b708c1242c9b2ab3d5d5080ff90.setContent(html_6f3ca17480d9488ca16ca6f9d5d6416c);
        

        marker_dabb0394f20d4d31a7c19592e0c8f96b.bindPopup(popup_7a672b708c1242c9b2ab3d5d5080ff90)
        ;

        
    
    
            var marker_665e6351d908429b9ec1d3620c3a9d59 = L.marker(
                [26.3351, 17.228331],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_257fe579c12142ceba09457b68f3859e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_665e6351d908429b9ec1d3620c3a9d59.setIcon(icon_257fe579c12142ceba09457b68f3859e);
        
    
        var popup_5566058fc2dc431f99282fbef8541cd7 = L.popup({"maxWidth": "100%"});

        
            var html_eb2a24940bf04bf5b28f7c0360a0352c = $(`<div id="html_eb2a24940bf04bf5b28f7c0360a0352c" style="width: 100.0%; height: 100.0%;">Libya <img src="http://localhost:8000/flag_resources/img/worldflags/ly.png "width="140px" ></div>`)[0];
            popup_5566058fc2dc431f99282fbef8541cd7.setContent(html_eb2a24940bf04bf5b28f7c0360a0352c);
        

        marker_665e6351d908429b9ec1d3620c3a9d59.bindPopup(popup_5566058fc2dc431f99282fbef8541cd7)
        ;

        
    
    
            var marker_f46b351676184ce09202d928a461392c = L.marker(
                [31.791702, -7.09262],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b46bf78153a04629957401aa5486589e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f46b351676184ce09202d928a461392c.setIcon(icon_b46bf78153a04629957401aa5486589e);
        
    
        var popup_9bb4ab64b84b47f6b24834375ed6c993 = L.popup({"maxWidth": "100%"});

        
            var html_2f8d65e89560484b8bdb76bccdfd7956 = $(`<div id="html_2f8d65e89560484b8bdb76bccdfd7956" style="width: 100.0%; height: 100.0%;">Morocco <img src="http://localhost:8000/flag_resources/img/worldflags/ma.png "width="140px" ></div>`)[0];
            popup_9bb4ab64b84b47f6b24834375ed6c993.setContent(html_2f8d65e89560484b8bdb76bccdfd7956);
        

        marker_f46b351676184ce09202d928a461392c.bindPopup(popup_9bb4ab64b84b47f6b24834375ed6c993)
        ;

        
    
    
            var marker_cceea80c765d4c75bcf9aecee911da87 = L.marker(
                [43.750298, 7.412841],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b30d50eacfbb4ff19a20e616b32f6344 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cceea80c765d4c75bcf9aecee911da87.setIcon(icon_b30d50eacfbb4ff19a20e616b32f6344);
        
    
        var popup_565c214b47aa432c9610fa44113ab2ec = L.popup({"maxWidth": "100%"});

        
            var html_e1ec0abf414147af99637c6626b081ec = $(`<div id="html_e1ec0abf414147af99637c6626b081ec" style="width: 100.0%; height: 100.0%;">Monaco <img src="http://localhost:8000/flag_resources/img/worldflags/mc.png "width="140px" ></div>`)[0];
            popup_565c214b47aa432c9610fa44113ab2ec.setContent(html_e1ec0abf414147af99637c6626b081ec);
        

        marker_cceea80c765d4c75bcf9aecee911da87.bindPopup(popup_565c214b47aa432c9610fa44113ab2ec)
        ;

        
    
    
            var marker_326b3591ee5546788946dc10af65a90d = L.marker(
                [47.411631, 28.369884999999996],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_3806b78be2e6465da2df4a56f418d4a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_326b3591ee5546788946dc10af65a90d.setIcon(icon_3806b78be2e6465da2df4a56f418d4a5);
        
    
        var popup_4cf3d7cb03624f6681a9add4f7734099 = L.popup({"maxWidth": "100%"});

        
            var html_4288efc3e7b14f94ac17884aac0a9ebc = $(`<div id="html_4288efc3e7b14f94ac17884aac0a9ebc" style="width: 100.0%; height: 100.0%;">Moldova <img src="http://localhost:8000/flag_resources/img/worldflags/md.png "width="140px" ></div>`)[0];
            popup_4cf3d7cb03624f6681a9add4f7734099.setContent(html_4288efc3e7b14f94ac17884aac0a9ebc);
        

        marker_326b3591ee5546788946dc10af65a90d.bindPopup(popup_4cf3d7cb03624f6681a9add4f7734099)
        ;

        
    
    
            var marker_0b426d852a6542689ae8788239aa0ff0 = L.marker(
                [42.708678000000006, 19.37439],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_6eed3a42f8f84e3a8e982cb51c5568fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0b426d852a6542689ae8788239aa0ff0.setIcon(icon_6eed3a42f8f84e3a8e982cb51c5568fe);
        
    
        var popup_b762384c856847c286674e3148bd657d = L.popup({"maxWidth": "100%"});

        
            var html_8ecbcaff49764f04b04e36e9496e2d7e = $(`<div id="html_8ecbcaff49764f04b04e36e9496e2d7e" style="width: 100.0%; height: 100.0%;">Montenegro <img src="http://localhost:8000/flag_resources/img/worldflags/me.png "width="140px" ></div>`)[0];
            popup_b762384c856847c286674e3148bd657d.setContent(html_8ecbcaff49764f04b04e36e9496e2d7e);
        

        marker_0b426d852a6542689ae8788239aa0ff0.bindPopup(popup_b762384c856847c286674e3148bd657d)
        ;

        
    
    
            var marker_425fd3eaad5c4100b9ad84b1a14adac7 = L.marker(
                [-18.766947000000002, 46.869107],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_bd0479eac7294f1ba7ecd1e09dcc15cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_425fd3eaad5c4100b9ad84b1a14adac7.setIcon(icon_bd0479eac7294f1ba7ecd1e09dcc15cb);
        
    
        var popup_74a8035ca70847558cf94ab4f14461d8 = L.popup({"maxWidth": "100%"});

        
            var html_6dde5aa86d844b71b264e69924ff265d = $(`<div id="html_6dde5aa86d844b71b264e69924ff265d" style="width: 100.0%; height: 100.0%;">Madagascar <img src="http://localhost:8000/flag_resources/img/worldflags/mg.png "width="140px" ></div>`)[0];
            popup_74a8035ca70847558cf94ab4f14461d8.setContent(html_6dde5aa86d844b71b264e69924ff265d);
        

        marker_425fd3eaad5c4100b9ad84b1a14adac7.bindPopup(popup_74a8035ca70847558cf94ab4f14461d8)
        ;

        
    
    
            var marker_672f8b81cf3b4124abd625288a26f088 = L.marker(
                [7.131474000000001, 171.184478],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_5561306d161644d89b5d2ec64d3a2a1e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_672f8b81cf3b4124abd625288a26f088.setIcon(icon_5561306d161644d89b5d2ec64d3a2a1e);
        
    
        var popup_f1425078c37b40e9a0c33e0f67dbd06e = L.popup({"maxWidth": "100%"});

        
            var html_dda255cd8d244a30a143e076c6ee16b6 = $(`<div id="html_dda255cd8d244a30a143e076c6ee16b6" style="width: 100.0%; height: 100.0%;">Marshall Islands <img src="http://localhost:8000/flag_resources/img/worldflags/mh.png "width="140px" ></div>`)[0];
            popup_f1425078c37b40e9a0c33e0f67dbd06e.setContent(html_dda255cd8d244a30a143e076c6ee16b6);
        

        marker_672f8b81cf3b4124abd625288a26f088.bindPopup(popup_f1425078c37b40e9a0c33e0f67dbd06e)
        ;

        
    
    
            var marker_707a8aafac5c4ebda0a3f6614c5f3d50 = L.marker(
                [41.608635, 21.745275],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_8bca2dc6cf7f444bb8240132d6f26ae6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_707a8aafac5c4ebda0a3f6614c5f3d50.setIcon(icon_8bca2dc6cf7f444bb8240132d6f26ae6);
        
    
        var popup_43d5b9a2237c4bd9910728866a37bb1f = L.popup({"maxWidth": "100%"});

        
            var html_bd861a21dd8049fe845add29373818ca = $(`<div id="html_bd861a21dd8049fe845add29373818ca" style="width: 100.0%; height: 100.0%;">Macedonia [FYROM] <img src="http://localhost:8000/flag_resources/img/worldflags/mk.png "width="140px" ></div>`)[0];
            popup_43d5b9a2237c4bd9910728866a37bb1f.setContent(html_bd861a21dd8049fe845add29373818ca);
        

        marker_707a8aafac5c4ebda0a3f6614c5f3d50.bindPopup(popup_43d5b9a2237c4bd9910728866a37bb1f)
        ;

        
    
    
            var marker_c636cc2247134dddbf5615d2c9d14fd6 = L.marker(
                [17.570692, -3.9961660000000006],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_975ff334b80446d7954c375dfbd6c6e8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c636cc2247134dddbf5615d2c9d14fd6.setIcon(icon_975ff334b80446d7954c375dfbd6c6e8);
        
    
        var popup_d03778489a3d4449a6441e5bfd6bbc5c = L.popup({"maxWidth": "100%"});

        
            var html_766c6fd8148c4fcf91674e9777c03a64 = $(`<div id="html_766c6fd8148c4fcf91674e9777c03a64" style="width: 100.0%; height: 100.0%;">Mali <img src="http://localhost:8000/flag_resources/img/worldflags/ml.png "width="140px" ></div>`)[0];
            popup_d03778489a3d4449a6441e5bfd6bbc5c.setContent(html_766c6fd8148c4fcf91674e9777c03a64);
        

        marker_c636cc2247134dddbf5615d2c9d14fd6.bindPopup(popup_d03778489a3d4449a6441e5bfd6bbc5c)
        ;

        
    
    
            var marker_608fb8c54f1c41449e9bfb50033413fc = L.marker(
                [21.913965, 95.956223],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_9c2084e14ea445fd8c55eec616626f3b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_608fb8c54f1c41449e9bfb50033413fc.setIcon(icon_9c2084e14ea445fd8c55eec616626f3b);
        
    
        var popup_d4010f0a0b664709b51c9768bf043ab7 = L.popup({"maxWidth": "100%"});

        
            var html_e69ec247dd914e28bb8f4a72ae6396db = $(`<div id="html_e69ec247dd914e28bb8f4a72ae6396db" style="width: 100.0%; height: 100.0%;">Myanmar [Burma] <img src="http://localhost:8000/flag_resources/img/worldflags/mm.png "width="140px" ></div>`)[0];
            popup_d4010f0a0b664709b51c9768bf043ab7.setContent(html_e69ec247dd914e28bb8f4a72ae6396db);
        

        marker_608fb8c54f1c41449e9bfb50033413fc.bindPopup(popup_d4010f0a0b664709b51c9768bf043ab7)
        ;

        
    
    
            var marker_6ff11afbf7de47769ea9867ed81528a9 = L.marker(
                [46.862496, 103.84665600000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_5eb699696a794c1ca4ce15743970c5d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6ff11afbf7de47769ea9867ed81528a9.setIcon(icon_5eb699696a794c1ca4ce15743970c5d5);
        
    
        var popup_bf3c76e6f43341a8bad28880bdfa913a = L.popup({"maxWidth": "100%"});

        
            var html_bd467f96c37b4d3e993e6aaf7b73c2ae = $(`<div id="html_bd467f96c37b4d3e993e6aaf7b73c2ae" style="width: 100.0%; height: 100.0%;">Mongolia <img src="http://localhost:8000/flag_resources/img/worldflags/mn.png "width="140px" ></div>`)[0];
            popup_bf3c76e6f43341a8bad28880bdfa913a.setContent(html_bd467f96c37b4d3e993e6aaf7b73c2ae);
        

        marker_6ff11afbf7de47769ea9867ed81528a9.bindPopup(popup_bf3c76e6f43341a8bad28880bdfa913a)
        ;

        
    
    
            var marker_2fd3f9598bab4a7e9146fc347dd4bc37 = L.marker(
                [22.198745000000002, 113.543873],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_3b77ee2124f64ffa946507ba627a4a59 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2fd3f9598bab4a7e9146fc347dd4bc37.setIcon(icon_3b77ee2124f64ffa946507ba627a4a59);
        
    
        var popup_77a4cb2721f644e1b2bd4e4b41c5bad8 = L.popup({"maxWidth": "100%"});

        
            var html_24c8f486fb134d99bf885a2a00636e18 = $(`<div id="html_24c8f486fb134d99bf885a2a00636e18" style="width: 100.0%; height: 100.0%;">Macau <img src="http://localhost:8000/flag_resources/img/worldflags/mo.png "width="140px" ></div>`)[0];
            popup_77a4cb2721f644e1b2bd4e4b41c5bad8.setContent(html_24c8f486fb134d99bf885a2a00636e18);
        

        marker_2fd3f9598bab4a7e9146fc347dd4bc37.bindPopup(popup_77a4cb2721f644e1b2bd4e4b41c5bad8)
        ;

        
    
    
            var marker_cc8892b9c939444682eb5082a1a9e42b = L.marker(
                [17.33083, 145.38468999999998],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_9949676243c047b59fbb3532a00a22e8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cc8892b9c939444682eb5082a1a9e42b.setIcon(icon_9949676243c047b59fbb3532a00a22e8);
        
    
        var popup_9d1931c19d3240879b48efc2d42b226f = L.popup({"maxWidth": "100%"});

        
            var html_6a29fc3667674c5f89767d571a0cb356 = $(`<div id="html_6a29fc3667674c5f89767d571a0cb356" style="width: 100.0%; height: 100.0%;">Northern Mariana Islands <img src="http://localhost:8000/flag_resources/img/worldflags/mp.png "width="140px" ></div>`)[0];
            popup_9d1931c19d3240879b48efc2d42b226f.setContent(html_6a29fc3667674c5f89767d571a0cb356);
        

        marker_cc8892b9c939444682eb5082a1a9e42b.bindPopup(popup_9d1931c19d3240879b48efc2d42b226f)
        ;

        
    
    
            var marker_be37f20b56e74c708e0ceddc761166ca = L.marker(
                [14.641528, -61.024174],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_35eef657c9e44646be22cd1fcf7fc0e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_be37f20b56e74c708e0ceddc761166ca.setIcon(icon_35eef657c9e44646be22cd1fcf7fc0e1);
        
    
        var popup_9696836b25ea43ed94c5c7c0a457777d = L.popup({"maxWidth": "100%"});

        
            var html_3604ca5adf2141f683d9df8b33752f0b = $(`<div id="html_3604ca5adf2141f683d9df8b33752f0b" style="width: 100.0%; height: 100.0%;">Martinique <img src="http://localhost:8000/flag_resources/img/worldflags/mq.png "width="140px" ></div>`)[0];
            popup_9696836b25ea43ed94c5c7c0a457777d.setContent(html_3604ca5adf2141f683d9df8b33752f0b);
        

        marker_be37f20b56e74c708e0ceddc761166ca.bindPopup(popup_9696836b25ea43ed94c5c7c0a457777d)
        ;

        
    
    
            var marker_27d5170572064f1abcfc7c48145de1d3 = L.marker(
                [21.00789, -10.940835],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ee1b954d234c4297989704b9675069fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_27d5170572064f1abcfc7c48145de1d3.setIcon(icon_ee1b954d234c4297989704b9675069fd);
        
    
        var popup_d8cfdf2ba4ec4a63a466f5cbabb0aaa1 = L.popup({"maxWidth": "100%"});

        
            var html_5a7f1d49ccf0400783fc1a1dec055206 = $(`<div id="html_5a7f1d49ccf0400783fc1a1dec055206" style="width: 100.0%; height: 100.0%;">Mauritania <img src="http://localhost:8000/flag_resources/img/worldflags/mr.png "width="140px" ></div>`)[0];
            popup_d8cfdf2ba4ec4a63a466f5cbabb0aaa1.setContent(html_5a7f1d49ccf0400783fc1a1dec055206);
        

        marker_27d5170572064f1abcfc7c48145de1d3.bindPopup(popup_d8cfdf2ba4ec4a63a466f5cbabb0aaa1)
        ;

        
    
    
            var marker_1625b015a6ee4dc5a34ac397e75f8062 = L.marker(
                [16.742498, -62.187366000000004],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c6544163f5fd480b844f0d5d65c9d5b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1625b015a6ee4dc5a34ac397e75f8062.setIcon(icon_c6544163f5fd480b844f0d5d65c9d5b8);
        
    
        var popup_8728358340744573b3c8ea9772657d97 = L.popup({"maxWidth": "100%"});

        
            var html_73d2a95af7644f32b4cfbfaf46ba2269 = $(`<div id="html_73d2a95af7644f32b4cfbfaf46ba2269" style="width: 100.0%; height: 100.0%;">Montserrat <img src="http://localhost:8000/flag_resources/img/worldflags/ms.png "width="140px" ></div>`)[0];
            popup_8728358340744573b3c8ea9772657d97.setContent(html_73d2a95af7644f32b4cfbfaf46ba2269);
        

        marker_1625b015a6ee4dc5a34ac397e75f8062.bindPopup(popup_8728358340744573b3c8ea9772657d97)
        ;

        
    
    
            var marker_cad75c0c93f04dc5a9f67efeee7f5c3a = L.marker(
                [35.937496, 14.375416],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f753823fc3be49268a55f388636e47c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cad75c0c93f04dc5a9f67efeee7f5c3a.setIcon(icon_f753823fc3be49268a55f388636e47c0);
        
    
        var popup_d14c0b2769854a13abd09ed4a81ee025 = L.popup({"maxWidth": "100%"});

        
            var html_ec08de154b4c47e29a1a3a74fe4f84b4 = $(`<div id="html_ec08de154b4c47e29a1a3a74fe4f84b4" style="width: 100.0%; height: 100.0%;">Malta <img src="http://localhost:8000/flag_resources/img/worldflags/mt.png "width="140px" ></div>`)[0];
            popup_d14c0b2769854a13abd09ed4a81ee025.setContent(html_ec08de154b4c47e29a1a3a74fe4f84b4);
        

        marker_cad75c0c93f04dc5a9f67efeee7f5c3a.bindPopup(popup_d14c0b2769854a13abd09ed4a81ee025)
        ;

        
    
    
            var marker_e10a9c44cd81415385e88320fa01d145 = L.marker(
                [-20.348404000000002, 57.552152],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_036b229544f643769c9b86e1a2993350 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e10a9c44cd81415385e88320fa01d145.setIcon(icon_036b229544f643769c9b86e1a2993350);
        
    
        var popup_2bf525863ecc46a48a3827ce6be4e2e9 = L.popup({"maxWidth": "100%"});

        
            var html_09635a107b4345bb922c120f1e328ed4 = $(`<div id="html_09635a107b4345bb922c120f1e328ed4" style="width: 100.0%; height: 100.0%;">Mauritius <img src="http://localhost:8000/flag_resources/img/worldflags/mu.png "width="140px" ></div>`)[0];
            popup_2bf525863ecc46a48a3827ce6be4e2e9.setContent(html_09635a107b4345bb922c120f1e328ed4);
        

        marker_e10a9c44cd81415385e88320fa01d145.bindPopup(popup_2bf525863ecc46a48a3827ce6be4e2e9)
        ;

        
    
    
            var marker_1ea5331c0cd64f4faf1b6e2973b5d7a6 = L.marker(
                [3.202778, 73.22068],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ffec7f29cc1b472a9af86bf679bae584 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1ea5331c0cd64f4faf1b6e2973b5d7a6.setIcon(icon_ffec7f29cc1b472a9af86bf679bae584);
        
    
        var popup_8c2d4eef4b324edd9f14ae0ca0753d94 = L.popup({"maxWidth": "100%"});

        
            var html_69ead00a557949cf8f435698b0471d64 = $(`<div id="html_69ead00a557949cf8f435698b0471d64" style="width: 100.0%; height: 100.0%;">Maldives <img src="http://localhost:8000/flag_resources/img/worldflags/mv.png "width="140px" ></div>`)[0];
            popup_8c2d4eef4b324edd9f14ae0ca0753d94.setContent(html_69ead00a557949cf8f435698b0471d64);
        

        marker_1ea5331c0cd64f4faf1b6e2973b5d7a6.bindPopup(popup_8c2d4eef4b324edd9f14ae0ca0753d94)
        ;

        
    
    
            var marker_ac17e3951f254545bec0433691f6c21f = L.marker(
                [-13.254307999999998, 34.301525],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4d7d10471ec240eb87d279b71cab7e63 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ac17e3951f254545bec0433691f6c21f.setIcon(icon_4d7d10471ec240eb87d279b71cab7e63);
        
    
        var popup_190435bdc5c94a0e8c1224f71008167a = L.popup({"maxWidth": "100%"});

        
            var html_39021f49209f4c1193189f0e06eda215 = $(`<div id="html_39021f49209f4c1193189f0e06eda215" style="width: 100.0%; height: 100.0%;">Malawi <img src="http://localhost:8000/flag_resources/img/worldflags/mw.png "width="140px" ></div>`)[0];
            popup_190435bdc5c94a0e8c1224f71008167a.setContent(html_39021f49209f4c1193189f0e06eda215);
        

        marker_ac17e3951f254545bec0433691f6c21f.bindPopup(popup_190435bdc5c94a0e8c1224f71008167a)
        ;

        
    
    
            var marker_732436c4a5e440c1a9658bdffa505f37 = L.marker(
                [23.634501, -102.552784],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_825582a9c2e34b34b470dd87c21a38ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_732436c4a5e440c1a9658bdffa505f37.setIcon(icon_825582a9c2e34b34b470dd87c21a38ae);
        
    
        var popup_364aa02781c241cfa418ed85cbed277f = L.popup({"maxWidth": "100%"});

        
            var html_b25f429d1a314de5b98f423138631a3c = $(`<div id="html_b25f429d1a314de5b98f423138631a3c" style="width: 100.0%; height: 100.0%;">Mexico <img src="http://localhost:8000/flag_resources/img/worldflags/mx.png "width="140px" ></div>`)[0];
            popup_364aa02781c241cfa418ed85cbed277f.setContent(html_b25f429d1a314de5b98f423138631a3c);
        

        marker_732436c4a5e440c1a9658bdffa505f37.bindPopup(popup_364aa02781c241cfa418ed85cbed277f)
        ;

        
    
    
            var marker_3713f6bc74034979930c710d1109a512 = L.marker(
                [4.210483999999999, 101.97576600000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1169826eb1ac4195bae4e99f9839b533 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3713f6bc74034979930c710d1109a512.setIcon(icon_1169826eb1ac4195bae4e99f9839b533);
        
    
        var popup_13c518cda7584898834a28b60ac3528e = L.popup({"maxWidth": "100%"});

        
            var html_5594b039ed5c4c0abacf2b7dd44d4d8e = $(`<div id="html_5594b039ed5c4c0abacf2b7dd44d4d8e" style="width: 100.0%; height: 100.0%;">Malaysia <img src="http://localhost:8000/flag_resources/img/worldflags/my.png "width="140px" ></div>`)[0];
            popup_13c518cda7584898834a28b60ac3528e.setContent(html_5594b039ed5c4c0abacf2b7dd44d4d8e);
        

        marker_3713f6bc74034979930c710d1109a512.bindPopup(popup_13c518cda7584898834a28b60ac3528e)
        ;

        
    
    
            var marker_8b963b3b54ee4eb09fb45a0db288db41 = L.marker(
                [-18.665695, 35.529562],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_6d342e6a07a84f5bb3953b8e92be8b05 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8b963b3b54ee4eb09fb45a0db288db41.setIcon(icon_6d342e6a07a84f5bb3953b8e92be8b05);
        
    
        var popup_2e7da89d1592428faa9e004760079ef1 = L.popup({"maxWidth": "100%"});

        
            var html_f384f345a170403399a1a204ceb9deb2 = $(`<div id="html_f384f345a170403399a1a204ceb9deb2" style="width: 100.0%; height: 100.0%;">Mozambique <img src="http://localhost:8000/flag_resources/img/worldflags/mz.png "width="140px" ></div>`)[0];
            popup_2e7da89d1592428faa9e004760079ef1.setContent(html_f384f345a170403399a1a204ceb9deb2);
        

        marker_8b963b3b54ee4eb09fb45a0db288db41.bindPopup(popup_2e7da89d1592428faa9e004760079ef1)
        ;

        
    
    
            var marker_78898558c36a447da482e2b525fe1146 = L.marker(
                [-22.957639999999998, 18.49041],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_39238e751bc949cbb4995cc21be9c474 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_78898558c36a447da482e2b525fe1146.setIcon(icon_39238e751bc949cbb4995cc21be9c474);
        
    
        var popup_806373474c09431997b67dd4a0fa8d2d = L.popup({"maxWidth": "100%"});

        
            var html_62c45c608d70407cbe2b6ed11a22017d = $(`<div id="html_62c45c608d70407cbe2b6ed11a22017d" style="width: 100.0%; height: 100.0%;">Namibia <img src="http://localhost:8000/flag_resources/img/worldflags/na.png "width="140px" ></div>`)[0];
            popup_806373474c09431997b67dd4a0fa8d2d.setContent(html_62c45c608d70407cbe2b6ed11a22017d);
        

        marker_78898558c36a447da482e2b525fe1146.bindPopup(popup_806373474c09431997b67dd4a0fa8d2d)
        ;

        
    
    
            var marker_e10321caf19f41a28e50e54e9640b840 = L.marker(
                [-20.904304999999997, 165.618042],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_7de16454b8c04d5dbdb0ef03e125cd92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e10321caf19f41a28e50e54e9640b840.setIcon(icon_7de16454b8c04d5dbdb0ef03e125cd92);
        
    
        var popup_57313869822841b68cf6171fd73ce47c = L.popup({"maxWidth": "100%"});

        
            var html_7d216ea0fddd4199ab5d3789da991668 = $(`<div id="html_7d216ea0fddd4199ab5d3789da991668" style="width: 100.0%; height: 100.0%;">New Caledonia <img src="http://localhost:8000/flag_resources/img/worldflags/nc.png "width="140px" ></div>`)[0];
            popup_57313869822841b68cf6171fd73ce47c.setContent(html_7d216ea0fddd4199ab5d3789da991668);
        

        marker_e10321caf19f41a28e50e54e9640b840.bindPopup(popup_57313869822841b68cf6171fd73ce47c)
        ;

        
    
    
            var marker_59f57c4d192a4521a86fbb3b418a82d0 = L.marker(
                [17.607789, 8.081666],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_fe5c3fd9655f4590ab1d956762dccea6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_59f57c4d192a4521a86fbb3b418a82d0.setIcon(icon_fe5c3fd9655f4590ab1d956762dccea6);
        
    
        var popup_1e0ebdd044fe4d4f9cc747feaff73fb0 = L.popup({"maxWidth": "100%"});

        
            var html_3d37b87eecc64d0ea09debdac6157fef = $(`<div id="html_3d37b87eecc64d0ea09debdac6157fef" style="width: 100.0%; height: 100.0%;">Niger <img src="http://localhost:8000/flag_resources/img/worldflags/ne.png "width="140px" ></div>`)[0];
            popup_1e0ebdd044fe4d4f9cc747feaff73fb0.setContent(html_3d37b87eecc64d0ea09debdac6157fef);
        

        marker_59f57c4d192a4521a86fbb3b418a82d0.bindPopup(popup_1e0ebdd044fe4d4f9cc747feaff73fb0)
        ;

        
    
    
            var marker_5c9fcc0eb60d43fbadaebd57a25a88b7 = L.marker(
                [-29.040834999999998, 167.954712],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c85f27219a9c4901bc7ecc649818fda2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5c9fcc0eb60d43fbadaebd57a25a88b7.setIcon(icon_c85f27219a9c4901bc7ecc649818fda2);
        
    
        var popup_8431261848a34de68012d006a59cdbc1 = L.popup({"maxWidth": "100%"});

        
            var html_11533e826a854e12bf90481c3896f12b = $(`<div id="html_11533e826a854e12bf90481c3896f12b" style="width: 100.0%; height: 100.0%;">Norfolk Island <img src="http://localhost:8000/flag_resources/img/worldflags/nf.png "width="140px" ></div>`)[0];
            popup_8431261848a34de68012d006a59cdbc1.setContent(html_11533e826a854e12bf90481c3896f12b);
        

        marker_5c9fcc0eb60d43fbadaebd57a25a88b7.bindPopup(popup_8431261848a34de68012d006a59cdbc1)
        ;

        
    
    
            var marker_63963fd652524e2187a9c73e4bd8ca46 = L.marker(
                [9.081999, 8.675277000000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ca539ebe8dc14434a909fd7d923c0a1d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_63963fd652524e2187a9c73e4bd8ca46.setIcon(icon_ca539ebe8dc14434a909fd7d923c0a1d);
        
    
        var popup_a8d1ec493b134c559d31692a84332454 = L.popup({"maxWidth": "100%"});

        
            var html_4de953f37f634040bd188ffca07f1479 = $(`<div id="html_4de953f37f634040bd188ffca07f1479" style="width: 100.0%; height: 100.0%;">Nigeria <img src="http://localhost:8000/flag_resources/img/worldflags/ng.png "width="140px" ></div>`)[0];
            popup_a8d1ec493b134c559d31692a84332454.setContent(html_4de953f37f634040bd188ffca07f1479);
        

        marker_63963fd652524e2187a9c73e4bd8ca46.bindPopup(popup_a8d1ec493b134c559d31692a84332454)
        ;

        
    
    
            var marker_e06499a53bcf46ddbf2f00e4c0f980ed = L.marker(
                [12.865416, -85.207229],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c97ed17c2dbd40eeb715ea8d06193c0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e06499a53bcf46ddbf2f00e4c0f980ed.setIcon(icon_c97ed17c2dbd40eeb715ea8d06193c0c);
        
    
        var popup_1f434af65b6940c6bdf68d59fd8dc7f4 = L.popup({"maxWidth": "100%"});

        
            var html_f92c95b32b5b4a51b50331ef5ed16d88 = $(`<div id="html_f92c95b32b5b4a51b50331ef5ed16d88" style="width: 100.0%; height: 100.0%;">Nicaragua <img src="http://localhost:8000/flag_resources/img/worldflags/ni.png "width="140px" ></div>`)[0];
            popup_1f434af65b6940c6bdf68d59fd8dc7f4.setContent(html_f92c95b32b5b4a51b50331ef5ed16d88);
        

        marker_e06499a53bcf46ddbf2f00e4c0f980ed.bindPopup(popup_1f434af65b6940c6bdf68d59fd8dc7f4)
        ;

        
    
    
            var marker_263a38a47eaa4abead8862aab9622b90 = L.marker(
                [52.132633, 5.291266],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_0c5a8f7fcf5a44e5be0554e3ac8afcfe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_263a38a47eaa4abead8862aab9622b90.setIcon(icon_0c5a8f7fcf5a44e5be0554e3ac8afcfe);
        
    
        var popup_acd72e204ea0426f8922b912783d4f1a = L.popup({"maxWidth": "100%"});

        
            var html_f61a56e7944341109dd12f2dc86bc15d = $(`<div id="html_f61a56e7944341109dd12f2dc86bc15d" style="width: 100.0%; height: 100.0%;">Netherlands <img src="http://localhost:8000/flag_resources/img/worldflags/nl.png "width="140px" ></div>`)[0];
            popup_acd72e204ea0426f8922b912783d4f1a.setContent(html_f61a56e7944341109dd12f2dc86bc15d);
        

        marker_263a38a47eaa4abead8862aab9622b90.bindPopup(popup_acd72e204ea0426f8922b912783d4f1a)
        ;

        
    
    
            var marker_13b283c3e8364e92a611d7b2c942546c = L.marker(
                [60.472024, 8.468946],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_167265b80a05448fb5a004cccaa4648d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_13b283c3e8364e92a611d7b2c942546c.setIcon(icon_167265b80a05448fb5a004cccaa4648d);
        
    
        var popup_2b10da6e8bb145739dfdd30882c62f6d = L.popup({"maxWidth": "100%"});

        
            var html_31de167516504faeb2edd39d9631c8a0 = $(`<div id="html_31de167516504faeb2edd39d9631c8a0" style="width: 100.0%; height: 100.0%;">Norway <img src="http://localhost:8000/flag_resources/img/worldflags/no.png "width="140px" ></div>`)[0];
            popup_2b10da6e8bb145739dfdd30882c62f6d.setContent(html_31de167516504faeb2edd39d9631c8a0);
        

        marker_13b283c3e8364e92a611d7b2c942546c.bindPopup(popup_2b10da6e8bb145739dfdd30882c62f6d)
        ;

        
    
    
            var marker_89cafe053b2347e39221f995200b42b3 = L.marker(
                [28.394857000000002, 84.12400799999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f64100844b594f689cf6db88fa0f3969 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_89cafe053b2347e39221f995200b42b3.setIcon(icon_f64100844b594f689cf6db88fa0f3969);
        
    
        var popup_ba6ba887961445c9ad78758c497b3f34 = L.popup({"maxWidth": "100%"});

        
            var html_23469f1204604311a70cad3525c6364f = $(`<div id="html_23469f1204604311a70cad3525c6364f" style="width: 100.0%; height: 100.0%;">Nepal <img src="http://localhost:8000/flag_resources/img/worldflags/np.png "width="140px" ></div>`)[0];
            popup_ba6ba887961445c9ad78758c497b3f34.setContent(html_23469f1204604311a70cad3525c6364f);
        

        marker_89cafe053b2347e39221f995200b42b3.bindPopup(popup_ba6ba887961445c9ad78758c497b3f34)
        ;

        
    
    
            var marker_95742ee566cc4e3bad32e7c0ee9661a6 = L.marker(
                [-0.522778, 166.931503],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_919ea08e1fae45edaf5435cbc842ce5b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_95742ee566cc4e3bad32e7c0ee9661a6.setIcon(icon_919ea08e1fae45edaf5435cbc842ce5b);
        
    
        var popup_8b28d175dc6340128782632a825353dd = L.popup({"maxWidth": "100%"});

        
            var html_87bb89fb9c684718a53b3ead8624a1ae = $(`<div id="html_87bb89fb9c684718a53b3ead8624a1ae" style="width: 100.0%; height: 100.0%;">Nauru <img src="http://localhost:8000/flag_resources/img/worldflags/nr.png "width="140px" ></div>`)[0];
            popup_8b28d175dc6340128782632a825353dd.setContent(html_87bb89fb9c684718a53b3ead8624a1ae);
        

        marker_95742ee566cc4e3bad32e7c0ee9661a6.bindPopup(popup_8b28d175dc6340128782632a825353dd)
        ;

        
    
    
            var marker_68d536c0cb9843c8a6130e052af9d296 = L.marker(
                [-19.054445, -169.867233],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1d79e3c5d4e148749bb698bb73aa4750 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_68d536c0cb9843c8a6130e052af9d296.setIcon(icon_1d79e3c5d4e148749bb698bb73aa4750);
        
    
        var popup_cf77df59dd764a22b9ad0f916767e0b9 = L.popup({"maxWidth": "100%"});

        
            var html_dbf0692112374c0d80ec76d64f645ef3 = $(`<div id="html_dbf0692112374c0d80ec76d64f645ef3" style="width: 100.0%; height: 100.0%;">Niue <img src="http://localhost:8000/flag_resources/img/worldflags/nu.png "width="140px" ></div>`)[0];
            popup_cf77df59dd764a22b9ad0f916767e0b9.setContent(html_dbf0692112374c0d80ec76d64f645ef3);
        

        marker_68d536c0cb9843c8a6130e052af9d296.bindPopup(popup_cf77df59dd764a22b9ad0f916767e0b9)
        ;

        
    
    
            var marker_fbdc040ad5ce43baa291020811485ec6 = L.marker(
                [-40.900557, 174.88597099999998],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_aa328c7881d0404492ce0bc1b227cbd0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fbdc040ad5ce43baa291020811485ec6.setIcon(icon_aa328c7881d0404492ce0bc1b227cbd0);
        
    
        var popup_1728d11de670449e896441a91d87b7dd = L.popup({"maxWidth": "100%"});

        
            var html_9111946d9ebf4b0aa07c88794dd7c849 = $(`<div id="html_9111946d9ebf4b0aa07c88794dd7c849" style="width: 100.0%; height: 100.0%;">New Zealand <img src="http://localhost:8000/flag_resources/img/worldflags/nz.png "width="140px" ></div>`)[0];
            popup_1728d11de670449e896441a91d87b7dd.setContent(html_9111946d9ebf4b0aa07c88794dd7c849);
        

        marker_fbdc040ad5ce43baa291020811485ec6.bindPopup(popup_1728d11de670449e896441a91d87b7dd)
        ;

        
    
    
            var marker_bc154f73d0c345b592979f592778229b = L.marker(
                [21.512583, 55.923255000000005],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4c595336e5384b5d874f135d8bccefbd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bc154f73d0c345b592979f592778229b.setIcon(icon_4c595336e5384b5d874f135d8bccefbd);
        
    
        var popup_8cf5a53b454a4de68683372ce4af1b34 = L.popup({"maxWidth": "100%"});

        
            var html_a8e340c57ac64a4a8400aa1c38a135b2 = $(`<div id="html_a8e340c57ac64a4a8400aa1c38a135b2" style="width: 100.0%; height: 100.0%;">Oman <img src="http://localhost:8000/flag_resources/img/worldflags/om.png "width="140px" ></div>`)[0];
            popup_8cf5a53b454a4de68683372ce4af1b34.setContent(html_a8e340c57ac64a4a8400aa1c38a135b2);
        

        marker_bc154f73d0c345b592979f592778229b.bindPopup(popup_8cf5a53b454a4de68683372ce4af1b34)
        ;

        
    
    
            var marker_a237342a261b42fdb6b3c2caac5c8568 = L.marker(
                [8.537981, -80.782127],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_46d98fd4808b465483573511b8eda9d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a237342a261b42fdb6b3c2caac5c8568.setIcon(icon_46d98fd4808b465483573511b8eda9d3);
        
    
        var popup_643fbc6de92d49f491bcfaad455795ea = L.popup({"maxWidth": "100%"});

        
            var html_c26c1197bf2249f9828bf59d74e95c19 = $(`<div id="html_c26c1197bf2249f9828bf59d74e95c19" style="width: 100.0%; height: 100.0%;">Panama <img src="http://localhost:8000/flag_resources/img/worldflags/pa.png "width="140px" ></div>`)[0];
            popup_643fbc6de92d49f491bcfaad455795ea.setContent(html_c26c1197bf2249f9828bf59d74e95c19);
        

        marker_a237342a261b42fdb6b3c2caac5c8568.bindPopup(popup_643fbc6de92d49f491bcfaad455795ea)
        ;

        
    
    
            var marker_916dde81a6664bf3b2e2023bbdab6520 = L.marker(
                [-9.189967, -75.015152],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_bbbbab291ca34a459debc6c9c35628fd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_916dde81a6664bf3b2e2023bbdab6520.setIcon(icon_bbbbab291ca34a459debc6c9c35628fd);
        
    
        var popup_26758e1a6d0c4b769aceddbd4e157768 = L.popup({"maxWidth": "100%"});

        
            var html_aa97922ae2ce4af488dc60ed8f8f8a4a = $(`<div id="html_aa97922ae2ce4af488dc60ed8f8f8a4a" style="width: 100.0%; height: 100.0%;">Peru <img src="http://localhost:8000/flag_resources/img/worldflags/pe.png "width="140px" ></div>`)[0];
            popup_26758e1a6d0c4b769aceddbd4e157768.setContent(html_aa97922ae2ce4af488dc60ed8f8f8a4a);
        

        marker_916dde81a6664bf3b2e2023bbdab6520.bindPopup(popup_26758e1a6d0c4b769aceddbd4e157768)
        ;

        
    
    
            var marker_68dcaa7d4a0d4cf29aa82a4cd6675fe3 = L.marker(
                [-17.679742, -149.40684299999998],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_abd606b2f04647e19c34cd54a3a4e309 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_68dcaa7d4a0d4cf29aa82a4cd6675fe3.setIcon(icon_abd606b2f04647e19c34cd54a3a4e309);
        
    
        var popup_2cb59f100c724693a606669a0dd87ab9 = L.popup({"maxWidth": "100%"});

        
            var html_5484e5b6b0f0427e807fcef88c8c72a4 = $(`<div id="html_5484e5b6b0f0427e807fcef88c8c72a4" style="width: 100.0%; height: 100.0%;">French Polynesia <img src="http://localhost:8000/flag_resources/img/worldflags/pf.png "width="140px" ></div>`)[0];
            popup_2cb59f100c724693a606669a0dd87ab9.setContent(html_5484e5b6b0f0427e807fcef88c8c72a4);
        

        marker_68dcaa7d4a0d4cf29aa82a4cd6675fe3.bindPopup(popup_2cb59f100c724693a606669a0dd87ab9)
        ;

        
    
    
            var marker_360a74b0aab14adf85dd03a105310983 = L.marker(
                [-6.314993, 143.95555],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ee81755333684fad8a171be6190dfb59 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_360a74b0aab14adf85dd03a105310983.setIcon(icon_ee81755333684fad8a171be6190dfb59);
        
    
        var popup_aa5f3b457fb74edabc2adf683130e667 = L.popup({"maxWidth": "100%"});

        
            var html_1f2d594ebeae48d1a2ab476eb9ecc621 = $(`<div id="html_1f2d594ebeae48d1a2ab476eb9ecc621" style="width: 100.0%; height: 100.0%;">Papua New Guinea <img src="http://localhost:8000/flag_resources/img/worldflags/pg.png "width="140px" ></div>`)[0];
            popup_aa5f3b457fb74edabc2adf683130e667.setContent(html_1f2d594ebeae48d1a2ab476eb9ecc621);
        

        marker_360a74b0aab14adf85dd03a105310983.bindPopup(popup_aa5f3b457fb74edabc2adf683130e667)
        ;

        
    
    
            var marker_384725634f2e4050a332c9703a90c242 = L.marker(
                [12.879721, 121.77401699999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_6f61a25c38604238b21cf82956d74bd8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_384725634f2e4050a332c9703a90c242.setIcon(icon_6f61a25c38604238b21cf82956d74bd8);
        
    
        var popup_54c48079e6ee43d1a8bf8cbdc900b7c4 = L.popup({"maxWidth": "100%"});

        
            var html_b05605c617cb43628afb95b5b1d36963 = $(`<div id="html_b05605c617cb43628afb95b5b1d36963" style="width: 100.0%; height: 100.0%;">Philippines <img src="http://localhost:8000/flag_resources/img/worldflags/ph.png "width="140px" ></div>`)[0];
            popup_54c48079e6ee43d1a8bf8cbdc900b7c4.setContent(html_b05605c617cb43628afb95b5b1d36963);
        

        marker_384725634f2e4050a332c9703a90c242.bindPopup(popup_54c48079e6ee43d1a8bf8cbdc900b7c4)
        ;

        
    
    
            var marker_224825d8474b48aca09a28a0cc7f2fda = L.marker(
                [30.375321000000003, 69.345116],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_d95d33a14735421a874f836bdd4c9c8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_224825d8474b48aca09a28a0cc7f2fda.setIcon(icon_d95d33a14735421a874f836bdd4c9c8e);
        
    
        var popup_cfe869196995401e92af548d81d30633 = L.popup({"maxWidth": "100%"});

        
            var html_6deb0ea92cfa4f84b192a19a854a590f = $(`<div id="html_6deb0ea92cfa4f84b192a19a854a590f" style="width: 100.0%; height: 100.0%;">Pakistan <img src="http://localhost:8000/flag_resources/img/worldflags/pk.png "width="140px" ></div>`)[0];
            popup_cfe869196995401e92af548d81d30633.setContent(html_6deb0ea92cfa4f84b192a19a854a590f);
        

        marker_224825d8474b48aca09a28a0cc7f2fda.bindPopup(popup_cfe869196995401e92af548d81d30633)
        ;

        
    
    
            var marker_208f096adc504af0949dad584138eb4c = L.marker(
                [51.919438, 19.145135999999997],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_2230b21fbc954973bd2f379c08f02650 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_208f096adc504af0949dad584138eb4c.setIcon(icon_2230b21fbc954973bd2f379c08f02650);
        
    
        var popup_5b91ef59c8be4fdeab0693f822b6e276 = L.popup({"maxWidth": "100%"});

        
            var html_e2b6b2c649bc4c448a1fd11de6c1fe57 = $(`<div id="html_e2b6b2c649bc4c448a1fd11de6c1fe57" style="width: 100.0%; height: 100.0%;">Poland <img src="http://localhost:8000/flag_resources/img/worldflags/pl.png "width="140px" ></div>`)[0];
            popup_5b91ef59c8be4fdeab0693f822b6e276.setContent(html_e2b6b2c649bc4c448a1fd11de6c1fe57);
        

        marker_208f096adc504af0949dad584138eb4c.bindPopup(popup_5b91ef59c8be4fdeab0693f822b6e276)
        ;

        
    
    
            var marker_53502935cd0a4786bcf9c6e145ad487e = L.marker(
                [46.941936, -56.27111],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_99dd1b1a5c73433ead64c27919ddb9b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_53502935cd0a4786bcf9c6e145ad487e.setIcon(icon_99dd1b1a5c73433ead64c27919ddb9b6);
        
    
        var popup_3bd1207bb9824831bf098c5605c2c2c0 = L.popup({"maxWidth": "100%"});

        
            var html_92813d08da574ab98195e289523d63cc = $(`<div id="html_92813d08da574ab98195e289523d63cc" style="width: 100.0%; height: 100.0%;">Saint Pierre and Miquelon <img src="http://localhost:8000/flag_resources/img/worldflags/pm.png "width="140px" ></div>`)[0];
            popup_3bd1207bb9824831bf098c5605c2c2c0.setContent(html_92813d08da574ab98195e289523d63cc);
        

        marker_53502935cd0a4786bcf9c6e145ad487e.bindPopup(popup_3bd1207bb9824831bf098c5605c2c2c0)
        ;

        
    
    
            var marker_ff0108506c2848c181d8dd66b1c591d0 = L.marker(
                [-24.703615, -127.43930800000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_0c43cff2ad4048faa4f878a28fb64846 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ff0108506c2848c181d8dd66b1c591d0.setIcon(icon_0c43cff2ad4048faa4f878a28fb64846);
        
    
        var popup_154e4ec2174f4758bf97bd96c23dc474 = L.popup({"maxWidth": "100%"});

        
            var html_4195be397d644640bc87ae00fc8c056b = $(`<div id="html_4195be397d644640bc87ae00fc8c056b" style="width: 100.0%; height: 100.0%;">Pitcairn Islands <img src="http://localhost:8000/flag_resources/img/worldflags/pn.png "width="140px" ></div>`)[0];
            popup_154e4ec2174f4758bf97bd96c23dc474.setContent(html_4195be397d644640bc87ae00fc8c056b);
        

        marker_ff0108506c2848c181d8dd66b1c591d0.bindPopup(popup_154e4ec2174f4758bf97bd96c23dc474)
        ;

        
    
    
            var marker_a1bbd606e6624f459c255fae4710ca75 = L.marker(
                [18.220833, -66.590149],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b49a8253d0914309b371324431ad2ea1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a1bbd606e6624f459c255fae4710ca75.setIcon(icon_b49a8253d0914309b371324431ad2ea1);
        
    
        var popup_6a8dbfde7f3f4674ae4646f560a568b1 = L.popup({"maxWidth": "100%"});

        
            var html_f136156c27064273ad98db255ad6db4c = $(`<div id="html_f136156c27064273ad98db255ad6db4c" style="width: 100.0%; height: 100.0%;">Puerto Rico <img src="http://localhost:8000/flag_resources/img/worldflags/pr.png "width="140px" ></div>`)[0];
            popup_6a8dbfde7f3f4674ae4646f560a568b1.setContent(html_f136156c27064273ad98db255ad6db4c);
        

        marker_a1bbd606e6624f459c255fae4710ca75.bindPopup(popup_6a8dbfde7f3f4674ae4646f560a568b1)
        ;

        
    
    
            var marker_23c7ae7b27ef46259aa1e0833dbea1af = L.marker(
                [31.952162, 35.233154],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_793354975e4a443bb1cf0c160e4b0188 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_23c7ae7b27ef46259aa1e0833dbea1af.setIcon(icon_793354975e4a443bb1cf0c160e4b0188);
        
    
        var popup_e9330167d0f6493bb3b11c7c8bd3c4b9 = L.popup({"maxWidth": "100%"});

        
            var html_c114ff944fcc49679cf9e80738241cf1 = $(`<div id="html_c114ff944fcc49679cf9e80738241cf1" style="width: 100.0%; height: 100.0%;">Palestinian Territories <img src="http://localhost:8000/flag_resources/img/worldflags/ps.png "width="140px" ></div>`)[0];
            popup_e9330167d0f6493bb3b11c7c8bd3c4b9.setContent(html_c114ff944fcc49679cf9e80738241cf1);
        

        marker_23c7ae7b27ef46259aa1e0833dbea1af.bindPopup(popup_e9330167d0f6493bb3b11c7c8bd3c4b9)
        ;

        
    
    
            var marker_f76f6fc6abe54f5fad23cd6f3727182a = L.marker(
                [39.399871999999995, -8.224454],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_98beab75798a4b1aaa22aa7fd2c6fa65 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f76f6fc6abe54f5fad23cd6f3727182a.setIcon(icon_98beab75798a4b1aaa22aa7fd2c6fa65);
        
    
        var popup_18ead53602cd4f23be287a1a72c980b7 = L.popup({"maxWidth": "100%"});

        
            var html_a97a59703f8f4d0387fb0e84e2cfb8c2 = $(`<div id="html_a97a59703f8f4d0387fb0e84e2cfb8c2" style="width: 100.0%; height: 100.0%;">Portugal <img src="http://localhost:8000/flag_resources/img/worldflags/pt.png "width="140px" ></div>`)[0];
            popup_18ead53602cd4f23be287a1a72c980b7.setContent(html_a97a59703f8f4d0387fb0e84e2cfb8c2);
        

        marker_f76f6fc6abe54f5fad23cd6f3727182a.bindPopup(popup_18ead53602cd4f23be287a1a72c980b7)
        ;

        
    
    
            var marker_05b426dd9b074bbc99bbf1ac0d4a32d0 = L.marker(
                [7.51498, 134.58252],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4a9b0e2a238049c7af13a79ba184ac11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_05b426dd9b074bbc99bbf1ac0d4a32d0.setIcon(icon_4a9b0e2a238049c7af13a79ba184ac11);
        
    
        var popup_f673297f95ab471a96170d7cad5ffaba = L.popup({"maxWidth": "100%"});

        
            var html_79a8597e19d040d08a72006f0f559bd8 = $(`<div id="html_79a8597e19d040d08a72006f0f559bd8" style="width: 100.0%; height: 100.0%;">Palau <img src="http://localhost:8000/flag_resources/img/worldflags/pw.png "width="140px" ></div>`)[0];
            popup_f673297f95ab471a96170d7cad5ffaba.setContent(html_79a8597e19d040d08a72006f0f559bd8);
        

        marker_05b426dd9b074bbc99bbf1ac0d4a32d0.bindPopup(popup_f673297f95ab471a96170d7cad5ffaba)
        ;

        
    
    
            var marker_c1959d894ba4434ebb16affe58ad45dc = L.marker(
                [-23.442503, -58.44383199999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e78607e1891543cbb67e7558b6455f0f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c1959d894ba4434ebb16affe58ad45dc.setIcon(icon_e78607e1891543cbb67e7558b6455f0f);
        
    
        var popup_e4d2a57c372e45c682a68f0e15900355 = L.popup({"maxWidth": "100%"});

        
            var html_88c931ccd0cc4d4aa4b2ebc8ad75b227 = $(`<div id="html_88c931ccd0cc4d4aa4b2ebc8ad75b227" style="width: 100.0%; height: 100.0%;">Paraguay <img src="http://localhost:8000/flag_resources/img/worldflags/py.png "width="140px" ></div>`)[0];
            popup_e4d2a57c372e45c682a68f0e15900355.setContent(html_88c931ccd0cc4d4aa4b2ebc8ad75b227);
        

        marker_c1959d894ba4434ebb16affe58ad45dc.bindPopup(popup_e4d2a57c372e45c682a68f0e15900355)
        ;

        
    
    
            var marker_b70d1b32c7fc446f95a881829276f5f8 = L.marker(
                [25.354826, 51.183884],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_08b46fb77b0c4a1caa7cb3422d86ead7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b70d1b32c7fc446f95a881829276f5f8.setIcon(icon_08b46fb77b0c4a1caa7cb3422d86ead7);
        
    
        var popup_b05e385880244570a81c964b959bbdf2 = L.popup({"maxWidth": "100%"});

        
            var html_71a855a440224b0b83faa3b45311867a = $(`<div id="html_71a855a440224b0b83faa3b45311867a" style="width: 100.0%; height: 100.0%;">Qatar <img src="http://localhost:8000/flag_resources/img/worldflags/qa.png "width="140px" ></div>`)[0];
            popup_b05e385880244570a81c964b959bbdf2.setContent(html_71a855a440224b0b83faa3b45311867a);
        

        marker_b70d1b32c7fc446f95a881829276f5f8.bindPopup(popup_b05e385880244570a81c964b959bbdf2)
        ;

        
    
    
            var marker_fe307a45722f4425974c1fd4b3e675b5 = L.marker(
                [-21.115141, 55.536384],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_9d0dcd8796ea4073a5399fc726cd9a1f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fe307a45722f4425974c1fd4b3e675b5.setIcon(icon_9d0dcd8796ea4073a5399fc726cd9a1f);
        
    
        var popup_51256d91bd3c483d93a1d0c946b8f00e = L.popup({"maxWidth": "100%"});

        
            var html_3fb375fe38884821b088c2910ec725ef = $(`<div id="html_3fb375fe38884821b088c2910ec725ef" style="width: 100.0%; height: 100.0%;">RÃ©union <img src="http://localhost:8000/flag_resources/img/worldflags/re.png "width="140px" ></div>`)[0];
            popup_51256d91bd3c483d93a1d0c946b8f00e.setContent(html_3fb375fe38884821b088c2910ec725ef);
        

        marker_fe307a45722f4425974c1fd4b3e675b5.bindPopup(popup_51256d91bd3c483d93a1d0c946b8f00e)
        ;

        
    
    
            var marker_c53c5359c1374c7ca120b3675f7f794a = L.marker(
                [45.943160999999996, 24.96676],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_46b79aaa8b014fffa946f5f138682f92 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c53c5359c1374c7ca120b3675f7f794a.setIcon(icon_46b79aaa8b014fffa946f5f138682f92);
        
    
        var popup_724abd8fa170403790b1d427a10f4bc5 = L.popup({"maxWidth": "100%"});

        
            var html_d6378a7a023a44c29a3c2a92f9877e1a = $(`<div id="html_d6378a7a023a44c29a3c2a92f9877e1a" style="width: 100.0%; height: 100.0%;">Romania <img src="http://localhost:8000/flag_resources/img/worldflags/ro.png "width="140px" ></div>`)[0];
            popup_724abd8fa170403790b1d427a10f4bc5.setContent(html_d6378a7a023a44c29a3c2a92f9877e1a);
        

        marker_c53c5359c1374c7ca120b3675f7f794a.bindPopup(popup_724abd8fa170403790b1d427a10f4bc5)
        ;

        
    
    
            var marker_de2fb243ec7943f4afdbaf4b619a3f1d = L.marker(
                [44.016521000000004, 21.005859],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1b41b8795eca4fd8ad465fe3ac3e095f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_de2fb243ec7943f4afdbaf4b619a3f1d.setIcon(icon_1b41b8795eca4fd8ad465fe3ac3e095f);
        
    
        var popup_29c130d246ee4a97a895ea6860a581ad = L.popup({"maxWidth": "100%"});

        
            var html_1f7783a27a75436fb714f47c5c49a4d5 = $(`<div id="html_1f7783a27a75436fb714f47c5c49a4d5" style="width: 100.0%; height: 100.0%;">Serbia <img src="http://localhost:8000/flag_resources/img/worldflags/rs.png "width="140px" ></div>`)[0];
            popup_29c130d246ee4a97a895ea6860a581ad.setContent(html_1f7783a27a75436fb714f47c5c49a4d5);
        

        marker_de2fb243ec7943f4afdbaf4b619a3f1d.bindPopup(popup_29c130d246ee4a97a895ea6860a581ad)
        ;

        
    
    
            var marker_f5bbadf4343d492bb13491b07cc4be98 = L.marker(
                [61.52401, 105.31875600000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_042afb0504884e858755acbd6a21f727 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f5bbadf4343d492bb13491b07cc4be98.setIcon(icon_042afb0504884e858755acbd6a21f727);
        
    
        var popup_76952f8046494c9b8795a7a6792d9976 = L.popup({"maxWidth": "100%"});

        
            var html_352260a2cdb34b7ca04cc0bf688756fc = $(`<div id="html_352260a2cdb34b7ca04cc0bf688756fc" style="width: 100.0%; height: 100.0%;">Russia <img src="http://localhost:8000/flag_resources/img/worldflags/ru.png "width="140px" ></div>`)[0];
            popup_76952f8046494c9b8795a7a6792d9976.setContent(html_352260a2cdb34b7ca04cc0bf688756fc);
        

        marker_f5bbadf4343d492bb13491b07cc4be98.bindPopup(popup_76952f8046494c9b8795a7a6792d9976)
        ;

        
    
    
            var marker_098ee32722b346a7b870e2d51e46a7fd = L.marker(
                [-1.940278, 29.873888],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_369bff255f6040d7ab405e55e482d762 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_098ee32722b346a7b870e2d51e46a7fd.setIcon(icon_369bff255f6040d7ab405e55e482d762);
        
    
        var popup_608d2809d4534509a48b1afd9a4dd0b5 = L.popup({"maxWidth": "100%"});

        
            var html_2c65de94850b48d484ce04a6103a75cc = $(`<div id="html_2c65de94850b48d484ce04a6103a75cc" style="width: 100.0%; height: 100.0%;">Rwanda <img src="http://localhost:8000/flag_resources/img/worldflags/rw.png "width="140px" ></div>`)[0];
            popup_608d2809d4534509a48b1afd9a4dd0b5.setContent(html_2c65de94850b48d484ce04a6103a75cc);
        

        marker_098ee32722b346a7b870e2d51e46a7fd.bindPopup(popup_608d2809d4534509a48b1afd9a4dd0b5)
        ;

        
    
    
            var marker_b2e09e501f8f4998b12c11d4cd829f33 = L.marker(
                [23.885942, 45.079162],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f0e862cf365e4f8cadf0a77f04053f5c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b2e09e501f8f4998b12c11d4cd829f33.setIcon(icon_f0e862cf365e4f8cadf0a77f04053f5c);
        
    
        var popup_ac1cb3df937d4c85bf929792994db0f3 = L.popup({"maxWidth": "100%"});

        
            var html_84b8b105ce144d6d99baa9c5c2f9a0af = $(`<div id="html_84b8b105ce144d6d99baa9c5c2f9a0af" style="width: 100.0%; height: 100.0%;">Saudi Arabia <img src="http://localhost:8000/flag_resources/img/worldflags/sa.png "width="140px" ></div>`)[0];
            popup_ac1cb3df937d4c85bf929792994db0f3.setContent(html_84b8b105ce144d6d99baa9c5c2f9a0af);
        

        marker_b2e09e501f8f4998b12c11d4cd829f33.bindPopup(popup_ac1cb3df937d4c85bf929792994db0f3)
        ;

        
    
    
            var marker_3c02a41eab5c4c0a9e10705ef3c47193 = L.marker(
                [-9.645710000000001, 160.156194],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_afcc9702706f433f9ba2347636a1a170 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3c02a41eab5c4c0a9e10705ef3c47193.setIcon(icon_afcc9702706f433f9ba2347636a1a170);
        
    
        var popup_36c4e938d63c4d229d7b065182d177d7 = L.popup({"maxWidth": "100%"});

        
            var html_4ae8cda1778e412b9a745670b7f45a77 = $(`<div id="html_4ae8cda1778e412b9a745670b7f45a77" style="width: 100.0%; height: 100.0%;">Solomon Islands <img src="http://localhost:8000/flag_resources/img/worldflags/sb.png "width="140px" ></div>`)[0];
            popup_36c4e938d63c4d229d7b065182d177d7.setContent(html_4ae8cda1778e412b9a745670b7f45a77);
        

        marker_3c02a41eab5c4c0a9e10705ef3c47193.bindPopup(popup_36c4e938d63c4d229d7b065182d177d7)
        ;

        
    
    
            var marker_59f9467efe46418abfbfb2d4c6c19409 = L.marker(
                [-4.679574, 55.491977],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b19a141de2dc4b98b8bebd2418cdf45a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_59f9467efe46418abfbfb2d4c6c19409.setIcon(icon_b19a141de2dc4b98b8bebd2418cdf45a);
        
    
        var popup_abe29f6f24c5476d8822041e33eb39be = L.popup({"maxWidth": "100%"});

        
            var html_0fc28968ba164353b5943875400d5d36 = $(`<div id="html_0fc28968ba164353b5943875400d5d36" style="width: 100.0%; height: 100.0%;">Seychelles <img src="http://localhost:8000/flag_resources/img/worldflags/sc.png "width="140px" ></div>`)[0];
            popup_abe29f6f24c5476d8822041e33eb39be.setContent(html_0fc28968ba164353b5943875400d5d36);
        

        marker_59f9467efe46418abfbfb2d4c6c19409.bindPopup(popup_abe29f6f24c5476d8822041e33eb39be)
        ;

        
    
    
            var marker_fc8878b172554ffd9177ff4cc8bd3d8a = L.marker(
                [12.862807, 30.217636],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_619187bc63c84bfa9b5082ff7f85462d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fc8878b172554ffd9177ff4cc8bd3d8a.setIcon(icon_619187bc63c84bfa9b5082ff7f85462d);
        
    
        var popup_0c3039752bf04cc6a07f1c539bcb044a = L.popup({"maxWidth": "100%"});

        
            var html_7a23aa47512a4d4b80d12e36c91aaae5 = $(`<div id="html_7a23aa47512a4d4b80d12e36c91aaae5" style="width: 100.0%; height: 100.0%;">Sudan <img src="http://localhost:8000/flag_resources/img/worldflags/sd.png "width="140px" ></div>`)[0];
            popup_0c3039752bf04cc6a07f1c539bcb044a.setContent(html_7a23aa47512a4d4b80d12e36c91aaae5);
        

        marker_fc8878b172554ffd9177ff4cc8bd3d8a.bindPopup(popup_0c3039752bf04cc6a07f1c539bcb044a)
        ;

        
    
    
            var marker_c8ec48e9d59c47599abcb1f8836734b4 = L.marker(
                [60.128161, 18.643501],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_a2b00bc0109a4d54ac98185f3c5617d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c8ec48e9d59c47599abcb1f8836734b4.setIcon(icon_a2b00bc0109a4d54ac98185f3c5617d5);
        
    
        var popup_2ac9a241b9fe47a3a37f1475cad03e86 = L.popup({"maxWidth": "100%"});

        
            var html_5ce221ae86b94d2e941b4931e484b6d0 = $(`<div id="html_5ce221ae86b94d2e941b4931e484b6d0" style="width: 100.0%; height: 100.0%;">Sweden <img src="http://localhost:8000/flag_resources/img/worldflags/se.png "width="140px" ></div>`)[0];
            popup_2ac9a241b9fe47a3a37f1475cad03e86.setContent(html_5ce221ae86b94d2e941b4931e484b6d0);
        

        marker_c8ec48e9d59c47599abcb1f8836734b4.bindPopup(popup_2ac9a241b9fe47a3a37f1475cad03e86)
        ;

        
    
    
            var marker_c87f187427a944daacc45038c3fd672f = L.marker(
                [1.352083, 103.819836],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_a4100080fbb14e9ca94cb5b2fa2d75c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c87f187427a944daacc45038c3fd672f.setIcon(icon_a4100080fbb14e9ca94cb5b2fa2d75c5);
        
    
        var popup_2156efd9efa440f195e41d2d943f6fcb = L.popup({"maxWidth": "100%"});

        
            var html_8af3da88c1934aab949cb4b443d10ee7 = $(`<div id="html_8af3da88c1934aab949cb4b443d10ee7" style="width: 100.0%; height: 100.0%;">Singapore <img src="http://localhost:8000/flag_resources/img/worldflags/sg.png "width="140px" ></div>`)[0];
            popup_2156efd9efa440f195e41d2d943f6fcb.setContent(html_8af3da88c1934aab949cb4b443d10ee7);
        

        marker_c87f187427a944daacc45038c3fd672f.bindPopup(popup_2156efd9efa440f195e41d2d943f6fcb)
        ;

        
    
    
            var marker_95a095a2ccd840818460ce86113151dd = L.marker(
                [-24.143473999999998, -10.030696],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b4a62807fb0048e8aa61097c47e29ab1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_95a095a2ccd840818460ce86113151dd.setIcon(icon_b4a62807fb0048e8aa61097c47e29ab1);
        
    
        var popup_bad3532a62e24a7d9c7f6389ad65f3c2 = L.popup({"maxWidth": "100%"});

        
            var html_4d9919962dbd42f2bfd813a80a664b8a = $(`<div id="html_4d9919962dbd42f2bfd813a80a664b8a" style="width: 100.0%; height: 100.0%;">Saint Helena <img src="http://localhost:8000/flag_resources/img/worldflags/sh.png "width="140px" ></div>`)[0];
            popup_bad3532a62e24a7d9c7f6389ad65f3c2.setContent(html_4d9919962dbd42f2bfd813a80a664b8a);
        

        marker_95a095a2ccd840818460ce86113151dd.bindPopup(popup_bad3532a62e24a7d9c7f6389ad65f3c2)
        ;

        
    
    
            var marker_bd40694986834b70aa5f87e0964d06f8 = L.marker(
                [46.151241, 14.995463],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b782cdf3f6064d2f84e494014829362c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bd40694986834b70aa5f87e0964d06f8.setIcon(icon_b782cdf3f6064d2f84e494014829362c);
        
    
        var popup_993cf046518343759ec609f4992d9a23 = L.popup({"maxWidth": "100%"});

        
            var html_b6bc353882aa4b8d804ae9508a8a062e = $(`<div id="html_b6bc353882aa4b8d804ae9508a8a062e" style="width: 100.0%; height: 100.0%;">Slovenia <img src="http://localhost:8000/flag_resources/img/worldflags/si.png "width="140px" ></div>`)[0];
            popup_993cf046518343759ec609f4992d9a23.setContent(html_b6bc353882aa4b8d804ae9508a8a062e);
        

        marker_bd40694986834b70aa5f87e0964d06f8.bindPopup(popup_993cf046518343759ec609f4992d9a23)
        ;

        
    
    
            var marker_f1aaeb01891046718d70614caed27856 = L.marker(
                [77.553604, 23.670272],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_fcdb9364361a4917a1cf253efca74cd5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f1aaeb01891046718d70614caed27856.setIcon(icon_fcdb9364361a4917a1cf253efca74cd5);
        
    
        var popup_3f8e1b7a17624231ae252b411ee01538 = L.popup({"maxWidth": "100%"});

        
            var html_bd009e1dd36f4594840ad9095677516b = $(`<div id="html_bd009e1dd36f4594840ad9095677516b" style="width: 100.0%; height: 100.0%;">Svalbard and Jan Mayen <img src="http://localhost:8000/flag_resources/img/worldflags/sj.png "width="140px" ></div>`)[0];
            popup_3f8e1b7a17624231ae252b411ee01538.setContent(html_bd009e1dd36f4594840ad9095677516b);
        

        marker_f1aaeb01891046718d70614caed27856.bindPopup(popup_3f8e1b7a17624231ae252b411ee01538)
        ;

        
    
    
            var marker_aa9dff6ad1f04cb1a54d985e9a79a148 = L.marker(
                [48.669026, 19.699023999999998],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_cf23cc79cd93407587200eca9302c219 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_aa9dff6ad1f04cb1a54d985e9a79a148.setIcon(icon_cf23cc79cd93407587200eca9302c219);
        
    
        var popup_dc7b303fb4cc4187a2d95ada017ce4cb = L.popup({"maxWidth": "100%"});

        
            var html_e5f6e767a0054be9942e0a27d1471eac = $(`<div id="html_e5f6e767a0054be9942e0a27d1471eac" style="width: 100.0%; height: 100.0%;">Slovakia <img src="http://localhost:8000/flag_resources/img/worldflags/sk.png "width="140px" ></div>`)[0];
            popup_dc7b303fb4cc4187a2d95ada017ce4cb.setContent(html_e5f6e767a0054be9942e0a27d1471eac);
        

        marker_aa9dff6ad1f04cb1a54d985e9a79a148.bindPopup(popup_dc7b303fb4cc4187a2d95ada017ce4cb)
        ;

        
    
    
            var marker_09afb9e6f5da44f7ae95719fd43bba91 = L.marker(
                [8.460555000000001, -11.779889],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_05e71982df4a434ab6909923892d6169 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_09afb9e6f5da44f7ae95719fd43bba91.setIcon(icon_05e71982df4a434ab6909923892d6169);
        
    
        var popup_9869464ba2af4f2f951d5a14f436c1d5 = L.popup({"maxWidth": "100%"});

        
            var html_d93da55549e6433daeaaedefbb138ba8 = $(`<div id="html_d93da55549e6433daeaaedefbb138ba8" style="width: 100.0%; height: 100.0%;">Sierra Leone <img src="http://localhost:8000/flag_resources/img/worldflags/sl.png "width="140px" ></div>`)[0];
            popup_9869464ba2af4f2f951d5a14f436c1d5.setContent(html_d93da55549e6433daeaaedefbb138ba8);
        

        marker_09afb9e6f5da44f7ae95719fd43bba91.bindPopup(popup_9869464ba2af4f2f951d5a14f436c1d5)
        ;

        
    
    
            var marker_73865f52e46c4e53bac2ca917d96f36a = L.marker(
                [43.94236, 12.457777],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_0bb19d44ebd44207abe734aab7e00dd2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_73865f52e46c4e53bac2ca917d96f36a.setIcon(icon_0bb19d44ebd44207abe734aab7e00dd2);
        
    
        var popup_2b59dd175e1c4621ad24b055184d9121 = L.popup({"maxWidth": "100%"});

        
            var html_b71e6602c47641dd848310cd2d2bf3e1 = $(`<div id="html_b71e6602c47641dd848310cd2d2bf3e1" style="width: 100.0%; height: 100.0%;">San Marino <img src="http://localhost:8000/flag_resources/img/worldflags/sm.png "width="140px" ></div>`)[0];
            popup_2b59dd175e1c4621ad24b055184d9121.setContent(html_b71e6602c47641dd848310cd2d2bf3e1);
        

        marker_73865f52e46c4e53bac2ca917d96f36a.bindPopup(popup_2b59dd175e1c4621ad24b055184d9121)
        ;

        
    
    
            var marker_a1f32cbfb11b495194c35a8cd3f6bfb0 = L.marker(
                [14.497401000000002, -14.452361999999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_876a26d63b364780a0a09ef5e0da14f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a1f32cbfb11b495194c35a8cd3f6bfb0.setIcon(icon_876a26d63b364780a0a09ef5e0da14f1);
        
    
        var popup_cb26f699b5c149e6ad96575e6f0c5e17 = L.popup({"maxWidth": "100%"});

        
            var html_3a8ef84572c745e984456dafe5149673 = $(`<div id="html_3a8ef84572c745e984456dafe5149673" style="width: 100.0%; height: 100.0%;">Senegal <img src="http://localhost:8000/flag_resources/img/worldflags/sn.png "width="140px" ></div>`)[0];
            popup_cb26f699b5c149e6ad96575e6f0c5e17.setContent(html_3a8ef84572c745e984456dafe5149673);
        

        marker_a1f32cbfb11b495194c35a8cd3f6bfb0.bindPopup(popup_cb26f699b5c149e6ad96575e6f0c5e17)
        ;

        
    
    
            var marker_08c36bf610c24243a765ad7b39ce4e02 = L.marker(
                [5.152149, 46.199616],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_241fafc037954e898217e3ffcf8aa718 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_08c36bf610c24243a765ad7b39ce4e02.setIcon(icon_241fafc037954e898217e3ffcf8aa718);
        
    
        var popup_ae6ed5c258c94381adf6cd8717180628 = L.popup({"maxWidth": "100%"});

        
            var html_d944a799317a4f0fb02e48a64ccd0697 = $(`<div id="html_d944a799317a4f0fb02e48a64ccd0697" style="width: 100.0%; height: 100.0%;">Somalia <img src="http://localhost:8000/flag_resources/img/worldflags/so.png "width="140px" ></div>`)[0];
            popup_ae6ed5c258c94381adf6cd8717180628.setContent(html_d944a799317a4f0fb02e48a64ccd0697);
        

        marker_08c36bf610c24243a765ad7b39ce4e02.bindPopup(popup_ae6ed5c258c94381adf6cd8717180628)
        ;

        
    
    
            var marker_5bfaf0c06d324039b11974a0caacb9b4 = L.marker(
                [3.9193050000000005, -56.02778299999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_bd5e9b07539e4d848cdc2234aefb6e90 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5bfaf0c06d324039b11974a0caacb9b4.setIcon(icon_bd5e9b07539e4d848cdc2234aefb6e90);
        
    
        var popup_fc24250d2e5d4dfeac24f8053a2fe734 = L.popup({"maxWidth": "100%"});

        
            var html_23e686b7680c484eada16d52fc2fcd48 = $(`<div id="html_23e686b7680c484eada16d52fc2fcd48" style="width: 100.0%; height: 100.0%;">Suriname <img src="http://localhost:8000/flag_resources/img/worldflags/sr.png "width="140px" ></div>`)[0];
            popup_fc24250d2e5d4dfeac24f8053a2fe734.setContent(html_23e686b7680c484eada16d52fc2fcd48);
        

        marker_5bfaf0c06d324039b11974a0caacb9b4.bindPopup(popup_fc24250d2e5d4dfeac24f8053a2fe734)
        ;

        
    
    
            var marker_8ef2255555df477fbe4838c204e8ecdd = L.marker(
                [0.18636, 6.613081],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_cfab943dec81429ba57e702321ad21d8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8ef2255555df477fbe4838c204e8ecdd.setIcon(icon_cfab943dec81429ba57e702321ad21d8);
        
    
        var popup_d33011c043334acdaf44a85c95f4834a = L.popup({"maxWidth": "100%"});

        
            var html_3f885cb819ec4ad893bb0ea19d837d9f = $(`<div id="html_3f885cb819ec4ad893bb0ea19d837d9f" style="width: 100.0%; height: 100.0%;">SÃ£o TomÃ© and PrÃ­ncipe <img src="http://localhost:8000/flag_resources/img/worldflags/st.png "width="140px" ></div>`)[0];
            popup_d33011c043334acdaf44a85c95f4834a.setContent(html_3f885cb819ec4ad893bb0ea19d837d9f);
        

        marker_8ef2255555df477fbe4838c204e8ecdd.bindPopup(popup_d33011c043334acdaf44a85c95f4834a)
        ;

        
    
    
            var marker_77677bcd91e5499f833ec0f6860390e0 = L.marker(
                [13.794185, -88.89653],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_592e5de85df148c981fc4844e2c7fff9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_77677bcd91e5499f833ec0f6860390e0.setIcon(icon_592e5de85df148c981fc4844e2c7fff9);
        
    
        var popup_840d32df3ae5409cba535e87bdb0b14b = L.popup({"maxWidth": "100%"});

        
            var html_0092c49bc95e4c479e156430409014c1 = $(`<div id="html_0092c49bc95e4c479e156430409014c1" style="width: 100.0%; height: 100.0%;">El Salvador <img src="http://localhost:8000/flag_resources/img/worldflags/sv.png "width="140px" ></div>`)[0];
            popup_840d32df3ae5409cba535e87bdb0b14b.setContent(html_0092c49bc95e4c479e156430409014c1);
        

        marker_77677bcd91e5499f833ec0f6860390e0.bindPopup(popup_840d32df3ae5409cba535e87bdb0b14b)
        ;

        
    
    
            var marker_7015962f4dc04c069583e65b5cfba17e = L.marker(
                [34.802075, 38.996815000000005],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_74650688660c49d9942e446eaeb4b9ac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7015962f4dc04c069583e65b5cfba17e.setIcon(icon_74650688660c49d9942e446eaeb4b9ac);
        
    
        var popup_3e7e8237a1b7474ab3e667b51c5da256 = L.popup({"maxWidth": "100%"});

        
            var html_0bf60023741c4d86aac9dc78aae023ba = $(`<div id="html_0bf60023741c4d86aac9dc78aae023ba" style="width: 100.0%; height: 100.0%;">Syria <img src="http://localhost:8000/flag_resources/img/worldflags/sy.png "width="140px" ></div>`)[0];
            popup_3e7e8237a1b7474ab3e667b51c5da256.setContent(html_0bf60023741c4d86aac9dc78aae023ba);
        

        marker_7015962f4dc04c069583e65b5cfba17e.bindPopup(popup_3e7e8237a1b7474ab3e667b51c5da256)
        ;

        
    
    
            var marker_8435f27d7ebe4fdb94795667e8c7ac62 = L.marker(
                [-26.522503000000004, 31.465866],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_893db7e9e15e4c34ac284a3dbf164122 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8435f27d7ebe4fdb94795667e8c7ac62.setIcon(icon_893db7e9e15e4c34ac284a3dbf164122);
        
    
        var popup_34640846eace474ca33ef4a30ac4a967 = L.popup({"maxWidth": "100%"});

        
            var html_22f032bc216f4b44bf2efc3c7e2e7b0f = $(`<div id="html_22f032bc216f4b44bf2efc3c7e2e7b0f" style="width: 100.0%; height: 100.0%;">Swaziland <img src="http://localhost:8000/flag_resources/img/worldflags/sz.png "width="140px" ></div>`)[0];
            popup_34640846eace474ca33ef4a30ac4a967.setContent(html_22f032bc216f4b44bf2efc3c7e2e7b0f);
        

        marker_8435f27d7ebe4fdb94795667e8c7ac62.bindPopup(popup_34640846eace474ca33ef4a30ac4a967)
        ;

        
    
    
            var marker_a002c388c8d4477caafbf8aae907ac77 = L.marker(
                [21.694025, -71.797928],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f02ccc52efd54e0bada16f23b1f84682 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a002c388c8d4477caafbf8aae907ac77.setIcon(icon_f02ccc52efd54e0bada16f23b1f84682);
        
    
        var popup_472b46d44a2c4272bc9ee6697da72c9f = L.popup({"maxWidth": "100%"});

        
            var html_132268a4d36d40afbb310a5442eaedeb = $(`<div id="html_132268a4d36d40afbb310a5442eaedeb" style="width: 100.0%; height: 100.0%;">Turks and Caicos Islands <img src="http://localhost:8000/flag_resources/img/worldflags/tc.png "width="140px" ></div>`)[0];
            popup_472b46d44a2c4272bc9ee6697da72c9f.setContent(html_132268a4d36d40afbb310a5442eaedeb);
        

        marker_a002c388c8d4477caafbf8aae907ac77.bindPopup(popup_472b46d44a2c4272bc9ee6697da72c9f)
        ;

        
    
    
            var marker_e5122a7861ba4a62bbbc5db97e100d39 = L.marker(
                [15.454166, 18.732207],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_878a1746e8e943d7a25adca6743e8c2f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e5122a7861ba4a62bbbc5db97e100d39.setIcon(icon_878a1746e8e943d7a25adca6743e8c2f);
        
    
        var popup_71817c26796b4949993a4259c9fdc366 = L.popup({"maxWidth": "100%"});

        
            var html_e8ed6be1626148d5a67ba0f2070e7ada = $(`<div id="html_e8ed6be1626148d5a67ba0f2070e7ada" style="width: 100.0%; height: 100.0%;">Chad <img src="http://localhost:8000/flag_resources/img/worldflags/td.png "width="140px" ></div>`)[0];
            popup_71817c26796b4949993a4259c9fdc366.setContent(html_e8ed6be1626148d5a67ba0f2070e7ada);
        

        marker_e5122a7861ba4a62bbbc5db97e100d39.bindPopup(popup_71817c26796b4949993a4259c9fdc366)
        ;

        
    
    
            var marker_046e34b7687c485f92a16a3b3dc5c6da = L.marker(
                [-49.280366, 69.348557],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f4c6e64ff5f24dc196af55902ba9ae6d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_046e34b7687c485f92a16a3b3dc5c6da.setIcon(icon_f4c6e64ff5f24dc196af55902ba9ae6d);
        
    
        var popup_9c371d4fe0d747768a8910da0a4e2e3c = L.popup({"maxWidth": "100%"});

        
            var html_1fa8a9f33bb14705aca6add2b0058b17 = $(`<div id="html_1fa8a9f33bb14705aca6add2b0058b17" style="width: 100.0%; height: 100.0%;">French Southern Territories <img src="http://localhost:8000/flag_resources/img/worldflags/tf.png "width="140px" ></div>`)[0];
            popup_9c371d4fe0d747768a8910da0a4e2e3c.setContent(html_1fa8a9f33bb14705aca6add2b0058b17);
        

        marker_046e34b7687c485f92a16a3b3dc5c6da.bindPopup(popup_9c371d4fe0d747768a8910da0a4e2e3c)
        ;

        
    
    
            var marker_d24354c24b2947b3aaf48d43e8643aa4 = L.marker(
                [8.619543, 0.824782],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e2749ebac8fa40b7b0cd78ae1f6d2c76 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d24354c24b2947b3aaf48d43e8643aa4.setIcon(icon_e2749ebac8fa40b7b0cd78ae1f6d2c76);
        
    
        var popup_5a34237321164fec9a828a7952497657 = L.popup({"maxWidth": "100%"});

        
            var html_aaac903a0d194c429c76efeb50559ce7 = $(`<div id="html_aaac903a0d194c429c76efeb50559ce7" style="width: 100.0%; height: 100.0%;">Togo <img src="http://localhost:8000/flag_resources/img/worldflags/tg.png "width="140px" ></div>`)[0];
            popup_5a34237321164fec9a828a7952497657.setContent(html_aaac903a0d194c429c76efeb50559ce7);
        

        marker_d24354c24b2947b3aaf48d43e8643aa4.bindPopup(popup_5a34237321164fec9a828a7952497657)
        ;

        
    
    
            var marker_e96273809bac4849a62e68eb41ae20f2 = L.marker(
                [15.870032, 100.992541],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_7894b988961349579206e1d502318659 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e96273809bac4849a62e68eb41ae20f2.setIcon(icon_7894b988961349579206e1d502318659);
        
    
        var popup_9053e259db3a4e5d94f3622a8355a4a1 = L.popup({"maxWidth": "100%"});

        
            var html_5ff5d0b7f11246638959277436e769b4 = $(`<div id="html_5ff5d0b7f11246638959277436e769b4" style="width: 100.0%; height: 100.0%;">Thailand <img src="http://localhost:8000/flag_resources/img/worldflags/th.png "width="140px" ></div>`)[0];
            popup_9053e259db3a4e5d94f3622a8355a4a1.setContent(html_5ff5d0b7f11246638959277436e769b4);
        

        marker_e96273809bac4849a62e68eb41ae20f2.bindPopup(popup_9053e259db3a4e5d94f3622a8355a4a1)
        ;

        
    
    
            var marker_e46b17b6ff06471ba82a272a6143237d = L.marker(
                [38.861034000000004, 71.276093],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_6ff4931847154b0e9e36f8470275bf7a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e46b17b6ff06471ba82a272a6143237d.setIcon(icon_6ff4931847154b0e9e36f8470275bf7a);
        
    
        var popup_fbdba8a7db324c5ab95ffc1d5adfc34b = L.popup({"maxWidth": "100%"});

        
            var html_2976519b8c324b3e91f5544fcfaeac10 = $(`<div id="html_2976519b8c324b3e91f5544fcfaeac10" style="width: 100.0%; height: 100.0%;">Tajikistan <img src="http://localhost:8000/flag_resources/img/worldflags/tj.png "width="140px" ></div>`)[0];
            popup_fbdba8a7db324c5ab95ffc1d5adfc34b.setContent(html_2976519b8c324b3e91f5544fcfaeac10);
        

        marker_e46b17b6ff06471ba82a272a6143237d.bindPopup(popup_fbdba8a7db324c5ab95ffc1d5adfc34b)
        ;

        
    
    
            var marker_224d0551214540748bc659cd526fccd9 = L.marker(
                [-8.967363, -171.855881],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e785e22d43ac4809a5b6dd31d19fea1d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_224d0551214540748bc659cd526fccd9.setIcon(icon_e785e22d43ac4809a5b6dd31d19fea1d);
        
    
        var popup_9d782127579d47ccbec655d2d4477555 = L.popup({"maxWidth": "100%"});

        
            var html_408d7178e93f4d38ba1f444de7fcc2ca = $(`<div id="html_408d7178e93f4d38ba1f444de7fcc2ca" style="width: 100.0%; height: 100.0%;">Tokelau <img src="http://localhost:8000/flag_resources/img/worldflags/tk.png "width="140px" ></div>`)[0];
            popup_9d782127579d47ccbec655d2d4477555.setContent(html_408d7178e93f4d38ba1f444de7fcc2ca);
        

        marker_224d0551214540748bc659cd526fccd9.bindPopup(popup_9d782127579d47ccbec655d2d4477555)
        ;

        
    
    
            var marker_3b1507083e594c03ad86774212c454e3 = L.marker(
                [-8.874217, 125.727539],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_95e55feaa3164089bb56e99412bdbd82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3b1507083e594c03ad86774212c454e3.setIcon(icon_95e55feaa3164089bb56e99412bdbd82);
        
    
        var popup_3a24ebee98bb4281bfa79416c26d9e08 = L.popup({"maxWidth": "100%"});

        
            var html_d7968c9cc9d0409a9f03bf2ef330b18c = $(`<div id="html_d7968c9cc9d0409a9f03bf2ef330b18c" style="width: 100.0%; height: 100.0%;">Timor-Leste <img src="http://localhost:8000/flag_resources/img/worldflags/tl.png "width="140px" ></div>`)[0];
            popup_3a24ebee98bb4281bfa79416c26d9e08.setContent(html_d7968c9cc9d0409a9f03bf2ef330b18c);
        

        marker_3b1507083e594c03ad86774212c454e3.bindPopup(popup_3a24ebee98bb4281bfa79416c26d9e08)
        ;

        
    
    
            var marker_c000f3857e4b43fab1dfd852f4baf2ec = L.marker(
                [38.969719, 59.556278000000006],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_cb588903bcd14f198ff7ae407595ad58 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c000f3857e4b43fab1dfd852f4baf2ec.setIcon(icon_cb588903bcd14f198ff7ae407595ad58);
        
    
        var popup_5b9a1609157d4642b7ba67a85ba85b4e = L.popup({"maxWidth": "100%"});

        
            var html_111421b3b7234b3e8c94e12655283679 = $(`<div id="html_111421b3b7234b3e8c94e12655283679" style="width: 100.0%; height: 100.0%;">Turkmenistan <img src="http://localhost:8000/flag_resources/img/worldflags/tm.png "width="140px" ></div>`)[0];
            popup_5b9a1609157d4642b7ba67a85ba85b4e.setContent(html_111421b3b7234b3e8c94e12655283679);
        

        marker_c000f3857e4b43fab1dfd852f4baf2ec.bindPopup(popup_5b9a1609157d4642b7ba67a85ba85b4e)
        ;

        
    
    
            var marker_4cb5a17a8bcc4aeb8910d96b6fa37bd2 = L.marker(
                [33.886917, 9.537499],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_71b00c31cca5499687590112bbdf163e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4cb5a17a8bcc4aeb8910d96b6fa37bd2.setIcon(icon_71b00c31cca5499687590112bbdf163e);
        
    
        var popup_05a34ec6b04248c78dde1fa14e6a766c = L.popup({"maxWidth": "100%"});

        
            var html_b75a4898206c4bd9837c5ed4f5034610 = $(`<div id="html_b75a4898206c4bd9837c5ed4f5034610" style="width: 100.0%; height: 100.0%;">Tunisia <img src="http://localhost:8000/flag_resources/img/worldflags/tn.png "width="140px" ></div>`)[0];
            popup_05a34ec6b04248c78dde1fa14e6a766c.setContent(html_b75a4898206c4bd9837c5ed4f5034610);
        

        marker_4cb5a17a8bcc4aeb8910d96b6fa37bd2.bindPopup(popup_05a34ec6b04248c78dde1fa14e6a766c)
        ;

        
    
    
            var marker_b23393dc738847e0bffb48d23d6574f6 = L.marker(
                [-21.178986, -175.198242],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_dfd56fb3ff254ff2bdb61a64a7fced96 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b23393dc738847e0bffb48d23d6574f6.setIcon(icon_dfd56fb3ff254ff2bdb61a64a7fced96);
        
    
        var popup_2a8f64ecdfea487790f687b11d1e6adc = L.popup({"maxWidth": "100%"});

        
            var html_8695c6be31b34aa6aac0b7b0c0baa7b6 = $(`<div id="html_8695c6be31b34aa6aac0b7b0c0baa7b6" style="width: 100.0%; height: 100.0%;">Tonga <img src="http://localhost:8000/flag_resources/img/worldflags/to.png "width="140px" ></div>`)[0];
            popup_2a8f64ecdfea487790f687b11d1e6adc.setContent(html_8695c6be31b34aa6aac0b7b0c0baa7b6);
        

        marker_b23393dc738847e0bffb48d23d6574f6.bindPopup(popup_2a8f64ecdfea487790f687b11d1e6adc)
        ;

        
    
    
            var marker_f971aaced0434b61bf42a08f5c9ad31a = L.marker(
                [38.963745, 35.243322],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_df61be9cfc98438cb94164398c96c9ce = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f971aaced0434b61bf42a08f5c9ad31a.setIcon(icon_df61be9cfc98438cb94164398c96c9ce);
        
    
        var popup_813c29223e3947fb961f3aad8f7cc530 = L.popup({"maxWidth": "100%"});

        
            var html_fe4e9c5a71fb42289eecf59008631c59 = $(`<div id="html_fe4e9c5a71fb42289eecf59008631c59" style="width: 100.0%; height: 100.0%;">Turkey <img src="http://localhost:8000/flag_resources/img/worldflags/tr.png "width="140px" ></div>`)[0];
            popup_813c29223e3947fb961f3aad8f7cc530.setContent(html_fe4e9c5a71fb42289eecf59008631c59);
        

        marker_f971aaced0434b61bf42a08f5c9ad31a.bindPopup(popup_813c29223e3947fb961f3aad8f7cc530)
        ;

        
    
    
            var marker_e6ac315cd5684eec86324c7459589033 = L.marker(
                [10.691803, -61.222503],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_81bdb5a417ae4fbca3bd46eaa7e1e8b7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e6ac315cd5684eec86324c7459589033.setIcon(icon_81bdb5a417ae4fbca3bd46eaa7e1e8b7);
        
    
        var popup_99d04c7761bb411d9eb596925376801b = L.popup({"maxWidth": "100%"});

        
            var html_e7b8615d25724389b7391560689988f3 = $(`<div id="html_e7b8615d25724389b7391560689988f3" style="width: 100.0%; height: 100.0%;">Trinidad and Tobago <img src="http://localhost:8000/flag_resources/img/worldflags/tt.png "width="140px" ></div>`)[0];
            popup_99d04c7761bb411d9eb596925376801b.setContent(html_e7b8615d25724389b7391560689988f3);
        

        marker_e6ac315cd5684eec86324c7459589033.bindPopup(popup_99d04c7761bb411d9eb596925376801b)
        ;

        
    
    
            var marker_115d733d02bd456abcad3c7f8277411a = L.marker(
                [-7.109535, 177.64933],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_d9ea6b86af544b2989e16d4d4b34997d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_115d733d02bd456abcad3c7f8277411a.setIcon(icon_d9ea6b86af544b2989e16d4d4b34997d);
        
    
        var popup_6e10b2dd07c64021beb491f701d93f96 = L.popup({"maxWidth": "100%"});

        
            var html_3d859304a6a74b4db3766a7ea0ae9f8e = $(`<div id="html_3d859304a6a74b4db3766a7ea0ae9f8e" style="width: 100.0%; height: 100.0%;">Tuvalu <img src="http://localhost:8000/flag_resources/img/worldflags/tv.png "width="140px" ></div>`)[0];
            popup_6e10b2dd07c64021beb491f701d93f96.setContent(html_3d859304a6a74b4db3766a7ea0ae9f8e);
        

        marker_115d733d02bd456abcad3c7f8277411a.bindPopup(popup_6e10b2dd07c64021beb491f701d93f96)
        ;

        
    
    
            var marker_550ffbabcac747478034ca1b6957760a = L.marker(
                [23.69781, 120.96051499999999],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_65407722ad5e4211a43135b2eab20b6b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_550ffbabcac747478034ca1b6957760a.setIcon(icon_65407722ad5e4211a43135b2eab20b6b);
        
    
        var popup_0ad1b7b725894c6dbe2ce428aa0affe4 = L.popup({"maxWidth": "100%"});

        
            var html_18eee11d0a284c289d58483d4a5f656c = $(`<div id="html_18eee11d0a284c289d58483d4a5f656c" style="width: 100.0%; height: 100.0%;">Taiwan <img src="http://localhost:8000/flag_resources/img/worldflags/tw.png "width="140px" ></div>`)[0];
            popup_0ad1b7b725894c6dbe2ce428aa0affe4.setContent(html_18eee11d0a284c289d58483d4a5f656c);
        

        marker_550ffbabcac747478034ca1b6957760a.bindPopup(popup_0ad1b7b725894c6dbe2ce428aa0affe4)
        ;

        
    
    
            var marker_e791b65a1a024272bb6b3a8896b4388e = L.marker(
                [-6.369028, 34.888822],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_5904bca53c434db9bb5ecfe6eff6e838 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e791b65a1a024272bb6b3a8896b4388e.setIcon(icon_5904bca53c434db9bb5ecfe6eff6e838);
        
    
        var popup_b3b797a259bc407fb7e9add5626f2fb6 = L.popup({"maxWidth": "100%"});

        
            var html_b6d362c3c8ae4a4d9aa036c9ec06feb9 = $(`<div id="html_b6d362c3c8ae4a4d9aa036c9ec06feb9" style="width: 100.0%; height: 100.0%;">Tanzania <img src="http://localhost:8000/flag_resources/img/worldflags/tz.png "width="140px" ></div>`)[0];
            popup_b3b797a259bc407fb7e9add5626f2fb6.setContent(html_b6d362c3c8ae4a4d9aa036c9ec06feb9);
        

        marker_e791b65a1a024272bb6b3a8896b4388e.bindPopup(popup_b3b797a259bc407fb7e9add5626f2fb6)
        ;

        
    
    
            var marker_046d86c9893c482688d6324b8f90a1f6 = L.marker(
                [48.379433, 31.16558],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b26b1a47c2bf458ea15b4deaa9ae3acc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_046d86c9893c482688d6324b8f90a1f6.setIcon(icon_b26b1a47c2bf458ea15b4deaa9ae3acc);
        
    
        var popup_80a944fad5174115a35efcd9dff2defd = L.popup({"maxWidth": "100%"});

        
            var html_cd6de66297b2452595df59b89073c097 = $(`<div id="html_cd6de66297b2452595df59b89073c097" style="width: 100.0%; height: 100.0%;">Ukraine <img src="http://localhost:8000/flag_resources/img/worldflags/ua.png "width="140px" ></div>`)[0];
            popup_80a944fad5174115a35efcd9dff2defd.setContent(html_cd6de66297b2452595df59b89073c097);
        

        marker_046d86c9893c482688d6324b8f90a1f6.bindPopup(popup_80a944fad5174115a35efcd9dff2defd)
        ;

        
    
    
            var marker_7a01064462f44d87b227530c531a1807 = L.marker(
                [1.373333, 32.290275],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_709643299eee4d26af89ff11505bfb77 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7a01064462f44d87b227530c531a1807.setIcon(icon_709643299eee4d26af89ff11505bfb77);
        
    
        var popup_c2c92607fb744a85b7a3f4d926d8797d = L.popup({"maxWidth": "100%"});

        
            var html_cefb6df341744bd78d916d3840adaf77 = $(`<div id="html_cefb6df341744bd78d916d3840adaf77" style="width: 100.0%; height: 100.0%;">Uganda <img src="http://localhost:8000/flag_resources/img/worldflags/ug.png "width="140px" ></div>`)[0];
            popup_c2c92607fb744a85b7a3f4d926d8797d.setContent(html_cefb6df341744bd78d916d3840adaf77);
        

        marker_7a01064462f44d87b227530c531a1807.bindPopup(popup_c2c92607fb744a85b7a3f4d926d8797d)
        ;

        
    
    
            var marker_e49e949a200d478b93573f1f98efd62f = L.marker(
                [37.09024, -95.712891],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_b7262084566b4b87bec76933ed18620c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e49e949a200d478b93573f1f98efd62f.setIcon(icon_b7262084566b4b87bec76933ed18620c);
        
    
        var popup_58af6de22ac34499a59f827bf8049fc0 = L.popup({"maxWidth": "100%"});

        
            var html_581d9cdc12f544af88290bf370a3775b = $(`<div id="html_581d9cdc12f544af88290bf370a3775b" style="width: 100.0%; height: 100.0%;">United States <img src="http://localhost:8000/flag_resources/img/worldflags/us.png "width="140px" ></div>`)[0];
            popup_58af6de22ac34499a59f827bf8049fc0.setContent(html_581d9cdc12f544af88290bf370a3775b);
        

        marker_e49e949a200d478b93573f1f98efd62f.bindPopup(popup_58af6de22ac34499a59f827bf8049fc0)
        ;

        
    
    
            var marker_9dabfe5aa0384f0ebced9f33d8a953a4 = L.marker(
                [-32.522779, -55.765834999999996],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_efba70cd30274fe7b890f3820a6c176e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9dabfe5aa0384f0ebced9f33d8a953a4.setIcon(icon_efba70cd30274fe7b890f3820a6c176e);
        
    
        var popup_e9eb30208858499083dbc47d8f08f37c = L.popup({"maxWidth": "100%"});

        
            var html_6f5a8396b4a84455ba4fdef9327ae5ec = $(`<div id="html_6f5a8396b4a84455ba4fdef9327ae5ec" style="width: 100.0%; height: 100.0%;">Uruguay <img src="http://localhost:8000/flag_resources/img/worldflags/uy.png "width="140px" ></div>`)[0];
            popup_e9eb30208858499083dbc47d8f08f37c.setContent(html_6f5a8396b4a84455ba4fdef9327ae5ec);
        

        marker_9dabfe5aa0384f0ebced9f33d8a953a4.bindPopup(popup_e9eb30208858499083dbc47d8f08f37c)
        ;

        
    
    
            var marker_7f3dc3d05dbd4e8f8c237de10d9685c0 = L.marker(
                [41.377491, 64.585262],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_c144fa7e0bba4f39986f0943f797132c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7f3dc3d05dbd4e8f8c237de10d9685c0.setIcon(icon_c144fa7e0bba4f39986f0943f797132c);
        
    
        var popup_4a533fc060aa43efb8d8a6468ae0869d = L.popup({"maxWidth": "100%"});

        
            var html_2b0ba2431041412392c6cc84c858f269 = $(`<div id="html_2b0ba2431041412392c6cc84c858f269" style="width: 100.0%; height: 100.0%;">Uzbekistan <img src="http://localhost:8000/flag_resources/img/worldflags/uz.png "width="140px" ></div>`)[0];
            popup_4a533fc060aa43efb8d8a6468ae0869d.setContent(html_2b0ba2431041412392c6cc84c858f269);
        

        marker_7f3dc3d05dbd4e8f8c237de10d9685c0.bindPopup(popup_4a533fc060aa43efb8d8a6468ae0869d)
        ;

        
    
    
            var marker_67cbd2fa09074406ba1c31bf1ee1eb4f = L.marker(
                [41.902916, 12.453389],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_bab4db7d1d7b4f4da1ea11fd017eab36 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_67cbd2fa09074406ba1c31bf1ee1eb4f.setIcon(icon_bab4db7d1d7b4f4da1ea11fd017eab36);
        
    
        var popup_9b4e64035ff7419380b8d627ea350921 = L.popup({"maxWidth": "100%"});

        
            var html_547eecfa671341a9bbf7e7b8ff39b80d = $(`<div id="html_547eecfa671341a9bbf7e7b8ff39b80d" style="width: 100.0%; height: 100.0%;">Vatican City <img src="http://localhost:8000/flag_resources/img/worldflags/va.png "width="140px" ></div>`)[0];
            popup_9b4e64035ff7419380b8d627ea350921.setContent(html_547eecfa671341a9bbf7e7b8ff39b80d);
        

        marker_67cbd2fa09074406ba1c31bf1ee1eb4f.bindPopup(popup_9b4e64035ff7419380b8d627ea350921)
        ;

        
    
    
            var marker_8a27664c107d4bc8996af6973b91d74c = L.marker(
                [12.984305, -61.287228000000006],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_a9a3985b09b048af969bcc919e760207 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8a27664c107d4bc8996af6973b91d74c.setIcon(icon_a9a3985b09b048af969bcc919e760207);
        
    
        var popup_f52664541ddc4a699f113ac8a74277ae = L.popup({"maxWidth": "100%"});

        
            var html_f80234e01c6f4873845a81c5a5148034 = $(`<div id="html_f80234e01c6f4873845a81c5a5148034" style="width: 100.0%; height: 100.0%;">Saint Vincent and the Grenadines <img src="http://localhost:8000/flag_resources/img/worldflags/vc.png "width="140px" ></div>`)[0];
            popup_f52664541ddc4a699f113ac8a74277ae.setContent(html_f80234e01c6f4873845a81c5a5148034);
        

        marker_8a27664c107d4bc8996af6973b91d74c.bindPopup(popup_f52664541ddc4a699f113ac8a74277ae)
        ;

        
    
    
            var marker_072560b31cb7442ea7503e6584877c28 = L.marker(
                [6.42375, -66.58973],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_f0f9f3e8461a4da7ab46f5dbfb6352e0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_072560b31cb7442ea7503e6584877c28.setIcon(icon_f0f9f3e8461a4da7ab46f5dbfb6352e0);
        
    
        var popup_2b50064fd3c74838bef8e8765acd9160 = L.popup({"maxWidth": "100%"});

        
            var html_b0c38388f4054517b5d577a3a1738b06 = $(`<div id="html_b0c38388f4054517b5d577a3a1738b06" style="width: 100.0%; height: 100.0%;">Venezuela <img src="http://localhost:8000/flag_resources/img/worldflags/ve.png "width="140px" ></div>`)[0];
            popup_2b50064fd3c74838bef8e8765acd9160.setContent(html_b0c38388f4054517b5d577a3a1738b06);
        

        marker_072560b31cb7442ea7503e6584877c28.bindPopup(popup_2b50064fd3c74838bef8e8765acd9160)
        ;

        
    
    
            var marker_abdd45e6f8884cad8ec446b619f1e59f = L.marker(
                [18.420695000000002, -64.63996800000001],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_34a425b3c10042f4a54d073420637e4a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_abdd45e6f8884cad8ec446b619f1e59f.setIcon(icon_34a425b3c10042f4a54d073420637e4a);
        
    
        var popup_41edc614c4a6441b8ae5c0a1ac521072 = L.popup({"maxWidth": "100%"});

        
            var html_6b4c09cb8f674b30a012638d81fb2906 = $(`<div id="html_6b4c09cb8f674b30a012638d81fb2906" style="width: 100.0%; height: 100.0%;">British Virgin Islands <img src="http://localhost:8000/flag_resources/img/worldflags/vg.png "width="140px" ></div>`)[0];
            popup_41edc614c4a6441b8ae5c0a1ac521072.setContent(html_6b4c09cb8f674b30a012638d81fb2906);
        

        marker_abdd45e6f8884cad8ec446b619f1e59f.bindPopup(popup_41edc614c4a6441b8ae5c0a1ac521072)
        ;

        
    
    
            var marker_32a7b3ddeae74571a3ef00e6af4d67cb = L.marker(
                [18.335765, -64.896335],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ec64a027e8604cc3b797f1b543ee9c34 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_32a7b3ddeae74571a3ef00e6af4d67cb.setIcon(icon_ec64a027e8604cc3b797f1b543ee9c34);
        
    
        var popup_7ee7db852189443ea7cab3fa67515def = L.popup({"maxWidth": "100%"});

        
            var html_038e1e0509d640eab3ad16bd9cd7ee65 = $(`<div id="html_038e1e0509d640eab3ad16bd9cd7ee65" style="width: 100.0%; height: 100.0%;">U.S. Virgin Islands <img src="http://localhost:8000/flag_resources/img/worldflags/vi.png "width="140px" ></div>`)[0];
            popup_7ee7db852189443ea7cab3fa67515def.setContent(html_038e1e0509d640eab3ad16bd9cd7ee65);
        

        marker_32a7b3ddeae74571a3ef00e6af4d67cb.bindPopup(popup_7ee7db852189443ea7cab3fa67515def)
        ;

        
    
    
            var marker_660dd6f093d24c798a7e03c74372365a = L.marker(
                [14.058323999999999, 108.277199],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_1696e9e09c164c128f4e533880af23d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_660dd6f093d24c798a7e03c74372365a.setIcon(icon_1696e9e09c164c128f4e533880af23d4);
        
    
        var popup_f6270026b9c8406ba9be8f8050379a62 = L.popup({"maxWidth": "100%"});

        
            var html_8113668a7627450fa888d10d39c5617e = $(`<div id="html_8113668a7627450fa888d10d39c5617e" style="width: 100.0%; height: 100.0%;">Vietnam <img src="http://localhost:8000/flag_resources/img/worldflags/vn.png "width="140px" ></div>`)[0];
            popup_f6270026b9c8406ba9be8f8050379a62.setContent(html_8113668a7627450fa888d10d39c5617e);
        

        marker_660dd6f093d24c798a7e03c74372365a.bindPopup(popup_f6270026b9c8406ba9be8f8050379a62)
        ;

        
    
    
            var marker_f716a1463310431fad05d7b21bfda73f = L.marker(
                [-15.376706, 166.959158],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_4ca75f4e336a42c9ba6153ced76287b9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f716a1463310431fad05d7b21bfda73f.setIcon(icon_4ca75f4e336a42c9ba6153ced76287b9);
        
    
        var popup_e1503a0ad92642579bd2addd501215e1 = L.popup({"maxWidth": "100%"});

        
            var html_75e3dc1fafb84bf391b6821e98a1590f = $(`<div id="html_75e3dc1fafb84bf391b6821e98a1590f" style="width: 100.0%; height: 100.0%;">Vanuatu <img src="http://localhost:8000/flag_resources/img/worldflags/vu.png "width="140px" ></div>`)[0];
            popup_e1503a0ad92642579bd2addd501215e1.setContent(html_75e3dc1fafb84bf391b6821e98a1590f);
        

        marker_f716a1463310431fad05d7b21bfda73f.bindPopup(popup_e1503a0ad92642579bd2addd501215e1)
        ;

        
    
    
            var marker_87176564139c443b8fbb0f6a5433be04 = L.marker(
                [-13.768752, -177.156097],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_afb4c75131bb4d1b9ef81938fb5f6853 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_87176564139c443b8fbb0f6a5433be04.setIcon(icon_afb4c75131bb4d1b9ef81938fb5f6853);
        
    
        var popup_f2f3be6228cd43e5a8fc8e5cb59a4dc3 = L.popup({"maxWidth": "100%"});

        
            var html_e30bfa74a7ae427fbc99a9f9a0214c4e = $(`<div id="html_e30bfa74a7ae427fbc99a9f9a0214c4e" style="width: 100.0%; height: 100.0%;">Wallis and Futuna <img src="http://localhost:8000/flag_resources/img/worldflags/wf.png "width="140px" ></div>`)[0];
            popup_f2f3be6228cd43e5a8fc8e5cb59a4dc3.setContent(html_e30bfa74a7ae427fbc99a9f9a0214c4e);
        

        marker_87176564139c443b8fbb0f6a5433be04.bindPopup(popup_f2f3be6228cd43e5a8fc8e5cb59a4dc3)
        ;

        
    
    
            var marker_8991f221eb4846c088f8e087096ef659 = L.marker(
                [-13.759029, -172.10462900000002],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e52ec4fa5dbb4195aa4f28a462789864 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8991f221eb4846c088f8e087096ef659.setIcon(icon_e52ec4fa5dbb4195aa4f28a462789864);
        
    
        var popup_399b98f68a6a42a491f0fb01b39ea1ec = L.popup({"maxWidth": "100%"});

        
            var html_5f645cc7f7dc42b8a064be831363ca6e = $(`<div id="html_5f645cc7f7dc42b8a064be831363ca6e" style="width: 100.0%; height: 100.0%;">Samoa <img src="http://localhost:8000/flag_resources/img/worldflags/ws.png "width="140px" ></div>`)[0];
            popup_399b98f68a6a42a491f0fb01b39ea1ec.setContent(html_5f645cc7f7dc42b8a064be831363ca6e);
        

        marker_8991f221eb4846c088f8e087096ef659.bindPopup(popup_399b98f68a6a42a491f0fb01b39ea1ec)
        ;

        
    
    
            var marker_79d165085e67465eb3310e964f9fb0a4 = L.marker(
                [42.602636, 20.902977],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_da78447c54c5420b98b8c996dc465720 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_79d165085e67465eb3310e964f9fb0a4.setIcon(icon_da78447c54c5420b98b8c996dc465720);
        
    
        var popup_d1d35dfe5e9846c686abd4ac175dd351 = L.popup({"maxWidth": "100%"});

        
            var html_983538725bfb4587977da94c2871f58d = $(`<div id="html_983538725bfb4587977da94c2871f58d" style="width: 100.0%; height: 100.0%;">Kosovo <img src="http://localhost:8000/flag_resources/img/worldflags/xk.png "width="140px" ></div>`)[0];
            popup_d1d35dfe5e9846c686abd4ac175dd351.setContent(html_983538725bfb4587977da94c2871f58d);
        

        marker_79d165085e67465eb3310e964f9fb0a4.bindPopup(popup_d1d35dfe5e9846c686abd4ac175dd351)
        ;

        
    
    
            var marker_2186aaec0b534f4b8039f978e7032944 = L.marker(
                [15.552726999999999, 48.516388],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_147ac689c1d84e749a41c4c70d390504 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2186aaec0b534f4b8039f978e7032944.setIcon(icon_147ac689c1d84e749a41c4c70d390504);
        
    
        var popup_37bcf74cdd2542bcb62619c2af602ec6 = L.popup({"maxWidth": "100%"});

        
            var html_ed652792e2754bd393b8dcaba02d2919 = $(`<div id="html_ed652792e2754bd393b8dcaba02d2919" style="width: 100.0%; height: 100.0%;">Yemen <img src="http://localhost:8000/flag_resources/img/worldflags/ye.png "width="140px" ></div>`)[0];
            popup_37bcf74cdd2542bcb62619c2af602ec6.setContent(html_ed652792e2754bd393b8dcaba02d2919);
        

        marker_2186aaec0b534f4b8039f978e7032944.bindPopup(popup_37bcf74cdd2542bcb62619c2af602ec6)
        ;

        
    
    
            var marker_0739c9308b7c4defa29fa133cfe75e09 = L.marker(
                [-12.8275, 45.166244],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_ce52498a770641b4a77b85ba786c1ade = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0739c9308b7c4defa29fa133cfe75e09.setIcon(icon_ce52498a770641b4a77b85ba786c1ade);
        
    
        var popup_829feaa527a644dcbf73c560d410bc04 = L.popup({"maxWidth": "100%"});

        
            var html_6cdd24c33abf4b499b9f8cc10da28b97 = $(`<div id="html_6cdd24c33abf4b499b9f8cc10da28b97" style="width: 100.0%; height: 100.0%;">Mayotte <img src="http://localhost:8000/flag_resources/img/worldflags/yt.png "width="140px" ></div>`)[0];
            popup_829feaa527a644dcbf73c560d410bc04.setContent(html_6cdd24c33abf4b499b9f8cc10da28b97);
        

        marker_0739c9308b7c4defa29fa133cfe75e09.bindPopup(popup_829feaa527a644dcbf73c560d410bc04)
        ;

        
    
    
            var marker_d961cc266ffd42abb2e8d96f52c95cee = L.marker(
                [-30.559482, 22.937506],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_a1f00b4b487f4a60a7b99ed265e66591 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d961cc266ffd42abb2e8d96f52c95cee.setIcon(icon_a1f00b4b487f4a60a7b99ed265e66591);
        
    
        var popup_d1c83ec3c8b246418b55140aa4c1ffbb = L.popup({"maxWidth": "100%"});

        
            var html_41b55d8d121a45c0b98b72f2e877e8fe = $(`<div id="html_41b55d8d121a45c0b98b72f2e877e8fe" style="width: 100.0%; height: 100.0%;">South Africa <img src="http://localhost:8000/flag_resources/img/worldflags/za.png "width="140px" ></div>`)[0];
            popup_d1c83ec3c8b246418b55140aa4c1ffbb.setContent(html_41b55d8d121a45c0b98b72f2e877e8fe);
        

        marker_d961cc266ffd42abb2e8d96f52c95cee.bindPopup(popup_d1c83ec3c8b246418b55140aa4c1ffbb)
        ;

        
    
    
            var marker_d9b5e9e2cadd4d388f5a25022d3c3f27 = L.marker(
                [-13.133897, 27.849332],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_3bdc7ea351604f8ebade84622ee661f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d9b5e9e2cadd4d388f5a25022d3c3f27.setIcon(icon_3bdc7ea351604f8ebade84622ee661f4);
        
    
        var popup_0da2e9d2455c4a91a95fa0f1ccacdf8a = L.popup({"maxWidth": "100%"});

        
            var html_3f1ebe0704a74f079b68e1259b23a3b3 = $(`<div id="html_3f1ebe0704a74f079b68e1259b23a3b3" style="width: 100.0%; height: 100.0%;">Zambia <img src="http://localhost:8000/flag_resources/img/worldflags/zm.png "width="140px" ></div>`)[0];
            popup_0da2e9d2455c4a91a95fa0f1ccacdf8a.setContent(html_3f1ebe0704a74f079b68e1259b23a3b3);
        

        marker_d9b5e9e2cadd4d388f5a25022d3c3f27.bindPopup(popup_0da2e9d2455c4a91a95fa0f1ccacdf8a)
        ;

        
    
    
            var marker_5749a8a50bfd4918a6071cf213c69af8 = L.marker(
                [-19.015438, 29.154857],
                {}
            ).addTo(map_239e268ba54c49d8b72c48c34178a6ce);
        
    
            var icon_e7164e8939ec43fc9460113c508dd148 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5749a8a50bfd4918a6071cf213c69af8.setIcon(icon_e7164e8939ec43fc9460113c508dd148);
        
    
        var popup_f11e6092c04c4f989f8c350f04366b6a = L.popup({"maxWidth": "100%"});

        
            var html_1861a20dfe6a4b74ad01a473c705c231 = $(`<div id="html_1861a20dfe6a4b74ad01a473c705c231" style="width: 100.0%; height: 100.0%;">Zimbabwe <img src="http://localhost:8000/flag_resources/img/worldflags/zw.png "width="140px" ></div>`)[0];
            popup_f11e6092c04c4f989f8c350f04366b6a.setContent(html_1861a20dfe6a4b74ad01a473c705c231);
        

        marker_5749a8a50bfd4918a6071cf213c69af8.bindPopup(popup_f11e6092c04c4f989f8c350f04366b6a)
        ;

        
    
</script>