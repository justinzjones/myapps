        //just for the demo
        var defaultCoords = [31.280, 37.130];

        //set up our map
        var map = L.map('map').setView(defaultCoords, 12);
        L.tileLayer('http://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}.png',
            {
                maxZoom: 7
            }).addTo(map);

        //this is how we are going to demo our sendlatlng function
        map.on('click', onMapClick);


        //use this variable to track our marker here outside of the sendlatlng function
        var myMarker = L.marker(defaultCoords).addTo(map);

        //in our example, we are going to listend for clicks on the map to trigger
        //changes to the coords with our sendlatlng function
        function onMapClick(e) {
            sendlatlng(e.latlng)
        }


        //update the map and marker positions based on the coords passed to the function
        //we will just update our existing map and myMarker variables instead of create new ones
        function sendlatlng(coords) {
            map.setView(coords, 12);
            myMarker.setLatLng(coords);

        }