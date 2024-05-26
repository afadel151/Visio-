<<<<<<< Updated upstream
import "./bootstrap";
import axios from "axios";
import Alpine from "alpinejs";

window.Alpine = Alpine;
=======
// // import "./bootstrap.js";
// import axios from "axios";
// import Alpine from "alpinejs";
// import "preline";
// // You can also use <link> for styles
// // ..
// window.Alpine = Alpine;
>>>>>>> Stashed changes

// Alpine.start();

<<<<<<< Updated upstream
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
=======


// document.addEventListener("DOMContentLoaded", function () {
//     setupCreateTp();
//     setupCreateCour();
//     setupCreateTd();
   
// });
// // function setupGetAvailableRooms() {
// //     const SearchForRooms = document.querySelector("#get_available_rooms");
// //     SearchForRooms.removeEventListener("click", GetAvailableRooms);
// //     SearchForRooms.addEventListener("click", GetAvailableRooms);
// // }
// function setupCreateTp() {
//     const AllSubmitsOfTp = document.querySelectorAll(".submit-tp");

//     Array.from(AllSubmitsOfTp).map((AddTp) => {
//         AddTp.removeEventListener("click", clickHandlerTp);
//         AddTp.addEventListener("click", clickHandlerTp);
//     });
// }

// function setupCreateCour() {
//     const AllSubmitsOfCours = document.querySelectorAll(".submit-cour");

//     Array.from(AllSubmitsOfCours).map((AddCour) => {
//         AddCour.removeEventListener("click", clickHandler);
//         AddCour.addEventListener("click", clickHandler);
//     });
// }

// function setupCreateTd() {
//     const AllSubmitsOfTds = document.querySelectorAll(".submit-td");

//     Array.from(AllSubmitsOfTds).map((Addtd) => {
//         Addtd.removeEventListener("click", ClickH);
//         Addtd.addEventListener("click", ClickH);
//     });
// }

// async function GetAvailableRooms() {
//     const form = document.querySelector("#available_rooms_form");
//     const formdata = new FormData(form);
//     const date = formdata.get("date");
//     const timing = formdata.get("timing_id");
//     try {
//         let response = axios.get("/rooms/available", {
//             params: {
//                 session_date: date,
//                 timing_id: timing,
//             },
//         });
//         const Rooms = (await response).data;
//         console.log(Rooms);

//         const Target = document.querySelector("#available_rooms_result");
//         Target.innerHTML = "";
//         for (let index = 0; index < Rooms.length; index++) {
//             const element = Rooms[index];
//             var newItem = document.createElement("p");
//             newItem.classList.add("text-xl", "font-bold");
//             newItem.innerText = `${element.room}`;
//             Target.appendChild(newItem);
//         }
//     } catch (error) {
//         console.log(error);
//     }
// }



// async function PostCour(data, tr) {
//     try {
//         let response = await axios.post("/sessions/create", data);
//         const session = response.data;
//         var ResultChiild = null;
//         Array.from(tr.children).forEach((child) => {
//             if (child.classList.contains("result")) {
//                 ResultChiild = child;
//             } else {
//                 child.classList.add("hidden");
//             }
//         });
//         if (ResultChiild) {
//             const TeacherAnchor = ResultChiild.querySelector(".teacher-a");
//             TeacherAnchor.href = "/teachers/" + session.teacher.id;
//             TeacherAnchor.innerText = session.teacher.teacher_name;
//             const ModulePar = ResultChiild.querySelector(".module-p");
//             ModulePar.innerText = session.module.module;
//             const RoomPar = ResultChiild.querySelector(".room-p");
//             RoomPar.innerText = session.room.room;
            
//             const DeleteAnchor = ResultChiild.querySelector(".delete-a");
//             DeleteAnchor.href = "/sessions/delete/" + session.id;
//             ResultChiild.classList.remove("hidden");
//         }
//     } catch (error) {
//         console.log(error);
//     }
// }
// async function clickHandlerTp(event) {
//     event.preventDefault();
//     const AddTp = event.currentTarget;
//     const grandparent = AddTp.parentNode.parentNode;
//     const tr = grandparent.parentNode.parentNode;
//     const td = AddTp.parentNode.parentNode;
//     const form = AddTp.parentNode;
//     console.log(td);

//     if (form && form instanceof HTMLFormElement) {
//         const formData = new FormData(form);

//         const select = form.querySelector(
//             ".form-section .selects .teachers-select select"
//         );
//         var selectedArray = new Array();
//         var i;
//         var count = 0;
//         if (select) {
//             for (i = 0; i < select.options.length; i++) {
//                 if (select.options[i].selected) {
//                     selectedArray[count] = select.options[i].value;
//                     count++;
//                 }
//             }
//         }
//         var Isession_date = formData.get("date");
//         var Itiming_id = formData.get("timing_id");
//         var Iweek_id = formData.get("week_id");
//         var Isessionable_type = formData.get("sessionable_type");
//         var Isessionable_id = formData.get("sessionable_id");
//         var Isession_type = formData.get("session_type");
//         var Imodule_id = formData.get("module_id");
//         var Iroom_id = formData.get("room_id");
//         var Iteacher_id = 1;
//         try {
//             console.log(Isession_date);
//             let response = await axios.get("/sessions/create_tp", {
//                 params: {
//                     teacher_id: Iteacher_id,
//                     session_date: Isession_date,
//                     timing_id: Itiming_id,
//                     week_id: Iweek_id,
//                     sessionable_type: Isessionable_type,
//                     sessionable_id: Isessionable_id,
//                     session_type: Isession_type,
//                     module_id: Imodule_id,
//                     room_id: Iroom_id,
//                     teachers: selectedArray,
//                 },
//             });
//             const session = response.data;
//             console.log(session);
//             Array.from(td.children).forEach((child)=>{
//                 if (child.classList.contains("result-tp")) {
//                     const TpTeachers = session.tp_teachers;
//                     const TpTeachersDiv = td.querySelector(".tp-teachers");
//                     TpTeachers.forEach((teacher)=>{
//                         const NewAnchor = document.createElement('a');
//                         NewAnchor.href = "/teachers/" + teacher.id;
//                         NewAnchor.innerText = teacher.teacher_name;
//                         NewAnchor.classList.add("btn","btn-sm");
//                         TpTeachersDiv.appendChild(NewAnchor);
//                     });
                  
//                     const ModuleP = td.querySelector(".module-p");
//                     ModuleP.innerText = session.module.module;
//                     const RoomP = td.querySelector(".room-p");
//                     RoomP.innerText = session.room.room;
//                     const DeleteA = td.querySelector(".delete-a");
//                     DeleteA.href = "/sessions/delete" + session.id;

//                     child.classList.remove("hidden");
//                 } else {
//                     td.removeChild(child);
//                 }
//             });
            
//             const tr = td.parentNode;
//             var compButton = tr.querySelector(".parentofform");
//             if (compButton) {
//                 compButton.classList.add("hidden");
//             }
//             // Find the next row
//             const nextRow = tr.nextElementSibling;
//             if (nextRow) {
//                 // Get the next td in the same column
//                 const nextTd = nextRow.querySelector(
//                     "td:nth-child(" +
//                     (Array.from(tr.children).indexOf(td) + 1) +
//                     ")"
//                 );
//                 if (nextTd) {
//                     // Remove the next td element
//                     nextTd.parentNode.removeChild(nextTd);
//                 }
//             }
//             compButton = nextRow.querySelector(".parentofform");
//             if (compButton) {
//                 compButton.classList.add("hidden");
//             }
//             td.setAttribute("rowspan", "2");

//         } catch (error) {
//             console.log(error);
//         }
//     }
// }
// function clickHandler(event) {
//     event.preventDefault();
//     const AddCour = event.currentTarget;
//     const td = AddCour.parentNode.parentNode;
//     const tr = td.parentNode;
//     const form = td.querySelector("form");
//     const formData = new FormData(form);

//     const data = {
//         session_date: formData.get("date"),
//         timing_id: formData.get("timing_id"),
//         week_id: formData.get("week_id"),
//         sessionable_type: formData.get("sessionable_type"),
//         sessionable_id: formData.get("sessionable_id"),
//         session_type: formData.get("session_type"),
//         module_id: formData.get("module_id"),
//         teacher_id: formData.get("teacher_id"),
//         room_id: formData.get("room_id"),
//     };
//     PostCour(data, tr);
// }

// async function ClickH(event) {
//     event.preventDefault();
//     const submit = event.currentTarget;
//     const grandparent = submit.parentNode.parentNode;
//     const tr = grandparent.parentNode.parentNode;
//     const form = grandparent.querySelector("form");
//     const formData = new FormData(form);

//     const data = {
//         session_date: formData.get("date"),
//         timing_id: formData.get("timing_id"),
//         week_id: formData.get("week_id"),
//         sessionable_type: formData.get("sessionable_type"),
//         sessionable_id: formData.get("sessionable_id"),
//         session_type: formData.get("session_type"),
//         module_id: formData.get("module_id"),
//         teacher_id: formData.get("teacher_id"),
//         room_id: formData.get("room_id"),
//     };
//     try {
//         let response = await axios.post("/sessions/create", data);
//         const session = response.data;
//         const td = grandparent.parentNode;
      
//         Array.from(td.children).forEach((child) => {
//             if (child.classList.contains("result")) {
//                 const TeacherAnchor = child.querySelector(".teacher-a");
//                 TeacherAnchor.href = "/teachers/"+ session.teacher.id;
//                 TeacherAnchor.innerText = session.teacher.teacher_name;
//                 const RoomP = child.querySelector(".room-p");
//                 RoomP.innerText = session.room.room;
//                 const ModulePar = child.querySelector(".module-p");
//                 ModulePar.innerText = session.module.module;
//                 const DeleteAnchor = child.querySelector(".delete-a");
//                 DeleteAnchor.href = "/sessions/delete/" + session.id;
//                 child.classList.remove("hidden");
//             } else {
//                 td.removeChild(child);
//                 // child.classList.add("hidden");
//             }
//         });
//     } catch (error) { }
// }
import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
>>>>>>> Stashed changes
