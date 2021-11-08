<!DOCTYPE html>
<html>
    <head>
<title>MAP</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<style type="text/css">
    #map{
        position: absolute;
        right: 0;left: 0; bottom: 0; top: 0;
    }
</style>
    </head>
    <body>

    <div id="map"></div>
    </body>

    <script type="text/javascript">
    var map = L.map('map').setView([-5.1259936,105.3196545], 13);

         L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var iconYellow = L.icon({
            iconUrl : 'images/yellow.png',
            iconSize : [40,40]
        });
        var iconRed = L.icon({
            iconUrl : 'images/red.png',
            iconSize : [40,40]
        });

        var marker = L.marker([-5.1364502,105.2949357], {icon:iconRed}).addTo(map);

        //array
        var lokasi_array = [
            [" Pondok Santap Glompong ",-5.137009790486782, 105.29484645267017],
            [" Nasi Goreng Turkey ", -5.136984941496036, 105.29445974008487],
            [" Resto Ayam Desa ", -5.13740636756165, 105.29695376631987]
            /*[" Mi Rebus & Bakso Hi.Sentot ", -5.13869070560917, 105.29731774360171],
            [" Pondok Bakso Bintang ", -5.135469498030687, 105.29776491569082],
            [" SeaFood Dua Saudara 88 ", -5.134961975094972, 105.29829528258719],
            [" Mie Ayam & Bakso Oman ", -5.1345269551142545, 105.29925202287086],
            [" Angkringan Woly ", -5.132994025197771, 105.29723454879445],
            [" Soto Lamongan ", -5.134651246567597, 105.29288762011426],
            [" Ayam Geprek Ristina ", -5.136885847546689, 105.29101089686982]*/
            
        ];

        //show marker
        for(var i=0; i<lokasi_array.length; i++){
            marker = new L.marker([lokasi_array[i][1], lokasi_array[i][2], lokasi_array[i][3] 
                                 /*lokasi_array[i][4], lokasi_array[i][5], lokasi_array[i][6],
                                 lokasi_array[i][7], lokasi_array[i][8], lokasi_array[i][9],
        lokasi_array[i][10]*/], {icon:iconYellow})
            .bindTooltip(lokasi_array[i][0])
            .addTo(map);
        }


</script>
</html>