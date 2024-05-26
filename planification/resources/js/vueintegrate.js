import "./bootstrap";
import { createApp } from "vue";
import Welcome from "@/Components/Welcome.vue";
import  Cours from "@/Components/weeks/Cours.vue";
import Std from "./Components/weeks/Std.vue";
import TdForm from "@/Components/weeks/TdForm.vue";

const app = createApp({});
app
    .component("Welcome", Welcome)
    .component("Cours", Cours)
    .component("TdForm", TdForm)
    .component("Std", Std);
app.mount("#app");
