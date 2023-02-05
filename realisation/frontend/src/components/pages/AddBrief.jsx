import { useEffect, useState } from "react"
import axios from "axios";

export default function AddBrief(){
    const [tutor, setTutor] = useState([]);

    useEffect( () => {
        axios.get("http://127.0.0.1:8000/api/tutors")
        .then((res)=>{
            setTutor(res.data)
        })
    }, [])

    return(
        <div>
            <form method="POST" action="">
                <input type="text" name="name" placeholder="titre" />
                <input type="text" name="description" placeholder="description" />
                <input type="number" name="duration" placeholder="durée" />
                <select name="tutor" id="">
                    {tutor.map((item) => {
                        return <option value={item.id}>{item.lastname} {item.firstname}</option>
                    })}
                </select>
            </form>
        </div>
    )
}