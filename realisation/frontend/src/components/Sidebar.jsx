import React from "react";
import { SidebarData } from "./SidebarData";
import { Link } from "react-router-dom";


export default function Sidebar() {
    return (
        <div className="menu_content">
            <ul className="menu_items">
                {SidebarData.map((item) => {
                    return (
                        <li><Link className="item_link" to={item.link}><span>{item.icon}</span>{item.title}</Link></li>
                    )
                })}
            </ul>
        </div>
    )
}