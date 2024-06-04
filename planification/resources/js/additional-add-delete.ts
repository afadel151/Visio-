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

const SelectSession = document.querySelector("#additional-search-room"); //here

// SelectSession.removeEventListener("click", ClickadditionalSelect);
if (SelectSession) {
    SelectSession.addEventListener("click", ClickAddAdditional);
}
async function ClickAddAdditional(event) {
    event.preventDefault();
    const SelectSections = document.querySelector("#select-additional-props");
    if (SelectSections && SelectSections instanceof HTMLFormElement) {
        const formData = new FormData(SelectSections);
        const session_date = formData.get("session_date");
        // const timing_id = formData.get("timing_id");
        const week_id = formData.get("week_id");
        // Get reference to the multi-select element
        const selectSections = document.getElementById("additional-select-sections");
        const selectCompanies = document.getElementById("additional-select-companies");

        // Initialize an array to store the selected values
        const selectedSections = new Array();
        const selectedCompanies = new Array();

        // Iterate over the options and push the selected values to the array

        if (selectSections instanceof HTMLSelectElement) {
            const options = selectSections.options;

            for (let i = 0; i < options.length; i++) {
                if (options[i].selected && options[i] instanceof HTMLOptionElement) {
                    selectedSections.push(options[i].value);
                }
            }

        }
        if (selectCompanies instanceof HTMLSelectElement) {
            const options = selectCompanies.options;

            for (let i = 0; i < options.length; i++) {
                if (options[i].selected && options[i] instanceof HTMLOptionElement) {
                    selectedCompanies.push(options[i].value);
                }
            }

        }
        console.log(selectedSections);
        console.log(selectedCompanies);

        const Target = document.querySelector("#insert-additional");
        SelectAdditionalTimings(Target, session_date, selectedSections, selectedCompanies);
    }
}

async function SelectAdditionalTimings(Target, session_date, selectedSections, selectedCompanies) {
    try {
        let response = await axios.get('http://127.0.0.1:8000/additionals/get_available_timings', {
            params: {
                session_date: session_date,
                sections: selectedSections,
                companies: selectedCompanies,
            },
        });
        console.log(response.data);
        const NewSelect = document.createElement("select");
        NewSelect.name = "timing_id";
        NewSelect.id = "timing-select";
        NewSelect.classList.add("select", "select-bordered");
        const timings = response.data;
        timings.forEach(function (timing) {
            var NewOption = document.createElement("option");
            NewOption.value = timing.id;
            NewOption.innerText = timing.session_start + " -> " + timing.session_finish;
            NewSelect.appendChild(NewOption);
        })
        Target.innerHTML = '';
        const p = document.createElement("p");
        p.innerText = "Timings";
        p.classList.add("text-center", "text-2xl", "mt-4");
        Target.appendChild(p);

        Target.appendChild(NewSelect);

        const Button = document.createElement("button");
        Button.id = "additional-select-timing";
        Button.classList.add("btn");
        Button.innerText = "Search for a room";
        Target.appendChild(Button);
        SetupgetRoomsButton();
    } catch (error) {
        console.log(error);
    }
}

function SetupgetRoomsButton() {
    const RectifyButton = document.querySelector("#additional-select-timing");
    if (RectifyButton) {
        RectifyButton.addEventListener("click", ClickSearchRooms);
    }
}

async function ClickSearchRooms(event) {

    event.preventDefault();
    const TimingSelect = document.querySelector("#timing-select");
    if (TimingSelect && TimingSelect instanceof HTMLSelectElement) {
        const Timing_id = TimingSelect.value;
        const DateInput = document.querySelector("#additional-date");
        if (DateInput && DateInput instanceof HTMLInputElement) {
            const date = DateInput.value;
            try {
                let response = await axios.get("http://127.0.0.1:8000/rooms/available", {
                    params: {
                        session_date: date,
                        timing_id: Timing_id,
                    }
                });
                const AvailableRooms = response.data;
                const NewSelect = document.createElement("select");
                NewSelect.id = "select-additional-room";
                NewSelect.name = "room_id";
                NewSelect.classList.add("select", "select-bordered");
                AvailableRooms.forEach(room => {
                    var NewOption = document.createElement("option");
                    NewOption.value = room.id;
                    NewOption.innerText = room.room;
                    NewSelect.appendChild(NewOption);
                });
                const Target = document.querySelector("#insert-additional");
                if (Target) {
                    const Oldp = Target.querySelector("#p-select-additional-room");
                    const OldSelect = Target.querySelector("#select-additional-room");
                    if (Oldp) {
                        Target.removeChild(Oldp);
                    }
                    if (OldSelect) {
                        Target.removeChild(OldSelect);
                    }
                    const newp = document.createElement("p");
                    newp.innerText = "Select  Room";
                    newp.id = "p-select-additional-room";
                    newp.classList.add("text-center", "text-2xl", "mt-4");
                    Target.appendChild(newp);
                    Target.appendChild(NewSelect);
                    const Button = document.createElement("button");
                    const oldButton = Target.querySelector("#additional-room-select-button");
                    if (oldButton) {
                        Target.removeChild(oldButton);
                    }
                    Button.id = "additional-room-select-button";
                    Button.classList.add("btn");
                    Button.innerText = "Insert Additional";
                    Target.appendChild(Button);
                    SetupInsertButton();
                }
            } catch (error) {
                console.log(error);
            }
        }
    }
}

function SetupInsertButton() {
    const InserButton = document.querySelector("#additional-room-select-button");
    if (InserButton) {
        InserButton.removeEventListener("click", ClickInsert);
        InserButton.addEventListener("click", ClickInsert);
    }
}
async function ClickInsert(event) {
    const additionalForm = document.querySelector("#select-additional-props");
    const formdata = new FormData(additionalForm as HTMLFormElement);
    const teacher_id = formdata.get("additional_teacher_id");
    const module_id = formdata.get("aditional_module_id");
    const additional_type = formdata.get("additional_type");
    const additiveidDiv = document.querySelector("#additive_id");
    const additive_id = (additiveidDiv as HTMLDivElement).innerText.trim();
    const SelectedRoom = document.querySelector("#select-additional-room")
    const room_id = (SelectedRoom as HTMLSelectElement).value;
    const SelectedTiming = document.querySelector("#timing-select")
    const timing_id = (SelectedTiming as HTMLSelectElement).value;
    const DateInput = document.querySelector("#additional-date");
    const additional_date = (DateInput as HTMLInputElement).value;
    const selectSections = document.getElementById("additional-select-sections");
    const selectCompanies = document.getElementById("additional-select-companies");
    const selectedSections = new Array();
    const selectedCompanies = new Array();
    let options = (selectSections as HTMLSelectElement).options;

    for (let i = 0; i < options.length; i++) {
        if (options[i].selected && options[i] instanceof HTMLOptionElement) {
            selectedSections.push(options[i].value);
        }
    }
    options = (selectCompanies as HTMLSelectElement).options;

    for (let i = 0; i < options.length; i++) {
        if (options[i].selected && options[i] instanceof HTMLOptionElement) {
            selectedCompanies.push(options[i].value);
        }
    }
    try {
        let response = await instance.post("/additionals/create", {
            teacher_id: teacher_id,
            module_id: module_id,
            room_id: room_id,
            additive_id : additive_id,
            timing_id : timing_id,
            additional_date : additional_date,
            additional_type : additional_type,
            sections: selectedSections,
            companies: selectedCompanies,
        })
        console.log(response.data);
    } catch (error) {
        console.log(error);
    }
}





 