var map = new ol.Map({
  view: new ol.View({
    zoom: 18,
    center: ol.proj.transform([6.894346, 52.785596], 'EPSG:4326', 'EPSG:3857')
    })
});

var brt = new ol.layer.Tile({
            source: new ol.source.XYZ({
                    url: 'https://geodata.nationaalgeoregister.nl/tiles/service/wmts/brtachtergrondkaartgrijs/EPSG:3857/{z}/{x}/{y}.png',
                    attributions: [
                        new ol.Attribution({
                            html: 'NLMaps'
                        })
                    ]
          }),
          title: 'Topografie'
});

var luchtfoto = new ol.layer.Tile({
            source: new ol.source.TileWMS({
                    url: 'https://geo.emmen.nl:443/geoserver/wms',
          					params: 	{'FORMAT': 'image/png',
                   						'VERSION': '1.1.1',
                   						tiled: true,
                		LAYERS: 'topp:O10002_Luchtfoto_BOCE',
                		STYLES: '',
                    }
            }),
            title: 'Luchtfoto',
            proj: 'EPSG:3857',
            visible: false

});

var vuilwaterputten = new ol.layer.Tile({
            source: new ol.source.TileWMS({
                    url: 'https://geo.emmen.nl:443/geoserver/wms',
          					params: 	{'FORMAT': 'image/png',
                   						'VERSION': '1.1.1',
                   						tiled: true,
                		LAYERS: 'topp:O10002_gs_evenement_vuilwaterput',
                		STYLES: '',
                    }
            }),
            title: 'Vuilwaterputten',
            proj: 'EPSG:3857',
            visible: true

});

var aansluitingen = new ol.layer.Tile({
            source: new ol.source.TileWMS({
                    url: 'https://geo.emmen.nl:443/geoserver/wms',
          					params: 	{'FORMAT': 'image/png',
                   						'VERSION': '1.1.1',
                   						tiled: true,
                		LAYERS: 'topp:O10002_gs_evenementen_aansluitingen',
                		STYLES: '',
                    }
            }),
            title: 'Aansluitingen (Elektra/Water)',
            proj: 'EPSG:3857',
            visible: true

});

var groep_basislagen=new ol.layer.Group({
    layers: [brt,luchtfoto]
});

var groep_themalagen= new ol.layer.Group({
    layers: [vuilwaterputten,aansluitingen]
})

map.addLayer(groep_basislagen)
map.addLayer(groep_themalagen)

map.setTarget('js-map')

var $basislagenLijst = $('#js-basislagen');

groep_basislagen.getLayers().forEach(function(element,index,array){
  if (element.get('visible')) {
    $basislagenLijst.append('<li><label><input type="radio" name="radio" checked value="' + String(index) + '" /> ' + element.get('title') + '</label></li>')
  }
  else {
    $basislagenLijst.append('<li><label><input type="radio" name="radio" value="' + String(index) + '" /> ' + element.get('title') + '</label></li>')
  }
});

var $themalagenLijst = $('#js-themalagen');
groep_themalagen.getLayers().forEach(function(element,index,array){
  if (element.get('visible')) {
    $themalagenLijst.append('<li><label><input type="checkbox" name="checkbox" checked value="' + String(index) + '" /> ' + element.get('title') + '</label></li>')
  }
  else {
    $themalagenLijst.append('<li><label><input type="checkbox" name="checkbox" value="' + String(index) + '" /> ' + element.get('title') + '</label></li>')
  }
});

var container = document.getElementById('popup');
var content = document.getElementById('popup-content');
var closer = document.getElementById('popup-closer');


/**
 * Create an overlay to anchor the popup to the map.
 */
 var overlay = new ol.Overlay({
   element: container,
   autoPan: true,
   autoPanAnimation: {
     duration: 250
   }
 });

// map.addOverlay(overlay);

/**
 * Add a click handler to hide the popup.
 * @return {boolean} Don't follow the href.
 */
// closer.onclick = function() {
//   overlay.setPosition(undefined);
//   closer.blur();
//   return false;
// };

// var $featureInfo=$('#js-feature-info')

map.on('singleclick', function(event) {
  var resolution = map.getView().getResolution();
  var url = aansluitingen.getSource().getGetFeatureInfoUrl(event.coordinate, resolution,
    'EPSG:3857', {'INFO_FORMAT': 'text/html'});

    if (url) {
      document.getElementById('js-feature-info').innerHTML =
      '<iframe seamless src="' + url + '" height="100%" width="100%" frameborder="0"></iframe>';
      }
});


$('#js-basislagen').on('change', function(event) {
  var target = $(event.target);

  groep_basislagen.getLayers().forEach(function(element,index,array) {
    console.log('Index: '+String(index))

    if (target.prop('value') === String(index)){
      element.setVisible(true);
    }
    else {
      element.setVisible(false);
    }
  });
});

$('#js-themalagen').on('change', function(event) {
  var target = $(event.target);
  var controlindex = target.val();

  if (target.prop('checked')) {
    groep_themalagen.getLayers().forEach(function(element,index) {
      if (target.prop('value') === String(index)){
        element.setVisible(true);
      }
    });
  }
  else {
    groep_themalagen.getLayers().forEach(function(element,index) {
      if (target.prop('value') === String(index)){
        element.setVisible(false);
      }
    });
  }
});
