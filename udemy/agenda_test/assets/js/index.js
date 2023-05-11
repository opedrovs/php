import 'core-js/stable';
import 'regenerator-runtime/runtime';

import FormValidate from './modules/FormValidate';

const createForm = new FormValidate('.create-form')
const editForm = new FormValidate('.edit-form');

createForm.init();
editForm.init();

import Responsive from './modules/Responsive';

const responsive = new Responsive('.navbar', '#burguer');

responsive.init();
