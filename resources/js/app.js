import Navigo from 'navigo';

import returnPage from './pages';

const root = '/';
const router = new Navigo(root);

document.addEventListener("DOMContentLoaded", function(){
    router.on('publique-uma-vaga', () => returnPage('publique-uma-vaga'));
    router.on('duvidas', () => returnPage('duvidas'));

    router.resolve();
});
