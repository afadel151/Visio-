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
function closeModal(button) {
    const modal = button.closest('.modal');
    modal.close();
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
    const Td_Div = MarkAbsence.parentNode.parentNode.parentNode.parentNode.parentNode;
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