export default class FormValidate {
    constructor(classForm) {
        this.form = document.querySelector(classForm);
    }

    init() {
        this.events();
    }

    events() {
        if(this.form) {
            this.form.addEventListener('submit', e => {
                e.preventDefault();
                this.validate(e);
            });
        }
    }

    validate(e) {
        const el = e.target;
        const nameInput = el.querySelector('input[name="name"]');
        const phoneInput = el.querySelector('input[name="phone"]');
        let error = false;

        if(nameInput.value.length < 3 || nameInput.value.length > 150) {
            alert('Nome do contato deve conter entre 3 e 150 caracteres!');
            error = true;
        }

        if(phoneInput.value.length < 8 || phoneInput.value.length > 50) {
            alert('Telefone do contato deve conter entre 8 e 50 caracteres.');
            error = true;
        }

        if(!error) el.submit();
    }
}
