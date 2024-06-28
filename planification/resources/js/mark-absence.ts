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
function SetupMarkAbsenceTp() {
    const AllMarkTdAbsencesTd = document.querySelectorAll(".mark-tp-absence"); //here
    AllMarkTdAbsencesTd.forEach((AddAbsence) => {
        AddAbsence.removeEventListener("click", ClickAbsenceTp);
        AddAbsence.addEventListener("click", ClickAbsenceTp);
    });
}
function closeModal(button) {
    const modal = button.closest('.modal');
    modal.close();
}
function ClickAbsenceTp(event) {
    event.preventDefault();
    const MarkAbsence = event.currentTarget;
    const DivSectionId = MarkAbsence.querySelector(".section-id");
    const SectionId = DivSectionId.innerText.trim();
    const GrandDiv = findAncestor(MarkAbsence,"tp-div");
    PostAbsenceTp(SectionId, GrandDiv,MarkAbsence);
}
async function PostAbsenceTp(SectionId, GrandDiv,MarkAbsence) {
    try { 
        let response = await axios.post("/sessions/mark_absence/" + SectionId);
        console.log("deleted");
        const newspan = document.createElement("span");
        newspan.classList.add("badge","badge-error");
        newspan.innerText = "absented";
        var firstChild = GrandDiv.firstChild;
        closeModal(MarkAbsence);
        GrandDiv.insertBefore(newspan, firstChild);
  
        // const markAbsenceTd = GrandDiv.querySelector(".mark-td-absence");
        if (MarkAbsence) {
            MarkAbsence.classList.add("btn-disabled");
        }
        closeModal(MarkAbsence);
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
    PostAbsenceTd(SectionId, GrandDiv,MarkAbsence);
}
async function PostAbsenceTd(SectionId, GrandDiv,MarkAbsence) {
    try { 
        let response = await axios.post("/sessions/mark_absence/" + SectionId);
        console.log("deleted");
        const newspan = document.createElement("span");
        newspan.classList.add("badge","badge-error");
        newspan.innerText = "absented";
        const GGDiv = GrandDiv.parentNode.parentNode.parentNode;
        var firstChild = GGDiv.firstChild;
        closeModal(MarkAbsence);
        GGDiv.insertBefore(newspan, firstChild);
        const requestbutton = GGDiv.querySelector(".request-td-absence");
        // const markAbsenceTd = GrandDiv.querySelector(".mark-td-absence");
        if (requestbutton) {
            requestbutton.classList.add("btn-disabled");
        }
        closeModal(MarkAbsence);
    } catch (error) {
        console.log(error);
    }
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
    const Td_Div = findAncestor(MarkAbsence,"cours-div");
    console.log(Td_Div);
    const DivCompanyId = Td_Div.querySelector(".company-id");
    const CompanyId = DivCompanyId.innerText.trim();

   
    PostAbsenceCour(CompanyId, Td_Div, MarkAbsence);
}
async function PostAbsenceCour(CompanyId, Td_div, MarkAbsence) {
    try {
        let response = await axios.post("/sessions/mark_absence/" + CompanyId);
        const newspan = document.createElement("span");
        newspan.classList.add("badge","badge-error");
        newspan.innerText = "absented";
        var firstChild = Td_div.firstChild;
        closeModal(MarkAbsence);
        Td_div.insertBefore(newspan, firstChild);
        const requestbutton = Td_div.querySelector(".request-td-absence");
        if (requestbutton) {
            requestbutton.classList.add("btn-disabled");
        }
        closeModal(MarkAbsence);

    } 
    catch (error) {
        console.log(error);
    }
}


document.addEventListener("DOMContentLoaded", function () {
    SetupMarkAbsenceTd();
});
document.addEventListener("DOMContentLoaded", function () {
    SetupMarkAbsenceCour();
  
});
document.addEventListener("DOMContentLoaded", function () {
    SetupMarkAbsenceTp();
});
function findAncestor (el, cls) {
    while ((el = el.parentElement) && !el.classList.contains(cls));
    return el;
}