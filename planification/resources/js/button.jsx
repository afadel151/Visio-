import React, { useState } from 'react';
import Prompt from './Prompt';

const Button = () => {
    const [isPromptOpen, setIsPromptOpen] = useState(false);

    const handlePromptChange = () => {
        setIsPromptOpen(!isPromptOpen);
    };
    
    return (
        <div className='bg-slate-500'>
            {isPromptOpen && <Prompt />}
            <button onClick={handlePromptChange} className='bg-indigo-300'>Add</button>
        </div>
    );
};

export default Button;
