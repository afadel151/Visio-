import axios from "axios";

const instance = axios.create({
  
    withCredentials: true,
    xsrfCookieName: "XSRF-TOKEN",
    xsrfHeaderName: "X-XSRF-TOKEN",
    headers: {
        Accept: "application/json",
    },
});



const SelectSession = document.querySelector("#catch-search-absence"); //here
if (SelectSession) {
    SelectSession.addEventListener("click", ClickAbsenceSelect);
}
async function ClickAbsenceSelect(event) {
    event.preventDefault();
    const SelectDateTimeForm = document.querySelector("#select-absented-session-form");
    if (SelectDateTimeForm && SelectDateTimeForm instanceof HTMLFormElement) {
        const formData = new FormData(SelectDateTimeForm);
        const teacher_id = formData.get("teacher_id");
        const Target = document.querySelector("#insert-catchup");
        GetDateTimeAbsences(Target, teacher_id);
    }
}

async function GetDateTimeAbsences(Target, teacher_id) {
    try {
        let response = await axios.get("http://127.0.0.1:8000/sessions/get_absences", {
            params: {
                teacher_id : teacher_id
            }
        });
        
        const sessions = response.data;
        console.log(sessions);
        const NewSelect = document.createElement("select");
        NewSelect.name = "session_id";
        NewSelect.id = "absences-select"
        NewSelect.classList.add("w-[350px]", "select", "select-bordered");
        const p = document.createElement("p");
        p.innerText = "Absences";
        p.classList.add("w-[100px]", "text-2xl");
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
            //   option.textContent += '-' 
            option.textContent = Labell + ' ' + students + ' - '+ session.session_type.toUpperCase() + '-' ; 
            if (session.session_type === 'tp') {
                
                session.tp_teachers.forEach(teacher => {
                        option.textContent += teacher.teacher_name + '/';
                });
            }
            else{
                option.textContent += session.teacher.teacher_name ;
            }
            option.textContent += '-' + session.module.module + '-' + session.room.room;
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
        const Target = document.querySelector("#insert-catchup");
        const NewSelect = document.createElement("select");
        NewSelect.id = 'catchup-timing-select';
        NewSelect.name = "timing_id";
        NewSelect.classList.add("w-[350px]", "select", "select-bordered");
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
        NewDateInput.classList.add("w-[300px]", "input", "input-bordered");
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
            NewSelect.classList.add("w-[350px]","select","select-bordered");
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

function SetupSelectRoomRect() {
    const SelectRoom = document.querySelector("#catchup-room-select-button");
    if (SelectRoom) {
        SelectRoom.addEventListener("click", ClickSelectRoom);
    }
}

async function ClickSelectRoom(event) {
    event.preventDefault();
    const SelectRoom = document.querySelector("#select-catchup-room") as HTMLSelectElement;
    if (SelectRoom) {
        const SelectdRoomId = SelectRoom.value;
        const SelectTimingToCatchup = document.querySelector("#catchup-timing-select") as HTMLSelectElement;
        const SelectDateInput = document.querySelector("#catch-up-date-input") as HTMLSelectElement;
        const SelectedSession = document.querySelector("#absences-select") as HTMLSelectElement;
        const TiminId = SelectTimingToCatchup.value;
        const Date = SelectDateInput.value;
        const SessionId = SelectedSession.value;
        const AdditiveIdDiv = document.querySelector("#additive_id");
        if (AdditiveIdDiv && AdditiveIdDiv instanceof HTMLDivElement) {
            const AdditiveId = AdditiveIdDiv.innerText.trim();
            try {
                let response = await axios.post('http://127.0.0.1:8000/absences/create_catchup',
                    {
                        session_id: SessionId,
                        timing_id: TiminId,
                        catchup_date: Date,
                        room_id: SelectdRoomId,
                        additive_id: AdditiveId,
                    }
                );
                location.reload();
            } catch (error) {
                console.log(error);


            }
        }

    }

}