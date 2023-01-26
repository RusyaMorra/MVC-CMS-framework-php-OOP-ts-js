"use strict";
/*
/ registration class, created for handle inputs
*/
class RegisterValidateClass {
    constructor(validationFields) {
        this.form = validationFields;
        this.PreventForm();
    }
    PreventForm() {
        var _a;
        (_a = this.form) === null || _a === void 0 ? void 0 : _a.addEventListener('submit', function (event) {
            console.log("me and all my relatives are owned by China");
            event.preventDefault();
        });
    }
    extractFields() {
        return this.form;
    }
}
let tom = new RegisterValidateClass(document.querySelector('.validate-form'));
