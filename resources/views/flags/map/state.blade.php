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
                #map_5f5cfe065cbd4ed4b50b93162be9cb3d {
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
            <div class="folium-map" id="map_5f5cfe065cbd4ed4b50b93162be9cb3d" ></div>

</body>
<script>

            var map_5f5cfe065cbd4ed4b50b93162be9cb3d = L.map(
                "map_5f5cfe065cbd4ed4b50b93162be9cb3d",
                {
                    center: [38.4987789, -98.3200779],
                    crs: L.CRS.EPSG3857,
                    zoom: 8,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );





            var tile_layer_26f1b7102dc04d4fb2160f0d80aaf86c = L.tileLayer(
                "https://api.mapbox.com/styles/v1/mapbox/dark-v9/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiY2hhd2tlcjIxIiwiYSI6ImNqOXgycWEybDdzYTEzM2xnNG01N2Y5d2UifQ.YMghCTUA1p131erg3_Ln_Q",
                {"attribution": "XXX Mapbox Attribution", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var marker_99aeeb96b0d548c3bb50ba2118b33643 = L.marker(
                [32.601011199999995, -86.6807365],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_896aeac8dfdb4f2bbd826f0cb97cc89c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_99aeeb96b0d548c3bb50ba2118b33643.setIcon(icon_896aeac8dfdb4f2bbd826f0cb97cc89c);


        var popup_ec0c349c29af4151893bab7764a7fa08 = L.popup({"maxWidth": "100%"});


            var html_82e083bd041f4819839c4b0b5d49411c = $(`<div id="html_82e083bd041f4819839c4b0b5d49411c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/al_flag.png">Alabama<img src="http://localhost:8000/flag_resources/img/stateflags/al_flag.png "width="140px" ></a></div>`)[0];
            popup_ec0c349c29af4151893bab7764a7fa08.setContent(html_82e083bd041f4819839c4b0b5d49411c);


        marker_99aeeb96b0d548c3bb50ba2118b33643.bindPopup(popup_ec0c349c29af4151893bab7764a7fa08)
        ;




            var marker_274de11e39d64f39ac8744f41348e033 = L.marker(
                [61.3025006, -158.7750198],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_6a4ba7aad5df4e78a798e2f92673d24f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_274de11e39d64f39ac8744f41348e033.setIcon(icon_6a4ba7aad5df4e78a798e2f92673d24f);


        var popup_65556ae584df495dbad7f4901b8fc19c = L.popup({"maxWidth": "100%"});


            var html_abd07811561a47579900cb54f7fe6450 = $(`<div id="html_abd07811561a47579900cb54f7fe6450" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ak_flag.png">Alaska<img src="http://localhost:8000/flag_resources/img/stateflags/ak_flag.png "width="140px" ></a></div>`)[0];
            popup_65556ae584df495dbad7f4901b8fc19c.setContent(html_abd07811561a47579900cb54f7fe6450);


        marker_274de11e39d64f39ac8744f41348e033.bindPopup(popup_65556ae584df495dbad7f4901b8fc19c)
        ;




            var marker_b2b14dda57c14543b69d88a441a90394 = L.marker(
                [34.1682185, -111.930907],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_0e8505e793e042048cf4cdc5c5bd4243 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b2b14dda57c14543b69d88a441a90394.setIcon(icon_0e8505e793e042048cf4cdc5c5bd4243);


        var popup_e1d358393eed4eaab01f726712f8987b = L.popup({"maxWidth": "100%"});


            var html_742137a65b52488bb5039f26b3163863 = $(`<div id="html_742137a65b52488bb5039f26b3163863" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/az_flag.png">Arizona<img src="http://localhost:8000/flag_resources/img/stateflags/az_flag.png "width="140px" ></a></div>`)[0];
            popup_e1d358393eed4eaab01f726712f8987b.setContent(html_742137a65b52488bb5039f26b3163863);


        marker_b2b14dda57c14543b69d88a441a90394.bindPopup(popup_e1d358393eed4eaab01f726712f8987b)
        ;




            var marker_0a4a0d9a9d3047228da6c32bf367ccd4 = L.marker(
                [34.7519275, -92.13137840000002],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_5a10622cb7c043d8beb41fe5d756de9a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0a4a0d9a9d3047228da6c32bf367ccd4.setIcon(icon_5a10622cb7c043d8beb41fe5d756de9a);


        var popup_3f88bb0d70e64d32bff163afd25877ce = L.popup({"maxWidth": "100%"});


            var html_7bb27d3fe63045bdbcd3fed434e59acc = $(`<div id="html_7bb27d3fe63045bdbcd3fed434e59acc" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ar_flag.png">Arkansas<img src="http://localhost:8000/flag_resources/img/stateflags/ar_flag.png "width="140px" ></a></div>`)[0];
            popup_3f88bb0d70e64d32bff163afd25877ce.setContent(html_7bb27d3fe63045bdbcd3fed434e59acc);


        marker_0a4a0d9a9d3047228da6c32bf367ccd4.bindPopup(popup_3f88bb0d70e64d32bff163afd25877ce)
        ;




            var marker_46a50c3d66b5436ca0be32f1106ae8fc = L.marker(
                [37.2718745, -119.2704153],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_107bb046892f48a18384ade6299fa5f0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_46a50c3d66b5436ca0be32f1106ae8fc.setIcon(icon_107bb046892f48a18384ade6299fa5f0);


        var popup_06c848e5f7ca42bba7065ae9ff68ee20 = L.popup({"maxWidth": "100%"});


            var html_b5f321c503224018877f4beed72519b7 = $(`<div id="html_b5f321c503224018877f4beed72519b7" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ca_flag.png">California<img src="http://localhost:8000/flag_resources/img/stateflags/ca_flag.png "width="140px" ></a></div>`)[0];
            popup_06c848e5f7ca42bba7065ae9ff68ee20.setContent(html_b5f321c503224018877f4beed72519b7);


        marker_46a50c3d66b5436ca0be32f1106ae8fc.bindPopup(popup_06c848e5f7ca42bba7065ae9ff68ee20)
        ;




            var marker_b3da611021d44e4b908818619c4bb108 = L.marker(
                [38.9979339, -105.55056699999999],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_e123d8a8939441cba0aa2767663310d6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b3da611021d44e4b908818619c4bb108.setIcon(icon_e123d8a8939441cba0aa2767663310d6);


        var popup_9a163c766d3343268db10ce2d6b94811 = L.popup({"maxWidth": "100%"});


            var html_651fe53c8d9845bf8136b26d4d30b8a3 = $(`<div id="html_651fe53c8d9845bf8136b26d4d30b8a3" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/co_flag.png">Colorado<img src="http://localhost:8000/flag_resources/img/stateflags/co_flag.png "width="140px" ></a></div>`)[0];
            popup_9a163c766d3343268db10ce2d6b94811.setContent(html_651fe53c8d9845bf8136b26d4d30b8a3);


        marker_b3da611021d44e4b908818619c4bb108.bindPopup(popup_9a163c766d3343268db10ce2d6b94811)
        ;




            var marker_f8af5e812a784fbe8b65e77dfd7c1353 = L.marker(
                [41.518783500000005, -72.75750699999999],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_53250dc557eb48729a046c89bb83a8fb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f8af5e812a784fbe8b65e77dfd7c1353.setIcon(icon_53250dc557eb48729a046c89bb83a8fb);


        var popup_9f210830ec05405c96e9d68c72bf53fe = L.popup({"maxWidth": "100%"});


            var html_cea8c839e27748d2a807e74510e3592e = $(`<div id="html_cea8c839e27748d2a807e74510e3592e" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ct_flag.png">Connecticut<img src="http://localhost:8000/flag_resources/img/stateflags/ct_flag.png "width="140px" ></a></div>`)[0];
            popup_9f210830ec05405c96e9d68c72bf53fe.setContent(html_cea8c839e27748d2a807e74510e3592e);


        marker_f8af5e812a784fbe8b65e77dfd7c1353.bindPopup(popup_9f210830ec05405c96e9d68c72bf53fe)
        ;




            var marker_23727ee29c914088ae5a5b754542f8b8 = L.marker(
                [39.145251, -75.41892059999999],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_ef1d43cd524d496c85dc2f20b2da1052 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_23727ee29c914088ae5a5b754542f8b8.setIcon(icon_ef1d43cd524d496c85dc2f20b2da1052);


        var popup_2ac2143f23504e71a42053df466ab1e7 = L.popup({"maxWidth": "100%"});


            var html_4cb3e50aa0e94179b9384c73bf6023ef = $(`<div id="html_4cb3e50aa0e94179b9384c73bf6023ef" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/de_flag.png">Delaware<img src="http://localhost:8000/flag_resources/img/stateflags/de_flag.png "width="140px" ></a></div>`)[0];
            popup_2ac2143f23504e71a42053df466ab1e7.setContent(html_4cb3e50aa0e94179b9384c73bf6023ef);


        marker_23727ee29c914088ae5a5b754542f8b8.bindPopup(popup_2ac2143f23504e71a42053df466ab1e7)
        ;




            var marker_cfd8612549fd451b92fcc4f153a9883a = L.marker(
                [38.899348700000004, -77.0145666],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_e4cd2e35b55547a2b1c5966ba5300227 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cfd8612549fd451b92fcc4f153a9883a.setIcon(icon_e4cd2e35b55547a2b1c5966ba5300227);


        var popup_e4d448f61ec947d5b24ce7c8d179a15a = L.popup({"maxWidth": "100%"});


            var html_2db9526409ac435bb14be3f496b8ac48 = $(`<div id="html_2db9526409ac435bb14be3f496b8ac48" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/dc_flag.png">District of Columbia<img src="http://localhost:8000/flag_resources/img/stateflags/dc_flag.png "width="140px" ></a></div>`)[0];
            popup_e4d448f61ec947d5b24ce7c8d179a15a.setContent(html_2db9526409ac435bb14be3f496b8ac48);


        marker_cfd8612549fd451b92fcc4f153a9883a.bindPopup(popup_e4d448f61ec947d5b24ce7c8d179a15a)
        ;




            var marker_9b51eea63d3e459096c8902f6ac1806b = L.marker(
                [27.9757279, -83.8330166],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_98321b4d299c4b90ab4c61d3bd9de129 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9b51eea63d3e459096c8902f6ac1806b.setIcon(icon_98321b4d299c4b90ab4c61d3bd9de129);


        var popup_332d0b1dbfd447f9aede7b76e9655c8f = L.popup({"maxWidth": "100%"});


            var html_47119aa49b9f40a2ae1d9ccda391793c = $(`<div id="html_47119aa49b9f40a2ae1d9ccda391793c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/fl_flag.png">Florida<img src="http://localhost:8000/flag_resources/img/stateflags/fl_flag.png "width="140px" ></a></div>`)[0];
            popup_332d0b1dbfd447f9aede7b76e9655c8f.setContent(html_47119aa49b9f40a2ae1d9ccda391793c);


        marker_9b51eea63d3e459096c8902f6ac1806b.bindPopup(popup_332d0b1dbfd447f9aede7b76e9655c8f)
        ;




            var marker_0dd0f8ead9044c29a9962808ed06a05d = L.marker(
                [32.6781248, -83.22297569999999],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_a46a165e23c2493488934b4a7f625a05 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0dd0f8ead9044c29a9962808ed06a05d.setIcon(icon_a46a165e23c2493488934b4a7f625a05);


        var popup_72f50e09aec348f691f807b7373d523c = L.popup({"maxWidth": "100%"});


            var html_a0620b412f634e3ab775d9ce260457af = $(`<div id="html_a0620b412f634e3ab775d9ce260457af" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ga_flag.png">Georgia<img src="http://localhost:8000/flag_resources/img/stateflags/ga_flag.png "width="140px" ></a></div>`)[0];
            popup_72f50e09aec348f691f807b7373d523c.setContent(html_a0620b412f634e3ab775d9ce260457af);


        marker_0dd0f8ead9044c29a9962808ed06a05d.bindPopup(popup_72f50e09aec348f691f807b7373d523c)
        ;




            var marker_c1af5510865a451b9e363efea1dc2ef5 = L.marker(
                [20.46, -157.505],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_47c47040e6f14d1daf9ce3d9ea0a76de = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c1af5510865a451b9e363efea1dc2ef5.setIcon(icon_47c47040e6f14d1daf9ce3d9ea0a76de);


        var popup_d4a72c7d9a7343f9b858c79b7527a589 = L.popup({"maxWidth": "100%"});


            var html_9f4f894327d1421c9c529c227d89ed51 = $(`<div id="html_9f4f894327d1421c9c529c227d89ed51" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/hi_flag.png">Hawaii<img src="http://localhost:8000/flag_resources/img/stateflags/hi_flag.png "width="140px" ></a></div>`)[0];
            popup_d4a72c7d9a7343f9b858c79b7527a589.setContent(html_9f4f894327d1421c9c529c227d89ed51);


        marker_c1af5510865a451b9e363efea1dc2ef5.bindPopup(popup_d4a72c7d9a7343f9b858c79b7527a589)
        ;




            var marker_1841667d5ab34c16896aead6c18318cd = L.marker(
                [45.4945756, -114.1424303],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_17bd3c6239344a64b8fb07324a1b5b08 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1841667d5ab34c16896aead6c18318cd.setIcon(icon_17bd3c6239344a64b8fb07324a1b5b08);


        var popup_1fa88a8068ee40bc8d3ce360231aaf21 = L.popup({"maxWidth": "100%"});


            var html_f3cae41af90e4a71816bca75041830c3 = $(`<div id="html_f3cae41af90e4a71816bca75041830c3" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/id_flag.png">Idaho<img src="http://localhost:8000/flag_resources/img/stateflags/id_flag.png "width="140px" ></a></div>`)[0];
            popup_1fa88a8068ee40bc8d3ce360231aaf21.setContent(html_f3cae41af90e4a71816bca75041830c3);


        marker_1841667d5ab34c16896aead6c18318cd.bindPopup(popup_1fa88a8068ee40bc8d3ce360231aaf21)
        ;




            var marker_3d02976bcbc94f5fa29d8e5bd4115584 = L.marker(
                [39.739318, -89.504139],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_e4cb751d39544e808d5321a2eb51326d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3d02976bcbc94f5fa29d8e5bd4115584.setIcon(icon_e4cb751d39544e808d5321a2eb51326d);


        var popup_5904b86ed1674085a6487d412d3de763 = L.popup({"maxWidth": "100%"});


            var html_b7c31cd06ad04cec830b3e442e2c6a72 = $(`<div id="html_b7c31cd06ad04cec830b3e442e2c6a72" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/il_flag.png">Illinois<img src="http://localhost:8000/flag_resources/img/stateflags/il_flag.png "width="140px" ></a></div>`)[0];
            popup_5904b86ed1674085a6487d412d3de763.setContent(html_b7c31cd06ad04cec830b3e442e2c6a72);


        marker_3d02976bcbc94f5fa29d8e5bd4115584.bindPopup(popup_5904b86ed1674085a6487d412d3de763)
        ;




            var marker_c1c28d78911649b2955514ba55679ef9 = L.marker(
                [39.7662195, -86.441277],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_8e30ae626c7c45c196e675571b55be2c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c1c28d78911649b2955514ba55679ef9.setIcon(icon_8e30ae626c7c45c196e675571b55be2c);


        var popup_628fc20f40644dcbb65177b5ff5fcd61 = L.popup({"maxWidth": "100%"});


            var html_69067d86e5b8435ab704d401718fe31d = $(`<div id="html_69067d86e5b8435ab704d401718fe31d" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/in_flag.png">Indiana<img src="http://localhost:8000/flag_resources/img/stateflags/in_flag.png "width="140px" ></a></div>`)[0];
            popup_628fc20f40644dcbb65177b5ff5fcd61.setContent(html_69067d86e5b8435ab704d401718fe31d);


        marker_c1c28d78911649b2955514ba55679ef9.bindPopup(popup_628fc20f40644dcbb65177b5ff5fcd61)
        ;




            var marker_9c889878d94d4b79a09fe150650db8c8 = L.marker(
                [41.9383166, -93.389798],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_30c6fe9ce3424147a8089fd5ecf2150a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9c889878d94d4b79a09fe150650db8c8.setIcon(icon_30c6fe9ce3424147a8089fd5ecf2150a);


        var popup_ac95f4bfe0254b09b9334486320467e0 = L.popup({"maxWidth": "100%"});


            var html_5cb4edfce58f48bd9f8886adbf933592 = $(`<div id="html_5cb4edfce58f48bd9f8886adbf933592" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ia_flag.png">Iowa<img src="http://localhost:8000/flag_resources/img/stateflags/ia_flag.png "width="140px" ></a></div>`)[0];
            popup_ac95f4bfe0254b09b9334486320467e0.setContent(html_5cb4edfce58f48bd9f8886adbf933592);


        marker_9c889878d94d4b79a09fe150650db8c8.bindPopup(popup_ac95f4bfe0254b09b9334486320467e0)
        ;




            var marker_b6ba50217e4c466a9e41fe504e0162d8 = L.marker(
                [38.4987789, -98.32007790000002],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_c9fdafe3db8d435e9609e38d13bf1549 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b6ba50217e4c466a9e41fe504e0162d8.setIcon(icon_c9fdafe3db8d435e9609e38d13bf1549);


        var popup_5d19cc68810940b482feb01aa6c17787 = L.popup({"maxWidth": "100%"});


            var html_2f1adf8c567742b5a06b6b56c2e6cc63 = $(`<div id="html_2f1adf8c567742b5a06b6b56c2e6cc63" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ks_flag.png">Kansas<img src="http://localhost:8000/flag_resources/img/stateflags/ks_flag.png "width="140px" ></a></div>`)[0];
            popup_5d19cc68810940b482feb01aa6c17787.setContent(html_2f1adf8c567742b5a06b6b56c2e6cc63);


        marker_b6ba50217e4c466a9e41fe504e0162d8.bindPopup(popup_5d19cc68810940b482feb01aa6c17787)
        ;




            var marker_993b23d5598c4e0d8f705bfb6e8c7b52 = L.marker(
                [37.8222935, -85.76823990000001],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_0631c127e23f45eaae55c90db5309578 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_993b23d5598c4e0d8f705bfb6e8c7b52.setIcon(icon_0631c127e23f45eaae55c90db5309578);


        var popup_133f4b1d2dc44bee874075fe7110c181 = L.popup({"maxWidth": "100%"});


            var html_64836ca7179e4ec6b8361e8789ce9fb7 = $(`<div id="html_64836ca7179e4ec6b8361e8789ce9fb7" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ky_flag.png">Kentucky<img src="http://localhost:8000/flag_resources/img/stateflags/ky_flag.png "width="140px" ></a></div>`)[0];
            popup_133f4b1d2dc44bee874075fe7110c181.setContent(html_64836ca7179e4ec6b8361e8789ce9fb7);


        marker_993b23d5598c4e0d8f705bfb6e8c7b52.bindPopup(popup_133f4b1d2dc44bee874075fe7110c181)
        ;




            var marker_b59d428e14c24baabcec66b56f7014b0 = L.marker(
                [30.9733766, -91.42990970000001],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_c6ef863c4a23496e84fcc0e540441b51 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b59d428e14c24baabcec66b56f7014b0.setIcon(icon_c6ef863c4a23496e84fcc0e540441b51);


        var popup_18185a39ba8446b9bfb2472bf7771db5 = L.popup({"maxWidth": "100%"});


            var html_b8eb15c859684c6ba79137def040d4f7 = $(`<div id="html_b8eb15c859684c6ba79137def040d4f7" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/la_flag.png">Louisiana<img src="http://localhost:8000/flag_resources/img/stateflags/la_flag.png "width="140px" ></a></div>`)[0];
            popup_18185a39ba8446b9bfb2472bf7771db5.setContent(html_b8eb15c859684c6ba79137def040d4f7);


        marker_b59d428e14c24baabcec66b56f7014b0.bindPopup(popup_18185a39ba8446b9bfb2472bf7771db5)
        ;




            var marker_832017e2a2634fd5af1c8db1b34fdab8 = L.marker(
                [45.2185133, -69.0148656],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_4e8fcf5111e04e969a57f9dff34c2cb3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_832017e2a2634fd5af1c8db1b34fdab8.setIcon(icon_4e8fcf5111e04e969a57f9dff34c2cb3);


        var popup_ebea10a34ae64d6abaf15bfb02fc064d = L.popup({"maxWidth": "100%"});


            var html_16d906c66db9401c958c4eccb5b9ac72 = $(`<div id="html_16d906c66db9401c958c4eccb5b9ac72" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/me_flag.png">Maine<img src="http://localhost:8000/flag_resources/img/stateflags/me_flag.png "width="140px" ></a></div>`)[0];
            popup_ebea10a34ae64d6abaf15bfb02fc064d.setContent(html_16d906c66db9401c958c4eccb5b9ac72);


        marker_832017e2a2634fd5af1c8db1b34fdab8.bindPopup(popup_ebea10a34ae64d6abaf15bfb02fc064d)
        ;




            var marker_42012bc1715442f59d683d2fdd93a400 = L.marker(
                [38.806352399999994, -77.2684162],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_91dd8ac42c194dbaaf4eb1eaaee935d1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_42012bc1715442f59d683d2fdd93a400.setIcon(icon_91dd8ac42c194dbaaf4eb1eaaee935d1);


        var popup_8a5e616eeb8e4d82b2c911860860e580 = L.popup({"maxWidth": "100%"});


            var html_4157a920456046c4aeb4355dc05ff480 = $(`<div id="html_4157a920456046c4aeb4355dc05ff480" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/md_flag.png">Maryland<img src="http://localhost:8000/flag_resources/img/stateflags/md_flag.png "width="140px" ></a></div>`)[0];
            popup_8a5e616eeb8e4d82b2c911860860e580.setContent(html_4157a920456046c4aeb4355dc05ff480);


        marker_42012bc1715442f59d683d2fdd93a400.bindPopup(popup_8a5e616eeb8e4d82b2c911860860e580)
        ;




            var marker_3806ec7a016248489562960981b29c85 = L.marker(
                [42.062939799999995, -71.718067],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_8c4ac246784341c5b1526fd9be8785c5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3806ec7a016248489562960981b29c85.setIcon(icon_8c4ac246784341c5b1526fd9be8785c5);


        var popup_1cb1e0cc893647a4a74409c4805fb348 = L.popup({"maxWidth": "100%"});


            var html_6fd27817edc4493f80833b641348b485 = $(`<div id="html_6fd27817edc4493f80833b641348b485" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ma_flag.png">Massachusetts<img src="http://localhost:8000/flag_resources/img/stateflags/ma_flag.png "width="140px" ></a></div>`)[0];
            popup_1cb1e0cc893647a4a74409c4805fb348.setContent(html_6fd27817edc4493f80833b641348b485);


        marker_3806ec7a016248489562960981b29c85.bindPopup(popup_1cb1e0cc893647a4a74409c4805fb348)
        ;




            var marker_80fb48b9e99c42be981eabd41a1f4a37 = L.marker(
                [44.9435598, -86.41580490000001],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_b5f57fa6ad3f476ca3640e8de96cc187 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_80fb48b9e99c42be981eabd41a1f4a37.setIcon(icon_b5f57fa6ad3f476ca3640e8de96cc187);


        var popup_d2cd4f14d84c41fe80d14ce529407c4a = L.popup({"maxWidth": "100%"});


            var html_21b8e62b5cb84bb6ae7f2e7ac3df63a9 = $(`<div id="html_21b8e62b5cb84bb6ae7f2e7ac3df63a9" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/mi_flag.png">Michigan<img src="http://localhost:8000/flag_resources/img/stateflags/mi_flag.png "width="140px" ></a></div>`)[0];
            popup_d2cd4f14d84c41fe80d14ce529407c4a.setContent(html_21b8e62b5cb84bb6ae7f2e7ac3df63a9);


        marker_80fb48b9e99c42be981eabd41a1f4a37.bindPopup(popup_d2cd4f14d84c41fe80d14ce529407c4a)
        ;




            var marker_67f295d58af346abbd7402536819613f = L.marker(
                [46.4418595, -93.3655146],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_6e09260440434eefbed601539bdd306b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_67f295d58af346abbd7402536819613f.setIcon(icon_6e09260440434eefbed601539bdd306b);


        var popup_f6f4ab8a651649348421ae28f27b36ec = L.popup({"maxWidth": "100%"});


            var html_99e51b3fd69c4b9586c5b3167ae5bf4c = $(`<div id="html_99e51b3fd69c4b9586c5b3167ae5bf4c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/mn_flag.png">Minnesota<img src="http://localhost:8000/flag_resources/img/stateflags/mn_flag.png "width="140px" ></a></div>`)[0];
            popup_f6f4ab8a651649348421ae28f27b36ec.setContent(html_99e51b3fd69c4b9586c5b3167ae5bf4c);


        marker_67f295d58af346abbd7402536819613f.bindPopup(popup_f6f4ab8a651649348421ae28f27b36ec)
        ;




            var marker_f5428a6d9ca141ddb1bf868868aaf034 = L.marker(
                [32.5851062, -89.8772196],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_870a2dde61804813b2837efb5b30bc7c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f5428a6d9ca141ddb1bf868868aaf034.setIcon(icon_870a2dde61804813b2837efb5b30bc7c);


        var popup_86359d05a76e44dda188e4c1a0eea50a = L.popup({"maxWidth": "100%"});


            var html_2b12bf109b76468f8bc88a862ca8642c = $(`<div id="html_2b12bf109b76468f8bc88a862ca8642c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ms_flag.png">Mississippi<img src="http://localhost:8000/flag_resources/img/stateflags/ms_flag.png "width="140px" ></a></div>`)[0];
            popup_86359d05a76e44dda188e4c1a0eea50a.setContent(html_2b12bf109b76468f8bc88a862ca8642c);


        marker_f5428a6d9ca141ddb1bf868868aaf034.bindPopup(popup_86359d05a76e44dda188e4c1a0eea50a)
        ;




            var marker_61949ced58534f2da2f91502a0de2d0f = L.marker(
                [38.3046615, -92.437099],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_f7208d8e034f40cfbd8708cd4bce7406 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_61949ced58534f2da2f91502a0de2d0f.setIcon(icon_f7208d8e034f40cfbd8708cd4bce7406);


        var popup_a6e8fe9367864c5a8492b665107c93fa = L.popup({"maxWidth": "100%"});


            var html_4f8b5bdb312f4abe8915dce87beb330f = $(`<div id="html_4f8b5bdb312f4abe8915dce87beb330f" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/mo_flag.png">Missouri<img src="http://localhost:8000/flag_resources/img/stateflags/mo_flag.png "width="140px" ></a></div>`)[0];
            popup_a6e8fe9367864c5a8492b665107c93fa.setContent(html_4f8b5bdb312f4abe8915dce87beb330f);


        marker_61949ced58534f2da2f91502a0de2d0f.bindPopup(popup_a6e8fe9367864c5a8492b665107c93fa)
        ;




            var marker_9decdd198b8f4b65a84be45a6c0c58d1 = L.marker(
                [46.6797995, -110.04478300000001],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_e258f71379a54edabb1e1bfbdc050b81 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9decdd198b8f4b65a84be45a6c0c58d1.setIcon(icon_e258f71379a54edabb1e1bfbdc050b81);


        var popup_c4508773fcd34891b3bf4f0be1bcbf27 = L.popup({"maxWidth": "100%"});


            var html_7b6d50d629604c1cbceddc0533166867 = $(`<div id="html_7b6d50d629604c1cbceddc0533166867" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/mt_flag.png">Montana<img src="http://localhost:8000/flag_resources/img/stateflags/mt_flag.png "width="140px" ></a></div>`)[0];
            popup_c4508773fcd34891b3bf4f0be1bcbf27.setContent(html_7b6d50d629604c1cbceddc0533166867);


        marker_9decdd198b8f4b65a84be45a6c0c58d1.bindPopup(popup_c4508773fcd34891b3bf4f0be1bcbf27)
        ;




            var marker_97bc88934c134b4dbbb724e031c884d9 = L.marker(
                [41.5008195, -99.680902],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_61df41b728b74d9fa51d073ed28f9578 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_97bc88934c134b4dbbb724e031c884d9.setIcon(icon_61df41b728b74d9fa51d073ed28f9578);


        var popup_d5e056c4f78a48da9e31147b11210409 = L.popup({"maxWidth": "100%"});


            var html_533a2d075bd04990a1646db0784c56a5 = $(`<div id="html_533a2d075bd04990a1646db0784c56a5" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ne_flag.png">Nebraska<img src="http://localhost:8000/flag_resources/img/stateflags/ne_flag.png "width="140px" ></a></div>`)[0];
            popup_d5e056c4f78a48da9e31147b11210409.setContent(html_533a2d075bd04990a1646db0784c56a5);


        marker_97bc88934c134b4dbbb724e031c884d9.bindPopup(popup_d5e056c4f78a48da9e31147b11210409)
        ;




            var marker_dfee48f6ab304e01b6700e1e2c05880a = L.marker(
                [38.502032, -117.0230604],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_d60914b9aadd436aa73c78d2c7b1ac74 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_dfee48f6ab304e01b6700e1e2c05880a.setIcon(icon_d60914b9aadd436aa73c78d2c7b1ac74);


        var popup_81bd66ca4d48464aa8f9ee40a012281d = L.popup({"maxWidth": "100%"});


            var html_01cade75be9a4bc5a4be9b6814a04231 = $(`<div id="html_01cade75be9a4bc5a4be9b6814a04231" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/nv_flag.png">Nevada<img src="http://localhost:8000/flag_resources/img/stateflags/nv_flag.png "width="140px" ></a></div>`)[0];
            popup_81bd66ca4d48464aa8f9ee40a012281d.setContent(html_01cade75be9a4bc5a4be9b6814a04231);


        marker_dfee48f6ab304e01b6700e1e2c05880a.bindPopup(popup_81bd66ca4d48464aa8f9ee40a012281d)
        ;




            var marker_a280fd00be004998ab5ed627db996c01 = L.marker(
                [44.00123060000001, -71.57992309999999],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_9f518392ac85434197d2e5f77a74b723 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a280fd00be004998ab5ed627db996c01.setIcon(icon_9f518392ac85434197d2e5f77a74b723);


        var popup_3e22fac8445a412d973e524269a88e35 = L.popup({"maxWidth": "100%"});


            var html_0a3814a39a434296ad05839066aca83c = $(`<div id="html_0a3814a39a434296ad05839066aca83c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/nh_flag.png">New Hampshire<img src="http://localhost:8000/flag_resources/img/stateflags/nh_flag.png "width="140px" ></a></div>`)[0];
            popup_3e22fac8445a412d973e524269a88e35.setContent(html_0a3814a39a434296ad05839066aca83c);


        marker_a280fd00be004998ab5ed627db996c01.bindPopup(popup_3e22fac8445a412d973e524269a88e35)
        ;




            var marker_6e855a190a00491f8af9b8cd80c66281 = L.marker(
                [40.1430058, -74.7311156],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_7bc3295fe6324cd2bf1e3405799b3960 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6e855a190a00491f8af9b8cd80c66281.setIcon(icon_7bc3295fe6324cd2bf1e3405799b3960);


        var popup_8dbd1efd14cc4a5495391320f21bb8d7 = L.popup({"maxWidth": "100%"});


            var html_e4c250e7cd114265b4a210ec137aee9d = $(`<div id="html_e4c250e7cd114265b4a210ec137aee9d" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/nj_flag.png">New Jersey<img src="http://localhost:8000/flag_resources/img/stateflags/nj_flag.png "width="140px" ></a></div>`)[0];
            popup_8dbd1efd14cc4a5495391320f21bb8d7.setContent(html_e4c250e7cd114265b4a210ec137aee9d);


        marker_6e855a190a00491f8af9b8cd80c66281.bindPopup(popup_8dbd1efd14cc4a5495391320f21bb8d7)
        ;




            var marker_41ff701c9c774338a13b960e6247933a = L.marker(
                [34.1662325, -106.02606850000001],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_a12911bee0db445ca2adc0cf78d58123 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_41ff701c9c774338a13b960e6247933a.setIcon(icon_a12911bee0db445ca2adc0cf78d58123);


        var popup_b98637a3f8574dd3acaec17a942fdb5b = L.popup({"maxWidth": "100%"});


            var html_2e4635aa2d84487580fddad6cb5b8bdf = $(`<div id="html_2e4635aa2d84487580fddad6cb5b8bdf" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/nm_flag.png">New Mexico<img src="http://localhost:8000/flag_resources/img/stateflags/nm_flag.png "width="140px" ></a></div>`)[0];
            popup_b98637a3f8574dd3acaec17a942fdb5b.setContent(html_2e4635aa2d84487580fddad6cb5b8bdf);


        marker_41ff701c9c774338a13b960e6247933a.bindPopup(popup_b98637a3f8574dd3acaec17a942fdb5b)
        ;




            var marker_5aafd6a74e484338bf5a37d47f8e999b = L.marker(
                [40.7056258, -73.97968],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_eea37fa3b7be4f969953b4a6b3d2c7fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5aafd6a74e484338bf5a37d47f8e999b.setIcon(icon_eea37fa3b7be4f969953b4a6b3d2c7fa);


        var popup_a71329b319d9485d827c74942253cacc = L.popup({"maxWidth": "100%"});


            var html_d2a3d22bfb3b46a1985be77895e26866 = $(`<div id="html_d2a3d22bfb3b46a1985be77895e26866" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ny_flag.png">New York<img src="http://localhost:8000/flag_resources/img/stateflags/ny_flag.png "width="140px" ></a></div>`)[0];
            popup_a71329b319d9485d827c74942253cacc.setContent(html_d2a3d22bfb3b46a1985be77895e26866);


        marker_5aafd6a74e484338bf5a37d47f8e999b.bindPopup(popup_a71329b319d9485d827c74942253cacc)
        ;




            var marker_0eb40129fbce402f8c481fced7cbf2d6 = L.marker(
                [35.2145629, -79.8912675],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_435327c2c52942b080700442a3cc4be3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_0eb40129fbce402f8c481fced7cbf2d6.setIcon(icon_435327c2c52942b080700442a3cc4be3);


        var popup_ad0c3a51beda47a49922a44b16a73fbf = L.popup({"maxWidth": "100%"});


            var html_1fc3914bb08340edad86ba8a4bb9d6bb = $(`<div id="html_1fc3914bb08340edad86ba8a4bb9d6bb" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/nc_flag.png">North Carolina<img src="http://localhost:8000/flag_resources/img/stateflags/nc_flag.png "width="140px" ></a></div>`)[0];
            popup_ad0c3a51beda47a49922a44b16a73fbf.setContent(html_1fc3914bb08340edad86ba8a4bb9d6bb);


        marker_0eb40129fbce402f8c481fced7cbf2d6.bindPopup(popup_ad0c3a51beda47a49922a44b16a73fbf)
        ;




            var marker_be3abacc8f4b47f1b96fbcf79a94c42e = L.marker(
                [47.467881899999995, -100.3022655],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_70fbdd0cca87488aa4046d937655a6da = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_be3abacc8f4b47f1b96fbcf79a94c42e.setIcon(icon_70fbdd0cca87488aa4046d937655a6da);


        var popup_bf8e4df07edf4d3d8dcd3d9576e9017c = L.popup({"maxWidth": "100%"});


            var html_e0d532277b54415ab399acf38c6f568b = $(`<div id="html_e0d532277b54415ab399acf38c6f568b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/nd_flag.png">North Dakota<img src="http://localhost:8000/flag_resources/img/stateflags/nd_flag.png "width="140px" ></a></div>`)[0];
            popup_bf8e4df07edf4d3d8dcd3d9576e9017c.setContent(html_e0d532277b54415ab399acf38c6f568b);


        marker_be3abacc8f4b47f1b96fbcf79a94c42e.bindPopup(popup_bf8e4df07edf4d3d8dcd3d9576e9017c)
        ;




            var marker_8f244f68285a45cbb79b8a2a00f8824a = L.marker(
                [40.1903624, -82.6692525],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_bc4e3771bb3d45afb974411de06912b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_8f244f68285a45cbb79b8a2a00f8824a.setIcon(icon_bc4e3771bb3d45afb974411de06912b5);


        var popup_f9cf8bb90e3a4261808386fa500aa0fb = L.popup({"maxWidth": "100%"});


            var html_ec2224be567b49a1b6e034b4bd4c9801 = $(`<div id="html_ec2224be567b49a1b6e034b4bd4c9801" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/oh_flag.png">Ohio<img src="http://localhost:8000/flag_resources/img/stateflags/oh_flag.png "width="140px" ></a></div>`)[0];
            popup_f9cf8bb90e3a4261808386fa500aa0fb.setContent(html_ec2224be567b49a1b6e034b4bd4c9801);


        marker_8f244f68285a45cbb79b8a2a00f8824a.bindPopup(popup_f9cf8bb90e3a4261808386fa500aa0fb)
        ;




            var marker_b5bffa707c1a4991a4a7fc0fcb93ba92 = L.marker(
                [35.309765399999996, -98.71655849999999],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_648cf22c8fc9464baf7875579016b025 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b5bffa707c1a4991a4a7fc0fcb93ba92.setIcon(icon_648cf22c8fc9464baf7875579016b025);


        var popup_b12fc7606c7d4179b2617a638c03b167 = L.popup({"maxWidth": "100%"});


            var html_34c3cfff424e4935ba2d10d45b06d3d3 = $(`<div id="html_34c3cfff424e4935ba2d10d45b06d3d3" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ok_flag.png">Oklahoma<img src="http://localhost:8000/flag_resources/img/stateflags/ok_flag.png "width="140px" ></a></div>`)[0];
            popup_b12fc7606c7d4179b2617a638c03b167.setContent(html_34c3cfff424e4935ba2d10d45b06d3d3);


        marker_b5bffa707c1a4991a4a7fc0fcb93ba92.bindPopup(popup_b12fc7606c7d4179b2617a638c03b167)
        ;




            var marker_ffd775d6f2b743d5bd96905c1a26b12f = L.marker(
                [44.1419049, -120.5380993],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_1638f30a2ec54dd6bdee0a36c35a3bd9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ffd775d6f2b743d5bd96905c1a26b12f.setIcon(icon_1638f30a2ec54dd6bdee0a36c35a3bd9);


        var popup_f792a325a7354ef787c3780e4813f525 = L.popup({"maxWidth": "100%"});


            var html_74ec9bd4926c407f85a8603f34677783 = $(`<div id="html_74ec9bd4926c407f85a8603f34677783" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/or_flag.png">Oregon<img src="http://localhost:8000/flag_resources/img/stateflags/or_flag.png "width="140px" ></a></div>`)[0];
            popup_f792a325a7354ef787c3780e4813f525.setContent(html_74ec9bd4926c407f85a8603f34677783);


        marker_ffd775d6f2b743d5bd96905c1a26b12f.bindPopup(popup_f792a325a7354ef787c3780e4813f525)
        ;




            var marker_c922b1dce0e4480db37ad4d0520d942b = L.marker(
                [40.99459279999999, -77.6046984],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_d6affdef2993487dae3bda04a5542f39 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c922b1dce0e4480db37ad4d0520d942b.setIcon(icon_d6affdef2993487dae3bda04a5542f39);


        var popup_bfc4e7ec9a9a4b74b13cd8a5e5accfa7 = L.popup({"maxWidth": "100%"});


            var html_8437ae4ffe064173b39889605f9b9d2c = $(`<div id="html_8437ae4ffe064173b39889605f9b9d2c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/pa_flag.png">Pennsylvania<img src="http://localhost:8000/flag_resources/img/stateflags/pa_flag.png "width="140px" ></a></div>`)[0];
            popup_bfc4e7ec9a9a4b74b13cd8a5e5accfa7.setContent(html_8437ae4ffe064173b39889605f9b9d2c);


        marker_c922b1dce0e4480db37ad4d0520d942b.bindPopup(popup_bfc4e7ec9a9a4b74b13cd8a5e5accfa7)
        ;




            var marker_b09bd678370948af8973045251a1ca5b = L.marker(
                [41.5827282, -71.5064508],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_f268da508f384b0ead506bd3b802ae48 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b09bd678370948af8973045251a1ca5b.setIcon(icon_f268da508f384b0ead506bd3b802ae48);


        var popup_9753464ce8884dd58bf1bb757731851b = L.popup({"maxWidth": "100%"});


            var html_b27ac32df9a144d087e3ba1ec1ba268f = $(`<div id="html_b27ac32df9a144d087e3ba1ec1ba268f" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ri_flag.png">Rhode Island<img src="http://localhost:8000/flag_resources/img/stateflags/ri_flag.png "width="140px" ></a></div>`)[0];
            popup_9753464ce8884dd58bf1bb757731851b.setContent(html_b27ac32df9a144d087e3ba1ec1ba268f);


        marker_b09bd678370948af8973045251a1ca5b.bindPopup(popup_9753464ce8884dd58bf1bb757731851b)
        ;




            var marker_94012018034042728a964c19c686f8d9 = L.marker(
                [33.62505, -80.9470381],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_4508110f7545491194ef6430c5c4cee4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_94012018034042728a964c19c686f8d9.setIcon(icon_4508110f7545491194ef6430c5c4cee4);


        var popup_c2cd4e00d59f4987bb7dcff766f3670b = L.popup({"maxWidth": "100%"});


            var html_aa7413e40ced4001a2e4bfb0bebcd983 = $(`<div id="html_aa7413e40ced4001a2e4bfb0bebcd983" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/sc_flag.png">South Carolina<img src="http://localhost:8000/flag_resources/img/stateflags/sc_flag.png "width="140px" ></a></div>`)[0];
            popup_c2cd4e00d59f4987bb7dcff766f3670b.setContent(html_aa7413e40ced4001a2e4bfb0bebcd983);


        marker_94012018034042728a964c19c686f8d9.bindPopup(popup_c2cd4e00d59f4987bb7dcff766f3670b)
        ;




            var marker_03a1b99a12a84c19acfb001cc1a1abb2 = L.marker(
                [44.2126995, -100.24716409999999],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_686b9d6343ab4cb1a9cf2e559b37df70 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_03a1b99a12a84c19acfb001cc1a1abb2.setIcon(icon_686b9d6343ab4cb1a9cf2e559b37df70);


        var popup_17377abb74244b45acaf5cc663b1a920 = L.popup({"maxWidth": "100%"});


            var html_20f72e4ae03f4848ab01516eab2571f7 = $(`<div id="html_20f72e4ae03f4848ab01516eab2571f7" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/sd_flag.png">South Dakota<img src="http://localhost:8000/flag_resources/img/stateflags/sd_flag.png "width="140px" ></a></div>`)[0];
            popup_17377abb74244b45acaf5cc663b1a920.setContent(html_20f72e4ae03f4848ab01516eab2571f7);


        marker_03a1b99a12a84c19acfb001cc1a1abb2.bindPopup(popup_17377abb74244b45acaf5cc663b1a920)
        ;




            var marker_25db57a56dac4521a46befe9cbf3da24 = L.marker(
                [35.830521000000005, -85.97859890000001],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_da3d10e269934069ac68d7b8e83c91ee = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_25db57a56dac4521a46befe9cbf3da24.setIcon(icon_da3d10e269934069ac68d7b8e83c91ee);


        var popup_6a3bd3a402bc4aac8de9fac871c0485f = L.popup({"maxWidth": "100%"});


            var html_c5a355a48b2746de87bde7de397639b2 = $(`<div id="html_c5a355a48b2746de87bde7de397639b2" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/tn_flag.png">Tennessee<img src="http://localhost:8000/flag_resources/img/stateflags/tn_flag.png "width="140px" ></a></div>`)[0];
            popup_6a3bd3a402bc4aac8de9fac871c0485f.setContent(html_c5a355a48b2746de87bde7de397639b2);


        marker_25db57a56dac4521a46befe9cbf3da24.bindPopup(popup_6a3bd3a402bc4aac8de9fac871c0485f)
        ;




            var marker_18d2c7ab3716461691cb85ffb9a9fbcb = L.marker(
                [31.1693363, -100.0768425],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_9d387a209b9844019523a2445cc0448a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_18d2c7ab3716461691cb85ffb9a9fbcb.setIcon(icon_9d387a209b9844019523a2445cc0448a);


        var popup_64fe16bef61c4a6fa4056f6ebf31300f = L.popup({"maxWidth": "100%"});


            var html_04d843a43ecd46f6beab99284994ca62 = $(`<div id="html_04d843a43ecd46f6beab99284994ca62" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/tx_flag.png">Texas<img src="http://localhost:8000/flag_resources/img/stateflags/tx_flag.png "width="140px" ></a></div>`)[0];
            popup_64fe16bef61c4a6fa4056f6ebf31300f.setContent(html_04d843a43ecd46f6beab99284994ca62);


        marker_18d2c7ab3716461691cb85ffb9a9fbcb.bindPopup(popup_64fe16bef61c4a6fa4056f6ebf31300f)
        ;




            var marker_27441d41afa340e5bb4bde4f2b35a928 = L.marker(
                [39.4997605, -111.547028],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_1d574a1ed841475ca50bbd92ae601489 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_27441d41afa340e5bb4bde4f2b35a928.setIcon(icon_1d574a1ed841475ca50bbd92ae601489);


        var popup_f76e127519304ab699507b4b1455ff71 = L.popup({"maxWidth": "100%"});


            var html_e5575bcd412c478380f3c00133005964 = $(`<div id="html_e5575bcd412c478380f3c00133005964" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/ut_flag.png">Utah<img src="http://localhost:8000/flag_resources/img/stateflags/ut_flag.png "width="140px" ></a></div>`)[0];
            popup_f76e127519304ab699507b4b1455ff71.setContent(html_e5575bcd412c478380f3c00133005964);


        marker_27441d41afa340e5bb4bde4f2b35a928.bindPopup(popup_f76e127519304ab699507b4b1455ff71)
        ;




            var marker_77e105315bc445f385ec117db15994ea = L.marker(
                [43.8717545, -72.4477828],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_056be95162404984bacd8daa3338e07a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_77e105315bc445f385ec117db15994ea.setIcon(icon_056be95162404984bacd8daa3338e07a);


        var popup_216f6737523b4596893a602ae7d32fd0 = L.popup({"maxWidth": "100%"});


            var html_19d123d89d124893a66e81c54545c25b = $(`<div id="html_19d123d89d124893a66e81c54545c25b" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/vt_flag.png">Vermont<img src="http://localhost:8000/flag_resources/img/stateflags/vt_flag.png "width="140px" ></a></div>`)[0];
            popup_216f6737523b4596893a602ae7d32fd0.setContent(html_19d123d89d124893a66e81c54545c25b);


        marker_77e105315bc445f385ec117db15994ea.bindPopup(popup_216f6737523b4596893a602ae7d32fd0)
        ;




            var marker_467c7d7b5dc24c1090af550f10def480 = L.marker(
                [38.0033855, -79.4587861],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_ea28e2f43c4a4aa29ea1cc4b04c1bd03 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_467c7d7b5dc24c1090af550f10def480.setIcon(icon_ea28e2f43c4a4aa29ea1cc4b04c1bd03);


        var popup_adaecf4316604a48bea1b0d5a2ac5f60 = L.popup({"maxWidth": "100%"});


            var html_2837cd7dae9046329f199be8fe7f0e8c = $(`<div id="html_2837cd7dae9046329f199be8fe7f0e8c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/va_flag.png">Virginia<img src="http://localhost:8000/flag_resources/img/stateflags/va_flag.png "width="140px" ></a></div>`)[0];
            popup_adaecf4316604a48bea1b0d5a2ac5f60.setContent(html_2837cd7dae9046329f199be8fe7f0e8c);


        marker_467c7d7b5dc24c1090af550f10def480.bindPopup(popup_adaecf4316604a48bea1b0d5a2ac5f60)
        ;




            var marker_51ca197cc86948379750a63b59113bf2 = L.marker(
                [38.899348700000004, -77.0145665],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_c6a7ce9cd79d40a5a2f204b13b421cf0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_51ca197cc86948379750a63b59113bf2.setIcon(icon_c6a7ce9cd79d40a5a2f204b13b421cf0);


        var popup_ff8b1c9bf04e438384282d8876bb1eab = L.popup({"maxWidth": "100%"});


            var html_ff0cd8fc99074f23a6186632134d5aef = $(`<div id="html_ff0cd8fc99074f23a6186632134d5aef" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/wa_flag.png">Washington<img src="http://localhost:8000/flag_resources/img/stateflags/wa_flag.png "width="140px" ></a></div>`)[0];
            popup_ff8b1c9bf04e438384282d8876bb1eab.setContent(html_ff0cd8fc99074f23a6186632134d5aef);


        marker_51ca197cc86948379750a63b59113bf2.bindPopup(popup_ff8b1c9bf04e438384282d8876bb1eab)
        ;




            var marker_e21ead75804d475cb10c710e762e8664 = L.marker(
                [38.920170500000005, -80.1816905],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_f5367a92c0b94c57bc6bb447899de1c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e21ead75804d475cb10c710e762e8664.setIcon(icon_f5367a92c0b94c57bc6bb447899de1c0);


        var popup_e30bb8f8416f4c77922c27e9b8b3602b = L.popup({"maxWidth": "100%"});


            var html_e466d297ff00448999d81aa54a3d3779 = $(`<div id="html_e466d297ff00448999d81aa54a3d3779" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/wv_flag.png">West Virginia<img src="http://localhost:8000/flag_resources/img/stateflags/wv_flag.png "width="140px" ></a></div>`)[0];
            popup_e30bb8f8416f4c77922c27e9b8b3602b.setContent(html_e466d297ff00448999d81aa54a3d3779);


        marker_e21ead75804d475cb10c710e762e8664.bindPopup(popup_e30bb8f8416f4c77922c27e9b8b3602b)
        ;




            var marker_d52bdec829f04eb59803515976f88338 = L.marker(
                [44.7862968, -89.82670490000001],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_2f5543d171634193a2471cbfc9fc4143 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d52bdec829f04eb59803515976f88338.setIcon(icon_2f5543d171634193a2471cbfc9fc4143);


        var popup_02265c5194274bb9aaffa3136d6ceb98 = L.popup({"maxWidth": "100%"});


            var html_792f2bd8c6ab499fa01e9e99cfad6adb = $(`<div id="html_792f2bd8c6ab499fa01e9e99cfad6adb" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/wi_flag.png">Wisconsin<img src="http://localhost:8000/flag_resources/img/stateflags/wi_flag.png "width="140px" ></a></div>`)[0];
            popup_02265c5194274bb9aaffa3136d6ceb98.setContent(html_792f2bd8c6ab499fa01e9e99cfad6adb);


        marker_d52bdec829f04eb59803515976f88338.bindPopup(popup_02265c5194274bb9aaffa3136d6ceb98)
        ;




            var marker_48d3d8a9b6e44e01a01e201e5937368b = L.marker(
                [43.000325, -107.5545669],
                {}
            ).addTo(map_5f5cfe065cbd4ed4b50b93162be9cb3d);


            var icon_4b6b005e04bd41b18a43014c6419e9f2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_48d3d8a9b6e44e01a01e201e5937368b.setIcon(icon_4b6b005e04bd41b18a43014c6419e9f2);


        var popup_e6fbb5e304fb471bbfa1b1c61b1627da = L.popup({"maxWidth": "100%"});


            var html_bccf61ec235a40f1be5c96e6c632194c = $(`<div id="html_bccf61ec235a40f1be5c96e6c632194c" style="width: 100.0%; height: 100.0%;"> <a href="http://localhost:8000/flag_resources/img/stateflags/wy_flag.png">Wyoming<img src="http://localhost:8000/flag_resources/img/stateflags/wy_flag.png "width="140px" ></a></div>`)[0];
            popup_e6fbb5e304fb471bbfa1b1c61b1627da.setContent(html_bccf61ec235a40f1be5c96e6c632194c);


        marker_48d3d8a9b6e44e01a01e201e5937368b.bindPopup(popup_e6fbb5e304fb471bbfa1b1c61b1627da)
        ;



</script>
