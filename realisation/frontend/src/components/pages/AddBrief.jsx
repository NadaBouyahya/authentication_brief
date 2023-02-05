import { useState } from "react";

export default function AddBrief(){
    const [tutorData, setTutorData] = useState({});
    axios.get()
    
    return(
        <div>
            <form action="">
                <input type="text" name="name" placeholder="titre" />
                <input type="text" name="description" placeholder="description" />
                <input type="number" name="duration" placeholder="durée" />

            </form>
        </div>
    )
}