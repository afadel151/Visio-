import "./bootstrap";
import axios from "axios";
import Alpine from "alpinejs";

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
async function openModal(button) {
    const modal = button.nextElementSibling;
    modal.showModal();
}

function closeModal(button) {
    const modal = button.closest('.modal');
    modal.close();
}
 function DeleteTd(button,SectionId) 
{
    const dialogue = button.parentNode.parentNode.parentNode;
    const td = dialogue.parentNode.parentNode.parentNode;
    console.log(td);
}
document.addEventListener("DOMContentLoaded", async function () {
    await Promise.all([
        setupCreateTp(),
        setupCreateCour(),
        setupCreateTd(),
        setupGetAvailableRooms()
    ]);
    setInterval(async () => {
        await Promise.all([
            setupCreateCour(),
            setupCreateTd(),
            setupGetAvailableRooms()
        ]);
    }, 10000);
});
async function setupCreateTp() {
    const AllSubmitsOfTp = document.querySelectorAll(".submit-tp");
    await Promise.all(Array.from(AllSubmitsOfTp).map(async (AddTp) => {
        AddTp.removeEventListener("click", clickHandlerTp);
        AddTp.addEventListener("click", clickHandlerTp);
    }));
}
async function setupCreateCour() {
    const AllSubmitsOfCours = document.querySelectorAll(".submit-cour");
    await Promise.all(Array.from(AllSubmitsOfCours).map(async (AddCour) => {
        AddCour.removeEventListener("click", clickHandler);
        AddCour.addEventListener("click", clickHandler);
    }));
}

async function setupCreateTd() {
    const AllSubmitsOfTds = document.querySelectorAll(".submit-td");
    await Promise.all(Array.from(AllSubmitsOfTds).map(async (Addtd) => {
        Addtd.removeEventListener("click", ClickH);
        Addtd.addEventListener("click", ClickH);
    }));
}

async function setupGetAvailableRooms() {
    const AllRoomSelects = document.querySelectorAll(".form-display-button");
    await Promise.all(Array.from(AllRoomSelects).map(async (SelectRooms) => {
        SelectRooms.removeEventListener("click", clickHandlerForRooms);
        SelectRooms.addEventListener("click", clickHandlerForRooms);
    }));
}

function clickHandlerForRooms(event) {
    event.preventDefault();
    const button = event.currentTarget;
    const td = button.parentNode;
    const Target = td.querySelector("form .form-section  .selects .available-rooms");
    if (Target) {
        const SessionDateElement = Target.querySelector(".session_date");
        const session_datee = SessionDateElement ? SessionDateElement.innerText.trim() : '';
        const SessionTimingElement = Target.querySelector(".timing_id");
        const timing_idd = SessionTimingElement ? SessionTimingElement.innerText.trim() : '';
        GetAvailableRooms(Target, session_datee, timing_idd);
    } else {
        console.log("Target element not found");
    }
}

async function GetAvailableRooms(Target, session_datee, timing_idd) {
    try {
        let response = await axios.get("/rooms/available", {
            params: {
                session_date: session_datee,
                timing_id: timing_idd,
            },
            // timeout: 1000
        });
        HandleRooms(response, Target);

    } catch (error) {
        console.log(error);
    }
}
async function HandleRooms(response, Target) {
    const selectElement = document.createElement("select");
    selectElement.name = "room_id";
    selectElement.id = "room";
    selectElement.classList.add("w-[150px]", "h-10", "rounded-lg");
    var responseData = response.data;
    const label = document.createElement("label");
    label.innerText = "Rooms";
    label.classList.add("w-[100px]");
    responseData.forEach(function (room) {
        const option = document.createElement("option");
        option.value = room.id;
        option.textContent = room.room;
        selectElement.appendChild(option);
    });
    Target.innerHTML = "";
    Target.appendChild(label);
    Target.appendChild(selectElement);
}

async function NewInnerTd(tr, td, session, moduleOptions, teacherOptions) {
    td.innerHTML =
        `<div class="h-[150px] shadow-lg  flex flex-col border-2 bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] rounded-xl justify-center items-center">
                            <a href="/teachers/${session.teacher_id}">
                                <p class="hover:shadow-lg  hover:bg-slate-50  bg-slate-100 px-2 rounded-xl font-bold">
                                ${session.teacher.teacher_name}</p>  
                            </a>
                            <p class="text-xl font-normal">${session.module.module}</p>
                            <p class= "text-xl font-bold">${session.room.room}</p>
                            <div class="flex updateformparent relative justify-center items-center mt-4 space-x-2">
                                <button
                                    class="h-8 btn flex justify-center items-center  hover:scale-125 duration-300  shadow-md update-button rounded-xl hover:bg-slate-50 hover:shadow-lg border-[2px] border-slate-500 p-1 font-bold w-8 bg-slate-200">
                                    <img src="/svg/pen-thin.svg" class="h-6 w-6">
                                </button>
                                <form action="{{ route('sessions.update', ['id' => $s->id]) }}"
                                    class="update-form flex flex-col justify-center space-y-4 items-center  text-xl w-[300px] h-[300px] ease-in z-50 hidden absolute bg-white shadow-xl rounded-xl top-10 right-2">
                                    
                                    <a
                                        class="absolute top-4 right-4 section-update-cancel-button hover:cursor-pointer  bg-slate-400 h-6 w-6 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"
                                            fill="currentColor">
                                            <path
                                                d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                                        </svg>
                                    </a>
                                    <div class="flex justify-center items-center w-[100%]">
                                        <label for="module" class="w-[100px]">Module</label>
                                        <select name="module_id" id="module" class="w-[150px] h-10 rounded-lg">
                                            
                                            ` +
        moduleOptions +
        `
                                        </select>
                                    </div>
                                    <div class="flex justify-center items-center w-[100%]">
                                        <label for="room" class="w-[100px]">Teacher</label>
                                        <select name="teacher_id" id="room" class="w-[150px] h-10 rounded-lg">
                                           
                                            ` +
        teacherOptions +
        `
                                        </select>
                                    </div>
                                    <div  class="flex available-rooms justify-center items-center w-[100%]">
                                            <img src="/svg/3-dots-fade.svg" alt="">
                                     </div>
                                    <input type="submit" name="submit" id="" value="Update"
                                        class="bg-indigo-300 btn rounded-lg btn hover:scale-115 duration-300 shadow-lg h-10 w-32">
                                </form>
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
                                                        <button class="btn btn-warning">Delete</button>
                                                    </form>
                                                    <form method="dialog">
                                                        <!-- if there is a button in form, it will close the modal -->
                                                        <button class="btn">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </dialog>
                                
                                        <button type="button" title="Mark as absented"
                                        class="btn btn-circle mark-td-absence">
                                        <div class="hidden section-id">${session.id}</div>
                                        <div class="hidden sector">{{ $sector }}</div>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                            </svg>
                                        </button>
                            </div>
                    </div>`;
    td.classList.remove("leave");
    td.classList.add("enter");
    const CourButton = tr.querySelector("td .company-button");
    if (CourButton) {
        CourButton.classList.add("hidden");
    }
}
async function NewInnerCour(tr, session, moduleOptions, teacherOptions) {
    tr.innerHTML =
        `
<td colspan="3" class="session">
<div class="h-[150px] w-[100%] shadow-lg  flex card  bg-opacity-90 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)] 
     flex-col rounded-xl justify-center items-center">
        <a href="/teachers/${session.teacher_id}">
            <p class="hover:shadow-lg  hover:bg-slate-50  bg-slate-100 px-2 rounded-xl font-bold">
            ${session.teacher.teacher_name}</p>  
        </a>
        <p class="text-xl font-normal">${session.module.module}</p>
        <p class= "text-xl font-bold">${session.room.room}</p>
        <div class="flex updateformparent relative justify-center self-end  items-center space-x-2">
        <button class="btn btn-circle form-display-button update-button"
        title="Update this session">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
        </svg>


    </button>
            <form 
                class="update-form flex flex-col justify-center space-y-4 items-center  text-xl w-[300px] h-[300px] ease-in z-30 hidden absolute bg-white shadow-xl rounded-xl top-10 right-2">
                <a
                    class="absolute top-2 right-2 hover:cursor-pointer company-update-cancel-button bg-slate-400 h-6 w-6 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor">
                        <path
                            d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z" />
                    </svg>
                </a>
                <div class="flex justify-center items-center w-[100%]">
                    <label for="module" class="w-[100px]">Module</label>
                    <select name="module_id" id="module" class="w-[150px] h-10 rounded-lg">
                        ` +
        moduleOptions +
        `
                    </select>
                </div>
                <div class="flex justify-center items-center w-[100%]">
                    <label for="room" class="w-[100px]">Teacher</label>
                    <select name="teacher_id" id="room" class="w-[150px] h-10 rounded-lg">
                    ` +
        teacherOptions +
        `
                    </select>
                </div>
                <div class="flex available-rooms justify-center items-center w-[100%]">
                    <img src="/svg/3-dots-fade.svg" alt="">
                </div>
                <input type="submit" name="submit" id="" value="Update"
                    class="bg-indigo-300 btn hover:shadow-lg rounded-lg shadow-lg h-10 w-28">
            </form>
            <button type="submit"
                class="rounded-lg delete-cour  btn flex justify-center items-center   w-8  hover:scale-125 duration-300 hover:bg-rose-400 hover:shadow-lg border-[2px] border-slate-500 bg-red-400 h-8">
                <div class="hidden company-id">${session.id} </div>
                <img src="/svg/trash.svg" class="h-6 w-6" alt="">
            </button>
            <button type="button" title="Mark as absented"
                    class="rounded-lg mark-cour-absence btn flex justify-center items-center hover:scale-125 duration-300 hover:bg-gray-100 hover:shadow-lg border-[2px] border-slate-500 w-8 p-2 bg-gray-300 h-8">
                    <div class="hidden company-id"> ${session.id} </div>
                    <img src="/svg/absence.svg" class="h-4 w-4" alt="">
            </button>


        </div>
                
    </div>
</td>`;
    tr.classList.add("enter");
}
async function PostCour(data, teachers, modules, tr) {
    try {
        let response = await axios.post("/sessions/create", data);
        const session = response.data;
        console.log("sent");

        const teacherOptions = teachers
            .map(
                (teacher) =>
                    `<option value="${teacher.id}">${teacher.teacher_name}</option>`
            )
            .join("");
        const moduleOptions = modules
            .map(
                (module) =>
                    `<option value="${module.id}">${module.module}</option>`
            )
            .join("");
        NewInnerCour(tr, session, moduleOptions, teacherOptions);
    } catch (error) {
        console.log(error);
    }
}
async function clickHandlerTp(event) {
    event.preventDefault();
    const AddTp = event.currentTarget;
    const td = AddTp.parentNode.parentNode;
    const form = AddTp.nextElementSibling;
    if (form && form instanceof HTMLFormElement) {
        const formData = new FormData(form);

    }
}
async function clickHandler(event) {
    event.preventDefault();
    const AddCour = event.currentTarget;
    const td = AddCour.parentNode.parentNode;
    const tr = td.parentNode;
    const form = td.querySelector("form");
    const formData = new FormData(form);
    const sectorDiv = form.querySelector(".sector");
    const SectorText = sectorDiv.innerText.trim();
    if (SectorText == "MI") {
        var teachers = teachers_MI;
        var modules = modules_MI;
    } else if (SectorText == "ST") {
        var teachers = teachers_ST;
        var modules = modules_ST;
    } else {
        var teachers = teahcers_PR;
        var modules = modules_PR;
    }
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
    await PostCour(data, teachers, modules, tr);
}


async function ClickH(event) {
    event.preventDefault();
    const submit = event.currentTarget;
    const grandparent = submit.parentNode.parentNode;
    const tr = grandparent.parentNode.parentNode;
    console.log(tr);
    const form = grandparent.querySelector("form");
    const formData = new FormData(form);
    const sectorDiv = form.querySelector(".sector");
    const sectorText = sectorDiv.innerText.trim();
    if (sectorText == "MI") {
        var teachers = teachers_MI;
        var modules = modules_MI;
    } else if (sectorText == "ST") {
        var teachers = teachers_ST;
        var modules = modules_ST;
    } else {
        var teachers = teahcers_PR;
        var modules = modules_PR;
    }
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
    let response =  await axios.post("/sessions/create", data);
        const session = response.data;
        const td = grandparent.parentNode;

        const teacherOptions = teachers
            .map(
                (teacher) =>
                    `<option value="${teacher.id}">${teacher.teacher_name}</option>`
            )
            .join("");
        const moduleOptions = modules
            .map(
                (module) =>
                    `<option value="${module.id}">${module.module}</option>`
            )
            .join("");
        NewInnerTd(tr, td, session, moduleOptions, teacherOptions);

    
   } catch (error) {
    
   }
}
