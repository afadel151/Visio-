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
    const AllMarkTdAbsencesTd = document.querySelectorAll(".mark-td-absence"); //here
    AllMarkTdAbsencesTd.forEach((AddAbsence) => {
        AddAbsence.removeEventListener("click", ClickAbsenceTd);
        AddAbsence.addEventListener("click", ClickAbsenceTd);
    });
}
async function PostAbsenceTd(SectionId, GrandDiv) {
    try {
        let response = await axios.post("/sessions/mark_absence/" + SectionId);
        console.log("deleted");
        GrandDiv.classList.remove("bg-indigo-300");
        GrandDiv.classList.add("bg-red-300");
        const parent = GrandDiv.querySelector(".updateformparent");
        const markAbsenceTd = GrandDiv.querySelector(".mark-td-absence");
        if (markAbsenceTd) {
            parent.removeChild(markAbsenceTd);
        }
    } catch (error) {
        console.log(error);
    }
}
function ClickAbsenceTd(event) {
    event.preventDefault();
    const MarkAbsence = event.currentTarget;
    const DivSectionId = MarkAbsence.querySelector(".section-id");
    const SectionId = DivSectionId.innerText.trim();
    const GrandDiv = MarkAbsence.parentNode.parentNode;
    PostAbsenceTd(SectionId, GrandDiv);
}
function SetupMarkAbsenceCour() {
    const AllMarkTdAbsencesCour = document.querySelectorAll(".mark-cour-absence"); //here
    AllMarkTdAbsencesCour.forEach((AddAbsence) => {
        AddAbsence.removeEventListener("click", ClickAbsenceCour);
        AddAbsence.addEventListener("click", ClickAbsenceCour);
    });
}
function ClickAbsenceCour(event) {
    event.preventDefault();
    const MarkAbsence = event.currentTarget;
    const DivCompanyId = MarkAbsence.querySelector(".company-id");
    const CompanyId = DivCompanyId.innerText.trim();
    const GrandDiv = MarkAbsence.parentNode.parentNode;
    const parent = MarkAbsence.parentNode;
    PostAbsenceCour(CompanyId, GrandDiv, parent);
}
async function PostAbsenceCour(CompanyId, GrandDiv, parent) {
    try {
        let response = await axios.post("/sessions/mark_absence/" + CompanyId);
        console.log("deleted");
        GrandDiv.classList.remove("bg-indigo-300");
        GrandDiv.classList.add("bg-red-300");
        const markAbsenceCour =parent.querySelector(".mark-cour-absence");
        if (markAbsenceCour) {
            parent.removeChild(markAbsenceCour);
        }
    } 
    catch (error) {
        console.log(error);
    }
}


document.addEventListener("DOMContentLoaded", function () {
    SetupMarkAbsenceTd();
    setInterval(SetupMarkAbsenceTd, 20000);
});
document.addEventListener("DOMContentLoaded", function () {
    SetupMarkAbsenceCour();
    setInterval(SetupMarkAbsenceCour, 20000);
});
