// import axios from "axios";
// const instance = axios.create({
//     // baseURL: "http://127.0.0.1:8000",
//     // timeout: 6000,
//     withCredentials: true,
//     xsrfCookieName: "XSRF-TOKEN",
//     xsrfHeaderName: "X-XSRF-TOKEN",
//     headers: {
//         Accept: "application/json",
//     },
// });

// document.addEventListener("DOMContentLoaded", function () {
//     setupExport(); 
// });


// function setupExport() {
//     const ExportExcelButton = document.querySelector(
//         "#export_excel"
//     );
//     ExportExcelButton.removeEventListener("click", ClickExport);
//     ExportExcelButton.addEventListener("click", ClickExport);
// }

// async function ClickExport() {
//     const Table = document.querySelector("#main_table");
//     // console.log(window.location.href);
//     try {
//         let response = await instance.post(window.location.href + "/excel", {
//             html_text : Table.innerHTML,
//         });
//         console.log(response.data);
//     } catch (error) {
//         console.log(error);
//     }

// }