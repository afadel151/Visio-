import "./bootstrap";
import axios from "axios";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// const getUsers = () => {
//     axios
//       .get("http://127.0.0.1:8000/sessions/1")
//       .then((response) => {
//         const teacher = response.data;
//         console.log(`GET users`, teacher);
//       })
//       .catch((error) => console.error(error));
//   };
//   getUsers();

const instance = axios.create({
    baseURL: "http://127.0.0.1:8000",
    timeout: 6000,
    withCredentials: true,
    xsrfCookieName: "XSRF-TOKEN",
    xsrfHeaderName: "X-XSRF-TOKEN",
    headers: {
        Accept: "application/json",
    },
});

const AllSubmitsOfTds = document.querySelectorAll(".submit-td");

// Assuming this JavaScript code is within a <script> tag in your HTML file or a separate JavaScript file
AllSubmitsOfTds.forEach((submit) => {
    submit.addEventListener("click", function (event) {
        event.preventDefault();
        const grandparent = submit.parentNode.parentNode;
        const form = grandparent.querySelector("form");
        const formData = new FormData(form);
        const sectorDiv = form.querySelector(".sector");
        const sectorText = sectorDiv.innerText.trim();
        if (sectorText == "MI") {
            var teachers = teachers_MI;
            var modules = modules;
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
                console.log(response);
                const session = response.data;
                const td = grandparent.parentNode;
                console.log(td);
                const roomOptions = rooms
                    .map(
                        (room) =>
                            `<option value="${room.id}">${room.room}</option>`
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
                    `<div
                class="h-[150px] shadow-lg       hover:border-2 hover:border-slate-800 flex flex-col border-2 bg-indigo-300 rounded-xl justify-center items-center"><a href="/teachers/${session.teacher_id}">
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
                                            {{-- DISPLAY MODULES  --}}
                                            ` +
                    moduleOptions +
                    `
                                        </select>
                                    </div>
                                    <div class="flex justify-center items-center w-[100%]">
                                        <label for="room" class="w-[100px]">Teacher</label>
                                        <select name="teacher_id" id="room" class="w-[150px] h-10 rounded-lg">
                                            {{-- DISPLAY TEACHERS ACCORDING TO THE MOODULE --}}
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
                                <form action="/sessions.delete/${session.id}" method="POST" enctype="multipart/form-data"
                                    class="delete-form">
                                    <button type="submit"
                                        class="rounded-lg  btn flex justify-center items-center   w-8  hover:scale-125 duration-300 hover:bg-rose-400 hover:shadow-lg border-[2px] border-slate-500 bg-red-400 h-8">
                                        <img src="/svg/trash.svg" class="h-6 w-6" alt="">
                                    </button>
                                </form>
                                </div>
            </div>`;
            })
            .catch(function (error) {
                console.log(error);
                document.getElementById("result").innerText =
                    "Failed to fetch data";
            });
        // var UpdateButtons = document.querySelectorAll(".update-button");
        // UpdateButtons.forEach((Button, index) => {
        //     Button.addEventListener("click", function(event) {
        //         UpdateForms.forEach(form => {
        //             form.classList.add("hidden");
        //         });
        //         sectionforms.forEach(form => {
        //             form.classList.add("hidden");
        //         });
        //         companyforms.forEach(form => {
        //             form.classList.add("hidden");
        //         });
        //         var parents = document.querySelectorAll(".updateformparent");
        //         parents.forEach(parent => {
        //             parent.classList.remove("relative");
        //         });
        //         var parent = Button.parentNode;
        //         parent.classList.add("relative");
        //         var nextElementSibling = Button.nextElementSibling;
        //         // Hide all forms
        //         nextElementSibling.classList.remove("hidden")

        //         event.preventDefault();
        //     });
        // });
    });
});
