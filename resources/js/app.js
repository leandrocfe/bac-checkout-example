import "./bootstrap";
import Alpine from "alpinejs";
import mask from "@alpinejs/mask";
import persist from "@alpinejs/persist";

import FormsAlpinePlugin from "../../vendor/filament/forms/dist/module.esm";
import NotificationsAlpinePlugin from "../../vendor/filament/notifications/dist/module.esm";

Alpine.plugin(FormsAlpinePlugin);
Alpine.plugin(NotificationsAlpinePlugin);

Alpine.plugin(mask);
Alpine.plugin(persist);

window.Alpine = Alpine;

Alpine.store("darkMode", {
    on: Alpine.$persist(true).as("darkMode_on"),

    toggle() {
        this.on = !this.on;
    },
});
Alpine.start();
