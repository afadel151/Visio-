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

// document.getElementById("show-rect-insert").addEventListener("click", function() 
// {
//     var displayDiv = document.getElementById('parent-of-rectify');
//     var displayValue = (displayDiv.style.display === "block") ? "none" : "block";
//     this.innerHTML = (displayValue === "block") ? "Hide" : "insert";
//     displayDiv.style.display = displayValue;
// });

const SelectSession = document.querySelector("#rectification-search-session"); //here

// SelectSession.removeEventListener("click", ClickRectificationSelect);
if (SelectSession) {
    SelectSession.addEventListener("click", ClickRectificationSelect);
}


async function ClickRectificationSelect(event) {
    event.preventDefault();
    const SelectRectifiedForm = document.querySelector("#select-rectified-session-form");
    if (SelectRectifiedForm && SelectRectifiedForm instanceof HTMLFormElement) {
        const formData = new FormData(SelectRectifiedForm);
        const session_date = formData.get("session_date");
        const timing_id = formData.get("timing_id");
        const week_id = formData.get("week_id");
        const Target = document.querySelector("#insert-rectification");
        SelectRectifiedRoom(Target, session_date, timing_id, week_id);
    }
}


async function SelectRectifiedRoom(Target, session_date, timing_id, week_id) {
    try {
        let response = await axios.get("http://127.0.0.1:8000/sessions/get_to_rectify", {
            params: {
                session_date: session_date,
                timing_id: timing_id,
                week_id: week_id,
            }
        });
        const sessions = response.data;
        const NewSelect = document.createElement("select");
        NewSelect.name = "session_id";
        NewSelect.id = "rectified-select"
        NewSelect.classList.add("w-[350px]", "focus:border-blue-400", "mt-8", "focus:border-2", "rounded-xl", "hover:scale-110", "duration-150");
        const p = document.createElement("p");
        p.innerText = "Sessions";
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
        Button.id = "rectify-button";
        Button.classList.add("bg-indigo-500", "rounded-xl", "w-40", "h-12", "text-slate-50", "text-xl", "hover:bg-slate-200", "hover:text-gray-900", "hover:border-2", "hover:border-slate-900", "hover:scale-110", "duration-300");
        Button.innerText = "Select";
        Target.appendChild(Button);
        SetupRectifyButton();

    }
    catch (error) {
        console.log(error);
    }
}

function SetupRectifyButton() {
    const RectifyButton = document.querySelector("#rectify-button");
    if (RectifyButton) {
        RectifyButton.addEventListener("click", ClickRectify);
    }
}

async function ClickRectify(event) {
    event.preventDefault();
    const SelectedSession = document.querySelector("#rectified-select");
    if (SelectedSession && SelectedSession instanceof HTMLSelectElement) {
        const SessionId = SelectedSession.value;
        console.log(SessionId);
        const Target = document.querySelector("#insert-rectification");
        if (Target) {
            const NewSelect = document.createElement("select");
            NewSelect.name = "timing_id";
            NewSelect.classList.add("w-[350px]", "focus:border-blue-400", "mt-2", "focus:border-2", "rounded-xl", "hover:scale-110", "duration-150");
            let TimingsResponse = await axios.get("http://127.0.0.1:8000/timings/");
            const Timings = TimingsResponse.data;
            Timings.forEach(timing => {
                var NewOption = document.createElement("option");
                NewOption.value = timing.id;
                NewOption.innerText = timing.session_start + " -> " + timing.session_finish;
                NewSelect.appendChild(NewOption);
            });
            const newp = document.createElement("p");
            newp.innerText = "Select Rectification Timing";
            newp.classList.add("text-center", "text-2xl", "mt-4");
            const NewForm = document.createElement("form");
            NewForm.id = "select-rectification-timing";
            NewForm.classList.add("w-[500px]", "flex", "flex-col", "justify-center", "items-center");
            const oldForom = document.querySelector("#select-rectification-timing");
            const oldButton = document.querySelector("#timing-select-button");
            if (oldForom) {
                Target.removeChild(oldForom);
            }
            if (oldButton) {
                Target.removeChild(oldButton);

            }
            NewForm.appendChild(newp);
            NewForm.appendChild(NewSelect);
            Target.appendChild(NewForm);
            const Button = document.createElement("button");
            Button.id = "timing-select-button";
            Button.classList.add("bg-indigo-500", "rounded-xl", "text-center", "w-40", "h-12", "text-slate-50", "p-x-4", "hover:bg-slate-200", "hover:text-gray-900", "hover:border-2", "hover:border-slate-900", "hover:scale-110", "duration-300");
            Button.innerText = "Search for rooms";
            Target.appendChild(Button);
            SetupSelectTiming()
        }
    }

}



function SetupSelectTiming() {
    const SelectTiming = document.querySelector("#timing-select-button");
    if (SelectTiming) {
        SelectTiming.addEventListener("click", ClickSelectTiming);
    }
}

async function ClickSelectTiming(event) {
    event.preventDefault();
    const SelectTimingToRectify = document.querySelector("#select-rectification-timing");
    const SelectDateForm = document.querySelector("#select-rectified-session-form");
    if (SelectDateForm && SelectTimingToRectify && SelectDateForm instanceof HTMLFormElement && SelectTimingToRectify instanceof HTMLFormElement) {
        const SelectDateFormData = new FormData(SelectDateForm);
        const session_date = SelectDateFormData.get("session_date");
        const formData = new FormData(SelectTimingToRectify);
        const timing_id = formData.get("timing_id");
        try {
            let response = await axios.get("http://127.0.0.1:8000/rooms/available", {
                params: {
                    session_date: session_date,
                    timing_id: timing_id,
                }
            });
            const AvailableRooms = response.data;
            const NewSelect = document.createElement("select");
            NewSelect.id = "select-rectification-room";
            NewSelect.name = "room_id";
            NewSelect.classList.add("w-[350px]", "focus:border-blue-400", "mt-2", "focus:border-2", "rounded-xl", "hover:scale-110", "duration-150");
            AvailableRooms.forEach(room => {
                var NewOption = document.createElement("option");
                NewOption.value = room.id;
                NewOption.innerText = room.room;
                NewSelect.appendChild(NewOption);
            });
            const Target = document.querySelector("#insert-rectification");
            if (Target) {
                const Oldp = Target.querySelector("#p-select-rectification-room");
                const OldSelect = Target.querySelector("#select-rectification-room");
                if (Oldp) {
                    Target.removeChild(Oldp);
                }
                if (OldSelect) {
                    Target.removeChild(OldSelect);
                }
                const newp = document.createElement("p");
                newp.innerText = "Select  Room";
                newp.id = "p-select-rectification-room";
                newp.classList.add("text-center", "text-2xl", "mt-4");
                Target.appendChild(newp);
                Target.appendChild(NewSelect);
                const Button = document.createElement("button");
                const oldButton = Target.querySelector("#rectification-room-select-button");
                if (oldButton) {
                    Target.removeChild(oldButton);
                }
                Button.id = "rectification-room-select-button";
                Button.classList.add("bg-indigo-500", "rounded-xl", "text-center", "w-40", "h-12", "text-slate-50", "p-x-4", "hover:bg-slate-200", "hover:text-gray-900", "hover:border-2", "hover:border-slate-900", "hover:scale-110", "duration-300");
                Button.innerText = "Rectify";
                Target.appendChild(Button);
                SetupSelectRoomRect();
            }
        }
        catch (error) {
            console.log(error);
        }
    }

}
async function SetupSelectRoomRect() {
    const SelectRoom = document.querySelector("#rectification-room-select-button");
    if (SelectRoom) {
        SelectRoom.addEventListener("click", ClickSelectRoomRect);
    }
}
async function ClickSelectRoomRect(event) {
    event.preventDefault();
    const RoomSelect = document.querySelector("#select-rectification-room");
    if (RoomSelect && RoomSelect instanceof HTMLSelectElement) {
        const RoomId = RoomSelect.value;
        const TimingSelectForm = document.querySelector("#select-rectification-timing");
        if (TimingSelectForm && TimingSelectForm instanceof HTMLFormElement) {
            const formdata = new FormData(TimingSelectForm);
            const TimingId = formdata.get("timing_id");
            const SessionSelect = document.querySelector("#rectified-select");
            if (SessionSelect && SessionSelect instanceof HTMLSelectElement) {
                const SessionId = SessionSelect.value;
                const AdditiveIdDiv = document.querySelector("#additive_id");
                if (AdditiveIdDiv && AdditiveIdDiv instanceof HTMLDivElement) {
                    const AdditiveId = AdditiveIdDiv.innerText.trim();
                    console.log(AdditiveId);
                    console.log(SessionId);
                    console.log(TimingId);
                    console.log(RoomId);
                    try {
                        let response = await axios.get("http://127.0.0.1:8000/sessions/store_rectification", {
                            params: {
                                session_id: SessionId,
                                timing_id: TimingId,
                                room_id: RoomId,
                                additive_id: AdditiveId,
                            }
                        });
                        console.log(response);
                        location.reload();
                    } catch (error) {
                        console.log(error);
                    }
                }
            }

        }

    }


}