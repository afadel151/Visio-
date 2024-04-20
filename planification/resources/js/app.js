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
const instance = axios.create({
    baseURL: "http://127.0.0.1:8000",
    // timeout: 100,
    withCredentials: true,
    xsrfCookieName: "XSRF-TOKEN",
    xsrfHeaderName: "X-XSRF-TOKEN",
    headers: {
        Accept: "application/json",
    },
});

const openModal = (button) => {
    const modal = button.nextElementSibling;
    modal.showModal();
};

function closeModal(button) {
    const modal = button.closest(".modal");
    modal.close();
}
function DeleteTd(button, SectionId) {
    const dialogue = button.parentNode.parentNode.parentNode;
    const td = dialogue.parentNode.parentNode.parentNode;
    console.log(td);
}
document.addEventListener("DOMContentLoaded", function () {
    setupCreateTp();
    setupCreateCour();
    setupCreateTd();
    setupGetAvailableRooms();
});
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

function NewInnerTd(tr, td, session) {
    td.innerHTML = `<div class="h-[150px] shadow-lg  flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] rounded-xl justify-center items-center">
                            <a href="/teachers/${session.teacher_id}">
                                <p class="hover:shadow-lg  hover:bg-slate-50  bg-slate-100 px-2 rounded-xl font-bold">
                                ${session.teacher.teacher_name}</p>  
                            </a>
                            <p class="text-xl font-normal">${session.module.module}</p>
                            <p class= "text-xl font-bold">${session.room.room}</p>
                            <div class="flex updateformparent relative justify-center items-center mt-4 space-x-2">
                               
                                <button class="btn btn-circle delete-td hover:bg-rose-400"
                                            onclick="openModal(this)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                            </svg>

                                            <div class="hidden section-id"> ${session.id} </div>

                                        </button>
                                        <dialog id="my_modal_1" class="modal z-60">
                                            <div class="modal-box">
                                                <h3 class="font-bold text-lg">Hello!</h3>
                                                <p class="py-4">Do you rally want to delete this session ?</p>
                                                <div class="modal-action">
                                                    <form action="">
                                                        <button class="btn btn-error">Delete</button>
                                                    </form>
                                                    <form method="dialog">
                                                        <!-- if there is a button in form, it will close the modal -->
                                                        <button class="btn">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </dialog>
                                
                            </div>
                    </div>`;
    td.classList.remove("leave");
    td.classList.add("enter");
    const CourButton = tr.querySelector("td .parentofform");
    if (CourButton) {
        CourButton.classList.add("hidden");
    }
}
function NewInnerCour(tr, session) {
    tr.innerHTML = `
<td colspan="3" class="session">
<div class="h-[150px] w-[100%] shadow-lg  flex card  bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] 
     flex-col rounded-xl justify-center items-center">
     <div class="company-id hidden">${session.sessionable_id}</div>
        <a href="/teachers/${session.teacher_id}">
            <p class="hover:shadow-lg  hover:bg-slate-50  bg-slate-100 px-2 rounded-xl font-bold">
            ${session.teacher.teacher_name}</p>  
        </a>
        <p class="text-xl font-normal">${session.module.module}</p>
        <p class= "text-xl font-bold">${session.room.room}</p>
        <div class="flex updateformparent relative justify-center self-end  items-center space-x-2">
        
           
        <button class="btn btn-circle delete-td hover:bg-rose-400" onclick="openModal(this)">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>


        </button>
    <dialog id="my_modal_1" class="modal z-60">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Hello!</h3>
            <p class="py-4">Do you rally want to delete this session ?</p>
            <div class="modal-action">
                    <button class="btn btn-error">Delete
                        
                    </button>
               
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn">Close</button>
                </form>
            </div>
        </div>
    </dialog>
        
        </div>
                
    </div>
</td>`;
    tr.classList.add("enter");
}
async function PostCour(data, tr) {
    try {
        let response = await axios.post("/sessions/create", data);
        const session = response.data;
        console.log("sent");
        NewInnerCour(tr, session);
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
    console.log(form);

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
            var teachersElements = "";
            session.tp_teachers.forEach((teacher) => {
                teachersElements += `<a href="http://127.0.0.1:8000/teachers/${teacher.id}'"
                                        class=" btn btn-sm">
                                        <p class="  text-xl  font-bold">
                                            ${teacher.teacher_name} </p>
                                    </a>`;
            });
            const divy = document.createElement("div");
            divy.classList.add(
                "flex",
                "relative",
                "justify-center",
                "items-center",
                "mt-4"
            );
            divy.innerHTML = `
            <button class="btn btn-circle delete-td hover:bg-rose-400"
                onclick="openModal(this)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
            </button>
            <dialog class="modal z-60">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Hello!</h3>
                    <p class="py-4">Do you rally want to delete this session ?</p>
                    <div class="modal-action">

                        <button class="btn btn-error delete-td">Delete</button>
                        <form method="dialog">
                            <!-- if there is a button in form, it will close the modal -->
                            <button class="btn">Close</button>
                        </form>
                    </div>
                </div>
            </dialog>`;
            var newDiv = document.createElement("div");
            newDiv.classList.add(
                "flex",
                "flex-col",
                "space-y-2",
                "justify-center",
                "items-center",
                "w-[100%]"
            );
            newDiv.innerHTML = teachersElements;
            const ChildDiv = document.createElement("div");
            ChildDiv.classList.add(
                "h-[300px]",
                "shadow-xl",
                "flex",
                "flex-col",
                "border-2",
                "bg-opacity-90",
                "backdrop-blur",
                "transition-shadow",
                "duration-100",
                "[transform:translate3d(0,0,0)]",
                "rounded-xl",
                "justify-between",
                "items-center"
            );
            ChildDiv.appendChild(newDiv);
            td.innerHTML = "";
            var newp = document.createElement("p");
            newp.classList.add("text-xl", "font-normal");
            newp.innerText = session.module.module;
            ChildDiv.appendChild(newp);
            newp = document.createElement("p");
            newp.classList.add("text-xl", "font-normal");
            newp.innerText = session.room.room;
            ChildDiv.appendChild(newp);
            form.classList.add("hidden");
            ChildDiv.appendChild(divy);
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
            td.appendChild(ChildDiv);
            td.setAttribute("rowspan", "2");
            return;
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
    console.log(tr);
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
        NewInnerTd(tr, td, session);
        ShowAlert();
        HideAlert();
    } catch (error) {}
}
