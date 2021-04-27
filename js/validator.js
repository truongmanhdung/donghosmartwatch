function Validator(selector) {

    var _this = this;
    var formRules = {};
    function getParent(element, selector) {

        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }
    //quy ước tạo rule
    //có lỗi returm lại thẻ span
    //ko có lỗi returm undefined
    var validatorRules = {
        required: function (value) {
            return value ? undefined : 'Vui lòng nhập vào'
        },
        email: function (value) {
            var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            return regex.test(value) ? undefined : 'Vui lòng nhập email';
        },
        number: function (value) {
            var relax = /^\d+$/;
            return relax.test(value) ? undefined : 'vui lòng nhập số';
        }

    };
    var element = document.querySelector(selector);

    if (element) {
        var inputs = element.querySelectorAll('[name][rules]');
        for (var input of inputs) {

            var rules = input.getAttribute('rules').split('|');
            for (var rule of rules) {

                if (Array.isArray(formRules[input.name])) {
                    formRules[input.name].push(validatorRules[rule]);
                } else {
                    formRules[input.name] = [validatorRules[rule]];
                }
            }

            //lắng nghe sự kiện
            input.onblur = handleValidate;
            input.oninput = handleClearError;
        }
        function handleValidate(event) {
            var rules = formRules[event.target.name];
            var errorMessage;

            for (var rule of rules) {
                errorMessage = rule(event.target.value);
                if (errorMessage) break;
            }

            if (errorMessage) {
                var formGroup = getParent(event.target, '.form-group');

                if (formGroup) {
                    formGroup.classList.add('error-color');
                    var formMessage = formGroup.querySelector('.form-message')
                    if (formMessage) {
                        formMessage.innerText = errorMessage;
                    }
                }
            }

            return !errorMessage;
        }
        //hàm clear message lỗi
        function handleClearError(event) {
            var formGroup = getParent(event.target, '.form-group');
            if (formGroup.classList.contains('error-color')) {
                formGroup.classList.remove('error-color');
                var formMessage = formGroup.querySelector('.form-message')
                if (formMessage) {
                    formMessage.innerText = '';
                }
            }
        }
    }

    //xử lí submit form
    element.onsubmit = function (event) {
        event.preventDefault();
        var inputs = element.querySelectorAll('[name][rules]');
        var isValid = true;
        for (var input of inputs) {
            if (!handleValidate({ target: input })) {
                isValid = false;
            }

        }
        //khi ko có lỗi submit form
        if (isValid) {
            if (typeof _this.onSubmit === 'function') {
                var enableInputs = element.querySelectorAll('[name]');
                var formValues = Array.from(enableInputs).reduce(function (values, input) {
                    switch (input.type) {
                        case 'radio':
                        case 'checkbox':
                            if (input.matches(':checked')) {
                                values[input.name] = input.value;
                            }
                            break;
                        default:
                            values[input.name] = input.value;
                    }
                    return values;
                }, {});
                _this.onSubmit(formValues);
            } else {
                element.submit();
            }
        }
    }
}