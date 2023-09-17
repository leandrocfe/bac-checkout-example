import './bootstrap';
import Alpine from 'alpinejs';
import mask from '@alpinejs/mask'


import FormsAlpinePlugin from '../../vendor/filament/forms/dist/module.esm'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'
 
Alpine.plugin(FormsAlpinePlugin);
Alpine.plugin(NotificationsAlpinePlugin);
Alpine.plugin(mask)

window.Alpine = Alpine;
Alpine.start();
