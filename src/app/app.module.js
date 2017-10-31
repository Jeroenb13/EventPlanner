"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var core_1 = require("@angular/core");
var platform_browser_1 = require("@angular/platform-browser");
var router_1 = require("@angular/router");
var ng_bootstrap_1 = require("@ng-bootstrap/ng-bootstrap");
var app_pagenotfoundcomponent_1 = require("./app.pagenotfoundcomponent");
var main_page_1 = require("./components/main-page/main-page");
var navbar_1 = require("./components/navbar/navbar");
var login_page_1 = require("./components/login-page/login-page");
var homepage_page_1 = require("./components/homepage/homepage-page");
var location_page_1 = require("./components/location-page/location-page");
var http_1 = require("@angular/http");
var core_2 = require("@agm/core");
require("rxjs/add/operator/map");
var forms_1 = require("@angular/forms");
var appRoutes = [
    { path: 'login', component: login_page_1.LoginComponent },
    { path: '', component: homepage_page_1.HomepageComponent },
    { path: 'locatie', component: location_page_1.LocationComponent },
    { path: '**', component: app_pagenotfoundcomponent_1.PageNotFoundComponent }
];
var AppModule = (function () {
    function AppModule() {
    }
    return AppModule;
}());
AppModule = __decorate([
    core_1.NgModule({
        imports: [
            platform_browser_1.BrowserModule,
            router_1.RouterModule.forRoot(appRoutes),
            ng_bootstrap_1.NgbModule.forRoot(),
            http_1.HttpModule,
            http_1.JsonpModule,
            forms_1.ReactiveFormsModule,
            platform_browser_1.BrowserModule,
            forms_1.FormsModule,
            core_2.AgmCoreModule.forRoot({ apiKey: 'AIzaSyCq4B7wIDkkbJinMCpLMwpS5nRwe573UH4' })
        ],
        declarations: [main_page_1.MainPageComponent, navbar_1.NavBarComponent, app_pagenotfoundcomponent_1.PageNotFoundComponent, homepage_page_1.HomepageComponent, login_page_1.LoginComponent, location_page_1.LocationComponent],
        bootstrap: [main_page_1.MainPageComponent]
    })
], AppModule);
exports.AppModule = AppModule;
//# sourceMappingURL=app.module.js.map