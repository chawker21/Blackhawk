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
                #map_a793d76124d54c6f913e956d1e66df04 {
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
            <div class="folium-map" id="map_a793d76124d54c6f913e956d1e66df04" ></div>

</body>
<script>

            var map_a793d76124d54c6f913e956d1e66df04 = L.map(
                "map_a793d76124d54c6f913e956d1e66df04",
                {
                    center: [37.883574, 44.356726],
                    crs: L.CRS.EPSG3857,
                    zoom: 4,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );





            var tile_layer_d8a7dd4d86c542138ff0ff2c4c1456b2 = L.tileLayer(
                "https://api.mapbox.com/styles/v1/mapbox/dark-v9/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiY2hhd2tlcjIxIiwiYSI6ImNqOXgycWEybDdzYTEzM2xnNG01N2Y5d2UifQ.YMghCTUA1p131erg3_Ln_Q",
                {"attribution": "XXX Mapbox Attribution", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var marker_5343a027d2a140c4906e7a41151fb584 = L.marker(
                [42.546245, 1.6015540000000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d46ce08c20d84a2a86c0521321e93f0d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5343a027d2a140c4906e7a41151fb584.setIcon(icon_d46ce08c20d84a2a86c0521321e93f0d);


        var popup_abc470812da54f7f8040980f6f62cc55 = L.popup({"maxWidth": "100%"});


            var html_2cdd3a62d6164bcb86542770efb07037 = $(`<div id="html_2cdd3a62d6164bcb86542770efb07037" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ad.png">Andorra<img src="http://localhost:8000/flag_resources/img/worldflags/ad.png "width="140px" ></a></div>`)[0];
            popup_abc470812da54f7f8040980f6f62cc55.setContent(html_2cdd3a62d6164bcb86542770efb07037);


        marker_5343a027d2a140c4906e7a41151fb584.bindPopup(popup_abc470812da54f7f8040980f6f62cc55)
        ;




            var marker_1078851048024b8ca643fbacf22b721f = L.marker(
                [23.424076, 53.847818000000004],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5ee8da97743b4231a5e7036ebd0f1fc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1078851048024b8ca643fbacf22b721f.setIcon(icon_5ee8da97743b4231a5e7036ebd0f1fc5);


        var popup_30888703c0c54b818d7e9483e08f813c = L.popup({"maxWidth": "100%"});


            var html_b3a5ca546713490d8e0276e8810ef683 = $(`<div id="html_b3a5ca546713490d8e0276e8810ef683" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ae.png">United Arab Emirates<img src="http://localhost:8000/flag_resources/img/worldflags/ae.png "width="140px" ></a></div>`)[0];
            popup_30888703c0c54b818d7e9483e08f813c.setContent(html_b3a5ca546713490d8e0276e8810ef683);


        marker_1078851048024b8ca643fbacf22b721f.bindPopup(popup_30888703c0c54b818d7e9483e08f813c)
        ;




            var marker_6d712e6a957443b197c84b850c70ec7c = L.marker(
                [33.93911, 67.709953],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_45ab6a52070d4d0786f53bdb554c7048 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6d712e6a957443b197c84b850c70ec7c.setIcon(icon_45ab6a52070d4d0786f53bdb554c7048);


        var popup_00e7e3ce5c7741138c5e80be2ecbf85a = L.popup({"maxWidth": "100%"});


            var html_88596081bc50461faf20add10cc1a787 = $(`<div id="html_88596081bc50461faf20add10cc1a787" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/af.png">Afghanistan<img src="http://localhost:8000/flag_resources/img/worldflags/af.png "width="140px" ></a></div>`)[0];
            popup_00e7e3ce5c7741138c5e80be2ecbf85a.setContent(html_88596081bc50461faf20add10cc1a787);


        marker_6d712e6a957443b197c84b850c70ec7c.bindPopup(popup_00e7e3ce5c7741138c5e80be2ecbf85a)
        ;




            var marker_a5f563c0004c4dcf9beb7dfcc933dc15 = L.marker(
                [17.060816, -61.796428000000006],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_bf487ea7744049f99455e02e60d4a6a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a5f563c0004c4dcf9beb7dfcc933dc15.setIcon(icon_bf487ea7744049f99455e02e60d4a6a2);


        var popup_4e54c784dc784d8393d17feaac1e37c5 = L.popup({"maxWidth": "100%"});


            var html_665ebbb8c21e48dea141a373c92af2ae = $(`<div id="html_665ebbb8c21e48dea141a373c92af2ae" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ag.png">Antigua and Barbuda<img src="http://localhost:8000/flag_resources/img/worldflags/ag.png "width="140px" ></a></div>`)[0];
            popup_4e54c784dc784d8393d17feaac1e37c5.setContent(html_665ebbb8c21e48dea141a373c92af2ae);


        marker_a5f563c0004c4dcf9beb7dfcc933dc15.bindPopup(popup_4e54c784dc784d8393d17feaac1e37c5)
        ;




            var marker_9bf301946431439abfdfe2fdfa12d5fa = L.marker(
                [18.220554, -63.068615],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a3e69f2aa3994d25b7fa63bbb43f924a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9bf301946431439abfdfe2fdfa12d5fa.setIcon(icon_a3e69f2aa3994d25b7fa63bbb43f924a);


        var popup_60a90ebd4e154e09ae865f573d2b4d35 = L.popup({"maxWidth": "100%"});


            var html_3bb66783be3b4a2f8edc3197bce65937 = $(`<div id="html_3bb66783be3b4a2f8edc3197bce65937" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ai.png">Anguilla<img src="http://localhost:8000/flag_resources/img/worldflags/ai.png "width="140px" ></a></div>`)[0];
            popup_60a90ebd4e154e09ae865f573d2b4d35.setContent(html_3bb66783be3b4a2f8edc3197bce65937);


        marker_9bf301946431439abfdfe2fdfa12d5fa.bindPopup(popup_60a90ebd4e154e09ae865f573d2b4d35)
        ;




            var marker_ee381c7938d04e848c47b5e7171ce6f4 = L.marker(
                [41.153332, 20.168331],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2b26559e8ccf4cf6831a744bc67ac382 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ee381c7938d04e848c47b5e7171ce6f4.setIcon(icon_2b26559e8ccf4cf6831a744bc67ac382);


        var popup_84aca113bb08472a97e97e3cbed5c31d = L.popup({"maxWidth": "100%"});


            var html_5cf1b572c2bc425e99d41aad8bd367aa = $(`<div id="html_5cf1b572c2bc425e99d41aad8bd367aa" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/al.png">Albania<img src="http://localhost:8000/flag_resources/img/worldflags/al.png "width="140px" ></a></div>`)[0];
            popup_84aca113bb08472a97e97e3cbed5c31d.setContent(html_5cf1b572c2bc425e99d41aad8bd367aa);


        marker_ee381c7938d04e848c47b5e7171ce6f4.bindPopup(popup_84aca113bb08472a97e97e3cbed5c31d)
        ;




            var marker_cdb6207c451541e59cbe0c3fcea4d0ab = L.marker(
                [40.069099, 45.038189],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_296c179c86ee46efb86999217f34f3a8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cdb6207c451541e59cbe0c3fcea4d0ab.setIcon(icon_296c179c86ee46efb86999217f34f3a8);


        var popup_648cbeb8895e42e29144178941ba8805 = L.popup({"maxWidth": "100%"});


            var html_4868698c8550415e8cb9ea2114f0e096 = $(`<div id="html_4868698c8550415e8cb9ea2114f0e096" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/am.png">Armenia<img src="http://localhost:8000/flag_resources/img/worldflags/am.png "width="140px" ></a></div>`)[0];
            popup_648cbeb8895e42e29144178941ba8805.setContent(html_4868698c8550415e8cb9ea2114f0e096);


        marker_cdb6207c451541e59cbe0c3fcea4d0ab.bindPopup(popup_648cbeb8895e42e29144178941ba8805)
        ;




            var marker_0a96866e65b24f85a47601c0eb1304b0 = L.marker(
                [12.226078999999999, -69.060087],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_1c44edcae8fe4a6f92b879dec6378235 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0a96866e65b24f85a47601c0eb1304b0.setIcon(icon_1c44edcae8fe4a6f92b879dec6378235);


        var popup_a4e9aea640174c409b5daf7de2b6bcd9 = L.popup({"maxWidth": "100%"});


            var html_15b90a0bc7b842d99ba37a74c8027172 = $(`<div id="html_15b90a0bc7b842d99ba37a74c8027172" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/an.png">Netherlands Antilles<img src="http://localhost:8000/flag_resources/img/worldflags/an.png "width="140px" ></a></div>`)[0];
            popup_a4e9aea640174c409b5daf7de2b6bcd9.setContent(html_15b90a0bc7b842d99ba37a74c8027172);


        marker_0a96866e65b24f85a47601c0eb1304b0.bindPopup(popup_a4e9aea640174c409b5daf7de2b6bcd9)
        ;




            var marker_a8775d1081e046818535ea4673e6e70f = L.marker(
                [-11.202691999999999, 17.873887],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_e2eb897a3c1547c5b886f86db69bc49a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a8775d1081e046818535ea4673e6e70f.setIcon(icon_e2eb897a3c1547c5b886f86db69bc49a);


        var popup_4943e8a9b1614af4ad74e716a72b3e22 = L.popup({"maxWidth": "100%"});


            var html_7e4fa8cd64e0453da0b499efaeb4cac8 = $(`<div id="html_7e4fa8cd64e0453da0b499efaeb4cac8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ao.png">Angola<img src="http://localhost:8000/flag_resources/img/worldflags/ao.png "width="140px" ></a></div>`)[0];
            popup_4943e8a9b1614af4ad74e716a72b3e22.setContent(html_7e4fa8cd64e0453da0b499efaeb4cac8);


        marker_a8775d1081e046818535ea4673e6e70f.bindPopup(popup_4943e8a9b1614af4ad74e716a72b3e22)
        ;




            var marker_4569196bd5fa47c4aac9cc8331304587 = L.marker(
                [-75.250973, -0.071389],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_7f714ecb839944dda0be474d93fba873 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4569196bd5fa47c4aac9cc8331304587.setIcon(icon_7f714ecb839944dda0be474d93fba873);


        var popup_7b8b2df3d19147f6ae8a2ec55da585aa = L.popup({"maxWidth": "100%"});


            var html_e02b789f8e244f36a496331e8a6bf301 = $(`<div id="html_e02b789f8e244f36a496331e8a6bf301" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/aq.png">Antarctica<img src="http://localhost:8000/flag_resources/img/worldflags/aq.png "width="140px" ></a></div>`)[0];
            popup_7b8b2df3d19147f6ae8a2ec55da585aa.setContent(html_e02b789f8e244f36a496331e8a6bf301);


        marker_4569196bd5fa47c4aac9cc8331304587.bindPopup(popup_7b8b2df3d19147f6ae8a2ec55da585aa)
        ;




            var marker_cc13a3d4ba31465da523ca26f3e16b67 = L.marker(
                [-38.416097, -63.616671999999994],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0ce8a7e005cb476a9d57ae7c40ac0016 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cc13a3d4ba31465da523ca26f3e16b67.setIcon(icon_0ce8a7e005cb476a9d57ae7c40ac0016);


        var popup_764925ef8700449499856d4fb49659ab = L.popup({"maxWidth": "100%"});


            var html_1b4c5f28d30f45c0a56c3aa0ec913271 = $(`<div id="html_1b4c5f28d30f45c0a56c3aa0ec913271" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ar.png">Argentina<img src="http://localhost:8000/flag_resources/img/worldflags/ar.png "width="140px" ></a></div>`)[0];
            popup_764925ef8700449499856d4fb49659ab.setContent(html_1b4c5f28d30f45c0a56c3aa0ec913271);


        marker_cc13a3d4ba31465da523ca26f3e16b67.bindPopup(popup_764925ef8700449499856d4fb49659ab)
        ;




            var marker_5feb78af263d465598d206ea66de05a6 = L.marker(
                [-14.270972, -170.132217],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4b4960da1dd14b0b889e0f9394bbab30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5feb78af263d465598d206ea66de05a6.setIcon(icon_4b4960da1dd14b0b889e0f9394bbab30);


        var popup_1e47537bd03b407f94fe6e7202b26ca8 = L.popup({"maxWidth": "100%"});


            var html_5e0d7d26538342b7a68a64a4a041f6c8 = $(`<div id="html_5e0d7d26538342b7a68a64a4a041f6c8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/as.png">American Samoa<img src="http://localhost:8000/flag_resources/img/worldflags/as.png "width="140px" ></a></div>`)[0];
            popup_1e47537bd03b407f94fe6e7202b26ca8.setContent(html_5e0d7d26538342b7a68a64a4a041f6c8);


        marker_5feb78af263d465598d206ea66de05a6.bindPopup(popup_1e47537bd03b407f94fe6e7202b26ca8)
        ;




            var marker_6da0d38cec28460d85f0b1cdfcb88505 = L.marker(
                [47.516231, 14.550072],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_641434605afe47239b96bf729054e238 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6da0d38cec28460d85f0b1cdfcb88505.setIcon(icon_641434605afe47239b96bf729054e238);


        var popup_bc660f465604483ab1f0369a8ea01746 = L.popup({"maxWidth": "100%"});


            var html_ec8031f4f3034a30866c50867a2d99db = $(`<div id="html_ec8031f4f3034a30866c50867a2d99db" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/at.png">Austria<img src="http://localhost:8000/flag_resources/img/worldflags/at.png "width="140px" ></a></div>`)[0];
            popup_bc660f465604483ab1f0369a8ea01746.setContent(html_ec8031f4f3034a30866c50867a2d99db);


        marker_6da0d38cec28460d85f0b1cdfcb88505.bindPopup(popup_bc660f465604483ab1f0369a8ea01746)
        ;




            var marker_68a0b42dcf0443ac9d8387ff12545434 = L.marker(
                [-25.274398, 133.775136],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0f6b188e0305478fb7f47e37a5608d66 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_68a0b42dcf0443ac9d8387ff12545434.setIcon(icon_0f6b188e0305478fb7f47e37a5608d66);


        var popup_c40ad256ea9c40c982d8ea6e48c7a422 = L.popup({"maxWidth": "100%"});


            var html_64251a8be3c541749c5189b13da42604 = $(`<div id="html_64251a8be3c541749c5189b13da42604" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/au.png">Australia<img src="http://localhost:8000/flag_resources/img/worldflags/au.png "width="140px" ></a></div>`)[0];
            popup_c40ad256ea9c40c982d8ea6e48c7a422.setContent(html_64251a8be3c541749c5189b13da42604);


        marker_68a0b42dcf0443ac9d8387ff12545434.bindPopup(popup_c40ad256ea9c40c982d8ea6e48c7a422)
        ;




            var marker_0958f4367195485bb71609cbe389f5e4 = L.marker(
                [12.52111, -69.968338],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b02c962874da4ead937caf54ada78bac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0958f4367195485bb71609cbe389f5e4.setIcon(icon_b02c962874da4ead937caf54ada78bac);


        var popup_065d5a1f9d8a44fa8297551e176bdba7 = L.popup({"maxWidth": "100%"});


            var html_3c04f6c64bc34349abde151cb29f8b7c = $(`<div id="html_3c04f6c64bc34349abde151cb29f8b7c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/aw.png">Aruba<img src="http://localhost:8000/flag_resources/img/worldflags/aw.png "width="140px" ></a></div>`)[0];
            popup_065d5a1f9d8a44fa8297551e176bdba7.setContent(html_3c04f6c64bc34349abde151cb29f8b7c);


        marker_0958f4367195485bb71609cbe389f5e4.bindPopup(popup_065d5a1f9d8a44fa8297551e176bdba7)
        ;




            var marker_785fac2daba14bcea5ea2b0b740eb31e = L.marker(
                [40.143105, 47.576927000000005],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5f63b5c551f445bdbfdad611f9a14a8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_785fac2daba14bcea5ea2b0b740eb31e.setIcon(icon_5f63b5c551f445bdbfdad611f9a14a8e);


        var popup_56b7293f0aff4309b0b6fbe292cce55a = L.popup({"maxWidth": "100%"});


            var html_2c853675a34e43ffb4f65d30e34481a1 = $(`<div id="html_2c853675a34e43ffb4f65d30e34481a1" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/az.png">Azerbaijan<img src="http://localhost:8000/flag_resources/img/worldflags/az.png "width="140px" ></a></div>`)[0];
            popup_56b7293f0aff4309b0b6fbe292cce55a.setContent(html_2c853675a34e43ffb4f65d30e34481a1);


        marker_785fac2daba14bcea5ea2b0b740eb31e.bindPopup(popup_56b7293f0aff4309b0b6fbe292cce55a)
        ;




            var marker_773fc40a1c1a4b73bb07589a2eb7d177 = L.marker(
                [43.915886, 17.679076000000002],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4ee3485292e746abb571d2901aa2b08a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_773fc40a1c1a4b73bb07589a2eb7d177.setIcon(icon_4ee3485292e746abb571d2901aa2b08a);


        var popup_19b7aefd1fd543bba6c6d1c01787140d = L.popup({"maxWidth": "100%"});


            var html_4984475dfc6f4fa7a39929c03d2946ad = $(`<div id="html_4984475dfc6f4fa7a39929c03d2946ad" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ba.png">Bosnia and Herzegovina<img src="http://localhost:8000/flag_resources/img/worldflags/ba.png "width="140px" ></a></div>`)[0];
            popup_19b7aefd1fd543bba6c6d1c01787140d.setContent(html_4984475dfc6f4fa7a39929c03d2946ad);


        marker_773fc40a1c1a4b73bb07589a2eb7d177.bindPopup(popup_19b7aefd1fd543bba6c6d1c01787140d)
        ;




            var marker_2561f967b2d84dbd9be26b325a977c2f = L.marker(
                [13.193887, -59.543198],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_048755c786ff499282e850de9c46cb13 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2561f967b2d84dbd9be26b325a977c2f.setIcon(icon_048755c786ff499282e850de9c46cb13);


        var popup_a2ef7589f9024ceba218a8019de50df9 = L.popup({"maxWidth": "100%"});


            var html_e29cdf6768bf434db3192b465995be33 = $(`<div id="html_e29cdf6768bf434db3192b465995be33" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bb.png">Barbados<img src="http://localhost:8000/flag_resources/img/worldflags/bb.png "width="140px" ></a></div>`)[0];
            popup_a2ef7589f9024ceba218a8019de50df9.setContent(html_e29cdf6768bf434db3192b465995be33);


        marker_2561f967b2d84dbd9be26b325a977c2f.bindPopup(popup_a2ef7589f9024ceba218a8019de50df9)
        ;




            var marker_f9aa0c410f854a94ad4732811bbc9a0f = L.marker(
                [23.684994, 90.35633100000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_7648ee66d8a447b29fb5e37686838b2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f9aa0c410f854a94ad4732811bbc9a0f.setIcon(icon_7648ee66d8a447b29fb5e37686838b2c);


        var popup_79f56fe065a74406b241cb364c392202 = L.popup({"maxWidth": "100%"});


            var html_530a02faef024c86a8ec18a818920ff5 = $(`<div id="html_530a02faef024c86a8ec18a818920ff5" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bd.png">Bangladesh<img src="http://localhost:8000/flag_resources/img/worldflags/bd.png "width="140px" ></a></div>`)[0];
            popup_79f56fe065a74406b241cb364c392202.setContent(html_530a02faef024c86a8ec18a818920ff5);


        marker_f9aa0c410f854a94ad4732811bbc9a0f.bindPopup(popup_79f56fe065a74406b241cb364c392202)
        ;




            var marker_e5700ff9ab5b49e59beda23844e21afc = L.marker(
                [50.503887, 4.469936],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_ed8ad04e42514a51940738e365d844d0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e5700ff9ab5b49e59beda23844e21afc.setIcon(icon_ed8ad04e42514a51940738e365d844d0);


        var popup_453ad6d1dfff4c36a6870fca541c1adc = L.popup({"maxWidth": "100%"});


            var html_ecfc504c1e964b48a635ecdec99dc1a4 = $(`<div id="html_ecfc504c1e964b48a635ecdec99dc1a4" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/be.png">Belgium<img src="http://localhost:8000/flag_resources/img/worldflags/be.png "width="140px" ></a></div>`)[0];
            popup_453ad6d1dfff4c36a6870fca541c1adc.setContent(html_ecfc504c1e964b48a635ecdec99dc1a4);


        marker_e5700ff9ab5b49e59beda23844e21afc.bindPopup(popup_453ad6d1dfff4c36a6870fca541c1adc)
        ;




            var marker_8f1350f6b5d04a3892c2743b5deafa2f = L.marker(
                [12.238333, -1.561593],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_08e1e986ec2343779ac974d0bd3eb0d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8f1350f6b5d04a3892c2743b5deafa2f.setIcon(icon_08e1e986ec2343779ac974d0bd3eb0d3);


        var popup_e25d26aa9726469faaa219462501ce62 = L.popup({"maxWidth": "100%"});


            var html_102ff22e6b1340c09725ab75798c3e36 = $(`<div id="html_102ff22e6b1340c09725ab75798c3e36" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bf.png">Burkina Faso<img src="http://localhost:8000/flag_resources/img/worldflags/bf.png "width="140px" ></a></div>`)[0];
            popup_e25d26aa9726469faaa219462501ce62.setContent(html_102ff22e6b1340c09725ab75798c3e36);


        marker_8f1350f6b5d04a3892c2743b5deafa2f.bindPopup(popup_e25d26aa9726469faaa219462501ce62)
        ;




            var marker_f1c5695d422640059a1dc5ef220240ed = L.marker(
                [42.733883, 25.48583],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_f63a05017da5416584821f712cb3196c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f1c5695d422640059a1dc5ef220240ed.setIcon(icon_f63a05017da5416584821f712cb3196c);


        var popup_c15ce995eadd449589b51eb4f8999e61 = L.popup({"maxWidth": "100%"});


            var html_fd32d5bdeb0e460b9d928813582ef7fd = $(`<div id="html_fd32d5bdeb0e460b9d928813582ef7fd" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bg.png">Bulgaria<img src="http://localhost:8000/flag_resources/img/worldflags/bg.png "width="140px" ></a></div>`)[0];
            popup_c15ce995eadd449589b51eb4f8999e61.setContent(html_fd32d5bdeb0e460b9d928813582ef7fd);


        marker_f1c5695d422640059a1dc5ef220240ed.bindPopup(popup_c15ce995eadd449589b51eb4f8999e61)
        ;




            var marker_457f5a1d71f84119b1149841e6607e06 = L.marker(
                [25.930414000000003, 50.637772],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_552ce73fe8044cd69eb810906dbf4bb1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_457f5a1d71f84119b1149841e6607e06.setIcon(icon_552ce73fe8044cd69eb810906dbf4bb1);


        var popup_69c633e2be614e528290b7a5ddcf488b = L.popup({"maxWidth": "100%"});


            var html_770b77f3d75840a29d84551afe261ae9 = $(`<div id="html_770b77f3d75840a29d84551afe261ae9" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bh.png">Bahrain<img src="http://localhost:8000/flag_resources/img/worldflags/bh.png "width="140px" ></a></div>`)[0];
            popup_69c633e2be614e528290b7a5ddcf488b.setContent(html_770b77f3d75840a29d84551afe261ae9);


        marker_457f5a1d71f84119b1149841e6607e06.bindPopup(popup_69c633e2be614e528290b7a5ddcf488b)
        ;




            var marker_be30d89bd4ce4ac6a883c7630842f2ed = L.marker(
                [-3.3730559999999996, 29.918885999999997],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_430aa4f7d54348ae878a5db81270b5b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_be30d89bd4ce4ac6a883c7630842f2ed.setIcon(icon_430aa4f7d54348ae878a5db81270b5b2);


        var popup_d454b6d92ff3420c8c5ba15b214348f7 = L.popup({"maxWidth": "100%"});


            var html_e458f685fb8f479aaf438b81d8fbabe1 = $(`<div id="html_e458f685fb8f479aaf438b81d8fbabe1" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bi.png">Burundi<img src="http://localhost:8000/flag_resources/img/worldflags/bi.png "width="140px" ></a></div>`)[0];
            popup_d454b6d92ff3420c8c5ba15b214348f7.setContent(html_e458f685fb8f479aaf438b81d8fbabe1);


        marker_be30d89bd4ce4ac6a883c7630842f2ed.bindPopup(popup_d454b6d92ff3420c8c5ba15b214348f7)
        ;




            var marker_c06ee15c38184aeda1a7e7422513ea7c = L.marker(
                [9.30769, 2.315834],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_92a528acbef14b3ca26723b5f945773b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c06ee15c38184aeda1a7e7422513ea7c.setIcon(icon_92a528acbef14b3ca26723b5f945773b);


        var popup_4c63e914935e48a394df173164e2317a = L.popup({"maxWidth": "100%"});


            var html_6811f1c8fc134f61a1ba73117c740b61 = $(`<div id="html_6811f1c8fc134f61a1ba73117c740b61" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bj.png">Benin<img src="http://localhost:8000/flag_resources/img/worldflags/bj.png "width="140px" ></a></div>`)[0];
            popup_4c63e914935e48a394df173164e2317a.setContent(html_6811f1c8fc134f61a1ba73117c740b61);


        marker_c06ee15c38184aeda1a7e7422513ea7c.bindPopup(popup_4c63e914935e48a394df173164e2317a)
        ;




            var marker_2091a65d754640dbabd1ba8a7cda8575 = L.marker(
                [32.321384, -64.75737],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_8588af9af7ef43b8978503d5e2b79577 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2091a65d754640dbabd1ba8a7cda8575.setIcon(icon_8588af9af7ef43b8978503d5e2b79577);


        var popup_ff8187aaa63e47dbaf1492462e0666f8 = L.popup({"maxWidth": "100%"});


            var html_8461d3ee7dc64024bfdc0511d07a2003 = $(`<div id="html_8461d3ee7dc64024bfdc0511d07a2003" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bm.png">Bermuda<img src="http://localhost:8000/flag_resources/img/worldflags/bm.png "width="140px" ></a></div>`)[0];
            popup_ff8187aaa63e47dbaf1492462e0666f8.setContent(html_8461d3ee7dc64024bfdc0511d07a2003);


        marker_2091a65d754640dbabd1ba8a7cda8575.bindPopup(popup_ff8187aaa63e47dbaf1492462e0666f8)
        ;




            var marker_8550a7500029415683d82fab0bfe1cc9 = L.marker(
                [4.535277, 114.72766899999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_69b66ebad6b34544b8cb670a4cb41726 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8550a7500029415683d82fab0bfe1cc9.setIcon(icon_69b66ebad6b34544b8cb670a4cb41726);


        var popup_fef4e06b4efa41fa84ca49eae61ef97d = L.popup({"maxWidth": "100%"});


            var html_738645a4224e4e0aa058d6de1e2d14b5 = $(`<div id="html_738645a4224e4e0aa058d6de1e2d14b5" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bn.png">Brunei<img src="http://localhost:8000/flag_resources/img/worldflags/bn.png "width="140px" ></a></div>`)[0];
            popup_fef4e06b4efa41fa84ca49eae61ef97d.setContent(html_738645a4224e4e0aa058d6de1e2d14b5);


        marker_8550a7500029415683d82fab0bfe1cc9.bindPopup(popup_fef4e06b4efa41fa84ca49eae61ef97d)
        ;




            var marker_04f86f5f36694686a943850ecf3cd71b = L.marker(
                [-16.290154, -63.588653],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_c0de1c25978345858fe0e079bd918f28 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_04f86f5f36694686a943850ecf3cd71b.setIcon(icon_c0de1c25978345858fe0e079bd918f28);


        var popup_d9e07eb13b01434fa562e20cc3d603bd = L.popup({"maxWidth": "100%"});


            var html_4a6a3a80a31549c3811e27989592469b = $(`<div id="html_4a6a3a80a31549c3811e27989592469b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bo.png">Bolivia<img src="http://localhost:8000/flag_resources/img/worldflags/bo.png "width="140px" ></a></div>`)[0];
            popup_d9e07eb13b01434fa562e20cc3d603bd.setContent(html_4a6a3a80a31549c3811e27989592469b);


        marker_04f86f5f36694686a943850ecf3cd71b.bindPopup(popup_d9e07eb13b01434fa562e20cc3d603bd)
        ;




            var marker_52efbcd81813401e8a8f32f90a87e5aa = L.marker(
                [-14.235004, -51.92528],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_aa5d6931892c4a9f8f1d6c96b811e11a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_52efbcd81813401e8a8f32f90a87e5aa.setIcon(icon_aa5d6931892c4a9f8f1d6c96b811e11a);


        var popup_cc0f9907df5342c2a01badfe355ff1ad = L.popup({"maxWidth": "100%"});


            var html_e150a002816a4e69ae480a5073573cb5 = $(`<div id="html_e150a002816a4e69ae480a5073573cb5" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/br.png">Brazil<img src="http://localhost:8000/flag_resources/img/worldflags/br.png "width="140px" ></a></div>`)[0];
            popup_cc0f9907df5342c2a01badfe355ff1ad.setContent(html_e150a002816a4e69ae480a5073573cb5);


        marker_52efbcd81813401e8a8f32f90a87e5aa.bindPopup(popup_cc0f9907df5342c2a01badfe355ff1ad)
        ;




            var marker_831f3199fb0f45ee9fba09f4c174a99e = L.marker(
                [25.03428, -77.39628],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_04ce2a01a6ca483fb72965a6c1081551 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_831f3199fb0f45ee9fba09f4c174a99e.setIcon(icon_04ce2a01a6ca483fb72965a6c1081551);


        var popup_57224358f61f47b6b31f14c04c468e71 = L.popup({"maxWidth": "100%"});


            var html_35154b329dda4bf4b9112f2fe80222de = $(`<div id="html_35154b329dda4bf4b9112f2fe80222de" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bs.png">Bahamas<img src="http://localhost:8000/flag_resources/img/worldflags/bs.png "width="140px" ></a></div>`)[0];
            popup_57224358f61f47b6b31f14c04c468e71.setContent(html_35154b329dda4bf4b9112f2fe80222de);


        marker_831f3199fb0f45ee9fba09f4c174a99e.bindPopup(popup_57224358f61f47b6b31f14c04c468e71)
        ;




            var marker_2e849a641c424339a7c0f356d038de79 = L.marker(
                [27.514162, 90.433601],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_bc38de601008461592b2485416453d9f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2e849a641c424339a7c0f356d038de79.setIcon(icon_bc38de601008461592b2485416453d9f);


        var popup_8567aea5af2340a0bdf783fa67b23651 = L.popup({"maxWidth": "100%"});


            var html_8e660af931534b829ae031d800db1c31 = $(`<div id="html_8e660af931534b829ae031d800db1c31" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bt.png">Bhutan<img src="http://localhost:8000/flag_resources/img/worldflags/bt.png "width="140px" ></a></div>`)[0];
            popup_8567aea5af2340a0bdf783fa67b23651.setContent(html_8e660af931534b829ae031d800db1c31);


        marker_2e849a641c424339a7c0f356d038de79.bindPopup(popup_8567aea5af2340a0bdf783fa67b23651)
        ;




            var marker_79f7e54a05154b5aa8cc767a7c780e73 = L.marker(
                [-54.423199, 3.4131940000000003],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_14449fbced2445708d5fe4220ccd86ac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_79f7e54a05154b5aa8cc767a7c780e73.setIcon(icon_14449fbced2445708d5fe4220ccd86ac);


        var popup_a457fb329b0243f281fb5cc35b06a3b7 = L.popup({"maxWidth": "100%"});


            var html_220b577bf9fc4943983f14c2e89e2915 = $(`<div id="html_220b577bf9fc4943983f14c2e89e2915" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bv.png">Bouvet Island<img src="http://localhost:8000/flag_resources/img/worldflags/bv.png "width="140px" ></a></div>`)[0];
            popup_a457fb329b0243f281fb5cc35b06a3b7.setContent(html_220b577bf9fc4943983f14c2e89e2915);


        marker_79f7e54a05154b5aa8cc767a7c780e73.bindPopup(popup_a457fb329b0243f281fb5cc35b06a3b7)
        ;




            var marker_3d7b352029fc45e6b405f129fae5a1d1 = L.marker(
                [-22.328474, 24.684866],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_8a925c8a4e1b476fbb91fdcff96fcaa3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3d7b352029fc45e6b405f129fae5a1d1.setIcon(icon_8a925c8a4e1b476fbb91fdcff96fcaa3);


        var popup_074d2add933641d7b1d4176f8ecc15ab = L.popup({"maxWidth": "100%"});


            var html_cbde2b65097d44dfb50105c240cabc65 = $(`<div id="html_cbde2b65097d44dfb50105c240cabc65" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bw.png">Botswana<img src="http://localhost:8000/flag_resources/img/worldflags/bw.png "width="140px" ></a></div>`)[0];
            popup_074d2add933641d7b1d4176f8ecc15ab.setContent(html_cbde2b65097d44dfb50105c240cabc65);


        marker_3d7b352029fc45e6b405f129fae5a1d1.bindPopup(popup_074d2add933641d7b1d4176f8ecc15ab)
        ;




            var marker_0bc8411d3034468ba03dbd5b12c3162e = L.marker(
                [53.709807, 27.953389],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4f88994fc29a45ee95083c4270de0089 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0bc8411d3034468ba03dbd5b12c3162e.setIcon(icon_4f88994fc29a45ee95083c4270de0089);


        var popup_3bc98405cd7c45ef84cbe7905a1ffeef = L.popup({"maxWidth": "100%"});


            var html_441c6688ba1a4be394ef3cd4e3789830 = $(`<div id="html_441c6688ba1a4be394ef3cd4e3789830" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/by.png">Belarus<img src="http://localhost:8000/flag_resources/img/worldflags/by.png "width="140px" ></a></div>`)[0];
            popup_3bc98405cd7c45ef84cbe7905a1ffeef.setContent(html_441c6688ba1a4be394ef3cd4e3789830);


        marker_0bc8411d3034468ba03dbd5b12c3162e.bindPopup(popup_3bc98405cd7c45ef84cbe7905a1ffeef)
        ;




            var marker_1c07c283eb8441859236f3e01bcaf0e7 = L.marker(
                [17.189877, -88.49765],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_aa91d55f334d4dbf959bded3e580e6a1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1c07c283eb8441859236f3e01bcaf0e7.setIcon(icon_aa91d55f334d4dbf959bded3e580e6a1);


        var popup_4e7e54529e25449bb12742b391f6b0de = L.popup({"maxWidth": "100%"});


            var html_4f380aac0f5647dfa569f81001c6bf29 = $(`<div id="html_4f380aac0f5647dfa569f81001c6bf29" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/bz.png">Belize<img src="http://localhost:8000/flag_resources/img/worldflags/bz.png "width="140px" ></a></div>`)[0];
            popup_4e7e54529e25449bb12742b391f6b0de.setContent(html_4f380aac0f5647dfa569f81001c6bf29);


        marker_1c07c283eb8441859236f3e01bcaf0e7.bindPopup(popup_4e7e54529e25449bb12742b391f6b0de)
        ;




            var marker_343a0a2d84224309ba54ed9a89fb8d68 = L.marker(
                [56.130366, -106.34677099999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_eac779ba608f41c3b58035760e86a991 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_343a0a2d84224309ba54ed9a89fb8d68.setIcon(icon_eac779ba608f41c3b58035760e86a991);


        var popup_0183b80c62dd413b8c511ccdfd1f6948 = L.popup({"maxWidth": "100%"});


            var html_50d8559bea8846be98d942ce66353a44 = $(`<div id="html_50d8559bea8846be98d942ce66353a44" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ca.png">Canada<img src="http://localhost:8000/flag_resources/img/worldflags/ca.png "width="140px" ></a></div>`)[0];
            popup_0183b80c62dd413b8c511ccdfd1f6948.setContent(html_50d8559bea8846be98d942ce66353a44);


        marker_343a0a2d84224309ba54ed9a89fb8d68.bindPopup(popup_0183b80c62dd413b8c511ccdfd1f6948)
        ;




            var marker_a7d70a5220c54f20b9af0702855c1e74 = L.marker(
                [-12.164164999999999, 96.870956],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_cdc60ed288d645a6a161ec3d90bfa124 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a7d70a5220c54f20b9af0702855c1e74.setIcon(icon_cdc60ed288d645a6a161ec3d90bfa124);


        var popup_46bb27298d584c38b0f6fa983a6f5970 = L.popup({"maxWidth": "100%"});


            var html_9a093b56d15843e2b56482283725c0c8 = $(`<div id="html_9a093b56d15843e2b56482283725c0c8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cc.png">Cocos [Keeling] Islands<img src="http://localhost:8000/flag_resources/img/worldflags/cc.png "width="140px" ></a></div>`)[0];
            popup_46bb27298d584c38b0f6fa983a6f5970.setContent(html_9a093b56d15843e2b56482283725c0c8);


        marker_a7d70a5220c54f20b9af0702855c1e74.bindPopup(popup_46bb27298d584c38b0f6fa983a6f5970)
        ;




            var marker_30da678be32148969f6700131b980f9e = L.marker(
                [-4.038333000000001, 21.758664000000003],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_93b465a9ff6c42ff81af980c10a9514d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_30da678be32148969f6700131b980f9e.setIcon(icon_93b465a9ff6c42ff81af980c10a9514d);


        var popup_01de3c15d9484beebc8088623e7c06af = L.popup({"maxWidth": "100%"});


            var html_0a23cea535264c03bad3858d155ac000 = $(`<div id="html_0a23cea535264c03bad3858d155ac000" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cd.png">Congo [DRC]<img src="http://localhost:8000/flag_resources/img/worldflags/cd.png "width="140px" ></a></div>`)[0];
            popup_01de3c15d9484beebc8088623e7c06af.setContent(html_0a23cea535264c03bad3858d155ac000);


        marker_30da678be32148969f6700131b980f9e.bindPopup(popup_01de3c15d9484beebc8088623e7c06af)
        ;




            var marker_6b9315c92a1d41ac907d4759e381a738 = L.marker(
                [6.611111, 20.939444],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d43feb24bf2c4a4bafae75212fe4c1f6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6b9315c92a1d41ac907d4759e381a738.setIcon(icon_d43feb24bf2c4a4bafae75212fe4c1f6);


        var popup_6b82f64ce12a4c20bbb9435174376412 = L.popup({"maxWidth": "100%"});


            var html_65d943caeb7846e299e255f3e58381c2 = $(`<div id="html_65d943caeb7846e299e255f3e58381c2" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cf.png">Central African Republic<img src="http://localhost:8000/flag_resources/img/worldflags/cf.png "width="140px" ></a></div>`)[0];
            popup_6b82f64ce12a4c20bbb9435174376412.setContent(html_65d943caeb7846e299e255f3e58381c2);


        marker_6b9315c92a1d41ac907d4759e381a738.bindPopup(popup_6b82f64ce12a4c20bbb9435174376412)
        ;




            var marker_4289f844d0f84c8f8bd4e35e8cb3d84a = L.marker(
                [-0.228021, 15.827658999999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5bcf7fa0925d460aaf2be2887001db20 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4289f844d0f84c8f8bd4e35e8cb3d84a.setIcon(icon_5bcf7fa0925d460aaf2be2887001db20);


        var popup_2df9c2ab92e145e799b5a10bf7420edc = L.popup({"maxWidth": "100%"});


            var html_b5530d36cf0c4c02b0214fee07578dfa = $(`<div id="html_b5530d36cf0c4c02b0214fee07578dfa" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cg.png">Congo [Republic]<img src="http://localhost:8000/flag_resources/img/worldflags/cg.png "width="140px" ></a></div>`)[0];
            popup_2df9c2ab92e145e799b5a10bf7420edc.setContent(html_b5530d36cf0c4c02b0214fee07578dfa);


        marker_4289f844d0f84c8f8bd4e35e8cb3d84a.bindPopup(popup_2df9c2ab92e145e799b5a10bf7420edc)
        ;




            var marker_0e61e6a1899140be9f5f3c49b5112c54 = L.marker(
                [46.818188, 8.227511999999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_8a3827db8ff1429fb983938a99676c48 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0e61e6a1899140be9f5f3c49b5112c54.setIcon(icon_8a3827db8ff1429fb983938a99676c48);


        var popup_1064d2604a384f7f8bd923fdba7cd50d = L.popup({"maxWidth": "100%"});


            var html_7fec010a7eef4cfb9eb3e79857d72a40 = $(`<div id="html_7fec010a7eef4cfb9eb3e79857d72a40" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ch.png">Switzerland<img src="http://localhost:8000/flag_resources/img/worldflags/ch.png "width="140px" ></a></div>`)[0];
            popup_1064d2604a384f7f8bd923fdba7cd50d.setContent(html_7fec010a7eef4cfb9eb3e79857d72a40);


        marker_0e61e6a1899140be9f5f3c49b5112c54.bindPopup(popup_1064d2604a384f7f8bd923fdba7cd50d)
        ;




            var marker_6cc2931d8a4b4855b5fe68761777daf7 = L.marker(
                [7.539989, -5.54708],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_de3b6d7686f44d9b9b613df53d2da1e4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6cc2931d8a4b4855b5fe68761777daf7.setIcon(icon_de3b6d7686f44d9b9b613df53d2da1e4);


        var popup_3daa6f7600f14861a397dbfd4d556a16 = L.popup({"maxWidth": "100%"});


            var html_259c9a1f605842b78306a31eff13e47b = $(`<div id="html_259c9a1f605842b78306a31eff13e47b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ci.png">CÃ´te d'Ivoire<img src="http://localhost:8000/flag_resources/img/worldflags/ci.png "width="140px" ></a></div>`)[0];
            popup_3daa6f7600f14861a397dbfd4d556a16.setContent(html_259c9a1f605842b78306a31eff13e47b);


        marker_6cc2931d8a4b4855b5fe68761777daf7.bindPopup(popup_3daa6f7600f14861a397dbfd4d556a16)
        ;




            var marker_ca514cbecce04dc082b9118d805dcdaa = L.marker(
                [-21.236735999999997, -159.777671],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_25e38bb1c9b741ce995ce9530a36bd83 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ca514cbecce04dc082b9118d805dcdaa.setIcon(icon_25e38bb1c9b741ce995ce9530a36bd83);


        var popup_33aca79edc1746bd90be0eec217a2386 = L.popup({"maxWidth": "100%"});


            var html_f243c103b7e04bf990f9e1d3867d0d13 = $(`<div id="html_f243c103b7e04bf990f9e1d3867d0d13" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ck.png">Cook Islands<img src="http://localhost:8000/flag_resources/img/worldflags/ck.png "width="140px" ></a></div>`)[0];
            popup_33aca79edc1746bd90be0eec217a2386.setContent(html_f243c103b7e04bf990f9e1d3867d0d13);


        marker_ca514cbecce04dc082b9118d805dcdaa.bindPopup(popup_33aca79edc1746bd90be0eec217a2386)
        ;




            var marker_7efd6ddc26a74d6ab8e0eda12748f17f = L.marker(
                [-35.675146999999996, -71.542969],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_46bd7bc888e74b37ad38bcb447a59473 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7efd6ddc26a74d6ab8e0eda12748f17f.setIcon(icon_46bd7bc888e74b37ad38bcb447a59473);


        var popup_3944245364814f89a31c85a2b5aeedc5 = L.popup({"maxWidth": "100%"});


            var html_4f6d564860c049a1a0967f65b22e44a7 = $(`<div id="html_4f6d564860c049a1a0967f65b22e44a7" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cl.png">Chile<img src="http://localhost:8000/flag_resources/img/worldflags/cl.png "width="140px" ></a></div>`)[0];
            popup_3944245364814f89a31c85a2b5aeedc5.setContent(html_4f6d564860c049a1a0967f65b22e44a7);


        marker_7efd6ddc26a74d6ab8e0eda12748f17f.bindPopup(popup_3944245364814f89a31c85a2b5aeedc5)
        ;




            var marker_e9df25d1c0c0431c9d6ad8840e3a274c = L.marker(
                [7.369722, 12.354722],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_36b7b569fba6402aa5d192df0063a26c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e9df25d1c0c0431c9d6ad8840e3a274c.setIcon(icon_36b7b569fba6402aa5d192df0063a26c);


        var popup_ce0142365f4e4b9cb5e55fcf224ac6f6 = L.popup({"maxWidth": "100%"});


            var html_139021da991049599ee248ff4cf97e46 = $(`<div id="html_139021da991049599ee248ff4cf97e46" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cm.png">Cameroon<img src="http://localhost:8000/flag_resources/img/worldflags/cm.png "width="140px" ></a></div>`)[0];
            popup_ce0142365f4e4b9cb5e55fcf224ac6f6.setContent(html_139021da991049599ee248ff4cf97e46);


        marker_e9df25d1c0c0431c9d6ad8840e3a274c.bindPopup(popup_ce0142365f4e4b9cb5e55fcf224ac6f6)
        ;




            var marker_50c944e6ce364c6693ee6bd9bc06e87c = L.marker(
                [35.86166, 104.195397],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_84715e49656b49e7b3d93ca8dd03782d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_50c944e6ce364c6693ee6bd9bc06e87c.setIcon(icon_84715e49656b49e7b3d93ca8dd03782d);


        var popup_c6bd2122fdd74f17a3c3fc5892f718e9 = L.popup({"maxWidth": "100%"});


            var html_b5b0fae521c24439811512007caeb550 = $(`<div id="html_b5b0fae521c24439811512007caeb550" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cn.png">China<img src="http://localhost:8000/flag_resources/img/worldflags/cn.png "width="140px" ></a></div>`)[0];
            popup_c6bd2122fdd74f17a3c3fc5892f718e9.setContent(html_b5b0fae521c24439811512007caeb550);


        marker_50c944e6ce364c6693ee6bd9bc06e87c.bindPopup(popup_c6bd2122fdd74f17a3c3fc5892f718e9)
        ;




            var marker_1982e872b74e45fd9f136dc5f57fe179 = L.marker(
                [4.570868, -74.297333],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4a7ed13ce2ed4994b9f73cfaba185ef3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1982e872b74e45fd9f136dc5f57fe179.setIcon(icon_4a7ed13ce2ed4994b9f73cfaba185ef3);


        var popup_f46f353e0d984db188b86e275a28b6b2 = L.popup({"maxWidth": "100%"});


            var html_bae41c96a36d413d95fc8d15652d83b4 = $(`<div id="html_bae41c96a36d413d95fc8d15652d83b4" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/co.png">Colombia<img src="http://localhost:8000/flag_resources/img/worldflags/co.png "width="140px" ></a></div>`)[0];
            popup_f46f353e0d984db188b86e275a28b6b2.setContent(html_bae41c96a36d413d95fc8d15652d83b4);


        marker_1982e872b74e45fd9f136dc5f57fe179.bindPopup(popup_f46f353e0d984db188b86e275a28b6b2)
        ;




            var marker_02b99b1e1dd54b64bf615f1a1e19e233 = L.marker(
                [9.748917, -83.753428],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2f7f9ef6131047969a619ce6c3fa2350 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_02b99b1e1dd54b64bf615f1a1e19e233.setIcon(icon_2f7f9ef6131047969a619ce6c3fa2350);


        var popup_2342d7a7dba84cc0b50ca7a209b569a1 = L.popup({"maxWidth": "100%"});


            var html_fa5849da15aa488986453e7982fcf62c = $(`<div id="html_fa5849da15aa488986453e7982fcf62c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cr.png">Costa Rica<img src="http://localhost:8000/flag_resources/img/worldflags/cr.png "width="140px" ></a></div>`)[0];
            popup_2342d7a7dba84cc0b50ca7a209b569a1.setContent(html_fa5849da15aa488986453e7982fcf62c);


        marker_02b99b1e1dd54b64bf615f1a1e19e233.bindPopup(popup_2342d7a7dba84cc0b50ca7a209b569a1)
        ;




            var marker_9f8259aa8b314483a5f4adc4a61ce925 = L.marker(
                [21.521757, -77.78116700000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_c40ac0477f154e908443165b5420b2b1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9f8259aa8b314483a5f4adc4a61ce925.setIcon(icon_c40ac0477f154e908443165b5420b2b1);


        var popup_f717d052ad984297b2d92a16846f2849 = L.popup({"maxWidth": "100%"});


            var html_b217ee4371df4c5ca2cf8d95db27103f = $(`<div id="html_b217ee4371df4c5ca2cf8d95db27103f" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cu.png">Cuba<img src="http://localhost:8000/flag_resources/img/worldflags/cu.png "width="140px" ></a></div>`)[0];
            popup_f717d052ad984297b2d92a16846f2849.setContent(html_b217ee4371df4c5ca2cf8d95db27103f);


        marker_9f8259aa8b314483a5f4adc4a61ce925.bindPopup(popup_f717d052ad984297b2d92a16846f2849)
        ;




            var marker_326fe3b44ff041efa8df540cf934e379 = L.marker(
                [16.002082, -24.013197],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0c2b28fae45d4f4792b5827c7263fe83 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_326fe3b44ff041efa8df540cf934e379.setIcon(icon_0c2b28fae45d4f4792b5827c7263fe83);


        var popup_57061ce8b6e44ab29a2b043af61a523d = L.popup({"maxWidth": "100%"});


            var html_d74bd5ad5edb4ce3a2134a38d0dc2d45 = $(`<div id="html_d74bd5ad5edb4ce3a2134a38d0dc2d45" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cv.png">Cape Verde<img src="http://localhost:8000/flag_resources/img/worldflags/cv.png "width="140px" ></a></div>`)[0];
            popup_57061ce8b6e44ab29a2b043af61a523d.setContent(html_d74bd5ad5edb4ce3a2134a38d0dc2d45);


        marker_326fe3b44ff041efa8df540cf934e379.bindPopup(popup_57061ce8b6e44ab29a2b043af61a523d)
        ;




            var marker_ee01fc09d50f4d7b98b2495aaea8ea0b = L.marker(
                [-10.447525, 105.690449],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_f0e24c6886cf4fb2a9051edfca0f45a3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ee01fc09d50f4d7b98b2495aaea8ea0b.setIcon(icon_f0e24c6886cf4fb2a9051edfca0f45a3);


        var popup_12b1855bab58415094e1162360039a38 = L.popup({"maxWidth": "100%"});


            var html_dc87249ba3874140b4fd73bb1e9686a2 = $(`<div id="html_dc87249ba3874140b4fd73bb1e9686a2" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cx.png">Christmas Island<img src="http://localhost:8000/flag_resources/img/worldflags/cx.png "width="140px" ></a></div>`)[0];
            popup_12b1855bab58415094e1162360039a38.setContent(html_dc87249ba3874140b4fd73bb1e9686a2);


        marker_ee01fc09d50f4d7b98b2495aaea8ea0b.bindPopup(popup_12b1855bab58415094e1162360039a38)
        ;




            var marker_5ae441687fde4066831329b78038f102 = L.marker(
                [35.126413, 33.429859],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_78692324adf94ceb8422953205c78bf1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5ae441687fde4066831329b78038f102.setIcon(icon_78692324adf94ceb8422953205c78bf1);


        var popup_7c64b411f255495c85ea3be57b2137f3 = L.popup({"maxWidth": "100%"});


            var html_5173b2fd10444c29a1ec54d69a54a53b = $(`<div id="html_5173b2fd10444c29a1ec54d69a54a53b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cy.png">Cyprus<img src="http://localhost:8000/flag_resources/img/worldflags/cy.png "width="140px" ></a></div>`)[0];
            popup_7c64b411f255495c85ea3be57b2137f3.setContent(html_5173b2fd10444c29a1ec54d69a54a53b);


        marker_5ae441687fde4066831329b78038f102.bindPopup(popup_7c64b411f255495c85ea3be57b2137f3)
        ;




            var marker_1374771e4dab4cc89bdd05e040bdd577 = L.marker(
                [49.817492, 15.472961999999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0410b69ca2aa42898e4e401808a0e035 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1374771e4dab4cc89bdd05e040bdd577.setIcon(icon_0410b69ca2aa42898e4e401808a0e035);


        var popup_9eefcaf339c04cb085d18bc7f6ba13d1 = L.popup({"maxWidth": "100%"});


            var html_e7ab99725f914e20b5669c56151eb4ed = $(`<div id="html_e7ab99725f914e20b5669c56151eb4ed" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/cz.png">Czech Republic<img src="http://localhost:8000/flag_resources/img/worldflags/cz.png "width="140px" ></a></div>`)[0];
            popup_9eefcaf339c04cb085d18bc7f6ba13d1.setContent(html_e7ab99725f914e20b5669c56151eb4ed);


        marker_1374771e4dab4cc89bdd05e040bdd577.bindPopup(popup_9eefcaf339c04cb085d18bc7f6ba13d1)
        ;




            var marker_d8f62cd7e3314cab8c083fe1060319d4 = L.marker(
                [51.165690999999995, 10.451526],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_26185dcdd785489a92e0e31b0dc4141c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d8f62cd7e3314cab8c083fe1060319d4.setIcon(icon_26185dcdd785489a92e0e31b0dc4141c);


        var popup_21abf900269f47f7839981e7ddfd4787 = L.popup({"maxWidth": "100%"});


            var html_52ba7b48507141478e33fde5625655b0 = $(`<div id="html_52ba7b48507141478e33fde5625655b0" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/de.png">Germany<img src="http://localhost:8000/flag_resources/img/worldflags/de.png "width="140px" ></a></div>`)[0];
            popup_21abf900269f47f7839981e7ddfd4787.setContent(html_52ba7b48507141478e33fde5625655b0);


        marker_d8f62cd7e3314cab8c083fe1060319d4.bindPopup(popup_21abf900269f47f7839981e7ddfd4787)
        ;




            var marker_2855d421d5704e5c82d98e4f5242f01d = L.marker(
                [11.825138, 42.590275],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0d8088aa60b14ff8b1ce66c06e2f35dd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2855d421d5704e5c82d98e4f5242f01d.setIcon(icon_0d8088aa60b14ff8b1ce66c06e2f35dd);


        var popup_e8b1e629dcf04b5e9418acfa0ef71872 = L.popup({"maxWidth": "100%"});


            var html_5b536329bee1446280b1489701be8885 = $(`<div id="html_5b536329bee1446280b1489701be8885" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/dj.png">Djibouti<img src="http://localhost:8000/flag_resources/img/worldflags/dj.png "width="140px" ></a></div>`)[0];
            popup_e8b1e629dcf04b5e9418acfa0ef71872.setContent(html_5b536329bee1446280b1489701be8885);


        marker_2855d421d5704e5c82d98e4f5242f01d.bindPopup(popup_e8b1e629dcf04b5e9418acfa0ef71872)
        ;




            var marker_37b7690d6eb943268962e6d6190fc8d9 = L.marker(
                [56.26392, 9.501785],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_8183a4bc2acc4dc59d918d32d877e499 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_37b7690d6eb943268962e6d6190fc8d9.setIcon(icon_8183a4bc2acc4dc59d918d32d877e499);


        var popup_5be62276a1e246b89edabc498d2e4bc9 = L.popup({"maxWidth": "100%"});


            var html_15f35a35378b425daf30218e05ac026a = $(`<div id="html_15f35a35378b425daf30218e05ac026a" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/dk.png">Denmark<img src="http://localhost:8000/flag_resources/img/worldflags/dk.png "width="140px" ></a></div>`)[0];
            popup_5be62276a1e246b89edabc498d2e4bc9.setContent(html_15f35a35378b425daf30218e05ac026a);


        marker_37b7690d6eb943268962e6d6190fc8d9.bindPopup(popup_5be62276a1e246b89edabc498d2e4bc9)
        ;




            var marker_8f5419cddd50401c9d3fff44f01521e8 = L.marker(
                [15.414999, -61.370976],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_23e7d5c3526546f0836116f95811372c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8f5419cddd50401c9d3fff44f01521e8.setIcon(icon_23e7d5c3526546f0836116f95811372c);


        var popup_e2e9ff49751948389b34a77eb86249c8 = L.popup({"maxWidth": "100%"});


            var html_e6474d75ca194e398930623d4cb36163 = $(`<div id="html_e6474d75ca194e398930623d4cb36163" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/dm.png">Dominica<img src="http://localhost:8000/flag_resources/img/worldflags/dm.png "width="140px" ></a></div>`)[0];
            popup_e2e9ff49751948389b34a77eb86249c8.setContent(html_e6474d75ca194e398930623d4cb36163);


        marker_8f5419cddd50401c9d3fff44f01521e8.bindPopup(popup_e2e9ff49751948389b34a77eb86249c8)
        ;




            var marker_14064523210c4e968156fb95e9e26774 = L.marker(
                [18.735692999999998, -70.162651],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0b169e02fc8442fa9cb59da7361bf140 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_14064523210c4e968156fb95e9e26774.setIcon(icon_0b169e02fc8442fa9cb59da7361bf140);


        var popup_607068fc0bea4ff1bf2fd8c75a22d04c = L.popup({"maxWidth": "100%"});


            var html_6396e6bfbfa546928886e6f76d4f46ad = $(`<div id="html_6396e6bfbfa546928886e6f76d4f46ad" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/do.png">Dominican Republic<img src="http://localhost:8000/flag_resources/img/worldflags/do.png "width="140px" ></a></div>`)[0];
            popup_607068fc0bea4ff1bf2fd8c75a22d04c.setContent(html_6396e6bfbfa546928886e6f76d4f46ad);


        marker_14064523210c4e968156fb95e9e26774.bindPopup(popup_607068fc0bea4ff1bf2fd8c75a22d04c)
        ;




            var marker_5e7980dd77254c10a2fcfb91128660a0 = L.marker(
                [28.033886, 1.6596259999999998],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_dc1ada02e23140fab747c48863fbdaa0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5e7980dd77254c10a2fcfb91128660a0.setIcon(icon_dc1ada02e23140fab747c48863fbdaa0);


        var popup_9566e8bad7dd4b3a92401768c44b9f71 = L.popup({"maxWidth": "100%"});


            var html_d351e0d6d5274f3484ddba9f46be4e4c = $(`<div id="html_d351e0d6d5274f3484ddba9f46be4e4c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/dz.png">Algeria<img src="http://localhost:8000/flag_resources/img/worldflags/dz.png "width="140px" ></a></div>`)[0];
            popup_9566e8bad7dd4b3a92401768c44b9f71.setContent(html_d351e0d6d5274f3484ddba9f46be4e4c);


        marker_5e7980dd77254c10a2fcfb91128660a0.bindPopup(popup_9566e8bad7dd4b3a92401768c44b9f71)
        ;




            var marker_2f711333401a48a7a3037204a0724daf = L.marker(
                [-1.8312389999999998, -78.183406],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_15133497f59c443e882cc32a7e1cafb0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2f711333401a48a7a3037204a0724daf.setIcon(icon_15133497f59c443e882cc32a7e1cafb0);


        var popup_ea88dea2b7424221ac127d6322adb7e4 = L.popup({"maxWidth": "100%"});


            var html_44bf5528c1e64f7696051408019f424d = $(`<div id="html_44bf5528c1e64f7696051408019f424d" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ec.png">Ecuador<img src="http://localhost:8000/flag_resources/img/worldflags/ec.png "width="140px" ></a></div>`)[0];
            popup_ea88dea2b7424221ac127d6322adb7e4.setContent(html_44bf5528c1e64f7696051408019f424d);


        marker_2f711333401a48a7a3037204a0724daf.bindPopup(popup_ea88dea2b7424221ac127d6322adb7e4)
        ;




            var marker_5e4912ce36874f448af3202bffe8bca6 = L.marker(
                [58.595271999999994, 25.013607],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_bf8b10dcce594e0f8cda96e11f5bfcdb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5e4912ce36874f448af3202bffe8bca6.setIcon(icon_bf8b10dcce594e0f8cda96e11f5bfcdb);


        var popup_2d15faa4569f451d87110761a79a363c = L.popup({"maxWidth": "100%"});


            var html_d4c0d7543a8b4eacbffa66176326085e = $(`<div id="html_d4c0d7543a8b4eacbffa66176326085e" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ee.png">Estonia<img src="http://localhost:8000/flag_resources/img/worldflags/ee.png "width="140px" ></a></div>`)[0];
            popup_2d15faa4569f451d87110761a79a363c.setContent(html_d4c0d7543a8b4eacbffa66176326085e);


        marker_5e4912ce36874f448af3202bffe8bca6.bindPopup(popup_2d15faa4569f451d87110761a79a363c)
        ;




            var marker_b33166de877444699b564d375c793756 = L.marker(
                [26.820553000000004, 30.802497999999996],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_6eb83982a761411c8fc93b7858ad6410 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b33166de877444699b564d375c793756.setIcon(icon_6eb83982a761411c8fc93b7858ad6410);


        var popup_77f01422d82f449392ce26dd4ccbe3f7 = L.popup({"maxWidth": "100%"});


            var html_e514a141b707459880d8ce4c7c6b3632 = $(`<div id="html_e514a141b707459880d8ce4c7c6b3632" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/eg.png">Egypt<img src="http://localhost:8000/flag_resources/img/worldflags/eg.png "width="140px" ></a></div>`)[0];
            popup_77f01422d82f449392ce26dd4ccbe3f7.setContent(html_e514a141b707459880d8ce4c7c6b3632);


        marker_b33166de877444699b564d375c793756.bindPopup(popup_77f01422d82f449392ce26dd4ccbe3f7)
        ;




            var marker_f716b7c714a04a7bb282b8dc00b82114 = L.marker(
                [24.215526999999998, -12.885834],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_afe0438568e94e188082d2bbb347d022 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f716b7c714a04a7bb282b8dc00b82114.setIcon(icon_afe0438568e94e188082d2bbb347d022);


        var popup_2829e6acd95f4f1b8fcc0846e6ff43e1 = L.popup({"maxWidth": "100%"});


            var html_5ba06338ef294ae8a264d45d67c8eaf3 = $(`<div id="html_5ba06338ef294ae8a264d45d67c8eaf3" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/eh.png">Western Sahara<img src="http://localhost:8000/flag_resources/img/worldflags/eh.png "width="140px" ></a></div>`)[0];
            popup_2829e6acd95f4f1b8fcc0846e6ff43e1.setContent(html_5ba06338ef294ae8a264d45d67c8eaf3);


        marker_f716b7c714a04a7bb282b8dc00b82114.bindPopup(popup_2829e6acd95f4f1b8fcc0846e6ff43e1)
        ;




            var marker_9f0803d1595f4534acdcc33c189f115f = L.marker(
                [15.179383999999999, 39.782334000000006],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5d222d8966b144b3b14722ed14dfe700 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9f0803d1595f4534acdcc33c189f115f.setIcon(icon_5d222d8966b144b3b14722ed14dfe700);


        var popup_fc67b957123e4182ae9094d7bdcde9a2 = L.popup({"maxWidth": "100%"});


            var html_cf95968c5fac424ca4c6ab280d82285b = $(`<div id="html_cf95968c5fac424ca4c6ab280d82285b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/er.png">Eritrea<img src="http://localhost:8000/flag_resources/img/worldflags/er.png "width="140px" ></a></div>`)[0];
            popup_fc67b957123e4182ae9094d7bdcde9a2.setContent(html_cf95968c5fac424ca4c6ab280d82285b);


        marker_9f0803d1595f4534acdcc33c189f115f.bindPopup(popup_fc67b957123e4182ae9094d7bdcde9a2)
        ;




            var marker_49350c70c52149ae9275c737ecd622c7 = L.marker(
                [40.463667, -3.7492199999999998],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_9ca8bd142e814fcd97c4d385705c4208 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_49350c70c52149ae9275c737ecd622c7.setIcon(icon_9ca8bd142e814fcd97c4d385705c4208);


        var popup_41d96320adf2427b9556f8eee2e10b81 = L.popup({"maxWidth": "100%"});


            var html_5757e847ab9e456fab5b90f2c34a0779 = $(`<div id="html_5757e847ab9e456fab5b90f2c34a0779" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/es.png">Spain<img src="http://localhost:8000/flag_resources/img/worldflags/es.png "width="140px" ></a></div>`)[0];
            popup_41d96320adf2427b9556f8eee2e10b81.setContent(html_5757e847ab9e456fab5b90f2c34a0779);


        marker_49350c70c52149ae9275c737ecd622c7.bindPopup(popup_41d96320adf2427b9556f8eee2e10b81)
        ;




            var marker_52650a51f61345f0847ff81966c531c6 = L.marker(
                [9.145, 40.489672999999996],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_3ff06019d8f04dfaa5e9422bdef21304 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_52650a51f61345f0847ff81966c531c6.setIcon(icon_3ff06019d8f04dfaa5e9422bdef21304);


        var popup_0475d3ddadfd4d6d9c6c63b490cd3cc2 = L.popup({"maxWidth": "100%"});


            var html_b3ded99f62294d5baa51941ac67a0b11 = $(`<div id="html_b3ded99f62294d5baa51941ac67a0b11" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/et.png">Ethiopia<img src="http://localhost:8000/flag_resources/img/worldflags/et.png "width="140px" ></a></div>`)[0];
            popup_0475d3ddadfd4d6d9c6c63b490cd3cc2.setContent(html_b3ded99f62294d5baa51941ac67a0b11);


        marker_52650a51f61345f0847ff81966c531c6.bindPopup(popup_0475d3ddadfd4d6d9c6c63b490cd3cc2)
        ;




            var marker_0e9fccd2d5d8439abb3b6511e1b36e0b = L.marker(
                [61.92411, 25.748151],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_dc104e0f1e8c474da9594f57b5625fd7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0e9fccd2d5d8439abb3b6511e1b36e0b.setIcon(icon_dc104e0f1e8c474da9594f57b5625fd7);


        var popup_001a33409ee848fdad810faf1ca1660f = L.popup({"maxWidth": "100%"});


            var html_3b4b0610db8e44f190a032b791847503 = $(`<div id="html_3b4b0610db8e44f190a032b791847503" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/fi.png">Finland<img src="http://localhost:8000/flag_resources/img/worldflags/fi.png "width="140px" ></a></div>`)[0];
            popup_001a33409ee848fdad810faf1ca1660f.setContent(html_3b4b0610db8e44f190a032b791847503);


        marker_0e9fccd2d5d8439abb3b6511e1b36e0b.bindPopup(popup_001a33409ee848fdad810faf1ca1660f)
        ;




            var marker_f2fef5d52e67493f9fd89306906afbf6 = L.marker(
                [-16.578193, 179.414413],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d8529fda3b9846debd24634b3855c4ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f2fef5d52e67493f9fd89306906afbf6.setIcon(icon_d8529fda3b9846debd24634b3855c4ef);


        var popup_572900490cd24da6b137f2fb7fa4a165 = L.popup({"maxWidth": "100%"});


            var html_e6b45433100649b0ace39d5a8c0ecc06 = $(`<div id="html_e6b45433100649b0ace39d5a8c0ecc06" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/fj.png">Fiji<img src="http://localhost:8000/flag_resources/img/worldflags/fj.png "width="140px" ></a></div>`)[0];
            popup_572900490cd24da6b137f2fb7fa4a165.setContent(html_e6b45433100649b0ace39d5a8c0ecc06);


        marker_f2fef5d52e67493f9fd89306906afbf6.bindPopup(popup_572900490cd24da6b137f2fb7fa4a165)
        ;




            var marker_85de751e7beb4292b242d6fb778a7c97 = L.marker(
                [-51.796253, -59.523613],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_bd851ea7e9b14c9bac66c1326250c716 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_85de751e7beb4292b242d6fb778a7c97.setIcon(icon_bd851ea7e9b14c9bac66c1326250c716);


        var popup_473d222094754ccab70fbb7370127b38 = L.popup({"maxWidth": "100%"});


            var html_714197376c374b5da08687856df49dce = $(`<div id="html_714197376c374b5da08687856df49dce" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/fk.png">Falkland Islands [Islas Malvinas]<img src="http://localhost:8000/flag_resources/img/worldflags/fk.png "width="140px" ></a></div>`)[0];
            popup_473d222094754ccab70fbb7370127b38.setContent(html_714197376c374b5da08687856df49dce);


        marker_85de751e7beb4292b242d6fb778a7c97.bindPopup(popup_473d222094754ccab70fbb7370127b38)
        ;




            var marker_33402c3fd2014dc39677a40d53f4e173 = L.marker(
                [7.425553999999999, 150.550812],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a00ace45d1b74630bf5f3011e31a5178 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_33402c3fd2014dc39677a40d53f4e173.setIcon(icon_a00ace45d1b74630bf5f3011e31a5178);


        var popup_c5aef532a79b4d48bf8c514165ecd71d = L.popup({"maxWidth": "100%"});


            var html_70603fdea7dd4cc3be150d68e9684530 = $(`<div id="html_70603fdea7dd4cc3be150d68e9684530" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/fm.png">Micronesia<img src="http://localhost:8000/flag_resources/img/worldflags/fm.png "width="140px" ></a></div>`)[0];
            popup_c5aef532a79b4d48bf8c514165ecd71d.setContent(html_70603fdea7dd4cc3be150d68e9684530);


        marker_33402c3fd2014dc39677a40d53f4e173.bindPopup(popup_c5aef532a79b4d48bf8c514165ecd71d)
        ;




            var marker_4d28af4f6959463db0da31eca0b0ad4a = L.marker(
                [61.892635, -6.9118059999999995],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_6f370bc3d33a4d41a9d2790ada0926b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4d28af4f6959463db0da31eca0b0ad4a.setIcon(icon_6f370bc3d33a4d41a9d2790ada0926b4);


        var popup_e802caa7e7634465b9cf82b08b271741 = L.popup({"maxWidth": "100%"});


            var html_440e70a6e7764ee790e93ccef9cc18c6 = $(`<div id="html_440e70a6e7764ee790e93ccef9cc18c6" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/fo.png">Faroe Islands<img src="http://localhost:8000/flag_resources/img/worldflags/fo.png "width="140px" ></a></div>`)[0];
            popup_e802caa7e7634465b9cf82b08b271741.setContent(html_440e70a6e7764ee790e93ccef9cc18c6);


        marker_4d28af4f6959463db0da31eca0b0ad4a.bindPopup(popup_e802caa7e7634465b9cf82b08b271741)
        ;




            var marker_fa08160058874bb19ea718757aec8b8e = L.marker(
                [46.227638, 2.213749],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_80f90ac0ffe4427eb114843902d80fd0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fa08160058874bb19ea718757aec8b8e.setIcon(icon_80f90ac0ffe4427eb114843902d80fd0);


        var popup_e2c6964d53ce4565a563dd8453f142f9 = L.popup({"maxWidth": "100%"});


            var html_bd62d32de85048abafdc90235cee2f59 = $(`<div id="html_bd62d32de85048abafdc90235cee2f59" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/fr.png">France<img src="http://localhost:8000/flag_resources/img/worldflags/fr.png "width="140px" ></a></div>`)[0];
            popup_e2c6964d53ce4565a563dd8453f142f9.setContent(html_bd62d32de85048abafdc90235cee2f59);


        marker_fa08160058874bb19ea718757aec8b8e.bindPopup(popup_e2c6964d53ce4565a563dd8453f142f9)
        ;




            var marker_e119046aa7804d02adf84bafa70240c6 = L.marker(
                [-0.803689, 11.609444],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2c44b1db4678427582aa15b23e509d3d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e119046aa7804d02adf84bafa70240c6.setIcon(icon_2c44b1db4678427582aa15b23e509d3d);


        var popup_cef38285410f4b2b9aa833643cd25489 = L.popup({"maxWidth": "100%"});


            var html_d6d4c46360474aa29e12e56f7ac5d47e = $(`<div id="html_d6d4c46360474aa29e12e56f7ac5d47e" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ga.png">Gabon<img src="http://localhost:8000/flag_resources/img/worldflags/ga.png "width="140px" ></a></div>`)[0];
            popup_cef38285410f4b2b9aa833643cd25489.setContent(html_d6d4c46360474aa29e12e56f7ac5d47e);


        marker_e119046aa7804d02adf84bafa70240c6.bindPopup(popup_cef38285410f4b2b9aa833643cd25489)
        ;




            var marker_0df53d78f4524a58b45ca08109df314a = L.marker(
                [55.378051, -3.435973],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_54250c0d06f9498eb47637b5138ce09c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0df53d78f4524a58b45ca08109df314a.setIcon(icon_54250c0d06f9498eb47637b5138ce09c);


        var popup_98db4156e42a434682dc8c522f690ae6 = L.popup({"maxWidth": "100%"});


            var html_3ccfe991548f40ababa945cc17a06ab8 = $(`<div id="html_3ccfe991548f40ababa945cc17a06ab8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gb.png">United Kingdom<img src="http://localhost:8000/flag_resources/img/worldflags/gb.png "width="140px" ></a></div>`)[0];
            popup_98db4156e42a434682dc8c522f690ae6.setContent(html_3ccfe991548f40ababa945cc17a06ab8);


        marker_0df53d78f4524a58b45ca08109df314a.bindPopup(popup_98db4156e42a434682dc8c522f690ae6)
        ;




            var marker_5b16f74ff7144a92937e3f9671da44c1 = L.marker(
                [12.262775999999999, -61.604170999999994],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_996dbeabe1084a878d8c2c96bb363236 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5b16f74ff7144a92937e3f9671da44c1.setIcon(icon_996dbeabe1084a878d8c2c96bb363236);


        var popup_dec201bd31004930904dc7152edf2198 = L.popup({"maxWidth": "100%"});


            var html_2d9d52a0afe2413081e4ec31b431dd73 = $(`<div id="html_2d9d52a0afe2413081e4ec31b431dd73" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gd.png">Grenada<img src="http://localhost:8000/flag_resources/img/worldflags/gd.png "width="140px" ></a></div>`)[0];
            popup_dec201bd31004930904dc7152edf2198.setContent(html_2d9d52a0afe2413081e4ec31b431dd73);


        marker_5b16f74ff7144a92937e3f9671da44c1.bindPopup(popup_dec201bd31004930904dc7152edf2198)
        ;




            var marker_9fed5f1ef1be47ed8cd485456508d813 = L.marker(
                [42.315407, 43.356891999999995],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_51b61471057244c3a042bfe7b80aaf6b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9fed5f1ef1be47ed8cd485456508d813.setIcon(icon_51b61471057244c3a042bfe7b80aaf6b);


        var popup_ef2f976036dd4f8ea3c427a371b2513d = L.popup({"maxWidth": "100%"});


            var html_cc8d331ccbe24bca89103ecce1394011 = $(`<div id="html_cc8d331ccbe24bca89103ecce1394011" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ge.png">Georgia<img src="http://localhost:8000/flag_resources/img/worldflags/ge.png "width="140px" ></a></div>`)[0];
            popup_ef2f976036dd4f8ea3c427a371b2513d.setContent(html_cc8d331ccbe24bca89103ecce1394011);


        marker_9fed5f1ef1be47ed8cd485456508d813.bindPopup(popup_ef2f976036dd4f8ea3c427a371b2513d)
        ;




            var marker_ed95a8568a05433397919615eb31a412 = L.marker(
                [3.9338889999999997, -53.125781999999994],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_22f408ed0a24479cbb2a140c2e84c042 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ed95a8568a05433397919615eb31a412.setIcon(icon_22f408ed0a24479cbb2a140c2e84c042);


        var popup_59a4aacf53e44f438afe758cdef153bd = L.popup({"maxWidth": "100%"});


            var html_23303c1f7381428b8f3248b98d0bae7e = $(`<div id="html_23303c1f7381428b8f3248b98d0bae7e" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gf.png">French Guiana<img src="http://localhost:8000/flag_resources/img/worldflags/gf.png "width="140px" ></a></div>`)[0];
            popup_59a4aacf53e44f438afe758cdef153bd.setContent(html_23303c1f7381428b8f3248b98d0bae7e);


        marker_ed95a8568a05433397919615eb31a412.bindPopup(popup_59a4aacf53e44f438afe758cdef153bd)
        ;




            var marker_ae5bd315fa754062a5dd5c61f0923654 = L.marker(
                [49.465691, -2.5852779999999997],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_744ac1657e5e4e4f9a297c244711695f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ae5bd315fa754062a5dd5c61f0923654.setIcon(icon_744ac1657e5e4e4f9a297c244711695f);


        var popup_43475c698a4646e58a488eb5a607fd54 = L.popup({"maxWidth": "100%"});


            var html_84b4bb56cb264a54ae254120eb408959 = $(`<div id="html_84b4bb56cb264a54ae254120eb408959" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gg.png">Guernsey<img src="http://localhost:8000/flag_resources/img/worldflags/gg.png "width="140px" ></a></div>`)[0];
            popup_43475c698a4646e58a488eb5a607fd54.setContent(html_84b4bb56cb264a54ae254120eb408959);


        marker_ae5bd315fa754062a5dd5c61f0923654.bindPopup(popup_43475c698a4646e58a488eb5a607fd54)
        ;




            var marker_5f9cfcfa54a049628afb6f87a2e04620 = L.marker(
                [7.946527000000001, -1.0231940000000002],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_738ad89344584058a73f50deb41693b4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5f9cfcfa54a049628afb6f87a2e04620.setIcon(icon_738ad89344584058a73f50deb41693b4);


        var popup_f97c2d69141f4ad8a53c85bd034de05f = L.popup({"maxWidth": "100%"});


            var html_58ab22b7bed24463bf4b791f5224c884 = $(`<div id="html_58ab22b7bed24463bf4b791f5224c884" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gh.png">Ghana<img src="http://localhost:8000/flag_resources/img/worldflags/gh.png "width="140px" ></a></div>`)[0];
            popup_f97c2d69141f4ad8a53c85bd034de05f.setContent(html_58ab22b7bed24463bf4b791f5224c884);


        marker_5f9cfcfa54a049628afb6f87a2e04620.bindPopup(popup_f97c2d69141f4ad8a53c85bd034de05f)
        ;




            var marker_7af6919387eb4f8499d0fc0f879b6df9 = L.marker(
                [36.137741, -5.345374],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_56756c6ca9744a11aca8f48cd0a6084e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7af6919387eb4f8499d0fc0f879b6df9.setIcon(icon_56756c6ca9744a11aca8f48cd0a6084e);


        var popup_9634dbd5ef7b44e789f7c1937609ff4c = L.popup({"maxWidth": "100%"});


            var html_96d31b600dfe4a6ca06478fbc380427e = $(`<div id="html_96d31b600dfe4a6ca06478fbc380427e" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gi.png">Gibraltar<img src="http://localhost:8000/flag_resources/img/worldflags/gi.png "width="140px" ></a></div>`)[0];
            popup_9634dbd5ef7b44e789f7c1937609ff4c.setContent(html_96d31b600dfe4a6ca06478fbc380427e);


        marker_7af6919387eb4f8499d0fc0f879b6df9.bindPopup(popup_9634dbd5ef7b44e789f7c1937609ff4c)
        ;




            var marker_a23a82e9a64c48b28eac9b2b9ed19ca4 = L.marker(
                [71.706936, -42.604303],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4b82ac363878434e9490514e23ceb6ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a23a82e9a64c48b28eac9b2b9ed19ca4.setIcon(icon_4b82ac363878434e9490514e23ceb6ae);


        var popup_f05344b3231e4572b147032659a1dd1e = L.popup({"maxWidth": "100%"});


            var html_019a1f2582824aa7aa41dec4d169e4a7 = $(`<div id="html_019a1f2582824aa7aa41dec4d169e4a7" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gl.png">Greenland<img src="http://localhost:8000/flag_resources/img/worldflags/gl.png "width="140px" ></a></div>`)[0];
            popup_f05344b3231e4572b147032659a1dd1e.setContent(html_019a1f2582824aa7aa41dec4d169e4a7);


        marker_a23a82e9a64c48b28eac9b2b9ed19ca4.bindPopup(popup_f05344b3231e4572b147032659a1dd1e)
        ;




            var marker_c15bcde151fa4469b425b9ecf64f02cf = L.marker(
                [13.443182, -15.310139000000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2dffc25d019e44ba8e40bb810dbad543 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c15bcde151fa4469b425b9ecf64f02cf.setIcon(icon_2dffc25d019e44ba8e40bb810dbad543);


        var popup_77cae52b0c5042ab881ef94f04a49353 = L.popup({"maxWidth": "100%"});


            var html_9523a0ce122d43089000b93ff716d276 = $(`<div id="html_9523a0ce122d43089000b93ff716d276" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gm.png">Gambia<img src="http://localhost:8000/flag_resources/img/worldflags/gm.png "width="140px" ></a></div>`)[0];
            popup_77cae52b0c5042ab881ef94f04a49353.setContent(html_9523a0ce122d43089000b93ff716d276);


        marker_c15bcde151fa4469b425b9ecf64f02cf.bindPopup(popup_77cae52b0c5042ab881ef94f04a49353)
        ;




            var marker_293a1813042c487098722e5cdfa320d7 = L.marker(
                [9.945587, -9.696645],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_85ab8e90fa444265a6ed4f97ed48e99a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_293a1813042c487098722e5cdfa320d7.setIcon(icon_85ab8e90fa444265a6ed4f97ed48e99a);


        var popup_3ce149d580e347229745c8fb4464be4e = L.popup({"maxWidth": "100%"});


            var html_00016a1873704a87960949fd71f9c80a = $(`<div id="html_00016a1873704a87960949fd71f9c80a" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gn.png">Guinea<img src="http://localhost:8000/flag_resources/img/worldflags/gn.png "width="140px" ></a></div>`)[0];
            popup_3ce149d580e347229745c8fb4464be4e.setContent(html_00016a1873704a87960949fd71f9c80a);


        marker_293a1813042c487098722e5cdfa320d7.bindPopup(popup_3ce149d580e347229745c8fb4464be4e)
        ;




            var marker_d85a623cd2024a2b99fd67cb4fc3f667 = L.marker(
                [16.995971, -62.067641],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2551fb30a318428c9ec0442287fcd390 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d85a623cd2024a2b99fd67cb4fc3f667.setIcon(icon_2551fb30a318428c9ec0442287fcd390);


        var popup_692290d9d01e4b30bb6f7ddd9f602eb1 = L.popup({"maxWidth": "100%"});


            var html_b12a328bd72045d4b7ae6fc9c5f5aa3b = $(`<div id="html_b12a328bd72045d4b7ae6fc9c5f5aa3b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gp.png">Guadeloupe<img src="http://localhost:8000/flag_resources/img/worldflags/gp.png "width="140px" ></a></div>`)[0];
            popup_692290d9d01e4b30bb6f7ddd9f602eb1.setContent(html_b12a328bd72045d4b7ae6fc9c5f5aa3b);


        marker_d85a623cd2024a2b99fd67cb4fc3f667.bindPopup(popup_692290d9d01e4b30bb6f7ddd9f602eb1)
        ;




            var marker_6472bda9eacf4dfda5d00e094ca0adc4 = L.marker(
                [1.6508009999999997, 10.267895],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_39ac9f696dbc4b909698de4041ec93ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6472bda9eacf4dfda5d00e094ca0adc4.setIcon(icon_39ac9f696dbc4b909698de4041ec93ee);


        var popup_a7e60184c8ac4f23b432708f7265b9c9 = L.popup({"maxWidth": "100%"});


            var html_94dd092a0a484b4ebeb43b6901b3052a = $(`<div id="html_94dd092a0a484b4ebeb43b6901b3052a" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gq.png">Equatorial Guinea<img src="http://localhost:8000/flag_resources/img/worldflags/gq.png "width="140px" ></a></div>`)[0];
            popup_a7e60184c8ac4f23b432708f7265b9c9.setContent(html_94dd092a0a484b4ebeb43b6901b3052a);


        marker_6472bda9eacf4dfda5d00e094ca0adc4.bindPopup(popup_a7e60184c8ac4f23b432708f7265b9c9)
        ;




            var marker_7adc2b61b06d428e945857746fec46e0 = L.marker(
                [39.074208, 21.824312],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_7a27d47c9d214f6fae0c7cd9b0d8288e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7adc2b61b06d428e945857746fec46e0.setIcon(icon_7a27d47c9d214f6fae0c7cd9b0d8288e);


        var popup_fe8aeebb55594e2da78cce23b1e202ba = L.popup({"maxWidth": "100%"});


            var html_34aa7ec9d07248a8aee129f060e3cddc = $(`<div id="html_34aa7ec9d07248a8aee129f060e3cddc" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gr.png">Greece<img src="http://localhost:8000/flag_resources/img/worldflags/gr.png "width="140px" ></a></div>`)[0];
            popup_fe8aeebb55594e2da78cce23b1e202ba.setContent(html_34aa7ec9d07248a8aee129f060e3cddc);


        marker_7adc2b61b06d428e945857746fec46e0.bindPopup(popup_fe8aeebb55594e2da78cce23b1e202ba)
        ;




            var marker_3f376872fb0c49658ec9df5e5149cdb7 = L.marker(
                [-54.429579000000004, -36.587909],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_56028c7f7dfd45739abf67fca80a6353 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3f376872fb0c49658ec9df5e5149cdb7.setIcon(icon_56028c7f7dfd45739abf67fca80a6353);


        var popup_8689a3f73cc549ac8080432cc346a8d5 = L.popup({"maxWidth": "100%"});


            var html_3c027143a7eb45e8987024ab483283b1 = $(`<div id="html_3c027143a7eb45e8987024ab483283b1" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gs.png">South Georgia and the South Sandwich Islands<img src="http://localhost:8000/flag_resources/img/worldflags/gs.png "width="140px" ></a></div>`)[0];
            popup_8689a3f73cc549ac8080432cc346a8d5.setContent(html_3c027143a7eb45e8987024ab483283b1);


        marker_3f376872fb0c49658ec9df5e5149cdb7.bindPopup(popup_8689a3f73cc549ac8080432cc346a8d5)
        ;




            var marker_41f4d964110f4ff09661dc07e4671b7b = L.marker(
                [15.783470999999999, -90.23075899999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_837ed56440334449bdd195af00449a9e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_41f4d964110f4ff09661dc07e4671b7b.setIcon(icon_837ed56440334449bdd195af00449a9e);


        var popup_58c79fef331b404b821acc5bcc65a708 = L.popup({"maxWidth": "100%"});


            var html_d65d6da578e24459933e6a69e44fc385 = $(`<div id="html_d65d6da578e24459933e6a69e44fc385" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gt.png">Guatemala<img src="http://localhost:8000/flag_resources/img/worldflags/gt.png "width="140px" ></a></div>`)[0];
            popup_58c79fef331b404b821acc5bcc65a708.setContent(html_d65d6da578e24459933e6a69e44fc385);


        marker_41f4d964110f4ff09661dc07e4671b7b.bindPopup(popup_58c79fef331b404b821acc5bcc65a708)
        ;




            var marker_b41179fc48904fc68e599c805ca98dc3 = L.marker(
                [13.444304, 144.793731],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a747e69a66f44ae6813e27da26f597b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b41179fc48904fc68e599c805ca98dc3.setIcon(icon_a747e69a66f44ae6813e27da26f597b6);


        var popup_1589a668faf44b5083646225c06f610f = L.popup({"maxWidth": "100%"});


            var html_e1f975ec6ad849a98dd96d65c9bb846f = $(`<div id="html_e1f975ec6ad849a98dd96d65c9bb846f" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gu.png">Guam<img src="http://localhost:8000/flag_resources/img/worldflags/gu.png "width="140px" ></a></div>`)[0];
            popup_1589a668faf44b5083646225c06f610f.setContent(html_e1f975ec6ad849a98dd96d65c9bb846f);


        marker_b41179fc48904fc68e599c805ca98dc3.bindPopup(popup_1589a668faf44b5083646225c06f610f)
        ;




            var marker_311a66285c68471890f427bdf985b228 = L.marker(
                [11.803749, -15.180413],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_31b518e815af4d3688db4c6fc8f67780 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_311a66285c68471890f427bdf985b228.setIcon(icon_31b518e815af4d3688db4c6fc8f67780);


        var popup_73e50fc013f04964aefbdbfa3fcd6567 = L.popup({"maxWidth": "100%"});


            var html_6649dd80dd38446dbfd8bbdd13ad330c = $(`<div id="html_6649dd80dd38446dbfd8bbdd13ad330c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gw.png">Guinea-Bissau<img src="http://localhost:8000/flag_resources/img/worldflags/gw.png "width="140px" ></a></div>`)[0];
            popup_73e50fc013f04964aefbdbfa3fcd6567.setContent(html_6649dd80dd38446dbfd8bbdd13ad330c);


        marker_311a66285c68471890f427bdf985b228.bindPopup(popup_73e50fc013f04964aefbdbfa3fcd6567)
        ;




            var marker_70e591d974bf47389b3921b5e21ec6f4 = L.marker(
                [4.860416000000001, -58.93018000000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_cba6750462ce40d694a5ac13bcc42228 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_70e591d974bf47389b3921b5e21ec6f4.setIcon(icon_cba6750462ce40d694a5ac13bcc42228);


        var popup_5f291647e26f46bd8130b11c9744ab05 = L.popup({"maxWidth": "100%"});


            var html_b4b960fbaa0442abb57343dc7a0fa9ea = $(`<div id="html_b4b960fbaa0442abb57343dc7a0fa9ea" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gy.png">Guyana<img src="http://localhost:8000/flag_resources/img/worldflags/gy.png "width="140px" ></a></div>`)[0];
            popup_5f291647e26f46bd8130b11c9744ab05.setContent(html_b4b960fbaa0442abb57343dc7a0fa9ea);


        marker_70e591d974bf47389b3921b5e21ec6f4.bindPopup(popup_5f291647e26f46bd8130b11c9744ab05)
        ;




            var marker_f4678a6b596d48889fb6f512517d575a = L.marker(
                [31.354676, 34.308825],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_28c73d5c2f004354abb3b81419165c0e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f4678a6b596d48889fb6f512517d575a.setIcon(icon_28c73d5c2f004354abb3b81419165c0e);


        var popup_0f228484603a45539e077efa1f5aa20c = L.popup({"maxWidth": "100%"});


            var html_e7f958d31bfa474a83e76a8fef964568 = $(`<div id="html_e7f958d31bfa474a83e76a8fef964568" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/gz.png">Gaza Strip<img src="http://localhost:8000/flag_resources/img/worldflags/gz.png "width="140px" ></a></div>`)[0];
            popup_0f228484603a45539e077efa1f5aa20c.setContent(html_e7f958d31bfa474a83e76a8fef964568);


        marker_f4678a6b596d48889fb6f512517d575a.bindPopup(popup_0f228484603a45539e077efa1f5aa20c)
        ;




            var marker_9918d0abd6d84bce8f05c9c26f772ee5 = L.marker(
                [22.396428, 114.10949699999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_e544ab1cc87945abb465e1e4c978031d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9918d0abd6d84bce8f05c9c26f772ee5.setIcon(icon_e544ab1cc87945abb465e1e4c978031d);


        var popup_f6b84f0179734a7d8a7eedd98237057d = L.popup({"maxWidth": "100%"});


            var html_1384bf5826304c10bd2be714434ac6d8 = $(`<div id="html_1384bf5826304c10bd2be714434ac6d8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/hk.png">Hong Kong<img src="http://localhost:8000/flag_resources/img/worldflags/hk.png "width="140px" ></a></div>`)[0];
            popup_f6b84f0179734a7d8a7eedd98237057d.setContent(html_1384bf5826304c10bd2be714434ac6d8);


        marker_9918d0abd6d84bce8f05c9c26f772ee5.bindPopup(popup_f6b84f0179734a7d8a7eedd98237057d)
        ;




            var marker_f68d941badbd447483d5090a629b5f47 = L.marker(
                [-53.08181, 73.50415799999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_1beef8a2c540474ca6f040ba2c1fd0be = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f68d941badbd447483d5090a629b5f47.setIcon(icon_1beef8a2c540474ca6f040ba2c1fd0be);


        var popup_f5ec5cd265754d349064a4f99ade380a = L.popup({"maxWidth": "100%"});


            var html_2f431d6163ed4660a61f7664afc5ba8e = $(`<div id="html_2f431d6163ed4660a61f7664afc5ba8e" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/hm.png">Heard Island and McDonald Islands<img src="http://localhost:8000/flag_resources/img/worldflags/hm.png "width="140px" ></a></div>`)[0];
            popup_f5ec5cd265754d349064a4f99ade380a.setContent(html_2f431d6163ed4660a61f7664afc5ba8e);


        marker_f68d941badbd447483d5090a629b5f47.bindPopup(popup_f5ec5cd265754d349064a4f99ade380a)
        ;




            var marker_5c3cc00ca30441c083353f8a657cc30a = L.marker(
                [15.199998999999998, -86.241905],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2a95c228201540cdac475746b874e8cd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5c3cc00ca30441c083353f8a657cc30a.setIcon(icon_2a95c228201540cdac475746b874e8cd);


        var popup_31e5fee7689648e2a263bdac6d5dfb80 = L.popup({"maxWidth": "100%"});


            var html_f0fa4956965d4f4bbac0c29850e069ed = $(`<div id="html_f0fa4956965d4f4bbac0c29850e069ed" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/hn.png">Honduras<img src="http://localhost:8000/flag_resources/img/worldflags/hn.png "width="140px" ></a></div>`)[0];
            popup_31e5fee7689648e2a263bdac6d5dfb80.setContent(html_f0fa4956965d4f4bbac0c29850e069ed);


        marker_5c3cc00ca30441c083353f8a657cc30a.bindPopup(popup_31e5fee7689648e2a263bdac6d5dfb80)
        ;




            var marker_f22db9fd26284b68b298a088900007f9 = L.marker(
                [45.1, 15.2],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_12ce913da3ba48ea80b6ac73e7699e41 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f22db9fd26284b68b298a088900007f9.setIcon(icon_12ce913da3ba48ea80b6ac73e7699e41);


        var popup_eebbc644f38e4012a750dc88dc039db9 = L.popup({"maxWidth": "100%"});


            var html_c4f3ce6acbdb44a7bd3a9eae251017dc = $(`<div id="html_c4f3ce6acbdb44a7bd3a9eae251017dc" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/hr.png">Croatia<img src="http://localhost:8000/flag_resources/img/worldflags/hr.png "width="140px" ></a></div>`)[0];
            popup_eebbc644f38e4012a750dc88dc039db9.setContent(html_c4f3ce6acbdb44a7bd3a9eae251017dc);


        marker_f22db9fd26284b68b298a088900007f9.bindPopup(popup_eebbc644f38e4012a750dc88dc039db9)
        ;




            var marker_c7115d2d021d42aaaaa18641566046ff = L.marker(
                [18.971187, -72.28521500000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_62d250987f9f411a8f4d4ee705230650 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c7115d2d021d42aaaaa18641566046ff.setIcon(icon_62d250987f9f411a8f4d4ee705230650);


        var popup_4eb1b693e74441549aabdca2a272bb4f = L.popup({"maxWidth": "100%"});


            var html_94f07023a4484eab92a46890542f3235 = $(`<div id="html_94f07023a4484eab92a46890542f3235" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ht.png">Haiti<img src="http://localhost:8000/flag_resources/img/worldflags/ht.png "width="140px" ></a></div>`)[0];
            popup_4eb1b693e74441549aabdca2a272bb4f.setContent(html_94f07023a4484eab92a46890542f3235);


        marker_c7115d2d021d42aaaaa18641566046ff.bindPopup(popup_4eb1b693e74441549aabdca2a272bb4f)
        ;




            var marker_c65bff7a8b7b45e9a78280e22647adc7 = L.marker(
                [47.162494, 19.503304],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_8d133b7aa3fd4d7390d68538c03d5109 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c65bff7a8b7b45e9a78280e22647adc7.setIcon(icon_8d133b7aa3fd4d7390d68538c03d5109);


        var popup_16e75ad757e2477396b1955c89ef9ef6 = L.popup({"maxWidth": "100%"});


            var html_d400fc1245ed481b81d238d49e49bb94 = $(`<div id="html_d400fc1245ed481b81d238d49e49bb94" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/hu.png">Hungary<img src="http://localhost:8000/flag_resources/img/worldflags/hu.png "width="140px" ></a></div>`)[0];
            popup_16e75ad757e2477396b1955c89ef9ef6.setContent(html_d400fc1245ed481b81d238d49e49bb94);


        marker_c65bff7a8b7b45e9a78280e22647adc7.bindPopup(popup_16e75ad757e2477396b1955c89ef9ef6)
        ;




            var marker_266dea76c7ee47a5a97296722e15d8e8 = L.marker(
                [-0.789275, 113.921327],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_994b3faf82544ff2a5193a3aca00eb75 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_266dea76c7ee47a5a97296722e15d8e8.setIcon(icon_994b3faf82544ff2a5193a3aca00eb75);


        var popup_6501cd24a7034577afd6980931badb47 = L.popup({"maxWidth": "100%"});


            var html_dd81014705b9475db71f4de273e9b4c7 = $(`<div id="html_dd81014705b9475db71f4de273e9b4c7" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/id.png">Indonesia<img src="http://localhost:8000/flag_resources/img/worldflags/id.png "width="140px" ></a></div>`)[0];
            popup_6501cd24a7034577afd6980931badb47.setContent(html_dd81014705b9475db71f4de273e9b4c7);


        marker_266dea76c7ee47a5a97296722e15d8e8.bindPopup(popup_6501cd24a7034577afd6980931badb47)
        ;




            var marker_15954ffaddb841028905d7010ba6b990 = L.marker(
                [53.41291, -8.243889999999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_3a5b2cac3c374de2beb763d7ac81468f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_15954ffaddb841028905d7010ba6b990.setIcon(icon_3a5b2cac3c374de2beb763d7ac81468f);


        var popup_a442fc8b84ea4a34904f47e3be24ba90 = L.popup({"maxWidth": "100%"});


            var html_5b2f8cc98b46486080fd2350801747ab = $(`<div id="html_5b2f8cc98b46486080fd2350801747ab" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ie.png">Ireland<img src="http://localhost:8000/flag_resources/img/worldflags/ie.png "width="140px" ></a></div>`)[0];
            popup_a442fc8b84ea4a34904f47e3be24ba90.setContent(html_5b2f8cc98b46486080fd2350801747ab);


        marker_15954ffaddb841028905d7010ba6b990.bindPopup(popup_a442fc8b84ea4a34904f47e3be24ba90)
        ;




            var marker_7966bdc6f1c74b36bc328dfaa1f2e19d = L.marker(
                [31.046051000000002, 34.851612],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_238e1ccbd97b45b2b8812788c4c6f678 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7966bdc6f1c74b36bc328dfaa1f2e19d.setIcon(icon_238e1ccbd97b45b2b8812788c4c6f678);


        var popup_0795fa7f12e348fd8d63cd3756f8c8f0 = L.popup({"maxWidth": "100%"});


            var html_bc732fffa5304f85802e2cff7ed7eb7a = $(`<div id="html_bc732fffa5304f85802e2cff7ed7eb7a" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/il.png">Israel<img src="http://localhost:8000/flag_resources/img/worldflags/il.png "width="140px" ></a></div>`)[0];
            popup_0795fa7f12e348fd8d63cd3756f8c8f0.setContent(html_bc732fffa5304f85802e2cff7ed7eb7a);


        marker_7966bdc6f1c74b36bc328dfaa1f2e19d.bindPopup(popup_0795fa7f12e348fd8d63cd3756f8c8f0)
        ;




            var marker_b4e46cb157ed496badb6ef5d945fdcb5 = L.marker(
                [54.236107, -4.548056],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b0158042512a434b9709ba30097baeaa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b4e46cb157ed496badb6ef5d945fdcb5.setIcon(icon_b0158042512a434b9709ba30097baeaa);


        var popup_9b26e9269e1a449e88fdd6482868d0b6 = L.popup({"maxWidth": "100%"});


            var html_96cd5ee0d1f94133971f9c4df46e77a3 = $(`<div id="html_96cd5ee0d1f94133971f9c4df46e77a3" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/im.png">Isle of Man<img src="http://localhost:8000/flag_resources/img/worldflags/im.png "width="140px" ></a></div>`)[0];
            popup_9b26e9269e1a449e88fdd6482868d0b6.setContent(html_96cd5ee0d1f94133971f9c4df46e77a3);


        marker_b4e46cb157ed496badb6ef5d945fdcb5.bindPopup(popup_9b26e9269e1a449e88fdd6482868d0b6)
        ;




            var marker_dd6e5492972647a6af6761bc063bd2fb = L.marker(
                [20.593684, 78.96288],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_7eb7627be72441f2bdc0138fce8d13c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dd6e5492972647a6af6761bc063bd2fb.setIcon(icon_7eb7627be72441f2bdc0138fce8d13c7);


        var popup_4e2d0f2cc09e4420a64c73c13d3b742a = L.popup({"maxWidth": "100%"});


            var html_8d7a526ae3334b31adc6a2dcade7439b = $(`<div id="html_8d7a526ae3334b31adc6a2dcade7439b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/in.png">India<img src="http://localhost:8000/flag_resources/img/worldflags/in.png "width="140px" ></a></div>`)[0];
            popup_4e2d0f2cc09e4420a64c73c13d3b742a.setContent(html_8d7a526ae3334b31adc6a2dcade7439b);


        marker_dd6e5492972647a6af6761bc063bd2fb.bindPopup(popup_4e2d0f2cc09e4420a64c73c13d3b742a)
        ;




            var marker_50e8b1c81a9d40a38be8a0f16861d782 = L.marker(
                [-6.343194, 71.87651899999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_89c2de52e9be4a078ab26009a0974ad5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_50e8b1c81a9d40a38be8a0f16861d782.setIcon(icon_89c2de52e9be4a078ab26009a0974ad5);


        var popup_c90289278ca44aaebbfd1b7bf9ae2440 = L.popup({"maxWidth": "100%"});


            var html_d985318e62d24c859d6ac6b7fc2f9732 = $(`<div id="html_d985318e62d24c859d6ac6b7fc2f9732" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/io.png">British Indian Ocean Territory<img src="http://localhost:8000/flag_resources/img/worldflags/io.png "width="140px" ></a></div>`)[0];
            popup_c90289278ca44aaebbfd1b7bf9ae2440.setContent(html_d985318e62d24c859d6ac6b7fc2f9732);


        marker_50e8b1c81a9d40a38be8a0f16861d782.bindPopup(popup_c90289278ca44aaebbfd1b7bf9ae2440)
        ;




            var marker_b5eaa5d9c1c74ac28108a635dd02ccdc = L.marker(
                [33.223191, 43.679291],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_88812196e67840b9b1fc8707508f5b62 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b5eaa5d9c1c74ac28108a635dd02ccdc.setIcon(icon_88812196e67840b9b1fc8707508f5b62);


        var popup_eed6ef6d09b942738482df3a727780ce = L.popup({"maxWidth": "100%"});


            var html_d1f000a7d5584d0993ab8686a91e4a34 = $(`<div id="html_d1f000a7d5584d0993ab8686a91e4a34" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/iq.png">Iraq<img src="http://localhost:8000/flag_resources/img/worldflags/iq.png "width="140px" ></a></div>`)[0];
            popup_eed6ef6d09b942738482df3a727780ce.setContent(html_d1f000a7d5584d0993ab8686a91e4a34);


        marker_b5eaa5d9c1c74ac28108a635dd02ccdc.bindPopup(popup_eed6ef6d09b942738482df3a727780ce)
        ;




            var marker_b6dcd761cca94ce7ae4683a9d93e67ce = L.marker(
                [32.427908, 53.68804599999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_efd97bddfbba4fdaaf6431834a4a0459 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b6dcd761cca94ce7ae4683a9d93e67ce.setIcon(icon_efd97bddfbba4fdaaf6431834a4a0459);


        var popup_0eca59b477224715a538443a580867bb = L.popup({"maxWidth": "100%"});


            var html_8b2cc8db5e63463888a68bb76713bdf8 = $(`<div id="html_8b2cc8db5e63463888a68bb76713bdf8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ir.png">Iran<img src="http://localhost:8000/flag_resources/img/worldflags/ir.png "width="140px" ></a></div>`)[0];
            popup_0eca59b477224715a538443a580867bb.setContent(html_8b2cc8db5e63463888a68bb76713bdf8);


        marker_b6dcd761cca94ce7ae4683a9d93e67ce.bindPopup(popup_0eca59b477224715a538443a580867bb)
        ;




            var marker_aafa5ff7cdac47c485e5ab8571a5c6c3 = L.marker(
                [64.96305100000001, -19.020835],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4a4bcf1b010641e7b4cfba192ae9dc68 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_aafa5ff7cdac47c485e5ab8571a5c6c3.setIcon(icon_4a4bcf1b010641e7b4cfba192ae9dc68);


        var popup_c5e4e8190d79480a8043576b09241d44 = L.popup({"maxWidth": "100%"});


            var html_8c7f3f02a93f49648c74c0bb95e1d2bb = $(`<div id="html_8c7f3f02a93f49648c74c0bb95e1d2bb" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/is.png">Iceland<img src="http://localhost:8000/flag_resources/img/worldflags/is.png "width="140px" ></a></div>`)[0];
            popup_c5e4e8190d79480a8043576b09241d44.setContent(html_8c7f3f02a93f49648c74c0bb95e1d2bb);


        marker_aafa5ff7cdac47c485e5ab8571a5c6c3.bindPopup(popup_c5e4e8190d79480a8043576b09241d44)
        ;




            var marker_3c7c255763d94699b97188e05cbad08e = L.marker(
                [41.87194, 12.56738],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_705d68fff9ed4270937c5b2e932dfb25 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3c7c255763d94699b97188e05cbad08e.setIcon(icon_705d68fff9ed4270937c5b2e932dfb25);


        var popup_ba9df16aaec64e28865ec570c50a4be0 = L.popup({"maxWidth": "100%"});


            var html_40483043b9c742bcadfb8f8958f1f5e4 = $(`<div id="html_40483043b9c742bcadfb8f8958f1f5e4" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/it.png">Italy<img src="http://localhost:8000/flag_resources/img/worldflags/it.png "width="140px" ></a></div>`)[0];
            popup_ba9df16aaec64e28865ec570c50a4be0.setContent(html_40483043b9c742bcadfb8f8958f1f5e4);


        marker_3c7c255763d94699b97188e05cbad08e.bindPopup(popup_ba9df16aaec64e28865ec570c50a4be0)
        ;




            var marker_4a01b578afb34baa8aa014ccdbcd10d5 = L.marker(
                [49.214439, -2.13125],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b8b8d4f770254fe0826ed3a4dd0894d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4a01b578afb34baa8aa014ccdbcd10d5.setIcon(icon_b8b8d4f770254fe0826ed3a4dd0894d4);


        var popup_2ca61e9333cd4fe1b34940654975707f = L.popup({"maxWidth": "100%"});


            var html_a490d1d3a1374878b558f183646a6bbe = $(`<div id="html_a490d1d3a1374878b558f183646a6bbe" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/je.png">Jersey<img src="http://localhost:8000/flag_resources/img/worldflags/je.png "width="140px" ></a></div>`)[0];
            popup_2ca61e9333cd4fe1b34940654975707f.setContent(html_a490d1d3a1374878b558f183646a6bbe);


        marker_4a01b578afb34baa8aa014ccdbcd10d5.bindPopup(popup_2ca61e9333cd4fe1b34940654975707f)
        ;




            var marker_717fab789d9d4f47b4cde1a1800a0e47 = L.marker(
                [18.109581, -77.297508],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_76532ae3aebb45f18644e7120b7fba48 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_717fab789d9d4f47b4cde1a1800a0e47.setIcon(icon_76532ae3aebb45f18644e7120b7fba48);


        var popup_44bf9b35c8454ed9ab52817db47dab3f = L.popup({"maxWidth": "100%"});


            var html_2de10059a23c478ebd62d32151f0a6ef = $(`<div id="html_2de10059a23c478ebd62d32151f0a6ef" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/jm.png">Jamaica<img src="http://localhost:8000/flag_resources/img/worldflags/jm.png "width="140px" ></a></div>`)[0];
            popup_44bf9b35c8454ed9ab52817db47dab3f.setContent(html_2de10059a23c478ebd62d32151f0a6ef);


        marker_717fab789d9d4f47b4cde1a1800a0e47.bindPopup(popup_44bf9b35c8454ed9ab52817db47dab3f)
        ;




            var marker_02fd476266014ab38ff07f2ca4d8b4fb = L.marker(
                [30.585164000000002, 36.238414],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_137bf5d586a142fdb3f5042539c51ed2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_02fd476266014ab38ff07f2ca4d8b4fb.setIcon(icon_137bf5d586a142fdb3f5042539c51ed2);


        var popup_7af065846c59455090dacfee16dd1447 = L.popup({"maxWidth": "100%"});


            var html_816808f9412a46548b2d0d735873ae4f = $(`<div id="html_816808f9412a46548b2d0d735873ae4f" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/jo.png">Jordan<img src="http://localhost:8000/flag_resources/img/worldflags/jo.png "width="140px" ></a></div>`)[0];
            popup_7af065846c59455090dacfee16dd1447.setContent(html_816808f9412a46548b2d0d735873ae4f);


        marker_02fd476266014ab38ff07f2ca4d8b4fb.bindPopup(popup_7af065846c59455090dacfee16dd1447)
        ;




            var marker_4d294004b4d943ed82571e7c8eeb17f4 = L.marker(
                [36.204824, 138.252924],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_83a95ac4c96645a698ca26aea11ad445 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4d294004b4d943ed82571e7c8eeb17f4.setIcon(icon_83a95ac4c96645a698ca26aea11ad445);


        var popup_633ebaba7d3a446c8e0fae9842828620 = L.popup({"maxWidth": "100%"});


            var html_5d651c7741f744a3a132fde860edd487 = $(`<div id="html_5d651c7741f744a3a132fde860edd487" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/jp.png">Japan<img src="http://localhost:8000/flag_resources/img/worldflags/jp.png "width="140px" ></a></div>`)[0];
            popup_633ebaba7d3a446c8e0fae9842828620.setContent(html_5d651c7741f744a3a132fde860edd487);


        marker_4d294004b4d943ed82571e7c8eeb17f4.bindPopup(popup_633ebaba7d3a446c8e0fae9842828620)
        ;




            var marker_26a2ce9054b34418b196f5c8c487a8a6 = L.marker(
                [-0.023559, 37.906193],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_09aa8d8af80a4d9c9e9831b9e808e4d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_26a2ce9054b34418b196f5c8c487a8a6.setIcon(icon_09aa8d8af80a4d9c9e9831b9e808e4d1);


        var popup_2a0cf64099ea423fa45e1549a42c4a5d = L.popup({"maxWidth": "100%"});


            var html_2688e70681794908bba66bb391c8e6e2 = $(`<div id="html_2688e70681794908bba66bb391c8e6e2" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ke.png">Kenya<img src="http://localhost:8000/flag_resources/img/worldflags/ke.png "width="140px" ></a></div>`)[0];
            popup_2a0cf64099ea423fa45e1549a42c4a5d.setContent(html_2688e70681794908bba66bb391c8e6e2);


        marker_26a2ce9054b34418b196f5c8c487a8a6.bindPopup(popup_2a0cf64099ea423fa45e1549a42c4a5d)
        ;




            var marker_81282daf82a242b1828b45c155d84151 = L.marker(
                [41.20438, 74.766098],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_65f398ae994347ef8da325034a428736 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_81282daf82a242b1828b45c155d84151.setIcon(icon_65f398ae994347ef8da325034a428736);


        var popup_313264bb110d447eb1f1c9193700b53b = L.popup({"maxWidth": "100%"});


            var html_a6709daf92164b6ca0b16593a096db78 = $(`<div id="html_a6709daf92164b6ca0b16593a096db78" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/kg.png">Kyrgyzstan<img src="http://localhost:8000/flag_resources/img/worldflags/kg.png "width="140px" ></a></div>`)[0];
            popup_313264bb110d447eb1f1c9193700b53b.setContent(html_a6709daf92164b6ca0b16593a096db78);


        marker_81282daf82a242b1828b45c155d84151.bindPopup(popup_313264bb110d447eb1f1c9193700b53b)
        ;




            var marker_b767fd4561524fe8b1deb86f015a9cb3 = L.marker(
                [12.565679, 104.990963],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_343e55f699fa4423b03e483f967eadfa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b767fd4561524fe8b1deb86f015a9cb3.setIcon(icon_343e55f699fa4423b03e483f967eadfa);


        var popup_b47613a77f23405195ece8e5b08cf660 = L.popup({"maxWidth": "100%"});


            var html_7929d8416c5d42afbdd142121cc93c71 = $(`<div id="html_7929d8416c5d42afbdd142121cc93c71" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/kh.png">Cambodia<img src="http://localhost:8000/flag_resources/img/worldflags/kh.png "width="140px" ></a></div>`)[0];
            popup_b47613a77f23405195ece8e5b08cf660.setContent(html_7929d8416c5d42afbdd142121cc93c71);


        marker_b767fd4561524fe8b1deb86f015a9cb3.bindPopup(popup_b47613a77f23405195ece8e5b08cf660)
        ;




            var marker_7be35e6d72e14d9aa4bc164e38f85833 = L.marker(
                [-3.3704169999999998, -168.734039],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_88a38e20ff8045f48b94655677a45930 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7be35e6d72e14d9aa4bc164e38f85833.setIcon(icon_88a38e20ff8045f48b94655677a45930);


        var popup_7459fd9060ff472f8ead5f4c9a167529 = L.popup({"maxWidth": "100%"});


            var html_52b08e387b9a4bb29f946c90a39b04a1 = $(`<div id="html_52b08e387b9a4bb29f946c90a39b04a1" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ki.png">Kiribati<img src="http://localhost:8000/flag_resources/img/worldflags/ki.png "width="140px" ></a></div>`)[0];
            popup_7459fd9060ff472f8ead5f4c9a167529.setContent(html_52b08e387b9a4bb29f946c90a39b04a1);


        marker_7be35e6d72e14d9aa4bc164e38f85833.bindPopup(popup_7459fd9060ff472f8ead5f4c9a167529)
        ;




            var marker_104b5dd7cd4c4b5cb4160b3b47116697 = L.marker(
                [-11.875001, 43.872219],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_3251db93704046fbabcc1be9853f3ac5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_104b5dd7cd4c4b5cb4160b3b47116697.setIcon(icon_3251db93704046fbabcc1be9853f3ac5);


        var popup_2a2b8b8c58ed4ae0ba013f9e44046c3e = L.popup({"maxWidth": "100%"});


            var html_ab9a4525420e42dc90cdb77ee22d1e12 = $(`<div id="html_ab9a4525420e42dc90cdb77ee22d1e12" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/km.png">Comoros<img src="http://localhost:8000/flag_resources/img/worldflags/km.png "width="140px" ></a></div>`)[0];
            popup_2a2b8b8c58ed4ae0ba013f9e44046c3e.setContent(html_ab9a4525420e42dc90cdb77ee22d1e12);


        marker_104b5dd7cd4c4b5cb4160b3b47116697.bindPopup(popup_2a2b8b8c58ed4ae0ba013f9e44046c3e)
        ;




            var marker_8f8329c6af4d402692e0dceebfc9f0a6 = L.marker(
                [17.357822, -62.782998],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_56932681e7a34162919d40dfb7df2ef1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8f8329c6af4d402692e0dceebfc9f0a6.setIcon(icon_56932681e7a34162919d40dfb7df2ef1);


        var popup_543d8e86f3ce4a15abbfb7c112e4c204 = L.popup({"maxWidth": "100%"});


            var html_8f2fb7a3fb414b16ac1fceb74c8491e1 = $(`<div id="html_8f2fb7a3fb414b16ac1fceb74c8491e1" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/kn.png">Saint Kitts and Nevis<img src="http://localhost:8000/flag_resources/img/worldflags/kn.png "width="140px" ></a></div>`)[0];
            popup_543d8e86f3ce4a15abbfb7c112e4c204.setContent(html_8f2fb7a3fb414b16ac1fceb74c8491e1);


        marker_8f8329c6af4d402692e0dceebfc9f0a6.bindPopup(popup_543d8e86f3ce4a15abbfb7c112e4c204)
        ;




            var marker_1a8c8a67942e48888bc9b44e1232c9e1 = L.marker(
                [40.339852, 127.510093],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_02d7b1fb1e784f4ba9b7c576716da0d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1a8c8a67942e48888bc9b44e1232c9e1.setIcon(icon_02d7b1fb1e784f4ba9b7c576716da0d5);


        var popup_10aee5d203b14885b4a2cb1db0f1d2ff = L.popup({"maxWidth": "100%"});


            var html_e47f468649b049d982cb69d055a5bb67 = $(`<div id="html_e47f468649b049d982cb69d055a5bb67" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/kp.png">North Korea<img src="http://localhost:8000/flag_resources/img/worldflags/kp.png "width="140px" ></a></div>`)[0];
            popup_10aee5d203b14885b4a2cb1db0f1d2ff.setContent(html_e47f468649b049d982cb69d055a5bb67);


        marker_1a8c8a67942e48888bc9b44e1232c9e1.bindPopup(popup_10aee5d203b14885b4a2cb1db0f1d2ff)
        ;




            var marker_18a3342008734fd4bc067434e1fe4d5f = L.marker(
                [35.907757000000004, 127.766922],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5186203bd5144095b162916be151aa3f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_18a3342008734fd4bc067434e1fe4d5f.setIcon(icon_5186203bd5144095b162916be151aa3f);


        var popup_b8ad25618a7a4e0e8a961777bd213937 = L.popup({"maxWidth": "100%"});


            var html_bcb7b0f5ed19429199c14e3956cde973 = $(`<div id="html_bcb7b0f5ed19429199c14e3956cde973" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/kr.png">South Korea<img src="http://localhost:8000/flag_resources/img/worldflags/kr.png "width="140px" ></a></div>`)[0];
            popup_b8ad25618a7a4e0e8a961777bd213937.setContent(html_bcb7b0f5ed19429199c14e3956cde973);


        marker_18a3342008734fd4bc067434e1fe4d5f.bindPopup(popup_b8ad25618a7a4e0e8a961777bd213937)
        ;




            var marker_b0a625ee36004106b5cc937dcf380409 = L.marker(
                [29.311659999999996, 47.481766],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_6756bb04ea6f4e84b603e49fab6d8c57 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b0a625ee36004106b5cc937dcf380409.setIcon(icon_6756bb04ea6f4e84b603e49fab6d8c57);


        var popup_2abdf43ddff84c87ba651b97a8c30f61 = L.popup({"maxWidth": "100%"});


            var html_cada14dca69742749ecd5d0e632a12da = $(`<div id="html_cada14dca69742749ecd5d0e632a12da" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/kw.png">Kuwait<img src="http://localhost:8000/flag_resources/img/worldflags/kw.png "width="140px" ></a></div>`)[0];
            popup_2abdf43ddff84c87ba651b97a8c30f61.setContent(html_cada14dca69742749ecd5d0e632a12da);


        marker_b0a625ee36004106b5cc937dcf380409.bindPopup(popup_2abdf43ddff84c87ba651b97a8c30f61)
        ;




            var marker_d6b5b3ef0a64484ab3dc8248511b9529 = L.marker(
                [19.513469, -80.566956],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_f6895de97d164f4c96163514eb38ca3e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d6b5b3ef0a64484ab3dc8248511b9529.setIcon(icon_f6895de97d164f4c96163514eb38ca3e);


        var popup_03697d4746594b76b505c6f01ac6a81e = L.popup({"maxWidth": "100%"});


            var html_e284f311f675429ea5d9e9015e713493 = $(`<div id="html_e284f311f675429ea5d9e9015e713493" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ky.png">Cayman Islands<img src="http://localhost:8000/flag_resources/img/worldflags/ky.png "width="140px" ></a></div>`)[0];
            popup_03697d4746594b76b505c6f01ac6a81e.setContent(html_e284f311f675429ea5d9e9015e713493);


        marker_d6b5b3ef0a64484ab3dc8248511b9529.bindPopup(popup_03697d4746594b76b505c6f01ac6a81e)
        ;




            var marker_289ced588a6149f4bc1a577cab3eb546 = L.marker(
                [48.019573, 66.923684],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_1b6911560fcb4dfc952287d37b99a5e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_289ced588a6149f4bc1a577cab3eb546.setIcon(icon_1b6911560fcb4dfc952287d37b99a5e9);


        var popup_fd2d6908af804bdd97e7678053b3ac7e = L.popup({"maxWidth": "100%"});


            var html_aff53ae39f394ffda50bb2f05b0ad313 = $(`<div id="html_aff53ae39f394ffda50bb2f05b0ad313" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/kz.png">Kazakhstan<img src="http://localhost:8000/flag_resources/img/worldflags/kz.png "width="140px" ></a></div>`)[0];
            popup_fd2d6908af804bdd97e7678053b3ac7e.setContent(html_aff53ae39f394ffda50bb2f05b0ad313);


        marker_289ced588a6149f4bc1a577cab3eb546.bindPopup(popup_fd2d6908af804bdd97e7678053b3ac7e)
        ;




            var marker_3cd73d1a3c4c48d3ab417f4b9da609de = L.marker(
                [19.856270000000002, 102.495496],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_09432c704da849c7867a5cbbb663007e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3cd73d1a3c4c48d3ab417f4b9da609de.setIcon(icon_09432c704da849c7867a5cbbb663007e);


        var popup_597c878a6e884a3ebace50e6195218bb = L.popup({"maxWidth": "100%"});


            var html_d3e60b1cf2fc42b68947ed34bd977bf1 = $(`<div id="html_d3e60b1cf2fc42b68947ed34bd977bf1" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/la.png">Laos<img src="http://localhost:8000/flag_resources/img/worldflags/la.png "width="140px" ></a></div>`)[0];
            popup_597c878a6e884a3ebace50e6195218bb.setContent(html_d3e60b1cf2fc42b68947ed34bd977bf1);


        marker_3cd73d1a3c4c48d3ab417f4b9da609de.bindPopup(popup_597c878a6e884a3ebace50e6195218bb)
        ;




            var marker_530c2751e12b4bb0887f2eaeb5d2ddd1 = L.marker(
                [33.854721000000005, 35.862285],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_81020ec84de84ba6a63e2a6b116cf7d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_530c2751e12b4bb0887f2eaeb5d2ddd1.setIcon(icon_81020ec84de84ba6a63e2a6b116cf7d9);


        var popup_248b04b0ab0040e39ac6adddc2865dd3 = L.popup({"maxWidth": "100%"});


            var html_ad2edaa3d7454b22a546a1118cbd2571 = $(`<div id="html_ad2edaa3d7454b22a546a1118cbd2571" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/lb.png">Lebanon<img src="http://localhost:8000/flag_resources/img/worldflags/lb.png "width="140px" ></a></div>`)[0];
            popup_248b04b0ab0040e39ac6adddc2865dd3.setContent(html_ad2edaa3d7454b22a546a1118cbd2571);


        marker_530c2751e12b4bb0887f2eaeb5d2ddd1.bindPopup(popup_248b04b0ab0040e39ac6adddc2865dd3)
        ;




            var marker_53ee139895e1425bbb26269f0290e528 = L.marker(
                [13.909444, -60.97889300000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_8641925fc15545059c3dc9f97b24485a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_53ee139895e1425bbb26269f0290e528.setIcon(icon_8641925fc15545059c3dc9f97b24485a);


        var popup_6831442dfbea4de09de30d9d9ec464b7 = L.popup({"maxWidth": "100%"});


            var html_1eb697a03c584c5ea4c31d4adf0d824b = $(`<div id="html_1eb697a03c584c5ea4c31d4adf0d824b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/lc.png">Saint Lucia<img src="http://localhost:8000/flag_resources/img/worldflags/lc.png "width="140px" ></a></div>`)[0];
            popup_6831442dfbea4de09de30d9d9ec464b7.setContent(html_1eb697a03c584c5ea4c31d4adf0d824b);


        marker_53ee139895e1425bbb26269f0290e528.bindPopup(popup_6831442dfbea4de09de30d9d9ec464b7)
        ;




            var marker_236238df346846b89c1bdeed109a66bd = L.marker(
                [47.166000000000004, 9.555373],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_70698842297045e1b15a4c306c49c4e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_236238df346846b89c1bdeed109a66bd.setIcon(icon_70698842297045e1b15a4c306c49c4e7);


        var popup_86d82bb68b1c4c6a83d9f245f2ad17fb = L.popup({"maxWidth": "100%"});


            var html_4e83ade69cac4b4eacab735d80c57277 = $(`<div id="html_4e83ade69cac4b4eacab735d80c57277" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/li.png">Liechtenstein<img src="http://localhost:8000/flag_resources/img/worldflags/li.png "width="140px" ></a></div>`)[0];
            popup_86d82bb68b1c4c6a83d9f245f2ad17fb.setContent(html_4e83ade69cac4b4eacab735d80c57277);


        marker_236238df346846b89c1bdeed109a66bd.bindPopup(popup_86d82bb68b1c4c6a83d9f245f2ad17fb)
        ;




            var marker_b2e239655c9e4234ac04dec26b5d1017 = L.marker(
                [7.873054, 80.77179699999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_e24259915afb44558139ad14f3bd100c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b2e239655c9e4234ac04dec26b5d1017.setIcon(icon_e24259915afb44558139ad14f3bd100c);


        var popup_08c9ad2816f84ad5b533238c2cf8f499 = L.popup({"maxWidth": "100%"});


            var html_4e1a9d3047b249f4b531a8392492c14c = $(`<div id="html_4e1a9d3047b249f4b531a8392492c14c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/lk.png">Sri Lanka<img src="http://localhost:8000/flag_resources/img/worldflags/lk.png "width="140px" ></a></div>`)[0];
            popup_08c9ad2816f84ad5b533238c2cf8f499.setContent(html_4e1a9d3047b249f4b531a8392492c14c);


        marker_b2e239655c9e4234ac04dec26b5d1017.bindPopup(popup_08c9ad2816f84ad5b533238c2cf8f499)
        ;




            var marker_a7ddaf72f1374aeeab69e23b5dddda11 = L.marker(
                [6.4280550000000005, -9.429499],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a3690af99c6a44079eebdeea283bb5a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a7ddaf72f1374aeeab69e23b5dddda11.setIcon(icon_a3690af99c6a44079eebdeea283bb5a5);


        var popup_1f6467e91678413f8472a20f70595e04 = L.popup({"maxWidth": "100%"});


            var html_c24a7df6684b4dcd94b33c95803aa85c = $(`<div id="html_c24a7df6684b4dcd94b33c95803aa85c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/lr.png">Liberia<img src="http://localhost:8000/flag_resources/img/worldflags/lr.png "width="140px" ></a></div>`)[0];
            popup_1f6467e91678413f8472a20f70595e04.setContent(html_c24a7df6684b4dcd94b33c95803aa85c);


        marker_a7ddaf72f1374aeeab69e23b5dddda11.bindPopup(popup_1f6467e91678413f8472a20f70595e04)
        ;




            var marker_cb2b8e9995324d73abd2882fe7231f44 = L.marker(
                [-29.609988, 28.233608],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_3afef7edc995495791201e21e951606c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cb2b8e9995324d73abd2882fe7231f44.setIcon(icon_3afef7edc995495791201e21e951606c);


        var popup_937f7fa28fa6425783b4096e5edca457 = L.popup({"maxWidth": "100%"});


            var html_a9dcd11010e945c48962afd3f2402e34 = $(`<div id="html_a9dcd11010e945c48962afd3f2402e34" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ls.png">Lesotho<img src="http://localhost:8000/flag_resources/img/worldflags/ls.png "width="140px" ></a></div>`)[0];
            popup_937f7fa28fa6425783b4096e5edca457.setContent(html_a9dcd11010e945c48962afd3f2402e34);


        marker_cb2b8e9995324d73abd2882fe7231f44.bindPopup(popup_937f7fa28fa6425783b4096e5edca457)
        ;




            var marker_6937c0084ac4420083affb24f0d691a0 = L.marker(
                [55.169438, 23.881275],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_94d72cd2507b489db79c0d8370f8463f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6937c0084ac4420083affb24f0d691a0.setIcon(icon_94d72cd2507b489db79c0d8370f8463f);


        var popup_a3851eba0bab4a528edebb772e351a57 = L.popup({"maxWidth": "100%"});


            var html_a8c8acbd06a84df4bb4c62bd6a6bdc97 = $(`<div id="html_a8c8acbd06a84df4bb4c62bd6a6bdc97" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/lt.png">Lithuania<img src="http://localhost:8000/flag_resources/img/worldflags/lt.png "width="140px" ></a></div>`)[0];
            popup_a3851eba0bab4a528edebb772e351a57.setContent(html_a8c8acbd06a84df4bb4c62bd6a6bdc97);


        marker_6937c0084ac4420083affb24f0d691a0.bindPopup(popup_a3851eba0bab4a528edebb772e351a57)
        ;




            var marker_8d69a120933e4e20809c26f6e26e919c = L.marker(
                [49.815273, 6.129583],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_c6cfc8c65ea94373a91ea9099d5ad2cc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8d69a120933e4e20809c26f6e26e919c.setIcon(icon_c6cfc8c65ea94373a91ea9099d5ad2cc);


        var popup_fbeaf266b03347e18fac621088cfb9ea = L.popup({"maxWidth": "100%"});


            var html_505b578096384fe2a81ad5fdd3b03bb8 = $(`<div id="html_505b578096384fe2a81ad5fdd3b03bb8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/lu.png">Luxembourg<img src="http://localhost:8000/flag_resources/img/worldflags/lu.png "width="140px" ></a></div>`)[0];
            popup_fbeaf266b03347e18fac621088cfb9ea.setContent(html_505b578096384fe2a81ad5fdd3b03bb8);


        marker_8d69a120933e4e20809c26f6e26e919c.bindPopup(popup_fbeaf266b03347e18fac621088cfb9ea)
        ;




            var marker_a68b5622c2f249e7b77e63bbf5f4acf1 = L.marker(
                [56.879635, 24.603189],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_086a358c26f342a79cbb56fabc07139f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a68b5622c2f249e7b77e63bbf5f4acf1.setIcon(icon_086a358c26f342a79cbb56fabc07139f);


        var popup_16edf74f561644289c299325d4aa7130 = L.popup({"maxWidth": "100%"});


            var html_544652febbe6489d9c09f1b688a0bac8 = $(`<div id="html_544652febbe6489d9c09f1b688a0bac8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/lv.png">Latvia<img src="http://localhost:8000/flag_resources/img/worldflags/lv.png "width="140px" ></a></div>`)[0];
            popup_16edf74f561644289c299325d4aa7130.setContent(html_544652febbe6489d9c09f1b688a0bac8);


        marker_a68b5622c2f249e7b77e63bbf5f4acf1.bindPopup(popup_16edf74f561644289c299325d4aa7130)
        ;




            var marker_5a2a993e057f47b7a6c64f95b9dcb530 = L.marker(
                [26.3351, 17.228331],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a0541f740302458ba8e00d0d9684f171 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5a2a993e057f47b7a6c64f95b9dcb530.setIcon(icon_a0541f740302458ba8e00d0d9684f171);


        var popup_8dda500473f84d7f8a4caee63b928cbf = L.popup({"maxWidth": "100%"});


            var html_b56bc195b5214ef8b9931c9ad1d9e129 = $(`<div id="html_b56bc195b5214ef8b9931c9ad1d9e129" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ly.png">Libya<img src="http://localhost:8000/flag_resources/img/worldflags/ly.png "width="140px" ></a></div>`)[0];
            popup_8dda500473f84d7f8a4caee63b928cbf.setContent(html_b56bc195b5214ef8b9931c9ad1d9e129);


        marker_5a2a993e057f47b7a6c64f95b9dcb530.bindPopup(popup_8dda500473f84d7f8a4caee63b928cbf)
        ;




            var marker_7297c23ba5ea499f91c3d57cdf05b23a = L.marker(
                [31.791702, -7.09262],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_effe21047078484b90469ed97e2d1ca6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7297c23ba5ea499f91c3d57cdf05b23a.setIcon(icon_effe21047078484b90469ed97e2d1ca6);


        var popup_75cfc1a2a0794435bc43f14beecc5441 = L.popup({"maxWidth": "100%"});


            var html_35b3ca87847c4b01ad4895658b5185d6 = $(`<div id="html_35b3ca87847c4b01ad4895658b5185d6" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ma.png">Morocco<img src="http://localhost:8000/flag_resources/img/worldflags/ma.png "width="140px" ></a></div>`)[0];
            popup_75cfc1a2a0794435bc43f14beecc5441.setContent(html_35b3ca87847c4b01ad4895658b5185d6);


        marker_7297c23ba5ea499f91c3d57cdf05b23a.bindPopup(popup_75cfc1a2a0794435bc43f14beecc5441)
        ;




            var marker_350b5958f3254dbfad3a9261915f665c = L.marker(
                [43.750298, 7.412841],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d24be3df88b34083bfc42081c989b90f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_350b5958f3254dbfad3a9261915f665c.setIcon(icon_d24be3df88b34083bfc42081c989b90f);


        var popup_c134a0fccc0c498bbde6e72de082505e = L.popup({"maxWidth": "100%"});


            var html_e6f9ac2270a1496caa0d9c1bd17637cf = $(`<div id="html_e6f9ac2270a1496caa0d9c1bd17637cf" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mc.png">Monaco<img src="http://localhost:8000/flag_resources/img/worldflags/mc.png "width="140px" ></a></div>`)[0];
            popup_c134a0fccc0c498bbde6e72de082505e.setContent(html_e6f9ac2270a1496caa0d9c1bd17637cf);


        marker_350b5958f3254dbfad3a9261915f665c.bindPopup(popup_c134a0fccc0c498bbde6e72de082505e)
        ;




            var marker_b2b1048a2aa34f5784ea2e78870217bc = L.marker(
                [47.411631, 28.369884999999996],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_56fc57e79fe840e1996c698ded7a5d75 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b2b1048a2aa34f5784ea2e78870217bc.setIcon(icon_56fc57e79fe840e1996c698ded7a5d75);


        var popup_e06f7250c66a456abe2ccbac62d93c7e = L.popup({"maxWidth": "100%"});


            var html_de360d8105cd44799ea1fbbc79386e3c = $(`<div id="html_de360d8105cd44799ea1fbbc79386e3c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/md.png">Moldova<img src="http://localhost:8000/flag_resources/img/worldflags/md.png "width="140px" ></a></div>`)[0];
            popup_e06f7250c66a456abe2ccbac62d93c7e.setContent(html_de360d8105cd44799ea1fbbc79386e3c);


        marker_b2b1048a2aa34f5784ea2e78870217bc.bindPopup(popup_e06f7250c66a456abe2ccbac62d93c7e)
        ;




            var marker_6ee4498dc8b04ba988d8d0f6b66861f4 = L.marker(
                [42.708678000000006, 19.37439],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_e3a5f429fc474c73b4b72c4c7cacaa9c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6ee4498dc8b04ba988d8d0f6b66861f4.setIcon(icon_e3a5f429fc474c73b4b72c4c7cacaa9c);


        var popup_52d051f798a74ea4812b322eefac8158 = L.popup({"maxWidth": "100%"});


            var html_37e4e01d7ee34072bf75b0f46886223d = $(`<div id="html_37e4e01d7ee34072bf75b0f46886223d" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/me.png">Montenegro<img src="http://localhost:8000/flag_resources/img/worldflags/me.png "width="140px" ></a></div>`)[0];
            popup_52d051f798a74ea4812b322eefac8158.setContent(html_37e4e01d7ee34072bf75b0f46886223d);


        marker_6ee4498dc8b04ba988d8d0f6b66861f4.bindPopup(popup_52d051f798a74ea4812b322eefac8158)
        ;




            var marker_2e47c55b60f145eb88fb1972e0036713 = L.marker(
                [-18.766947000000002, 46.869107],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_6f3e007bf52f413e8440ca479caced04 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2e47c55b60f145eb88fb1972e0036713.setIcon(icon_6f3e007bf52f413e8440ca479caced04);


        var popup_27a022d4ab2e4ad18787661512238ab8 = L.popup({"maxWidth": "100%"});


            var html_7d3284ebb29a44f08fab5eb35893763d = $(`<div id="html_7d3284ebb29a44f08fab5eb35893763d" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mg.png">Madagascar<img src="http://localhost:8000/flag_resources/img/worldflags/mg.png "width="140px" ></a></div>`)[0];
            popup_27a022d4ab2e4ad18787661512238ab8.setContent(html_7d3284ebb29a44f08fab5eb35893763d);


        marker_2e47c55b60f145eb88fb1972e0036713.bindPopup(popup_27a022d4ab2e4ad18787661512238ab8)
        ;




            var marker_d63d16eb2fdd424987a93ed0f8cf7926 = L.marker(
                [7.131474000000001, 171.184478],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d9ebba8efe784df4916b1c45ae1d44b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d63d16eb2fdd424987a93ed0f8cf7926.setIcon(icon_d9ebba8efe784df4916b1c45ae1d44b3);


        var popup_d211b164201247caa1cb232a3a8629d6 = L.popup({"maxWidth": "100%"});


            var html_374b685d328e4dbd966517085f38f039 = $(`<div id="html_374b685d328e4dbd966517085f38f039" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mh.png">Marshall Islands<img src="http://localhost:8000/flag_resources/img/worldflags/mh.png "width="140px" ></a></div>`)[0];
            popup_d211b164201247caa1cb232a3a8629d6.setContent(html_374b685d328e4dbd966517085f38f039);


        marker_d63d16eb2fdd424987a93ed0f8cf7926.bindPopup(popup_d211b164201247caa1cb232a3a8629d6)
        ;




            var marker_a0a33453c3dc4edd914dc35ba5f1741a = L.marker(
                [41.608635, 21.745275],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_6562f797f41a4e1b9c85882fc220f3e2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a0a33453c3dc4edd914dc35ba5f1741a.setIcon(icon_6562f797f41a4e1b9c85882fc220f3e2);


        var popup_e28a1d6eab3a4c109bbca1f14a161d07 = L.popup({"maxWidth": "100%"});


            var html_1a0ea6a74138435a83d11e2923c43732 = $(`<div id="html_1a0ea6a74138435a83d11e2923c43732" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mk.png">Macedonia [FYROM]<img src="http://localhost:8000/flag_resources/img/worldflags/mk.png "width="140px" ></a></div>`)[0];
            popup_e28a1d6eab3a4c109bbca1f14a161d07.setContent(html_1a0ea6a74138435a83d11e2923c43732);


        marker_a0a33453c3dc4edd914dc35ba5f1741a.bindPopup(popup_e28a1d6eab3a4c109bbca1f14a161d07)
        ;




            var marker_bd342fe387574cbfbca5a252e21658e5 = L.marker(
                [17.570692, -3.9961660000000006],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_ea7f2f9efb4144ea85acacbad221c12a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bd342fe387574cbfbca5a252e21658e5.setIcon(icon_ea7f2f9efb4144ea85acacbad221c12a);


        var popup_4ea0e8a21cc24655ae364e29557a70fc = L.popup({"maxWidth": "100%"});


            var html_b85af4d8826c4a43922dbdbba1134727 = $(`<div id="html_b85af4d8826c4a43922dbdbba1134727" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ml.png">Mali<img src="http://localhost:8000/flag_resources/img/worldflags/ml.png "width="140px" ></a></div>`)[0];
            popup_4ea0e8a21cc24655ae364e29557a70fc.setContent(html_b85af4d8826c4a43922dbdbba1134727);


        marker_bd342fe387574cbfbca5a252e21658e5.bindPopup(popup_4ea0e8a21cc24655ae364e29557a70fc)
        ;




            var marker_e012dd43536d4e48ad725466fb998bd0 = L.marker(
                [21.913965, 95.956223],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_c5e616fae3d14ec190cee5b9f9e86a43 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e012dd43536d4e48ad725466fb998bd0.setIcon(icon_c5e616fae3d14ec190cee5b9f9e86a43);


        var popup_e67b27f4b84e4cf9862b484806bdd9ed = L.popup({"maxWidth": "100%"});


            var html_ac461cd0932146a98c568db62ffb3275 = $(`<div id="html_ac461cd0932146a98c568db62ffb3275" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mm.png">Myanmar [Burma]<img src="http://localhost:8000/flag_resources/img/worldflags/mm.png "width="140px" ></a></div>`)[0];
            popup_e67b27f4b84e4cf9862b484806bdd9ed.setContent(html_ac461cd0932146a98c568db62ffb3275);


        marker_e012dd43536d4e48ad725466fb998bd0.bindPopup(popup_e67b27f4b84e4cf9862b484806bdd9ed)
        ;




            var marker_69f3f7920fb448fa8f352fd8db468d99 = L.marker(
                [46.862496, 103.84665600000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_be8303ba30b94770b8f0bf7498446dee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_69f3f7920fb448fa8f352fd8db468d99.setIcon(icon_be8303ba30b94770b8f0bf7498446dee);


        var popup_9b018c116f6a4ae392901ddd37169d73 = L.popup({"maxWidth": "100%"});


            var html_ca1cde3f14d1457d88108145272ca110 = $(`<div id="html_ca1cde3f14d1457d88108145272ca110" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mn.png">Mongolia<img src="http://localhost:8000/flag_resources/img/worldflags/mn.png "width="140px" ></a></div>`)[0];
            popup_9b018c116f6a4ae392901ddd37169d73.setContent(html_ca1cde3f14d1457d88108145272ca110);


        marker_69f3f7920fb448fa8f352fd8db468d99.bindPopup(popup_9b018c116f6a4ae392901ddd37169d73)
        ;




            var marker_8915236c1aec4c528d1ef36e43089069 = L.marker(
                [22.198745000000002, 113.543873],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4123354626de41dba54bced8c8525ffb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8915236c1aec4c528d1ef36e43089069.setIcon(icon_4123354626de41dba54bced8c8525ffb);


        var popup_9c22fdb2b0c04ff584af775122bf2264 = L.popup({"maxWidth": "100%"});


            var html_663540678f924d6c81fc2f8adfe6c466 = $(`<div id="html_663540678f924d6c81fc2f8adfe6c466" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mo.png">Macau<img src="http://localhost:8000/flag_resources/img/worldflags/mo.png "width="140px" ></a></div>`)[0];
            popup_9c22fdb2b0c04ff584af775122bf2264.setContent(html_663540678f924d6c81fc2f8adfe6c466);


        marker_8915236c1aec4c528d1ef36e43089069.bindPopup(popup_9c22fdb2b0c04ff584af775122bf2264)
        ;




            var marker_4693700c067b4a379021238a477d9d28 = L.marker(
                [17.33083, 145.38468999999998],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_944539e034234faaaa5108bd5def55f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4693700c067b4a379021238a477d9d28.setIcon(icon_944539e034234faaaa5108bd5def55f3);


        var popup_dc89460feaf74723aeaeabdccb268c8a = L.popup({"maxWidth": "100%"});


            var html_85d7c179a7054a51999756aef62629e8 = $(`<div id="html_85d7c179a7054a51999756aef62629e8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mp.png">Northern Mariana Islands<img src="http://localhost:8000/flag_resources/img/worldflags/mp.png "width="140px" ></a></div>`)[0];
            popup_dc89460feaf74723aeaeabdccb268c8a.setContent(html_85d7c179a7054a51999756aef62629e8);


        marker_4693700c067b4a379021238a477d9d28.bindPopup(popup_dc89460feaf74723aeaeabdccb268c8a)
        ;




            var marker_363f4dacef5247fd97152a0fbdf08ad4 = L.marker(
                [14.641528, -61.024174],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_dd04ffa62e6a4617b4c397c682f22155 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_363f4dacef5247fd97152a0fbdf08ad4.setIcon(icon_dd04ffa62e6a4617b4c397c682f22155);


        var popup_8c590f427c024882a734e82fb2a23364 = L.popup({"maxWidth": "100%"});


            var html_78fbff09b0564f3b948fc2771c421339 = $(`<div id="html_78fbff09b0564f3b948fc2771c421339" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mq.png">Martinique<img src="http://localhost:8000/flag_resources/img/worldflags/mq.png "width="140px" ></a></div>`)[0];
            popup_8c590f427c024882a734e82fb2a23364.setContent(html_78fbff09b0564f3b948fc2771c421339);


        marker_363f4dacef5247fd97152a0fbdf08ad4.bindPopup(popup_8c590f427c024882a734e82fb2a23364)
        ;




            var marker_d957e4d70f47490a8386b2513866f251 = L.marker(
                [21.00789, -10.940835],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0b906e65417048f6a662abd6ccfcda1e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d957e4d70f47490a8386b2513866f251.setIcon(icon_0b906e65417048f6a662abd6ccfcda1e);


        var popup_dab161184dfe41e097ef5aef1170b3c8 = L.popup({"maxWidth": "100%"});


            var html_ff5831cd83324904a6cfdc462a004117 = $(`<div id="html_ff5831cd83324904a6cfdc462a004117" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mr.png">Mauritania<img src="http://localhost:8000/flag_resources/img/worldflags/mr.png "width="140px" ></a></div>`)[0];
            popup_dab161184dfe41e097ef5aef1170b3c8.setContent(html_ff5831cd83324904a6cfdc462a004117);


        marker_d957e4d70f47490a8386b2513866f251.bindPopup(popup_dab161184dfe41e097ef5aef1170b3c8)
        ;




            var marker_07093e424a8048dda37b5c74b5614939 = L.marker(
                [16.742498, -62.187366000000004],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_e5d277d6455f486b9b304f3e508a3938 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_07093e424a8048dda37b5c74b5614939.setIcon(icon_e5d277d6455f486b9b304f3e508a3938);


        var popup_6f95c051fe50483ca0495b1f376e7958 = L.popup({"maxWidth": "100%"});


            var html_0cb2e5bd6975435e878f8f39d482f82e = $(`<div id="html_0cb2e5bd6975435e878f8f39d482f82e" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ms.png">Montserrat<img src="http://localhost:8000/flag_resources/img/worldflags/ms.png "width="140px" ></a></div>`)[0];
            popup_6f95c051fe50483ca0495b1f376e7958.setContent(html_0cb2e5bd6975435e878f8f39d482f82e);


        marker_07093e424a8048dda37b5c74b5614939.bindPopup(popup_6f95c051fe50483ca0495b1f376e7958)
        ;




            var marker_416e438a4b1c432d8b1ec78ff22fe941 = L.marker(
                [35.937496, 14.375416],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d07b741b86084def8bbbcea9bd5db0be = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_416e438a4b1c432d8b1ec78ff22fe941.setIcon(icon_d07b741b86084def8bbbcea9bd5db0be);


        var popup_4b3004c9c0c34038abef0a4bf2d5a00a = L.popup({"maxWidth": "100%"});


            var html_19924588d6d4493f91cb4461560d7c58 = $(`<div id="html_19924588d6d4493f91cb4461560d7c58" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mt.png">Malta<img src="http://localhost:8000/flag_resources/img/worldflags/mt.png "width="140px" ></a></div>`)[0];
            popup_4b3004c9c0c34038abef0a4bf2d5a00a.setContent(html_19924588d6d4493f91cb4461560d7c58);


        marker_416e438a4b1c432d8b1ec78ff22fe941.bindPopup(popup_4b3004c9c0c34038abef0a4bf2d5a00a)
        ;




            var marker_f848c8b669764e1a938059f8ba6d41b4 = L.marker(
                [-20.348404000000002, 57.552152],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_e76d34e0b5f64f5db0b36181e5a8caee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f848c8b669764e1a938059f8ba6d41b4.setIcon(icon_e76d34e0b5f64f5db0b36181e5a8caee);


        var popup_b54e09cbd96b460bbda8258ccb2bae7c = L.popup({"maxWidth": "100%"});


            var html_c946c7be691a44efb8de8092dee2b78c = $(`<div id="html_c946c7be691a44efb8de8092dee2b78c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mu.png">Mauritius<img src="http://localhost:8000/flag_resources/img/worldflags/mu.png "width="140px" ></a></div>`)[0];
            popup_b54e09cbd96b460bbda8258ccb2bae7c.setContent(html_c946c7be691a44efb8de8092dee2b78c);


        marker_f848c8b669764e1a938059f8ba6d41b4.bindPopup(popup_b54e09cbd96b460bbda8258ccb2bae7c)
        ;




            var marker_d24fdf97fc754a968ef25e29f0d8c83b = L.marker(
                [3.202778, 73.22068],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_9301b9a16d2d4d3c8e043876a9a6dd6b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d24fdf97fc754a968ef25e29f0d8c83b.setIcon(icon_9301b9a16d2d4d3c8e043876a9a6dd6b);


        var popup_c4d560319ee54c3b9a2e1db146252c96 = L.popup({"maxWidth": "100%"});


            var html_b4c92782345247e08bd8aa1dc30fa696 = $(`<div id="html_b4c92782345247e08bd8aa1dc30fa696" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mv.png">Maldives<img src="http://localhost:8000/flag_resources/img/worldflags/mv.png "width="140px" ></a></div>`)[0];
            popup_c4d560319ee54c3b9a2e1db146252c96.setContent(html_b4c92782345247e08bd8aa1dc30fa696);


        marker_d24fdf97fc754a968ef25e29f0d8c83b.bindPopup(popup_c4d560319ee54c3b9a2e1db146252c96)
        ;




            var marker_05d631954dc64d9e8898fde73630921a = L.marker(
                [-13.254307999999998, 34.301525],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0926e10f4053485caf08294754795d18 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_05d631954dc64d9e8898fde73630921a.setIcon(icon_0926e10f4053485caf08294754795d18);


        var popup_a4a6090958c643dcb82be27018dc5a59 = L.popup({"maxWidth": "100%"});


            var html_6b801ffb5e404dd8a5d56ef09f7276f7 = $(`<div id="html_6b801ffb5e404dd8a5d56ef09f7276f7" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mw.png">Malawi<img src="http://localhost:8000/flag_resources/img/worldflags/mw.png "width="140px" ></a></div>`)[0];
            popup_a4a6090958c643dcb82be27018dc5a59.setContent(html_6b801ffb5e404dd8a5d56ef09f7276f7);


        marker_05d631954dc64d9e8898fde73630921a.bindPopup(popup_a4a6090958c643dcb82be27018dc5a59)
        ;




            var marker_e9392c83f6404c088330152f14c6502d = L.marker(
                [23.634501, -102.552784],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_ad04e3f04ccb4cd4b0c0fcb84a12b7b1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e9392c83f6404c088330152f14c6502d.setIcon(icon_ad04e3f04ccb4cd4b0c0fcb84a12b7b1);


        var popup_42f2475495e54225b5e5c536b4e104f2 = L.popup({"maxWidth": "100%"});


            var html_13fe2793cc034fbc9d9c4ab28479b276 = $(`<div id="html_13fe2793cc034fbc9d9c4ab28479b276" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mx.png">Mexico<img src="http://localhost:8000/flag_resources/img/worldflags/mx.png "width="140px" ></a></div>`)[0];
            popup_42f2475495e54225b5e5c536b4e104f2.setContent(html_13fe2793cc034fbc9d9c4ab28479b276);


        marker_e9392c83f6404c088330152f14c6502d.bindPopup(popup_42f2475495e54225b5e5c536b4e104f2)
        ;




            var marker_4ddbf39e0ab8428e82e17c8ca766e52a = L.marker(
                [4.210483999999999, 101.97576600000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_fcb0a3d8813843c4b70ea63162b9e134 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4ddbf39e0ab8428e82e17c8ca766e52a.setIcon(icon_fcb0a3d8813843c4b70ea63162b9e134);


        var popup_21252da7a20a465880302cfa5773dfa1 = L.popup({"maxWidth": "100%"});


            var html_24858f75bdfd4457bec81af2b90e841b = $(`<div id="html_24858f75bdfd4457bec81af2b90e841b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/my.png">Malaysia<img src="http://localhost:8000/flag_resources/img/worldflags/my.png "width="140px" ></a></div>`)[0];
            popup_21252da7a20a465880302cfa5773dfa1.setContent(html_24858f75bdfd4457bec81af2b90e841b);


        marker_4ddbf39e0ab8428e82e17c8ca766e52a.bindPopup(popup_21252da7a20a465880302cfa5773dfa1)
        ;




            var marker_d66fd3e857a142f1a047544dac541796 = L.marker(
                [-18.665695, 35.529562],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_83d2d3f0b32d413e9f8db3c08ea3e126 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d66fd3e857a142f1a047544dac541796.setIcon(icon_83d2d3f0b32d413e9f8db3c08ea3e126);


        var popup_5b4f5603b4ca4164ba65623887dc2450 = L.popup({"maxWidth": "100%"});


            var html_f597a7c9b2084f6aa57f2a08507e8575 = $(`<div id="html_f597a7c9b2084f6aa57f2a08507e8575" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/mz.png">Mozambique<img src="http://localhost:8000/flag_resources/img/worldflags/mz.png "width="140px" ></a></div>`)[0];
            popup_5b4f5603b4ca4164ba65623887dc2450.setContent(html_f597a7c9b2084f6aa57f2a08507e8575);


        marker_d66fd3e857a142f1a047544dac541796.bindPopup(popup_5b4f5603b4ca4164ba65623887dc2450)
        ;




            var marker_a9003c9bfa90442397931287515bd874 = L.marker(
                [-22.957639999999998, 18.49041],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_162e3188d0504ad18c07be31769941ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a9003c9bfa90442397931287515bd874.setIcon(icon_162e3188d0504ad18c07be31769941ae);


        var popup_224a4ba704bc450198303d7cd65a02be = L.popup({"maxWidth": "100%"});


            var html_c461d8f2b1d349e8b51f19aa621d98e1 = $(`<div id="html_c461d8f2b1d349e8b51f19aa621d98e1" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/na.png">Namibia<img src="http://localhost:8000/flag_resources/img/worldflags/na.png "width="140px" ></a></div>`)[0];
            popup_224a4ba704bc450198303d7cd65a02be.setContent(html_c461d8f2b1d349e8b51f19aa621d98e1);


        marker_a9003c9bfa90442397931287515bd874.bindPopup(popup_224a4ba704bc450198303d7cd65a02be)
        ;




            var marker_1d9c203b1c8044bba5208f3de20d7154 = L.marker(
                [-20.904304999999997, 165.618042],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_64ecb8f5720c48f19c22449c25884310 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1d9c203b1c8044bba5208f3de20d7154.setIcon(icon_64ecb8f5720c48f19c22449c25884310);


        var popup_1b59912d0d604e01ba2bf15bb2b547d3 = L.popup({"maxWidth": "100%"});


            var html_b3534786ae25494684593cb4eb5c46a8 = $(`<div id="html_b3534786ae25494684593cb4eb5c46a8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/nc.png">New Caledonia<img src="http://localhost:8000/flag_resources/img/worldflags/nc.png "width="140px" ></a></div>`)[0];
            popup_1b59912d0d604e01ba2bf15bb2b547d3.setContent(html_b3534786ae25494684593cb4eb5c46a8);


        marker_1d9c203b1c8044bba5208f3de20d7154.bindPopup(popup_1b59912d0d604e01ba2bf15bb2b547d3)
        ;




            var marker_a567fcd579ba403c82a57f5ad186a179 = L.marker(
                [17.607789, 8.081666],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_9e24a1d96be640fb8b713b26bc034036 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a567fcd579ba403c82a57f5ad186a179.setIcon(icon_9e24a1d96be640fb8b713b26bc034036);


        var popup_90d7bc2d323c44bcadd6c85e73d46029 = L.popup({"maxWidth": "100%"});


            var html_61ed3dcaf65a4767ab16dba2f2b642ff = $(`<div id="html_61ed3dcaf65a4767ab16dba2f2b642ff" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ne.png">Niger<img src="http://localhost:8000/flag_resources/img/worldflags/ne.png "width="140px" ></a></div>`)[0];
            popup_90d7bc2d323c44bcadd6c85e73d46029.setContent(html_61ed3dcaf65a4767ab16dba2f2b642ff);


        marker_a567fcd579ba403c82a57f5ad186a179.bindPopup(popup_90d7bc2d323c44bcadd6c85e73d46029)
        ;




            var marker_816f8aa2d43542e5ad5fbd2985c5e89f = L.marker(
                [-29.040834999999998, 167.954712],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_317f12b75fa74e0e8994b31e60e53196 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_816f8aa2d43542e5ad5fbd2985c5e89f.setIcon(icon_317f12b75fa74e0e8994b31e60e53196);


        var popup_7d29fdee160c4290bf9b5361390e308a = L.popup({"maxWidth": "100%"});


            var html_dce6f01689854d8c9770e254161ba1e3 = $(`<div id="html_dce6f01689854d8c9770e254161ba1e3" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/nf.png">Norfolk Island<img src="http://localhost:8000/flag_resources/img/worldflags/nf.png "width="140px" ></a></div>`)[0];
            popup_7d29fdee160c4290bf9b5361390e308a.setContent(html_dce6f01689854d8c9770e254161ba1e3);


        marker_816f8aa2d43542e5ad5fbd2985c5e89f.bindPopup(popup_7d29fdee160c4290bf9b5361390e308a)
        ;




            var marker_18346fcfafcf47638c1efb4712e66d7f = L.marker(
                [9.081999, 8.675277000000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_6b8996903a684c018320b2d924f3b92b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_18346fcfafcf47638c1efb4712e66d7f.setIcon(icon_6b8996903a684c018320b2d924f3b92b);


        var popup_300f4ba4d7a843408a6144cf6da0a25b = L.popup({"maxWidth": "100%"});


            var html_32e5c4c7fa5446389861f2a8328c46b3 = $(`<div id="html_32e5c4c7fa5446389861f2a8328c46b3" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ng.png">Nigeria<img src="http://localhost:8000/flag_resources/img/worldflags/ng.png "width="140px" ></a></div>`)[0];
            popup_300f4ba4d7a843408a6144cf6da0a25b.setContent(html_32e5c4c7fa5446389861f2a8328c46b3);


        marker_18346fcfafcf47638c1efb4712e66d7f.bindPopup(popup_300f4ba4d7a843408a6144cf6da0a25b)
        ;




            var marker_c9a2d4c317e047ec8a8bf5278edd0f7a = L.marker(
                [12.865416, -85.207229],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_19c2f890361c4daeb70c191ca496c9c6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c9a2d4c317e047ec8a8bf5278edd0f7a.setIcon(icon_19c2f890361c4daeb70c191ca496c9c6);


        var popup_96d04e828b734cb9945ab2632d2440b9 = L.popup({"maxWidth": "100%"});


            var html_fb6fac1a28e34f8696e412a5fbc1927d = $(`<div id="html_fb6fac1a28e34f8696e412a5fbc1927d" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ni.png">Nicaragua<img src="http://localhost:8000/flag_resources/img/worldflags/ni.png "width="140px" ></a></div>`)[0];
            popup_96d04e828b734cb9945ab2632d2440b9.setContent(html_fb6fac1a28e34f8696e412a5fbc1927d);


        marker_c9a2d4c317e047ec8a8bf5278edd0f7a.bindPopup(popup_96d04e828b734cb9945ab2632d2440b9)
        ;




            var marker_e71940ec9f14461fb5cb497a2cdb4b66 = L.marker(
                [52.132633, 5.291266],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_35257409727f473e83e44befa440f9b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e71940ec9f14461fb5cb497a2cdb4b66.setIcon(icon_35257409727f473e83e44befa440f9b3);


        var popup_c087d4858fb04d42b3bd2cd87f71b65e = L.popup({"maxWidth": "100%"});


            var html_16139e84f6754a89abf4dd23df782d22 = $(`<div id="html_16139e84f6754a89abf4dd23df782d22" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/nl.png">Netherlands<img src="http://localhost:8000/flag_resources/img/worldflags/nl.png "width="140px" ></a></div>`)[0];
            popup_c087d4858fb04d42b3bd2cd87f71b65e.setContent(html_16139e84f6754a89abf4dd23df782d22);


        marker_e71940ec9f14461fb5cb497a2cdb4b66.bindPopup(popup_c087d4858fb04d42b3bd2cd87f71b65e)
        ;




            var marker_61205c2b3e9046c384847bca9553e475 = L.marker(
                [60.472024, 8.468946],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_97e2d7ee5a6e4804858efd6719cf1d02 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_61205c2b3e9046c384847bca9553e475.setIcon(icon_97e2d7ee5a6e4804858efd6719cf1d02);


        var popup_59a4f52cef98463fbb98d13eac048dcf = L.popup({"maxWidth": "100%"});


            var html_aef60748b0db4bb3b8574dddb7f616c9 = $(`<div id="html_aef60748b0db4bb3b8574dddb7f616c9" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/no.png">Norway<img src="http://localhost:8000/flag_resources/img/worldflags/no.png "width="140px" ></a></div>`)[0];
            popup_59a4f52cef98463fbb98d13eac048dcf.setContent(html_aef60748b0db4bb3b8574dddb7f616c9);


        marker_61205c2b3e9046c384847bca9553e475.bindPopup(popup_59a4f52cef98463fbb98d13eac048dcf)
        ;




            var marker_5b81050fa2e24a6b95a583bbe46a365a = L.marker(
                [28.394857000000002, 84.12400799999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_19fbc7a14ecd447e86ef187c3ce95986 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5b81050fa2e24a6b95a583bbe46a365a.setIcon(icon_19fbc7a14ecd447e86ef187c3ce95986);


        var popup_6187877766154b21a5fe0e52f2d73e00 = L.popup({"maxWidth": "100%"});


            var html_1be4164ed5b74c869aae5bbf128fed84 = $(`<div id="html_1be4164ed5b74c869aae5bbf128fed84" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/np.png">Nepal<img src="http://localhost:8000/flag_resources/img/worldflags/np.png "width="140px" ></a></div>`)[0];
            popup_6187877766154b21a5fe0e52f2d73e00.setContent(html_1be4164ed5b74c869aae5bbf128fed84);


        marker_5b81050fa2e24a6b95a583bbe46a365a.bindPopup(popup_6187877766154b21a5fe0e52f2d73e00)
        ;




            var marker_8de54e6dc8c54924bccc624c31915211 = L.marker(
                [-0.522778, 166.931503],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b2375b593ed44f50872bfa825adefc19 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8de54e6dc8c54924bccc624c31915211.setIcon(icon_b2375b593ed44f50872bfa825adefc19);


        var popup_436d35e04a1b4b8680f5b189df8b28ea = L.popup({"maxWidth": "100%"});


            var html_01d7533e8e784b958baddde1a8af8add = $(`<div id="html_01d7533e8e784b958baddde1a8af8add" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/nr.png">Nauru<img src="http://localhost:8000/flag_resources/img/worldflags/nr.png "width="140px" ></a></div>`)[0];
            popup_436d35e04a1b4b8680f5b189df8b28ea.setContent(html_01d7533e8e784b958baddde1a8af8add);


        marker_8de54e6dc8c54924bccc624c31915211.bindPopup(popup_436d35e04a1b4b8680f5b189df8b28ea)
        ;




            var marker_ee1b37bb1bd042e38bd05c9d669c974f = L.marker(
                [-19.054445, -169.867233],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_896d13b992184ae394e93e3474d2a436 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ee1b37bb1bd042e38bd05c9d669c974f.setIcon(icon_896d13b992184ae394e93e3474d2a436);


        var popup_2bc52f7618c8464b86327091a8c437d0 = L.popup({"maxWidth": "100%"});


            var html_cb70cbd4625144b4ad591ea501cc2857 = $(`<div id="html_cb70cbd4625144b4ad591ea501cc2857" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/nu.png">Niue<img src="http://localhost:8000/flag_resources/img/worldflags/nu.png "width="140px" ></a></div>`)[0];
            popup_2bc52f7618c8464b86327091a8c437d0.setContent(html_cb70cbd4625144b4ad591ea501cc2857);


        marker_ee1b37bb1bd042e38bd05c9d669c974f.bindPopup(popup_2bc52f7618c8464b86327091a8c437d0)
        ;




            var marker_5501863496ab43c1bd7a612d34c36995 = L.marker(
                [-40.900557, 174.88597099999998],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_fac01350e4084915867fab8edff96491 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5501863496ab43c1bd7a612d34c36995.setIcon(icon_fac01350e4084915867fab8edff96491);


        var popup_f8735536c00d4798b6fda9902db49f45 = L.popup({"maxWidth": "100%"});


            var html_54fa1868e41540db9a1523119dbe4a74 = $(`<div id="html_54fa1868e41540db9a1523119dbe4a74" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/nz.png">New Zealand<img src="http://localhost:8000/flag_resources/img/worldflags/nz.png "width="140px" ></a></div>`)[0];
            popup_f8735536c00d4798b6fda9902db49f45.setContent(html_54fa1868e41540db9a1523119dbe4a74);


        marker_5501863496ab43c1bd7a612d34c36995.bindPopup(popup_f8735536c00d4798b6fda9902db49f45)
        ;




            var marker_3656cd149aa94a0db4e1df43753b8965 = L.marker(
                [21.512583, 55.923255000000005],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4f2ec0f7fa924b5bb76e25cf50236698 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3656cd149aa94a0db4e1df43753b8965.setIcon(icon_4f2ec0f7fa924b5bb76e25cf50236698);


        var popup_7291d9f97900440b83d75ba7c53b6a9b = L.popup({"maxWidth": "100%"});


            var html_4caa83d9920f4d19a196b6d238e9e6e9 = $(`<div id="html_4caa83d9920f4d19a196b6d238e9e6e9" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/om.png">Oman<img src="http://localhost:8000/flag_resources/img/worldflags/om.png "width="140px" ></a></div>`)[0];
            popup_7291d9f97900440b83d75ba7c53b6a9b.setContent(html_4caa83d9920f4d19a196b6d238e9e6e9);


        marker_3656cd149aa94a0db4e1df43753b8965.bindPopup(popup_7291d9f97900440b83d75ba7c53b6a9b)
        ;




            var marker_0d92eee687eb455e8dd69ba73e11572a = L.marker(
                [8.537981, -80.782127],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4cab5f7db7414d47a6af621406f92762 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0d92eee687eb455e8dd69ba73e11572a.setIcon(icon_4cab5f7db7414d47a6af621406f92762);


        var popup_96ea830f3199482cbd4eb57c7ebfad6e = L.popup({"maxWidth": "100%"});


            var html_1834574e04864bbeb1ba8dfe2ff8f8b5 = $(`<div id="html_1834574e04864bbeb1ba8dfe2ff8f8b5" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pa.png">Panama<img src="http://localhost:8000/flag_resources/img/worldflags/pa.png "width="140px" ></a></div>`)[0];
            popup_96ea830f3199482cbd4eb57c7ebfad6e.setContent(html_1834574e04864bbeb1ba8dfe2ff8f8b5);


        marker_0d92eee687eb455e8dd69ba73e11572a.bindPopup(popup_96ea830f3199482cbd4eb57c7ebfad6e)
        ;




            var marker_eea3aa82db2446db8b8d1c812fce347f = L.marker(
                [-9.189967, -75.015152],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_404fb8fcafbb4437bdf44f493ba89367 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_eea3aa82db2446db8b8d1c812fce347f.setIcon(icon_404fb8fcafbb4437bdf44f493ba89367);


        var popup_ec7ebd8f0f7441d39e6da2c2174ee422 = L.popup({"maxWidth": "100%"});


            var html_fd5c7ab4be02442d85e59c264ab30e0f = $(`<div id="html_fd5c7ab4be02442d85e59c264ab30e0f" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pe.png">Peru<img src="http://localhost:8000/flag_resources/img/worldflags/pe.png "width="140px" ></a></div>`)[0];
            popup_ec7ebd8f0f7441d39e6da2c2174ee422.setContent(html_fd5c7ab4be02442d85e59c264ab30e0f);


        marker_eea3aa82db2446db8b8d1c812fce347f.bindPopup(popup_ec7ebd8f0f7441d39e6da2c2174ee422)
        ;




            var marker_d05b1724cb1143499a5e60a74a080255 = L.marker(
                [-17.679742, -149.40684299999998],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2ab950c488ce48059a5b71f94c947a7a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d05b1724cb1143499a5e60a74a080255.setIcon(icon_2ab950c488ce48059a5b71f94c947a7a);


        var popup_52aa7aea6178439ab7b7cb01ad3cbc9d = L.popup({"maxWidth": "100%"});


            var html_92b9f63eec734de0a8194a7108b4ec7b = $(`<div id="html_92b9f63eec734de0a8194a7108b4ec7b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pf.png">French Polynesia<img src="http://localhost:8000/flag_resources/img/worldflags/pf.png "width="140px" ></a></div>`)[0];
            popup_52aa7aea6178439ab7b7cb01ad3cbc9d.setContent(html_92b9f63eec734de0a8194a7108b4ec7b);


        marker_d05b1724cb1143499a5e60a74a080255.bindPopup(popup_52aa7aea6178439ab7b7cb01ad3cbc9d)
        ;




            var marker_4b270a09d4ec4835bc86e41e8b30259d = L.marker(
                [-6.314993, 143.95555],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_afe6773d7d6e499594469e9088688758 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4b270a09d4ec4835bc86e41e8b30259d.setIcon(icon_afe6773d7d6e499594469e9088688758);


        var popup_c8eb42fed0404bfdb23a8ddfc012fde3 = L.popup({"maxWidth": "100%"});


            var html_321de3f83d7a4aaaa50766bfb24b004f = $(`<div id="html_321de3f83d7a4aaaa50766bfb24b004f" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pg.png">Papua New Guinea<img src="http://localhost:8000/flag_resources/img/worldflags/pg.png "width="140px" ></a></div>`)[0];
            popup_c8eb42fed0404bfdb23a8ddfc012fde3.setContent(html_321de3f83d7a4aaaa50766bfb24b004f);


        marker_4b270a09d4ec4835bc86e41e8b30259d.bindPopup(popup_c8eb42fed0404bfdb23a8ddfc012fde3)
        ;




            var marker_7403e06ae3504086bb52249984adbb34 = L.marker(
                [12.879721, 121.77401699999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b3c12ebf0822499eb8eec3a3388569c1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7403e06ae3504086bb52249984adbb34.setIcon(icon_b3c12ebf0822499eb8eec3a3388569c1);


        var popup_b5f8b8aaef92470f8b40a80d53b141b5 = L.popup({"maxWidth": "100%"});


            var html_6d4c8d742b7240a086a9290b468e74ea = $(`<div id="html_6d4c8d742b7240a086a9290b468e74ea" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ph.png">Philippines<img src="http://localhost:8000/flag_resources/img/worldflags/ph.png "width="140px" ></a></div>`)[0];
            popup_b5f8b8aaef92470f8b40a80d53b141b5.setContent(html_6d4c8d742b7240a086a9290b468e74ea);


        marker_7403e06ae3504086bb52249984adbb34.bindPopup(popup_b5f8b8aaef92470f8b40a80d53b141b5)
        ;




            var marker_bc1018ee95cd4354aa69a1992b6b627b = L.marker(
                [30.375321000000003, 69.345116],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b917e03eea9c4cadb4b6a5f405a363c1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bc1018ee95cd4354aa69a1992b6b627b.setIcon(icon_b917e03eea9c4cadb4b6a5f405a363c1);


        var popup_b0497a588cd24bfa8b1b5272e270eeac = L.popup({"maxWidth": "100%"});


            var html_55f56b3412b44ea596cd0ecd88a2b208 = $(`<div id="html_55f56b3412b44ea596cd0ecd88a2b208" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pk.png">Pakistan<img src="http://localhost:8000/flag_resources/img/worldflags/pk.png "width="140px" ></a></div>`)[0];
            popup_b0497a588cd24bfa8b1b5272e270eeac.setContent(html_55f56b3412b44ea596cd0ecd88a2b208);


        marker_bc1018ee95cd4354aa69a1992b6b627b.bindPopup(popup_b0497a588cd24bfa8b1b5272e270eeac)
        ;




            var marker_5b01687023b644778036d8fbc3e53245 = L.marker(
                [51.919438, 19.145135999999997],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a044643a0be347bf85ce2afd9f34201d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5b01687023b644778036d8fbc3e53245.setIcon(icon_a044643a0be347bf85ce2afd9f34201d);


        var popup_e89c8c0c76ea43c280fe52e0e0a50ce3 = L.popup({"maxWidth": "100%"});


            var html_9dcdaa7ffd1a4392a0bd5a48d4a6eec6 = $(`<div id="html_9dcdaa7ffd1a4392a0bd5a48d4a6eec6" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pl.png">Poland<img src="http://localhost:8000/flag_resources/img/worldflags/pl.png "width="140px" ></a></div>`)[0];
            popup_e89c8c0c76ea43c280fe52e0e0a50ce3.setContent(html_9dcdaa7ffd1a4392a0bd5a48d4a6eec6);


        marker_5b01687023b644778036d8fbc3e53245.bindPopup(popup_e89c8c0c76ea43c280fe52e0e0a50ce3)
        ;




            var marker_fed6f4e362044ec489c99bb3b450c11e = L.marker(
                [46.941936, -56.27111],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_e68c6d713ba9436fbbdca4aa488ef518 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fed6f4e362044ec489c99bb3b450c11e.setIcon(icon_e68c6d713ba9436fbbdca4aa488ef518);


        var popup_27b9d696cdae4105b9504c8884ba8325 = L.popup({"maxWidth": "100%"});


            var html_aa19c56477f741689cf61f84506c8892 = $(`<div id="html_aa19c56477f741689cf61f84506c8892" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pm.png">Saint Pierre and Miquelon<img src="http://localhost:8000/flag_resources/img/worldflags/pm.png "width="140px" ></a></div>`)[0];
            popup_27b9d696cdae4105b9504c8884ba8325.setContent(html_aa19c56477f741689cf61f84506c8892);


        marker_fed6f4e362044ec489c99bb3b450c11e.bindPopup(popup_27b9d696cdae4105b9504c8884ba8325)
        ;




            var marker_fc6b8ace3d9d4d379f4d8e678942a917 = L.marker(
                [-24.703615, -127.43930800000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_bd386f34d6a54a8c837b144a7a2b0d62 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fc6b8ace3d9d4d379f4d8e678942a917.setIcon(icon_bd386f34d6a54a8c837b144a7a2b0d62);


        var popup_aae1965f7b7149c6ae42d736044c2dcf = L.popup({"maxWidth": "100%"});


            var html_b455afbcdf48443d8c40f56064842acf = $(`<div id="html_b455afbcdf48443d8c40f56064842acf" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pn.png">Pitcairn Islands<img src="http://localhost:8000/flag_resources/img/worldflags/pn.png "width="140px" ></a></div>`)[0];
            popup_aae1965f7b7149c6ae42d736044c2dcf.setContent(html_b455afbcdf48443d8c40f56064842acf);


        marker_fc6b8ace3d9d4d379f4d8e678942a917.bindPopup(popup_aae1965f7b7149c6ae42d736044c2dcf)
        ;




            var marker_7afa176926c3429f8a09b59206f80d73 = L.marker(
                [18.220833, -66.590149],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_dd413447b905401e918f2e1847c3f0e6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7afa176926c3429f8a09b59206f80d73.setIcon(icon_dd413447b905401e918f2e1847c3f0e6);


        var popup_6fa25918c4fe4a0392afdc92ec8d1f4f = L.popup({"maxWidth": "100%"});


            var html_ac109925f32f41c88bd540612b7dd936 = $(`<div id="html_ac109925f32f41c88bd540612b7dd936" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pr.png">Puerto Rico<img src="http://localhost:8000/flag_resources/img/worldflags/pr.png "width="140px" ></a></div>`)[0];
            popup_6fa25918c4fe4a0392afdc92ec8d1f4f.setContent(html_ac109925f32f41c88bd540612b7dd936);


        marker_7afa176926c3429f8a09b59206f80d73.bindPopup(popup_6fa25918c4fe4a0392afdc92ec8d1f4f)
        ;




            var marker_dc711aca433f4f868aa2bfbcb75ad8f8 = L.marker(
                [31.952162, 35.233154],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_f74e2fe01ce64b05b6e1924963c6af77 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dc711aca433f4f868aa2bfbcb75ad8f8.setIcon(icon_f74e2fe01ce64b05b6e1924963c6af77);


        var popup_13d74a9a6aeb43d6a55fd6fbdfdd9f88 = L.popup({"maxWidth": "100%"});


            var html_a4d0a25ecfd84c6b84820b1a77a246ca = $(`<div id="html_a4d0a25ecfd84c6b84820b1a77a246ca" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ps.png">Palestinian Territories<img src="http://localhost:8000/flag_resources/img/worldflags/ps.png "width="140px" ></a></div>`)[0];
            popup_13d74a9a6aeb43d6a55fd6fbdfdd9f88.setContent(html_a4d0a25ecfd84c6b84820b1a77a246ca);


        marker_dc711aca433f4f868aa2bfbcb75ad8f8.bindPopup(popup_13d74a9a6aeb43d6a55fd6fbdfdd9f88)
        ;




            var marker_56b37b4ec98b47b2859334e958be4922 = L.marker(
                [39.399871999999995, -8.224454],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_3ba3af02f2da4963a5742d2f688f0f72 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_56b37b4ec98b47b2859334e958be4922.setIcon(icon_3ba3af02f2da4963a5742d2f688f0f72);


        var popup_f6dfd26a6d204e4bbd1652b589472094 = L.popup({"maxWidth": "100%"});


            var html_e9fe9b2e3b114482974b1b40e0377d01 = $(`<div id="html_e9fe9b2e3b114482974b1b40e0377d01" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pt.png">Portugal<img src="http://localhost:8000/flag_resources/img/worldflags/pt.png "width="140px" ></a></div>`)[0];
            popup_f6dfd26a6d204e4bbd1652b589472094.setContent(html_e9fe9b2e3b114482974b1b40e0377d01);


        marker_56b37b4ec98b47b2859334e958be4922.bindPopup(popup_f6dfd26a6d204e4bbd1652b589472094)
        ;




            var marker_ccfc1b727c9e46d382a5ccb8a18854ee = L.marker(
                [7.51498, 134.58252],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_ace175d41b6144688d1fdea1e03e21fe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ccfc1b727c9e46d382a5ccb8a18854ee.setIcon(icon_ace175d41b6144688d1fdea1e03e21fe);


        var popup_e3b81d1239ef42ee8287c60b500558da = L.popup({"maxWidth": "100%"});


            var html_7cb782360e34472797790e3aaaf4afce = $(`<div id="html_7cb782360e34472797790e3aaaf4afce" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/pw.png">Palau<img src="http://localhost:8000/flag_resources/img/worldflags/pw.png "width="140px" ></a></div>`)[0];
            popup_e3b81d1239ef42ee8287c60b500558da.setContent(html_7cb782360e34472797790e3aaaf4afce);


        marker_ccfc1b727c9e46d382a5ccb8a18854ee.bindPopup(popup_e3b81d1239ef42ee8287c60b500558da)
        ;




            var marker_29a9754af03a4f0296055b8cccac57ae = L.marker(
                [-23.442503, -58.44383199999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0b6a8f40145c45a797e1cef2abdce832 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_29a9754af03a4f0296055b8cccac57ae.setIcon(icon_0b6a8f40145c45a797e1cef2abdce832);


        var popup_bf99cc0f64f9465e8e9a2e7b7b00653c = L.popup({"maxWidth": "100%"});


            var html_53b7bbd417b048019e1db1188aec4773 = $(`<div id="html_53b7bbd417b048019e1db1188aec4773" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/py.png">Paraguay<img src="http://localhost:8000/flag_resources/img/worldflags/py.png "width="140px" ></a></div>`)[0];
            popup_bf99cc0f64f9465e8e9a2e7b7b00653c.setContent(html_53b7bbd417b048019e1db1188aec4773);


        marker_29a9754af03a4f0296055b8cccac57ae.bindPopup(popup_bf99cc0f64f9465e8e9a2e7b7b00653c)
        ;




            var marker_3501f902f2a342d7ab8676eb1c9f8c90 = L.marker(
                [25.354826, 51.183884],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2dcac2c6e1bd46d782c503facc91545d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3501f902f2a342d7ab8676eb1c9f8c90.setIcon(icon_2dcac2c6e1bd46d782c503facc91545d);


        var popup_93858d639bf34d77b8851809210b1238 = L.popup({"maxWidth": "100%"});


            var html_566eb87001254efe89ce90dd0295cf4b = $(`<div id="html_566eb87001254efe89ce90dd0295cf4b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/qa.png">Qatar<img src="http://localhost:8000/flag_resources/img/worldflags/qa.png "width="140px" ></a></div>`)[0];
            popup_93858d639bf34d77b8851809210b1238.setContent(html_566eb87001254efe89ce90dd0295cf4b);


        marker_3501f902f2a342d7ab8676eb1c9f8c90.bindPopup(popup_93858d639bf34d77b8851809210b1238)
        ;




            var marker_8ed6a88eb43f4b44ad271bbde593123b = L.marker(
                [-21.115141, 55.536384],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a7cf4c35c83f467ba6af299cef1587c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8ed6a88eb43f4b44ad271bbde593123b.setIcon(icon_a7cf4c35c83f467ba6af299cef1587c7);


        var popup_3a509bdb74dd4ae29f5a1dbe775e5d99 = L.popup({"maxWidth": "100%"});


            var html_8c72ced01368430390024ab78b1e58eb = $(`<div id="html_8c72ced01368430390024ab78b1e58eb" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/re.png">RÃ©union<img src="http://localhost:8000/flag_resources/img/worldflags/re.png "width="140px" ></a></div>`)[0];
            popup_3a509bdb74dd4ae29f5a1dbe775e5d99.setContent(html_8c72ced01368430390024ab78b1e58eb);


        marker_8ed6a88eb43f4b44ad271bbde593123b.bindPopup(popup_3a509bdb74dd4ae29f5a1dbe775e5d99)
        ;




            var marker_fe1f18ea0b384eaa8bc99c91b59d8bc6 = L.marker(
                [45.943160999999996, 24.96676],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_fe26b6b3aa8a4fc6ad4fb689b142be00 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fe1f18ea0b384eaa8bc99c91b59d8bc6.setIcon(icon_fe26b6b3aa8a4fc6ad4fb689b142be00);


        var popup_81247d216a07408db751f6a44c7e56a9 = L.popup({"maxWidth": "100%"});


            var html_04a167285cd541eeadf5d748710d6289 = $(`<div id="html_04a167285cd541eeadf5d748710d6289" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ro.png">Romania<img src="http://localhost:8000/flag_resources/img/worldflags/ro.png "width="140px" ></a></div>`)[0];
            popup_81247d216a07408db751f6a44c7e56a9.setContent(html_04a167285cd541eeadf5d748710d6289);


        marker_fe1f18ea0b384eaa8bc99c91b59d8bc6.bindPopup(popup_81247d216a07408db751f6a44c7e56a9)
        ;




            var marker_977e790a601f4a6fae7245d0d5b70325 = L.marker(
                [44.016521000000004, 21.005859],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5ec442540ddf4f13a0aa9247b052e21a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_977e790a601f4a6fae7245d0d5b70325.setIcon(icon_5ec442540ddf4f13a0aa9247b052e21a);


        var popup_da070e7bc66d40d3ab83d3c93853b1c4 = L.popup({"maxWidth": "100%"});


            var html_6b58b8f3078a4e68ae1b8804802450f8 = $(`<div id="html_6b58b8f3078a4e68ae1b8804802450f8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/rs.png">Serbia<img src="http://localhost:8000/flag_resources/img/worldflags/rs.png "width="140px" ></a></div>`)[0];
            popup_da070e7bc66d40d3ab83d3c93853b1c4.setContent(html_6b58b8f3078a4e68ae1b8804802450f8);


        marker_977e790a601f4a6fae7245d0d5b70325.bindPopup(popup_da070e7bc66d40d3ab83d3c93853b1c4)
        ;




            var marker_61b13fed107a4026b7a351b1d612bd40 = L.marker(
                [61.52401, 105.31875600000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_8929ea2e53bd476f8616f0008ba54f0d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_61b13fed107a4026b7a351b1d612bd40.setIcon(icon_8929ea2e53bd476f8616f0008ba54f0d);


        var popup_d9263cbb4b544d769d03fcb35c51b0bd = L.popup({"maxWidth": "100%"});


            var html_ffd15e8517c049d48645173b8067702c = $(`<div id="html_ffd15e8517c049d48645173b8067702c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ru.png">Russia<img src="http://localhost:8000/flag_resources/img/worldflags/ru.png "width="140px" ></a></div>`)[0];
            popup_d9263cbb4b544d769d03fcb35c51b0bd.setContent(html_ffd15e8517c049d48645173b8067702c);


        marker_61b13fed107a4026b7a351b1d612bd40.bindPopup(popup_d9263cbb4b544d769d03fcb35c51b0bd)
        ;




            var marker_22d4a0ec7cb1463286dd664ab7245e3d = L.marker(
                [-1.940278, 29.873888],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_85234e81fd55409f81d882de328f53d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_22d4a0ec7cb1463286dd664ab7245e3d.setIcon(icon_85234e81fd55409f81d882de328f53d4);


        var popup_d377505c5fa74bfaa162e796c2768d51 = L.popup({"maxWidth": "100%"});


            var html_e4d985bed4034690910e8a5b98bdfcc4 = $(`<div id="html_e4d985bed4034690910e8a5b98bdfcc4" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/rw.png">Rwanda<img src="http://localhost:8000/flag_resources/img/worldflags/rw.png "width="140px" ></a></div>`)[0];
            popup_d377505c5fa74bfaa162e796c2768d51.setContent(html_e4d985bed4034690910e8a5b98bdfcc4);


        marker_22d4a0ec7cb1463286dd664ab7245e3d.bindPopup(popup_d377505c5fa74bfaa162e796c2768d51)
        ;




            var marker_20c3bb4966e94272b0e7c691c37433bb = L.marker(
                [23.885942, 45.079162],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_13602bf58f9d446ebb562354ee8847c9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_20c3bb4966e94272b0e7c691c37433bb.setIcon(icon_13602bf58f9d446ebb562354ee8847c9);


        var popup_178e84ff64564746883b2a0328037bd4 = L.popup({"maxWidth": "100%"});


            var html_0f281fa81c3f4703a09d93e1c76f2cbe = $(`<div id="html_0f281fa81c3f4703a09d93e1c76f2cbe" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sa.png">Saudi Arabia<img src="http://localhost:8000/flag_resources/img/worldflags/sa.png "width="140px" ></a></div>`)[0];
            popup_178e84ff64564746883b2a0328037bd4.setContent(html_0f281fa81c3f4703a09d93e1c76f2cbe);


        marker_20c3bb4966e94272b0e7c691c37433bb.bindPopup(popup_178e84ff64564746883b2a0328037bd4)
        ;




            var marker_7968ebb5c81b4ccfaa3a726c51c1badf = L.marker(
                [-9.645710000000001, 160.156194],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a04eb5f63bb7496eaf06e2daebbd9d3d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7968ebb5c81b4ccfaa3a726c51c1badf.setIcon(icon_a04eb5f63bb7496eaf06e2daebbd9d3d);


        var popup_6fc774580ebf4441b728481e8898cf14 = L.popup({"maxWidth": "100%"});


            var html_2dd2d254beb942bf90f055ef5dce3b01 = $(`<div id="html_2dd2d254beb942bf90f055ef5dce3b01" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sb.png">Solomon Islands<img src="http://localhost:8000/flag_resources/img/worldflags/sb.png "width="140px" ></a></div>`)[0];
            popup_6fc774580ebf4441b728481e8898cf14.setContent(html_2dd2d254beb942bf90f055ef5dce3b01);


        marker_7968ebb5c81b4ccfaa3a726c51c1badf.bindPopup(popup_6fc774580ebf4441b728481e8898cf14)
        ;




            var marker_8ff194975e0d4f05b6b6b7370d04fa2f = L.marker(
                [-4.679574, 55.491977],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b6535b4e9bb14396aacd724083ba053a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8ff194975e0d4f05b6b6b7370d04fa2f.setIcon(icon_b6535b4e9bb14396aacd724083ba053a);


        var popup_93b74103664b46d4973b6ad608e3b147 = L.popup({"maxWidth": "100%"});


            var html_8405c4fd043641d18ee1497ba00f8c23 = $(`<div id="html_8405c4fd043641d18ee1497ba00f8c23" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sc.png">Seychelles<img src="http://localhost:8000/flag_resources/img/worldflags/sc.png "width="140px" ></a></div>`)[0];
            popup_93b74103664b46d4973b6ad608e3b147.setContent(html_8405c4fd043641d18ee1497ba00f8c23);


        marker_8ff194975e0d4f05b6b6b7370d04fa2f.bindPopup(popup_93b74103664b46d4973b6ad608e3b147)
        ;




            var marker_5e5e9f97f88249f8805bb407b94b8e86 = L.marker(
                [12.862807, 30.217636],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b560b7fef7524654bbcd5acbdf4dd3ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5e5e9f97f88249f8805bb407b94b8e86.setIcon(icon_b560b7fef7524654bbcd5acbdf4dd3ee);


        var popup_8fa12b5588c2402ca32d89d6153d184b = L.popup({"maxWidth": "100%"});


            var html_b499bda666c14f199b0cf51fc966e768 = $(`<div id="html_b499bda666c14f199b0cf51fc966e768" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sd.png">Sudan<img src="http://localhost:8000/flag_resources/img/worldflags/sd.png "width="140px" ></a></div>`)[0];
            popup_8fa12b5588c2402ca32d89d6153d184b.setContent(html_b499bda666c14f199b0cf51fc966e768);


        marker_5e5e9f97f88249f8805bb407b94b8e86.bindPopup(popup_8fa12b5588c2402ca32d89d6153d184b)
        ;




            var marker_c3badf9c2d9a448fbd17b78d9e766247 = L.marker(
                [60.128161, 18.643501],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_3668cea09c3b416b9d5a60478ea8f1e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c3badf9c2d9a448fbd17b78d9e766247.setIcon(icon_3668cea09c3b416b9d5a60478ea8f1e9);


        var popup_f259fce4abfb4714ac7f01637dbe465b = L.popup({"maxWidth": "100%"});


            var html_ced24a8a82024e18aaf9ba621b9d6a49 = $(`<div id="html_ced24a8a82024e18aaf9ba621b9d6a49" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/se.png">Sweden<img src="http://localhost:8000/flag_resources/img/worldflags/se.png "width="140px" ></a></div>`)[0];
            popup_f259fce4abfb4714ac7f01637dbe465b.setContent(html_ced24a8a82024e18aaf9ba621b9d6a49);


        marker_c3badf9c2d9a448fbd17b78d9e766247.bindPopup(popup_f259fce4abfb4714ac7f01637dbe465b)
        ;




            var marker_97576467942e4b7cad1426dffba3b42e = L.marker(
                [1.352083, 103.819836],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_76660264a95b4863bc0ee67ad6282f1e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_97576467942e4b7cad1426dffba3b42e.setIcon(icon_76660264a95b4863bc0ee67ad6282f1e);


        var popup_c7f8e5c851a5456e8531ebe6d55e3383 = L.popup({"maxWidth": "100%"});


            var html_000fda0025944547a6c7f22d669b1e61 = $(`<div id="html_000fda0025944547a6c7f22d669b1e61" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sg.png">Singapore<img src="http://localhost:8000/flag_resources/img/worldflags/sg.png "width="140px" ></a></div>`)[0];
            popup_c7f8e5c851a5456e8531ebe6d55e3383.setContent(html_000fda0025944547a6c7f22d669b1e61);


        marker_97576467942e4b7cad1426dffba3b42e.bindPopup(popup_c7f8e5c851a5456e8531ebe6d55e3383)
        ;




            var marker_1ea426b1e18541e6b2af5dbffeb9cc73 = L.marker(
                [-24.143473999999998, -10.030696],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_325be1650358402783618805e56ce20e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1ea426b1e18541e6b2af5dbffeb9cc73.setIcon(icon_325be1650358402783618805e56ce20e);


        var popup_e903a9c54d864c40a1026bf4b606fb6a = L.popup({"maxWidth": "100%"});


            var html_b03fa25e3f3c4396a08da68e4acf6e7c = $(`<div id="html_b03fa25e3f3c4396a08da68e4acf6e7c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sh.png">Saint Helena<img src="http://localhost:8000/flag_resources/img/worldflags/sh.png "width="140px" ></a></div>`)[0];
            popup_e903a9c54d864c40a1026bf4b606fb6a.setContent(html_b03fa25e3f3c4396a08da68e4acf6e7c);


        marker_1ea426b1e18541e6b2af5dbffeb9cc73.bindPopup(popup_e903a9c54d864c40a1026bf4b606fb6a)
        ;




            var marker_6b091b4c4aae478dba3014f7914400dd = L.marker(
                [46.151241, 14.995463],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_1ca06e1aa96e40f3a1f5fe7176f7c687 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6b091b4c4aae478dba3014f7914400dd.setIcon(icon_1ca06e1aa96e40f3a1f5fe7176f7c687);


        var popup_eb0c34305a324028a757153f2321edb0 = L.popup({"maxWidth": "100%"});


            var html_8f8f2236680346cc90bf7d135beb7fbd = $(`<div id="html_8f8f2236680346cc90bf7d135beb7fbd" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/si.png">Slovenia<img src="http://localhost:8000/flag_resources/img/worldflags/si.png "width="140px" ></a></div>`)[0];
            popup_eb0c34305a324028a757153f2321edb0.setContent(html_8f8f2236680346cc90bf7d135beb7fbd);


        marker_6b091b4c4aae478dba3014f7914400dd.bindPopup(popup_eb0c34305a324028a757153f2321edb0)
        ;




            var marker_3f751786604d4c8592eb2691010b8d87 = L.marker(
                [77.553604, 23.670272],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_58a2199b6bed472a96018f708c49c67e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3f751786604d4c8592eb2691010b8d87.setIcon(icon_58a2199b6bed472a96018f708c49c67e);


        var popup_770a76995dba420fa804edcba9bf1188 = L.popup({"maxWidth": "100%"});


            var html_c1e8991e901e4d77a20fd83ac0b99547 = $(`<div id="html_c1e8991e901e4d77a20fd83ac0b99547" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sj.png">Svalbard and Jan Mayen<img src="http://localhost:8000/flag_resources/img/worldflags/sj.png "width="140px" ></a></div>`)[0];
            popup_770a76995dba420fa804edcba9bf1188.setContent(html_c1e8991e901e4d77a20fd83ac0b99547);


        marker_3f751786604d4c8592eb2691010b8d87.bindPopup(popup_770a76995dba420fa804edcba9bf1188)
        ;




            var marker_1dc7bd8a1595434dbf7e8b2dd93a1a48 = L.marker(
                [48.669026, 19.699023999999998],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_b82158e41f5d4d419e8233c116208b95 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1dc7bd8a1595434dbf7e8b2dd93a1a48.setIcon(icon_b82158e41f5d4d419e8233c116208b95);


        var popup_fe421cb279de4b239ccc72064068abac = L.popup({"maxWidth": "100%"});


            var html_8d5da0390b2e46f0b6d6f29d3106882b = $(`<div id="html_8d5da0390b2e46f0b6d6f29d3106882b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sk.png">Slovakia<img src="http://localhost:8000/flag_resources/img/worldflags/sk.png "width="140px" ></a></div>`)[0];
            popup_fe421cb279de4b239ccc72064068abac.setContent(html_8d5da0390b2e46f0b6d6f29d3106882b);


        marker_1dc7bd8a1595434dbf7e8b2dd93a1a48.bindPopup(popup_fe421cb279de4b239ccc72064068abac)
        ;




            var marker_35c42bf122da45a2accdb86583fd6363 = L.marker(
                [8.460555000000001, -11.779889],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_2ecf0e7cc187427d88002296f7b316ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_35c42bf122da45a2accdb86583fd6363.setIcon(icon_2ecf0e7cc187427d88002296f7b316ff);


        var popup_479fd56fbca74a959c693070f6b819bf = L.popup({"maxWidth": "100%"});


            var html_a92be5b1362148b3a2bb090014f8602c = $(`<div id="html_a92be5b1362148b3a2bb090014f8602c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sl.png">Sierra Leone<img src="http://localhost:8000/flag_resources/img/worldflags/sl.png "width="140px" ></a></div>`)[0];
            popup_479fd56fbca74a959c693070f6b819bf.setContent(html_a92be5b1362148b3a2bb090014f8602c);


        marker_35c42bf122da45a2accdb86583fd6363.bindPopup(popup_479fd56fbca74a959c693070f6b819bf)
        ;




            var marker_4f70ba6f45e74b19a7af22de4571e272 = L.marker(
                [43.94236, 12.457777],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_ec23eb8e77f44539b5c286125a790cc5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4f70ba6f45e74b19a7af22de4571e272.setIcon(icon_ec23eb8e77f44539b5c286125a790cc5);


        var popup_3f6199555f6845a88081482083c9ad8e = L.popup({"maxWidth": "100%"});


            var html_c3b8f32fdd6e4232ab11f17c4c1cc4df = $(`<div id="html_c3b8f32fdd6e4232ab11f17c4c1cc4df" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sm.png">San Marino<img src="http://localhost:8000/flag_resources/img/worldflags/sm.png "width="140px" ></a></div>`)[0];
            popup_3f6199555f6845a88081482083c9ad8e.setContent(html_c3b8f32fdd6e4232ab11f17c4c1cc4df);


        marker_4f70ba6f45e74b19a7af22de4571e272.bindPopup(popup_3f6199555f6845a88081482083c9ad8e)
        ;




            var marker_796c0410243c47679954e714e68da2fb = L.marker(
                [14.497401000000002, -14.452361999999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_501ad50d7d0544fb9cf6f0c111087ec1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_796c0410243c47679954e714e68da2fb.setIcon(icon_501ad50d7d0544fb9cf6f0c111087ec1);


        var popup_d71ea86a08d847a694a4131adf6621ed = L.popup({"maxWidth": "100%"});


            var html_8d86ea959e2d44c1837b44d79a21652d = $(`<div id="html_8d86ea959e2d44c1837b44d79a21652d" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sn.png">Senegal<img src="http://localhost:8000/flag_resources/img/worldflags/sn.png "width="140px" ></a></div>`)[0];
            popup_d71ea86a08d847a694a4131adf6621ed.setContent(html_8d86ea959e2d44c1837b44d79a21652d);


        marker_796c0410243c47679954e714e68da2fb.bindPopup(popup_d71ea86a08d847a694a4131adf6621ed)
        ;




            var marker_d7b612968e8e42c897b0ec115a5f6cc3 = L.marker(
                [5.152149, 46.199616],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_3106f58c31f74b28a1c0769c631664b3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d7b612968e8e42c897b0ec115a5f6cc3.setIcon(icon_3106f58c31f74b28a1c0769c631664b3);


        var popup_07bdc9a1eec740118bbdb77ba29b86e3 = L.popup({"maxWidth": "100%"});


            var html_40753f57ea134723a4e784ed9221d650 = $(`<div id="html_40753f57ea134723a4e784ed9221d650" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/so.png">Somalia<img src="http://localhost:8000/flag_resources/img/worldflags/so.png "width="140px" ></a></div>`)[0];
            popup_07bdc9a1eec740118bbdb77ba29b86e3.setContent(html_40753f57ea134723a4e784ed9221d650);


        marker_d7b612968e8e42c897b0ec115a5f6cc3.bindPopup(popup_07bdc9a1eec740118bbdb77ba29b86e3)
        ;




            var marker_3a1007d87eb245f9ba825e1939296111 = L.marker(
                [3.9193050000000005, -56.02778299999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_cf6aac85fb5f41d0a3f33921cf33d694 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3a1007d87eb245f9ba825e1939296111.setIcon(icon_cf6aac85fb5f41d0a3f33921cf33d694);


        var popup_d7e43676f76e4bab9cb2a96d3f59e335 = L.popup({"maxWidth": "100%"});


            var html_da078b61216f4cca9ef273faab031ae6 = $(`<div id="html_da078b61216f4cca9ef273faab031ae6" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sr.png">Suriname<img src="http://localhost:8000/flag_resources/img/worldflags/sr.png "width="140px" ></a></div>`)[0];
            popup_d7e43676f76e4bab9cb2a96d3f59e335.setContent(html_da078b61216f4cca9ef273faab031ae6);


        marker_3a1007d87eb245f9ba825e1939296111.bindPopup(popup_d7e43676f76e4bab9cb2a96d3f59e335)
        ;




            var marker_444fd847e8444ccf835ad97b637b4d89 = L.marker(
                [0.18636, 6.613081],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d9cb9fde12374b639e7c52c551af90b6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_444fd847e8444ccf835ad97b637b4d89.setIcon(icon_d9cb9fde12374b639e7c52c551af90b6);


        var popup_c85e00f8b89f45898417bd4bb566f1cc = L.popup({"maxWidth": "100%"});


            var html_91b2fc58ac35441196e502621c93c6e1 = $(`<div id="html_91b2fc58ac35441196e502621c93c6e1" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/st.png">SÃ£o TomÃ© and PrÃ­ncipe<img src="http://localhost:8000/flag_resources/img/worldflags/st.png "width="140px" ></a></div>`)[0];
            popup_c85e00f8b89f45898417bd4bb566f1cc.setContent(html_91b2fc58ac35441196e502621c93c6e1);


        marker_444fd847e8444ccf835ad97b637b4d89.bindPopup(popup_c85e00f8b89f45898417bd4bb566f1cc)
        ;




            var marker_2dd9a7cb864747bba0bb1c04a9f30a13 = L.marker(
                [13.794185, -88.89653],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_fc822f09855048ecb3e9a39f28d28259 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2dd9a7cb864747bba0bb1c04a9f30a13.setIcon(icon_fc822f09855048ecb3e9a39f28d28259);


        var popup_f6f5247121d044568fd1a7fd9bc359d3 = L.popup({"maxWidth": "100%"});


            var html_debd569a31844f63948f2b7672fd1216 = $(`<div id="html_debd569a31844f63948f2b7672fd1216" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sv.png">El Salvador<img src="http://localhost:8000/flag_resources/img/worldflags/sv.png "width="140px" ></a></div>`)[0];
            popup_f6f5247121d044568fd1a7fd9bc359d3.setContent(html_debd569a31844f63948f2b7672fd1216);


        marker_2dd9a7cb864747bba0bb1c04a9f30a13.bindPopup(popup_f6f5247121d044568fd1a7fd9bc359d3)
        ;




            var marker_e0771545b8124f3a8ee3bc1dcca8f1bb = L.marker(
                [34.802075, 38.996815000000005],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_9da4e80efceb465e9cdc936f9cbc36f8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e0771545b8124f3a8ee3bc1dcca8f1bb.setIcon(icon_9da4e80efceb465e9cdc936f9cbc36f8);


        var popup_913950eee3b14fe6b16aa0de4a7464b8 = L.popup({"maxWidth": "100%"});


            var html_c5c5f6990ff64f85a827e53344257f0d = $(`<div id="html_c5c5f6990ff64f85a827e53344257f0d" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sy.png">Syria<img src="http://localhost:8000/flag_resources/img/worldflags/sy.png "width="140px" ></a></div>`)[0];
            popup_913950eee3b14fe6b16aa0de4a7464b8.setContent(html_c5c5f6990ff64f85a827e53344257f0d);


        marker_e0771545b8124f3a8ee3bc1dcca8f1bb.bindPopup(popup_913950eee3b14fe6b16aa0de4a7464b8)
        ;




            var marker_6b450c174c754647bb0b247888fc5a87 = L.marker(
                [-26.522503000000004, 31.465866],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_3245a807e5d94e64b978107fb4cd2b22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6b450c174c754647bb0b247888fc5a87.setIcon(icon_3245a807e5d94e64b978107fb4cd2b22);


        var popup_4f03c01b50af48a5947a23919503ac92 = L.popup({"maxWidth": "100%"});


            var html_cc6c55f675d54b6497e9fc718ad18d06 = $(`<div id="html_cc6c55f675d54b6497e9fc718ad18d06" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/sz.png">Swaziland<img src="http://localhost:8000/flag_resources/img/worldflags/sz.png "width="140px" ></a></div>`)[0];
            popup_4f03c01b50af48a5947a23919503ac92.setContent(html_cc6c55f675d54b6497e9fc718ad18d06);


        marker_6b450c174c754647bb0b247888fc5a87.bindPopup(popup_4f03c01b50af48a5947a23919503ac92)
        ;




            var marker_e40352c5c4b745f2a7a0dff362e2f303 = L.marker(
                [21.694025, -71.797928],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_e9c6fd82a53e48038f451b954e7771c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e40352c5c4b745f2a7a0dff362e2f303.setIcon(icon_e9c6fd82a53e48038f451b954e7771c5);


        var popup_08d987a312a34bf5921a06c034b8e6b0 = L.popup({"maxWidth": "100%"});


            var html_04a555962183424fafcfc03eae61e256 = $(`<div id="html_04a555962183424fafcfc03eae61e256" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tc.png">Turks and Caicos Islands<img src="http://localhost:8000/flag_resources/img/worldflags/tc.png "width="140px" ></a></div>`)[0];
            popup_08d987a312a34bf5921a06c034b8e6b0.setContent(html_04a555962183424fafcfc03eae61e256);


        marker_e40352c5c4b745f2a7a0dff362e2f303.bindPopup(popup_08d987a312a34bf5921a06c034b8e6b0)
        ;




            var marker_cf9edd5215f94bf28be8728b6950ada0 = L.marker(
                [15.454166, 18.732207],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_21c11e6b3bb34555a31c75d69510e6ef = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cf9edd5215f94bf28be8728b6950ada0.setIcon(icon_21c11e6b3bb34555a31c75d69510e6ef);


        var popup_c1661f5ff0a94465a05c78eb05b5fe26 = L.popup({"maxWidth": "100%"});


            var html_7469858c5d314f61bc812d3653b2dfa8 = $(`<div id="html_7469858c5d314f61bc812d3653b2dfa8" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/td.png">Chad<img src="http://localhost:8000/flag_resources/img/worldflags/td.png "width="140px" ></a></div>`)[0];
            popup_c1661f5ff0a94465a05c78eb05b5fe26.setContent(html_7469858c5d314f61bc812d3653b2dfa8);


        marker_cf9edd5215f94bf28be8728b6950ada0.bindPopup(popup_c1661f5ff0a94465a05c78eb05b5fe26)
        ;




            var marker_dc8e6311b2334dcc9392a482d54c2fae = L.marker(
                [-49.280366, 69.348557],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_12acd2e8b1d146728922f0d1c30cb186 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dc8e6311b2334dcc9392a482d54c2fae.setIcon(icon_12acd2e8b1d146728922f0d1c30cb186);


        var popup_ec1774a2867946c9922ea4a81a08e579 = L.popup({"maxWidth": "100%"});


            var html_c403fc036688498582311d6ea0288302 = $(`<div id="html_c403fc036688498582311d6ea0288302" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tf.png">French Southern Territories<img src="http://localhost:8000/flag_resources/img/worldflags/tf.png "width="140px" ></a></div>`)[0];
            popup_ec1774a2867946c9922ea4a81a08e579.setContent(html_c403fc036688498582311d6ea0288302);


        marker_dc8e6311b2334dcc9392a482d54c2fae.bindPopup(popup_ec1774a2867946c9922ea4a81a08e579)
        ;




            var marker_81b780a5a11c45cd9c7cf31b3127b00b = L.marker(
                [8.619543, 0.824782],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5ecf345961d3498b85f92f45a687928c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_81b780a5a11c45cd9c7cf31b3127b00b.setIcon(icon_5ecf345961d3498b85f92f45a687928c);


        var popup_d5592118ee514ee08ee4ede57a0ca14f = L.popup({"maxWidth": "100%"});


            var html_29981efaee554f56a3f374fa9a556c78 = $(`<div id="html_29981efaee554f56a3f374fa9a556c78" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tg.png">Togo<img src="http://localhost:8000/flag_resources/img/worldflags/tg.png "width="140px" ></a></div>`)[0];
            popup_d5592118ee514ee08ee4ede57a0ca14f.setContent(html_29981efaee554f56a3f374fa9a556c78);


        marker_81b780a5a11c45cd9c7cf31b3127b00b.bindPopup(popup_d5592118ee514ee08ee4ede57a0ca14f)
        ;




            var marker_e5d50696a93f40a08532ec63525cf68e = L.marker(
                [15.870032, 100.992541],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_96bd840efce64c2d9353fa3db02e8885 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e5d50696a93f40a08532ec63525cf68e.setIcon(icon_96bd840efce64c2d9353fa3db02e8885);


        var popup_65523e1d71cc49ba9a9e7e3f954d509a = L.popup({"maxWidth": "100%"});


            var html_bb88fee93b3a434d9f79c1809fc27d5a = $(`<div id="html_bb88fee93b3a434d9f79c1809fc27d5a" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/th.png">Thailand<img src="http://localhost:8000/flag_resources/img/worldflags/th.png "width="140px" ></a></div>`)[0];
            popup_65523e1d71cc49ba9a9e7e3f954d509a.setContent(html_bb88fee93b3a434d9f79c1809fc27d5a);


        marker_e5d50696a93f40a08532ec63525cf68e.bindPopup(popup_65523e1d71cc49ba9a9e7e3f954d509a)
        ;




            var marker_a0def8e498db4d0e89794d6cd4ae946b = L.marker(
                [38.861034000000004, 71.276093],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_9d0c789e23fa43128ab5d26676d112d3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a0def8e498db4d0e89794d6cd4ae946b.setIcon(icon_9d0c789e23fa43128ab5d26676d112d3);


        var popup_49054f56acf1451f9b3fe445be0e90cf = L.popup({"maxWidth": "100%"});


            var html_79955f9a21ab40e481dea317a7a7b07f = $(`<div id="html_79955f9a21ab40e481dea317a7a7b07f" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tj.png">Tajikistan<img src="http://localhost:8000/flag_resources/img/worldflags/tj.png "width="140px" ></a></div>`)[0];
            popup_49054f56acf1451f9b3fe445be0e90cf.setContent(html_79955f9a21ab40e481dea317a7a7b07f);


        marker_a0def8e498db4d0e89794d6cd4ae946b.bindPopup(popup_49054f56acf1451f9b3fe445be0e90cf)
        ;




            var marker_ac8282bf47cb4d2aa5639758369e84b2 = L.marker(
                [-8.967363, -171.855881],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5423af54277741e4bdd4e15a1745e714 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ac8282bf47cb4d2aa5639758369e84b2.setIcon(icon_5423af54277741e4bdd4e15a1745e714);


        var popup_c75619484f164b05a217d1b5a249c282 = L.popup({"maxWidth": "100%"});


            var html_78c9238b318c452085696955f4a946fa = $(`<div id="html_78c9238b318c452085696955f4a946fa" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tk.png">Tokelau<img src="http://localhost:8000/flag_resources/img/worldflags/tk.png "width="140px" ></a></div>`)[0];
            popup_c75619484f164b05a217d1b5a249c282.setContent(html_78c9238b318c452085696955f4a946fa);


        marker_ac8282bf47cb4d2aa5639758369e84b2.bindPopup(popup_c75619484f164b05a217d1b5a249c282)
        ;




            var marker_cc9080ba74414bf886d3dfb8d6a70e7e = L.marker(
                [-8.874217, 125.727539],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_c1504961af844b6fb3e17ea4874a8e93 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cc9080ba74414bf886d3dfb8d6a70e7e.setIcon(icon_c1504961af844b6fb3e17ea4874a8e93);


        var popup_0955bdff7b0e4d17a25c9b533675bff5 = L.popup({"maxWidth": "100%"});


            var html_7fa5ab5691fc46d094c592998c86e780 = $(`<div id="html_7fa5ab5691fc46d094c592998c86e780" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tl.png">Timor-Leste<img src="http://localhost:8000/flag_resources/img/worldflags/tl.png "width="140px" ></a></div>`)[0];
            popup_0955bdff7b0e4d17a25c9b533675bff5.setContent(html_7fa5ab5691fc46d094c592998c86e780);


        marker_cc9080ba74414bf886d3dfb8d6a70e7e.bindPopup(popup_0955bdff7b0e4d17a25c9b533675bff5)
        ;




            var marker_da04f6dafb0b4287ab500f72f6e6b778 = L.marker(
                [38.969719, 59.556278000000006],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_f53319fb519e44c4a7250dfa832f4a99 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_da04f6dafb0b4287ab500f72f6e6b778.setIcon(icon_f53319fb519e44c4a7250dfa832f4a99);


        var popup_1afcea62c91c420e9f8a4ba59c094443 = L.popup({"maxWidth": "100%"});


            var html_6507ba4c7aeb492cada9aecf27331eba = $(`<div id="html_6507ba4c7aeb492cada9aecf27331eba" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tm.png">Turkmenistan<img src="http://localhost:8000/flag_resources/img/worldflags/tm.png "width="140px" ></a></div>`)[0];
            popup_1afcea62c91c420e9f8a4ba59c094443.setContent(html_6507ba4c7aeb492cada9aecf27331eba);


        marker_da04f6dafb0b4287ab500f72f6e6b778.bindPopup(popup_1afcea62c91c420e9f8a4ba59c094443)
        ;




            var marker_8ed6d13beb764a0b83a74ff548381909 = L.marker(
                [33.886917, 9.537499],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d03e8c8dbc254d4495e8ee01a997ac1d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8ed6d13beb764a0b83a74ff548381909.setIcon(icon_d03e8c8dbc254d4495e8ee01a997ac1d);


        var popup_86ced00753544b988bad325579f37ea1 = L.popup({"maxWidth": "100%"});


            var html_c75ef8c9b3df4338813c62654e7d1ee2 = $(`<div id="html_c75ef8c9b3df4338813c62654e7d1ee2" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tn.png">Tunisia<img src="http://localhost:8000/flag_resources/img/worldflags/tn.png "width="140px" ></a></div>`)[0];
            popup_86ced00753544b988bad325579f37ea1.setContent(html_c75ef8c9b3df4338813c62654e7d1ee2);


        marker_8ed6d13beb764a0b83a74ff548381909.bindPopup(popup_86ced00753544b988bad325579f37ea1)
        ;




            var marker_0a84ae52d94a41c88f4784af9bac6a6d = L.marker(
                [-21.178986, -175.198242],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0c2b334432404d4a82df64f6ab43ff11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0a84ae52d94a41c88f4784af9bac6a6d.setIcon(icon_0c2b334432404d4a82df64f6ab43ff11);


        var popup_f9af8ebd5f79403da797bd1950d414fb = L.popup({"maxWidth": "100%"});


            var html_02d4a18192a0438cab46d24015cd85a9 = $(`<div id="html_02d4a18192a0438cab46d24015cd85a9" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/to.png">Tonga<img src="http://localhost:8000/flag_resources/img/worldflags/to.png "width="140px" ></a></div>`)[0];
            popup_f9af8ebd5f79403da797bd1950d414fb.setContent(html_02d4a18192a0438cab46d24015cd85a9);


        marker_0a84ae52d94a41c88f4784af9bac6a6d.bindPopup(popup_f9af8ebd5f79403da797bd1950d414fb)
        ;




            var marker_3e3d227522ea48a78a3d77b9636ff792 = L.marker(
                [38.963745, 35.243322],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_a8898e74009a4b41b94cad300959511a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3e3d227522ea48a78a3d77b9636ff792.setIcon(icon_a8898e74009a4b41b94cad300959511a);


        var popup_ba40bb22e48f4f1aa28b2eb37165b0bd = L.popup({"maxWidth": "100%"});


            var html_b767bdfd274f487fb0cea641c783725c = $(`<div id="html_b767bdfd274f487fb0cea641c783725c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tr.png">Turkey<img src="http://localhost:8000/flag_resources/img/worldflags/tr.png "width="140px" ></a></div>`)[0];
            popup_ba40bb22e48f4f1aa28b2eb37165b0bd.setContent(html_b767bdfd274f487fb0cea641c783725c);


        marker_3e3d227522ea48a78a3d77b9636ff792.bindPopup(popup_ba40bb22e48f4f1aa28b2eb37165b0bd)
        ;




            var marker_d770465628aa4fa5924e8ef17d222f22 = L.marker(
                [10.691803, -61.222503],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_bf73f7b490be408b80254292fd2bfddf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d770465628aa4fa5924e8ef17d222f22.setIcon(icon_bf73f7b490be408b80254292fd2bfddf);


        var popup_c14f12eade9e4e7584d295b64d9d852c = L.popup({"maxWidth": "100%"});


            var html_b7212d7b3c7d4baaa807e8f9181a1b56 = $(`<div id="html_b7212d7b3c7d4baaa807e8f9181a1b56" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tt.png">Trinidad and Tobago<img src="http://localhost:8000/flag_resources/img/worldflags/tt.png "width="140px" ></a></div>`)[0];
            popup_c14f12eade9e4e7584d295b64d9d852c.setContent(html_b7212d7b3c7d4baaa807e8f9181a1b56);


        marker_d770465628aa4fa5924e8ef17d222f22.bindPopup(popup_c14f12eade9e4e7584d295b64d9d852c)
        ;




            var marker_48f73296df144adcaccfbffdf67823d8 = L.marker(
                [-7.109535, 177.64933],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_863e235cc0f34adc9c4549fcecc51f7b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_48f73296df144adcaccfbffdf67823d8.setIcon(icon_863e235cc0f34adc9c4549fcecc51f7b);


        var popup_366fdef9591d4167a98bf947ac74c021 = L.popup({"maxWidth": "100%"});


            var html_52a846d09c114a77b28c4f724462d574 = $(`<div id="html_52a846d09c114a77b28c4f724462d574" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tv.png">Tuvalu<img src="http://localhost:8000/flag_resources/img/worldflags/tv.png "width="140px" ></a></div>`)[0];
            popup_366fdef9591d4167a98bf947ac74c021.setContent(html_52a846d09c114a77b28c4f724462d574);


        marker_48f73296df144adcaccfbffdf67823d8.bindPopup(popup_366fdef9591d4167a98bf947ac74c021)
        ;




            var marker_a607af127e234ad4b82f29265f991298 = L.marker(
                [23.69781, 120.96051499999999],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0705388d0b8f4fd1bba017da19621c51 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a607af127e234ad4b82f29265f991298.setIcon(icon_0705388d0b8f4fd1bba017da19621c51);


        var popup_8c2680f6a3fd4d03b672099c805ecb2c = L.popup({"maxWidth": "100%"});


            var html_54b6fae47b6a46c29614e4ca65b90297 = $(`<div id="html_54b6fae47b6a46c29614e4ca65b90297" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tw.png">Taiwan<img src="http://localhost:8000/flag_resources/img/worldflags/tw.png "width="140px" ></a></div>`)[0];
            popup_8c2680f6a3fd4d03b672099c805ecb2c.setContent(html_54b6fae47b6a46c29614e4ca65b90297);


        marker_a607af127e234ad4b82f29265f991298.bindPopup(popup_8c2680f6a3fd4d03b672099c805ecb2c)
        ;




            var marker_65c02e55bf3b4b73ac0012a9325c1a96 = L.marker(
                [-6.369028, 34.888822],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_279d73567cbb45fbb07fa3731475aeea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_65c02e55bf3b4b73ac0012a9325c1a96.setIcon(icon_279d73567cbb45fbb07fa3731475aeea);


        var popup_5d81a5a2bffa4540a4f992d5cfba3f9c = L.popup({"maxWidth": "100%"});


            var html_0fcce42cb67a430db4500b5af4e95562 = $(`<div id="html_0fcce42cb67a430db4500b5af4e95562" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/tz.png">Tanzania<img src="http://localhost:8000/flag_resources/img/worldflags/tz.png "width="140px" ></a></div>`)[0];
            popup_5d81a5a2bffa4540a4f992d5cfba3f9c.setContent(html_0fcce42cb67a430db4500b5af4e95562);


        marker_65c02e55bf3b4b73ac0012a9325c1a96.bindPopup(popup_5d81a5a2bffa4540a4f992d5cfba3f9c)
        ;




            var marker_8e1b747b0f5f459ca7a9bd1b7ec027c7 = L.marker(
                [48.379433, 31.16558],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_617afbf15ab5479b91c02c897139a8f1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8e1b747b0f5f459ca7a9bd1b7ec027c7.setIcon(icon_617afbf15ab5479b91c02c897139a8f1);


        var popup_6174e4b553754dc2b16f54dcdf926cff = L.popup({"maxWidth": "100%"});


            var html_d845a8396e43420ebb6fa752b4853dd3 = $(`<div id="html_d845a8396e43420ebb6fa752b4853dd3" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ua.png">Ukraine<img src="http://localhost:8000/flag_resources/img/worldflags/ua.png "width="140px" ></a></div>`)[0];
            popup_6174e4b553754dc2b16f54dcdf926cff.setContent(html_d845a8396e43420ebb6fa752b4853dd3);


        marker_8e1b747b0f5f459ca7a9bd1b7ec027c7.bindPopup(popup_6174e4b553754dc2b16f54dcdf926cff)
        ;




            var marker_8f594ca3e2a942448c27cca96dd9408a = L.marker(
                [1.373333, 32.290275],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_0903db80da074967bea879e02d48ffde = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8f594ca3e2a942448c27cca96dd9408a.setIcon(icon_0903db80da074967bea879e02d48ffde);


        var popup_624da364d7844b6e8eae137e88f292b1 = L.popup({"maxWidth": "100%"});


            var html_c1950c94cffb46ab9f878f67c481f9cf = $(`<div id="html_c1950c94cffb46ab9f878f67c481f9cf" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ug.png">Uganda<img src="http://localhost:8000/flag_resources/img/worldflags/ug.png "width="140px" ></a></div>`)[0];
            popup_624da364d7844b6e8eae137e88f292b1.setContent(html_c1950c94cffb46ab9f878f67c481f9cf);


        marker_8f594ca3e2a942448c27cca96dd9408a.bindPopup(popup_624da364d7844b6e8eae137e88f292b1)
        ;




            var marker_22b196f12a524f6290615d7d6b1cd0f5 = L.marker(
                [37.09024, -95.712891],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_ff4b7bde1cd34543902086b9ac451d8e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_22b196f12a524f6290615d7d6b1cd0f5.setIcon(icon_ff4b7bde1cd34543902086b9ac451d8e);


        var popup_4330cf3c3e834bc9ae040a7225a82a05 = L.popup({"maxWidth": "100%"});


            var html_85b857b1d75a4882bfef2bc71f7f6e51 = $(`<div id="html_85b857b1d75a4882bfef2bc71f7f6e51" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/us.png">United States<img src="http://localhost:8000/flag_resources/img/worldflags/us.png "width="140px" ></a></div>`)[0];
            popup_4330cf3c3e834bc9ae040a7225a82a05.setContent(html_85b857b1d75a4882bfef2bc71f7f6e51);


        marker_22b196f12a524f6290615d7d6b1cd0f5.bindPopup(popup_4330cf3c3e834bc9ae040a7225a82a05)
        ;




            var marker_ad73250443824ff58c3c073cf441e41d = L.marker(
                [-32.522779, -55.765834999999996],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_74312bc6cd9d436db1b25bc2f108dee4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ad73250443824ff58c3c073cf441e41d.setIcon(icon_74312bc6cd9d436db1b25bc2f108dee4);


        var popup_ada0b0b258a1485f844ef34d62237be5 = L.popup({"maxWidth": "100%"});


            var html_2963eb534ebf438badf6ad47cd2a4969 = $(`<div id="html_2963eb534ebf438badf6ad47cd2a4969" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/uy.png">Uruguay<img src="http://localhost:8000/flag_resources/img/worldflags/uy.png "width="140px" ></a></div>`)[0];
            popup_ada0b0b258a1485f844ef34d62237be5.setContent(html_2963eb534ebf438badf6ad47cd2a4969);


        marker_ad73250443824ff58c3c073cf441e41d.bindPopup(popup_ada0b0b258a1485f844ef34d62237be5)
        ;




            var marker_41b0bbe54f004261a4da91d3bb40695f = L.marker(
                [41.377491, 64.585262],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_9206a4fcedcc493ca0b04d98d2f3a666 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_41b0bbe54f004261a4da91d3bb40695f.setIcon(icon_9206a4fcedcc493ca0b04d98d2f3a666);


        var popup_0bb746a106124593b4703a2b819f2efa = L.popup({"maxWidth": "100%"});


            var html_919fbaa806a140ee8bf29b331fe51d3a = $(`<div id="html_919fbaa806a140ee8bf29b331fe51d3a" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/uz.png">Uzbekistan<img src="http://localhost:8000/flag_resources/img/worldflags/uz.png "width="140px" ></a></div>`)[0];
            popup_0bb746a106124593b4703a2b819f2efa.setContent(html_919fbaa806a140ee8bf29b331fe51d3a);


        marker_41b0bbe54f004261a4da91d3bb40695f.bindPopup(popup_0bb746a106124593b4703a2b819f2efa)
        ;




            var marker_f9e58e720217499c82c6c685aadefd4e = L.marker(
                [41.902916, 12.453389],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_5bfed228d6fc4b0bb4bf0d7f3240974c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f9e58e720217499c82c6c685aadefd4e.setIcon(icon_5bfed228d6fc4b0bb4bf0d7f3240974c);


        var popup_16a292cfc1074a13a4e8b9b74a064467 = L.popup({"maxWidth": "100%"});


            var html_2b097ee3cf9744b2bfe3f13bdc00d6ac = $(`<div id="html_2b097ee3cf9744b2bfe3f13bdc00d6ac" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/va.png">Vatican City<img src="http://localhost:8000/flag_resources/img/worldflags/va.png "width="140px" ></a></div>`)[0];
            popup_16a292cfc1074a13a4e8b9b74a064467.setContent(html_2b097ee3cf9744b2bfe3f13bdc00d6ac);


        marker_f9e58e720217499c82c6c685aadefd4e.bindPopup(popup_16a292cfc1074a13a4e8b9b74a064467)
        ;




            var marker_831857433e9f496cb7f57414553b2824 = L.marker(
                [12.984305, -61.287228000000006],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_483dce7abbeb4d279b03c8e0a016aa1e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_831857433e9f496cb7f57414553b2824.setIcon(icon_483dce7abbeb4d279b03c8e0a016aa1e);


        var popup_e9e2fae0dfc14b2b8b5b963196f354c1 = L.popup({"maxWidth": "100%"});


            var html_ae32f0c5fa33469391d17bdd32d89796 = $(`<div id="html_ae32f0c5fa33469391d17bdd32d89796" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/vc.png">Saint Vincent and the Grenadines<img src="http://localhost:8000/flag_resources/img/worldflags/vc.png "width="140px" ></a></div>`)[0];
            popup_e9e2fae0dfc14b2b8b5b963196f354c1.setContent(html_ae32f0c5fa33469391d17bdd32d89796);


        marker_831857433e9f496cb7f57414553b2824.bindPopup(popup_e9e2fae0dfc14b2b8b5b963196f354c1)
        ;




            var marker_c40f2ce548c74e918bd62e6b7b94e66f = L.marker(
                [6.42375, -66.58973],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_62c8260707224d4e82c8edc4ac4ce977 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c40f2ce548c74e918bd62e6b7b94e66f.setIcon(icon_62c8260707224d4e82c8edc4ac4ce977);


        var popup_68d7b3854ad643d58c5b9efd1c6b52dd = L.popup({"maxWidth": "100%"});


            var html_438e993f5f72459cb49900c5b57bd5ff = $(`<div id="html_438e993f5f72459cb49900c5b57bd5ff" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ve.png">Venezuela<img src="http://localhost:8000/flag_resources/img/worldflags/ve.png "width="140px" ></a></div>`)[0];
            popup_68d7b3854ad643d58c5b9efd1c6b52dd.setContent(html_438e993f5f72459cb49900c5b57bd5ff);


        marker_c40f2ce548c74e918bd62e6b7b94e66f.bindPopup(popup_68d7b3854ad643d58c5b9efd1c6b52dd)
        ;




            var marker_b8afd76ceceb4d369945c834ef4978a4 = L.marker(
                [18.420695000000002, -64.63996800000001],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_aea9ee6c7b2648779801aa08c0d8a9bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b8afd76ceceb4d369945c834ef4978a4.setIcon(icon_aea9ee6c7b2648779801aa08c0d8a9bb);


        var popup_c4f253c4de844fefa14f5f520120d443 = L.popup({"maxWidth": "100%"});


            var html_74984832b02946c085d4f10b508a903c = $(`<div id="html_74984832b02946c085d4f10b508a903c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/vg.png">British Virgin Islands<img src="http://localhost:8000/flag_resources/img/worldflags/vg.png "width="140px" ></a></div>`)[0];
            popup_c4f253c4de844fefa14f5f520120d443.setContent(html_74984832b02946c085d4f10b508a903c);


        marker_b8afd76ceceb4d369945c834ef4978a4.bindPopup(popup_c4f253c4de844fefa14f5f520120d443)
        ;




            var marker_44bb90dd20f24e3099f0d743c5f6583d = L.marker(
                [18.335765, -64.896335],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_46301963a39a411bbc526fd3e43ef150 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_44bb90dd20f24e3099f0d743c5f6583d.setIcon(icon_46301963a39a411bbc526fd3e43ef150);


        var popup_690f6dc1f3b34a5fb0cd16a3fa778c3d = L.popup({"maxWidth": "100%"});


            var html_09f48574b5834bad9615d9be99a7ea0b = $(`<div id="html_09f48574b5834bad9615d9be99a7ea0b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/vi.png">U.S. Virgin Islands<img src="http://localhost:8000/flag_resources/img/worldflags/vi.png "width="140px" ></a></div>`)[0];
            popup_690f6dc1f3b34a5fb0cd16a3fa778c3d.setContent(html_09f48574b5834bad9615d9be99a7ea0b);


        marker_44bb90dd20f24e3099f0d743c5f6583d.bindPopup(popup_690f6dc1f3b34a5fb0cd16a3fa778c3d)
        ;




            var marker_94a0bd8146234874b54cee7fb0af34b9 = L.marker(
                [14.058323999999999, 108.277199],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_be5fd3ff862d44cabe7773b95adc8b30 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_94a0bd8146234874b54cee7fb0af34b9.setIcon(icon_be5fd3ff862d44cabe7773b95adc8b30);


        var popup_de0d96bb45cf40a48ba3f0399b4c251e = L.popup({"maxWidth": "100%"});


            var html_16a53b1327574ad9bb8fda49e170e315 = $(`<div id="html_16a53b1327574ad9bb8fda49e170e315" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/vn.png">Vietnam<img src="http://localhost:8000/flag_resources/img/worldflags/vn.png "width="140px" ></a></div>`)[0];
            popup_de0d96bb45cf40a48ba3f0399b4c251e.setContent(html_16a53b1327574ad9bb8fda49e170e315);


        marker_94a0bd8146234874b54cee7fb0af34b9.bindPopup(popup_de0d96bb45cf40a48ba3f0399b4c251e)
        ;




            var marker_d14fa146198d4c9d9ef401f97c04c493 = L.marker(
                [-15.376706, 166.959158],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_72a152c48aab45388e86d4b71f77925a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d14fa146198d4c9d9ef401f97c04c493.setIcon(icon_72a152c48aab45388e86d4b71f77925a);


        var popup_2d4867ada9ee4cedb3f425d02de8681f = L.popup({"maxWidth": "100%"});


            var html_5ef4e092d6df4f0dbd475db33e7bceb2 = $(`<div id="html_5ef4e092d6df4f0dbd475db33e7bceb2" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/vu.png">Vanuatu<img src="http://localhost:8000/flag_resources/img/worldflags/vu.png "width="140px" ></a></div>`)[0];
            popup_2d4867ada9ee4cedb3f425d02de8681f.setContent(html_5ef4e092d6df4f0dbd475db33e7bceb2);


        marker_d14fa146198d4c9d9ef401f97c04c493.bindPopup(popup_2d4867ada9ee4cedb3f425d02de8681f)
        ;




            var marker_872a54c6a4194731b5186da0459987aa = L.marker(
                [-13.768752, -177.156097],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_160c322dfb7745b3800ca814c3e4647d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_872a54c6a4194731b5186da0459987aa.setIcon(icon_160c322dfb7745b3800ca814c3e4647d);


        var popup_2812d500ee954c80a2fef195be2335cf = L.popup({"maxWidth": "100%"});


            var html_6041762e4e794baaa78ec46e64e35122 = $(`<div id="html_6041762e4e794baaa78ec46e64e35122" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/wf.png">Wallis and Futuna<img src="http://localhost:8000/flag_resources/img/worldflags/wf.png "width="140px" ></a></div>`)[0];
            popup_2812d500ee954c80a2fef195be2335cf.setContent(html_6041762e4e794baaa78ec46e64e35122);


        marker_872a54c6a4194731b5186da0459987aa.bindPopup(popup_2812d500ee954c80a2fef195be2335cf)
        ;




            var marker_85b4eb4447e84163be0fd7b11819c80d = L.marker(
                [-13.759029, -172.10462900000002],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_6ee103e9734845fb93ae1161b3a4a57f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_85b4eb4447e84163be0fd7b11819c80d.setIcon(icon_6ee103e9734845fb93ae1161b3a4a57f);


        var popup_5a72d3cfd58149b5b3f2f9ae3745a5e5 = L.popup({"maxWidth": "100%"});


            var html_4e8bb8debd5f4d9e95f1988d9ae548ac = $(`<div id="html_4e8bb8debd5f4d9e95f1988d9ae548ac" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ws.png">Samoa<img src="http://localhost:8000/flag_resources/img/worldflags/ws.png "width="140px" ></a></div>`)[0];
            popup_5a72d3cfd58149b5b3f2f9ae3745a5e5.setContent(html_4e8bb8debd5f4d9e95f1988d9ae548ac);


        marker_85b4eb4447e84163be0fd7b11819c80d.bindPopup(popup_5a72d3cfd58149b5b3f2f9ae3745a5e5)
        ;




            var marker_76c28d4fdfaf420dbd488e7de2388cde = L.marker(
                [42.602636, 20.902977],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_375e644441db43e7bd3416a93a728d8b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_76c28d4fdfaf420dbd488e7de2388cde.setIcon(icon_375e644441db43e7bd3416a93a728d8b);


        var popup_2a62bd223b3f4db7bc4f7f27df67f8c4 = L.popup({"maxWidth": "100%"});


            var html_94b0a2c3f4b04bd7ae071f4bfeac3cbb = $(`<div id="html_94b0a2c3f4b04bd7ae071f4bfeac3cbb" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/xk.png">Kosovo<img src="http://localhost:8000/flag_resources/img/worldflags/xk.png "width="140px" ></a></div>`)[0];
            popup_2a62bd223b3f4db7bc4f7f27df67f8c4.setContent(html_94b0a2c3f4b04bd7ae071f4bfeac3cbb);


        marker_76c28d4fdfaf420dbd488e7de2388cde.bindPopup(popup_2a62bd223b3f4db7bc4f7f27df67f8c4)
        ;




            var marker_024bfb48e5c444b19b509a6177dd44b5 = L.marker(
                [15.552726999999999, 48.516388],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_4246242531d849f9a6b3111b98e3bf48 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_024bfb48e5c444b19b509a6177dd44b5.setIcon(icon_4246242531d849f9a6b3111b98e3bf48);


        var popup_ca8c4936d2b4449aba893c5ac373da9f = L.popup({"maxWidth": "100%"});


            var html_45d3635f796040e196bcf49b869faabb = $(`<div id="html_45d3635f796040e196bcf49b869faabb" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/ye.png">Yemen<img src="http://localhost:8000/flag_resources/img/worldflags/ye.png "width="140px" ></a></div>`)[0];
            popup_ca8c4936d2b4449aba893c5ac373da9f.setContent(html_45d3635f796040e196bcf49b869faabb);


        marker_024bfb48e5c444b19b509a6177dd44b5.bindPopup(popup_ca8c4936d2b4449aba893c5ac373da9f)
        ;




            var marker_087ddfa7f47f4802ba0d843978f22105 = L.marker(
                [-12.8275, 45.166244],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_d616d2a6fef04a4185e579c5b7e99a03 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_087ddfa7f47f4802ba0d843978f22105.setIcon(icon_d616d2a6fef04a4185e579c5b7e99a03);


        var popup_22cc0df7691440a4b30d3576ca42d78b = L.popup({"maxWidth": "100%"});


            var html_02f4e4a0e80049f2a4c87425ea11ce38 = $(`<div id="html_02f4e4a0e80049f2a4c87425ea11ce38" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/yt.png">Mayotte<img src="http://localhost:8000/flag_resources/img/worldflags/yt.png "width="140px" ></a></div>`)[0];
            popup_22cc0df7691440a4b30d3576ca42d78b.setContent(html_02f4e4a0e80049f2a4c87425ea11ce38);


        marker_087ddfa7f47f4802ba0d843978f22105.bindPopup(popup_22cc0df7691440a4b30d3576ca42d78b)
        ;




            var marker_bf54ea35015741f6b804ad411d48150d = L.marker(
                [-30.559482, 22.937506],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_7b6b2ad5396547c39a0477d9f2a04712 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_bf54ea35015741f6b804ad411d48150d.setIcon(icon_7b6b2ad5396547c39a0477d9f2a04712);


        var popup_61037f263fb24a6187782797f0d39980 = L.popup({"maxWidth": "100%"});


            var html_7f8de245cb104a2193829240b28b8054 = $(`<div id="html_7f8de245cb104a2193829240b28b8054" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/za.png">South Africa<img src="http://localhost:8000/flag_resources/img/worldflags/za.png "width="140px" ></a></div>`)[0];
            popup_61037f263fb24a6187782797f0d39980.setContent(html_7f8de245cb104a2193829240b28b8054);


        marker_bf54ea35015741f6b804ad411d48150d.bindPopup(popup_61037f263fb24a6187782797f0d39980)
        ;




            var marker_63122dd75510486ab8e2cdaeaacf094e = L.marker(
                [-13.133897, 27.849332],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_078308b71e974857aca2cee2f3516bbe = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_63122dd75510486ab8e2cdaeaacf094e.setIcon(icon_078308b71e974857aca2cee2f3516bbe);


        var popup_6fcc5dabc6914cbe9c251eaa74cdc83c = L.popup({"maxWidth": "100%"});


            var html_fcbfbab409ed4e7d825d642d59753a56 = $(`<div id="html_fcbfbab409ed4e7d825d642d59753a56" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/zm.png">Zambia<img src="http://localhost:8000/flag_resources/img/worldflags/zm.png "width="140px" ></a></div>`)[0];
            popup_6fcc5dabc6914cbe9c251eaa74cdc83c.setContent(html_fcbfbab409ed4e7d825d642d59753a56);


        marker_63122dd75510486ab8e2cdaeaacf094e.bindPopup(popup_6fcc5dabc6914cbe9c251eaa74cdc83c)
        ;




            var marker_871125e6df1e4143b244e83815b84e05 = L.marker(
                [-19.015438, 29.154857],
                {}
            ).addTo(map_a793d76124d54c6f913e956d1e66df04);


            var icon_f5b12bff131749f185bee992ad92d9f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_871125e6df1e4143b244e83815b84e05.setIcon(icon_f5b12bff131749f185bee992ad92d9f4);


        var popup_739cc70652b44ce38f9a8c06e299de4a = L.popup({"maxWidth": "100%"});


            var html_1cb24ad4ee374e7f81e939366bbcc9fd = $(`<div id="html_1cb24ad4ee374e7f81e939366bbcc9fd" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/worldflags/zw.png">Zimbabwe<img src="http://localhost:8000/flag_resources/img/worldflags/zw.png "width="140px" ></a></div>`)[0];
            popup_739cc70652b44ce38f9a8c06e299de4a.setContent(html_1cb24ad4ee374e7f81e939366bbcc9fd);


        marker_871125e6df1e4143b244e83815b84e05.bindPopup(popup_739cc70652b44ce38f9a8c06e299de4a)
        ;



</script>
