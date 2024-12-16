<?php
	// $wfsUrl = file_get_contents("http://geoportal.slemankab.go.id/geoserver/geonode/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=geonode:analisis_resiko_bencana_gunung_api&outputFormat=json");

	$wfsUrl = file_get_contents("http://localhost:8080/geoserver/WISATA_TAPTENG_MAP/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=WISATA_TAPTENG_MAP%3ADetinasi_wisata_taptour&outputFormat=application%2Fjson");

	header('Content-type: application/json');
	echo ($wfsUrl);
	# Jika terdapat &maxFeatures=50 pada url wfs geojson, dihapus supaya jumlah feature tidak dibatasi
?>