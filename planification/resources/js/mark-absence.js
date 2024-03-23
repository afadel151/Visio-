import axios from "axios";

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
function SetupMarkAbsenceTd() {
    const AllMarkTdAbsences = document.querySelectorAll(".mark-td-absence");
    AllMarkTdAbsences.forEach((MarkAbsence) => {
        MarkAbsence.addEventListener("click", function (event) {
            event.preventDefault();
            const DivSectionId = MarkAbsence.querySelector(".section-id");
            const SectionId = DivSectionId.innerText.trim();
            const GrandDiv = MarkAbsence.parentNode.parentNode;
            const parent = MarkAbsence.parentNode;
            axios
            .post("/sessions/mark_absence/" + SectionId)
            .then((result) => {
                console.log("deleted");
                GrandDiv.classList.remove("bg-indigo-300");
                GrandDiv.classList.add("bg-red-300");
                const markAbsenceTd = parent.querySelector('.mark-td-absence');
                if (markAbsenceTd) {
                    parent.removeChild(markAbsenceTd);
                }
            })
            .catch((err) => {
                console.log(err);
            });
            return;
        });
        
    });
}
function SetupMarkAbsenceCour() {
    const AllMarkTdAbsences = document.querySelectorAll(".mark-cour-absence");
    AllMarkTdAbsences.forEach((MarkAbsence) => {
        MarkAbsence.addEventListener("click", function (event) {
            event.preventDefault();
            const DivCompanyId = MarkAbsence.querySelector(".company-id");
            const CompanyId = DivCompanyId.innerText.trim();
            const GrandDiv = MarkAbsence.parentNode.parentNode;
            const parent = MarkAbsence.parentNode;
            axios
            .post("/sessions/mark_absence/" + CompanyId)
            .then((result) => {
                console.log("deleted");
                GrandDiv.classList.remove("bg-indigo-300");
                GrandDiv.classList.add("bg-red-300");
                const markAbsenceTd = parent.querySelector('.mark-td-absence');
                if (markAbsenceTd) {
                    parent.removeChild(markAbsenceTd);
                }
            })
            .catch((err) => {
                console.log(err);
            });
            return;
        });
        
    });
}
document.addEventListener("DOMContentLoaded", function () {
    SetupMarkAbsenceTd(); 

    setInterval(SetupMarkAbsenceTd, 20000);
});
document.addEventListener("DOMContentLoaded", function () {
    SetupMarkAbsenceCour(); 

    setInterval(SetupMarkAbsenceCour, 20000);
});
