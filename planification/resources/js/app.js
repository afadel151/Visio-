// import "./bootstrap.js";
import axios from "axios";
import Alpine from "alpinejs";
import AOS from "aos";
import "preline";
import "aos/dist/aos.css"; // You can also use <link> for styles
// ..
AOS.init();
window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    setupCreateTp();
    setupCreateCour();
    setupCreateTd();
    setupGetAvailableRooms();
    setupIsTeacherAvailable();
});
function setupIsTeacherAvailable() {
    const IsTeacherAvailable = document.querySelector(
        "#submit_is_teacher_available"
    );
    IsTeacherAvailable.removeEventListener("click", CheckTeahcherAvailability);
    IsTeacherAvailable.addEventListener("click", CheckTeahcherAvailability);
}

async function CheckTeahcherAvailability() {
    const MyForm = document.querySelector("#is_teacher_available_form");
    const fdata = new FormData(MyForm);
    try {
        let response = await axios.get("/teachers/available", {
            params: {
                date: fdata.get("date"),
                timing_id: fdata.get("timing_id"),
                teacher_id: fdata.get("teacher_id"),
            },
        });
        console.log(response.data);
        document.querySelector("#is_teacher_available_result").innerHTML = response.data;
        if (response.data > 0)
            {
                document.querySelector("#is_teacher_available_result").innerHTML = `<div role="alert" class="alert alert-warning">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                <span>Oups! This teacher is occupied at the provided date and time</span>
              </div>`;
            }
        else if (response.data == 0){
            document.querySelector("#is_teacher_available_result").innerHTML = `<div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            <span>The teacher is available at te provided time!</span>
          </div>`;
        }
        
    } catch (error) {
        console.log(error);
    }
}
function setupGetAvailableRooms() {
    const SearchForRooms = document.querySelector("#get_available_rooms");
    SearchForRooms.removeEventListener("click", GetAvailableRooms);
    SearchForRooms.addEventListener("click", GetAvailableRooms);
}
function setupCreateTp() {
    const AllSubmitsOfTp = document.querySelectorAll(".submit-tp");

    Array.from(AllSubmitsOfTp).map((AddTp) => {
        AddTp.removeEventListener("click", clickHandlerTp);
        AddTp.addEventListener("click", clickHandlerTp);
    });
}

function setupCreateCour() {
    const AllSubmitsOfCours = document.querySelectorAll(".submit-cour");

    Array.from(AllSubmitsOfCours).map((AddCour) => {
        AddCour.removeEventListener("click", clickHandler);
        AddCour.addEventListener("click", clickHandler);
    });
}

function setupCreateTd() {
    const AllSubmitsOfTds = document.querySelectorAll(".submit-td");

    Array.from(AllSubmitsOfTds).map((Addtd) => {
        Addtd.removeEventListener("click", ClickH);
        Addtd.addEventListener("click", ClickH);
    });
}

async function GetAvailableRooms() {
    const form = document.querySelector("#available_rooms_form");
    const formdata = new FormData(form);
    const date = formdata.get("date");
    const timing = formdata.get("timing_id");
    try {
        let response = axios.get("/rooms/available", {
            params: {
                session_date: date,
                timing_id: timing,
            },
        });
        const Rooms = (await response).data;
        console.log(Rooms);

        const Target = document.querySelector("#available_rooms_result");
        Target.innerHTML = "";
        for (let index = 0; index < Rooms.length; index++) {
            const element = Rooms[index];
            var newItem = document.createElement("p");
            newItem.classList.add("text-xl", "font-bold");
            newItem.innerText = `${element.room}`;
            Target.appendChild(newItem);
        }
    } catch (error) {
        console.log(error);
    }
}

async function PostCour(data, tr) {
    try {
        let response = await axios.post("/sessions/create", data);
        const session = response.data;
        var ResultChiild = null;
        Array.from(tr.children).forEach((child) => {
            if (child.classList.contains("result")) {
                ResultChiild = child;
            } else {
                child.classList.add("hidden");
            }
        });
        if (ResultChiild) {
            const TeacherAnchor = ResultChiild.querySelector(".teacher-a");
            TeacherAnchor.href = "/teachers/" + session.teacher.id;
            TeacherAnchor.innerText = session.teacher.teacher_name;
            const ModulePar = ResultChiild.querySelector(".module-p");
            ModulePar.innerText = session.module.module;
            const RoomPar = ResultChiild.querySelector(".room-p");
            RoomPar.innerText = session.room.room;

            const DeleteAnchor = ResultChiild.querySelector(".delete-a");
            DeleteAnchor.href = "/sessions/delete/" + session.id;
            ResultChiild.classList.remove("hidden");
        }
    } catch (error) {
        console.log(error);
    }
}
async function clickHandlerTp(event) {
    event.preventDefault();
    const AddTp = event.currentTarget;
    const grandparent = AddTp.parentNode.parentNode;
    const tr = grandparent.parentNode.parentNode;
    const td = AddTp.parentNode.parentNode;
    const form = AddTp.parentNode;
    console.log(td);

    if (form && form instanceof HTMLFormElement) {
        const formData = new FormData(form);

        const select = form.querySelector(
            ".form-section .selects .teachers-select select"
        );
        var selectedArray = new Array();
        var i;
        var count = 0;
        if (select) {
            for (i = 0; i < select.options.length; i++) {
                if (select.options[i].selected) {
                    selectedArray[count] = select.options[i].value;
                    count++;
                }
            }
        }
        var Isession_date = formData.get("date");
        var Itiming_id = formData.get("timing_id");
        var Iweek_id = formData.get("week_id");
        var Isessionable_type = formData.get("sessionable_type");
        var Isessionable_id = formData.get("sessionable_id");
        var Isession_type = formData.get("session_type");
        var Imodule_id = formData.get("module_id");
        var Iroom_id = formData.get("room_id");
        var Iteacher_id = 1;
        try {
            console.log(Isession_date);
            let response = await axios.get("/sessions/create_tp", {
                params: {
                    teacher_id: Iteacher_id,
                    session_date: Isession_date,
                    timing_id: Itiming_id,
                    week_id: Iweek_id,
                    sessionable_type: Isessionable_type,
                    sessionable_id: Isessionable_id,
                    session_type: Isession_type,
                    module_id: Imodule_id,
                    room_id: Iroom_id,
                    teachers: selectedArray,
                },
            });
            const session = response.data;
            console.log(session);
            Array.from(td.children).forEach((child) => {
                if (child.classList.contains("result-tp")) {
                    const TpTeachers = session.tp_teachers;
                    const TpTeachersDiv = td.querySelector(".tp-teachers");
                    TpTeachers.forEach((teacher) => {
                        const NewAnchor = document.createElement("a");
                        NewAnchor.href = "/teachers/" + teacher.id;
                        NewAnchor.innerText = teacher.teacher_name;
                        NewAnchor.classList.add("btn", "btn-sm");
                        TpTeachersDiv.appendChild(NewAnchor);
                    });

                    const ModuleP = td.querySelector(".module-p");
                    ModuleP.innerText = session.module.module;
                    const RoomP = td.querySelector(".room-p");
                    RoomP.innerText = session.room.room;
                    const DeleteA = td.querySelector(".delete-a");
                    DeleteA.href = "/sessions/delete" + session.id;

                    child.classList.remove("hidden");
                } else {
                    td.removeChild(child);
                }
            });

            const tr = td.parentNode;
            var compButton = tr.querySelector(".parentofform");
            if (compButton) {
                compButton.classList.add("hidden");
            }
            // Find the next row
            const nextRow = tr.nextElementSibling;
            if (nextRow) {
                // Get the next td in the same column
                const nextTd = nextRow.querySelector(
                    "td:nth-child(" +
                        (Array.from(tr.children).indexOf(td) + 1) +
                        ")"
                );
                if (nextTd) {
                    // Remove the next td element
                    nextTd.parentNode.removeChild(nextTd);
                }
            }
            compButton = nextRow.querySelector(".parentofform");
            if (compButton) {
                compButton.classList.add("hidden");
            }
            td.setAttribute("rowspan", "2");
        } catch (error) {
            console.log(error);
        }
    }
}
function clickHandler(event) {
    event.preventDefault();
    const AddCour = event.currentTarget;
    const td = AddCour.parentNode.parentNode;
    const tr = td.parentNode;
    const form = td.querySelector("form");
    const formData = new FormData(form);

    const data = {
        session_date: formData.get("date"),
        timing_id: formData.get("timing_id"),
        week_id: formData.get("week_id"),
        sessionable_type: formData.get("sessionable_type"),
        sessionable_id: formData.get("sessionable_id"),
        session_type: formData.get("session_type"),
        module_id: formData.get("module_id"),
        teacher_id: formData.get("teacher_id"),
        room_id: formData.get("room_id"),
    };
    PostCour(data, tr);
}

async function ClickH(event) {
    event.preventDefault();
    const submit = event.currentTarget;
    const grandparent = submit.parentNode.parentNode;
    const tr = grandparent.parentNode.parentNode;
    const form = grandparent.querySelector("form");
    const formData = new FormData(form);

    const data = {
        session_date: formData.get("date"),
        timing_id: formData.get("timing_id"),
        week_id: formData.get("week_id"),
        sessionable_type: formData.get("sessionable_type"),
        sessionable_id: formData.get("sessionable_id"),
        session_type: formData.get("session_type"),
        module_id: formData.get("module_id"),
        teacher_id: formData.get("teacher_id"),
        room_id: formData.get("room_id"),
    };
    try {
        let response = await axios.post("/sessions/create", data);
        const session = response.data;
        const td = grandparent.parentNode;

        Array.from(td.children).forEach((child) => {
            if (child.classList.contains("result")) {
                const TeacherAnchor = child.querySelector(".teacher-a");
                TeacherAnchor.href = "/teachers/" + session.teacher.id;
                TeacherAnchor.innerText = session.teacher.teacher_name;
                const RoomP = child.querySelector(".room-p");
                RoomP.innerText = session.room.room;
                const ModulePar = child.querySelector(".module-p");
                ModulePar.innerText = session.module.module;
                const DeleteAnchor = child.querySelector(".delete-a");
                DeleteAnchor.href = "/sessions/delete/" + session.id;
                child.classList.remove("hidden");
            } else {
                td.removeChild(child);
            }
        });
    } catch (error) {}
}
// import { createApp, h } from 'vue'
// import { createInertiaApp } from '@inertiajs/vue3'

// createInertiaApp({
//   resolve: name => {
//     const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
//     return pages[`./Pages/${name}.vue`]
//   },
//   setup({ el, App, props, plugin }) {
//     createApp({ render: () => h(App, props) })
//       .use(plugin)
//       .mount(el)
//   },
// })
