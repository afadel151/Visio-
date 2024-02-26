// import './bootstrap';
import '../css/app.css';

import { Fragment } from 'react';

import Alpine from 'alpinejs';
import Button from './button';
window.Alpine = Alpine;

Alpine.start();
import ReactDOM from 'react-dom/client';        
import Home from './Page/Home';
import Brahim from './Page/Brahim';
// import { Button } from 'bootstrap';
ReactDOM.createRoot(document.getElementById('btn')).render(     

    <Button />
    
);
     
           
