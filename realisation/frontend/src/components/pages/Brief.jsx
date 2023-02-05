import React from "react";
import { useEffect, useState } from "react";
import axios from "axios";
import { Link } from "react-router-dom";

export default function Brief() {

    const [brief, setBriefs] = useState([]);

    useEffect(() => {
        axios.get('http://127.0.0.1:8000/api/briefs')
            .then((res) => {
                setBriefs(res.data)
            })
    }, [])

    return <>
        <div>
        </div>
        <Link to="/brief/add"> add brief</Link>
        <div>
            {brief.map((item) => {
                return <>
                    <h3>{item.name}</h3>
                    <p>{item.description}</p>
                    <span>durée : {item.duration} jours</span>
                </>
            })}
        </div>
    </>
}