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

document.addEventListener("DOMContentLoaded", function () {
    SetupCreateHoliday();
});

function SetupCreateHoliday() {
    const AddHolidayButton = document.querySelector("#holiday-add");
    AddHolidayButton.removeEventListener("click", ClickAddholiday);
    AddHolidayButton.addEventListener("click", ClickAddholiday);
}

async function ClickAddholiday() {
    const form = document.querySelector("#holiday-form");
    const Data = new FormData(form);
    const SchoolyearId = Data.get("schoolyear_id");
    const HolidayName = Data.get("holiday_name");
    const HolidayDate = Data.get("holiday_date");
    try {
        let response = await instance.post("/holidays/store", {
            schoolyear_id: SchoolyearId,
            holiday_name: HolidayName,
            holiday_date: HolidayDate,
        });
        if (response.status == 203) {
            alert(response.data);
        }
        else{
            location.reload();
        }
    } catch (error) {
        console.log(error);
    }
}
