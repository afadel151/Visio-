import "./bootstrap";
import axios from "axios";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const instance = axios.create({
    baseURL: "http://127.0.0.1:8000",
    // timeout: 6000,
    withCredentials: true,
    xsrfCookieName: "XSRF-TOKEN",
    xsrfHeaderName: "X-XSRF-TOKEN",
    headers: {
        Accept: "application/json",
    },
});

function setupGetAvailableRooms() {
    const AllRoomSelects = document.querySelectorAll(".form-display-button");
    AllRoomSelects.forEach((SelectRooms) => {
        SelectRooms.removeEventListener("click", clickHandlerForRooms);
        SelectRooms.addEventListener("click", clickHandlerForRooms);
    });
}
function clickHandlerForRooms(event) {
    event.preventDefault();
    const button = event.currentTarget;
    const td = button.parentNode;
    const Target = td.querySelector(
        "form .form-section  .selects .available-rooms"
    );
    console.log(td);
    const SessionDateElement =  Target.querySelector(".session_date");
    const session_datee =SessionDateElement.innerText.trim();
    console.log(session_datee);
    const SessionTimingElement = Target.querySelector(".timing_id");
    const timing_idd = SessionTimingElement.innerText.trim();
    console.log(timing_idd);
    // const RoomData = {
    //     session_date: session_datee,
    //     timing_id: timing_idd,
    // };
    GetAvailableRooms(Target, session_datee,timing_idd);
}
async function GetAvailableRooms(Target, session_datee,timing_idd) {
    try {
        let response = await axios.get("/rooms/available", {
            params: {
              session_date: session_datee,
              timing_id : timing_idd,
            }
          });
        console.log(session_datee);
        console.log(timing_idd);
        const selectElement = document.createElement("select");
        selectElement.name = "room_id";
        selectElement.id = "room";
        selectElement.classList.add("w-[100px]", "h-6", "rounded-lg");
        var responseData = response.data;
        const label = document.createElement("label");
        label.innerText = "Rooms";
        label.classList.add("w-[100px]");
        
        console.log(responseData);
        if (Array.isArray(responseData)) {
            console.log("ARRAY");   
        }
        else{
            console.log("no");
        }
        responseData.forEach(function (room)  {
            const option = document.createElement("option");
            option.value = room.id;
            option.textContent = room.room;
            selectElement.appendChild(option);
        });
        // Clear previous content
        Target.innerHTML = "";
        Target.appendChild(label);
        // Append the select element to the target
        Target.appendChild(selectElement);
    } catch (error) {
        console.log(error);
    }
}
function setupCreateCour() {
    const AllSubmitsOfCours = document.querySelectorAll(".submit-cour");
    AllSubmitsOfCours.forEach((AddCour) => {
        AddCour.removeEventListener("click", clickHandler);
        AddCour.addEventListener("click", clickHandler);
    });
}
async function PostTd(data, teachers, modules, rooms, tr) {
    try {
        let response = await axios.post("/sessions/create", data);
        const session = response.data;
        console.log("sent");
        const roomOptions = rooms
            .map((room) => `<option value="${room.id}">${room.room}</option>`)
            .join("");
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

        tr.innerHTML =
            `
        <td colspan="3" class="box-border enter   p-[2px]" style="width:100%;">
            <div class="flex enter  hover:border-2 hover:border-slate-800 duration-300  flex-col shadow-lg justify-center ml-[5%]   pt-4  h-[90%] w-[90%] p-4 items-center rounded-xl bg-indigo-100 ">
                <a href="/teachers/${session.teacher_id}">
                    <p class="hover:shadow-lg  hover:bg-slate-50  bg-slate-100 px-2 rounded-xl font-bold">
                    ${session.teacher.teacher_name}</p>  
                </a>
                <p class="text-xl font-normal">${session.module.module}</p>
                <p class= "text-xl font-bold">${session.room.room}</p>
                <div class="flex updateformparent relative justify-center self-end  items-center space-x-2">
                    <button
                        class="h-10 flex justify-center items-center  hover:scale-125 duration-300 border-[2px] shadow-md update-button rounded-lg border-slate-500   font-bold w-10 hover:bg-white bg-slate-100"
                        title="Update this session">
                        <img src="/svg/pen-thin.svg" class="h-6 w-6" alt="">
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
                        <div class="flex justify-center items-center w-[100%]">
                            <label for="room" class="w-[100px]">Room</label>
                            <select name="room_id" id="room" class="w-[150px] h-10 rounded-lg">
                            ` +
            roomOptions +
            `
                            </select>
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
        var td = tr.querySelector("td div");
        tr.classList.remove("leave");
        tr.classList.add("enter");
    } catch (error) {
        console.log(error);
    }
}
function clickHandler(event) {
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
    PostTd(data, teachers, modules, rooms, tr);
}
document.addEventListener("DOMContentLoaded", function () {
    setupCreateCour();
    setInterval(setupCreateCour, 10000);
});
document.addEventListener("DOMContentLoaded", function () {
    setupCreateTd();
    setInterval(setupCreateTd, 10000);
});
document.addEventListener("DOMContentLoaded", function () {
    setupGetAvailableRooms();
    setInterval(setupGetAvailableRooms, 10000);
});
function setupCreateTp() {}

function setupCreateTd() {
    const AllSubmitsOfTds = document.querySelectorAll(".submit-td");
    AllSubmitsOfTds.forEach((Addtd) => {
        Addtd.removeEventListener("click", ClickH);
        Addtd.addEventListener("click", ClickH);
    });
}

function ClickH(event) {
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
    axios
        .post("/sessions/create", data)
        .then(function (response) {
            const session = response.data;
            const td = grandparent.parentNode;
            const roomOptions = rooms
                .map(
                    (room) => `<option value="${room.id}">${room.room}</option>`
                )
                .join("");
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
            td.innerHTML =
                `<div class="h-[150px] shadow-lg hover:border-2 hover:border-slate-800 flex flex-col border-2 bg-indigo-300 rounded-xl justify-center items-center">
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
                                    onsubmit="UpdateSession(event)"
                                    class="update-form flex z-50 flex-col justify-center space-y-4 items-center  text-xl w-[300px] h-[300px] ease-in  hidden absolute bg-white shadow-xl rounded-xl top-10 right-2">
                                    
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
                                    <div class="flex justify-center items-center w-[100%]">
                                        <label for="room" class="w-[100px]">Room</label>
                                        <select name="room_id" id="room" class="w-[150px] h-10 rounded-lg">
                                            ` +
                roomOptions +
                `
                                        </select>
                                    </div>
                                    <input type="submit" name="submit" id="" value="Update"
                                        class="bg-indigo-300 btn rounded-lg btn hover:scale-115 duration-300 shadow-lg h-10 w-32">
                                </form>
                                
                                <button type="submit"
                                    class="rounded-lg delete-td  btn flex justify-center items-center   w-8  hover:scale-125 duration-300 hover:bg-rose-400 hover:shadow-lg border-[2px] border-slate-500 bg-red-400 h-8">
                                    <div class="hidden section-id"> ${session.id} </div>
                                    <img src="/svg/trash.svg" class="h-6 w-6" alt="">
                                </button>
                                <button type="button" title="Mark as absented"
                                        class="rounded-lg mark-td-absence btn flex justify-center items-center hover:scale-125 duration-300 hover:bg-gray-100 hover:shadow-lg border-[2px] border-slate-500 w-8 p-2 bg-gray-300 h-8">
                                        <div class="hidden section-id"> ${session.id} </div>
                                        <img src="/svg/absence.svg" class="h-4 w-4" alt="">
                                </button>
                            </div>
                    </div>`;
            td.classList.remove("leave");
            td.classList.add("enter");
            const CourButton = tr.querySelector("td .company-button");
            if (CourButton) {
                CourButton.classList.add("hidden");
            }
        })
        .catch(function (error) {
            console.log(error);
        });
}
