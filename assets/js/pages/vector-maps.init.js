"use strict";function _classCallCheck(e,a){if(!(e instanceof a))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,a){for(var t=0;t<a.length;t++){var r=a[t];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function _createClass(e,a,t){return a&&_defineProperties(e.prototype,a),t&&_defineProperties(e,t),e}var VectorMap=function(){function e(){_classCallCheck(this,e)}return _createClass(e,[{key:"initWorldLineMapMarker",value:function(){new jsVectorMap({map:"world_merc",selector:"#world-mapline-markers",zoomOnScroll:!1,zoomButtons:!1,markersSelectable:!0,markers:[{name:"Greenland",coords:[72,-42]},{name:"Canada",coords:[56.1304,-106.3468]},{name:"Germany",coords:[51.1657,10.4515]},{name:"Japan",coords:[36.2048,138.2529]},{name:"United States",coords:[37.0902,-95.7129]},{name:"Egypt",coords:[26.8206,30.8025]},{name:"Brazil",coords:[-14.235,-51.9253]},{name:"Australia",coords:[-25.2744,133.7751]},{name:"Malaysia",coords:[4.2105,101.9758]},{name:"China",coords:[35.8617,104.1954]},{name:"Norway",coords:[60.472024,8.468946]},{name:"Ukraine",coords:[48.379433,31.16558]}],lines:[{from:"Greenland",to:"Egypt"},{from:"Canada",to:"Egypt"},{from:"Germany",to:"Egypt"},{from:"Japan",to:"Egypt"},{from:"United States",to:"Egypt"},{from:"Brazil",to:"Egypt"},{from:"Australia",to:"Egypt"},{from:"Malaysia",to:"Egypt"},{from:"China",to:"Egypt"},{from:"Norway",to:"Egypt"},{from:"Ukraine",to:"Egypt"}],regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}},markerStyle:{initial:{fill:"#343a40"}},labels:{markers:{render:function(e){return e.name}}},lineStyle:{animation:!0,strokeDasharray:"6 3 6"}})}},{key:"initWorldMarkerMap",value:function(){new jsVectorMap({map:"world_merc",selector:"#world-map-markers",zoomOnScroll:!1,zoomButtons:!1,selectedMarkers:[0,2],markersSelectable:!0,markers:[{name:"Palestine",coords:[31.9474,35.2272]},{name:"Russia",coords:[61.524,105.3188]},{name:"Canada",coords:[56.1304,-106.3468]},{name:"Greenland",coords:[71.7069,-42.6043]}],regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}},markerStyle:{initial:{fill:"#343a40"},selected:{fill:"red"}},labels:{markers:{render:function(e){return e.name}}}})}},{key:"initWorldMarkerImageMap",value:function(){new jsVectorMap({map:"world_merc",selector:"#world-map-markers-image",zoomOnScroll:!0,zoomButtons:!0,regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}},selectedMarkers:[0,2],markersSelectable:!0,markers:[{name:"Palestine",coords:[31.9474,35.2272]},{name:"Russia",coords:[61.524,105.3188]},{name:"Canada",coords:[56.1304,-106.3468]},{name:"Greenland",coords:[71.7069,-42.6043]}],markerStyle:{initial:{image:"assets/images/logo-sm.png"}},labels:{markers:{render:function(e){return e.name}}}})}},{key:"initUsaVectorMap",value:function(){new jsVectorMap({selector:"#usa-vectormap",map:"us_merc_en",regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}}})}},{key:"initCanadaVectorMap",value:function(){new jsVectorMap({map:"canada",selector:"#canada-vectormap",zoomOnScroll:!1,regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}}})}},{key:"initRussiaVectorMap",value:function(){new jsVectorMap({map:"russia",selector:"#russia-vectormap",zoomOnScroll:!1,regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}}})}},{key:"initSpainVectorMap",value:function(){new jsVectorMap({map:"spain",selector:"#spain-vectormap",regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}}})}},{key:"initIraqVectorMap",value:function(){new jsVectorMap({map:"iraq",selector:"#iraq-vectormap",regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}}})}},{key:"initUsLccVectorMap",value:function(){new jsVectorMap({map:"us_lcc_en",selector:"#us-lcc-vectormap",regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}}})}},{key:"initUsMillVectorMap",value:function(){new jsVectorMap({map:"us_mill_en",selector:"#us-mill-vectormap",regionStyle:{initial:{stroke:"#4a5a6b",fill:"#ced4da",strokeWidth:.25,fillOpacity:1}}})}},{key:"init",value:function(){this.initWorldLineMapMarker(),this.initWorldMarkerMap(),this.initWorldMarkerImageMap(),this.initUsaVectorMap(),this.initCanadaVectorMap(),this.initRussiaVectorMap(),this.initSpainVectorMap(),this.initIraqVectorMap(),this.initUsLccVectorMap(),this.initUsMillVectorMap()}}]),e}();document.addEventListener("DOMContentLoaded",function(e){(new VectorMap).init()});