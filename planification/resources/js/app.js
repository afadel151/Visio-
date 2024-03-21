import './bootstrap';
import axios from 'axios';
import Alpine from 'alpinejs';

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
  baseURL: 'http://127.0.0.1:8000',
  timeout : 6000,
  withCredentials:true,
  xsrfCookieName: "XSRF-TOKEN",
  xsrfHeaderName: "X-XSRF-TOKEN",
  headers : {
    Accept: "application/json",
  },
});


const AllSubmitsOfTds = document.querySelectorAll('.submit-td');

// Assuming this JavaScript code is within a <script> tag in your HTML file or a separate JavaScript file
AllSubmitsOfTds.forEach(submit => {
    submit.addEventListener("click", function(event) {
        event.preventDefault();
        const grandparent = submit.parentNode.parentNode;
        const form = grandparent.querySelector('form');
        const formData = new FormData(form);

        const data = {
            session_date: formData.get('date'),
            timing_id: formData.get('timing_id'),
            week_id: formData.get('week_id'),
            sessionable_type: formData.get('sessionable_type'),
            sessionable_id: formData.get('sessionable_id'),
            session_type: formData.get('session_type'),
            module_id: formData.get('module_id'),
            teacher_id: formData.get('teacher_id'),
            room_id: formData.get('room_id')
        };

        axios.post('/sessions/create', data)
            .then(function(response) {
                console.log(response);
                const session = response.data;
                const td = grandparent.parentNode;
                console.log(td);
                td.innerHTML = `<a href="/teachers/${session.teacher_id}">
                <p class="hover:shadow-lg  hover:bg-slate-50  bg-slate-100 px-2 rounded-xl font-bold">
                    ${session.teacher.teacher_name }</p>  
            </a>
            <p class="text-xl font-normal">${session.module.module}</p>
            <p class= "text-xl font-bold">${session.room.room}</p>`;
            })
            .catch(function(error) {
                console.log(error);
                document.getElementById('result').innerText = 'Failed to fetch data';
            });
    });
});