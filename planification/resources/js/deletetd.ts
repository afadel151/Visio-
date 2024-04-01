import axios from "axios";

async function DeleteTd(button,SectionId) 
{
    const dialogue = button.parentNode.parentNode.parentNode;
    const td = dialogue.parentNode.parentNode.parentNode;
    console.log(td);
}