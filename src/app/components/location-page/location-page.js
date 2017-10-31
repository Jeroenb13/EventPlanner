"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var core_1 = require("@angular/core");
var core_2 = require("@agm/core");
var LocationComponent = (function () {
    function LocationComponent() {
    }
    LocationComponent.prototype.ngOnInit = function () {
        this.markers = [
            new Marker(52.7788414, 6.914114, 'M')
        ];
    };
    return LocationComponent;
}());
LocationComponent = __decorate([
    core_1.Component({
        templateUrl: './location-page.html',
        styles: ['ul { color: blue; }'],
        styleUrls: ['./style.css'],
        directives: [core_2.AgmMap]
    })
], LocationComponent);
exports.LocationComponent = LocationComponent;
var Marker = (function () {
    function Marker(lat, long, marker) {
        this.lat = lat;
        this.long = long;
        this.marker = marker;
    }
    return Marker;
}());
exports.Marker = Marker;
//# sourceMappingURL=location-page.js.map