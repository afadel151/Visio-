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
  baseURL: 'http://127.0.0.1:8000'
});