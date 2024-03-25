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


const SelectSession = document.querySelector("#rectification-select-session"); //here

    // SelectSession.removeEventListener("click", ClickRectificationSelect);
SelectSession.addEventListener("click", ClickRectificationSelect);


async function ClickRectificationSelect(event)
{
    event.preventDefault();
    const SelectRectifiedForm = document.querySelector("#select-rectified-session-form");
    const formData = new FormData(SelectRectifiedForm);
    const session_date = formData.get("session_date");
    const timing_id = formData.get("timing_id");
    const week_id = formData.get("week_id");
    const Target = document.querySelector("#select-session");
    SelectRectifiedRoom(Target,session_date,timing_id,week_id);
}


async function SelectRectifiedRoom(Target,session_date,timing_id,week_id) {
    try {
        let response = await axios.get("http://127.0.0.1:8000/sessions/get_to_rectify",{
            params:{
                session_date: session_date,
                timing_id: timing_id,
                week_id: week_id,
            }
        });
        const sessions = response.data;
        console.log(response.date);
        const NewSelect = document.createElement("select");
        NewSelect.name = "session_id";
        NewSelect.classList.add("w-[300px]","focus:border-blue-400","mt-8","focus:border-2","rounded-xl","hover:scale-110","duration-150");
        const label = document.createElement("label");
        label.innerText = "Session";
        label.classList.add("w-[100px]");
        Target.appendChild(label);

        sessions.forEach(function (session) {
            const option = document.createElement("option");
            option.value = session.id;
            option.classList.add("rounded-xl","w-[300px]");
            if (session.sessionable_type == 'App\\Models\\Section') {
                var students = session.sessionable.section;
                var Labell = "Section";
            }
            else{
                var students = session.sessionable.company;
                var Labell = "Company";
            }
            option.textContent =Labell + ' ' +  students + ' - ' + session.teacher.teacher_name + ' - ' + session.module.module + ' - ' + session.room.room;
            NewSelect.appendChild(option);
        });
        Target.innerHTML = "";
        Target.appendChild(NewSelect);
       
    } 
    catch (error) {
        console.log(error);
    }
}