<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('/library_resources/js/components/audio_mouseover_btn.js')}}" type="text/javascript"></script>
<script src="{{asset('/library_resources/js/components/random_css_color.js')}}" type="text/javascript"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js"></script>
<script>
    // TO MAKE THE MAP APPEAR YOU MUST
    // ADD YOUR ACCESS TOKEN FROM
    // https://account.mapbox.com
    mapboxgl.accessToken = 'sk.eyJ1IjoiY2hhd2tlcjIxIiwiYSI6ImNsNTk1cTNrZTBramszYm9qNDk5Mjc2dmgifQ.hQlMOELZ5Jc74rhI7ptDrw';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/satellite-streets-v11',
        zoom: 1.5,
        center: [30, 50],
        projection: 'globe'
    });

    map.on('load', () => {
        // Set the default atmosphere style
        map.setFog({});
    });
</script>