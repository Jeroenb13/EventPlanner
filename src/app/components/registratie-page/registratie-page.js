"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require("@angular/core");
var forms_1 = require("@angular/forms");
var RegistratieComponent = (function () {
    function RegistratieComponent(fb) {
        this.registrationForm = fb.group({
            'firstName': [null, forms_1.Validators.required],
            'surName': [null, forms_1.Validators.required],
            'eMail': [null, forms_1.Validators.compose([forms_1.Validators.required, forms_1.Validators.pattern(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)])],
            'userName': [null, forms_1.Validators.required],
            'passWord': [null, forms_1.Validators.compose([forms_1.Validators.required, forms_1.Validators.minLength(7)])],
            'repeatPassWord': [null, forms_1.Validators.required]
        }, {
            validator: this.matchinPasswords('passWord', 'repeatPassWord')
        });
    }
    RegistratieComponent.prototype.submitForm = function (value) {
        console.log(value);
    };
    RegistratieComponent.prototype.matchinPasswords = function (passwordKey, repeatpasswordKey) {
        return function (group) {
            var passwordInput = group.controls[passwordKey];
            var passwordConformationInput = group.controls[repeatpasswordKey];
            if (passwordInput.value !== passwordConformationInput.value) {
                return passwordConformationInput.setErrors({ notEquivalent: true });
            }
        };
    };
    return RegistratieComponent;
}());
RegistratieComponent = __decorate([
    core_1.Component({
        templateUrl: './registratie-page.html'
    }),
    __metadata("design:paramtypes", [forms_1.FormBuilder])
], RegistratieComponent);
exports.RegistratieComponent = RegistratieComponent;
//# sourceMappingURL=registratie-page.js.map