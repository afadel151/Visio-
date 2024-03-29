import axios from "axios";

const instance = axios.create({
    // baseURL: "http://127.0.0.1:8000",
    // timeout: 6000,
    withCredentials: true,
    xsrfCookieName: "XSRF-TOKEN",
    xsrfHeaderName: "X-XSRF-TOKEN",
    headers: {
        Accept: "application/json",
    },
});


// document.getElementById("show-catchup-insert").addEventListener("click", function() 
// {
//     var displayDiv = document.getElementById("parent-of-catchup");
//     var displayValue = (displayDiv.style.display === "block") ? "none" : "block";
//     this.innerHTML = (displayValue === "block") ? "Hide" : "insert";
//     displayDiv.style.display = displayValue;

// });

const SelectSession = document.querySelector("#catch-search-absence"); //here
if (SelectSession) {
    SelectSession.addEventListener("click", ClickAbsenceSelect);
}
async function ClickAbsenceSelect(event) {
    event.preventDefault();
    const SelectDateTimeForm = document.querySelector("#select-absented-session-form");
    if (SelectDateTimeForm && SelectDateTimeForm instanceof HTMLFormElement) {
        const formData = new FormData(SelectDateTimeForm);
        const session_date = formData.get("session_date");
        const timing_id = formData.get("timing_id");
        const week_id = formData.get("week_id");
        const Target = document.querySelector("#insert-catchup");
        GetDateTimeAbsences(Target, session_date, timing_id, week_id);
    }
}

async function GetDateTimeAbsences(Target, session_date, timing_id, week_id) {
    try {
        let response = await axios.get("http://127.0.0.1:8000/sessions/get_absences", {
            params: {
                session_date: session_date,
                timing_id: timing_id,
                week_id: week_id,
            }
        });
        const sessions = response.data;
        const NewSelect = document.createElement("select");
        NewSelect.name = "session_id";
        NewSelect.id = "absences-select"
        NewSelect.classList.add("w-[350px]", "focus:border-blue-400", "mt-8", "focus:border-2", "rounded-xl", "hover:scale-110", "duration-150");
        const p = document.createElement("p");
        p.innerText = "Absences";
        p.classList.add("w-[100px]", "text-2xl");
        console.log(p);
        sessions.forEach(function (session) {
            const option = document.createElement("option");
            option.value = session.id;
            option.classList.add("rounded-xl", "w-[300px]");
            if (session.sessionable_type == 'App\\Models\\Section') {
                var students = session.sessionable.section;
                var Labell = "Section";
            }
            else {
                var students = session.sessionable.company;
                var Labell = "Company";
            }
            option.textContent = Labell + ' ' + students + ' - ' + session.teacher.teacher_name + ' - ' + session.module.module + ' - ' + session.room.room;
            NewSelect.appendChild(option);
        });
        Target.innerHTML = "";
        p.classList.add("text-center", "mt-4");
        Target.appendChild(p);
        Target.appendChild(NewSelect);
        const Button = document.createElement("button");
        Button.id = "select-absence-button";
        Button.classList.add("bg-indigo-500", "rounded-xl", "w-40", "h-12", "text-slate-50", "text-xl", "hover:bg-slate-200", "hover:text-gray-900", "hover:border-2", "hover:border-slate-900", "hover:scale-110", "duration-300");
        Button.innerText = "Select";
        Target.appendChild(Button);
        SetupSelectAbsenceButton();

    }
    catch (error) {
        console.log(error);
    }
}

function SetupSelectAbsenceButton() {
    const RectifyButton = document.querySelector("#select-absence-button");
    if (RectifyButton) {
        RectifyButton.addEventListener("click", ClickSelectSession);
    }
}
async function ClickSelectSession(event) {
    event.preventDefault();
    const SelectedSession = document.querySelector("#absences-select");
    if (SelectedSession && SelectedSession instanceof HTMLSelectElement) {
        const SessionId = SelectedSession.value;
        console.log(SessionId);
        const Target = document.querySelector("#insert-catchup");
        const NewSelect = document.createElement("select");
        NewSelect.id = 'catchup-timing-select';
        NewSelect.name = "timing_id";
        NewSelect.classList.add("w-[350px]", "focus:border-blue-400", "mt-2", "focus:border-2", "rounded-xl", "hover:scale-110", "duration-150");
        const Timings = JsonTimings;
        Timings.forEach(timing => {
            var NewOption = document.createElement("option");
            NewOption.value = timing.id;
            NewOption.innerText = timing.session_start + " -> " + timing.session_finish;
            NewSelect.appendChild(NewOption);
        });
        const NewDateInput = document.createElement("input");
        NewDateInput.id = 'catch-up-date-input';
        NewDateInput.type = 'date';
        NewDateInput.name = 'catchup_date';
        NewDateInput.classList.add("w-[300px]", "focus:border-blue-400", "focus:border-2", "rounded-xl", "hover:scale-110", "duration-150");
        const newp = document.createElement("p");
        newp.innerText = "Select Catchup Date and Time";
        newp.classList.add("text-center", "text-2xl", "mt-4");
        const NewForm = document.createElement("form");
        NewForm.id = "select-catchup-data";
        NewForm.classList.add("w-[500px]", "flex", "flex-col", "justify-center", "items-center");
        if (Target) {
            const oldForom = document.querySelector("#select-catchup-timing");
            const oldButton = document.querySelector("#catchup-timing-select-button");
            if (oldForom) {
                Target.removeChild(oldForom);
            }
            if (oldButton) {
                Target.removeChild(oldButton);

            }
            NewForm.appendChild(newp);
            NewForm.appendChild(NewDateInput);
            NewForm.appendChild(NewSelect);
            Target.appendChild(NewForm);
            const Button = document.createElement("button");
            Button.id = "catchup-timing-select-button";
            Button.classList.add("bg-indigo-500", "rounded-xl", "text-center", "w-40", "h-12", "text-slate-50", "p-x-4", "hover:bg-slate-200", "hover:text-gray-900", "hover:border-2", "hover:border-slate-900", "hover:scale-110", "duration-300");
            Button.innerText = "Search for rooms";
            Target.appendChild(Button);
            SetupSelectDateTime();
        }
    }
}
function SetupSelectDateTime() {
    const SelectTiming = document.querySelector("#catchup-timing-select-button");
    if (SelectTiming) {
        SelectTiming.addEventListener("click", ClickSelectDateTime);
    }
}
async function ClickSelectDateTime(event) {
    event.preventDefault();
    const SelectTimingToCatchup = document.querySelector("#catchup-timing-select");
    const SelectDateInput = document.querySelector("#catch-up-date-input");
    if (SelectTimingToCatchup && SelectDateInput && SelectTimingToCatchup instanceof HTMLSelectElement && SelectDateInput instanceof HTMLInputElement) {
        const session_date = SelectDateInput.value;
        const timing_id = SelectTimingToCatchup.value;
        try {
            let response = await axios.get("http://127.0.0.1:8000/rooms/available", {
                params: {
                    session_date: session_date,
                    timing_id: timing_id,
                }
            });
            const AvailableRooms = response.data;
            const NewSelect = document.createElement("select");
            NewSelect.id = "select-catchup-room";
            NewSelect.name = "room_id";
            NewSelect.classList.add("w-[350px]", "focus:border-blue-400", "mt-2", "focus:border-2", "rounded-xl", "hover:scale-110", "duration-150");
            AvailableRooms.forEach(room => {
                var NewOption = document.createElement("option");
                NewOption.value = room.id;
                NewOption.innerText = room.room;
                NewSelect.appendChild(NewOption);
            });
            const Target = document.querySelector("#insert-catchup");
            if (Target) {
                const Oldp = Target.querySelector("#p-select-catchup-room");
                const OldSelect = Target.querySelector("#select-catchup-room");
                if (Oldp) {
                    Target.removeChild(Oldp);
                }
                if (OldSelect) {
                    Target.removeChild(OldSelect);
                }
                const newp = document.createElement("p");
                newp.innerText = "Select  Room";
                newp.id = "p-select-catchup-room";
                newp.classList.add("text-center", "text-2xl", "mt-4");
                Target.appendChild(newp);
                Target.appendChild(NewSelect);
                const Button = document.createElement("button");
                const oldButton = Target.querySelector("#catchup-room-select-button");
                if (oldButton) {
                    Target.removeChild(oldButton);
                }
                Button.id = "catchup-room-select-button";
                Button.classList.add("bg-indigo-500", "rounded-xl", "text-center", "w-40", "h-12", "text-slate-50", "p-x-4", "hover:bg-slate-200", "hover:text-gray-900", "hover:border-2", "hover:border-slate-900", "hover:scale-110", "duration-300");
                Button.innerText = "Rectify";
                Target.appendChild(Button);
                SetupSelectRoomRect();
            }

        } catch (error) {
            console.log(error);
        }
    }
}

function  SetupSelectRoomRect() {
    
}