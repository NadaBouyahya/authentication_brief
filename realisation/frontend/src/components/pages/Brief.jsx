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
        <div className="conatiner">
            <div className="brief_add_link">
                <Link to="/brief/add"> add new brief</Link>
            </div>
            <div className="briefs_mainDiv">
                {brief.map((item) => {
                    return <>
                        <div className="brief_info_container">
                            <h3>{item.name}</h3>
                            <p>{item.description}</p>
                            <span>durée : {item.duration} jours</span>
                            <div className="brief_parametres">
                                <a href="">delete</a>
                                <a href="">edit</a>
                            </div>
                        </div>

                    </>
                })}
            </div>
        </div>
    </>
}