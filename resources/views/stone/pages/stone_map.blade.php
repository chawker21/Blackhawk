<!DOCTYPE html>
<head>    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    
        <script>
            L_NO_TOUCH = false;
            L_DISABLE_3D = false;
        </script>
    
    <style>html, body {width: 100%;height: 100%;margin: 0;padding: 0;}</style>
    <style>#map {position:absolute;top:0;bottom:0;right:0;left:0;}</style>
    <script src="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.6.0/dist/leaflet.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/python-visualization/folium/folium/templates/leaflet.awesome.rotate.min.css"/>
    
            <meta name="viewport" content="width=device-width,
                initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <style>
                #map_04d3c517583d488cabb5445a0c8720f2 {
                    position: relative;
                    width: 100.0%;
                    height: 100.0%;
                    left: 0.0%;
                    top: 0.0%;
                }
            </style>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.1.0/leaflet.markercluster.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.1.0/MarkerCluster.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.1.0/MarkerCluster.Default.css"/>
</head>
<body>    
    
            <div class="folium-map" id="map_04d3c517583d488cabb5445a0c8720f2" ></div>
        
</body>
<script>    
    
            var map_04d3c517583d488cabb5445a0c8720f2 = L.map(
                "map_04d3c517583d488cabb5445a0c8720f2",
                {
                    center: [40.5098, -111.873],
                    crs: L.CRS.EPSG3857,
                    zoom: 6,
                    zoomControl: true,
                    preferCanvas: false,
                }
            );

            

        
    
            var tile_layer_160adc18172243f09bfb0903b6528a0b = L.tileLayer(
                "https://api.mapbox.com/styles/v1/mapbox/dark-v9/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiY2hhd2tlcjIxIiwiYSI6ImNqOXgycWEybDdzYTEzM2xnNG01N2Y5d2UifQ.YMghCTUA1p131erg3_Ln_Q",
                {"attribution": "XXX Mapbox Attribution", "detectRetina": false, "maxNativeZoom": 18, "maxZoom": 18, "minZoom": 0, "noWrap": false, "opacity": 1, "subdomains": "abc", "tms": false}
            ).addTo(map_04d3c517583d488cabb5445a0c8720f2);
        
    
            var marker_cluster_6def46a40f84458ab5067c5ca15ebdfd = L.markerClusterGroup(
                {}
            );
            map_04d3c517583d488cabb5445a0c8720f2.addLayer(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var marker_772e7a1d806e4038be23c5a85264be24 = L.marker(
                [39.0322, -86.9824],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1afa2cf9842245a6bba849e82f699d1c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_772e7a1d806e4038be23c5a85264be24.setIcon(icon_1afa2cf9842245a6bba849e82f699d1c);
        
    
        var popup_f139383a3c6e41268c8dd701db4271de = L.popup({"maxWidth": "100%"});

        
            var html_dbdfd2548d504ee99b64b6b5ecfd0b06 = $(`<div id="html_dbdfd2548d504ee99b64b6b5ecfd0b06" style="width: 100.0%; height: 100.0%;">('39.0322', '-86.9824', 'Solomon', None, 'Stone', 'Jr', '1828')</div>`)[0];
            popup_f139383a3c6e41268c8dd701db4271de.setContent(html_dbdfd2548d504ee99b64b6b5ecfd0b06);
        

        marker_772e7a1d806e4038be23c5a85264be24.bindPopup(popup_f139383a3c6e41268c8dd701db4271de)
        ;

        
    
    
            var marker_879843319b1b4ba98aa712874b6a78b4 = L.marker(
                [39.0322, -86.9824],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_ba896323c3654f02a5143cd22b293794 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_879843319b1b4ba98aa712874b6a78b4.setIcon(icon_ba896323c3654f02a5143cd22b293794);
        
    
        var popup_75d3f867cc5b45b19bb14dcb217a25f7 = L.popup({"maxWidth": "100%"});

        
            var html_4e8c2bd4a75e4a4eb1bca5d645d960d0 = $(`<div id="html_4e8c2bd4a75e4a4eb1bca5d645d960d0" style="width: 100.0%; height: 100.0%;">('39.0322', '-86.9824', 'Susan', 'Elizabeth', 'Stone', None, '1832')</div>`)[0];
            popup_75d3f867cc5b45b19bb14dcb217a25f7.setContent(html_4e8c2bd4a75e4a4eb1bca5d645d960d0);
        

        marker_879843319b1b4ba98aa712874b6a78b4.bindPopup(popup_75d3f867cc5b45b19bb14dcb217a25f7)
        ;

        
    
    
            var marker_d39363ffdf744d98ae006ce5154a451d = L.marker(
                [39.0444, -95.3947],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_207fd003deab4c899caba90962b03597 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d39363ffdf744d98ae006ce5154a451d.setIcon(icon_207fd003deab4c899caba90962b03597);
        
    
        var popup_8c20efff84824c37b75e48ed3a33dc09 = L.popup({"maxWidth": "100%"});

        
            var html_c255e70a1b5d4383b2427020d896585e = $(`<div id="html_c255e70a1b5d4383b2427020d896585e" style="width: 100.0%; height: 100.0%;">('39.0444', '-95.3947', 'William', 'Franklin', 'Stone', None, '1879')</div>`)[0];
            popup_8c20efff84824c37b75e48ed3a33dc09.setContent(html_c255e70a1b5d4383b2427020d896585e);
        

        marker_d39363ffdf744d98ae006ce5154a451d.bindPopup(popup_8c20efff84824c37b75e48ed3a33dc09)
        ;

        
    
    
            var marker_2a17ab586cc04fc1a225e98f11275f67 = L.marker(
                [39.0444, -95.3947],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_58bfb78d9df34b69b70b0f45bc8fd5c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2a17ab586cc04fc1a225e98f11275f67.setIcon(icon_58bfb78d9df34b69b70b0f45bc8fd5c4);
        
    
        var popup_78f13f51d7bf431dad23f3fa66547fa4 = L.popup({"maxWidth": "100%"});

        
            var html_e431a2ce4baf47c4bdf2114251752dd1 = $(`<div id="html_e431a2ce4baf47c4bdf2114251752dd1" style="width: 100.0%; height: 100.0%;">('39.0444', '-95.3947', 'Rilla', 'Jane', 'Brittendall', None, '1876')</div>`)[0];
            popup_78f13f51d7bf431dad23f3fa66547fa4.setContent(html_e431a2ce4baf47c4bdf2114251752dd1);
        

        marker_2a17ab586cc04fc1a225e98f11275f67.bindPopup(popup_78f13f51d7bf431dad23f3fa66547fa4)
        ;

        
    
    
            var marker_2c9a2fc6db1945f48e9a0bc77d21871e = L.marker(
                [40.9686, -97.4973],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1e347723193b4fa4a2af0ff5e5ec5c1b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2c9a2fc6db1945f48e9a0bc77d21871e.setIcon(icon_1e347723193b4fa4a2af0ff5e5ec5c1b);
        
    
        var popup_457bf2526c6c41f9bf71a8475f72c4ad = L.popup({"maxWidth": "100%"});

        
            var html_17f7213db869454d9ecc075056bec0bc = $(`<div id="html_17f7213db869454d9ecc075056bec0bc" style="width: 100.0%; height: 100.0%;">('40.9686', '-97.4973', 'Zelia', 'Rebecca', 'Stone', None, '1882')</div>`)[0];
            popup_457bf2526c6c41f9bf71a8475f72c4ad.setContent(html_17f7213db869454d9ecc075056bec0bc);
        

        marker_2c9a2fc6db1945f48e9a0bc77d21871e.bindPopup(popup_457bf2526c6c41f9bf71a8475f72c4ad)
        ;

        
    
    
            var marker_9692c21415b1455db92e8a92b82d796d = L.marker(
                [38.4334, -85.1697],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_755dad0f5e1b445a93e16c77d7206e03 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9692c21415b1455db92e8a92b82d796d.setIcon(icon_755dad0f5e1b445a93e16c77d7206e03);
        
    
        var popup_ebde12fee50b4035a257a2dc368c27eb = L.popup({"maxWidth": "100%"});

        
            var html_951c3cac0d90452c9e2ef004fe832f20 = $(`<div id="html_951c3cac0d90452c9e2ef004fe832f20" style="width: 100.0%; height: 100.0%;">('38.4334', '-85.1697', 'William', 'Alexander', 'Cardwell', None, '1817')</div>`)[0];
            popup_ebde12fee50b4035a257a2dc368c27eb.setContent(html_951c3cac0d90452c9e2ef004fe832f20);
        

        marker_9692c21415b1455db92e8a92b82d796d.bindPopup(popup_ebde12fee50b4035a257a2dc368c27eb)
        ;

        
    
    
            var marker_478248b8166d48b6af45325f0ab6fcb2 = L.marker(
                [36.3743, -80.6771],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_e29e7ad7451b454fac9cbb0b8d04e9d5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_478248b8166d48b6af45325f0ab6fcb2.setIcon(icon_e29e7ad7451b454fac9cbb0b8d04e9d5);
        
    
        var popup_d2ad963a60d14342882bfbba39a13457 = L.popup({"maxWidth": "100%"});

        
            var html_9bac4cf123b54abd92f30b694d107510 = $(`<div id="html_9bac4cf123b54abd92f30b694d107510" style="width: 100.0%; height: 100.0%;">('36.3743', '-80.6771', 'Elizabeth', None, 'Stone', None, '1794')</div>`)[0];
            popup_d2ad963a60d14342882bfbba39a13457.setContent(html_9bac4cf123b54abd92f30b694d107510);
        

        marker_478248b8166d48b6af45325f0ab6fcb2.bindPopup(popup_d2ad963a60d14342882bfbba39a13457)
        ;

        
    
    
            var marker_b73b925ca180411398eaa0862bfe055f = L.marker(
                [53.8869, -2.288],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_a8d542aad5be4f9293798b7c41508aac = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b73b925ca180411398eaa0862bfe055f.setIcon(icon_a8d542aad5be4f9293798b7c41508aac);
        
    
        var popup_a83696e76099424e8d84f08a98ecb15a = L.popup({"maxWidth": "100%"});

        
            var html_74db6738a5ff4384aedd7fc0889a75f9 = $(`<div id="html_74db6738a5ff4384aedd7fc0889a75f9" style="width: 100.0%; height: 100.0%;">('53.8869', '-2.2880', 'Walter', 'Atte', 'Stone', None, '1285')</div>`)[0];
            popup_a83696e76099424e8d84f08a98ecb15a.setContent(html_74db6738a5ff4384aedd7fc0889a75f9);
        

        marker_b73b925ca180411398eaa0862bfe055f.bindPopup(popup_a83696e76099424e8d84f08a98ecb15a)
        ;

        
    
    
            var marker_fed7fcb7a31c4c44b4f58735da8bbbf6 = L.marker(
                [52.273, -0.8756],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_94c15b04a8174fe998ebf190a41ab061 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fed7fcb7a31c4c44b4f58735da8bbbf6.setIcon(icon_94c15b04a8174fe998ebf190a41ab061);
        
    
        var popup_b8c6828155394bcea0de2e85b5dc02a4 = L.popup({"maxWidth": "100%"});

        
            var html_08fcfd2e73d84fa5b1a96d04f9bcfab3 = $(`<div id="html_08fcfd2e73d84fa5b1a96d04f9bcfab3" style="width: 100.0%; height: 100.0%;">('52.2730', '-0.8756', 'William', 'Maximillian', 'Stone', None, '1603')</div>`)[0];
            popup_b8c6828155394bcea0de2e85b5dc02a4.setContent(html_08fcfd2e73d84fa5b1a96d04f9bcfab3);
        

        marker_fed7fcb7a31c4c44b4f58735da8bbbf6.bindPopup(popup_b8c6828155394bcea0de2e85b5dc02a4)
        ;

        
    
    
            var marker_102de5a1cd464d14bb6425ca7cc483b6 = L.marker(
                [52.273, -0.8756],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_84d2ae97fd864cb98fe1f5d32dc82a9a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_102de5a1cd464d14bb6425ca7cc483b6.setIcon(icon_84d2ae97fd864cb98fe1f5d32dc82a9a);
        
    
        var popup_821c2dd220ec455abec61f79c3d65303 = L.popup({"maxWidth": "100%"});

        
            var html_b4718e14570d47dca212b5c5a2833fcb = $(`<div id="html_b4718e14570d47dca212b5c5a2833fcb" style="width: 100.0%; height: 100.0%;">('52.2730', '-0.8756', 'Jane', 'Dorothy', 'Stone', None, '1581')</div>`)[0];
            popup_821c2dd220ec455abec61f79c3d65303.setContent(html_b4718e14570d47dca212b5c5a2833fcb);
        

        marker_102de5a1cd464d14bb6425ca7cc483b6.bindPopup(popup_821c2dd220ec455abec61f79c3d65303)
        ;

        
    
    
            var marker_cc2266decd3e45829ad550adae9497f2 = L.marker(
                [51.3492, -1.9927],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_70b8538256664ff8bd8b6cb9587c516a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cc2266decd3e45829ad550adae9497f2.setIcon(icon_70b8538256664ff8bd8b6cb9587c516a);
        
    
        var popup_fe094f2e259b4046bd25d9a463098258 = L.popup({"maxWidth": "100%"});

        
            var html_b9c3b3ca0b0541149e358694c8258415 = $(`<div id="html_b9c3b3ca0b0541149e358694c8258415" style="width: 100.0%; height: 100.0%;">('51.3492', '-1.9927', 'Verlinda', 'Graves', 'Stone', None, '1618')</div>`)[0];
            popup_fe094f2e259b4046bd25d9a463098258.setContent(html_b9c3b3ca0b0541149e358694c8258415);
        

        marker_cc2266decd3e45829ad550adae9497f2.bindPopup(popup_fe094f2e259b4046bd25d9a463098258)
        ;

        
    
    
            var marker_26e424c2f9764078962e069e6d863fb9 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_0975d4140cd54d318ab2c55a6e5443b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_26e424c2f9764078962e069e6d863fb9.setIcon(icon_0975d4140cd54d318ab2c55a6e5443b2);
        
    
        var popup_2a1987926dc0495d96f106ae48be9de9 = L.popup({"maxWidth": "100%"});

        
            var html_fb1dcea29da143c6998b5a09f3265e7c = $(`<div id="html_fb1dcea29da143c6998b5a09f3265e7c" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Thomas', None, 'Stone', None, '1743')</div>`)[0];
            popup_2a1987926dc0495d96f106ae48be9de9.setContent(html_fb1dcea29da143c6998b5a09f3265e7c);
        

        marker_26e424c2f9764078962e069e6d863fb9.bindPopup(popup_2a1987926dc0495d96f106ae48be9de9)
        ;

        
    
    
            var marker_d8f0636e90284472a9f5aa6ed089250f = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_be9165b1a1fa496e890acbbd66d45fdd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d8f0636e90284472a9f5aa6ed089250f.setIcon(icon_be9165b1a1fa496e890acbbd66d45fdd);
        
    
        var popup_c84cd0252f2b4d8c81020119e423a96e = L.popup({"maxWidth": "100%"});

        
            var html_3fdafd47ffbd44bc9a1c79862d4be194 = $(`<div id="html_3fdafd47ffbd44bc9a1c79862d4be194" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'John', 'Hoskins', 'Stone', None, '1750')</div>`)[0];
            popup_c84cd0252f2b4d8c81020119e423a96e.setContent(html_3fdafd47ffbd44bc9a1c79862d4be194);
        

        marker_d8f0636e90284472a9f5aa6ed089250f.bindPopup(popup_c84cd0252f2b4d8c81020119e423a96e)
        ;

        
    
    
            var marker_3e192bdbc12c4201818b6526657577a4 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_939ccd774d18453885ff161dd64aeea5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3e192bdbc12c4201818b6526657577a4.setIcon(icon_939ccd774d18453885ff161dd64aeea5);
        
    
        var popup_246b9e538fbf4fe1af8b404e16888ddc = L.popup({"maxWidth": "100%"});

        
            var html_cacea7ec7df7447ea7c5c751c99059cc = $(`<div id="html_cacea7ec7df7447ea7c5c751c99059cc" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'David', None, 'Stone', None, '1709')</div>`)[0];
            popup_246b9e538fbf4fe1af8b404e16888ddc.setContent(html_cacea7ec7df7447ea7c5c751c99059cc);
        

        marker_3e192bdbc12c4201818b6526657577a4.bindPopup(popup_246b9e538fbf4fe1af8b404e16888ddc)
        ;

        
    
    
            var marker_a48fa1cb08f64ef3ac1be4500dd02905 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_60c5b4dd4a18496d8ea760a7071348e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a48fa1cb08f64ef3ac1be4500dd02905.setIcon(icon_60c5b4dd4a18496d8ea760a7071348e9);
        
    
        var popup_ea4ff35e6d8d4f3db6482e7688af4b44 = L.popup({"maxWidth": "100%"});

        
            var html_b68b1ae82d284553960e39396b7af00d = $(`<div id="html_b68b1ae82d284553960e39396b7af00d" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Thomas', None, 'Stone', 'Sr, Captain', '1677')</div>`)[0];
            popup_ea4ff35e6d8d4f3db6482e7688af4b44.setContent(html_b68b1ae82d284553960e39396b7af00d);
        

        marker_a48fa1cb08f64ef3ac1be4500dd02905.bindPopup(popup_ea4ff35e6d8d4f3db6482e7688af4b44)
        ;

        
    
    
            var marker_f91d80c795ec465e96fb082a545d3e53 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_e4b3c34948de438e879e5c5463c389b5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f91d80c795ec465e96fb082a545d3e53.setIcon(icon_e4b3c34948de438e879e5c5463c389b5);
        
    
        var popup_086f0bf11d6741aab306b77058b108f3 = L.popup({"maxWidth": "100%"});

        
            var html_bc3adc3ca35d44cd847a6682cbd2f0ae = $(`<div id="html_bc3adc3ca35d44cd847a6682cbd2f0ae" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Elizabeth', 'Hannah', 'Stone', None, '1712')</div>`)[0];
            popup_086f0bf11d6741aab306b77058b108f3.setContent(html_bc3adc3ca35d44cd847a6682cbd2f0ae);
        

        marker_f91d80c795ec465e96fb082a545d3e53.bindPopup(popup_086f0bf11d6741aab306b77058b108f3)
        ;

        
    
    
            var marker_f4dc47e463fd416f894377ddc0ccf926 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_675aa48d37084942b5061cb838f6e6e9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f4dc47e463fd416f894377ddc0ccf926.setIcon(icon_675aa48d37084942b5061cb838f6e6e9);
        
    
        var popup_80d1013a863a47cc956928cedff17099 = L.popup({"maxWidth": "100%"});

        
            var html_e593be3fa3bd4f9485d1da2992084ebd = $(`<div id="html_e593be3fa3bd4f9485d1da2992084ebd" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Mary', 'Warren', 'Stone', None, '1730')</div>`)[0];
            popup_80d1013a863a47cc956928cedff17099.setContent(html_e593be3fa3bd4f9485d1da2992084ebd);
        

        marker_f4dc47e463fd416f894377ddc0ccf926.bindPopup(popup_80d1013a863a47cc956928cedff17099)
        ;

        
    
    
            var marker_16df3cb586874d8693b03279781bd9dd = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_733c2afeb6c3479094c78b20c3a6e843 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_16df3cb586874d8693b03279781bd9dd.setIcon(icon_733c2afeb6c3479094c78b20c3a6e843);
        
    
        var popup_2c60932615bb46f8bd12a75285c7fa6c = L.popup({"maxWidth": "100%"});

        
            var html_f1afa3773bcf4cf1b0b1ca616bdcdadb = $(`<div id="html_f1afa3773bcf4cf1b0b1ca616bdcdadb" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Martha', 'Jane', 'Hoskins', None, '1681')</div>`)[0];
            popup_2c60932615bb46f8bd12a75285c7fa6c.setContent(html_f1afa3773bcf4cf1b0b1ca616bdcdadb);
        

        marker_16df3cb586874d8693b03279781bd9dd.bindPopup(popup_2c60932615bb46f8bd12a75285c7fa6c)
        ;

        
    
    
            var marker_145116bd685d4f3b90de886ed54bfbfc = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_010af4cf026049e7aa58027895a37df3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_145116bd685d4f3b90de886ed54bfbfc.setIcon(icon_010af4cf026049e7aa58027895a37df3);
        
    
        var popup_ab21a60dfd5845e188e37d4c79e6d7b2 = L.popup({"maxWidth": "100%"});

        
            var html_df1d31caa19b4476b5f577c515c49d0b = $(`<div id="html_df1d31caa19b4476b5f577c515c49d0b" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'John', None, 'Stone', 'Sr', '1715')</div>`)[0];
            popup_ab21a60dfd5845e188e37d4c79e6d7b2.setContent(html_df1d31caa19b4476b5f577c515c49d0b);
        

        marker_145116bd685d4f3b90de886ed54bfbfc.bindPopup(popup_ab21a60dfd5845e188e37d4c79e6d7b2)
        ;

        
    
    
            var marker_3c89ee5d82024c15a7a464fe19d31e10 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_5bee5b4f219f407d85f8624277fc80a0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_3c89ee5d82024c15a7a464fe19d31e10.setIcon(icon_5bee5b4f219f407d85f8624277fc80a0);
        
    
        var popup_4f5fa25053094fd58c8e3e70c7378978 = L.popup({"maxWidth": "100%"});

        
            var html_15c65000dab442de8d13dcad9739c62d = $(`<div id="html_15c65000dab442de8d13dcad9739c62d" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Thomas', None, 'Stone', 'Jr', '1703')</div>`)[0];
            popup_4f5fa25053094fd58c8e3e70c7378978.setContent(html_15c65000dab442de8d13dcad9739c62d);
        

        marker_3c89ee5d82024c15a7a464fe19d31e10.bindPopup(popup_4f5fa25053094fd58c8e3e70c7378978)
        ;

        
    
    
            var marker_fffb82f68f5f455eaaa75f0ea626f022 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_46a5be26a3b34ccaa50391c7f721be76 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_fffb82f68f5f455eaaa75f0ea626f022.setIcon(icon_46a5be26a3b34ccaa50391c7f721be76);
        
    
        var popup_3275a300f30a4ff9baf8e30428b780d3 = L.popup({"maxWidth": "100%"});

        
            var html_2253246da15e4715a48d259a9a59317e = $(`<div id="html_2253246da15e4715a48d259a9a59317e" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Matthew', None, 'Stone', None, '1678')</div>`)[0];
            popup_3275a300f30a4ff9baf8e30428b780d3.setContent(html_2253246da15e4715a48d259a9a59317e);
        

        marker_fffb82f68f5f455eaaa75f0ea626f022.bindPopup(popup_3275a300f30a4ff9baf8e30428b780d3)
        ;

        
    
    
            var marker_2ab02ded24634161a33ce6a43d550528 = L.marker(
                [38.0862, -75.8534],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_964fdeecd01d46598f0cd490fd6f8c29 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2ab02ded24634161a33ce6a43d550528.setIcon(icon_964fdeecd01d46598f0cd490fd6f8c29);
        
    
        var popup_29e223b2b870422aa0900b10c8e3ad3c = L.popup({"maxWidth": "100%"});

        
            var html_63fafe08a22e4cc3a9c927d3bd3cd400 = $(`<div id="html_63fafe08a22e4cc3a9c927d3bd3cd400" style="width: 100.0%; height: 100.0%;">('38.0862', '-75.8534', 'William', 'Murray', 'Stone', None, '1779')</div>`)[0];
            popup_29e223b2b870422aa0900b10c8e3ad3c.setContent(html_63fafe08a22e4cc3a9c927d3bd3cd400);
        

        marker_2ab02ded24634161a33ce6a43d550528.bindPopup(popup_29e223b2b870422aa0900b10c8e3ad3c)
        ;

        
    
    
            var marker_104ea033acf34218921b62e0a46b636c = L.marker(
                [38.505556, -77.041389],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1e6282d0033843f2a7768fa7a064adf4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_104ea033acf34218921b62e0a46b636c.setIcon(icon_1e6282d0033843f2a7768fa7a064adf4);
        
    
        var popup_cfe614ec3a16441e873dfa8ee9e3a81b = L.popup({"maxWidth": "100%"});

        
            var html_d4fea5c553134cc5bf7bfdbcd6929b55 = $(`<div id="html_d4fea5c553134cc5bf7bfdbcd6929b55" style="width: 100.0%; height: 100.0%;">('38.505556', '-77.041389', 'Daniel', 'St. Thomas', 'Jenifer', None, '1723')</div>`)[0];
            popup_cfe614ec3a16441e873dfa8ee9e3a81b.setContent(html_d4fea5c553134cc5bf7bfdbcd6929b55);
        

        marker_104ea033acf34218921b62e0a46b636c.bindPopup(popup_cfe614ec3a16441e873dfa8ee9e3a81b)
        ;

        
    
    
            var marker_932205eaa2824e76a9c70d42a9b4df99 = L.marker(
                [37.7063, -75.8069],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_b8a78d1d73fc4b5d8727a9ff48322e93 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_932205eaa2824e76a9c70d42a9b4df99.setIcon(icon_b8a78d1d73fc4b5d8727a9ff48322e93);
        
    
        var popup_56ab36915ed744acbb99d2b29cfd91c8 = L.popup({"maxWidth": "100%"});

        
            var html_25ec6987183f43fcb5845fefcaf9675b = $(`<div id="html_25ec6987183f43fcb5845fefcaf9675b" style="width: 100.0%; height: 100.0%;">('37.7063', '-75.8069', 'John', None, 'Stone', None, '1648')</div>`)[0];
            popup_56ab36915ed744acbb99d2b29cfd91c8.setContent(html_25ec6987183f43fcb5845fefcaf9675b);
        

        marker_932205eaa2824e76a9c70d42a9b4df99.bindPopup(popup_56ab36915ed744acbb99d2b29cfd91c8)
        ;

        
    
    
            var marker_f886da193e37455ba08d4386e134d89e = L.marker(
                [38.106, -76.3637],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_2b7b5b424c4a464da39576e93393d7be = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f886da193e37455ba08d4386e134d89e.setIcon(icon_2b7b5b424c4a464da39576e93393d7be);
        
    
        var popup_a50eb051b9b34a8d882f2c102e6c0eb7 = L.popup({"maxWidth": "100%"});

        
            var html_4eb9866898b54875b44cdab9c7b94977 = $(`<div id="html_4eb9866898b54875b44cdab9c7b94977" style="width: 100.0%; height: 100.0%;">('38.1060', '-76.3637', 'Elizabeth', None, 'Mason', None, '1695')</div>`)[0];
            popup_a50eb051b9b34a8d882f2c102e6c0eb7.setContent(html_4eb9866898b54875b44cdab9c7b94977);
        

        marker_f886da193e37455ba08d4386e134d89e.bindPopup(popup_a50eb051b9b34a8d882f2c102e6c0eb7)
        ;

        
    
    
            var marker_cab7f99897a0415fb3fe07737778048d = L.marker(
                [38.106, -76.3637],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_a1b3e3173a4b4258834f8fa6e3e6290b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cab7f99897a0415fb3fe07737778048d.setIcon(icon_a1b3e3173a4b4258834f8fa6e3e6290b);
        
    
        var popup_3a43fc783c7f4ba38cbee4781bc52194 = L.popup({"maxWidth": "100%"});

        
            var html_fbf8469561d54bb3b68d26bc7cf6742d = $(`<div id="html_fbf8469561d54bb3b68d26bc7cf6742d" style="width: 100.0%; height: 100.0%;">('38.1060', '-76.3637', 'Elizabeth', 'Mason', 'Jenifer', None, '1695')</div>`)[0];
            popup_3a43fc783c7f4ba38cbee4781bc52194.setContent(html_fbf8469561d54bb3b68d26bc7cf6742d);
        

        marker_cab7f99897a0415fb3fe07737778048d.bindPopup(popup_3a43fc783c7f4ba38cbee4781bc52194)
        ;

        
    
    
            var marker_b8a575effb654ad4be5883e5d44fc548 = L.marker(
                [38.106, -76.3637],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_bdb06c68a8c74b51bde7de097723f1d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b8a575effb654ad4be5883e5d44fc548.setIcon(icon_bdb06c68a8c74b51bde7de097723f1d9);
        
    
        var popup_3989c8c8a6e747a4b83fbff0d8cefe1c = L.popup({"maxWidth": "100%"});

        
            var html_703993b3fbef403eae10a9fea7b4631d = $(`<div id="html_703993b3fbef403eae10a9fea7b4631d" style="width: 100.0%; height: 100.0%;">('38.1060', '-76.3637', 'Daniel', 'Michael', 'Jenifer', 'Sr', '1672')</div>`)[0];
            popup_3989c8c8a6e747a4b83fbff0d8cefe1c.setContent(html_703993b3fbef403eae10a9fea7b4631d);
        

        marker_b8a575effb654ad4be5883e5d44fc548.bindPopup(popup_3989c8c8a6e747a4b83fbff0d8cefe1c)
        ;

        
    
    
            var marker_5ef176156e024d26b658d30a69f09893 = L.marker(
                [39.5662, -90.8294],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_24225afece4d40be94882069a15bb996 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5ef176156e024d26b658d30a69f09893.setIcon(icon_24225afece4d40be94882069a15bb996);
        
    
        var popup_e050727a788747ada45405fe9d35ca6c = L.popup({"maxWidth": "100%"});

        
            var html_8a9be01e91464ad984d94f8391ee3259 = $(`<div id="html_8a9be01e91464ad984d94f8391ee3259" style="width: 100.0%; height: 100.0%;">('39.5662', '-90.8294', 'Francis', 'Marion', 'Stone', None, '1853')</div>`)[0];
            popup_e050727a788747ada45405fe9d35ca6c.setContent(html_8a9be01e91464ad984d94f8391ee3259);
        

        marker_5ef176156e024d26b658d30a69f09893.bindPopup(popup_e050727a788747ada45405fe9d35ca6c)
        ;

        
    
    
            var marker_ee5422fa3bc14e2092ded03bc7eda6ce = L.marker(
                [39.5662, -90.8294],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_6b4f1456653c4702bad104ecd02e16e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_ee5422fa3bc14e2092ded03bc7eda6ce.setIcon(icon_6b4f1456653c4702bad104ecd02e16e7);
        
    
        var popup_7c0f5e1ca319414da7d79364b0d59bb5 = L.popup({"maxWidth": "100%"});

        
            var html_ed87751cf3d644c8a3e2de825e084ada = $(`<div id="html_ed87751cf3d644c8a3e2de825e084ada" style="width: 100.0%; height: 100.0%;">('39.5662', '-90.8294', 'Nancy', 'Jane', 'Stone', None, '1856')</div>`)[0];
            popup_7c0f5e1ca319414da7d79364b0d59bb5.setContent(html_ed87751cf3d644c8a3e2de825e084ada);
        

        marker_ee5422fa3bc14e2092ded03bc7eda6ce.bindPopup(popup_7c0f5e1ca319414da7d79364b0d59bb5)
        ;

        
    
    
            var marker_9d8cf070c4874387a4c16e3716a82e56 = L.marker(
                [36.3743, -80.6771],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_8e97f6a8a3b1462098cf8a62ca2c51c0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9d8cf070c4874387a4c16e3716a82e56.setIcon(icon_8e97f6a8a3b1462098cf8a62ca2c51c0);
        
    
        var popup_c70f5ad479ac488985fbf39d4a6b004e = L.popup({"maxWidth": "100%"});

        
            var html_a4fc51e7b301415291c79929232100ff = $(`<div id="html_a4fc51e7b301415291c79929232100ff" style="width: 100.0%; height: 100.0%;">('36.3743', '-80.6771', 'Solomon', None, 'Stone', 'Sr', '1790')</div>`)[0];
            popup_c70f5ad479ac488985fbf39d4a6b004e.setContent(html_a4fc51e7b301415291c79929232100ff);
        

        marker_9d8cf070c4874387a4c16e3716a82e56.bindPopup(popup_c70f5ad479ac488985fbf39d4a6b004e)
        ;

        
    
    
            var marker_985d7f4edd9b4baaaecf657e4a006046 = L.marker(
                [36.3743, -80.6771],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_f14c69290d4544a596a519da286b7ca8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_985d7f4edd9b4baaaecf657e4a006046.setIcon(icon_f14c69290d4544a596a519da286b7ca8);
        
    
        var popup_4613dbbaf8de4763baf328ee821267e6 = L.popup({"maxWidth": "100%"});

        
            var html_0e983b419ded4fb1abd93a5fc5f6429e = $(`<div id="html_0e983b419ded4fb1abd93a5fc5f6429e" style="width: 100.0%; height: 100.0%;">('36.3743', '-80.6771', 'Betsy', 'Murray', 'Stone', None, '1760')</div>`)[0];
            popup_4613dbbaf8de4763baf328ee821267e6.setContent(html_0e983b419ded4fb1abd93a5fc5f6429e);
        

        marker_985d7f4edd9b4baaaecf657e4a006046.bindPopup(popup_4613dbbaf8de4763baf328ee821267e6)
        ;

        
    
    
            var marker_49bdeef2748548d99f770d61136efe16 = L.marker(
                [36.3743, -80.6771],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1c438a71c78f4856b611b35000a47018 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_49bdeef2748548d99f770d61136efe16.setIcon(icon_1c438a71c78f4856b611b35000a47018);
        
    
        var popup_a60482ddf9154f3caa80355ade0f1d9b = L.popup({"maxWidth": "100%"});

        
            var html_26ae841a55dc4a6eb47ab90f2cf65bc2 = $(`<div id="html_26ae841a55dc4a6eb47ab90f2cf65bc2" style="width: 100.0%; height: 100.0%;">('36.3743', '-80.6771', 'Enoch', None, 'Stone', 'Sr', '1765')</div>`)[0];
            popup_a60482ddf9154f3caa80355ade0f1d9b.setContent(html_26ae841a55dc4a6eb47ab90f2cf65bc2);
        

        marker_49bdeef2748548d99f770d61136efe16.bindPopup(popup_a60482ddf9154f3caa80355ade0f1d9b)
        ;

        
    
    
            var marker_50631961443143629dbcd3046a9d7183 = L.marker(
                [38.7839, -77.6078],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_4833b1d390e04db0bce467f9bd2dbfe6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_50631961443143629dbcd3046a9d7183.setIcon(icon_4833b1d390e04db0bce467f9bd2dbfe6);
        
    
        var popup_73f81b83ed2943bd99c728bf7d1bbc8e = L.popup({"maxWidth": "100%"});

        
            var html_6ebd3fc3c6f146108570c89d087050bc = $(`<div id="html_6ebd3fc3c6f146108570c89d087050bc" style="width: 100.0%; height: 100.0%;">('38.7839', '-77.6078', 'Thomas', None, 'Stone', 'III', '1721')</div>`)[0];
            popup_73f81b83ed2943bd99c728bf7d1bbc8e.setContent(html_6ebd3fc3c6f146108570c89d087050bc);
        

        marker_50631961443143629dbcd3046a9d7183.bindPopup(popup_73f81b83ed2943bd99c728bf7d1bbc8e)
        ;

        
    
    
            var marker_e7bf57aa13644facbf7f1fa096b6f7b5 = L.marker(
                [38.7209, -77.791],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1bb24b6cec6e49d7be578b2ccc64d5d9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e7bf57aa13644facbf7f1fa096b6f7b5.setIcon(icon_1bb24b6cec6e49d7be578b2ccc64d5d9);
        
    
        var popup_b8816056c7fc4d07a15213c7f4c3388e = L.popup({"maxWidth": "100%"});

        
            var html_7f4566994ebb4e5ca4633ba635f83608 = $(`<div id="html_7f4566994ebb4e5ca4633ba635f83608" style="width: 100.0%; height: 100.0%;">('38.7209', '-77.7910', 'John', None, 'Stone', None, '1759')</div>`)[0];
            popup_b8816056c7fc4d07a15213c7f4c3388e.setContent(html_7f4566994ebb4e5ca4633ba635f83608);
        

        marker_e7bf57aa13644facbf7f1fa096b6f7b5.bindPopup(popup_b8816056c7fc4d07a15213c7f4c3388e)
        ;

        
    
    
            var marker_844ff80ff9ea441183e6ef1ab91ad04f = L.marker(
                [53.6625, -2.7771],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_51ed05b01b1f4630910d306d2e310bb4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_844ff80ff9ea441183e6ef1ab91ad04f.setIcon(icon_51ed05b01b1f4630910d306d2e310bb4);
        
    
        var popup_6b7836e438954411a67549faa71a8d32 = L.popup({"maxWidth": "100%"});

        
            var html_f8066955c95a455d94e747c1b1942b44 = $(`<div id="html_f8066955c95a455d94e747c1b1942b44" style="width: 100.0%; height: 100.0%;">('53.6625', '-2.7771', 'John', None, 'Stone', 'Sr', '1582')</div>`)[0];
            popup_6b7836e438954411a67549faa71a8d32.setContent(html_f8066955c95a455d94e747c1b1942b44);
        

        marker_844ff80ff9ea441183e6ef1ab91ad04f.bindPopup(popup_6b7836e438954411a67549faa71a8d32)
        ;

        
    
    
            var marker_a590b2acc3874f889da77fce267ba84e = L.marker(
                [53.6625, -2.7771],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_9acfe69f39cb4c0c9df06363d5b815ec = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a590b2acc3874f889da77fce267ba84e.setIcon(icon_9acfe69f39cb4c0c9df06363d5b815ec);
        
    
        var popup_4c272a428dda46ed907d22ad7bc2bda6 = L.popup({"maxWidth": "100%"});

        
            var html_319c686d03804c3194a217028899e726 = $(`<div id="html_319c686d03804c3194a217028899e726" style="width: 100.0%; height: 100.0%;">('53.6625', '-2.7771', 'Richard', None, 'Stone', None, '1540')</div>`)[0];
            popup_4c272a428dda46ed907d22ad7bc2bda6.setContent(html_319c686d03804c3194a217028899e726);
        

        marker_a590b2acc3874f889da77fce267ba84e.bindPopup(popup_4c272a428dda46ed907d22ad7bc2bda6)
        ;

        
    
    
            var marker_c27ff096e7f64873aa2b1efeb8cd34cc = L.marker(
                [53.8869, -2.288],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_e585831e06184626bfd5e1a522eceb75 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c27ff096e7f64873aa2b1efeb8cd34cc.setIcon(icon_e585831e06184626bfd5e1a522eceb75);
        
    
        var popup_bd147d31104e4221b0715aece9409907 = L.popup({"maxWidth": "100%"});

        
            var html_6e99acf9a97740e0890dcd6e3227e908 = $(`<div id="html_6e99acf9a97740e0890dcd6e3227e908" style="width: 100.0%; height: 100.0%;">('53.8869', '-2.2880', 'William', None, 'Stone', None, '1510')</div>`)[0];
            popup_bd147d31104e4221b0715aece9409907.setContent(html_6e99acf9a97740e0890dcd6e3227e908);
        

        marker_c27ff096e7f64873aa2b1efeb8cd34cc.bindPopup(popup_bd147d31104e4221b0715aece9409907)
        ;

        
    
    
            var marker_974e06756fce4086a26762f45350391e = L.marker(
                [53.8869, -2.288],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_2985163743dc4f24b4bb2182e4ddb338 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_974e06756fce4086a26762f45350391e.setIcon(icon_2985163743dc4f24b4bb2182e4ddb338);
        
    
        var popup_2fde189241b54bee98931143bc0c8937 = L.popup({"maxWidth": "100%"});

        
            var html_435a579489b84bbf8ea8871e91cd984e = $(`<div id="html_435a579489b84bbf8ea8871e91cd984e" style="width: 100.0%; height: 100.0%;">('53.8869', '-2.2880', 'John', 'Mathew', 'Stone', 'Captain', '1575')</div>`)[0];
            popup_2fde189241b54bee98931143bc0c8937.setContent(html_435a579489b84bbf8ea8871e91cd984e);
        

        marker_974e06756fce4086a26762f45350391e.bindPopup(popup_2fde189241b54bee98931143bc0c8937)
        ;

        
    
    
            var marker_6fa4669e81124baca4243f71961a18e0 = L.marker(
                [53.1003, -0.9936],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_f7efa1fd608d4c53b401518fdf25766a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6fa4669e81124baca4243f71961a18e0.setIcon(icon_f7efa1fd608d4c53b401518fdf25766a);
        
    
        var popup_5961f0f0179a4ed1829f2c4cd8797638 = L.popup({"maxWidth": "100%"});

        
            var html_8c8c6a310fff43709d5017a7a51c2446 = $(`<div id="html_8c8c6a310fff43709d5017a7a51c2446" style="width: 100.0%; height: 100.0%;">('53.1003', '-0.9936', 'William', None, 'Fletcher', None, '1775')</div>`)[0];
            popup_5961f0f0179a4ed1829f2c4cd8797638.setContent(html_8c8c6a310fff43709d5017a7a51c2446);
        

        marker_6fa4669e81124baca4243f71961a18e0.bindPopup(popup_5961f0f0179a4ed1829f2c4cd8797638)
        ;

        
    
    
            var marker_6a524166d13948ef8b162f326054a6bd = L.marker(
                [53.1003, -0.9936],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_58d9cdaeb65d40d7aa37910017499a36 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6a524166d13948ef8b162f326054a6bd.setIcon(icon_58d9cdaeb65d40d7aa37910017499a36);
        
    
        var popup_d5bc68215b474ad4a090de186eebb9b2 = L.popup({"maxWidth": "100%"});

        
            var html_c5b3e42956894cad960e0a3964e0b3b8 = $(`<div id="html_c5b3e42956894cad960e0a3964e0b3b8" style="width: 100.0%; height: 100.0%;">('53.1003', '-0.9936', 'Sarah', None, 'Flethcher', None, '1777')</div>`)[0];
            popup_d5bc68215b474ad4a090de186eebb9b2.setContent(html_c5b3e42956894cad960e0a3964e0b3b8);
        

        marker_6a524166d13948ef8b162f326054a6bd.bindPopup(popup_d5bc68215b474ad4a090de186eebb9b2)
        ;

        
    
    
            var marker_cff1b6ab22894a73aea2ca7dc523594b = L.marker(
                [38.4268, -85.1479],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_da828b106c934c778ac9888d7ee3b4df = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_cff1b6ab22894a73aea2ca7dc523594b.setIcon(icon_da828b106c934c778ac9888d7ee3b4df);
        
    
        var popup_ea8ba1b64a8441d1afd0af4e646435f3 = L.popup({"maxWidth": "100%"});

        
            var html_0d420a251003465f803dc26fbe2eb2c3 = $(`<div id="html_0d420a251003465f803dc26fbe2eb2c3" style="width: 100.0%; height: 100.0%;">('38.4268', '-85.1479', 'Polly', 'Jane', 'Cardwell', None, '1785')</div>`)[0];
            popup_ea8ba1b64a8441d1afd0af4e646435f3.setContent(html_0d420a251003465f803dc26fbe2eb2c3);
        

        marker_cff1b6ab22894a73aea2ca7dc523594b.bindPopup(popup_ea8ba1b64a8441d1afd0af4e646435f3)
        ;

        
    
    
            var marker_34b954e2f07944a2aafd43dd8513132e = L.marker(
                [38.0293, -78.4767],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_0127af3b4a4d41658057b721fbef11f4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_34b954e2f07944a2aafd43dd8513132e.setIcon(icon_0127af3b4a4d41658057b721fbef11f4);
        
    
        var popup_7c853d846d5c434ab5011c0a58bb5365 = L.popup({"maxWidth": "100%"});

        
            var html_b21044d9cfa3474f9c0f9c371f0e0a77 = $(`<div id="html_b21044d9cfa3474f9c0f9c371f0e0a77" style="width: 100.0%; height: 100.0%;">('38.0293', '-78.4767', 'William', None, 'Cardwell', None, '1773')</div>`)[0];
            popup_7c853d846d5c434ab5011c0a58bb5365.setContent(html_b21044d9cfa3474f9c0f9c371f0e0a77);
        

        marker_34b954e2f07944a2aafd43dd8513132e.bindPopup(popup_7c853d846d5c434ab5011c0a58bb5365)
        ;

        
    
    
            var marker_660e9125738442df8e3ce292232d1bad = L.marker(
                [51.2787, -0.5217],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_e827a03b1bdd4cbeadc499de547ae6f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_660e9125738442df8e3ce292232d1bad.setIcon(icon_e827a03b1bdd4cbeadc499de547ae6f3);
        
    
        var popup_edd63e2db48a4d839fbe0263cec1ea92 = L.popup({"maxWidth": "100%"});

        
            var html_bb2bd8db0d0f482891b54302fc9963ea = $(`<div id="html_bb2bd8db0d0f482891b54302fc9963ea" style="width: 100.0%; height: 100.0%;">('51.2787', '-0.5217', 'Katherine', 'Croshaw', 'Graves', None, '1586')</div>`)[0];
            popup_edd63e2db48a4d839fbe0263cec1ea92.setContent(html_bb2bd8db0d0f482891b54302fc9963ea);
        

        marker_660e9125738442df8e3ce292232d1bad.bindPopup(popup_edd63e2db48a4d839fbe0263cec1ea92)
        ;

        
    
    
            var marker_e042b9f9f3c54882b1c5f8172f7fb58b = L.marker(
                [51.467, -1.1854],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_88a8bb3162564b2dab97c7e165bce89c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e042b9f9f3c54882b1c5f8172f7fb58b.setIcon(icon_88a8bb3162564b2dab97c7e165bce89c);
        
    
        var popup_ab16e9681b49476ba859571f3c55df93 = L.popup({"maxWidth": "100%"});

        
            var html_d1b5ff03c5e14bbdbc970c9d4ba14fb5 = $(`<div id="html_d1b5ff03c5e14bbdbc970c9d4ba14fb5" style="width: 100.0%; height: 100.0%;">('51.4670', '-1.1854', 'Thomas', None, 'Graves', 'Jr', '1580')</div>`)[0];
            popup_ab16e9681b49476ba859571f3c55df93.setContent(html_d1b5ff03c5e14bbdbc970c9d4ba14fb5);
        

        marker_e042b9f9f3c54882b1c5f8172f7fb58b.bindPopup(popup_ab16e9681b49476ba859571f3c55df93)
        ;

        
    
    
            var marker_235085357615419593e79b1a2d9198d3 = L.marker(
                [51.1051, -2.9262],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_6f9d5b7b16064a5c8478c596899b09c8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_235085357615419593e79b1a2d9198d3.setIcon(icon_6f9d5b7b16064a5c8478c596899b09c8);
        
    
        var popup_79b62f891c89452998b90741bd3f7b4b = L.popup({"maxWidth": "100%"});

        
            var html_fbd0845e026847698eefc3dad7070a7e = $(`<div id="html_fbd0845e026847698eefc3dad7070a7e" style="width: 100.0%; height: 100.0%;">('51.1051', '-2.9262', 'John', None, 'Stone', 'Sr', '1528')</div>`)[0];
            popup_79b62f891c89452998b90741bd3f7b4b.setContent(html_fbd0845e026847698eefc3dad7070a7e);
        

        marker_235085357615419593e79b1a2d9198d3.bindPopup(popup_79b62f891c89452998b90741bd3f7b4b)
        ;

        
    
    
            var marker_862e00cbcee64141a30e7597d739b1e3 = L.marker(
                [52.614, -0.8864],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_0fb145304959479ab8a9edef383f8130 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_862e00cbcee64141a30e7597d739b1e3.setIcon(icon_0fb145304959479ab8a9edef383f8130);
        
    
        var popup_03bb5c32c3c0449884dc696274608076 = L.popup({"maxWidth": "100%"});

        
            var html_c2c9989b406d4360b9f224277c7f05a0 = $(`<div id="html_c2c9989b406d4360b9f224277c7f05a0" style="width: 100.0%; height: 100.0%;">('52.6140', '-0.8864', 'Thomas', None, 'Stone', None, '1495')</div>`)[0];
            popup_03bb5c32c3c0449884dc696274608076.setContent(html_c2c9989b406d4360b9f224277c7f05a0);
        

        marker_862e00cbcee64141a30e7597d739b1e3.bindPopup(popup_03bb5c32c3c0449884dc696274608076)
        ;

        
    
    
            var marker_4754fee3f721459e9b5a014d19c277dd = L.marker(
                [52.614, -0.8864],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_150eea42ac1e49c9a8e377d27041aae0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4754fee3f721459e9b5a014d19c277dd.setIcon(icon_150eea42ac1e49c9a8e377d27041aae0);
        
    
        var popup_c497ceabfbdf43bca234c4d86f8ad699 = L.popup({"maxWidth": "100%"});

        
            var html_6e8aa26bba7147949f4bfa4ae96f3d86 = $(`<div id="html_6e8aa26bba7147949f4bfa4ae96f3d86" style="width: 100.0%; height: 100.0%;">('52.6140', '-0.8864', 'Agnes', 'Cowles', 'Stone', None, '1490')</div>`)[0];
            popup_c497ceabfbdf43bca234c4d86f8ad699.setContent(html_6e8aa26bba7147949f4bfa4ae96f3d86);
        

        marker_4754fee3f721459e9b5a014d19c277dd.bindPopup(popup_c497ceabfbdf43bca234c4d86f8ad699)
        ;

        
    
    
            var marker_d64271c730294586adcb4431ef2f07a1 = L.marker(
                [51.509865, -0.118092],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_981f8ee634f543909295ac68ef616e38 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_d64271c730294586adcb4431ef2f07a1.setIcon(icon_981f8ee634f543909295ac68ef616e38);
        
    
        var popup_0949609fafd9420daed671f98851d853 = L.popup({"maxWidth": "100%"});

        
            var html_2dd5627f58a745e08c475822a1aa9f72 = $(`<div id="html_2dd5627f58a745e08c475822a1aa9f72" style="width: 100.0%; height: 100.0%;">('51.509865', '-0.118092', 'John', None, 'Stone', None, '1525')</div>`)[0];
            popup_0949609fafd9420daed671f98851d853.setContent(html_2dd5627f58a745e08c475822a1aa9f72);
        

        marker_d64271c730294586adcb4431ef2f07a1.bindPopup(popup_0949609fafd9420daed671f98851d853)
        ;

        
    
    
            var marker_273011fb21934021b8db2588a5f288db = L.marker(
                [41.0793, -85.1394],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_3766d0cb3d294beaa303d7bc409b75f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_273011fb21934021b8db2588a5f288db.setIcon(icon_3766d0cb3d294beaa303d7bc409b75f3);
        
    
        var popup_ff41a9069bac484c84c7f6170fe81878 = L.popup({"maxWidth": "100%"});

        
            var html_c2183e7858874decaada0cf2b5c47c53 = $(`<div id="html_c2183e7858874decaada0cf2b5c47c53" style="width: 100.0%; height: 100.0%;">('41.0793', '-85.1394', 'Enos', 'Pray', 'Griffin', None, '1848')</div>`)[0];
            popup_ff41a9069bac484c84c7f6170fe81878.setContent(html_c2183e7858874decaada0cf2b5c47c53);
        

        marker_273011fb21934021b8db2588a5f288db.bindPopup(popup_ff41a9069bac484c84c7f6170fe81878)
        ;

        
    
    
            var marker_740a8af64a2048dabe10801acb91572a = L.marker(
                [38.5114, -77.0188],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_20515883dede4fe3ab0ec06d4a80b0c7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_740a8af64a2048dabe10801acb91572a.setIcon(icon_20515883dede4fe3ab0ec06d4a80b0c7);
        
    
        var popup_fa16f626f38745ecbab761c7d80e3396 = L.popup({"maxWidth": "100%"});

        
            var html_21eef496105a41c9adda1ceff9f6179f = $(`<div id="html_21eef496105a41c9adda1ceff9f6179f" style="width: 100.0%; height: 100.0%;">('38.5114', '-77.0188', 'unknown', '', '', None, '1900')</div>`)[0];
            popup_fa16f626f38745ecbab761c7d80e3396.setContent(html_21eef496105a41c9adda1ceff9f6179f);
        

        marker_740a8af64a2048dabe10801acb91572a.bindPopup(popup_fa16f626f38745ecbab761c7d80e3396)
        ;

        
    
    
            var marker_a0486d5cf72a441ca89432b2f8d6ad2b = L.marker(
                [53.9591, -1.0792],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1d9666bcc47e49f69e64e4a41b90de11 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_a0486d5cf72a441ca89432b2f8d6ad2b.setIcon(icon_1d9666bcc47e49f69e64e4a41b90de11);
        
    
        var popup_6dcef189c1b546508ee966751029dd16 = L.popup({"maxWidth": "100%"});

        
            var html_ec60c548c648460facaa3e840ecea148 = $(`<div id="html_ec60c548c648460facaa3e840ecea148" style="width: 100.0%; height: 100.0%;">('53.9591', '-1.0792', 'Isabelle', 'De Croston', 'Stone', None, '1553')</div>`)[0];
            popup_6dcef189c1b546508ee966751029dd16.setContent(html_ec60c548c648460facaa3e840ecea148);
        

        marker_a0486d5cf72a441ca89432b2f8d6ad2b.bindPopup(popup_6dcef189c1b546508ee966751029dd16)
        ;

        
    
    
            var marker_b7fa1b30c3474bbebfb7f6900a4e886e = L.marker(
                [51.5742, -0.4857],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_9ca07a5c04b349adb20e39b9afe6cea6 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_b7fa1b30c3474bbebfb7f6900a4e886e.setIcon(icon_9ca07a5c04b349adb20e39b9afe6cea6);
        
    
        var popup_f32e0e126d9548ac993bb381c88d0235 = L.popup({"maxWidth": "100%"});

        
            var html_589451545953436d90e0ac438b4b6681 = $(`<div id="html_589451545953436d90e0ac438b4b6681" style="width: 100.0%; height: 100.0%;">('51.5742', '-0.4857', 'Elizabeth', 'Margery', 'Stone', None, '1506')</div>`)[0];
            popup_f32e0e126d9548ac993bb381c88d0235.setContent(html_589451545953436d90e0ac438b4b6681);
        

        marker_b7fa1b30c3474bbebfb7f6900a4e886e.bindPopup(popup_f32e0e126d9548ac993bb381c88d0235)
        ;

        
    
    
            var marker_53f9c81e2aac40e4b747e03b929736b3 = L.marker(
                [51.5742, -0.4857],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_ca76277ef8c048d2b521bd51abf3efa4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_53f9c81e2aac40e4b747e03b929736b3.setIcon(icon_ca76277ef8c048d2b521bd51abf3efa4);
        
    
        var popup_4cca437eab8e49569d786d27a8afb431 = L.popup({"maxWidth": "100%"});

        
            var html_8b3e61c0d4444e2cb389593152eda0b2 = $(`<div id="html_8b3e61c0d4444e2cb389593152eda0b2" style="width: 100.0%; height: 100.0%;">('51.5742', '-0.4857', 'John', None, 'Stone', None, '1505')</div>`)[0];
            popup_4cca437eab8e49569d786d27a8afb431.setContent(html_8b3e61c0d4444e2cb389593152eda0b2);
        

        marker_53f9c81e2aac40e4b747e03b929736b3.bindPopup(popup_4cca437eab8e49569d786d27a8afb431)
        ;

        
    
    
            var marker_9b1df7854b084299bbfa991b26b50ae3 = L.marker(
                [51.1988, -0.456],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1e8185b423834a9e96e996e3e174e24f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9b1df7854b084299bbfa991b26b50ae3.setIcon(icon_1e8185b423834a9e96e996e3e174e24f);
        
    
        var popup_dbca0959877e4d26b679648078e31eea = L.popup({"maxWidth": "100%"});

        
            var html_cf62509f86644520869b5562989fe640 = $(`<div id="html_cf62509f86644520869b5562989fe640" style="width: 100.0%; height: 100.0%;">('51.1988', '-0.456', 'John', 'Atte', 'Stone', 'II', '1532')</div>`)[0];
            popup_dbca0959877e4d26b679648078e31eea.setContent(html_cf62509f86644520869b5562989fe640);
        

        marker_9b1df7854b084299bbfa991b26b50ae3.bindPopup(popup_dbca0959877e4d26b679648078e31eea)
        ;

        
    
    
            var marker_e01a55a18c5f499e831ec3e6254b6ee3 = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_07b87df343b04eaebf0049a1d9a49de8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e01a55a18c5f499e831ec3e6254b6ee3.setIcon(icon_07b87df343b04eaebf0049a1d9a49de8);
        
    
        var popup_fda534c31cc94a56b0dfd1e1dd7dda76 = L.popup({"maxWidth": "100%"});

        
            var html_60f773ff3ec7483cafd0a78b8bcc52e5 = $(`<div id="html_60f773ff3ec7483cafd0a78b8bcc52e5" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Richard', 'Thomas', 'Cornwall', 'Sir', '1493')</div>`)[0];
            popup_fda534c31cc94a56b0dfd1e1dd7dda76.setContent(html_60f773ff3ec7483cafd0a78b8bcc52e5);
        

        marker_e01a55a18c5f499e831ec3e6254b6ee3.bindPopup(popup_fda534c31cc94a56b0dfd1e1dd7dda76)
        ;

        
    
    
            var marker_1e66b27e6efd46f08d268df69709bb01 = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_98e8967975184c39a0df3d1475fc3901 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1e66b27e6efd46f08d268df69709bb01.setIcon(icon_98e8967975184c39a0df3d1475fc3901);
        
    
        var popup_bcfbdbef14974fb89340a7694393db25 = L.popup({"maxWidth": "100%"});

        
            var html_37daa4e8f1d44adfb66386f62a5e187d = $(`<div id="html_37daa4e8f1d44adfb66386f62a5e187d" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Thomas', None, 'Cornwall', None, '1467')</div>`)[0];
            popup_bcfbdbef14974fb89340a7694393db25.setContent(html_37daa4e8f1d44adfb66386f62a5e187d);
        

        marker_1e66b27e6efd46f08d268df69709bb01.bindPopup(popup_bcfbdbef14974fb89340a7694393db25)
        ;

        
    
    
            var marker_750e15c7c6c3414f97c8edc3998326d0 = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_7cff982ba9f64b10bebaab66581c42b8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_750e15c7c6c3414f97c8edc3998326d0.setIcon(icon_7cff982ba9f64b10bebaab66581c42b8);
        
    
        var popup_1b1520b90daf4acb8bc7a54f433f9e37 = L.popup({"maxWidth": "100%"});

        
            var html_1390d5d7b5e94dd08274a91c30011d82 = $(`<div id="html_1390d5d7b5e94dd08274a91c30011d82" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Richard', None, 'Cornwall', 'Sir, 9th Baron of Burford', '1493')</div>`)[0];
            popup_1b1520b90daf4acb8bc7a54f433f9e37.setContent(html_1390d5d7b5e94dd08274a91c30011d82);
        

        marker_750e15c7c6c3414f97c8edc3998326d0.bindPopup(popup_1b1520b90daf4acb8bc7a54f433f9e37)
        ;

        
    
    
            var marker_650d9727b06545b585b75d6ec1cb34ae = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_dbf376205f5a4704b744ff89761fc304 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_650d9727b06545b585b75d6ec1cb34ae.setIcon(icon_dbf376205f5a4704b744ff89761fc304);
        
    
        var popup_59b40e5e11894d7a9018d5bd503ee5fe = L.popup({"maxWidth": "100%"});

        
            var html_3322ddf09a8e469699203219087b5bc7 = $(`<div id="html_3322ddf09a8e469699203219087b5bc7" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Lady Jane', None, 'Cornwall', None, '1490')</div>`)[0];
            popup_59b40e5e11894d7a9018d5bd503ee5fe.setContent(html_3322ddf09a8e469699203219087b5bc7);
        

        marker_650d9727b06545b585b75d6ec1cb34ae.bindPopup(popup_59b40e5e11894d7a9018d5bd503ee5fe)
        ;

        
    
    
            var marker_2c3a75ba4f184427b4d3f9f2f2e8e2b1 = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_ffe775b0a0f1486799d1348a91d82017 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_2c3a75ba4f184427b4d3f9f2f2e8e2b1.setIcon(icon_ffe775b0a0f1486799d1348a91d82017);
        
    
        var popup_239f29505c724f9094b4b619d88b3184 = L.popup({"maxWidth": "100%"});

        
            var html_ebe927a120a64ccfb77e51101e4609ee = $(`<div id="html_ebe927a120a64ccfb77e51101e4609ee" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Edmund', None, 'Cornwall', None, '1448')</div>`)[0];
            popup_239f29505c724f9094b4b619d88b3184.setContent(html_ebe927a120a64ccfb77e51101e4609ee);
        

        marker_2c3a75ba4f184427b4d3f9f2f2e8e2b1.bindPopup(popup_239f29505c724f9094b4b619d88b3184)
        ;

        
    
    
            var marker_6b9b0f6adfa2409389c322b1e84fc7b5 = L.marker(
                [52.8037, -2.6571],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_5142b8630b37495bb1c31a4c0fe3131e = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_6b9b0f6adfa2409389c322b1e84fc7b5.setIcon(icon_5142b8630b37495bb1c31a4c0fe3131e);
        
    
        var popup_c572c646d23c4de199cd25cec0d7234e = L.popup({"maxWidth": "100%"});

        
            var html_3a168247a95546869a96207e6af4c0bb = $(`<div id="html_3a168247a95546869a96207e6af4c0bb" style="width: 100.0%; height: 100.0%;">('52.8037', '-2.6571', 'Anne', 'Blount', 'Cornwall', None, '1470')</div>`)[0];
            popup_c572c646d23c4de199cd25cec0d7234e.setContent(html_3a168247a95546869a96207e6af4c0bb);
        

        marker_6b9b0f6adfa2409389c322b1e84fc7b5.bindPopup(popup_c572c646d23c4de199cd25cec0d7234e)
        ;

        
    
    
            var marker_9a032c5f5f074f1bbb9e5c020570b9a8 = L.marker(
                [52.5345, -2.4245],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1a2446ea63df44469424f4da204a34a5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_9a032c5f5f074f1bbb9e5c020570b9a8.setIcon(icon_1a2446ea63df44469424f4da204a34a5);
        
    
        var popup_017411c2d33946218ca26eecfd32551a = L.popup({"maxWidth": "100%"});

        
            var html_793af3b5a97f409ab6df7f46d9d28e45 = $(`<div id="html_793af3b5a97f409ab6df7f46d9d28e45" style="width: 100.0%; height: 100.0%;">('52.5345', '-2.4245', 'Lady Maria', 'Hoorde', 'Cornwall', None, '1452')</div>`)[0];
            popup_017411c2d33946218ca26eecfd32551a.setContent(html_793af3b5a97f409ab6df7f46d9d28e45);
        

        marker_9a032c5f5f074f1bbb9e5c020570b9a8.bindPopup(popup_017411c2d33946218ca26eecfd32551a)
        ;

        
    
    
            var marker_1214b7a46e424284947e5b2885465a9a = L.marker(
                [35.4453, -100.271],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_b302c5145eac4d869c122904a55cd2e7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1214b7a46e424284947e5b2885465a9a.setIcon(icon_b302c5145eac4d869c122904a55cd2e7);
        
    
        var popup_229a016414f848a99034b05ac32c5cee = L.popup({"maxWidth": "100%"});

        
            var html_58de75e0a4214502b806d833a580e5c0 = $(`<div id="html_58de75e0a4214502b806d833a580e5c0" style="width: 100.0%; height: 100.0%;">('35.4453', '-100.2710', 'Zelma', 'Jane', 'Stone', None, '1912')</div>`)[0];
            popup_229a016414f848a99034b05ac32c5cee.setContent(html_58de75e0a4214502b806d833a580e5c0);
        

        marker_1214b7a46e424284947e5b2885465a9a.bindPopup(popup_229a016414f848a99034b05ac32c5cee)
        ;

        
    
    
            var marker_1b6b380242404fe8ba41cbaf1282e514 = L.marker(
                [35.4453, -100.271],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_83d6f5d5c08f442fb897b5049340c7ea = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_1b6b380242404fe8ba41cbaf1282e514.setIcon(icon_83d6f5d5c08f442fb897b5049340c7ea);
        
    
        var popup_abb8eee3a13b4813ab2a81b43869fb2c = L.popup({"maxWidth": "100%"});

        
            var html_f6e68a9a12a74d24b1f9b4134862ecdf = $(`<div id="html_f6e68a9a12a74d24b1f9b4134862ecdf" style="width: 100.0%; height: 100.0%;">('35.4453', '-100.2710', 'Zelma', 'Jane', 'Stone', None, '1912')</div>`)[0];
            popup_abb8eee3a13b4813ab2a81b43869fb2c.setContent(html_f6e68a9a12a74d24b1f9b4134862ecdf);
        

        marker_1b6b380242404fe8ba41cbaf1282e514.bindPopup(popup_abb8eee3a13b4813ab2a81b43869fb2c)
        ;

        
    
    
            var marker_7d728dc1eb1945289e29041cada837e9 = L.marker(
                [52.7063657, -2.7417849],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_6505b60c85094e6baae2e4571f10f5e3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_7d728dc1eb1945289e29041cada837e9.setIcon(icon_6505b60c85094e6baae2e4571f10f5e3);
        
    
        var popup_780c173d7ba447ce8b12cdcfbbddf023 = L.popup({"maxWidth": "100%"});

        
            var html_f034a9417f554877ab864d9339bbddf6 = $(`<div id="html_f034a9417f554877ab864d9339bbddf6" style="width: 100.0%; height: 100.0%;">('52.7063657', '-2.7417849', 'Joyce', None, 'Horde', None, '1426')</div>`)[0];
            popup_780c173d7ba447ce8b12cdcfbbddf023.setContent(html_f034a9417f554877ab864d9339bbddf6);
        

        marker_7d728dc1eb1945289e29041cada837e9.bindPopup(popup_780c173d7ba447ce8b12cdcfbbddf023)
        ;

        
    
    
            var marker_c691d743c9034e6c8453dfa0b30e3c94 = L.marker(
                [40.7068663, -91.443469],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_77ec8a9c24384245bd1f9afc341c1fe7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_c691d743c9034e6c8453dfa0b30e3c94.setIcon(icon_77ec8a9c24384245bd1f9afc341c1fe7);
        
    
        var popup_e9cf36c254724466b87f74942ed2548c = L.popup({"maxWidth": "100%"});

        
            var html_edce7c30ddc844ddb2eaf7db26049a5d = $(`<div id="html_edce7c30ddc844ddb2eaf7db26049a5d" style="width: 100.0%; height: 100.0%;">('40.7068663', '-91.443469', 'Max', 'Wallace', 'Griffin', None, '1876')</div>`)[0];
            popup_e9cf36c254724466b87f74942ed2548c.setContent(html_edce7c30ddc844ddb2eaf7db26049a5d);
        

        marker_c691d743c9034e6c8453dfa0b30e3c94.bindPopup(popup_e9cf36c254724466b87f74942ed2548c)
        ;

        
    
    
            var marker_f3a4be155093448d9fb24bf2381fdfa1 = L.marker(
                [41.0283603, -91.5983959],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_41179d362f5d4effbbb74e8255179327 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f3a4be155093448d9fb24bf2381fdfa1.setIcon(icon_41179d362f5d4effbbb74e8255179327);
        
    
        var popup_fe7cc109ec4640b98920ee622df55a5c = L.popup({"maxWidth": "100%"});

        
            var html_6cb569ea94bb4b71bae531297d58f45e = $(`<div id="html_6cb569ea94bb4b71bae531297d58f45e" style="width: 100.0%; height: 100.0%;">('41.0283603', '-91.5983959', 'Anna', 'Ethel', 'King', None, '1880')</div>`)[0];
            popup_fe7cc109ec4640b98920ee622df55a5c.setContent(html_6cb569ea94bb4b71bae531297d58f45e);
        

        marker_f3a4be155093448d9fb24bf2381fdfa1.bindPopup(popup_fe7cc109ec4640b98920ee622df55a5c)
        ;

        
    
    
            var marker_50ad67a1828d45c6a17146a5e6d60801 = L.marker(
                [40.9686242, -97.4972726],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_f7ccf849b6564096bec9e86742a5d53f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_50ad67a1828d45c6a17146a5e6d60801.setIcon(icon_f7ccf849b6564096bec9e86742a5d53f);
        
    
        var popup_7de9e129676842b095fb465f518db2b6 = L.popup({"maxWidth": "100%"});

        
            var html_0360047886254d29b21a222afca692c7 = $(`<div id="html_0360047886254d29b21a222afca692c7" style="width: 100.0%; height: 100.0%;">('40.9686242', '-97.4972726', 'Zelia', 'Rebecca', 'Stone', None, '1882')</div>`)[0];
            popup_7de9e129676842b095fb465f518db2b6.setContent(html_0360047886254d29b21a222afca692c7);
        

        marker_50ad67a1828d45c6a17146a5e6d60801.bindPopup(popup_7de9e129676842b095fb465f518db2b6)
        ;

        
    
    
            var marker_f0872eda1d244fa9b56d7c468449cf53 = L.marker(
                [42.7409645, -74.9910112],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_d97fe295c1b54cf6b74f013553c47c82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f0872eda1d244fa9b56d7c468449cf53.setIcon(icon_d97fe295c1b54cf6b74f013553c47c82);
        
    
        var popup_c4f60167bca64ca5b1c5ae23a13c5258 = L.popup({"maxWidth": "100%"});

        
            var html_0fe20f77743846dc9c351fc0cec30d61 = $(`<div id="html_0fe20f77743846dc9c351fc0cec30d61" style="width: 100.0%; height: 100.0%;">('42.7409645', '-74.9910112', 'Lyle', 'Weeks', 'Stone', None, '1923')</div>`)[0];
            popup_c4f60167bca64ca5b1c5ae23a13c5258.setContent(html_0fe20f77743846dc9c351fc0cec30d61);
        

        marker_f0872eda1d244fa9b56d7c468449cf53.bindPopup(popup_c4f60167bca64ca5b1c5ae23a13c5258)
        ;

        
    
    
            var marker_5aa0394ed83f44aba13f8ea10b157491 = L.marker(
                [38.9016487, -107.926454],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_0322c38640794d4e83db7787012c0abf = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_5aa0394ed83f44aba13f8ea10b157491.setIcon(icon_0322c38640794d4e83db7787012c0abf);
        
    
        var popup_dbf85a5db100415d8df55f2c16191c51 = L.popup({"maxWidth": "100%"});

        
            var html_cffa8ffb21a04417928af806b9403481 = $(`<div id="html_cffa8ffb21a04417928af806b9403481" style="width: 100.0%; height: 100.0%;">('38.9016487', '-107.926454', 'William', 'Wallace', 'Stone', 'Rev', '1916')</div>`)[0];
            popup_dbf85a5db100415d8df55f2c16191c51.setContent(html_cffa8ffb21a04417928af806b9403481);
        

        marker_5aa0394ed83f44aba13f8ea10b157491.bindPopup(popup_dbf85a5db100415d8df55f2c16191c51)
        ;

        
    
    
            var marker_f8834926a40248a5b1e45c4a92457d26 = L.marker(
                [33.1795213, -96.4929797],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_7a6a4233592a4c1fb54c59fa55ae919a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_f8834926a40248a5b1e45c4a92457d26.setIcon(icon_7a6a4233592a4c1fb54c59fa55ae919a);
        
    
        var popup_f800c2250f7a4963984aa51b6f7aeda5 = L.popup({"maxWidth": "100%"});

        
            var html_a82f4c7770b548e4875a4e1889815e70 = $(`<div id="html_a82f4c7770b548e4875a4e1889815e70" style="width: 100.0%; height: 100.0%;">('33.1795213', '-96.4929797', 'Eugene', 'Marlow', 'Stone', None, '1922')</div>`)[0];
            popup_f800c2250f7a4963984aa51b6f7aeda5.setContent(html_a82f4c7770b548e4875a4e1889815e70);
        

        marker_f8834926a40248a5b1e45c4a92457d26.bindPopup(popup_f800c2250f7a4963984aa51b6f7aeda5)
        ;

        
    
    
            var marker_524ef87b084c45019f38b6497713b5bf = L.marker(
                [38.7611129, -102.7893667],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_64c38bea581b418bb2a46091261913b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_524ef87b084c45019f38b6497713b5bf.setIcon(icon_64c38bea581b418bb2a46091261913b2);
        
    
        var popup_293e7e215efb4170892063aaf482f4a8 = L.popup({"maxWidth": "100%"});

        
            var html_2d952f5e8c9a44f1b080a46625737d45 = $(`<div id="html_2d952f5e8c9a44f1b080a46625737d45" style="width: 100.0%; height: 100.0%;">('38.7611129', '-102.7893667', 'Sidney', 'Oscar', 'Stone', None, '1919')</div>`)[0];
            popup_293e7e215efb4170892063aaf482f4a8.setContent(html_2d952f5e8c9a44f1b080a46625737d45);
        

        marker_524ef87b084c45019f38b6497713b5bf.bindPopup(popup_293e7e215efb4170892063aaf482f4a8)
        ;

        
    
    
            var marker_945375b660c0471eaa84c317dd31f6d3 = L.marker(
                [41.4925374, -99.9018131],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_ce591db11720479192ea1f0f5e1ece38 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_945375b660c0471eaa84c317dd31f6d3.setIcon(icon_ce591db11720479192ea1f0f5e1ece38);
        
    
        var popup_e1153fa405df49e9b5818666e01724b6 = L.popup({"maxWidth": "100%"});

        
            var html_9cd2cd50a1954db7938f0d309f5aa13c = $(`<div id="html_9cd2cd50a1954db7938f0d309f5aa13c" style="width: 100.0%; height: 100.0%;">('41.4925374', '-99.9018131', 'Calvin', 'Enos', 'Stone', None, '1917')</div>`)[0];
            popup_e1153fa405df49e9b5818666e01724b6.setContent(html_9cd2cd50a1954db7938f0d309f5aa13c);
        

        marker_945375b660c0471eaa84c317dd31f6d3.bindPopup(popup_e1153fa405df49e9b5818666e01724b6)
        ;

        
    
    
            var marker_e4c7309658224f46b42a4c52989f270e = L.marker(
                [39.7341219, -90.2244662],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_1cd71a85b4b84db0aa0bf2717dd742bb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_e4c7309658224f46b42a4c52989f270e.setIcon(icon_1cd71a85b4b84db0aa0bf2717dd742bb);
        
    
        var popup_20f33835a29c485fab7cf585012e6659 = L.popup({"maxWidth": "100%"});

        
            var html_7d67208f24f94af4b8ae5b61f0d382f4 = $(`<div id="html_7d67208f24f94af4b8ae5b61f0d382f4" style="width: 100.0%; height: 100.0%;">('39.7341219', '-90.2244662', 'Charles', 'Grant', 'Eckles', None, '1868')</div>`)[0];
            popup_20f33835a29c485fab7cf585012e6659.setContent(html_7d67208f24f94af4b8ae5b61f0d382f4);
        

        marker_e4c7309658224f46b42a4c52989f270e.bindPopup(popup_20f33835a29c485fab7cf585012e6659)
        ;

        
    
    
            var marker_4241fede76be40a490149ac7383855cb = L.marker(
                [40.7947466, -74.2648829],
                {}
            ).addTo(marker_cluster_6def46a40f84458ab5067c5ca15ebdfd);
        
    
            var icon_cb2c684fb969450b927671feb56468cb = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "green", "prefix": "glyphicon"}
            );
            marker_4241fede76be40a490149ac7383855cb.setIcon(icon_cb2c684fb969450b927671feb56468cb);
        
    
        var popup_5d7a7f92472747aebf73f88fb56fd02c = L.popup({"maxWidth": "100%"});

        
            var html_adddbc7be7e94f11a533552ae4615ce4 = $(`<div id="html_adddbc7be7e94f11a533552ae4615ce4" style="width: 100.0%; height: 100.0%;">('40.7947466', '-74.2648829', 'Anna', 'Fowler', 'Swingle', None, '1873')</div>`)[0];
            popup_5d7a7f92472747aebf73f88fb56fd02c.setContent(html_adddbc7be7e94f11a533552ae4615ce4);
        

        marker_4241fede76be40a490149ac7383855cb.bindPopup(popup_5d7a7f92472747aebf73f88fb56fd02c)
        ;

        
    
    
            var marker_cluster_23af9d19400142ac9e749be24754534e = L.markerClusterGroup(
                {}
            );
            map_04d3c517583d488cabb5445a0c8720f2.addLayer(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var marker_9103fde1c9624b7dbd493ad38db76b17 = L.marker(
                [39.0322, -86.9824],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_04502bbcc67b48b9a34044e22be06cd5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_9103fde1c9624b7dbd493ad38db76b17.setIcon(icon_04502bbcc67b48b9a34044e22be06cd5);
        
    
        var popup_0a0a65c01c4342fb8c3e2c6e1b0fa1a2 = L.popup({"maxWidth": "100%"});

        
            var html_ad554b7543714cf88b009d957ac52ecc = $(`<div id="html_ad554b7543714cf88b009d957ac52ecc" style="width: 100.0%; height: 100.0%;">('39.0322', '-86.9824', 'Solomon', None, 'Stone', 'Sr', '1852')</div>`)[0];
            popup_0a0a65c01c4342fb8c3e2c6e1b0fa1a2.setContent(html_ad554b7543714cf88b009d957ac52ecc);
        

        marker_9103fde1c9624b7dbd493ad38db76b17.bindPopup(popup_0a0a65c01c4342fb8c3e2c6e1b0fa1a2)
        ;

        
    
    
            var marker_988d442b39a840fb85e59e8379cf192b = L.marker(
                [39.0444, -95.3947],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_3d56b324c1bf4665a96d8d7b9ae62bb9 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_988d442b39a840fb85e59e8379cf192b.setIcon(icon_3d56b324c1bf4665a96d8d7b9ae62bb9);
        
    
        var popup_786aaec20b674772a984820a07b1ce0a = L.popup({"maxWidth": "100%"});

        
            var html_4949c215e1f5490bbcb779646fa00a18 = $(`<div id="html_4949c215e1f5490bbcb779646fa00a18" style="width: 100.0%; height: 100.0%;">('39.0444', '-95.3947', 'William', 'Alexander', 'Cardwell', None, '1903')</div>`)[0];
            popup_786aaec20b674772a984820a07b1ce0a.setContent(html_4949c215e1f5490bbcb779646fa00a18);
        

        marker_988d442b39a840fb85e59e8379cf192b.bindPopup(popup_786aaec20b674772a984820a07b1ce0a)
        ;

        
    
    
            var marker_c9ae850a9aca4925bf997a3dd2303f0b = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_45eb1557a6084d3dbd876d21a153475d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_c9ae850a9aca4925bf997a3dd2303f0b.setIcon(icon_45eb1557a6084d3dbd876d21a153475d);
        
    
        var popup_4d6db4f416964eba911714083dcf40f4 = L.popup({"maxWidth": "100%"});

        
            var html_c826f48b7a6b4bd1ada1ecccee2efab7 = $(`<div id="html_c826f48b7a6b4bd1ada1ecccee2efab7" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'William', 'Maximillian', 'Stone', None, '1660')</div>`)[0];
            popup_4d6db4f416964eba911714083dcf40f4.setContent(html_c826f48b7a6b4bd1ada1ecccee2efab7);
        

        marker_c9ae850a9aca4925bf997a3dd2303f0b.bindPopup(popup_4d6db4f416964eba911714083dcf40f4)
        ;

        
    
    
            var marker_50fb76dfee7d4f169ca41911050112c0 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_7b24c7ce1c674d87b588eb4e4b345343 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_50fb76dfee7d4f169ca41911050112c0.setIcon(icon_7b24c7ce1c674d87b588eb4e4b345343);
        
    
        var popup_8abd92ea49074cc4a03044f84dcf20ab = L.popup({"maxWidth": "100%"});

        
            var html_e2d9903d8de64da397a44d6303ba8050 = $(`<div id="html_e2d9903d8de64da397a44d6303ba8050" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Thomas', None, 'Stone', 'Sr, Captain', '1727')</div>`)[0];
            popup_8abd92ea49074cc4a03044f84dcf20ab.setContent(html_e2d9903d8de64da397a44d6303ba8050);
        

        marker_50fb76dfee7d4f169ca41911050112c0.bindPopup(popup_8abd92ea49074cc4a03044f84dcf20ab)
        ;

        
    
    
            var marker_349fd00fedcb4ff4b2c40cd91210fa09 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_c9e04f888ef4426ca6d380cccd1b9231 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_349fd00fedcb4ff4b2c40cd91210fa09.setIcon(icon_c9e04f888ef4426ca6d380cccd1b9231);
        
    
        var popup_9dea3736f2c04b1f82d9cfc5ba2b304c = L.popup({"maxWidth": "100%"});

        
            var html_fc8aa274e76841a586b9060d216acf61 = $(`<div id="html_fc8aa274e76841a586b9060d216acf61" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Elizabeth', None, 'Mason', None, '1748')</div>`)[0];
            popup_9dea3736f2c04b1f82d9cfc5ba2b304c.setContent(html_fc8aa274e76841a586b9060d216acf61);
        

        marker_349fd00fedcb4ff4b2c40cd91210fa09.bindPopup(popup_9dea3736f2c04b1f82d9cfc5ba2b304c)
        ;

        
    
    
            var marker_3f87b3a5239e4c35beb29771863bcc8a = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_b9ffed69241f4e9cbe276635989dfea7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_3f87b3a5239e4c35beb29771863bcc8a.setIcon(icon_b9ffed69241f4e9cbe276635989dfea7);
        
    
        var popup_a6bce032f5194e4bad7f1458d8774675 = L.popup({"maxWidth": "100%"});

        
            var html_703a0d59ae4e4fa79edcde54c27ad94a = $(`<div id="html_703a0d59ae4e4fa79edcde54c27ad94a" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Elizabeth', 'Hannah', 'Stone', None, '1773')</div>`)[0];
            popup_a6bce032f5194e4bad7f1458d8774675.setContent(html_703a0d59ae4e4fa79edcde54c27ad94a);
        

        marker_3f87b3a5239e4c35beb29771863bcc8a.bindPopup(popup_a6bce032f5194e4bad7f1458d8774675)
        ;

        
    
    
            var marker_7db30227f2ee425d9bc86573a90968ae = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_a65d76d4c15e4e7883547c2ff658a011 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_7db30227f2ee425d9bc86573a90968ae.setIcon(icon_a65d76d4c15e4e7883547c2ff658a011);
        
    
        var popup_03867232316d4ea79fc97854fc258946 = L.popup({"maxWidth": "100%"});

        
            var html_bfc15a6c53ad47c48c78c638515e4afd = $(`<div id="html_bfc15a6c53ad47c48c78c638515e4afd" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Elizabeth', 'Mason', 'Jenifer', None, '1748')</div>`)[0];
            popup_03867232316d4ea79fc97854fc258946.setContent(html_bfc15a6c53ad47c48c78c638515e4afd);
        

        marker_7db30227f2ee425d9bc86573a90968ae.bindPopup(popup_03867232316d4ea79fc97854fc258946)
        ;

        
    
    
            var marker_972a6b942b4b4e82960880b9b7ac7df5 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_b78fe6e9369c48f9acb7c1e4cd76ae72 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_972a6b942b4b4e82960880b9b7ac7df5.setIcon(icon_b78fe6e9369c48f9acb7c1e4cd76ae72);
        
    
        var popup_e56367ebfdbf404893258073eb8ebb27 = L.popup({"maxWidth": "100%"});

        
            var html_d81d11f3579b4d0fb51c7e1328e2482b = $(`<div id="html_d81d11f3579b4d0fb51c7e1328e2482b" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Daniel', 'Michael', 'Jenifer', 'Sr', '1730')</div>`)[0];
            popup_e56367ebfdbf404893258073eb8ebb27.setContent(html_d81d11f3579b4d0fb51c7e1328e2482b);
        

        marker_972a6b942b4b4e82960880b9b7ac7df5.bindPopup(popup_e56367ebfdbf404893258073eb8ebb27)
        ;

        
    
    
            var marker_e02bbd02aa6649179a870215d91c41bc = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_59c61a45d8d9429e8721eb4cab1e9280 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_e02bbd02aa6649179a870215d91c41bc.setIcon(icon_59c61a45d8d9429e8721eb4cab1e9280);
        
    
        var popup_ec4ce00a2a7a4212824eac79d1f492a2 = L.popup({"maxWidth": "100%"});

        
            var html_932d856adf7d4a7a9ff2dd530fb0c986 = $(`<div id="html_932d856adf7d4a7a9ff2dd530fb0c986" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Martha', 'Jane', 'Hoskins', None, '1718')</div>`)[0];
            popup_ec4ce00a2a7a4212824eac79d1f492a2.setContent(html_932d856adf7d4a7a9ff2dd530fb0c986);
        

        marker_e02bbd02aa6649179a870215d91c41bc.bindPopup(popup_ec4ce00a2a7a4212824eac79d1f492a2)
        ;

        
    
    
            var marker_424a66194bb84c3195035fdff15435dc = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_1b5ae3ecff93420e9cccbfcdcaf81d0a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_424a66194bb84c3195035fdff15435dc.setIcon(icon_1b5ae3ecff93420e9cccbfcdcaf81d0a);
        
    
        var popup_1d4e8282af244c2683d975e3904aff08 = L.popup({"maxWidth": "100%"});

        
            var html_b1e29c0461894e2fbb8407b1a3fc7e51 = $(`<div id="html_b1e29c0461894e2fbb8407b1a3fc7e51" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'John', None, 'Stone', 'Sr', '1775')</div>`)[0];
            popup_1d4e8282af244c2683d975e3904aff08.setContent(html_b1e29c0461894e2fbb8407b1a3fc7e51);
        

        marker_424a66194bb84c3195035fdff15435dc.bindPopup(popup_1d4e8282af244c2683d975e3904aff08)
        ;

        
    
    
            var marker_1ca93c5559d34e07a9fe95d8c04c2ba2 = L.marker(
                [38.5222, -77.1025],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_528604720ab248d9a2c06c9afb8ee2ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_1ca93c5559d34e07a9fe95d8c04c2ba2.setIcon(icon_528604720ab248d9a2c06c9afb8ee2ff);
        
    
        var popup_a8ea42c7b2c64630818097b5b4633454 = L.popup({"maxWidth": "100%"});

        
            var html_556233158e6b4112a2ba2300d9c5509b = $(`<div id="html_556233158e6b4112a2ba2300d9c5509b" style="width: 100.0%; height: 100.0%;">('38.5222', '-77.1025', 'Matthew', None, 'Stone', None, '1750')</div>`)[0];
            popup_a8ea42c7b2c64630818097b5b4633454.setContent(html_556233158e6b4112a2ba2300d9c5509b);
        

        marker_1ca93c5559d34e07a9fe95d8c04c2ba2.bindPopup(popup_a8ea42c7b2c64630818097b5b4633454)
        ;

        
    
    
            var marker_8abf8b41a7684ecf862c5857e623126c = L.marker(
                [37.7063, -75.8069],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_a39da2bbd8b14fe5af29ad758fdca701 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_8abf8b41a7684ecf862c5857e623126c.setIcon(icon_a39da2bbd8b14fe5af29ad758fdca701);
        
    
        var popup_fdb0c2b3a2be493f88fed642e783616c = L.popup({"maxWidth": "100%"});

        
            var html_2064942920e240c2a0d1954880cedb63 = $(`<div id="html_2064942920e240c2a0d1954880cedb63" style="width: 100.0%; height: 100.0%;">('37.7063', '-75.8069', 'Katherine', 'Croshaw', 'Graves', None, '1636')</div>`)[0];
            popup_fdb0c2b3a2be493f88fed642e783616c.setContent(html_2064942920e240c2a0d1954880cedb63);
        

        marker_8abf8b41a7684ecf862c5857e623126c.bindPopup(popup_fdb0c2b3a2be493f88fed642e783616c)
        ;

        
    
    
            var marker_313fd18b99584a16acc4287098ac006b = L.marker(
                [37.7063, -75.8069],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_8502f55bcf43496e98399501359ba1ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_313fd18b99584a16acc4287098ac006b.setIcon(icon_8502f55bcf43496e98399501359ba1ae);
        
    
        var popup_e149b988102a40b7b926ea1c4cbcdf60 = L.popup({"maxWidth": "100%"});

        
            var html_786adb5634b54f228286670e69334a06 = $(`<div id="html_786adb5634b54f228286670e69334a06" style="width: 100.0%; height: 100.0%;">('37.7063', '-75.8069', 'Thomas', None, 'Graves', 'Jr', '1635')</div>`)[0];
            popup_e149b988102a40b7b926ea1c4cbcdf60.setContent(html_786adb5634b54f228286670e69334a06);
        

        marker_313fd18b99584a16acc4287098ac006b.bindPopup(popup_e149b988102a40b7b926ea1c4cbcdf60)
        ;

        
    
    
            var marker_b7537cfd78dd41b9b9178b34053ce599 = L.marker(
                [38.5028, -90.2804],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_681b470c286f4d35af07c542743b5073 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_b7537cfd78dd41b9b9178b34053ce599.setIcon(icon_681b470c286f4d35af07c542743b5073);
        
    
        var popup_12ae3bd7450f4e5c8bd050c76cc5151b = L.popup({"maxWidth": "100%"});

        
            var html_d026f9be4f244f5789843d7a5911b0dd = $(`<div id="html_d026f9be4f244f5789843d7a5911b0dd" style="width: 100.0%; height: 100.0%;">('38.5028', '-90.2804', 'Solomon', None, 'Stone', 'Jr', '1863')</div>`)[0];
            popup_12ae3bd7450f4e5c8bd050c76cc5151b.setContent(html_d026f9be4f244f5789843d7a5911b0dd);
        

        marker_b7537cfd78dd41b9b9178b34053ce599.bindPopup(popup_12ae3bd7450f4e5c8bd050c76cc5151b)
        ;

        
    
    
            var marker_55d32fb11a404dd8be7b1598651d4bf9 = L.marker(
                [53.1047, -1.5624],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_d5bfb2b6078f4b90a74ad93c9f8ee418 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_55d32fb11a404dd8be7b1598651d4bf9.setIcon(icon_d5bfb2b6078f4b90a74ad93c9f8ee418);
        
    
        var popup_704ad45c19d34c0ebd520def088513c9 = L.popup({"maxWidth": "100%"});

        
            var html_69600f2eb4594fe0833a3f29664e5fda = $(`<div id="html_69600f2eb4594fe0833a3f29664e5fda" style="width: 100.0%; height: 100.0%;">('53.1047', '-1.5624', 'William', 'Franklin', 'Stone', None, '1945')</div>`)[0];
            popup_704ad45c19d34c0ebd520def088513c9.setContent(html_69600f2eb4594fe0833a3f29664e5fda);
        

        marker_55d32fb11a404dd8be7b1598651d4bf9.bindPopup(popup_704ad45c19d34c0ebd520def088513c9)
        ;

        
    
    
            var marker_3e7292f465034f62ad3840d97d5b2680 = L.marker(
                [50.266, -5.0527],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_ff92315a7ad7424189437675e336c43d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_3e7292f465034f62ad3840d97d5b2680.setIcon(icon_ff92315a7ad7424189437675e336c43d);
        
    
        var popup_633a3da434054039b9382149daef6832 = L.popup({"maxWidth": "100%"});

        
            var html_ea8910110ca54ff0a702acdfc70ef332 = $(`<div id="html_ea8910110ca54ff0a702acdfc70ef332" style="width: 100.0%; height: 100.0%;">('50.2660', '-5.0527', 'Susan', 'Elizabeth', 'Stone', None, '1911')</div>`)[0];
            popup_633a3da434054039b9382149daef6832.setContent(html_ea8910110ca54ff0a702acdfc70ef332);
        

        marker_3e7292f465034f62ad3840d97d5b2680.bindPopup(popup_633a3da434054039b9382149daef6832)
        ;

        
    
    
            var marker_f7a903800ded4507a975d5d38d4b757c = L.marker(
                [38.106, -76.3637],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_0fff5185f59b4845990d3e61c6b693b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_f7a903800ded4507a975d5d38d4b757c.setIcon(icon_0fff5185f59b4845990d3e61c6b693b2);
        
    
        var popup_f1963c4842014d4e8aec929770b5fce5 = L.popup({"maxWidth": "100%"});

        
            var html_7683e053b15b49a789dd27a9592a4ede = $(`<div id="html_7683e053b15b49a789dd27a9592a4ede" style="width: 100.0%; height: 100.0%;">('38.1060', '-76.3637', 'Verlinda', 'Graves', 'Stone', None, '1675')</div>`)[0];
            popup_f1963c4842014d4e8aec929770b5fce5.setContent(html_7683e053b15b49a789dd27a9592a4ede);
        

        marker_f7a903800ded4507a975d5d38d4b757c.bindPopup(popup_f1963c4842014d4e8aec929770b5fce5)
        ;

        
    
    
            var marker_f69666b26bd448bebad216211824a687 = L.marker(
                [38.8048, -77.0469],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_b02e130e1a2648658e49b5bce8ae2fe0 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_f69666b26bd448bebad216211824a687.setIcon(icon_b02e130e1a2648658e49b5bce8ae2fe0);
        
    
        var popup_21e0cd08d3da4ab2a3511260f43e0ee1 = L.popup({"maxWidth": "100%"});

        
            var html_0298935990284b1c9bcbbc6202d04d51 = $(`<div id="html_0298935990284b1c9bcbbc6202d04d51" style="width: 100.0%; height: 100.0%;">('38.8048', '-77.0469', 'Thomas', None, 'Stone', None, '1787')</div>`)[0];
            popup_21e0cd08d3da4ab2a3511260f43e0ee1.setContent(html_0298935990284b1c9bcbbc6202d04d51);
        

        marker_f69666b26bd448bebad216211824a687.bindPopup(popup_21e0cd08d3da4ab2a3511260f43e0ee1)
        ;

        
    
    
            var marker_09d49493b1ed4a909d71e03c5fc06350 = L.marker(
                [38.9784, -76.4922],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_9e0cb44b0e5c46059beb2901c92e7f38 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_09d49493b1ed4a909d71e03c5fc06350.setIcon(icon_9e0cb44b0e5c46059beb2901c92e7f38);
        
    
        var popup_bcdec2c88d5e46eca4382adc063cb320 = L.popup({"maxWidth": "100%"});

        
            var html_a929d7d60af3476098cff8416f56fd9c = $(`<div id="html_a929d7d60af3476098cff8416f56fd9c" style="width: 100.0%; height: 100.0%;">('38.9784', '-76.4922', 'Daniel', 'St. Thomas', 'Jenifer', None, '1790')</div>`)[0];
            popup_bcdec2c88d5e46eca4382adc063cb320.setContent(html_a929d7d60af3476098cff8416f56fd9c);
        

        marker_09d49493b1ed4a909d71e03c5fc06350.bindPopup(popup_bcdec2c88d5e46eca4382adc063cb320)
        ;

        
    
    
            var marker_90cabbcf38394645b1719b21d69aa171 = L.marker(
                [38.8403, -97.6114],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_95ed914f8ae949f999c7d29f8d382ca1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_90cabbcf38394645b1719b21d69aa171.setIcon(icon_95ed914f8ae949f999c7d29f8d382ca1);
        
    
        var popup_9a9956a95b324b1f86f565397a1b0a0b = L.popup({"maxWidth": "100%"});

        
            var html_f74986b346454f0fa59c6d2af577d40f = $(`<div id="html_f74986b346454f0fa59c6d2af577d40f" style="width: 100.0%; height: 100.0%;">('38.8403', '-97.6114', 'Rilla', 'Jane', 'Brittendall', None, '1954')</div>`)[0];
            popup_9a9956a95b324b1f86f565397a1b0a0b.setContent(html_f74986b346454f0fa59c6d2af577d40f);
        

        marker_90cabbcf38394645b1719b21d69aa171.bindPopup(popup_9a9956a95b324b1f86f565397a1b0a0b)
        ;

        
    
    
            var marker_5b211af6e5e34a0ab4687a9baea9b2b4 = L.marker(
                [38.3607, -75.5994],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_a91ec180639b49c9b8c1e46d36fc6fa3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_5b211af6e5e34a0ab4687a9baea9b2b4.setIcon(icon_a91ec180639b49c9b8c1e46d36fc6fa3);
        
    
        var popup_e0040604663d4a5792329598d418ba6f = L.popup({"maxWidth": "100%"});

        
            var html_5aef42de055e4098b820f6c3071d56bb = $(`<div id="html_5aef42de055e4098b820f6c3071d56bb" style="width: 100.0%; height: 100.0%;">('38.3607', '-75.5994', 'William', 'Murray', 'Stone', None, '1838')</div>`)[0];
            popup_e0040604663d4a5792329598d418ba6f.setContent(html_5aef42de055e4098b820f6c3071d56bb);
        

        marker_5b211af6e5e34a0ab4687a9baea9b2b4.bindPopup(popup_e0040604663d4a5792329598d418ba6f)
        ;

        
    
    
            var marker_e5e9a87a273f4b83be8e09f5870c7a32 = L.marker(
                [38.5302, -77.036],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_cf1447ea0810476d8e358db4068d2c87 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_e5e9a87a273f4b83be8e09f5870c7a32.setIcon(icon_cf1447ea0810476d8e358db4068d2c87);
        
    
        var popup_4529eddba39e4e6b81b75865051cf3b9 = L.popup({"maxWidth": "100%"});

        
            var html_de4f4a9d08174ce5ba4c6df726be4fab = $(`<div id="html_de4f4a9d08174ce5ba4c6df726be4fab" style="width: 100.0%; height: 100.0%;">('38.5302', '-77.0360', 'John', None, 'Stone', None, '1698')</div>`)[0];
            popup_4529eddba39e4e6b81b75865051cf3b9.setContent(html_de4f4a9d08174ce5ba4c6df726be4fab);
        

        marker_e5e9a87a273f4b83be8e09f5870c7a32.bindPopup(popup_4529eddba39e4e6b81b75865051cf3b9)
        ;

        
    
    
            var marker_3b01d03c1cb84625b7a375cc6a36d88e = L.marker(
                [39.0228, -94.7152],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_5dfba55c559948f1870e4130a4f24790 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_3b01d03c1cb84625b7a375cc6a36d88e.setIcon(icon_5dfba55c559948f1870e4130a4f24790);
        
    
        var popup_5f82edecfc994e8396f452fbf6a602d8 = L.popup({"maxWidth": "100%"});

        
            var html_d845a8177e864ad8a9a2e0057c06fc58 = $(`<div id="html_d845a8177e864ad8a9a2e0057c06fc58" style="width: 100.0%; height: 100.0%;">('39.0228', '-94.7152', 'Nancy', 'Jane', 'Stone', None, '1917')</div>`)[0];
            popup_5f82edecfc994e8396f452fbf6a602d8.setContent(html_d845a8177e864ad8a9a2e0057c06fc58);
        

        marker_3b01d03c1cb84625b7a375cc6a36d88e.bindPopup(popup_5f82edecfc994e8396f452fbf6a602d8)
        ;

        
    
    
            var marker_c70ac7ba25614ddda31ead09a2d3df16 = L.marker(
                [38.8403, -97.6114],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_ed169944d67842c19ca4d580e13c9e97 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_c70ac7ba25614ddda31ead09a2d3df16.setIcon(icon_ed169944d67842c19ca4d580e13c9e97);
        
    
        var popup_fe7cd6c267fc4d3f8bb33f4309d8fa66 = L.popup({"maxWidth": "100%"});

        
            var html_634dbca5d03e403da033af4af1a04f6d = $(`<div id="html_634dbca5d03e403da033af4af1a04f6d" style="width: 100.0%; height: 100.0%;">('38.8403', '-97.6114', 'Francis', 'Marion', 'Stone', None, '1895')</div>`)[0];
            popup_fe7cd6c267fc4d3f8bb33f4309d8fa66.setContent(html_634dbca5d03e403da033af4af1a04f6d);
        

        marker_c70ac7ba25614ddda31ead09a2d3df16.bindPopup(popup_fe7cd6c267fc4d3f8bb33f4309d8fa66)
        ;

        
    
    
            var marker_16b2b80e895343c19c5fdb5da767a0e8 = L.marker(
                [36.3743, -80.6771],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_9f6c0ab3f98044d68b52bc2fd40b41d4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_16b2b80e895343c19c5fdb5da767a0e8.setIcon(icon_9f6c0ab3f98044d68b52bc2fd40b41d4);
        
    
        var popup_7a615fb4bd9b40df9e3c1fbe9a5cc749 = L.popup({"maxWidth": "100%"});

        
            var html_a24cf40f980e4637b1c8a856bbec9c53 = $(`<div id="html_a24cf40f980e4637b1c8a856bbec9c53" style="width: 100.0%; height: 100.0%;">('36.3743', '-80.6771', 'Betsy', 'Murray', 'Stone', None, '1842')</div>`)[0];
            popup_7a615fb4bd9b40df9e3c1fbe9a5cc749.setContent(html_a24cf40f980e4637b1c8a856bbec9c53);
        

        marker_16b2b80e895343c19c5fdb5da767a0e8.bindPopup(popup_7a615fb4bd9b40df9e3c1fbe9a5cc749)
        ;

        
    
    
            var marker_2a74dab99fdb4586a71a0fbaeefa9b27 = L.marker(
                [36.3743, -80.6771],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_49d773cd1ae84bdf824dd1a8621c9584 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_2a74dab99fdb4586a71a0fbaeefa9b27.setIcon(icon_49d773cd1ae84bdf824dd1a8621c9584);
        
    
        var popup_a63a5d2c6a0d4b5bbd271bffdcdd8e42 = L.popup({"maxWidth": "100%"});

        
            var html_a0d3467a70de420fb69ca4cd2258d79d = $(`<div id="html_a0d3467a70de420fb69ca4cd2258d79d" style="width: 100.0%; height: 100.0%;">('36.3743', '-80.6771', 'Enoch', None, 'Stone', 'Sr', '1823')</div>`)[0];
            popup_a63a5d2c6a0d4b5bbd271bffdcdd8e42.setContent(html_a0d3467a70de420fb69ca4cd2258d79d);
        

        marker_2a74dab99fdb4586a71a0fbaeefa9b27.bindPopup(popup_a63a5d2c6a0d4b5bbd271bffdcdd8e42)
        ;

        
    
    
            var marker_2372078824d04b75b4cf2968494f84ea = L.marker(
                [36.3743, -80.6771],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_602c51668196448cb3eeed0b14eaf8b2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_2372078824d04b75b4cf2968494f84ea.setIcon(icon_602c51668196448cb3eeed0b14eaf8b2);
        
    
        var popup_ceb6a5f4db0d43429bcc1fa65d9a3968 = L.popup({"maxWidth": "100%"});

        
            var html_c75fb14284d34a18ab4f5e017a942b81 = $(`<div id="html_c75fb14284d34a18ab4f5e017a942b81" style="width: 100.0%; height: 100.0%;">('36.3743', '-80.6771', 'John', None, 'Stone', None, '1839')</div>`)[0];
            popup_ceb6a5f4db0d43429bcc1fa65d9a3968.setContent(html_c75fb14284d34a18ab4f5e017a942b81);
        

        marker_2372078824d04b75b4cf2968494f84ea.bindPopup(popup_ceb6a5f4db0d43429bcc1fa65d9a3968)
        ;

        
    
    
            var marker_154bec66925940d4b6756387a19605d3 = L.marker(
                [38.7839, -77.6078],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_e00d03e7f5aa403dbb74a7b7678c626c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_154bec66925940d4b6756387a19605d3.setIcon(icon_e00d03e7f5aa403dbb74a7b7678c626c);
        
    
        var popup_5fbd091b5ef54579bd8c7d0a68b9cde8 = L.popup({"maxWidth": "100%"});

        
            var html_bf128d19f919473d9b43f450b3dcebd7 = $(`<div id="html_bf128d19f919473d9b43f450b3dcebd7" style="width: 100.0%; height: 100.0%;">('38.7839', '-77.6078', 'Thomas', None, 'Stone', 'III', '1748')</div>`)[0];
            popup_5fbd091b5ef54579bd8c7d0a68b9cde8.setContent(html_bf128d19f919473d9b43f450b3dcebd7);
        

        marker_154bec66925940d4b6756387a19605d3.bindPopup(popup_5fbd091b5ef54579bd8c7d0a68b9cde8)
        ;

        
    
    
            var marker_b5580c0c0f9e470db290614337d65887 = L.marker(
                [38.7209, -77.791],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_f9793a42006942b39ce2c509e374c439 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_b5580c0c0f9e470db290614337d65887.setIcon(icon_f9793a42006942b39ce2c509e374c439);
        
    
        var popup_95bc3cca67164d79b01879da52d0a48f = L.popup({"maxWidth": "100%"});

        
            var html_df7530fb44544cd1a7d1a21a972f49e2 = $(`<div id="html_df7530fb44544cd1a7d1a21a972f49e2" style="width: 100.0%; height: 100.0%;">('38.7209', '-77.7910', 'Thomas', None, 'Stone', 'Jr', '1748')</div>`)[0];
            popup_95bc3cca67164d79b01879da52d0a48f.setContent(html_df7530fb44544cd1a7d1a21a972f49e2);
        

        marker_b5580c0c0f9e470db290614337d65887.bindPopup(popup_95bc3cca67164d79b01879da52d0a48f)
        ;

        
    
    
            var marker_a18dcf0df44e4d049d25c53347c2825c = L.marker(
                [53.6625, -2.7771],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_dbe55640e6854fffa7f947003299ddf8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_a18dcf0df44e4d049d25c53347c2825c.setIcon(icon_dbe55640e6854fffa7f947003299ddf8);
        
    
        var popup_c3714be4ed6240e0812162fc74e7da40 = L.popup({"maxWidth": "100%"});

        
            var html_a16b22af9ad743ee9af88897c6719011 = $(`<div id="html_a16b22af9ad743ee9af88897c6719011" style="width: 100.0%; height: 100.0%;">('53.6625', '-2.7771', 'Richard', None, 'Stone', None, '1605')</div>`)[0];
            popup_c3714be4ed6240e0812162fc74e7da40.setContent(html_a16b22af9ad743ee9af88897c6719011);
        

        marker_a18dcf0df44e4d049d25c53347c2825c.bindPopup(popup_c3714be4ed6240e0812162fc74e7da40)
        ;

        
    
    
            var marker_56a99b8aa46f457aa98ed04689e285c6 = L.marker(
                [41.4615, -71.9787],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_dc0d36163d854040ba57737357732a22 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_56a99b8aa46f457aa98ed04689e285c6.setIcon(icon_dc0d36163d854040ba57737357732a22);
        
    
        var popup_e56f02a9efc24d55a518fa0eecc7d3d4 = L.popup({"maxWidth": "100%"});

        
            var html_a6837efc21d8458c8ebb73a89c082dda = $(`<div id="html_a6837efc21d8458c8ebb73a89c082dda" style="width: 100.0%; height: 100.0%;">('41.4615', '-71.9787', 'John', None, 'Stone', 'Sr', '1636')</div>`)[0];
            popup_e56f02a9efc24d55a518fa0eecc7d3d4.setContent(html_a6837efc21d8458c8ebb73a89c082dda);
        

        marker_56a99b8aa46f457aa98ed04689e285c6.bindPopup(popup_e56f02a9efc24d55a518fa0eecc7d3d4)
        ;

        
    
    
            var marker_bc822f66de4b40a39bd5d88c7684dba3 = L.marker(
                [53.8869, -2.288],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_616b988b7833434f912674bf40dab433 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_bc822f66de4b40a39bd5d88c7684dba3.setIcon(icon_616b988b7833434f912674bf40dab433);
        
    
        var popup_f5bd0eae17df4484a2030604fd91d007 = L.popup({"maxWidth": "100%"});

        
            var html_ee5d6b2a6ac34556a7a7999a380b7180 = $(`<div id="html_ee5d6b2a6ac34556a7a7999a380b7180" style="width: 100.0%; height: 100.0%;">('53.8869', '-2.2880', 'William', None, 'Stone', None, '1589')</div>`)[0];
            popup_f5bd0eae17df4484a2030604fd91d007.setContent(html_ee5d6b2a6ac34556a7a7999a380b7180);
        

        marker_bc822f66de4b40a39bd5d88c7684dba3.bindPopup(popup_f5bd0eae17df4484a2030604fd91d007)
        ;

        
    
    
            var marker_6dfbf72fe9a34253adfd949c54522000 = L.marker(
                [53.8869, -2.288],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_46078bcf2ce54859b694dd3c0e2b6d49 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_6dfbf72fe9a34253adfd949c54522000.setIcon(icon_46078bcf2ce54859b694dd3c0e2b6d49);
        
    
        var popup_1ca61659e970410e9bfc7c71ffd5fe82 = L.popup({"maxWidth": "100%"});

        
            var html_982088c085664a76aeb9620d0ce7d75a = $(`<div id="html_982088c085664a76aeb9620d0ce7d75a" style="width: 100.0%; height: 100.0%;">('53.8869', '-2.2880', 'Jane', 'Dorothy', 'Stone', None, '1606')</div>`)[0];
            popup_1ca61659e970410e9bfc7c71ffd5fe82.setContent(html_982088c085664a76aeb9620d0ce7d75a);
        

        marker_6dfbf72fe9a34253adfd949c54522000.bindPopup(popup_1ca61659e970410e9bfc7c71ffd5fe82)
        ;

        
    
    
            var marker_915a483da18f49f5a235420b7e7f9cee = L.marker(
                [53.8869, -2.288],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_ae43ae8342da4ae38e30f5c2ec7ed077 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_915a483da18f49f5a235420b7e7f9cee.setIcon(icon_ae43ae8342da4ae38e30f5c2ec7ed077);
        
    
        var popup_1cce390610374f61a3f392a2a65b4391 = L.popup({"maxWidth": "100%"});

        
            var html_30ddc3c3137845d0951c4a3820847a0c = $(`<div id="html_30ddc3c3137845d0951c4a3820847a0c" style="width: 100.0%; height: 100.0%;">('53.8869', '-2.2880', 'Isabelle', 'De Croston', 'Stone', None, '1610')</div>`)[0];
            popup_1cce390610374f61a3f392a2a65b4391.setContent(html_30ddc3c3137845d0951c4a3820847a0c);
        

        marker_915a483da18f49f5a235420b7e7f9cee.bindPopup(popup_1cce390610374f61a3f392a2a65b4391)
        ;

        
    
    
            var marker_f8e4433d35d445df960edde9d0029245 = L.marker(
                [53.1003, -0.9936],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_92b1ba54d18a45559db54aa96250b535 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_f8e4433d35d445df960edde9d0029245.setIcon(icon_92b1ba54d18a45559db54aa96250b535);
        
    
        var popup_fdc56766f6f3403c9e28eafb790d4d82 = L.popup({"maxWidth": "100%"});

        
            var html_fc778bb237024f859e2a3ec89142c96c = $(`<div id="html_fc778bb237024f859e2a3ec89142c96c" style="width: 100.0%; height: 100.0%;">('53.1003', '-0.9936', 'William', None, 'Fletcher', None, '1862')</div>`)[0];
            popup_fdc56766f6f3403c9e28eafb790d4d82.setContent(html_fc778bb237024f859e2a3ec89142c96c);
        

        marker_f8e4433d35d445df960edde9d0029245.bindPopup(popup_fdc56766f6f3403c9e28eafb790d4d82)
        ;

        
    
    
            var marker_3bf10596ad0441019e77a7f2e3ea371d = L.marker(
                [53.1003, -0.9936],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_015ee91802e641758fd64f4f8447c88d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_3bf10596ad0441019e77a7f2e3ea371d.setIcon(icon_015ee91802e641758fd64f4f8447c88d);
        
    
        var popup_dd1705144aef43d8bc78ea2e9aafec9d = L.popup({"maxWidth": "100%"});

        
            var html_7dd9fdff3e9f4559978e73fecb39b933 = $(`<div id="html_7dd9fdff3e9f4559978e73fecb39b933" style="width: 100.0%; height: 100.0%;">('53.1003', '-0.9936', 'Sarah', None, 'Flethcher', None, '1845')</div>`)[0];
            popup_dd1705144aef43d8bc78ea2e9aafec9d.setContent(html_7dd9fdff3e9f4559978e73fecb39b933);
        

        marker_3bf10596ad0441019e77a7f2e3ea371d.bindPopup(popup_dd1705144aef43d8bc78ea2e9aafec9d)
        ;

        
    
    
            var marker_8661892db2fc45389da3842b40b57553 = L.marker(
                [38.4268, -85.1479],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_7d9808af3a734d19af78cb8b8749fc3b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_8661892db2fc45389da3842b40b57553.setIcon(icon_7d9808af3a734d19af78cb8b8749fc3b);
        
    
        var popup_13cecc862958464e8242db067d2df822 = L.popup({"maxWidth": "100%"});

        
            var html_347721ec0ead41fda46eed2b345944d7 = $(`<div id="html_347721ec0ead41fda46eed2b345944d7" style="width: 100.0%; height: 100.0%;">('38.4268', '-85.1479', 'Polly', 'Jane', 'Cardwell', None, '1810')</div>`)[0];
            popup_13cecc862958464e8242db067d2df822.setContent(html_347721ec0ead41fda46eed2b345944d7);
        

        marker_8661892db2fc45389da3842b40b57553.bindPopup(popup_13cecc862958464e8242db067d2df822)
        ;

        
    
    
            var marker_60ce958f50b64673881b31a82c31de63 = L.marker(
                [39.175, -86.1752],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_fa1747a3beb64d9988579f77154aae0c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_60ce958f50b64673881b31a82c31de63.setIcon(icon_fa1747a3beb64d9988579f77154aae0c);
        
    
        var popup_a290f956fce7485ba1250e00f7605cf5 = L.popup({"maxWidth": "100%"});

        
            var html_28025daa0e3b461cbc845ae299fce7e8 = $(`<div id="html_28025daa0e3b461cbc845ae299fce7e8" style="width: 100.0%; height: 100.0%;">('39.1750', '-86.1752', 'William', None, 'Cardwell', None, '1863')</div>`)[0];
            popup_a290f956fce7485ba1250e00f7605cf5.setContent(html_28025daa0e3b461cbc845ae299fce7e8);
        

        marker_60ce958f50b64673881b31a82c31de63.bindPopup(popup_a290f956fce7485ba1250e00f7605cf5)
        ;

        
    
    
            var marker_fa08c70ba17542d2b1dc1bd0e9db9dba = L.marker(
                [36.744, -79.4704],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_fae45b831cb44b019139502134bfc003 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_fa08c70ba17542d2b1dc1bd0e9db9dba.setIcon(icon_fae45b831cb44b019139502134bfc003);
        
    
        var popup_e01e71ff23ac4928a6614ce19c41ebcf = L.popup({"maxWidth": "100%"});

        
            var html_86dc4157019648eb9cecabe2c212ffb7 = $(`<div id="html_86dc4157019648eb9cecabe2c212ffb7" style="width: 100.0%; height: 100.0%;">('36.7440', '-79.4704', 'Mary', 'Warren', 'Stone', None, '1811')</div>`)[0];
            popup_e01e71ff23ac4928a6614ce19c41ebcf.setContent(html_86dc4157019648eb9cecabe2c212ffb7);
        

        marker_fa08c70ba17542d2b1dc1bd0e9db9dba.bindPopup(popup_e01e71ff23ac4928a6614ce19c41ebcf)
        ;

        
    
    
            var marker_443e092ef02e485db4ce5b6baeda50e6 = L.marker(
                [51.1051, -2.9262],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_30b6bb6e94ae4145b3a106392a3027c4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_443e092ef02e485db4ce5b6baeda50e6.setIcon(icon_30b6bb6e94ae4145b3a106392a3027c4);
        
    
        var popup_217b69ce77f14d3f9cb9eee97b29c060 = L.popup({"maxWidth": "100%"});

        
            var html_ffda74a04b924598b05c76b7b983fdbe = $(`<div id="html_ffda74a04b924598b05c76b7b983fdbe" style="width: 100.0%; height: 100.0%;">('51.1051', '-2.9262', 'John', None, 'Stone', 'Sr', '1597')</div>`)[0];
            popup_217b69ce77f14d3f9cb9eee97b29c060.setContent(html_ffda74a04b924598b05c76b7b983fdbe);
        

        marker_443e092ef02e485db4ce5b6baeda50e6.bindPopup(popup_217b69ce77f14d3f9cb9eee97b29c060)
        ;

        
    
    
            var marker_d10dfeb0e84945818164ff6b0a0be401 = L.marker(
                [52.614, -0.8864],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_bf02160766c341ee86372aac7d6fe704 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_d10dfeb0e84945818164ff6b0a0be401.setIcon(icon_bf02160766c341ee86372aac7d6fe704);
        
    
        var popup_37bd9592b1bd45dfbd997e14d069b623 = L.popup({"maxWidth": "100%"});

        
            var html_878e65d330cb4b30a4eb426adf1c0de5 = $(`<div id="html_878e65d330cb4b30a4eb426adf1c0de5" style="width: 100.0%; height: 100.0%;">('52.6140', '-0.8864', 'Thomas', None, 'Stone', None, '1560')</div>`)[0];
            popup_37bd9592b1bd45dfbd997e14d069b623.setContent(html_878e65d330cb4b30a4eb426adf1c0de5);
        

        marker_d10dfeb0e84945818164ff6b0a0be401.bindPopup(popup_37bd9592b1bd45dfbd997e14d069b623)
        ;

        
    
    
            var marker_f56e9403c38a4cd6b2414323256e1b0b = L.marker(
                [52.614, -0.8864],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_02fca35a4c3948608abe74c10dbf78a7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_f56e9403c38a4cd6b2414323256e1b0b.setIcon(icon_02fca35a4c3948608abe74c10dbf78a7);
        
    
        var popup_f10b65daba8b4e21b03dd7e56b17beae = L.popup({"maxWidth": "100%"});

        
            var html_4e9968ec91b5464bbb6807e08dd702c5 = $(`<div id="html_4e9968ec91b5464bbb6807e08dd702c5" style="width: 100.0%; height: 100.0%;">('52.6140', '-0.8864', 'John', None, 'Stone', None, '1575')</div>`)[0];
            popup_f10b65daba8b4e21b03dd7e56b17beae.setContent(html_4e9968ec91b5464bbb6807e08dd702c5);
        

        marker_f56e9403c38a4cd6b2414323256e1b0b.bindPopup(popup_f10b65daba8b4e21b03dd7e56b17beae)
        ;

        
    
    
            var marker_be69d3f5d82645cb9d66bf2577a9543f = L.marker(
                [52.614, -0.8864],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_c43b6b84c5b842589045af10fbe7095a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_be69d3f5d82645cb9d66bf2577a9543f.setIcon(icon_c43b6b84c5b842589045af10fbe7095a);
        
    
        var popup_c9faf9613f804369a0fe92ad6e5810f9 = L.popup({"maxWidth": "100%"});

        
            var html_b7271238515b4045b11dd245d993b6a5 = $(`<div id="html_b7271238515b4045b11dd245d993b6a5" style="width: 100.0%; height: 100.0%;">('52.6140', '-0.8864', 'Agnes', 'Cowles', 'Stone', None, '1561')</div>`)[0];
            popup_c9faf9613f804369a0fe92ad6e5810f9.setContent(html_b7271238515b4045b11dd245d993b6a5);
        

        marker_be69d3f5d82645cb9d66bf2577a9543f.bindPopup(popup_c9faf9613f804369a0fe92ad6e5810f9)
        ;

        
    
    
            var marker_183fffa936284eaba0253bac4c4a82f5 = L.marker(
                [51.509865, -0.118092],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_0a2e326ce54e42d187c328c921ab1232 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_183fffa936284eaba0253bac4c4a82f5.setIcon(icon_0a2e326ce54e42d187c328c921ab1232);
        
    
        var popup_4f337a62ea7041b6bd84c4879f8a73a2 = L.popup({"maxWidth": "100%"});

        
            var html_ec494774d9344c19a156352dae2a0fc3 = $(`<div id="html_ec494774d9344c19a156352dae2a0fc3" style="width: 100.0%; height: 100.0%;">('51.509865', '-0.118092', 'Thomas', None, 'Cornwall', None, '1537')</div>`)[0];
            popup_4f337a62ea7041b6bd84c4879f8a73a2.setContent(html_ec494774d9344c19a156352dae2a0fc3);
        

        marker_183fffa936284eaba0253bac4c4a82f5.bindPopup(popup_4f337a62ea7041b6bd84c4879f8a73a2)
        ;

        
    
    
            var marker_37bf9c8978a84980bdc06b7ee982f464 = L.marker(
                [40.1681, -97.179],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_3d4b964f084c4ab1a0d50cd45e2a5a7d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_37bf9c8978a84980bdc06b7ee982f464.setIcon(icon_3d4b964f084c4ab1a0d50cd45e2a5a7d);
        
    
        var popup_5c38aa2fb6084067864a96d16dd385d7 = L.popup({"maxWidth": "100%"});

        
            var html_5112cf8c8616493698e9a2f8c27e3b5a = $(`<div id="html_5112cf8c8616493698e9a2f8c27e3b5a" style="width: 100.0%; height: 100.0%;">('40.1681', '-97.1790', 'Enos', 'Pray', 'Griffin', None, '1931')</div>`)[0];
            popup_5c38aa2fb6084067864a96d16dd385d7.setContent(html_5112cf8c8616493698e9a2f8c27e3b5a);
        

        marker_37bf9c8978a84980bdc06b7ee982f464.bindPopup(popup_5c38aa2fb6084067864a96d16dd385d7)
        ;

        
    
    
            var marker_e4e9ba85e3a24188bd8dd13097b5050a = L.marker(
                [38.5114, -77.0188],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_ff9cbdd4303d4461b2fd4e09c71553fa = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_e4e9ba85e3a24188bd8dd13097b5050a.setIcon(icon_ff9cbdd4303d4461b2fd4e09c71553fa);
        
    
        var popup_80e0c0efeb5348fb8d7ed4c3de136e93 = L.popup({"maxWidth": "100%"});

        
            var html_99b1204f73234fc8a30382f0b47ed0ec = $(`<div id="html_99b1204f73234fc8a30382f0b47ed0ec" style="width: 100.0%; height: 100.0%;">('38.5114', '-77.0188', 'unknown', '', '', None, '1900')</div>`)[0];
            popup_80e0c0efeb5348fb8d7ed4c3de136e93.setContent(html_99b1204f73234fc8a30382f0b47ed0ec);
        

        marker_e4e9ba85e3a24188bd8dd13097b5050a.bindPopup(popup_80e0c0efeb5348fb8d7ed4c3de136e93)
        ;

        
    
    
            var marker_b94a4776b8cf4fd7ba247b2e9650b779 = L.marker(
                [37.7957, -94.8106],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_73c64d2aa5d7498797dfda1b68d3df82 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_b94a4776b8cf4fd7ba247b2e9650b779.setIcon(icon_73c64d2aa5d7498797dfda1b68d3df82);
        
    
        var popup_b32183cee21a4320983700d1324edab9 = L.popup({"maxWidth": "100%"});

        
            var html_27dc02ff368e4ae285de643919536c66 = $(`<div id="html_27dc02ff368e4ae285de643919536c66" style="width: 100.0%; height: 100.0%;">('37.7957', '-94.8106', 'William', '', 'Stone', None, '1872')</div>`)[0];
            popup_b32183cee21a4320983700d1324edab9.setContent(html_27dc02ff368e4ae285de643919536c66);
        

        marker_b94a4776b8cf4fd7ba247b2e9650b779.bindPopup(popup_b32183cee21a4320983700d1324edab9)
        ;

        
    
    
            var marker_6276b75e499040d2b34a2adbed7a95aa = L.marker(
                [41.3083, -72.9279],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_94cdb1ee01784bafa413aed3d2028450 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_6276b75e499040d2b34a2adbed7a95aa.setIcon(icon_94cdb1ee01784bafa413aed3d2028450);
        
    
        var popup_d8eb27974ad34402a7e9993f4b6df7b3 = L.popup({"maxWidth": "100%"});

        
            var html_ddf90684448b4611ba4e380f7b6733c5 = $(`<div id="html_ddf90684448b4611ba4e380f7b6733c5" style="width: 100.0%; height: 100.0%;">('41.3083', '-72.9279', 'John', 'Mathew', 'Stone', 'Captain', '1606')</div>`)[0];
            popup_d8eb27974ad34402a7e9993f4b6df7b3.setContent(html_ddf90684448b4611ba4e380f7b6733c5);
        

        marker_6276b75e499040d2b34a2adbed7a95aa.bindPopup(popup_d8eb27974ad34402a7e9993f4b6df7b3)
        ;

        
    
    
            var marker_4aee8917f7864d369192e67eb58717c8 = L.marker(
                [51.5742, -0.4857],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_f9ae5a5ef5d647ff851e66c2bfdc17a2 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_4aee8917f7864d369192e67eb58717c8.setIcon(icon_f9ae5a5ef5d647ff851e66c2bfdc17a2);
        
    
        var popup_59f1ce1d98034340b36e2d3f8e8e5b2d = L.popup({"maxWidth": "100%"});

        
            var html_198faddf5f3e4cb98d4a2fa89b6f2294 = $(`<div id="html_198faddf5f3e4cb98d4a2fa89b6f2294" style="width: 100.0%; height: 100.0%;">('51.5742', '-0.4857', 'Elizabeth', 'Margery', 'Stone', None, '1568')</div>`)[0];
            popup_59f1ce1d98034340b36e2d3f8e8e5b2d.setContent(html_198faddf5f3e4cb98d4a2fa89b6f2294);
        

        marker_4aee8917f7864d369192e67eb58717c8.bindPopup(popup_59f1ce1d98034340b36e2d3f8e8e5b2d)
        ;

        
    
    
            var marker_c12ef63a2f69444fbef019e7eeb069c3 = L.marker(
                [51.5742, -0.4857],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_4a29fcc6427a4a529156858b4bdb7fe3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_c12ef63a2f69444fbef019e7eeb069c3.setIcon(icon_4a29fcc6427a4a529156858b4bdb7fe3);
        
    
        var popup_e9c2b1a6ad054f0c9b5f4ce80134d619 = L.popup({"maxWidth": "100%"});

        
            var html_3e16ef35e5ee4611a45e9e8d75f0325b = $(`<div id="html_3e16ef35e5ee4611a45e9e8d75f0325b" style="width: 100.0%; height: 100.0%;">('51.5742', '-0.4857', 'John', None, 'Stone', None, '1547')</div>`)[0];
            popup_e9c2b1a6ad054f0c9b5f4ce80134d619.setContent(html_3e16ef35e5ee4611a45e9e8d75f0325b);
        

        marker_c12ef63a2f69444fbef019e7eeb069c3.bindPopup(popup_e9c2b1a6ad054f0c9b5f4ce80134d619)
        ;

        
    
    
            var marker_c7818a03a217426a85b11a9467937e12 = L.marker(
                [51.1988, -0.456],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_efbcd934169c426da1d3c90a3d7d934b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_c7818a03a217426a85b11a9467937e12.setIcon(icon_efbcd934169c426da1d3c90a3d7d934b);
        
    
        var popup_a6bde58e18ef46fc8e947405ca004807 = L.popup({"maxWidth": "100%"});

        
            var html_46fb2780c072474a923ae05095ea4381 = $(`<div id="html_46fb2780c072474a923ae05095ea4381" style="width: 100.0%; height: 100.0%;">('51.1988', '-0.456', 'John', 'Atte', 'Stone', 'II', '1593')</div>`)[0];
            popup_a6bde58e18ef46fc8e947405ca004807.setContent(html_46fb2780c072474a923ae05095ea4381);
        

        marker_c7818a03a217426a85b11a9467937e12.bindPopup(popup_a6bde58e18ef46fc8e947405ca004807)
        ;

        
    
    
            var marker_af8431c4195c42fbad651d63dc7e6fbe = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_84d5486d807e461bbe5fd0921f5970ff = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_af8431c4195c42fbad651d63dc7e6fbe.setIcon(icon_84d5486d807e461bbe5fd0921f5970ff);
        
    
        var popup_38148df6bb7442139ba38166c92192e8 = L.popup({"maxWidth": "100%"});

        
            var html_05541f7c93494dd0af59d5806f2051f6 = $(`<div id="html_05541f7c93494dd0af59d5806f2051f6" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Richard', 'Thomas', 'Cornwall', 'Sir', '1569')</div>`)[0];
            popup_38148df6bb7442139ba38166c92192e8.setContent(html_05541f7c93494dd0af59d5806f2051f6);
        

        marker_af8431c4195c42fbad651d63dc7e6fbe.bindPopup(popup_38148df6bb7442139ba38166c92192e8)
        ;

        
    
    
            var marker_8ddc149e1a784af183d9b1b624bcf6cc = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_6ea1c358299c4eef9bee52f710df58e1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_8ddc149e1a784af183d9b1b624bcf6cc.setIcon(icon_6ea1c358299c4eef9bee52f710df58e1);
        
    
        var popup_5f57b1331cee43ae9969ce553f9f7863 = L.popup({"maxWidth": "100%"});

        
            var html_5a02bc655691486c922dc224d2a78f45 = $(`<div id="html_5a02bc655691486c922dc224d2a78f45" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Richard', None, 'Cornwall', 'Sir, 9th Baron of Burford', '1569')</div>`)[0];
            popup_5f57b1331cee43ae9969ce553f9f7863.setContent(html_5a02bc655691486c922dc224d2a78f45);
        

        marker_8ddc149e1a784af183d9b1b624bcf6cc.bindPopup(popup_5f57b1331cee43ae9969ce553f9f7863)
        ;

        
    
    
            var marker_66d05c36a29241cbbcfa64bbc5e919ce = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_ad90476cea0b4433936a7cb93ee8eb69 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_66d05c36a29241cbbcfa64bbc5e919ce.setIcon(icon_ad90476cea0b4433936a7cb93ee8eb69);
        
    
        var popup_abdb48cb1e184c2ebdf9580e9fcbc150 = L.popup({"maxWidth": "100%"});

        
            var html_b546e929e5e94b198a5650c568029b20 = $(`<div id="html_b546e929e5e94b198a5650c568029b20" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Lady Jane', None, 'Cornwall', None, '1546')</div>`)[0];
            popup_abdb48cb1e184c2ebdf9580e9fcbc150.setContent(html_b546e929e5e94b198a5650c568029b20);
        

        marker_66d05c36a29241cbbcfa64bbc5e919ce.bindPopup(popup_abdb48cb1e184c2ebdf9580e9fcbc150)
        ;

        
    
    
            var marker_97dbb2b7476545eca7b54475552f9d32 = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_699bc55401d24ebd922d178f315669c3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_97dbb2b7476545eca7b54475552f9d32.setIcon(icon_699bc55401d24ebd922d178f315669c3);
        
    
        var popup_b497d27aceff4d03a4fc069ade2596e6 = L.popup({"maxWidth": "100%"});

        
            var html_08ddc25893a04134a9a71e187fce3fce = $(`<div id="html_08ddc25893a04134a9a71e187fce3fce" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Edmund', None, 'Cornwall', None, '1498')</div>`)[0];
            popup_b497d27aceff4d03a4fc069ade2596e6.setContent(html_08ddc25893a04134a9a71e187fce3fce);
        

        marker_97dbb2b7476545eca7b54475552f9d32.bindPopup(popup_b497d27aceff4d03a4fc069ade2596e6)
        ;

        
    
    
            var marker_1aec54b6f3114b9897d4725df602aa07 = L.marker(
                [52.8037, -2.6571],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_0314bae00d6942c88e0d7d11f78174d8 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_1aec54b6f3114b9897d4725df602aa07.setIcon(icon_0314bae00d6942c88e0d7d11f78174d8);
        
    
        var popup_ca2fde48f4ed4e4fba5dc36d8367ad82 = L.popup({"maxWidth": "100%"});

        
            var html_acc006082676467085cb39511ab6fcb0 = $(`<div id="html_acc006082676467085cb39511ab6fcb0" style="width: 100.0%; height: 100.0%;">('52.8037', '-2.6571', 'Anne', 'Blount', 'Cornwall', None, '1548')</div>`)[0];
            popup_ca2fde48f4ed4e4fba5dc36d8367ad82.setContent(html_acc006082676467085cb39511ab6fcb0);
        

        marker_1aec54b6f3114b9897d4725df602aa07.bindPopup(popup_ca2fde48f4ed4e4fba5dc36d8367ad82)
        ;

        
    
    
            var marker_5b6d0c5f874249228827cf80963eb6e4 = L.marker(
                [52.5345, -2.4245],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_d953381a5e23406bb2ab3e731bb45619 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_5b6d0c5f874249228827cf80963eb6e4.setIcon(icon_d953381a5e23406bb2ab3e731bb45619);
        
    
        var popup_0614e68324e84bcd892b0d45013590f9 = L.popup({"maxWidth": "100%"});

        
            var html_0d5be593ba114ffabfd29c5847be73c1 = $(`<div id="html_0d5be593ba114ffabfd29c5847be73c1" style="width: 100.0%; height: 100.0%;">('52.5345', '-2.4245', 'Lady Maria', 'Hoorde', 'Cornwall', None, '1498')</div>`)[0];
            popup_0614e68324e84bcd892b0d45013590f9.setContent(html_0d5be593ba114ffabfd29c5847be73c1);
        

        marker_5b6d0c5f874249228827cf80963eb6e4.bindPopup(popup_0614e68324e84bcd892b0d45013590f9)
        ;

        
    
    
            var marker_e91e59e6be204911a3bed1c183a4cb09 = L.marker(
                [59.6425, -151.5483],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_e747a24383a44849b59755d255201f6b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_e91e59e6be204911a3bed1c183a4cb09.setIcon(icon_e747a24383a44849b59755d255201f6b);
        
    
        var popup_72de117093904cfe836563d444cfd9d2 = L.popup({"maxWidth": "100%"});

        
            var html_332f277e47c6439496d0c3da15af786c = $(`<div id="html_332f277e47c6439496d0c3da15af786c" style="width: 100.0%; height: 100.0%;">('59.6425', '-151.5483', 'Zelma', 'Jane', 'Stone', None, '2007')</div>`)[0];
            popup_72de117093904cfe836563d444cfd9d2.setContent(html_332f277e47c6439496d0c3da15af786c);
        

        marker_e91e59e6be204911a3bed1c183a4cb09.bindPopup(popup_72de117093904cfe836563d444cfd9d2)
        ;

        
    
    
            var marker_616752784acf442b86febe407011d5af = L.marker(
                [59.6425, -151.5483],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_cab1223ab016474b991b3e889d6b90ab = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_616752784acf442b86febe407011d5af.setIcon(icon_cab1223ab016474b991b3e889d6b90ab);
        
    
        var popup_7a0148c35b06463d8fd6f640c326eb59 = L.popup({"maxWidth": "100%"});

        
            var html_6f71c2376087414987c305d9ef0c9755 = $(`<div id="html_6f71c2376087414987c305d9ef0c9755" style="width: 100.0%; height: 100.0%;">('59.6425', '-151.5483', 'Zelma', 'Jane', 'Stone', None, '2007')</div>`)[0];
            popup_7a0148c35b06463d8fd6f640c326eb59.setContent(html_6f71c2376087414987c305d9ef0c9755);
        

        marker_616752784acf442b86febe407011d5af.bindPopup(popup_7a0148c35b06463d8fd6f640c326eb59)
        ;

        
    
    
            var marker_e25df359760c467bb0896c56f65f2351 = L.marker(
                [40.1680732, -97.179026],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_1034572331514adf81bc995eb17f746f = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_e25df359760c467bb0896c56f65f2351.setIcon(icon_1034572331514adf81bc995eb17f746f);
        
    
        var popup_0c7ae502c51342ea85bc25a4592bdeae = L.popup({"maxWidth": "100%"});

        
            var html_958706ca69c84d42a490b04aa21d98c1 = $(`<div id="html_958706ca69c84d42a490b04aa21d98c1" style="width: 100.0%; height: 100.0%;">('40.1680732', '-97.179026', 'Max', 'Wallace', 'Griffin', None, '1958')</div>`)[0];
            popup_0c7ae502c51342ea85bc25a4592bdeae.setContent(html_958706ca69c84d42a490b04aa21d98c1);
        

        marker_e25df359760c467bb0896c56f65f2351.bindPopup(popup_0c7ae502c51342ea85bc25a4592bdeae)
        ;

        
    
    
            var marker_0380dca3ae1c4f798944280aba207a56 = L.marker(
                [40.135669, -97.1805995],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_63b2422ab8da4af983185319033ce1bc = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_0380dca3ae1c4f798944280aba207a56.setIcon(icon_63b2422ab8da4af983185319033ce1bc);
        
    
        var popup_6dbc840a3c09492db0ea62221df1eac3 = L.popup({"maxWidth": "100%"});

        
            var html_79efcf71ea0e414a883ff254950c5f9a = $(`<div id="html_79efcf71ea0e414a883ff254950c5f9a" style="width: 100.0%; height: 100.0%;">('40.135669', '-97.1805995', 'Anna', 'Ethel', 'King', None, '1965')</div>`)[0];
            popup_6dbc840a3c09492db0ea62221df1eac3.setContent(html_79efcf71ea0e414a883ff254950c5f9a);
        

        marker_0380dca3ae1c4f798944280aba207a56.bindPopup(popup_6dbc840a3c09492db0ea62221df1eac3)
        ;

        
    
    
            var marker_dedeb9241bcf44418de6fc14c6caf78f = L.marker(
                [40.1680732, -97.179026],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_05b9de72afd541789c797177914d63ae = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_dedeb9241bcf44418de6fc14c6caf78f.setIcon(icon_05b9de72afd541789c797177914d63ae);
        
    
        var popup_9871d0ab5528432589dc4a64684430db = L.popup({"maxWidth": "100%"});

        
            var html_e9febc90e6cc423dbf7c89850df61288 = $(`<div id="html_e9febc90e6cc423dbf7c89850df61288" style="width: 100.0%; height: 100.0%;">('40.1680732', '-97.179026', 'Zelia', 'Rebecca', 'Stone', None, '1963')</div>`)[0];
            popup_9871d0ab5528432589dc4a64684430db.setContent(html_e9febc90e6cc423dbf7c89850df61288);
        

        marker_dedeb9241bcf44418de6fc14c6caf78f.bindPopup(popup_9871d0ab5528432589dc4a64684430db)
        ;

        
    
    
            var marker_082ce8dcb5a5482a9cf95525ec71a1c9 = L.marker(
                [42.2315958, -75.5043761],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_9ab5a1b88944414ea6df6e5d3b662efd = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_082ce8dcb5a5482a9cf95525ec71a1c9.setIcon(icon_9ab5a1b88944414ea6df6e5d3b662efd);
        
    
        var popup_b846f2d1f5584d01a77d07f7abc5ffa2 = L.popup({"maxWidth": "100%"});

        
            var html_c62b45ad739b43209d8a62992ef305bb = $(`<div id="html_c62b45ad739b43209d8a62992ef305bb" style="width: 100.0%; height: 100.0%;">('42.2315958', '-75.5043761', 'Lyle', 'Weeks', 'Stone', None, '1989')</div>`)[0];
            popup_b846f2d1f5584d01a77d07f7abc5ffa2.setContent(html_c62b45ad739b43209d8a62992ef305bb);
        

        marker_082ce8dcb5a5482a9cf95525ec71a1c9.bindPopup(popup_b846f2d1f5584d01a77d07f7abc5ffa2)
        ;

        
    
    
            var marker_f41a065e1918432f969253b42adc5ba7 = L.marker(
                [40.7607793, -111.8910474],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_709725858eed482eb9dc6eb1d3cf9d42 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_f41a065e1918432f969253b42adc5ba7.setIcon(icon_709725858eed482eb9dc6eb1d3cf9d42);
        
    
        var popup_772308c10b0048569322b5e187f258b7 = L.popup({"maxWidth": "100%"});

        
            var html_6462f663128e4d6c99838ffa065520a6 = $(`<div id="html_6462f663128e4d6c99838ffa065520a6" style="width: 100.0%; height: 100.0%;">('40.7607793', '-111.8910474', 'William', 'Wallace', 'Stone', 'Rev', '1941')</div>`)[0];
            popup_772308c10b0048569322b5e187f258b7.setContent(html_6462f663128e4d6c99838ffa065520a6);
        

        marker_f41a065e1918432f969253b42adc5ba7.bindPopup(popup_772308c10b0048569322b5e187f258b7)
        ;

        
    
    
            var marker_2bf85bc65192488591dabca46d77654a = L.marker(
                [33.3185841, -96.7781191],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_6103d5062d924003ba8ca2fc01d225d7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_2bf85bc65192488591dabca46d77654a.setIcon(icon_6103d5062d924003ba8ca2fc01d225d7);
        
    
        var popup_dd840940905648f7b8d6c3f3ae170b67 = L.popup({"maxWidth": "100%"});

        
            var html_85b61dcca3994fc8ae3ef0e72723e2ba = $(`<div id="html_85b61dcca3994fc8ae3ef0e72723e2ba" style="width: 100.0%; height: 100.0%;">('33.3185841', '-96.7781191', 'Eugene', 'Marlow', 'Stone', None, '2010')</div>`)[0];
            popup_dd840940905648f7b8d6c3f3ae170b67.setContent(html_85b61dcca3994fc8ae3ef0e72723e2ba);
        

        marker_2bf85bc65192488591dabca46d77654a.bindPopup(popup_dd840940905648f7b8d6c3f3ae170b67)
        ;

        
    
    
            var marker_8595dbba65de4db099e4a2f74414669e = L.marker(
                [38.7611129, -102.7893667],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_84da2da5951147ce932fba534eebe3e5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_8595dbba65de4db099e4a2f74414669e.setIcon(icon_84da2da5951147ce932fba534eebe3e5);
        
    
        var popup_53db89ed4665424f94f7b3dc2170e318 = L.popup({"maxWidth": "100%"});

        
            var html_6060938cd6a544dfb9a19651924acb7a = $(`<div id="html_6060938cd6a544dfb9a19651924acb7a" style="width: 100.0%; height: 100.0%;">('38.7611129', '-102.7893667', 'Sidney', 'Oscar', 'Stone', None, '2014')</div>`)[0];
            popup_53db89ed4665424f94f7b3dc2170e318.setContent(html_6060938cd6a544dfb9a19651924acb7a);
        

        marker_8595dbba65de4db099e4a2f74414669e.bindPopup(popup_53db89ed4665424f94f7b3dc2170e318)
        ;

        
    
    
            var marker_cfef4e8ef5f44e9f828b1050b136cc7c = L.marker(
                [38.7611129, -102.7893667],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_68da126ddc344c168b5faf7929dacd2a = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_cfef4e8ef5f44e9f828b1050b136cc7c.setIcon(icon_68da126ddc344c168b5faf7929dacd2a);
        
    
        var popup_82f2d68b07034bcb9d483f5ebe67b241 = L.popup({"maxWidth": "100%"});

        
            var html_e4182ac9a90f4f98aa41387521eea69e = $(`<div id="html_e4182ac9a90f4f98aa41387521eea69e" style="width: 100.0%; height: 100.0%;">('38.7611129', '-102.7893667', 'Calvin', 'Enos', 'Stone', None, '1992')</div>`)[0];
            popup_82f2d68b07034bcb9d483f5ebe67b241.setContent(html_e4182ac9a90f4f98aa41387521eea69e);
        

        marker_cfef4e8ef5f44e9f828b1050b136cc7c.bindPopup(popup_82f2d68b07034bcb9d483f5ebe67b241)
        ;

        
    
    
            var marker_24d49f5ae6b44fb8a91da16bdc43074d = L.marker(
                [37.394731, -102.5298028],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_f0035eba94ac43098277a294473f4146 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_24d49f5ae6b44fb8a91da16bdc43074d.setIcon(icon_f0035eba94ac43098277a294473f4146);
        
    
        var popup_47d2ca460ddc4a74825f0926e76f9488 = L.popup({"maxWidth": "100%"});

        
            var html_325ad1713fb244b6a153859d08be2126 = $(`<div id="html_325ad1713fb244b6a153859d08be2126" style="width: 100.0%; height: 100.0%;">('37.394731', '-102.5298028', 'Charles', 'Grant', 'Eckles', None, '1969')</div>`)[0];
            popup_47d2ca460ddc4a74825f0926e76f9488.setContent(html_325ad1713fb244b6a153859d08be2126);
        

        marker_24d49f5ae6b44fb8a91da16bdc43074d.bindPopup(popup_47d2ca460ddc4a74825f0926e76f9488)
        ;

        
    
    
            var marker_7f1b41953558478a8b53ab2556458bcf = L.marker(
                [35.218889, -98.606944],
                {}
            ).addTo(marker_cluster_23af9d19400142ac9e749be24754534e);
        
    
            var icon_ce746b2a20844958bdbccf3bc879fae4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "purple", "prefix": "glyphicon"}
            );
            marker_7f1b41953558478a8b53ab2556458bcf.setIcon(icon_ce746b2a20844958bdbccf3bc879fae4);
        
    
        var popup_27fedd31d7004388a82afdd3b3b589a0 = L.popup({"maxWidth": "100%"});

        
            var html_d4891937e6234bf08f95c6d865cad6e3 = $(`<div id="html_d4891937e6234bf08f95c6d865cad6e3" style="width: 100.0%; height: 100.0%;">('35.218889', '-98.606944', 'Anna', 'Fowler', 'Swingle', None, '1912')</div>`)[0];
            popup_27fedd31d7004388a82afdd3b3b589a0.setContent(html_d4891937e6234bf08f95c6d865cad6e3);
        

        marker_7f1b41953558478a8b53ab2556458bcf.bindPopup(popup_27fedd31d7004388a82afdd3b3b589a0)
        ;

        
    
    
            var marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1 = L.markerClusterGroup(
                {}
            );
            map_04d3c517583d488cabb5445a0c8720f2.addLayer(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var marker_896eb6f8547047c79b2c01f8f2ece8bd = L.marker(
                [37.7063, -75.8069],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_24245075cd464d7895bb5cd928dccf5c = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_896eb6f8547047c79b2c01f8f2ece8bd.setIcon(icon_24245075cd464d7895bb5cd928dccf5c);
        
    
        var popup_3f2e3c4a97e44461afc239ca91a2924a = L.popup({"maxWidth": "100%"});

        
            var html_4884908c5a9c4d4ca0b0ec30da523a18 = $(`<div id="html_4884908c5a9c4d4ca0b0ec30da523a18" style="width: 100.0%; height: 100.0%;">('37.7063', '-75.8069', 'John', None, 'Stone', 'Sr')</div>`)[0];
            popup_3f2e3c4a97e44461afc239ca91a2924a.setContent(html_4884908c5a9c4d4ca0b0ec30da523a18);
        

        marker_896eb6f8547047c79b2c01f8f2ece8bd.bindPopup(popup_3f2e3c4a97e44461afc239ca91a2924a)
        ;

        
    
    
            var marker_0dbeaa8199d0470e85916214fc851dcf = L.marker(
                [37.7063, -75.8069],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_8bf1def050174b5089b0f00fbe05d1f3 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_0dbeaa8199d0470e85916214fc851dcf.setIcon(icon_8bf1def050174b5089b0f00fbe05d1f3);
        
    
        var popup_e17dede845674f10ad869db2d8c830a1 = L.popup({"maxWidth": "100%"});

        
            var html_4b3c4495ba2b440e85af6cefed618e52 = $(`<div id="html_4b3c4495ba2b440e85af6cefed618e52" style="width: 100.0%; height: 100.0%;">('37.7063', '-75.8069', 'John', 'Mathew', 'Stone', 'Captain')</div>`)[0];
            popup_e17dede845674f10ad869db2d8c830a1.setContent(html_4b3c4495ba2b440e85af6cefed618e52);
        

        marker_0dbeaa8199d0470e85916214fc851dcf.bindPopup(popup_e17dede845674f10ad869db2d8c830a1)
        ;

        
    
    
            var marker_065c4f7a68b64a32afa65c6fd559605e = L.marker(
                [38.889, -107.9267],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_688aed4d443a4db983b353121ef11da5 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_065c4f7a68b64a32afa65c6fd559605e.setIcon(icon_688aed4d443a4db983b353121ef11da5);
        
    
        var popup_b43c84472f4f41c18d8d1e123bf79764 = L.popup({"maxWidth": "100%"});

        
            var html_e54c8e6a441f4e1d92f0f236563357b7 = $(`<div id="html_e54c8e6a441f4e1d92f0f236563357b7" style="width: 100.0%; height: 100.0%;">('38.889', '-107.9267', 'William', 'Franklin', 'Stone', None)</div>`)[0];
            popup_b43c84472f4f41c18d8d1e123bf79764.setContent(html_e54c8e6a441f4e1d92f0f236563357b7);
        

        marker_065c4f7a68b64a32afa65c6fd559605e.bindPopup(popup_b43c84472f4f41c18d8d1e123bf79764)
        ;

        
    
    
            var marker_e4c9d93a623b425e94bd83401acd5698 = L.marker(
                [38.889, -107.9267],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_4b2735110c98493594315977f8517f0b = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_e4c9d93a623b425e94bd83401acd5698.setIcon(icon_4b2735110c98493594315977f8517f0b);
        
    
        var popup_28b6718d58604ee290ec009f0df73315 = L.popup({"maxWidth": "100%"});

        
            var html_185ea7095c2849e481cd1c17ead7748a = $(`<div id="html_185ea7095c2849e481cd1c17ead7748a" style="width: 100.0%; height: 100.0%;">('38.889', '-107.9267', 'Zelia', 'Rebecca', 'Stone', None)</div>`)[0];
            popup_28b6718d58604ee290ec009f0df73315.setContent(html_185ea7095c2849e481cd1c17ead7748a);
        

        marker_e4c9d93a623b425e94bd83401acd5698.bindPopup(popup_28b6718d58604ee290ec009f0df73315)
        ;

        
    
    
            var marker_c5f5e8b0f1e5480886e04706053c1959 = L.marker(
                [39.0406, -95.424],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_e4b1c9f203f04c1493ac7d2392f4c115 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_c5f5e8b0f1e5480886e04706053c1959.setIcon(icon_e4b1c9f203f04c1493ac7d2392f4c115);
        
    
        var popup_cc855303c7e54ac4b13088fa214efdcb = L.popup({"maxWidth": "100%"});

        
            var html_27e8b35016fa47608a75efbab20ef995 = $(`<div id="html_27e8b35016fa47608a75efbab20ef995" style="width: 100.0%; height: 100.0%;">('39.0406', '-95.4240', 'William', 'Alexander', 'Cardwell', None)</div>`)[0];
            popup_cc855303c7e54ac4b13088fa214efdcb.setContent(html_27e8b35016fa47608a75efbab20ef995);
        

        marker_c5f5e8b0f1e5480886e04706053c1959.bindPopup(popup_cc855303c7e54ac4b13088fa214efdcb)
        ;

        
    
    
            var marker_e24d993318d44460b50a27a31c255e2b = L.marker(
                [38.5302, -77.036],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_97cbfeab51f042178cf37bb055d0fbd4 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_e24d993318d44460b50a27a31c255e2b.setIcon(icon_97cbfeab51f042178cf37bb055d0fbd4);
        
    
        var popup_1858304987744fb2894496210e1a32dc = L.popup({"maxWidth": "100%"});

        
            var html_b87ecbb58729486598418e8e8738053f = $(`<div id="html_b87ecbb58729486598418e8e8738053f" style="width: 100.0%; height: 100.0%;">('38.5302', '-77.0360', 'Verlinda', 'Graves', 'Stone', None)</div>`)[0];
            popup_1858304987744fb2894496210e1a32dc.setContent(html_b87ecbb58729486598418e8e8738053f);
        

        marker_e24d993318d44460b50a27a31c255e2b.bindPopup(popup_1858304987744fb2894496210e1a32dc)
        ;

        
    
    
            var marker_e8d55f44f5734daea08136c5bf302189 = L.marker(
                [38.5302, -77.036],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_baf1cd06892c4bb982e631ebdbc2acf7 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_e8d55f44f5734daea08136c5bf302189.setIcon(icon_baf1cd06892c4bb982e631ebdbc2acf7);
        
    
        var popup_f38415a19a8d431f8af38b6355a87ab1 = L.popup({"maxWidth": "100%"});

        
            var html_d983e6507f3f4aa09328341fff533c37 = $(`<div id="html_d983e6507f3f4aa09328341fff533c37" style="width: 100.0%; height: 100.0%;">('38.5302', '-77.0360', 'Thomas', None, 'Stone', None)</div>`)[0];
            popup_f38415a19a8d431f8af38b6355a87ab1.setContent(html_d983e6507f3f4aa09328341fff533c37);
        

        marker_e8d55f44f5734daea08136c5bf302189.bindPopup(popup_f38415a19a8d431f8af38b6355a87ab1)
        ;

        
    
    
            var marker_9e233379217b4ca8a3b1df80d3052789 = L.marker(
                [38.3763, -75.5967],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_ee0f56c193174a48a752a9d9c2548f36 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_9e233379217b4ca8a3b1df80d3052789.setIcon(icon_ee0f56c193174a48a752a9d9c2548f36);
        
    
        var popup_1ad5d1e74a9d4855a6d47bdcb75d042b = L.popup({"maxWidth": "100%"});

        
            var html_eb9412e18f0f43caa46013f0736a8ad5 = $(`<div id="html_eb9412e18f0f43caa46013f0736a8ad5" style="width: 100.0%; height: 100.0%;">('38.3763', '-75.5967', 'William', 'Murray', 'Stone', None)</div>`)[0];
            popup_1ad5d1e74a9d4855a6d47bdcb75d042b.setContent(html_eb9412e18f0f43caa46013f0736a8ad5);
        

        marker_9e233379217b4ca8a3b1df80d3052789.bindPopup(popup_1ad5d1e74a9d4855a6d47bdcb75d042b)
        ;

        
    
    
            var marker_d3e43657ff1342f6b4c35cdf3942f116 = L.marker(
                [38.2414648, -84.1040952],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_33e8be08a8a341b3a4f7f267caa2966d = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_d3e43657ff1342f6b4c35cdf3942f116.setIcon(icon_33e8be08a8a341b3a4f7f267caa2966d);
        
    
        var popup_97317a20f6b9468d93eb27dbc649f21b = L.popup({"maxWidth": "100%"});

        
            var html_6436c1b4d0e94effa7421d3c79146648 = $(`<div id="html_6436c1b4d0e94effa7421d3c79146648" style="width: 100.0%; height: 100.0%;">('38.2414648', '-84.1040952', 'Barton', 'Warren', 'Stone', None)</div>`)[0];
            popup_97317a20f6b9468d93eb27dbc649f21b.setContent(html_6436c1b4d0e94effa7421d3c79146648);
        

        marker_d3e43657ff1342f6b4c35cdf3942f116.bindPopup(popup_97317a20f6b9468d93eb27dbc649f21b)
        ;

        
    
    
            var marker_adf6f7dc2e6840bbade6c3a73d534ecf = L.marker(
                [53.4246, -113.4777],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_29522da70a7c41e5b36ce9010e9dbfb1 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_adf6f7dc2e6840bbade6c3a73d534ecf.setIcon(icon_29522da70a7c41e5b36ce9010e9dbfb1);
        
    
        var popup_4acf7e3ef387430384aed5684287b2f5 = L.popup({"maxWidth": "100%"});

        
            var html_7b8c0758b79a4ab8b9698723c33b5294 = $(`<div id="html_7b8c0758b79a4ab8b9698723c33b5294" style="width: 100.0%; height: 100.0%;">('53.4246', ' -113.4777', 'Daniel', 'St. Thomas', 'Jenifer', None)</div>`)[0];
            popup_4acf7e3ef387430384aed5684287b2f5.setContent(html_7b8c0758b79a4ab8b9698723c33b5294);
        

        marker_adf6f7dc2e6840bbade6c3a73d534ecf.bindPopup(popup_4acf7e3ef387430384aed5684287b2f5)
        ;

        
    
    
            var marker_1676e1132e4c4090b69aed6d3c0545f0 = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_1a58f57e22714eeb8f259b9e2a449352 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_1676e1132e4c4090b69aed6d3c0545f0.setIcon(icon_1a58f57e22714eeb8f259b9e2a449352);
        
    
        var popup_a6d13c66f0434c7db0fd60e3fc780369 = L.popup({"maxWidth": "100%"});

        
            var html_892e87cc9ee24764aa0fbe183ab2494e = $(`<div id="html_892e87cc9ee24764aa0fbe183ab2494e" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Richard', 'Thomas', 'Cornwall', 'Sir')</div>`)[0];
            popup_a6d13c66f0434c7db0fd60e3fc780369.setContent(html_892e87cc9ee24764aa0fbe183ab2494e);
        

        marker_1676e1132e4c4090b69aed6d3c0545f0.bindPopup(popup_a6d13c66f0434c7db0fd60e3fc780369)
        ;

        
    
    
            var marker_d7ecff3ede5b4603b32356d06af2b0c7 = L.marker(
                [52.3167, -2.6076],
                {}
            ).addTo(marker_cluster_e04d37ec2e4f4a678807b3835aceb7f1);
        
    
            var icon_de26a45cb06e4dc4a9b818db11d5bb39 = L.AwesomeMarkers.icon(
                {"extraClasses": "fa-rotate-45", "icon": "glyphicon-thumbs-up", "iconColor": "purple", "markerColor": "darkpurple", "prefix": "glyphicon"}
            );
            marker_d7ecff3ede5b4603b32356d06af2b0c7.setIcon(icon_de26a45cb06e4dc4a9b818db11d5bb39);
        
    
        var popup_940c3af25d754fea8510451f018d9a54 = L.popup({"maxWidth": "100%"});

        
            var html_9b9da712bd124f0bae10870b3fda85ce = $(`<div id="html_9b9da712bd124f0bae10870b3fda85ce" style="width: 100.0%; height: 100.0%;">('52.3167', '-2.6076', 'Richard', None, 'Cornwall', 'Sir, 9th Baron of Burford')</div>`)[0];
            popup_940c3af25d754fea8510451f018d9a54.setContent(html_9b9da712bd124f0bae10870b3fda85ce);
        

        marker_d7ecff3ede5b4603b32356d06af2b0c7.bindPopup(popup_940c3af25d754fea8510451f018d9a54)
        ;

        
    
</script>