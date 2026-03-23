import axios from 'axios';
window.axios = axios;
import jquery from 'jquery';
window.$ = window.jQuery = jquery;
import md5 from 'md5';
window.md5 = md5;
import moment from 'moment';
window.moment = moment;
import Swal from 'sweetalert2'
window.$swal = Swal;
import pdfMake from 'pdfmake';
window.pdfMake = pdfMake;
import { v4 as uuid } from 'uuid';
window.uuid = uuid;
import Decimal from 'decimal.js';
window.Decimal = Decimal;
import Fuse from 'fuse.js';
window.Fuse = Fuse;

window.APP_NAME = import.meta.env.VITE_APP_NAME;
window.APP_TAG = import.meta.env.VITE_APP_TAG;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
