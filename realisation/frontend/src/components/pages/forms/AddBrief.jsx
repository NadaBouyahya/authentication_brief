import { useEffect, useState } from "react"
import axios from "axios";

export default function AddBrief() {
    const [tutor, setTutor] = useState([]);
    const [formTutor, setFormTutor] = useState({});
    const [selectedOption, setOption] = useState();

    useEffect(() => {
        axios.get("http://127.0.0.1:8000/api/tutors")
            .then((res) => {
                setTutor(res.data)
            })
    }, [])

    const handleInput = (e) => {
        let name = e.target.name;
        let value = e.target.value;
        setOption(e.target.value);

        setFormTutor((old) => { return { ...old, [name]: value } });
    }

    const Submit = (e) => {
        e.preventDefault();
        axios.post('http://127.0.0.1:8000/api/briefs', formTutor)
            .then(() => {
                alert('added');
            })

    }


    return (
        <>
            <div className="add_brief_form_container">
                <form method="POST" action="" onSubmit={Submit}>
                    <h2>Enter brief details</h2>
                    <input type="text" name="name" placeholder="titre" value={formTutor.name} onChange={handleInput} />
                    <input type="text" name="description" placeholder="description" value={formTutor.description} onChange={handleInput} />
                    <input type="number" name="duration" placeholder="durée" value={formTutor.duration} onChange={handleInput} />
                    <select name="tutor" onChange={handleInput} value={selectedOption}>
                    <option value="">--Please select your tutor--</option>
                        {tutor.map((item) => {
                            return <option key={item.id} value={item.id}>{item.lastname} {item.firstname} </option>
                        })}
                    </select>
                    <input className="submit" type="submit" name="submit" />
                </form>
            </div>
        </>


    )
}